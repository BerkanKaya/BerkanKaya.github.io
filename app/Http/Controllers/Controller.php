<?php

namespace App\Http\Controllers;

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
        $workId = Work::where("id", $work);
        return view('home', ['work'=>$work, 'workId'=>$workId]);
    }

    public function myWork($id){

        return view('show.showWork');
    }   

    public function contact(){
        return view('contact');
    }   
}
