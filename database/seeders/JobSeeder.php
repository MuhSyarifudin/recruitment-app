<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [[
            "name" => "Backend Engineer",
            "created_by" => "1",
            "updated_by" => "1",
            "deleted_by" => "1"
        ],[
            "name" => "Frontend Engineer",
            "created_by" => "1",
            "updated_by" => "1",
            "deleted_by" => "1"
        ],
        [
            "name" => "Fullstack Engineer",
            "created_by" => "1",
            "updated_by" => "1",
            "deleted_by" => "1",
        ]];

        foreach( $jobs as $job)
        {
            Job::create($job);
        }
    }
}
