<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    public function index()
    {
      //  return Category::all(); //requête SQL qui permet de sélectionner tout dans la bdd
        return view('categories/index', [
            'categories' => Category::all(), //categories ici peut se nommer comme on le souhaite
        ]);
    }

    public function create()
    {
        return view('categories/create');
    }

    //ce code s'exécute à l'envoi du formulaire
    public function store(Request $request)
    {
        //Regex qui permet de d'assurer ce qui est rentré dans le champs input
        $request->validate([
            'name' => 'required|min:3|max:10|unique:categories',
        ]);

        $category = new Category();
//Le request name récupère le post/get de l'input
        $category->name = $request->name;

        $category->save(); // c'est le INSERT INTO en laravel

        return redirect('/categories');
    }



}
