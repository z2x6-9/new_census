<?php

namespace App\Http\Controllers;

use App\Models\FamilyLeader;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\Test;

class Family_Leader_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('famile');
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
            'Leader' => "required",
            'Gender' => "required",
            'Date_Of_Birth' => "required",
            'Phone_Number' => "required|min:11|max:11|unique:family_leaders,Phone_Number",
            'Living' => "required",
            'Academic_Achievement' => "required",
        ],
        [
            "Leader.required" => 'ألرجاء ادخال أسم مسؤول ألاسرة',
            "Gender.required" => 'ألرجاء ادخال ألجنس الخاص بالمسؤول',
            "Date_Of_Birth.required" => 'ألرجاء أدخال تاريخ ميلاد المسؤول',
            "Phone_Number.required" => 'ألرجاء إدخال رقم الهاتف ألخاص بالمسؤول',
            "Phone_Number.min" => 'عذراً. هنالك نقص في رقم ألهاتف',
            "Phone_Number.max" => 'عذراً. هنالك زيادة في رقم ألهاتف',
            "Phone_Number.unique" => 'رقم ألهاتف هذا مستخدم بالفعل!',
            "Living.required" => 'ألرجاء ادخال عنوان السكن الحالي',
        ]);


        $data = $request->all();
        $number = $request->input('Phone_Number');
        FamilyLeader::create($data);
        return view('RegistrationType',compact('number'));
    }

    public function type(Request $request){
        $num = $request->input('number');
        return view('members',compact('num'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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
