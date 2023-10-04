<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function show()
    {
        $data = Member::paginate(2);
        return view('list',['members'=>$data]);
    }

    function addData(Request $request)
    {
        $member = new Member;
        $member->name=$request->name;
        $member->email=$request->email;
        $member->address=$request->address;
        $member->save();
        return redirect('add');
    }

    function list()
    {
        $data=member::all();
        return view('list',['members'=>$data]);
    }

    function delete($id)
    {
        $data=member::find($id);
        $data->delete();
        return redirect('list');
    }
    
    function showData($id)
    {
        return Member::find($id);
    }
}
