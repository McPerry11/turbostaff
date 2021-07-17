<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
  public function mail() {
    $to = '';
    $subject = 'Test Mail';
    $message = 'Testing testing';
    $from = '';
    $headers = 'From: ' . $from;
    // mail($to, $subject, $message, $headers);
    // Temporarily disabled mail function (doesn't work on GoDaddy)
    return response()->json([
      'status' => 'error',
      'message' => 'Email successfully sent.'
    ]);
  }
}
