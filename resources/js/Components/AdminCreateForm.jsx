import { useForm } from '@inertiajs/inertia-react';
import toast from 'react-hot-toast';

const AdminCreateForm = ({ onClose }) => {
  const { data, setData, post, processing, errors, reset } = useForm({
    fullname: '',
    username: '',
    email: '',
    password: '',
    password_confirmation: '',
  });

  const handleSubmit = async (e) => {
    e.preventDefault();

    // Frontend validation: Check if passwords match
    if (data.password !== data.password_confirmation) {
      toast.error('Passwords do not match.');
      return; // Stop submission if passwords don't match
    }

    // Proceed with form submission if validation passes
    post('/admin/admins', {
      preserveScroll: true,
      onSuccess: () => {
        toast.success('Admin created successfully!');
        reset();
        onClose();
      },
      onError: (errs) => {
        toast.error('Please fix the errors and try again.');
        console.error('Errors:', errs);
      },
      onFinish: () => console.log('Request finished'),
    });
  };

  return (
    <form onSubmit={handleSubmit} className="w-full max-w-lg mx-auto bg-white p-6 rounded-2xl shadow space-y-6">
      {/* Full Name */}
      <div>
        <label className="block text-sm font-semibold mb-1">Full Name</label>
        <input
          type="text"
          value={data.fullname}
          onChange={(e) => setData('fullname', e.target.value)}
          className="w-full border px-4 py-2 rounded-lg focus:outline-none focus:ring"
        />
        {errors.fullname && <p className="text-sm text-red-500">{errors.fullname}</p>}
      </div>

      {/* Username */}
      <div>
        <label className="block text-sm font-semibold mb-1">Username</label>
        <input
          type="text"
          value={data.username}
          onChange={(e) => setData('username', e.target.value)}
          className="w-full border px-4 py-2 rounded-lg focus:outline-none focus:ring"
        />
        {errors.username && <p className="text-sm text-red-500">{errors.username}</p>}
      </div>

      {/* Email */}
      <div>
        <label className="block text-sm font-semibold mb-1">Email</label>
        <input
          type="email"
          value={data.email}
          onChange={(e) => setData('email', e.target.value)}
          className="w-full border px-4 py-2 rounded-lg focus:outline-none focus:ring"
        />
        {errors.email && <p className="text-sm text-red-500">{errors.email}</p>}
      </div>

      {/* Password */}
      <div>
        <label className="block text-sm font-semibold mb-1">Password</label>
        <input
          type="password"
          value={data.password}
          onChange={(e) => setData('password', e.target.value)}
          className="w-full border px-4 py-2 rounded-lg focus:outline-none focus:ring"
        />
        {errors.password && <p className="text-sm text-red-500">{errors.password}</p>}
      </div>

      {/* Confirm Password */}
      <div>
        <label className="block text-sm font-semibold mb-1">Confirm Password</label>
        <input
          type="password"
          value={data.password_confirmation}
          onChange={(e) => setData('password_confirmation', e.target.value)}
          className="w-full border px-4 py-2 rounded-lg focus:outline-none focus:ring"
        />
        {errors.password_confirmation && <p className="text-sm text-red-500">{errors.password_confirmation}</p>}
      </div>

      <div>
        <button
          type="submit"
          disabled={processing}
          className={`w-full py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition ${processing ? 'opacity-60 cursor-not-allowed' : ''
            }`}
        >
          {processing ? 'Creating...' : 'Create Admin'}
        </button>
      </div>
    </form>
  );
};

export default AdminCreateForm;
