<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class AdminCategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_category_index(): void
    {
        $response = $this->get(route('category.index'));

        $response->assertStatus(200);
    }
    
    public function test_category_store(): void
    {
        Storage::fake('local');
        $file = UploadedFile::fake()->create('file.jpg');

        $data =[
            'name' => 'Test',
            'photo' => $file,
        ];

        $response = $this->post(route('category.store'), $data);

        $response->assertRedirect(route('category.index'));
    }
    
    public function test_category_edit(): void
    {
        $latestcategory = Category::latest()->first();

        $response = $this->get(route('category.edit', $latestcategory->id));

        $response->assertStatus(200);
    }

    public function test_category_update(): void
    {

        $latestcategory = Category::latest()->first();

        Storage::fake('local');
        $file = UploadedFile::fake()->create('file.jpg');

        $data =[
            'name' => 'Testing',
            'photo' => $file,
        ];

        $response = $this->put(route('category.update', $latestcategory->id), $data);

        $response->assertRedirect(route('category.index'));
    }

    public function test_category_destroy(): void
    {
        $latestcategory = Category::latest()->first();

        $response = $this->delete(route('category.destroy', $latestcategory->id));

        $response->assertRedirect(route('category.index'));
    }
}
