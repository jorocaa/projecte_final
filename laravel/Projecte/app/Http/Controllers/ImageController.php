<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("images.index", [
            "images" => Image::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("images.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required| max:1024'
        ]);

        // Pujar fitxer binari al disc dur
        $upload = $request->file('img');
        $fileName = $upload->getClientOriginalName();
        $fileSize = $upload->getSize();

        // Debugbar::debug("Storing file '{$fileName}' ($fileSize)...");

        $uploadName = time() . '_' . $fileName;
        $filePath = $upload->storeAs(
            'uploads',
            $uploadName,
            'public'
        );

        if(\Storage::disk('public')->exists($filePath)){
            //Existe la ruta"
            $fullPath = \Storage::disk('public')->path($filePath);
            $image = Image::create([
                'filepath' => $filePath,
                'filesize' => $fileSize
            ]);

            return redirect()->route('images.show',$image)->with('success',"Image successfully saved");

        }else{
            Debugbar::debug("No existe la ruta");
            return redirect()->route('images.create')->with('error', 'Error uploading image');
        }

        return view("images.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view("images.show", [
            'img' => $image
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view("images.edit", [
            'img' => $image
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $request->validate([
            'img' => 'required| max:1024'
        ]);

        $upload = $request->file('img');
        $fileName = $upload->getClientOriginalName();
        $fileSize = $upload->getSize();
        $uploadName = time() . '_' . $fileName;

        $filePath = $upload->storeAs(
            'uploads',
            $uploadName,
            'public'
        );

        if(\Storage::disk('public')->exists($filePath)) {
            $fullPath = \Storage::disk('public')->path($filePath);
            $ok = $image->updateOrFail([
                'filepath' => $filePath,
                'filesize'=> $fileSize
            ]);
        }

        //Debugbar::debug($ok ? "Desat!" : "Not working! :(");
        //Debugbar::debug($image);

        return redirect()->route('images.show',$image)->with('success','Success Upadre');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //Debugbar::debug($file);
        $ok = Storage::disk('public')->delete($image->filepath);
        //Debugbar::debug($ok);
        $image->delete();
        return redirect()->route('images.index')->with('success', 'Image destroyed');
    }
}
