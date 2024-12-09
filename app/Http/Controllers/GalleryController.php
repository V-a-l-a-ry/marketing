<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GalleryController extends Controller
{
    public function index(){
        return view('gallery',[
            'galleries'=>Gallery::latest()->get()
        ]);
    }

    public function create(){
        return view('backoffice.galleryForm');
    }

    public function store(Request $request){
        $formField = $request->validate([
            'name'=>['required',Rule::unique('galleries','name')],
            'gallery_description'=>'required',
            'gallery_comments'=>'required',
        ]);

        if($request->hasFile('thumbnail')){
            $formField['thumbnail']= $request->file('thumbnail')->store('thumbnail','public');
        }

        Gallery::create($formField);

        return redirect('/galleries')->with('message','gallery created successufully');
    }

    public function edit(Gallery $gallery)
    {

       return view('backoffice.editGallery',['gallery'=>$gallery]);
    }

    public function update(Request $request, Gallery $gallery){
        $formField = $request->validate([
            'name'=>'required',
            'gallery_description'=>'required',
            'gallery_comments'=>'required',
        ]);

        if($request->hasFile('thumbnail')){
            $formField['thumbnail']= $request->file('thumbnail')->store('thumbnail','public');
        }

        $gallery->update($formField);

        return redirect('/galleries')->with('message','gallery updated successufully');
    }

    public function delete(Gallery $gallery){
        $gallery->delete();
        return redirect('/galleries')->with('message','gallery deleted successufully');
    }
}
