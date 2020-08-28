<?php
namespace app\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MediaController;
use Illuminate\Http\Request;

use App\Media;
use App\UserMedia;
use Auth;

class PageController extends Controller{

    public function talkToNigeria(){
        return view('pages.talk-to-nigeria');
    }

    public function upload(Request $request){

        $media_type="";

        $request->validate(
            [
                'user_media'=>'required'
            ],
            [
                'user_media.required'=>'No file chosen'
            ]
            );

        $video_extensions= ['mp4', 'mov', '3gp', 'ogx','oga','ogv','ogg','webm','wmv'];
        $image_extensions= ['png', 'jpeg', 'jpg', 'gif'];
       // var_dump($request->file('user_media')->getClientOriginalExtension()); exit;

        $originalFileExt = $request->file('user_media')->getClientOriginalExtension();
        $originalFileName=$request->file('user_media')->getClientOriginalName();

        if(in_array($originalFileExt, $image_extensions)){
           /* $media_type = "image";
            
            $request->validate(
                ['user_media' => 'max:5120'],
                ['user_media.max' => 'The image exceeds 5MB limit']
                );
                */
                return back()->withErrors(['File extension is not allowed']);
        }else if(in_array($originalFileExt, $video_extensions)){
            $media_type = "video";
            $request->validate(
                ['user_media' =>'max:20480'],
                ['user_media.max' => 'The video exceeds 20MB limit']
                );
        }else{
            return back()->withErrors(['File extension is not allowed']);
        }

        $mediaController = new MediaController();
        $media_id = $mediaController->store($request->file('user_media'));
        $this->addUserMedia($media_id);
        
       /* $media_id = $request->file('user_media')[0]->store('PR1599/uploads');*/


        return redirect('upload-successful')->with('upload_status', 'Your '.$media_type.' is on the high sea, you will be notified when it is ready for clearing:)');
        
    }

    private function addUserMedia($media_id){
        $user_id = $this->loggedInUser()->id;
        UserMedia::create([
            'user_id'=>$user_id,
            'media_id'=>$media_id
        ]);
    }

    public function successfullUpload(){
        return view('pages.successful-upload');
    }

    private function loggedInUser(){
        $user = Auth::user();
        return $user;
    }


    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}