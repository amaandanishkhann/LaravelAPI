<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Student;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $student = Student::all();
        return ["result" => $student];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return ["result" => "New Member Create"];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return ["result" => "New Member"];
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        return ["result" => "Member show"];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
        return ["result" => "Member edit"];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return ["result" => "Member Updated"];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //        return ["result" => "Member Updated"];
        return ["result" => "Member Deleted"];
    }
}
