<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use Illuminate\Support\Facades\Storage;

class VacancyController extends Controller
{
    public function index()
    {
        return view('vacancies');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'curriculum' => 'required|file',
        ]);

        $curriculumPath = $request->file('curriculum')->store('curriculums');

        $vacancy = new Vacancy;
        $vacancy->name = $request->name;
        $vacancy->phone = $request->phone;
        $vacancy->curriculum_path = $curriculumPath;
        $vacancy->save();

        return back()->with('success', 'Наш менеджер скоро Вам перезвонит.');
    }
}
