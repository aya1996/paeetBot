<?php

namespace App\Http\Controllers\Admin\FAQ;

use App\Models\FAQ;
use App\Http\Controllers\Controller;
use App\Http\Requests\FAQ\FAQRequest;
use App\Traits\FileManagerTrait;
class FAQController extends Controller
{

    use FileManagerTrait;

    public function index()
    {
        try
        {
            $faqs = FAQ::get();
            return view('dashboard.faqs.index',compact('faqs'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function edit($id)
    {
        $faq = FAQ::find($id);
        try
        {
            if(isset($faq))
            {
                return view('dashboard.faqs.edit',compact('faq'));
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

    public function store(FAQRequest $request)
    {
        try
        {
            $faq = new FAQ;
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->video = $request->video;
            $faq->image = $this->upload('image','faqs');
            $faq->save();
            return back()->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }

    public function update(FAQRequest $request,$id)
    {
        $faq = FAQ::find($id);
        try
        {
            if(isset($faq))
            {
                $faq->update([
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'video' => $request->video,
                    'image' => $request->image ?  $this->updateFile('image','faqs',$faq->image) : $faq->image,
                ]);
                return redirect()->route('faqs.index')->with('success' , 'تم التعديل بنجاح');
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
        $faq = FAQ::find($id);
        try
        {
            if(isset($faq))
            {
                $faq->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }
}
