<?php

namespace App\Http\Controllers;

use App\Models\Matter;
use Illuminate\Http\Request;
use App\Exports\MatterExport;
use Maatwebsite\Excel\Facades\Excel;

class MatterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $matters = Matter::paginate(20);
        return view('Matter.index',compact('matters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Matter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            Matter::create($inputs);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            // abort(500);
        }
        \Session::flash('err_msg', '案件を登録しました。');
        return redirect(route('matters.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matter  $matter
     * @return \Illuminate\Http\Response
     */
    public function show(Matter $matter)
    {
        return view('Matter.show',compact('matter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matter  $matter
     * @return \Illuminate\Http\Response
     */
    public function edit(Matter $matter)
    {
        //
        return view('Matter.edit',compact('matter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matter  $matter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matter $matter)
    {
        //
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            $matter->update($inputs);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            // abort(500);
        }
        \Session::flash('err_msg', '案件を登録しました。');
        return redirect(route('matters.edit',$matter));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matter  $matter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matter $matter)
    {
        //
    }

    public function export(){
	    return Excel::download(new MatterExport, 'matters.xlsx'); 
    }

}
