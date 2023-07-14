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
        $url = DB::table("video")->select('url')->where('kode', $kode)->get();

        if($url == ""){
            return redirect('/#inputKode')->with("status", "Kode yang dimasukkan tidak tepat! Silahkan coba lagi :)");
        }
        else{
            return view('video', ["url"=>$url]);
        }
    }
}
