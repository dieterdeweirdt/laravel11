<?php 
namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();
        
        return view('course.list', [
            'courses' => $courses
        ]);
    }

    public function detail($id) {
        $course = Course::find($id);

        return view('course.detail', [
            'course_id' => $id,
            'course' => $course
        ]);
    }
}