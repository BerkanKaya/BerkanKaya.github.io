<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Work;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        $work = Work::All();
        return view('home', ['work'=>$work]);
    }

    public function myWork($work_id){
        $myWork = Work::where('id', $work_id)->get();
        return view('show.showWork', ['myWork'=>$myWork]);
    }   

    public function contact(){
        return view('contact');
    }   
}
