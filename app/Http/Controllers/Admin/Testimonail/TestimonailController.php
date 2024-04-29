<?php

namespace App\Http\Controllers\Admin\Testimonail;

use App\Models\Testimonail;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Testimonail\TestimonailRequest;

class TestimonailController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
            $testimonails = Testimonail::get();
            return view('dashboard.testimonails.index',compact('testimonails'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function edit($id)
    {
        $testimonail = Testimonail::find($id);
        try
        {
            if(isset($testimonail))
            {
                return view('dashboard.testimonails.edit',compact('testimonail'));
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

    public function store(TestimonailRequest $request)
    {
        try
        {
            $testimonail = new Testimonail;
            $testimonail->name = $request->name;
            $testimonail->job_title = $request->job_title;
            $testimonail->description = $request->description;
            $testimonail->image = $this->upload('image','testimonails');
            $testimonail->save();
            return back()->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function update(TestimonailRequest $request,$id)
    {
        $testimonail = Testimonail::find($id);
        try
        {
            if(isset($testimonail))
            {
                $testimonail->update([
                    'job_title' => $request->job_title,
                    'name' => $request->name,
                    'description' => $request->description,
                    'image' => $request->image ?  $this->updateFile('image','testimonails',$testimonail->image) : $testimonail->image,
                ]);
                return redirect()->route('testimonails.index')->with('success' , 'تم التعديل بنجاح');
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
        $testimonail = Testimonail::find($id);
        try
        {
            if(isset($testimonail))
            {
                $testimonail->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }
}
