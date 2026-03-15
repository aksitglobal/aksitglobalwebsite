<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerApplication;
use App\Models\Contact;
use App\Models\TrainingEnquiry;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'contacts' => Contact::latest()->paginate(10, ['*'], 'contacts'),
            'trainingEnquiries' => TrainingEnquiry::latest()->paginate(10, ['*'], 'training'),
            'careerApplications' => CareerApplication::latest()->paginate(10, ['*'], 'careers'),
        ]);
    }
}
