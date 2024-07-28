import React, { useState, useEffect } from 'react';
import axios from 'axios';
import MainLayout from '@/Layouts/MainLayout';
import CreateQuestionModal from '@/Components/CreateQuestionModal';
import EditQuestionModal from '@/Components/EditQuestionModal';
import ViewQuestionModal from '@/Components/ViewQuestionModal';

const QuestionBank = () => {
  const [questions, setQuestions] = useState([]);
  const [currentPage, setCurrentPage] = useState(1);
  const [totalPages, setTotalPages] = useState(1);
  const [showCreateModal, setShowCreateModal] = useState(false);
  const [showEditModal, setShowEditModal] = useState(false);
  const [showViewModal, setShowViewModal] = useState(false);
  const [currentQuestion, setCurrentQuestion] = useState(null);
  const [newQuestion, setNewQuestion] = useState({ field_id: '', sub_fields_id: '', question: '', a: '', b: '', c: '', d: '', answer: '' });
  const [fields, setFields] = useState([]);
  const [selectedField, setSelectedField] = useState(null);
  const [totalQuestion, setTotalQuesstion] = useState(0);

  const handleFieldChange = (event) => {
    const selectedFieldId = event.target.value;
    getSubTitle(selectedFieldId);
  };

  const getSubTitle = (selectedFieldId) => {
    const field = fields.find(e => e.id == selectedFieldId);
    if (field) {
      setSelectedField(field);
    } else {
      console.error(`Field with ID ${selectedFieldId} not found`);
    }
  };

  useEffect(() => {
    fetchQuestions(currentPage);
    fetchFields();
  }, [currentPage]);

  const fetchQuestions = async (page) => {
    try {
      const response = await axios.get(`questions?page=${page}`);
     setQuestions(response.data.data.data);
      setTotalPages(response.data.data.last_page);
      console.log(response.data);
    } catch (error) {
      console.error('Error fetching questions:', error);
    }
  };

  const fetchFields = async () => {
    try {
      const response = await axios.get('/api/fields');
      setFields(response.data.fields);
    } catch (error) {
      console.error('Error fetching fields:', error);
    }
  };

  const handleView = (question) => {
    setCurrentQuestion(question);
    setShowViewModal(true);
  };

  const handleEdit = (question) => {
    setCurrentQuestion(question);
    setShowEditModal(true);
  };

  const handleDelete = (id) => {
    if (confirm('Are you sure you want to delete this question?')) {
      setQuestions(questions.filter((question) => question.id !== id));
    }
  };

  const goToNextPage = () => {
    if (currentPage < totalPages) {
      setCurrentPage(currentPage + 1);
    }
  };

  const goToPreviousPage = () => {
    if (currentPage > 1) {
      setCurrentPage(currentPage - 1);
    }
  };

  return (
    <MainLayout title='Question Bank'>
      <div className="p-4">
        <div className="flex justify-between mb-4">
          <div>
          <h2 className="text-2xl font-bold">Question Bank</h2>
          <span>Total Questions: {totalQuestion}</span>
          </div>
          <button className="p-2 bg-[#285B35] text-white rounded" onClick={() => setShowCreateModal(true)}>Create New Question</button>
        </div>
        <div className="mb-4">
          <input type="text" placeholder="Search..." className="border p-2 w-full mb-2" />
          <div className="flex gap-2">
            <select className="p-2 border rounded w-full" onChange={handleFieldChange}>
              <option value="">Select Field</option>
              {fields.length > 0 ? (
                fields.map(field => (
                  <option key={field.id} value={field.id}>{field.name}</option>
                ))
              ) : (
                <option disabled>No fields available</option>
              )}
            </select>
            <select className="p-2 border rounded w-full">
              <option value="">Select Subfield</option>
              {selectedField && selectedField.sub_fields.length > 0 ? (
                selectedField.sub_fields.map(subfield => (
                  <option key={subfield.id} value={subfield.id}>{subfield.name}</option>
                ))
              ) : (
                <option disabled>No subfields available</option>
              )}
            </select>
          </div>
        </div>
        <div className="bg-white rounded shadow">
          <table className="min-w-full bg-white">
            <thead>
              <tr>
                <th className="py-2">Question</th>
                <th className="py-2">Field</th>
                <th className="py-2">Subfield</th>
                <th className="py-2">Actions</th>
              </tr>
            </thead>
            <tbody>
              {questions.length > 0 ? (
                questions.map(question => (
                  <tr key={question.id}>
                    <td className="border px-4 py-2">{question.question}</td>
                    <td className="border px-4 py-2">{question.field}</td>
                    <td className="border px-4 py-2">{question.subfield}</td>
                    <td className="border px-4 py-2 flex justify-around">
                      <button className="p-1 bg-green-500 text-white rounded" onClick={() => handleView(question)}>View</button>
                      <button className="p-1 bg-yellow-500 text-white rounded" onClick={() => handleEdit(question)}>Edit</button>
                      <button className="p-1 bg-red-500 text-white rounded" onClick={() => handleDelete(question.id)}>Delete</button>
                    </td>
                  </tr>
                ))
              ) : (
                <tr>
                  <td colSpan="4" className="text-center py-4">No questions available</td>
                </tr>
              )}
            </tbody>
          </table>
        </div>
        <div className="flex justify-between mt-4">
          <button onClick={goToPreviousPage} disabled={currentPage === 1} className="p-2 bg-gray-500 text-white rounded">Previous</button>
          <span>Page {currentPage} of {totalPages}</span>
          <button onClick={goToNextPage} disabled={currentPage === totalPages} className="p-2 bg-gray-500 text-white rounded">Next</button>
        </div>
      </div>
      {showCreateModal && (
        <CreateQuestionModal
          fields={fields}
          closeModal={() => setShowCreateModal(false)}
        />
      )}
      {showEditModal && (
        <EditQuestionModal
          question={currentQuestion}
          closeModal={() => setShowEditModal(false)}
        />
      )}
      {showViewModal && (
        <ViewQuestionModal
          question={currentQuestion}
          closeModal={() => setShowViewModal(false)}
        />
      )}
    </MainLayout>
  );
  
};

export default QuestionBank;
