<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\FAQ\FAQRequest;
use App\Models\FAQ;

class ContactController extends Controller
{

    public function index()
    {
        try
        {
            $contacts = Contact::get();
            return view('dashboard.contacts.index',compact('contacts'));
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



    public function destroy($id)
    {
        $contact = Contact::find($id);
        try
        {
            if(isset($contact))
            {
                $contact->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }
}
