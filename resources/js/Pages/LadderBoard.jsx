import React, { useEffect, useState } from 'react';
import MainLayout from '@/Layouts/MainLayout';
import axios from 'axios';

const LadderBoard = () => {
  const [realTime, setRealTime] = useState([]);
  const [weeklyTop, setWeeklyTop] = useState([]);
  const [lastWeekTop, setLastWeekTop] = useState([]);

  useEffect(() => {
    fetchRealTime();
    fetchWeeklyTop();
    fetchLastWeekTop();
  }, []);

  const fetchRealTime = async () => {
    try {
      const response = await axios.get('leaderboard/realtime');
      setRealTime(response.data.data);
      console.log(response.data);
    } catch (error) {
      console.error('Error fetching real-time leaderboard:', error);
    }
  };

  const fetchWeeklyTop = async () => {
    try {
      const response = await axios.get('leaderboard/weekly');
      setWeeklyTop(response.data.data);
      console.log(response.data.data);
    } catch (error) {
      console.error('Error fetching weekly top:', error);
    }
  };

  const fetchLastWeekTop = async () => {
    try {
      const response = await axios.get('leaderboard/last-week');
      setLastWeekTop(response.data.data);
    } catch (error) {
      console.error('Error fetching last week top:', error);
    }
  };

  return (
    <MainLayout title='LadderBoard'>
      <div className='p-5'>
        <div className='flex flex-col md:flex-row md:gap-5'>
          {/* Real Time Section */}
          <section className='flex-1 mb-5 md:mb-0'>
            <h2 className='text-2xl font-semibold mb-3'>Real Time</h2>
            <div className='h-[300px] md:h-[500px] rounded-lg bg-white p-4 overflow-auto'>
              {realTime.length > 0 ? (
                <ul className='list-disc pl-5'>
                  {realTime.map((user, index) => (
                    <li key={index} className='py-1'>{user.user.username} - {user.correct_answers} points</li>
                  ))}
                </ul>
              ) : (
                <p>No data available</p>
              )}
            </div>
          </section>
          
          {/* Weekly Top Section */}
          <section className='flex-1 mb-5 md:mb-0'>
            <h2 className='text-2xl font-semibold mb-3'>First 10 People For the Week</h2>
            <div className='h-[300px] md:h-[500px] rounded-lg overflow-auto bg-white p-4'>
              {weeklyTop.length > 0 ? (
                <ul className='list-none'>
                  {weeklyTop.map((user, index) => (
                    <li key={index} className='flex flex-col mb-4 bg-slate-200 p-4 rounded-lg'>
                      <h1 className='text-xl mb-1'>{user.user.username.toUpperCase()}</h1>
                      <div className='text-xs'>
                        <p>Total Correct: {user.correct_answers}</p>
                        <p>Total Incorrect: {user.incorrect_answers}</p>
                        <p>Total Attempt: {user.total_attempts}</p>
                      </div>
                    </li>
                  ))}
                </ul>
              ) : (
                <p>No data available</p>
              )}
            </div>
          </section>

          {/* Last Week Top Section */}
          <section className='flex-1'>
            <h2 className='text-2xl font-semibold mb-3'>Last Week 10 People</h2>
            <div className='h-[300px] md:h-[500px] rounded-lg overflow-auto bg-white p-4'>
              {lastWeekTop.length > 0 ? (
                <ul className='list-disc pl-5'>
                  {lastWeekTop.map((user, index) => (
                    <li key={index} className='py-1'>{user.user.name} - {user.correct_answers} points</li>
                  ))}
                </ul>
              ) : (
                <p>No data available</p>
              )}
            </div>
          </section>
        </div>
      </div>
    </MainLayout>
  );
};

export default LadderBoard;
