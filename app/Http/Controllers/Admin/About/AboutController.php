<?php

namespace App\Http\Controllers\Admin\About;

use App\Models\About;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\About\AboutRequest;

class AboutController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
            $abouts = About::get();
            return view('dashboard.abouts.index',compact('abouts'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function edit($id)
    {
        $about = About::find($id);
        try
        {
            if(isset($about))
            {
                return view('dashboard.abouts.edit',compact('about'));
            }
            else
            {
                return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
            }
        }
        catch(Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function store(AboutRequest $request)
    {
        try
        {
            $about = new About;
            $about->description = $request->description;
            $about->dialog = $request->dialog;
            $about->image = $this->upload('image','abouts');
            $about->save();
            return back()->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function update(AboutRequest $request,$id)
    {
        $about = About::find($id);
        try
        {
            if(isset($about))
            {
                $about->update([
                    'description' => $request->description,
                    'dialog' => $request->dialog,
                    'image' => $request->image ?  $this->updateFile('image','abouts',$about->image) : $about->image,
                ]);
                return redirect()->route('about.index')->with('success' , 'تم التعديل بنجاح');
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
        $about = About::find($id);
        try
        {
            if(isset($about))
            {
                $about->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }
}
