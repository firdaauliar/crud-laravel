<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserLivewireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_livewires')->insert([
            'username' => 'Fauliarahmaa',
            'password' => Hash::make('password'),
            'hak_akses' => 'grant all'
        ]);
    }
}
