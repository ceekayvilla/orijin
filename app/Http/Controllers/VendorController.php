<?php
namespace app\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Onlinevendor;
use App\Media;
use App\OnlineVendorMedia;
use DB;

use App\Http\Controllers\MediaController;

class VendorController extends Controller{

    public function create(){
        return view('vendors.admin.create');
    }

    public function store(Request $request){
        $validData = $request->validate([
            'name'=>'required|unique:vendors|max:255',
            'website'=>'required|unique:vendors|max:255',
            'logo'=>'required',
            'logo.*'=>'image|mimes:jpeg,jpg,png,svg|max:2048',
        ]);
        $image = new MediaController();
        $media_id = $image->store($request->file('logo'));
        

        if(!is_null($media_id)){
                $vendor_id = Onlinevendor::create([
                'name'=>$validData['name'],
                'website'=>$validData['website'],
                ])->id;
        }else{
            
            $request->session()->flash('single-error', 'The file is not an image');
        }
        
        if(!is_null($media_id) && !is_null($vendor_id)){
            OnlineVendorMedia::create([
            'vendor_id'=>$vendor_id,
            'media_id'=>$media_id,
            ]);
            $request->session()->flash('success', 'Vendor successfully added');  
        }
        return redirect()->route('add-vendor');
        
    }

    public function getVendors(){
        $vendors = DB::table('vendors')
        ->select('vendors.id','name', 'website','media_id','path')
        ->join('vendor_media', 'vendor_id', '=', 'vendors.id')
        ->join('media', 'media_id', '=', 'media.id')
        ->get();
        return $vendors;
    }

    public function list(){
        $vendors = $this->getVendors();
       return view('vendors.admin.list')->with(['vendors'=>$vendors]);
    }

    public function vendorsVisibleToPublic(){
        $vendors = $this->getVendors();
        return view('vendors.orijin.list')->with(['vendors'=>$vendors]);
    }

     protected function getVendor($vendorID){
        return Vendor::findOrFail($vendorID);
    }

}