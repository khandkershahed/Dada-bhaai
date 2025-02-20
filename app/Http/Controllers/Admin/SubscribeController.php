<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    //AllSubscribe
    public function AllSubscribe()
    {
        $subscribes = Subscribe::all();
        return view('admin.pages.subscribe.all_subscribe', compact('subscribes'));
    }

    //Delete COupon
    public function DeleteSubscribe($id)
    {

        Subscribe::find($id)->delete();

        toastr()->success('Subscribe Delete Successfully');
        return redirect()->route('all.subscribe');
    }
}
