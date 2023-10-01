<?php

namespace Database\Seeders;
use App\Models\Songs;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        Songs::factory(10)->create();
    }
}
