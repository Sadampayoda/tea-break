<?php

namespace App\Repositories;

use App\Models\Menu;
use App\Repositories\Interfaces\MenuRepositoriesInterface;

class MenuRepositories implements MenuRepositoriesInterface{
    public function all()
    {
        return Menu::all();
    }
    public function Word($menu)
    {
        $menu->map(function($menu){
            $word = explode(' ',$menu->description);
            $menu->word = implode(' ', array_slice($word, 0, 5));
        });
        return $menu;

        
    }

    public function Categories()
    {
        return Menu::select('varian')->groupBy('varian')->get();   

    }
    public function TakeMenu($count)
    {
        return Menu::Take($count)->get();
    }
    public function searchCategories($select)
    {
        return Menu::where('varian',$select)->get();
    }
    public function OrderbyMenu($field, $order_by)
    {
        if($order_by == 'mahal'){
            return Menu::orderByDesc($field)->get();
        }
        
        return Menu::orderBy($field)->get();
        
    }
    public function find($feild, $menu)
    {
        return Menu::where($feild,$menu)->get();
    }
    
    public function count(){
        return Menu::count();
    }

        
    
}