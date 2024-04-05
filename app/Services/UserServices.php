<?php

namespace App\Services;
use App\Models\User;

class UserServices {

  public function getAllUser() {
    $user  = User::all();
    return $user;
  }

}