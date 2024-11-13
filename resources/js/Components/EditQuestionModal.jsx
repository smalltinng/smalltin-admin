import React, { useState, useEffect } from 'react';
import axios from 'axios';

const EditQuestionModal = ({ question, closeModal }) => {
  const [quest, setQuestion] = useState(question.question ?? '');
  const [options, setOptions] = useState({
    a: question.a ?? '',
    b: question.b ?? '',
    c: question.c ?? '',
    d: question.d ?? '',
  });
  const [answer, setAnswer] = useState(question.answer ?? '');
  const [error, setError] = useState('');

  useEffect(() => {
    // This effect will run when the `question` prop changes
    setQuestion(question.question ?? '');
    setOptions({
      a: question.a ?? '',
      b: question.b ?? '',
      c: question.c ?? '',
      d: question.d ?? '',
    });
    setAnswer(question.answer ?? '');
  }, [question]);

  const handleInputChange = (event) => {
    const { name, value } = event.target;
    if (name === 'question') {
      setQuestion(value);
    } else if (name === 'answer') {
      setAnswer(value);
    } else if (['a', 'b', 'c', 'd'].includes(name)) {
      setOptions(prevOptions => ({ ...prevOptions, [name]: value }));
    }
  };

  const handleSubmit = async (event) => {
    event.preventDefault();
  
    const data = {
      question: quest,
      a: options.a,
      b: options.b,
      c: options.c ?? null, // Allow null if not provided
      d: options.d ?? null, // Allow null if not provided
      answer
    };
  
    try {
      const response = await axios.put(`edit-question/${question.id}`, data, {
        headers: { 'Content-Type': 'application/json' }
      });
      console.log('Question updated successfully:', response.data);
      closeModal(); // Close the modal on successful update
    } catch (error) {
      console.error('Error updating question:', error);
      if (error.response) {
        // Server responded with a status code other than 2xx
        console.error('Error response:', error.response.data);
      } else if (error.request) {
        // Request was made but no response received
        console.error('No response received:', error.request);
      } else {
        // Something else happened
        console.error('Error setting up request:', error.message);
      }
      setError('An error occurred while updating the question. Please try again.');
    }
  };
  
  

  return (
    <div className="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
      <div className="bg-white p-5 w-1/2 max-h-full overflow-y-auto rounded-lg">
        <h2 className="text-xl font-bold mb-3">Edit Question</h2>
        {error && <p className="text-red-500 mb-3">{error}</p>}
        <form onSubmit={handleSubmit}>
          <h2 className="text-sm font-bold mb-3">Question</h2>
          <input
            type="text"
            name="question"
            placeholder="Question"
            value={quest}
            onChange={handleInputChange}
            className="border p-2 w-full mb-2"
          />
          {['a', 'b', 'c', 'd'].map((option, index) => (
            <div key={index}>
              <h2 className="text-sm font-bold mb-3">{`Option ${option.toUpperCase()}`}</h2>
              <input
                type="text"
                name={option}
                placeholder={`Option ${option.toUpperCase()}`}
                value={options[option]}
                onChange={handleInputChange}
                className="border p-2 w-full mb-2"
              />
            </div>
          ))}
          <div>
            <h2 className="text-sm font-bold mb-3">Answer</h2>
            <input
              type="text"
              name="answer"
              placeholder="Answer"
              value={answer}
              onChange={handleInputChange}
              className="border p-2 w-full mb-2"
            />
          </div>
          <div className="flex justify-end mt-5">
            <button
              type="button"
              className="mr-2 p-2 bg-gray-500 text-white rounded"
              onClick={closeModal}
            >
              Cancel
            </button>
            <button
              type="submit"
              className="p-2 bg-green-500 text-white rounded"
            >
              Save
            </button>
          </div>
        </form>
      </div>
    </div>
  );
};

export default EditQuestionModal;
