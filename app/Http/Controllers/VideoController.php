<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VideoController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function video(Request $request){
        $kode = $request->get("kode");
        $url = DB::table("videos")->select('url')->where('kode', $kode)->get();

        if($url->first()){
            return view('video', ["url"=>$url->first()->url]);
            
        }
        else{
            return redirect('/#inputKode')->with("status", "Kode yang dimasukkan tidak tepat! Silahkan coba lagi :)");
        }
    }
}
