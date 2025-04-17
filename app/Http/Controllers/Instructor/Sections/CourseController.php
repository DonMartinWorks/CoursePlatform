<?php

namespace App\Http\Controllers\Instructor\Sections;

use App\Models\Level;
use App\Models\Price;
use App\Models\Course;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $courses = Course::where('user_id', auth()->user()->id)->get();
        return view('instructor.sections.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::all();
        $levels = Level::all();
        $prices = Price::all();

        return view('instructor.sections.courses.create', compact('categories', 'levels', 'prices'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'slug' => ['required', 'unique:courses,slug'],
            'category_id' => ['required', 'exists:categories,id'],
            'level_id' => ['required', 'exists:levels,id'],
            'price_id' => ['required', 'exists:prices,id'],
        ]);

        // Owner added
        $data['user_id'] = auth()->user()->id;

        // Create after check the validation of the data.
        $course = Course::create($data);

        return redirect()->route('instructor.courses.edit', $course);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('instructor.sections.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
