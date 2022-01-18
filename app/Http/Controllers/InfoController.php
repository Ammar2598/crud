<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
// use Illuminate\Support\Facades\DB;
// use Validator;


class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $infos = Info::latest()->paginate(5);
        return view('info.index',compact('infos'))->with('i',(request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'std_name'=>'required',
          'std_address'=>'required'
        ]);
        // $info =new Info();
        // $info->std_name =$request->std_name;
        // $info->std_address =$request->std_address;
        // $info->save();
       Info::create($request->all());
       return redirect()->route('info.index')->with('success','New Student Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $info=Info::find($id);
        return view ('info.detail',compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info=Info::find($id);
        return view ('info.edit',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'std_name'=>'required',
        'std_address'=>'required'
      ]);
      $info=Info::find($id);
      $info->std_name =$request->std_name;
      $info->std_address =$request->std_address;
      $info->save();
      return redirect()->route('info.index')->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info=Info::find($id);
        $info->delete();
        return redirect()->route('info.index')->with('success','Deleted successfully');
    }
}
