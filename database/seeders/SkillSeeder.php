<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [[
        "name" => "React.js",
        "created_by" => "1",
        "updated_by" => "1",
        "deleted_by" => "1"
        ],[
        "name" => "Vue.js",
        "created_by" => "1",
        "updated_by" => "1",
        "deleted_by" => "1"
        ],[
        "name" => "Laravel",
        "created_by" => "1",
        "updated_by" => "1",
        "deleted_by" => "1"
        ],[
        "name" => "CodeIgniter",
        "created_by" => "1",
        "updated_by" => "1",
        "deleted_by" => "1"
        ]];

        foreach($skills as $skill ){
            Skill::create($skill);
        }
    }
}
