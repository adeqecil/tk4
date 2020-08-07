<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Video;
use PhpParser\Node\Expr\FuncCall;

class VideoController extends Controller
{
    public function index () {
		$video = Video::get();
		return view('video', ['video' => $video]);
	}
	
	public function add () {
		return view('addvideo');
	}
	
	public function upload (Request $request) {
		$request->validate([
			'videoname' => 'required',
			'file' => 'required|mimes:mp4',
		]);
		
		$file = $request->file('file');
		//echo 'File Name: '.$file->getClientOriginalName();
		$tujuan = 'upload_video';
		$file->move($tujuan,$request->videoname.".".$file->getClientOriginalExtension());
		
		
		Video::create([
			'videoname' => $request->videoname.".".$file->getClientOriginalExtension()
		]);
		
		return redirect('video')->with('status', 'Video has been uploaded');
	}
	
	public function play ($id) {
		$videos = DB::table('videos')->where('id',$id)->first();
		return view('playvideo', compact('videos'));
	}
	
	public function destroy (Video $video) {
		Video::destroy($video->id);
		return redirect('video')->with('status', 'Video has been deleted');
	}
}
