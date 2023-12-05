<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Models\Slider;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\SliderRequest;
use Exception;

class SliderController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
            $sliders = Slider::get();
            return view('dashboard.sliders.index',compact('sliders'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        try
        {
            if(isset($slider))
            {
                return view('dashboard.sliders.edit',compact('slider'));
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

    public function store(SliderRequest $request)
    {
        try
        {
            $slider = new Slider;
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->image = $this->upload('image','sliders');
            $slider->save();
            return back()->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function update(SliderRequest $request,$id)
    {
        $slider = Slider::find($id);
        try
        {
            if(isset($slider))
            {
                $slider->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'image' => $request->image ?  $this->updateFile('image','sliders',$slider->image) : $slider->image,
                ]);
                return redirect()->route('sliders.index')->with('success' , 'تم التعديل بنجاح');
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
        $slider = Slider::find($id);
        try
        {
            if(isset($slider))
            {
                $slider->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }
}
