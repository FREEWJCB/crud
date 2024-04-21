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
        const $user = new User() User::model()
        return User::findOrFail($id)->paginate(15);
    }
}