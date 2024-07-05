<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Mail\ContactFormMail;
use App\Mail\ContactAdminMail;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SendMailTest extends TestCase
{
  public function test_can_send_mail(): void
  {
    Mail::fake();
    Mail::assertNothingSent();

    $data = [
      'name' => 'Test User',
      'email' => 'test@example.com',
      'comment' => 'test'
    ];

    Mail::to($data['email'])->send(new ContactFormMail($data));
    Mail::assertSent(ContactFormMail::class, 1);

    Mail::to($data['email'])->send(new ContactAdminMail($data));
    Mail::assertSent(ContactAdminMail::class, 1);
  }
}
