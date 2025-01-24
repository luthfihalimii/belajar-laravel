<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Court_Type;
use App\Models\Court;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            Court_Type::class,
            Court::class,
            Transaction::class,
        ]);
    }
}
