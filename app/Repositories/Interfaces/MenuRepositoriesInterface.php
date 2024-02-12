<?php 

namespace App\Repositories\Interfaces;


interface MenuRepositoriesInterface{
    public function all();
    public function Word($menu);
    public function Categories();
    public function TakeMenu($count);
    public function searchCategories($select);
    public function OrderbyMenu($field,$order_by);
    public function find($feild,$menu);
    public function count();
}