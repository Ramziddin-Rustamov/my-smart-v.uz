<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Exception;
class AdminPostController extends Controller
{
    public function index(){

        $posts = Post::orderBy('id', 'DESC')->with(['user','comments','likes'])->paginate(20);
        return view('admin.post.index',[
            'posts'=> $posts
        ]);
        
        
    }
    
    public function create(){

        return view('admin.post.create');
    }

    public function store(Request $req){

        $req->validate([
            'title'=> ['required'],
            'body'=> ['required'],
            'image' => ['image', 'mimes:jpg,jpeg,png', 'max:5120', 'required'],
        ]);
        
        $file = $req->file('image');
        $extension =  $file->getClientOriginalExtension();
        $filename = 'image/post/'.time().'.'.$extension;
        $file->move('image/post/',$filename);
        
        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->title = $req->title;
        $post->body = $req->body;
        $post->image = $filename;
        $post->save();

        return back()->with('success', 'Yangilik qo\'shildi!');
    }

    public function edit(Post $id){
        return view('admin.post.edit',[
            'post'=>$id
        ]);
    }

    public function update(Request $req ,Post $post){
        $req->validate([
            'title'=> ['required'],
            'body'=> ['required'],
            'image'=> ['required']
        ]);
        
        if($req->hasFile('image')){
            $file = File::exists(public_path($post->image));
            if($file){
                File::delete(public_path($post->image));
                $post->delete();
            }
            $file = $req->file('image');
            $extension =  $file->getClientOriginalExtension();
            $filename = 'image/post/'.time().'.'.$extension;
            $file->move('image/post/',$filename);
        }
        $post->user_id = auth()->user()->id;
        $post->title = $req->title;
        $post->body = $req->body;
        $post->image = 'image/post/default.png';
        $post->update();
        return redirect()->route('posts.index')->with('success','Taxrirlandi !');
    }

    public function destroy($id){
        try{
            // dd($post);
            $post = Post::find($id);
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
