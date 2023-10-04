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
        $data = Member::all();
        return view('list',['members'=>$data]);
    }

    function delete($id)
    {
        $data = Member::find($id);
        $data->delete();
        return redirect('list');
    }
    
    function showData($id)
    {
        $data = Member::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $request)
    {
        $data = Member::find($request->id);
        $data -> name=$request->name;
        $data -> email=$request->email;
        $data -> address=$request->address;
        return redirect('list');
    }
}
