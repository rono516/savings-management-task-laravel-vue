<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create(
            [
                'name' => 'Collins Rono',
                'id_number' => 37842681,
                'phone_number' => '792009556',
                'email' => 'ronocollins2000@gmail.com']
        );
        Customer::create(
            [
                'name' => 'Collins Rono2',
                'id_number' => 378426812,
                'phone_number' => '7920095562',
                'email' => 'ronocollins2000@gmail.com2']
        );
        Customer::create(
            [
                'name' => 'Collins Rono3',
                'id_number' => 378426813,
                'phone_number' => '7920095563',
                'email' => 'ronocollins2000@gmail.com3']
        );

    }
}
