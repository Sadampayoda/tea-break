<?php 

namespace App\Repositories\Interfaces;


interface WhislistRepositoriesInterface{
    public function all();
    public function insert($data);
    public function findMenuUser($user,$menu);
    public function remove($user_id,$menu_id);
}