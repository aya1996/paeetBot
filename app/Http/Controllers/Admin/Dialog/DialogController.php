<?php

namespace App\Http\Controllers\Admin\Dialog;

use App\Models\Dialog;
use App\Models\About;
use App\Http\Controllers\Controller;
use App\Http\Requests\FAQ\FAQRequest;
use App\Traits\FileManagerTrait;

class DialogController extends Controller
{

    use FileManagerTrait;

    public function index()
    {
        try
        {
            $dialogs = Dialog::get();
            return view('dashboard.dialogs.index',compact('dialogs'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function edit($id)
    {
        $dialog = Dialog::find($id);
        try
        {
            if(isset($dialog))
            {
                return view('dashboard.dialogs.edit',compact('dialog'));
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

    public function store(FAQRequest $request)
    {
        try
        {
            $dialog = new Dialog;
            $dialog->question = $request->question;
            $dialog->answer = $request->answer;
            $dialog->video = $request->video;
            $dialog->image = $this->upload('image','dialogs');
            $dialog->save();
            return back()->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function update(FAQRequest $request,$id)
    {
        $dialog = Dialog::find($id);
        try
        {
            if(isset($dialog))
            {
                $dialog->update([
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'video' => $request->video,
                    'image' => $request->image ?  $this->updateFile('image','dialogs',$dialog->image) : $dialog->image,
                ]);
                return redirect()->route('dialogs.index')->with('success' , 'تم التعديل بنجاح');
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
        $dialog = Dialog::find($id);
        try
        {
            if(isset($dialog))
            {
                $dialog->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }
}
