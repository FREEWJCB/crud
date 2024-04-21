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
        returnUser->newQuery()->with(['address'])->withTrashed()->findOrFail($id);
    }
}