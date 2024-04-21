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
        return User::pagi->newQuery()->with(['address'])->withTrashed()->findOrFail($id);
    }
}