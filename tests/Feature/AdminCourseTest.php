<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;

class AdminCourseTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_course_index(): void
    {
        $response = $this->get(route('course.index'));

        $response->assertStatus(200);
    }
    
    public function test_course_store(): void
    {
        $data =[
            'code' => 'Test',
            'name' => 'Belum edit',
        ];

        $response = $this->post(route('course.store'), $data);

        $response->assertRedirect(route('course.index'));
    }
    
    public function test_course_edit(): void
    {
        $latestCourse = Course::latest()->first();

        $response = $this->get(route('course.edit', $latestCourse->id));

        $response->assertStatus(200);
    }

    public function test_course_update(): void
    {

        $latestCourse = Course::latest()->first();

        $data =[
            'code' => 'Testing',
            'name' => 'Edit',
        ];

        $response = $this->put(route('course.update', $latestCourse->id), $data);

        $response->assertRedirect(route('course.index'));
    }

    public function test_course_destroy(): void
    {
        $latestCourse = Course::latest()->first();

        $response = $this->delete(route('course.destroy', $latestCourse->id));

        $response->assertRedirect(route('course.index'));
    }
}
