<?php

namespace App\Http\Repositories;

use App\Models\User;

class UserRepository{

    /**
     * @return User
     */
    public function lists(): LengthAwarePaginator
    {
        $user = new User();
        return $user->paginate(10);
    }

    /**
     * @param $id
     * @return User
     */
    public function read($id): User
    {
        $user = new User();
        return $user->findOrFail($id);
    }
}
