<?php

namespace App\Http\Controllers;

use App\Models\FamilyMembers;
use App\Models\FamilyLeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Family_Members_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $famile = FamilyLeader::all();
        $num = session(['number']);
        return view('other_members', compact('num'));
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

        $Name = $request->Name;
        $Gender = $request->Gender;
        $Date_Of_Birth = $request->Date_Of_Birth;
        $Relationship = $request->Relationship;
        $Academic_Achievement = $request->Academic_Achievement;
        $number = $request->input('number');
        $leader = FamilyLeader::where('phone_number', '=',$number)->first();
        $leader_id = $leader->id;
        for ($i=0; $i < count($Name) ; $i++) {
            $data = [
                'Leader_id' => $leader_id,
                'Name' => $Name[$i],
                'Gender' => $Gender[$i],
                'Date_Of_Birth' => $Date_Of_Birth[$i],
                'Relationship' => $Relationship[$i],
                'Academic_Achievement' => $Academic_Achievement[$i],
            ];
            DB::table('family_members')->insert($data);
        }
        $data['Leader_id'] = $leader_id;

        // FamilyMembers::create($data);

        return redirect('/thanks');
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
