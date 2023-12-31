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
        if (auth()->user()->id) {
            if ($Type == 'admin') {


                $male_leaders = FamilyLeader::all()->where('Gender', 'ذكر')->count();
                $male_members = FamilyMembers::all()->where('Gender', 'ذكر')->count();
                $male = isset($male_leaders) ? $male_leaders : 0;
                $male = isset($male_members) ? $male_members : 0;
                $male = $male_leaders + $male_members;

                $female_leaders = FamilyLeader::all()->where('Gender', 'انثى')->count();
                $female_members = FamilyMembers::all()->where('Gender', 'انثى')->count();
                $female = isset($female_leaders) ? $female_leaders : 0;
                $female = isset($female_members) ? $female_members : 0;
                $female = $female_leaders + $female_members;

                $total = isset($male) && isset($female) ? $male + $female : 0;

                $data = FamilyLeader::all();

                // تحقق مما إذا كانت البيانات مكررة
                $SimilarityNumber = isset($SimilarityNumber) ? $SimilarityNumber : 0;
                foreach ($data as $item) {
                    // احصل على جميع البيانات من قاعدة البيانات التي لها نفس الاسم
                    $duplicates = DB::table('family_leaders')->where('Leader', $item->Leader)->get();
                    $SimilarityNumber = count($duplicates);
                    // تحقق مما إذا كانت البيانات متطابقة
                    if (count($duplicates) > 1) {
                        // حدد اللون الأحمر للاسم المكرر
                        $item->color = 'bg-warning';
                    } elseif (count($duplicates) < 1) {
                        // حدد اللون الأبيض للاسم الذي لم يتم تكراره
                        $item->color = '';
                    }
                }

                // أرسل البيانات إلى ملف View
                return view('dashboard', [
                    'total' => $total,
                    'male' => $male,
                    'female' => $female,
                    'SimilarityNumber' => $SimilarityNumber,
                    'data' => $data,
                ]);
            } else {
                return view('family_head');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Type = auth()->user()->Type;
        if (auth()->user()->id) {
            if ($Type == 'admin') {
                $Leader = FamilyLeader::find($id);
                $members = DB::table('family_members')->where('Leader_id', $id)->get();
                return view('family_details', compact('Leader', 'members'));
            } else {
                return view('family_head');
            }
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Type = auth()->user()->Type;
        if (auth()->user()->id) {
            if ($Type == 'admin') {
                $familyLeader = FamilyLeader::find($id);
                // حذف أفراد الأسرة المرتبطين
                $familyMembers = FamilyMembers::where('Leader_id', $familyLeader->id)->get();
                foreach ($familyMembers as $familyMember) {
                    $familyMember->delete();
                }
                $familyLeader->delete();
                return redirect()->route('dashboard');
            } else {
                return view('family_head');
            }
        }
    }
}
