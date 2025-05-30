<?php

namespace App\Repository;

use App\Models\User;

class UserRepository
{
    public function getData() {
        $data = User::get();
        return $data;
        
    }
}
