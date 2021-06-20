<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function upload(Request $request)
    {
        if($request->isMethod('post')){
            if($request->images){
                foreach($request->images as $image){
                    $path = $image->store('images', 'folder');
                    $file = new File();
                    $file->user_id = auth()->id();
                    $file->path = $path;
                    $file->save();
                }
            }
            return redirect()->back();
        }else{
            return view('upload');
        }
    }
}
