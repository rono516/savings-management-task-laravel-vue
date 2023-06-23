<?php

namespace Database\Seeders;

use App\Models\SavingCategory;
use Illuminate\Database\Seeder;

class SavingCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SavingCategory::create([
            'name' => 'Education Savings',
        ]);
        SavingCategory::create([
            'name' => 'Personal Savings',
        ]);
        SavingCategory::create([
            'name' => 'Vacation Savings',
        ]);
    }
}
