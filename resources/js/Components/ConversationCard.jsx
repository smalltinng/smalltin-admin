import React from 'react';
import moment from 'moment';

const ConversationCard = ({ conversation, selectedConversation }) => {
  const isSelected = selectedConversation?.id === conversation.id;

  return (
    <div
      key={conversation.id}
      className={`flex items-center justify-between mb-4 p-2 border-b ${
        isSelected ? 'bg-slate-300 rounded-lg' : ''
      }`}
    >
      <div className="flex items-center w-full">
        <div
          className={`rounded-full h-10 w-10 flex-shrink-0 ${
            isSelected ? 'bg-white' : 'bg-slate-300'
          }`}
        ></div>
        <div className="flex flex-col ml-3 justify-center items-start w-full">
          <div className="font-bold text-xs truncate w-full">
            {conversation.user.username}
          </div>
          <div className="text-sm text-gray-500 truncate w-full">
            {conversation.last_message.message || 'No messages'}
          </div>
        </div>
      </div>
      <div className="flex flex-col items-end text-xs text-gray-400 ml-2 whitespace-nowrap">
        <div>{conversation.last_message ? moment(conversation.last_message.created_at).fromNow() : ''}</div>
        {/* Pending message count */}
        {conversation.pendingMessages > 0 && (
          <div className="bg-red-500 text-white rounded-full text-xs w-5 h-5 flex items-center justify-center mt-1">
            {conversation.pendingMessages}
          </div>
        )}
      </div>
    </div>
  );
};

export default ConversationCard;
