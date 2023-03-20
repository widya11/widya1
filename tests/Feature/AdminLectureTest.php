<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Lecture;

class AdminLectureTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_lecture_index(): void
    {
        $response = $this->get(route('lecture.index'));

        $response->assertStatus(200);
    }
    
    public function test_lecture_store(): void
    {
        $data =[
            'code' => 'Test',
            'name' => 'Belum edit',
        ];

        $response = $this->post(route('lecture.store'), $data);

        $response->assertRedirect(route('lecture.index'));
    }
    
    public function test_lecture_edit(): void
    {
        $latestLecture = Lecture::latest()->first();

        $response = $this->get(route('lecture.edit', $latestLecture->id));

        $response->assertStatus(200);
    }

    public function test_lecture_update(): void
    {

        $latestLecture = Lecture::latest()->first();

        $data =[
            'code' => 'Testing',
            'name' => 'Edit',
        ];

        $response = $this->put(route('lecture.update', $latestLecture->id), $data);

        $response->assertRedirect(route('lecture.index'));
    }

    public function test_lecture_destroy(): void
    {
        $latestLecture = Lecture::latest()->first();

        $response = $this->delete(route('lecture.destroy', $latestLecture->id));

        $response->assertRedirect(route('lecture.index'));
    }
}
