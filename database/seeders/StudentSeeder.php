<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Data mahasiswa 1
        DB::table('students')->insert([
            'nim' => '11211015',
            'nama' => 'Archie Dylan',
            'address' => 'Sepinggan',
        ]);

        // Data mahasiswa 2
        DB::table('students')->insert([
            'nim' => '11211016',
            'nama' => 'John Doe',
            'address' => 'Sepinggan',
        ]);

        // Data mahasiswa 3
        DB::table('students')->insert([
            'nim' => '11211017',
            'nama' => 'Jane Doe',
            'address' => 'Sepinggan',
        ]);
    }
}
