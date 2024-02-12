<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class SignatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            'name' => 'Stroberry Milk Tea',
            'image' => 'strawberry-milk-tea.png',
            'price' => '16000',
            'description' => 'Minuman kombinasi teh dan susu dengan rasa strawberry',
            'varian' => 'Signature Milk Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Milk Tea',
            'image' => 'milk-tea.png',
            'price' => '11000',
            'description' => 'Minuman kombinasi teh dan susu.',
            'varian' => 'Signature Milk Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Jasmine Milk Tea',
            'image' => 'jasmine-milk-tea.png',
            'price' => '12000',
            'description' => 'Minuman kombinasi teh dan susu dengan rasa melati',
            'varian' => 'Signature Milk Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Lychee Milk Tea',
            'image' => 'lychee-milk-tea.png',
            'price' => '12000',
            'description' => 'Minuman kombinasi teh dan susu dengan rasa leci.',
            'varian' => 'Signature Milk Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Thai Milk Tea',
            'image' => 'thai-milk-tea.png',
            'price' => '13000',
            'description' => 'Minuman kombinasi teh dan susu dengan rasa khas Thailand.',
            'varian' => 'Signature Milk Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Matcha Milk Tea',
            'image' => 'matcha-milk-tea.png',
            'price' => '13000',
            'description' => 'Minuman kombinasi teh dan susu dengan rasa Matcha (Teh Hijau khas Jepang).',
            'varian' => 'Signature Milk Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Chocolate Milk Tea',
            'image' => 'chocolate-milk-tea.png',
            'price' => '14000',
            'description' => 'Minuman kombinasi teh dan susu dengan rasa coklat.',
            'varian' => 'Signature Milk Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Mango Milk Tea',
            'image' => 'mango-milk-tea.png',
            'price' => '16000',
            'description' => 'Minuman kombinasi teh dan susu dengan rasa mangga.',
            'varian' => 'Signature Milk Tea'
        ]);
        
    }
}
