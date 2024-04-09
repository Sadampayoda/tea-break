<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Repositories\MenuRepositories;
use App\Repositories\WhislistRepositories;
use Illuminate\Http\Request;
use App\Utils\Response;
use Doctrine\Inflector\Rules\Word;
use Exception;
use Symfony\Polyfill\Intl\Idn\Idn;

class VarianController extends Controller
{
    protected $menusRepository,$whislistsRepositories;

    public function __construct(
        MenuRepositories $menusRepository,
        WhislistRepositories $whislistsRepositories
    )
    {
        $this->menusRepository  = $menusRepository; 
        $this->whislistsRepositories = $whislistsRepositories;  
    }

    
    public function index()
    {
        
        $menu = $this->menusRepository->all();
        $menu = $this->menusRepository->Word($menu);
        $categories = $this->menusRepository->Categories();
        $menuTop = $this->menusRepository->TakeMenu(3);
        
        


        return view('varian.index',[
            'rating' => $menuTop,
            'menu' => $menu,
            'categories' => $categories
        ]);
    }

    public function select(Request $request)
    {
        $menu = $this->menusRepository->searchCategories($request->select);
        return view('varian.categories',[
            'menu' => $this->menusRepository->Word($menu)
        ]);
    }

    public function price(Request $request)
    {
        
        $menu = $this->menusRepository->OrderbyMenu('price',$request->price);
        return view('varian.price',[
            'menu' => $this->menusRepository->Word($menu)
        ]);
    }

    public function show($id)
    {
        // return $id;
        $whislist = $this->whislistsRepositories->findMenuUser(auth()->user()->id,$id);
        try{
            $whislist = $whislist[0]->id;
        }catch(Exception $e){
            $whislist = 0;
        }

        return view('varian.show',[
            'menu' => $this->menusRepository->find('id',$id),
            'count'  => $this->menusRepository->count(),
            'whislist' => $whislist,
        ]);
    }

    public function wishlist(Request $request)
    {
        $this->whislistsRepositories->insert([
            'user_id' => auth()->user()->id,
            'menu_id' => $request->menu
        ]);


    }

    public function whislistDelete(Request $request)
    {
        $this->whislistsRepositories->remove(auth()->user()->id,$request->id);
    }
}
