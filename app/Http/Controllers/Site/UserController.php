<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    use FileManagerTrait;

    public function index()
    {

        return view('site.users.index');
    }

    public function update(Request $request,$id)
    {
        $user = User::findOrFail(auth()->id());
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ?? $user->password,
            'image' => $request->image ?  $this->updateFile('image','users',$user->image) : $user->image,
        ]);
        return redirect()->back()->with('success' ,'تم التعديل بنجاح');
    }
}
