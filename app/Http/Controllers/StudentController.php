<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function create(): View
    {
        return view('students.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:13', 'unique:App\Models\Student'],
            'major' => ['required', 'string', 'max:100'],
        ]);

        Student::create($validated);

        return to_route('students.index');
    }

    public function edit(Student $student): View
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student): RedirectResponse
    {
        $student->update($request->all());

        return to_route('students.index');
    }

    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();

        return to_route('students.index');
    }
}
