<?php
namespace app\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recipe;


class RecipeController extends Controller{
    public function create(){
        return view('recipes.admin.create');
    }

    public function store(Request $request){
        $validData = $request->validate([
            'name'=>'required|max:255',
            'description'=>'required',
        ]);

        Recipe::create([
                'name'=>$validData['name'],
                'description'=>$validData['description'],
                ]);

        return redirect()->route('add-recipe');
        
    }

    private function getRecipes(){
        return Recipe::all();
    }

    public function list(){
        $recipes = $this->getRecipes();
       return view('recipes.admin.list')->with(['recipes'=>$recipes]);
    }


}
