<?php

namespace Tests\Feature;

use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageRoutingTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that a page can be accessed by its slug.
     */
    public function test_page_can_be_accessed_by_slug(): void
    {
        // Create a test page
        $page = Page::create([
            'title' => 'Test Page',
            'slug' => 'test-page',
            'body' => '<p>This is a test page.</p>',
        ]);

        // Access the page by its slug
        $response = $this->get('/test-page');

        $response->assertStatus(200);
        $response->assertSee('Test Page');
        $response->assertSee('This is a test page.');
    }

    /**
     * Test that the about page works.
     */
    public function test_about_page_works(): void
    {
        // Create the about page
        Page::create([
            'title' => 'About',
            'slug' => 'about',
            'body' => '<p>About us content.</p>',
        ]);

        // Access via the /about route
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertSee('About');
    }

    /**
     * Test that non-existent pages return 404.
     */
    public function test_non_existent_page_returns_404(): void
    {
        $response = $this->get('/non-existent-page');

        $response->assertStatus(404);
    }

    /**
     * Test that existing routes are not overridden by the wildcard.
     */
    public function test_existing_routes_not_overridden(): void
    {
        // Test that /contact still works
        $response = $this->get('/contact');
        $response->assertStatus(200);

        // Test that home still works
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
