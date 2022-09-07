<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\SkillSet;
use Illuminate\Support\Facades\Validator;

class CandidateController extends Controller
{
    public function save(Request $request)
    {
        // validating request
        $validated = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required|email|max:50',
            'phone' => 'required|regex:/[0-9]{9}/',
            'year' => 'required',
        ]);

        // return if validation error
        if ($validated->fails()) {
            return response()->json([
                'success' => false,
                'data' => $validated->errors(),
                'message' => 'failed to save, validation error'
            ], 400);
        }

        // create candidate
        $candidate = new Candidate();
        $candidate->name = $request->name;
        $candidate->email = $request->email;
        $candidate->phone = $request->phone;
        $candidate->job_id = $request->job;
        $candidate->year = $request->year;
        $candidate->created_by = 1;
        $candidate->updated_by = 1;
        $candidate->deleted_by = 1;

        // trying to save candidate data, if fails will return error
        try {
            $candidate->save();
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'data' => $e,
                'message' => 'internal server error'
            ], 500);
        }

        $skills = $request->skills;
        // mapping skills to new table
        if (!is_array($request->skills)) {
            $skills = explode(',', $request->skills);
        }
        foreach ($skills as $value) {
            $skillSet = new SkillSet();
            $skillSet->candidate_id = $candidate->id;
            $skillSet->skill_id = $value;

            $skillSet->save();
        }

        // return success
        return response()->json([
            'success' => true,
            'data' => $candidate,
            'message' => 'candidate saved'
        ], 201);
    }
}
