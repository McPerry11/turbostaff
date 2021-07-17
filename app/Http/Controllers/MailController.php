<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
  public function mail() {
    $to = 'mack.perry.co@gmail.com';
    $subject = 'Test Mail';
    $message = 'Testing testing';
    $from = 'comackperry@yahoo.com';
    $headers = 'From: ' . $from;
    mail($to, $subject, $message, $headers);
    return response()->json([
      'status' => 'success',
      'message' => 'Email successfully sent.'
    ]);
  }
}
