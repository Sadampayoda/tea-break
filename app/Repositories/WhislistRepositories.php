<?php 

namespace App\Repositories;

use App\Models\Menu;
use App\Models\Whislist;
use App\Repositories\Interfaces\WhislistRepositoriesInterface;

class WhislistRepositories implements WhislistRepositoriesInterface{
    public function all()
    {
        return Whislist::all();
    }

    public function insert($data)
    {
        Whislist::insert($data);
    }
    public function findMenuUser($user, $menu)
    {
        return Whislist::where('user_id',$user)->where('menu_id',$menu)->get();
    }
    public function remove($user_id, $menu_id)
    {
        Whislist::where('user_id',$user_id)->where('menu_id',$menu_id)->delete();
    }
}