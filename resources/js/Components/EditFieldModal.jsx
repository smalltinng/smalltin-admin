import React from 'react';

const EditQuestionModal = ({ field,  closeModal }) => {
  return (
    <div className="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
      <div className="bg-white p-5 w-1/2 max-h-full overflow-y-auto rounded-lg">
        <h2 className="text-xl font-bold mb-3">Edit Question</h2>
        <h2 className="text-sm font-bold mb-3">Question</h2>
        <input type="text" placeholder="Question" name="question"  className="border p-2 w-full mb-2" />
        {['a', 'b', 'c', 'd'].map((option, index) => (
          <div>
                    <h2 className="text-sm font-bold mb-3">{`Option ${option.toUpperCase()}`}</h2>
          <input key={index} type="text" placeholder={`Option ${option.toUpperCase()}`}   className="border p-2 w-full mb-2" />
          </div> ))}
          <div>
          <h2 className="text-sm font-bold mb-3">Answer</h2>
            <input type="text" placeholder="Answer" name="answer"  className="border p-2 w-full mb-2" />

          </div>
        <div className="flex justify-end mt-5">
          <button className="mr-2 p-2 bg-gray-500 text-white rounded" onClick={closeModal}>Cancel</button>
          <button className="p-2 bg-green-500 text-white rounded" >Save</button>
        </div>
      </div>
    </div>
  );
};

export default EditQuestionModal;
