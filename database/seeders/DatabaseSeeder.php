<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'peserta',
            'guard_name' => 'web'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@pnb.ac.id',
            'password' => '$2y$10$zAwN/9m7LEDnZmIjQlpFTe2p9DPNpiFCaAs8DuKcdDqQ6MzgiiST2',
        ]);

        User::create([
            'name' => 'Arya Candrayana',
            'email' => 'aryacandrayana@pnb.ac.id',
            'password' => '$2y$10$zAwN/9m7LEDnZmIjQlpFTe2p9DPNpiFCaAs8DuKcdDqQ6MzgiiST2',
        ]);

        UserDetail::create([
            'users_id' => '2',
            'nim' => '1915323076',
            'level' => '1',
            'test_date' => '2011-09-22 10:00:00',
            'is_attempt' => false
        ]);
    }
}
