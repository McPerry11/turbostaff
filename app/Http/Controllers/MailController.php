<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
  public function mail() {
    $to = 'book@turbostaffservices.co';
    $subject = 'Test Mail';
    $message = 'Testing testing';
    $from = 'comackperry@yahoo.com';
    $headers = 'From: ' . $from;
    mail($to, $subject, $message, $headers);
    // Temporarily disabled mail function (doesn't work on GoDaddy)
    return response()->json([
      'status' => 'success',
      'message' => 'Email successfully sent.'
    ]);
  }
}
