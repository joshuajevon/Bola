<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bolas')->insert([
            'name' =>'Cristiano Ronaldo',
            'club' =>'Manchester United',
            'number' => 7,
            'birthday' =>'1985-02-05',
            'status' =>'1',
            'note' =>'siu',
            'file' => 'data_file/cr.jpeg'
        ]);
    }
}
