<?php

namespace App\Http\Controllers;

use App\Http\Resources\fees\FeesResource;
use App\Model\FeesCollection;
use App\Model\Student;
use Illuminate\Http\Request;

class FeesCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Student $student)
    {
        return FeesResource::collection($student->fees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\FeesCollection  $feesCollection
     * @return \Illuminate\Http\Response
     */
    public function show(FeesCollection $feesCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\FeesCollection  $feesCollection
     * @return \Illuminate\Http\Response
     */
    public function edit(FeesCollection $feesCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\FeesCollection  $feesCollection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeesCollection $feesCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\FeesCollection  $feesCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeesCollection $feesCollection)
    {
        //
    }
}
