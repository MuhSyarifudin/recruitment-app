<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return response()->json([
            'status' => true,
            'data' => $jobs,
            'message' => 'success get all job'
        ]);
    }
}
