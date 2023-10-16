<?php

namespace App\Http\Controllers;

use App\Models\donerlist;
use App\Models\ratings;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class admincontroller extends Controller
{

    public function userdelete($id)
    {
        User::findOrfail($id)->delete();

        return redirect(route('index'));
    }

    public function postdelete($id)
    {
        donerlist::findOrfail($id)->delete();

        return redirect(route('admindonerposts'));
    }

    public function updateAdmin($id , Request $request)
    {
        User::findOrFail($id)->update($request->all());

        return redirect(route('index'));
    }

    public function updateDonorRate($id , Request $request)
    {
        ratings::findOrFail($id)->update([
            'userId' => auth()->user()->id,
            'raterId' => $id,
            'rating' => $request->input('rate'),
            'review' => $request->input('reviewComment')
        ]);
        return redirect(route('admin.UserRate'));
    }
}
