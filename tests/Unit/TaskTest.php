<?php

namespace Tests\Unit;

use Tests\TestCase;

// use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
  public function test_get_tasks(): void
  {
    $response = $this->getJson('/api/tasks');
    print_r($response, true);
    $response->assertStatus(200);
    $response->assertJson(['success' => true, 'tasks' => []]);
    $response->assertJsonStructure(
      [
        'success',
        'tasks' => [
          '*' => ['id', 'name', 'created_at', 'updated_at']
        ]
      ]
    );
  }
}
