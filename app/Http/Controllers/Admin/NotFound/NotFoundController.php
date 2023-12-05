<?php

namespace App\Http\Controllers\Admin\NotFound;

use App\Models\NotFound;
use App\Http\Controllers\Controller;
use App\Http\Requests\FAQ\FAQRequest;

class NotFoundController extends Controller
{

    public function index()
    {
        try
        {
            $not_founds = NotFound::get();
            return view('dashboard.not_founds.index',compact('not_founds'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }



    public function destroy($id)
    {
        $not_found = NotFound::find($id);
        try
        {
            if(isset($not_found))
            {
                $not_found->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }
}
