<?php

namespace App\Http\Controllers;

use App\Models\SlideImage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AdminSlideImageController extends Controller
{
    public function index()
    {
        $slide = SlideImage::paginate(10); 
        return view('admin.slide.index',[
            'slides'=>$slide
        ]);
    }
    
    public function create(){
        return view('admin.slide.create');
    }

    public function store(Request $req){
        
        $req->validate([
           'title'=>['max:100','required'],
           'body'=>['max:40','required'],
           'image'=>['image','required','mimes:jpg,png,jpeg,svg','max:10000']
        ]);

        $file = $req->file('image');
        $extention =  $file->getClientOriginalExtension();
        $filename = 'image/slide/'.time().'.'.$extention;
        $file->move('image/slide/',$filename);

        $slide = new SlideImage();
        $slide->title = $req->title;
        $slide->body = $req->body;
        $slide->image = $filename;
        $slide->save();
        
        return redirect()->route('slide.index')->with('success','Yangi Rasm qo`shildi');
    }

    public function delete( $id){
        try{
            // dd($post);
            $post = SlideImage::find($id);
            if($post){
                $file = File::exists(public_path($post->image));
                if($file){
                    File::delete(public_path($post->image));
                    $post->delete();
                    return back()->with('success', 'O`chirildi !');
                }
                $post->delete();
                return back()->with('success', 'Rasmsiz o`chirildi ');
            }
            return back()->with('errors', 'Topilmadi !');
        }catch(Exception $e){
        return back()->with('errors', 'Bu yangilikni o`chiraolmaysiz ');
       }
    }
}