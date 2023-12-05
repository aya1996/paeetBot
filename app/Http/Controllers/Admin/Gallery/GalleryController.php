<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Models\Gallery;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\GalleryRequest;

class GalleryController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
            $galleries = Gallery::get();
            return view('dashboard.galleries.index',compact('galleries'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        try
        {
            if(isset($gallery))
            {
                return view('dashboard.galleries.edit',compact('gallery'));
            }
            else
            {
                return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function store(GalleryRequest $request)
    {
        try
        {
            $gallery = new Gallery;
            $gallery->image = $this->upload('image','galleries');
            $gallery->save();
            return back()->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function update(GalleryRequest $request,$id)
    {
        $gallery = Gallery::find($id);
        try
        {
            if(isset($gallery))
            {
                $gallery->update([
                    'image' => $request->image ?  $this->updateFile('image','galleries',$gallery->image) : $gallery->image,
                ]);
                return redirect()->route('galleries.index')->with('success' , 'تم التعديل بنجاح');
            }
            else
            {
                return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }


    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        try
        {
            if(isset($gallery))
            {
                $gallery->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }
}
