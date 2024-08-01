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
      <div className='flex gap-5 content-center p-5'>
        <section className='flex flex-col'>
          <h2 className='text-2xl font-semibold mb-3'>Real Time</h2>
          <div className='h-[500px] w-[500px] rounded-lg bg-white p-4'>
            {realTime.length > 0 ? (
              <ul>
                {realTime.map((user, index) => (
                  <li key={index}>{user.user.username} - {user.correct_answers} points</li>
                ))}
              </ul>
            ) : (
              <p>No data available</p>
            )}
          </div>
        </section>
        <section className='flex flex-col gap-5'>
          <div>
            <h2 className='text-2xl font-semibold mb-3'>First 10 People For the Week</h2>
            <div className='h-[300px] w-[500px] rounded-lg overflow-auto bg-white p-4'>
              {weeklyTop.length > 0 ? (
                <ul>
                  {weeklyTop.map((user, index) => (
                    <li key={index}>
                  <div className='h-16 m-2 flex flex-col bg-slate-200 justify-center   rounded-lg items-start px-6 '>
                 <h1 className='text-xl'>{user.user.username.toUpperCase()}</h1> 
               <div className='flex text-xs gap-2'>
                 Total Correct: <p>{user.correct_answers}</p>
                 Total Incorrect:<p>{user.incorrect_answers}</p> 
                 Total Attepmt:{user.total_attempts} 
               </div>
                  </div>
                      
                      </li>
                  ))}
                </ul>
              ) : (
                <p>No data available</p>
              )}
            </div>
          </div>
          <div>
            <h2 className='text-2xl font-semibold mb-3'>Last Week 10 People</h2>
            <div className='h-[300px] w-[500px] rounded-lg bg-white p-4'>
              {lastWeekTop.length > 0 ? (
                <ul>
                  {lastWeekTop.map((user, index) => (
                    <li key={index}>{user.user.name} - {user.correct_answers} points</li>
                  ))}
                </ul>
              ) : (
                <div >
            
                <p>No data available</p>
                </div>
              )}
            </div>
          </div>
        </section>
      </div>
    </MainLayout>
  );
};

export default LadderBoard;
