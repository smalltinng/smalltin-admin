import React, { useState, useEffect } from 'react';
import axios from 'axios';
import MainLayout from '@/Layouts/MainLayout';
import CreateFieldModal from '@/Components/CreateFieldModal';
import EditFieldModal from '@/Components/EditFieldModal';
import CreateSubFieldsModal from '@/Components/CreateSubFieldsModal'; // Import the subfield modal component

const FieldBank = () => {
  const [fields, setAllFields] = useState([]);
  const [filteredFields, setFilteredFields] = useState([]);
  const [currentPage, setCurrentPage] = useState(1);
  const [totalPages, setTotalPages] = useState(1);
  const [totalField, setTotalField] = useState(0);
  const [showCreateFieldModal, setShowCreateFieldModal] = useState(false);
  const [showCreateSubFieldModal, setShowCreateSubFieldModal] = useState(false); // For subfield creation
  const [showEditFieldModal, setShowEditFieldModal] = useState(false);
  const [currentField, setCurrentField] = useState(null);
  const [expandedFieldId, setExpandedFieldId] = useState(null);
  const [currentSubField, setCurrentSubField] = useState(null);
  const [showEditSubFieldModal, setShowEditSubFieldModal] = useState(false);
  const [searchQuery, setSearchQuery] = useState(''); // Search query state

  useEffect(() => {
    fetchAllFields(currentPage);
  }, [currentPage]);

  useEffect(() => {
    // Filter fields based on the search query
    if (searchQuery.trim() === '') {
      setFilteredFields(fields);
    } else {
      setFilteredFields(
        fields.filter(field =>
          field.name.toLowerCase().includes(searchQuery.toLowerCase())
        )
      );
    }
  }, [searchQuery, fields]);

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

  const handleView = (field) => {
    setCurrentField(field);
    // Implement the logic for the View action here
  };

  const handleEditField = (field) => {
    setCurrentField(field);
    setShowEditFieldModal(true);
  };

  const handleDeleteField = (id) => {
    if (confirm('Are you sure you want to delete this Field?')) {
      setAllFields(fields.filter((field) => field.id !== id));
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
    <MainLayout title='Field Bank'>
      <div className="p-4">
        <div className="flex justify-between mb-4">
          <div>
            <h2 className="text-2xl font-bold">Field Bank</h2>
            <span>Total Fields: {totalField}</span>
          </div>
          <div>
            <button className="p-2 bg-[#285B35] text-white rounded mr-2" onClick={() => setShowCreateFieldModal(true)}>Create New Field</button>
            <button className="p-2 bg-[#285B35] text-white rounded" onClick={() => setShowCreateSubFieldModal(true)}>Create New Subfield</button>
          </div>
        </div>
        <div className="mb-4">
          <input
            type="text"
            placeholder="Search..."
            className="border p-2 w-full mb-2"
            value={searchQuery}
            onChange={(e) => setSearchQuery(e.target.value)}
          />
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
              {filteredFields.length > 0 ? (
                filteredFields.map((field) => (
                  <React.Fragment key={field.id}>
                    <tr onClick={() => toggleExpandField(field.id)} className="cursor-pointer">
                      <td className="border px-4 py-2">{field.id}</td>
                      <td className="border px-4 py-2">{field.name}</td>
                      <td className="border px-4 py-2">{field.color}</td>
                      <td className="border px-4 py-2">{field.sub_fields.length}</td>
                      <td className="border px-4 py-2 flex justify-around">
                        <button className="p-1 bg-green-500 text-white rounded" onClick={() => handleView(field)}>View</button>
                        <button className="p-1 bg-yellow-500 text-white rounded" onClick={() => handleEditField(field)}>Edit</button>
                        <button className="p-1 bg-red-500 text-white rounded" onClick={() => handleDeleteField(field.id)}>Delete</button>
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
      {showCreateFieldModal && (
        <CreateFieldModal
          closeModal={() => setShowCreateFieldModal(false)}
        />
      )}
      {showEditFieldModal && (
        <EditFieldModal
          field={currentField} // Adjust prop name if needed
          closeModal={() => setShowEditFieldModal(false)}
        />
      )}
      {showCreateSubFieldModal && (
        <CreateSubFieldsModal
          closeModal={() => setShowCreateSubFieldModal(false)}
          fields={fields} // Pass fields to CreateSubFieldsModal
        />
      )}
      {showEditSubFieldModal && (
        <EditFieldModal
          field={currentSubField} // Adjust prop name if needed
          closeModal={() => setShowEditSubFieldModal(false)}
        />
      )}
    </MainLayout>
  );
};

export default FieldBank;