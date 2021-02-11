<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        Usuario::factory()->times(30)->create();
    }
}
