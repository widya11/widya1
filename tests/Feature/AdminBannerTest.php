<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;

class AdminBannerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    
    public function test_banner_index(): void
    {
        $response = $this->get(route('banner.index'));

        $response->assertStatus(200);
    }
    
    public function test_banner_store(): void
    {
        Storage::fake('local');
        $file = UploadedFile::fake()->create('file.jpg');

        $data =[
            'is_show' => 1,
            'photo' => $file,
        ];

        $response = $this->post(route('banner.store'), $data);

        $response->assertRedirect(route('banner.index'));
    }
    
    public function test_banner_edit(): void
    {
        $latestBanner = Banner::latest()->first();

        $response = $this->get(route('banner.edit', $latestBanner->id));

        $response->assertStatus(200);
    }

    public function test_banner_update(): void
    {

        $latestBanner = Banner::latest()->first();

        Storage::fake('local');
        $file = UploadedFile::fake()->create('file.jpg');

        $data =[
            'is_show' => 0,
            'photo' => $file,
        ];

        $response = $this->put(route('banner.update', $latestBanner->id), $data);

        $response->assertRedirect(route('banner.index'));
    }

    public function test_banner_destroy(): void
    {
        $latestBanner = Banner::latest()->first();

        $response = $this->delete(route('banner.destroy', $latestBanner->id));

        $response->assertRedirect(route('banner.index'));
    }

}
