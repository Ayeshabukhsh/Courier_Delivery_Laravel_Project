<?php

namespace App\Http\Controllers;

use App\Models\Qoutation;
use Illuminate\Http\Request;

class QoutationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $qoutation = Qoutation::all();
        return view('admin.qoutation',compact('qoutation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('qoutation');
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
        Qoutation::create($request->all());       
        return redirect()->route('qoutation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qoutation  $qoutation
     * @return \Illuminate\Http\Response
     */
    public function show(Qoutation $qoutation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qoutation  $qoutation
     * @return \Illuminate\Http\Response
     */
    public function edit(Qoutation $qoutation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Qoutation  $qoutation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qoutation $qoutation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qoutation  $qoutation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qoutation $qoutation)
    {
        //
    }
}
