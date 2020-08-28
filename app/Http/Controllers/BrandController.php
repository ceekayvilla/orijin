<?php
namespace app\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use App\Media;
use App\BrandMedia;
use App\Recipe;
use DB;
use App\Http\Controllers\MediaController;

class BrandController extends Controller{
    public function create(){
        return view('brands.admin.create');
    }

    public function store(Request $request){
        $validData = $request->validate([
            'name'=>'required|max:255',
            'description'=>'required',
            'image'=>'required',
            'image.*'=>'image|mimes:jpeg,jpg,png,svg|max:2048',
        ]);
        $image = new MediaController();
        $media_id = $image->store($request->file('image'));
        

        if(!is_null($media_id)){
                $brand_id = Brand::create([
                'name'=>$validData['name'],
                'description'=>$validData['description'],
                ])->id;
        }else{
            
            $request->session()->flash('single-error', 'The file is not an image');
        }
        
        if(!is_null($media_id) && !is_null($brand_id)){
            BrandMedia::create([
            'brand_id'=>$brand_id,
            'media_id'=>$media_id,
            ]);
            $request->session()->flash('success', 'Brand successfully added');  
        }
        return redirect()->route('add-brand');
        
    }

    private function getBrands(){
        $brands = DB::table('brands')
        ->select('brands.id','name', 'description','media_id','path')
        ->join('brand_media', 'brand_id', '=', 'brands.id')
        ->join('media', 'media_id', '=', 'media.id')
        ->get();
        return $brands;
    }
    private function getRecipes(){
        return Recipe::all();
    }

    public function list(){
        $brands = $this->getBrands();
       return view('brands.admin.list')->with(['brands'=>$brands]);
    }

    public function brandsVisibleToPublic(){
        $brands = $this->getBrands();
        $recipes= $this->getRecipes();
        return view('brands.orijin.list')->with(['brands'=>$brands, 'recipes'=>$recipes]);
    }

}
