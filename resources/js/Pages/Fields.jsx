import React, { useState, useEffect } from 'react';
import axios from 'axios';
import MainLayout from '@/Layouts/MainLayout';
import CreateFieldModal from '@/Components/CreateFieldModal';
import EditFieldModal from '@/Components/EditFieldModal';

const FieldBank = () => {
  const [Fields, setAllFields] = useState([]);
  const [currentPage, setCurrentPage] = useState(1);
  const [totalPages, setTotalPages] = useState(1);
  const [totalField, setTotalField] = useState(0);
  const [showCreateModal, setShowCreateModal] = useState(false);
  const [showEditModal, setShowEditModal] = useState(false);
  const [currentField, setCurrentField] = useState(null);
  const [expandedFieldId, setExpandedFieldId] = useState(null);
  const [currentSubField, setCurrentSubField] = useState(null);
  const [showEditSubFieldModal, setShowEditSubFieldModal] = useState(false);

  useEffect(() => {
    fetchAllFields(currentPage);
  }, [currentPage]);

  const fetchAllFields = async (page) => {
    try {
      const response = await axios.get(`all-fields?page=${page}`);
      setAllFields(response.data.fields.data);
      setTotalPages(response.data.fields.last_page);
      setTotalField(response.data.fields.total);
    } catch (error) {
      console.error('Error fetching Fields:', error);
    }
  };

  const toggleExpandField = (fieldId) => {
    setExpandedFieldId(expandedFieldId === fieldId ? null : fieldId);
  };

  const handleView = (Field) => {
    setCurrentField(Field);
    // Implement the logic for the View action here
  };

  const handleEdit = (Field) => {
    setCurrentField(Field);
    setShowEditModal(true);
  };

  const handleDelete = (id) => {
    if (confirm('Are you sure you want to delete this Field?')) {
      setAllFields(Fields.filter((Field) => Field.id !== id));
      // Optionally, implement a DELETE request to your API here
    }
  };

  const handleEditSubField = (subField) => {
    setCurrentSubField(subField);
    setShowEditSubFieldModal(true);
  };

  const handleDeleteSubField = (fieldId, subFieldId) => {
    if (confirm('Are you sure you want to delete this Subfield?')) {
      setAllFields((prevFields) => 
        prevFields.map((field) => 
          field.id === fieldId 
            ? { ...field, sub_fields: field.sub_fields.filter(subField => subField.id !== subFieldId) }
            : field
        )
      );
      // Optionally, implement a DELETE request to your API here
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
    <MainLayout title='Fields Bank'>
      <div className="p-4">
        <div className="flex justify-between mb-4">
          <div>
            <h2 className="text-2xl font-bold">Field Bank</h2>
            <span>Total Fields: {totalField}</span>
          </div>
          <button className="p-2 bg-[#285B35] text-white rounded" onClick={() => setShowCreateModal(true)}>Create New Fields</button>
        </div>
        <div className="mb-4">
          <input type="text" placeholder="Search..." className="border p-2 w-full mb-2" />
        </div>
        <div className="bg-white rounded shadow">
          <table className="min-w-full bg-white">
            <thead>
              <tr>
                <th className="py-2">No</th>
                <th className="py-2">Field</th>
                <th className="py-2">Color</th>
                <th className="py-2">Subfield Count</th>
                <th className="py-2">Actions</th>
              </tr>
            </thead>
            <tbody>
              {Fields.length > 0 ? (
                Fields.map((field) => (
                  <React.Fragment key={field.id}>
                    <tr onClick={() => toggleExpandField(field.id)} className="cursor-pointer">
                      <td className="border px-4 py-2">{field.id}</td>
                      <td className="border px-4 py-2">{field.name}</td>
                      <td className="border px-4 py-2">{field.color}</td>
                      <td className="border px-4 py-2">{field.sub_fields.length}</td>
                      <td className="border px-4 py-2 flex justify-around">
                        <button className="p-1 bg-green-500 text-white rounded" onClick={() => handleView(field)}>View</button>
                        <button className="p-1 bg-yellow-500 text-white rounded" onClick={() => handleEdit(field)}>Edit</button>
                        <button className="p-1 bg-red-500 text-white rounded" onClick={() => handleDelete(field.id)}>Delete</button>
                      </td>
                    </tr>
                    {expandedFieldId === field.id && (
                      <tr>
                        <td colSpan="5" className="border px-4 py-2">
                          <div className="pl-4">
                            <h4 className="font-bold">Subfields:</h4>
                            <ul className="list-disc pl-5">
                              {field.sub_fields.length > 0 ? (
                                field.sub_fields.map((subField) => (
                                  <li key={subField.id} className="flex justify-between">
                                    {subField.name}
                                    <div className="flex space-x-2">
                                      <button className="p-1 bg-yellow-500 text-white rounded" onClick={() => handleEditSubField(subField)}>Edit</button>
                                      <button className="p-1 bg-red-500 text-white rounded" onClick={() => handleDeleteSubField(field.id, subField.id)}>Delete</button>
                                    </div>
                                  </li>
                                ))
                              ) : (
                                <li>No subfields available for this field.</li>
                              )}
                            </ul>
                          </div>
                        </td>
                      </tr>
                    )}
                  </React.Fragment>
                ))
              ) : (
                <tr>
                  <td colSpan="5" className="text-center py-4">No Fields available</td>
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
        <CreateFieldModal
          closeModal={() => setShowCreateModal(false)}
        />
      )}
      {showEditModal && (
        <EditFieldModal
          Field={currentField}
          closeModal={() => setShowEditModal(false)}
        />
      )}
      {showEditSubFieldModal && (
        <EditFieldModal
          Field={currentSubField} // Adjust this to the appropriate subfield edit modal component
          closeModal={() => setShowEditSubFieldModal(false)}
        />
      )}
    </MainLayout>
  );
};

export default FieldBank;
