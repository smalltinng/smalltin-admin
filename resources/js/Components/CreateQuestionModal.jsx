import React, { useState } from 'react';
import axios from 'axios';

const CreateQuestionModal = ({ fields, closeModal }) => {
  const [selectedField, setSelectedField] = useState(null);
  const [selectedSubfield, setSelectedSubfield] = useState('');
  const [question, setQuestion] = useState('');
  const [options, setOptions] = useState({ a: '', b: '', c: '', d: '' });
  const [answer, setAnswer] = useState('');

  const handleFieldChange = (event) => {
    const fieldId = event.target.value;
    getSubTitle(fieldId);
  };

  const getSubTitle = (selectedFieldId) => {
    const field = fields.find(e => e.id === parseInt(selectedFieldId));
    if (field) {
      setSelectedField(field);
    } else {
      setSelectedField(null);
    }
  };

  const handleSubfieldChange = (event) => {
    setSelectedSubfield(event.target.value);
  };

  const handleOptionChange = (event) => {
    setOptions(prevOptions => ({
      ...prevOptions,
      [event.target.name]: event.target.value
    }));
  };

  const handleSubmit = async (event) => {
    event.preventDefault();

    // Validate data before sending
    if (!selectedField || !selectedSubfield || !question || !options || !answer) {
      console.error('Please fill in all required fields.');
      return;
    }

    // Prepare the data to send
    const data = {
      field_id: selectedField.id,
      sub_fields_id: selectedSubfield,
      question,
      a: options.a,
      b: options.b,
      c: options.c ?? null, // Allow null if not provided
      d: options.d ?? null, // Allow null if not provided
      answer
    };

    try {
      // Send the POST request
      const response = await axios.post('question', data);
      console.log('Question created successfully:', response.data);
      // Provide feedback to the user
      alert('Question created successfully!');
      // Close the modal
      closeModal();
    } catch (error) {
      console.error('Error creating question:', error);
      // Provide feedback on error
      alert('Error creating question. Please try again.');
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
    }
  };


  return (
    <div className="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
      <div className="bg-white p-5 rounded-lg w-full lg:w-1/2 max-h-full overflow-y-auto">
        <h2 className="text-xl font-bold mb-3">Create New Question</h2>
        <form onSubmit={handleSubmit}>
          <div className="mb-3">
            <h3>Field</h3>
            <select className="p-2 border rounded w-full mb-2" name="field_id" onChange={handleFieldChange} value={selectedField?.id || ''}>
              <option value="">Select Field</option>
              {fields.map(field => (
                <option key={field.id} value={field.id}>{field.name}</option>
              ))}
            </select>
          </div>

          <div className="mb-3">
            <h3>SubField</h3>
            <select className="p-2 border rounded w-full mb-2" name="sub_fields_id" onChange={handleSubfieldChange} value={selectedSubfield}>
              <option value="">Select Subfield</option>
              {selectedField?.sub_fields.map(subfield => (
                <option key={subfield.id} value={subfield.id}>{subfield.name}</option>
              ))}
            </select>
          </div>

          <div className="mb-3">
            <h3>Question</h3>
            <input type="text" placeholder="Enter The Question" name="question" className="border p-2 w-full" value={question} onChange={(e) => setQuestion(e.target.value)} required />
          </div>

          <div className="mb-3">
            {['a', 'b', 'c', 'd'].map((option, index) => (
              <div key={index} className="mb-2">
                <h3>{`Option ${option.toUpperCase()}`}</h3>
                <input
                  type="text"
                  placeholder={`Enter Option ${option.toUpperCase()}`}
                  name={option}
                  className="border p-2 w-full"
                  value={options[option]}
                  onChange={handleOptionChange}
                  required
                />
              </div>
            ))}
          </div>

          <div className="mb-3">
            <h3>Answer</h3>
            <input type="text" placeholder="Enter The Answer e.g: a,b,c,d" name="answer" className="border p-2 w-full" value={answer} onChange={(e) => setAnswer(e.target.value)} required />
          </div>

          <div className="flex justify-end mt-5">
            <button type="button" className="mr-2 p-2 bg-gray-500 text-white rounded" onClick={closeModal}>Cancel</button>
            <button type="submit" className="p-2 bg-green-500 text-white rounded">Create</button>
          </div>
        </form>
      </div>
    </div>
  );
};

export default CreateQuestionModal;
