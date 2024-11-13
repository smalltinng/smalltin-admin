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
  const [totalQuestion, setTotalQuestion] = useState(0);
  const [showCreateModal, setShowCreateModal] = useState(false);
  const [showEditModal, setShowEditModal] = useState(false);
  const [showViewModal, setShowViewModal] = useState(false);
  const [currentQuestion, setCurrentQuestion] = useState(null);
  const [fields, setFields] = useState([]);
  const [selectedField, setSelectedField] = useState(null);
  const [selectedSubfield, setSelectedSubfield] = useState('');

  const handleQuestion = (page) => {
    if (selectedField && selectedSubfield) {
      searchQuery(null, selectedSubfield, page);
    } else if (selectedField) {
      searchQuery(selectedField, null, page);
    } else {
      fetchQuestions(page);
    }
  };

  useEffect(() => {
    handleQuestion(currentPage);
    fetchFields();
  }, [currentPage, selectedField, selectedSubfield]);

  const fetchQuestions = async (page) => {
    try {
      const response = await axios.get(`questions`, { params: { page } });
      setQuestions(response.data.data.data);
      setTotalPages(response.data.data.last_page);
      setTotalQuestion(response.data.data.total);
    } catch (error) {
      console.error('Error fetching questions:', error);
    }
  };

  const searchQuery = async (selectedField, selectedSubfield, page = 1) => {
    try {
      const params = {
        field_id: selectedField ? selectedField.id : '',
        subfield_id: selectedSubfield ? selectedSubfield.id : '',
        page,
      };
      const response = await axios.get('questions-query', { params });
      setQuestions(response.data.data.data);
      setTotalPages(response.data.data.last_page);
      setTotalQuestion(response.data.data.total);
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

  const handleFieldChange = (event) => {
    const selectedFieldId = event.target.value;
    const field = fields.find(f => f.id === parseInt(selectedFieldId));
    setCurrentPage(1);
    setSelectedField(field || null);
    setSelectedSubfield('');
    handleQuestion(currentPage);
  };

  const handleSubfieldChange = (event) => {
    const selectedFieldId = event.target.value;
    setCurrentPage(1);
    const subfield = selectedField.sub_fields.find(f => f.id === parseInt(selectedFieldId));
    setSelectedSubfield(subfield);
    handleQuestion(currentPage);
  };

  const handleView = (question) => {
    setCurrentQuestion(question);
    setShowViewModal(true);
  };

  const handleEdit = (question) => {
    setCurrentQuestion(question);
    setShowEditModal(true);
  };

  const handleDelete = async (id) => {
    if (confirm('Are you sure you want to delete this question?')) {
      setQuestions(questions.filter(question => question.id !== id));

      try {
        const response = await axios.delete(`question/${id}`);
        console.log(response.data);
      } catch (error) {
        if (error.response) {
          console.error('Error response:', error.response.data);
        } else if (error.request) {
          console.error('No response received:', error.request);
        } else {
          console.error('Error setting up request:', error.message);
        }
      }
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

  const handleClose = () => {
    handleQuestion(currentPage);
    setShowEditModal(false);
    setShowViewModal(false);
    setShowCreateModal(false);
  };

  return (
    <MainLayout title='Question Bank'>
      <div className="p-4">
        <div className="flex flex-col md:flex-row md:justify-between mb-4">
          <div>
            <h2 className="text-2xl font-bold">Question Bank</h2>
            <span>Total Question: {totalQuestion}</span>
          </div>
          <button className="mt-4 md:mt-0 p-2 bg-[#285B35] text-white rounded" onClick={() => setShowCreateModal(true)}>Create New Question</button>
        </div>
        <div className="mb-4">
          <input type="text" placeholder="Search..." className="border p-2 w-full mb-2" />
          <div className="flex flex-col md:flex-row gap-2">
            <select className="p-2 border rounded w-full" onChange={handleFieldChange} value={selectedField ? selectedField.id : ''}>
              <option value="">Select Field</option>
              {fields.map(field => (
                <option key={field.id} value={field.id}>{field.name}</option>
              ))}
            </select>
            <select className="p-2 border rounded w-full" onChange={handleSubfieldChange} value={selectedSubfield.id || ''}>
              <option value="">Select Subfield</option>
              {selectedField && selectedField.sub_fields ? (
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
                <th className="py-2">No</th>
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
                    <td className="border px-4 py-2">{question.id}</td>
                    <td className="border px-4 py-2">{question.question}</td>
                    <td className="border px-4 py-2">{question.field}</td>
                    <td className="border px-4 py-2">{question.subfield}</td>
                    <td className="border px-4 py-2 flex flex-col md:flex-row gap-2">
                      <button className="p-1 bg-green-500 text-white rounded" onClick={() => handleView(question)}>View</button>
                      <button className="p-1 bg-yellow-500 text-white rounded" onClick={() => handleEdit(question)}>Edit</button>
                      <button className="p-1 bg-red-500 text-white rounded" onClick={() => handleDelete(question.id)}>Delete</button>
                    </td>
                  </tr>
                ))
              ) : (
                <tr>
                  <td colSpan="5" className="text-center py-4">No questions found</td>
                </tr>
              )}
            </tbody>
          </table>
          <div className="flex flex-col md:flex-row justify-between mt-4">
            <button onClick={goToPreviousPage} disabled={currentPage === 1} className="p-2 bg-gray-500 text-white rounded mb-2 md:mb-0">Previous</button>
            <span>Page {currentPage} of {totalPages}</span>
            <button onClick={goToNextPage} disabled={currentPage === totalPages} className="p-2 bg-gray-500 text-white rounded mt-2 md:mt-0">Next</button>
          </div>
        </div>
      </div>
      {showCreateModal && <CreateQuestionModal closeModal={handleClose} fields={fields} onClose={() => setShowCreateModal(false)} />}
      {showEditModal && <EditQuestionModal closeModal={handleClose} question={currentQuestion} />}
      {showViewModal && <ViewQuestionModal closeModal={handleClose} question={currentQuestion} />}
    </MainLayout>
  );
};

export default QuestionBank;
