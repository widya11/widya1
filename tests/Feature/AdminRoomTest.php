<?php

namespace Tests\Feature;

use App\Models\Room;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Str;

class AdminRoomTest extends TestCase
{
    /**
     * A basic feature test example.
     */

     

    // public function __construct()
    // {
    //     $this->setUpFaker();
    // }


    public function test_room_index(): void
    {
        $response = $this->get(route('room.index'));

        $response->assertStatus(200);
    }
    
    public function test_room_store(): void
    {
        $data =[
            'code' => 'Test',
            'name' => 'Belum edit',
            'building' => 'Gedung Utama',
            'capacity' => '101',
        ];

        $response = $this->post(route('room.store'), $data);

        $response->assertRedirect(route('room.index'));
    }
    
    public function test_lecture_edit(): void
    {
        $latestLecture = Room::latest()->first();

        $response = $this->get(route('room.edit', $latestLecture->id));

        $response->assertStatus(200);
    }

    public function test_lecture_update(): void
    {

        $latestRoom = Room::latest()->first();

        $data =[
            'code' => Str::random(3),
            'name' => 'edit',
            'building' => 'Gedung Utama',
            'capacity' => '101',
        ];

        $response = $this->put(route('room.update', $latestRoom->id), $data);

        $response->assertRedirect(route('room.index'));
    }

    public function test_lecture_destroy(): void
    {
        $latestRoom = Room::latest()->first();

        $response = $this->delete(route('room.destroy', $latestRoom->id));

        $response->assertRedirect(route('room.index'));
    }
}
