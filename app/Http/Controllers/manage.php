<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Array_;

class manage extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Addproject (Request $request){

        if ($request ->isMethod('post')){
            $ap = new project();
            $ap ->title=$request->input('title');
            $ap ->body=$request->input('body');
            $ap ->user_id= Auth::user()->id;
            $ap->save();
            return redirect('view');

        }

        return view('manage.Addproject.blade.php');
    }

    public function view(){
        $projects=project::all();
        $ap=Array('projects'=>$projects);
        return view('view', $ap);

    }
}
