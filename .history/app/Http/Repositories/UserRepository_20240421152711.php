<?php

namespace App\Http\Repositories;

use App\Models\User;

class UserRepository{

    /**
     * @param $id
     * @return User
     */
    public function read($id): User
    {
        $user = new User();
        return User::findOrFail($id)->paginate(15);
    }
}