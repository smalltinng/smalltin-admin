import React, { useState } from 'react';

const CreateFieldsModal = ({ fields, closeModal }) => {
  console.log(fields);
  const [selectedField, setSelectedField] = useState(null);

  const handleFieldChange = (event) => {
    getSubTitle(event.target.value);
  };

  const getSubTitle = (selectedFieldId) => {
    console.log(fields);

    const field = fields.find(e => e.id == selectedFieldId);
    if (field) {
      setSelectedField(field);
      console.log(field);
    } else {
      console.error(`Field with ID ${selectedFieldId} not found`);
    }
  };

  return (
    <div className="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
      <div className="bg-white p-5 rounded-lg  w-full lg:w-1/2 max-h-full overflow-y-auto">
        <h2 className="text-xl font-bold mb-3">Create New Question</h2>
        <h3>Field</h3>
        <select className="p-2 border rounded w-full mb-2" name="field_id" onChange={handleFieldChange}>
          <option value="">Select Field</option>
          {fields.map(field => (
            <option key={field.id} value={field.id}>{field.name}</option>
          ))}
        </select>
        <h3>SubField</h3>
        <select className="p-2 border rounded w-full mb-2" name="sub_fields_id">
          <option value="">Select Subfield</option>
          {selectedField && selectedField.sub_fields.map(subfield => (
            <option key={subfield.id} value={subfield.id}>{subfield.name}</option>
          ))}
        </select>
        <h3>Question</h3>
        <input type="text" placeholder="Enter The Question" name="question" className="border p-2 w-full mb-2" />
        {['a', 'b', 'c', 'd'].map((option, index) => (
          <div key={index}>
            <h2>{`Option ${option.toUpperCase()}`}</h2>
            <input type="text" placeholder={`Enter Option ${option.toUpperCase()}`} className="border p-2 w-full mb-2" />
          </div>
        ))}
        <h3>Answer</h3>
        <input type="text" placeholder="Enter The Answer e.g: a,b,c,d" name="answer"  className="border p-2 w-full mb-2" />
        <div className="flex justify-end mt-5">
          <button className="mr-2 p-2 bg-gray-500 text-white rounded" onClick={closeModal}>Cancel</button>
          <button className="p-2 bg-green-500 text-white rounded" >Create</button>
        </div>
      </div>
    </div>
  );
};

export default CreateFieldsModal;
