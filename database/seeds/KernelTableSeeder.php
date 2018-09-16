<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class KernelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kernel')->insert([
            'author' => 'Bizzr3',
            'author_email' => 'mojtaba.bakhtiaree@gmail.com',
            'app_version' => '0.1',
            'app_last_updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
