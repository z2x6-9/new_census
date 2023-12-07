<?php

namespace App\Http\Controllers;

use App\Models\FamilyMembers;
use App\Models\FamilyLeader;
use Illuminate\Http\Request;

class Family_Members_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $famile = FamilyLeader::all();
        return view('other_members', compact('famile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => "required|max:255",
            'Gender' => "required|max:4",
            'Date_Of_Birth' => "required|max:255",
            'Relationship' => "required|max:255",
            'Academic_Achievement' => "required|max:255",
        ]);

        $data = $request->all();
        $number = $request->input('number');
        $leader = FamilyLeader::where('phone_number', '=',$number)->first();
        $leader_id = $leader->id;
        $data['Leader_id'] = $leader_id;
        FamilyMembers::create($data);
        return view('thanks');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
