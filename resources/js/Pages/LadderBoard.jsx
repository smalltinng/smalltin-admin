import React, { useEffect, useState } from 'react';
import MainLayout from '@/Layouts/MainLayout';
import axios from 'axios';
import {
  RiMedalFill,
  RiUser3Fill,
  RiMailFill,
  RiCheckboxCircleFill,
  RiEdit2Fill,
  RiMoneyDollarCircleFill
} from "@remixicon/react";

const LadderBoard = () => {
  const [leaderboardData, setLeaderboardData] = useState([]);
  const [viewType, setViewType] = useState('realtime');
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    fetchLeaderboardData(viewType);
  }, [viewType]);

  const fetchLeaderboardData = async (type) => {
    setLoading(true);
    try {
      let endpoint = '';
      switch (type) {
        case 'realtime':
          endpoint = 'leaderboard/realtime';
          break;
        case 'monthly':
          endpoint = 'leaderboard/monthly';
          break;
        case 'last-month':
          endpoint = 'leaderboard/last-month';
          break;
        default:
          endpoint = 'leaderboard/realtime';
      }

      const response = await axios.get(endpoint);
      setLeaderboardData(response.data.data || []);
      setLoading(false);
    } catch (error) {
      console.error(`Error fetching ${type} leaderboard:`, error);
      setLoading(false);
    }
  };

  const getViewTitle = () => {
    switch (viewType) {
      case 'realtime':
        return 'Real Time Leaderboard';
      case 'monthly':
        return 'Monthly Top Performers';
      case 'last-month':
        return 'Last Month Top Performers';
      default:
        return 'Leaderboard';
    }
  };

  return (
    <MainLayout title='LadderBoard'>
      <div className='p-5'>
        <div className='flex flex-col md:flex-row justify-between items-start md:items-center mb-6'>
          <h1 className='text-2xl font-bold mb-4 md:mb-0'>{getViewTitle()}</h1>

          <div className='relative'>
            <select
              value={viewType}
              onChange={(e) => setViewType(e.target.value)}
              className='block appearance-none w-full md:w-48 bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-blue-500'
            >
              <option value="realtime">Real Time</option>
              <option value="monthly">This Month</option>
              <option value="last-month">Last Month</option>
            </select>
            <div className='pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700'>
              <svg className='fill-current h-4 w-4' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'>
                <path d='M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z' />
              </svg>
            </div>
          </div>
        </div>

        {loading ? (
          <div className='flex justify-center items-center h-64'>
            <div className='animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-blue-500'></div>
          </div>
        ) : leaderboardData.length > 0 ? (
          <div className='bg-white rounded-lg shadow overflow-hidden'>
            <div className='overflow-x-auto'>
              <table className='min-w-full divide-y divide-gray-200'>
                <thead className='bg-gray-50'>
                  <tr>
                    <th scope='col' className='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>Rank</th>
                    <th scope='col' className='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>User</th>
                    <th scope='col' className='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>Email</th>
                    <th scope='col' className='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>Correct Answers</th>
                    <th scope='col' className='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>Actions</th>
                  </tr>
                </thead>
                <tbody className='bg-white divide-y divide-gray-200'>
                  {leaderboardData.map((user, index) => (
                    <tr key={index} className={index % 2 === 0 ? 'bg-white' : 'bg-gray-50'}>
                      <td className='px-6 py-4 whitespace-nowrap'>
                        <div className='flex items-center'>
                          {index < 3 ? (
                            <RiMedalFill className={`h-5 w-5 ${index === 0 ? 'text-yellow-500' :
                                index === 1 ? 'text-gray-400' : 'text-amber-700'
                              }`} />
                          ) : (
                            <span className='text-gray-500'>{index + 1}</span>
                          )}
                        </div>
                      </td>
                      <td className='px-6 py-4 whitespace-nowrap'>
                        <div className='flex items-center'>
                          {user.user.profile_pic ? (
                            <img
                              className='h-10 w-10 rounded-full object-cover mr-3'
                              src={user.user.profile_pic}
                              alt={user.user.username}
                            />
                          ) : (
                            <div className='h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center mr-3'>
                              <RiUser3Fill className='h-5 w-5 text-blue-500' />
                            </div>
                          )}
                          <div>
                            <div className='text-sm font-medium text-gray-900'>{user.user.username}</div>
                            {viewType !== 'realtime' && (
                              <div className='text-sm text-gray-500'>Attempts: {user.total_attempts}</div>
                            )}
                          </div>
                        </div>
                      </td>
                      <td className='px-6 py-4 whitespace-nowrap'>
                        <div className='flex items-center'>
                          <RiMailFill className='h-4 w-4 text-gray-400 mr-2' />
                          <span className='text-sm text-gray-900'>{user.user.email}</span>
                        </div>
                      </td>
                      <td className='px-6 py-4 whitespace-nowrap'>
                        <div className='flex items-center'>
                          <RiCheckboxCircleFill className='h-4 w-4 text-green-500 mr-2' />
                          <span className='text-sm text-gray-900'>{user.correct_answers}</span>
                        </div>
                      </td>
                      <td className='px-6 py-4 whitespace-nowrap text-sm font-medium'>
                        <div className='flex space-x-3'>
                          <button className='text-blue-600 hover:text-blue-900'>
                            <RiEdit2Fill className='h-5 w-5' />
                          </button>
                          <button className='text-green-600 hover:text-green-900'>
                            <RiMoneyDollarCircleFill className='h-5 w-5' />
                          </button>
                        </div>
                      </td>
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
          </div>
        ) : (
          <div className='bg-white rounded-lg shadow p-6 text-center'>
            <p className='text-gray-500'>No data available for this view</p>
          </div>
        )}
      </div>
    </MainLayout>
  );
};

export default LadderBoard;