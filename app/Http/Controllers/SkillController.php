<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index(Request $request)
    {
        $exclude = $request->query('exclude');
        if (empty($exclude)) {
            $skills = Skill::all();

            return response()->json([
                'status' => true,
                'data' => $skills,
                'message' => 'success get all skill'
            ]);
        } else {
            $exclude = explode(",", $exclude);
            $skills = Skill::whereNotIn('name', $exclude)->get();

            return response()->json([
                'status' => true,
                'data' => $skills,
                'message' => 'success get all skill'
            ]);
        }
    }
}
