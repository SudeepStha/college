<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('backend.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'images' => 'required'
        ]);

        // first save images in gallery table
            $gallery = new Gallery;
            $gallery->name = $request->name;
            $gallery->save();

        //second save images in gallery image table
            if($request->hasFile('images')){
                foreach($request->images as $image){
                    $galleryimage = new GalleryImage();
                    $newName = time() . $image->getClientOriginalName();
                    $image->move('photos', $newName);
                    $galleryimage->name = 'photos/' . $newName;
                    $galleryimage->gallery_id = $gallery->id;
                    $galleryimage->save();
                }
            }

            return redirect()->back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $images = GalleryImage::where('gallery_id',$id)->get();
        return view('backend.gallery.show',compact('images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        $galleries = GalleryImage::where('gallery_id',$id)->get();
        return view('backend.gallery.edit',compact('gallery','galleries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        // first save images in gallery table
            $gallery = Gallery::find($id);
            $gallery->name = $request->name;
            $gallery->update;

        //second save images in gallery image table
            if($request->hasFile('images')){
                foreach($request->images as $image){
                    $galleryimage = new GalleryImage();
                    $newName = time() . $image->getClientOriginalName();
                    $image->move('photos', $newName);
                    $galleryimage->name = 'photos/' . $newName;
                    $galleryimage->gallery_id = $gallery->id;
                    $galleryimage->save();
                }
            }

            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
