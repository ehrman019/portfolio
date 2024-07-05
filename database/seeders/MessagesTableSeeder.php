<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;

class MessagesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $data = [
      'name' => 'Test User',
      'email' => 'test@example.com',
      'comment' => 'test'
    ];
    $db = new Message();
    $db->fill($data)->save(); //
  }
}
