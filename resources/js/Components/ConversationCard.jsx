import React from 'react';
import moment from 'moment';

const ConversationCard = ({ conversation, selectedConversation }) => {
  const isSelected = selectedConversation?.id === conversation.id;

  return (
    <div
      key={conversation.id}
      className={`flex items-center justify-between mb-4 p-1 border-b ${
        isSelected ? 'bg-slate-300 rounded-lg' : ''
      }`}
    >
      <div className='flex items-center'>
        <div
          className={`rounded-full h-10 w-10 ${
            isSelected ? 'bg-white' : 'bg-slate-300'
          }`}
        ></div>
        <div className='flex flex-col ml-2 justify-start items-start'>
          <div className='font-bold text-xs truncate'>
            {conversation.user.username}
          </div>
          <div className='text-sm text-gray-500'>
            {conversation.last_message.message || 'No messages'}
          </div>
        </div>
      </div>
      <div className='text-xs text-gray-400'>
        {conversation.last_message ? moment(conversation.last_message.created_at).fromNow() : ''}
      </div>
    </div>
  );
};

export default ConversationCard;
