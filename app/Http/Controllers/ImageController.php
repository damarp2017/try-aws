<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        return view('image');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image'
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $filePath = 'images/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
            return back()->with('success','Image Uploaded successfully');
        }
    }
}
