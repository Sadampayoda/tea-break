<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class SpecialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        
        DB::table('menus')->insert([
            'name' => 'Fresh Tea',
            'image' => 'fresh-tea.png',
            'price' => '8000',
            'description' => 'Minuman dengan rasa teh original Tea Break.',
            'varian' => 'The Special Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Jasmine Tea',
            'image' => 'jasmine-tea.png',
            'price' => '9000',
            'description' => 'Minuman teh dengan rasa melati.',
            'varian' => 'The Special Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Yuzu Tea',
            'image' => 'yuzu-tea.png',
            'price' => '11000',
            'description' => 'Minuman teh dengan rasa segarnya Yuzu.',
            'varian' => 'The Special Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Honey Lemon Tea',
            'image' => 'honey-lemon-tea.png',
            'price' => '12000',
            'description' => 'Minuman teh dengan rasa madu dan lemon.',
            'varian' => 'The Special Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Cheese Tea',
            'image' => 'cheese-tea.png',
            'price' => '12000',
            'description' => 'Minuman teh dengan kombinasi topping krim rasa keju.',
            'varian' => 'The Special Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Mango Tea',
            'image' => 'mango-tea.png',
            'price' => '13000',
            'description' => 'Minuman teh dengan rasa mangga.',
            'varian' => 'The Special Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Strawberry Tea',
            'image' => 'strawberry-tea.png',
            'price' => '13000',
            'description' => 'Minuman teh dengan rasa strawberry.',
            'varian' => 'The Special Tea'
        ]);
        DB::table('menus')->insert([
            'name' => 'Lychee Tea',
            'image' => 'lychee-tea.png',
            'price' => '9000',
            'description' => 'Minuman teh dengan rasa leci.',
            'varian' => 'The Special Tea'
        ]);
    }
}
