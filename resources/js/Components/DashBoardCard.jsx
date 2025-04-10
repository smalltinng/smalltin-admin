import React from 'react';

export default function DashBoardCard({ title, subTitle, icon, colorClass, iconBg }) {
  return (
    <div className={`p-6 rounded-lg shadow-sm ${colorClass}`}>
      <div className="flex items-center justify-between">
        <div className={`p-3 rounded-full ${iconBg}`}>
          {icon}
        </div>
        <div className="text-right">
          <p className="text-sm font-medium text-gray-500">{title}</p>
          <p className="mt-1 text-2xl font-semibold">{subTitle}</p>
        </div>
      </div>
    </div>
  );
}