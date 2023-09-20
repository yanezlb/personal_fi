<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Transaction;
use App\Models\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'Salario PDVSA'
        ]);

        Category::create([
            'name' => 'Salario Cenco'
        ]);

        Category::create([
            'name' => 'Proyecto Temporal'
        ]);

        Category::create([
            'name' => 'Educación'
        ]);

        Category::create([
            'name' => 'Salud'
        ]);

        Category::create([
            'name' => 'Comida'
        ]);

        Category::create([
            'name' => 'Recreación'
        ]);

        Type::create([
            'name' => 'Ingreso',
            'multiplier' => 1
        ]);

        Type::create([
            'name' => 'Egreso',
            'multiplier' => -1
        ]);

        Type::create([
            'name' => 'Transferencia',
            'multiplier' => 1
        ]);

        Transaction::create([
            'category_id' => 1,
            'type_id' => 1,
            'description' => 'Salario Mayo',
            'amount' => 350.53,
        ]);

        Transaction::create([
            'category_id' => 4,
            'type_id' => 2,
            'description' => 'Mercado',
            'amount' => 450.50,
        ]);
    }
}
