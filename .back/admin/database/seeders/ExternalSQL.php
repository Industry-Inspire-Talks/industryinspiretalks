<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExternalSQL extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $community_db = base_path() . '\database\sql\community.sql';
        $community_sql = file_get_contents($community_db);
        DB::unprepared($community_sql);


        $staff_db = base_path() . '\database\sql\staff.sql';
        $staff_sql = file_get_contents($staff_db);
        DB::unprepared($staff_sql);
    }
}
