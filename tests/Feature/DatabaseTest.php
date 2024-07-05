<?php

namespace Tests\Feature;

use Database\Seeders\DatabaseSeeder;
use Database\Seeders\MessagesTableSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;

class DatabaseTest extends TestCase
{
  public function setUp(): void
  {
    parent::setUp();
    Artisan::call('migrate:fresh --seed');
  }

  public function test_can_insert(): void
  {
    $this->seed(MessagesTableSeeder::class);
    $this->assertDatabaseCount('messages', 1);
    $this->assertDatabaseHas('messages', [
      'name' => 'Test User',
      'email' => 'test@example.com',
      'comment' => 'test'
    ]);
  }
}
