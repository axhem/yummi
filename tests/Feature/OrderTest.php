<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Order;

class OrderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function a_book_can_be_added_to_the_library()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/books', $this->data());

        //$response->assertOk();
        $this->assertCount(1, Book::all());
        $book = Book::first();
        $response->assertRedirect($book->path());
    }



    /**
     * @return data
     */
    private function data()
    {
        return [
            'fullname' => 'Cool Book Title',
            'author_id' => 'Ismail Kadare',
        ];
    }
}
