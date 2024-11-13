import React from 'react';

const ViewQuestionModal = ({ question, closeModal }) => {
  return (
    <div className="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
      <div className="bg-white p-5 rounded-lg">
        <h2 className="text-xl font-bold mb-3">View Question</h2>
        <div className="mb-2">
          <strong>Question:</strong> {question.question}
        </div>
        <div className="mb-2">
          <strong>Options:</strong>
          <ul className="list-disc ml-5">
            <li>A) {question.a}</li>
            <li>B) {question.b}</li>
            <li>C) {question.c}</li>
            <li>D) {question.d}</li>
          </ul>
        </div>
        <div className="mb-2">
          <strong>Answer:</strong> {question.answer.toUpperCase()}
        </div>
        <div className="flex justify-end mt-5">
          <button className="p-2 bg-gray-500 text-white rounded" onClick={closeModal}>Close</button>
        </div>
      </div>
    </div>
  );
};

export default ViewQuestionModal;
