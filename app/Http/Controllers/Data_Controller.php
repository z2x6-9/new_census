<?php

namespace App\Http\Controllers;

use App\Models\FamilyLeader;
use App\Models\FamilyMembers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Data_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Type = auth()->user()->Type;
        if(auth()->user()->id){
            if($Type == 'admin'){

                    $Leader_man = DB::table('family_leaders')->where('Gender', '=', 'ذكر')->count();
                    $member_man = DB::table('family_members')->where('Gender', '=', 'ذكر')->count();
                    $Leader_woman = DB::table('family_leaders')->where('Gender', '=', 'انثى')->count();
                    $member_woman = DB::table('family_members')->where('Gender', '=', 'انثى')->count();
                    $male = $Leader_man + $member_man ;
                    $feminine = $Leader_woman + $member_woman ;
                    $total = $male + $feminine ;

                    $data = FamilyLeader::all();

                    // تحقق مما إذا كانت البيانات مكررة
                    foreach ($data as $item) {
                        // احصل على جميع البيانات من قاعدة البيانات التي لها نفس الاسم
                        $duplicates = DB::table('family_leaders')->where('Leader', $item->Leader)->get();
                        $SimilarityNumber = count($duplicates);
                        // تحقق مما إذا كانت البيانات متطابقة
                        if (count($duplicates) > 1) {
                            // حدد اللون الأحمر للاسم المكرر
                            $item->color = '#e70000c7';
                        } elseif(count($duplicates) < 1) {
                            // حدد اللون الأبيض للاسم الذي لم يتم تكراره
                            $item->color = '';
                        }
                    }

                    // أرسل البيانات إلى ملف View
                    return view('dashboard', compact('male', 'feminine', 'total','data','SimilarityNumber'));

            }else{
                return view('famile');
            }
        }
    }


        // $users = FamilyLeader::all();


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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Type = auth()->user()->Type;
        if(auth()->user()->id){
            if($Type == 'admin'){
                $Leader = FamilyLeader::find($id);
                $members = DB::table('family_members')->where('Leader_id', $id)->get();
                return view('family_details',compact('Leader','members'));
            }else{
                return view('famile');
            }
        }
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
        $Type = auth()->user()->Type;
        if(auth()->user()->id){
            if($Type == 'admin'){
                $familyLeader = FamilyLeader::find($id);
                    // حذف أفراد الأسرة المرتبطين
    $familyMembers = FamilyMembers::where('Leader_id', $familyLeader->id)->get();
    foreach ($familyMembers as $familyMember) {
        $familyMember->delete();
    }
                $familyLeader->delete();
                return redirect()->back();
            }else{
                return view('famile');
            }
        }
    }
}
