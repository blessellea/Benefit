<?php

namespace app\Verifiers;
use Illuminate\Support\Facades\Auth;
// use Dingo\Api\Auth\Auth;

class PasswordGrantVerifier
{
  public function verify($username, $password)
  {
      $credentials = [
        'email'    => $username,
        'password' => $password,
      ];

      if (Auth::once($credentials)) {
          return Auth::user()->id;
      }

      return false;
  }
}
