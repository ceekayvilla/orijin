<?php
namespace app\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Media;

class MediaController extends Controller{

    public function store($file){
        $media_type="";

        $video_extensions= ['mp4', 'mov', '3gp', 'ogx','oga','ogv','ogg','webm','wmv'];
        $image_extensions= ['png', 'jpeg', 'jpg', 'gif'];

        $originalFileExt = $file->getClientOriginalExtension();
        $originalFileName=$file->getClientOriginalName();

        if(in_array($originalFileExt, $image_extensions)){

            $media_type = 'image';

        }else if(in_array($originalFileExt, $video_extensions)){
            $media_type = 'video';

        }else{
            

        }
        if($media_type === 'image' || $media_type === 'video'){
                $media = new Media();
                $path = $file->store('uploads');
                $original_name = $file->getClientOriginalName();
                $size = $file->getClientSize();
                $media_id = Media::create([
                'path'=>$path,
                'type'=>$media_type,
                'original_name'=>$original_name,
                'filesize'=>$size,
                ])->id;
                return $media_id;
            }            

    }

}