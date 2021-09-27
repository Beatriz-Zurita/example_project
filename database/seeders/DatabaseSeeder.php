<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'         => 'Java'
        ]);

        DB::table('categories')->insert([
            'name'         => 'PHP'
        ]);

        DB::table('categories')->insert([
            'name'         => 'HTML'
        ]);
    }
}
