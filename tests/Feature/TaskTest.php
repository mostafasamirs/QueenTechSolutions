<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class TaskTest extends TestCase
{
    use refreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_table_tasks_request()
    {
      $this->withoutExceptionHandling(); // Display Exception
      $this->assertAuthenticated();

      $response = $this->post(
        '/admin/tasks',
        [
          'name' => 'task 1',
          'description' => 'task 1',
          'file'=>'images/logo.png',
          ]
      );
      // $response->assertOk();
      $response->assertStatus(200);
      $this->assertCount('1', Task::all());
    }

}
