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
        const $user = User::m
        return User::findOrFail($id)->paginate(15);
    }
}