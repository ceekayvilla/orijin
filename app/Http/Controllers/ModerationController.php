<?php
namespace app\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Media;
use App\UserMedia;
use App\VideoView;

class ModerationController extends Controller{

    public function moderation_action(Request $request){
        $validData = $request->validate([
            'moderation_action'=>'required',
            'media_id'=>'required',
        ]);
        if($validData['moderation_action']=="approve"){
            $this->approve($validData['media_id']);
            $request->session()->flash('success', 'Video has been published'); 
        }
        if($validData['moderation_action']=="reject"){
            $this->unpublish($validData['media_id']);
            $request->session()->flash('info', 'Video has been rejected.'); 
            
        }
        return redirect()->back();
    }

    protected function approve($media_id){
        UserMedia::where('media_id', $media_id)->where('status','0')->orWhere('status', '2')->update(['status'=>'1']);
    }

    protected function unpublish($media_id){
        UserMedia::where('media_id', $media_id)->where('status','1')->orWhere('status','0')->update(['status'=>'2']);
    }

    public function get_unpublished(){
        $videos = $this->unpublished_videos();
        return view('media.orijin.videos.unpublished')->with(['videos'=>$videos]);
    }

    public function get_published(){
        $videos = $this->published_videos();
        return view('media.orijin.videos.published')->with(['videos'=>$videos]);
    }

    public function get_rejected(){
        $videos = $this->rejected_videos();
        return view('media.orijin.videos.rejected')->with(['videos'=>$videos]);
    }

    private function rejected_videos(){
        return VideoView::where('status', '2')->get();

    }

    private function published_videos(){
        return VideoView::where('status', '1')->get();

    }
    private function unpublished_videos(){
        return VideoView::where('status', '0')->get();
    }
}