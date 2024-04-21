<?php

namespace App\Http\Repositories;

use App\Models\User;

class UserRepository{

    /**
     * @param $id
     * @return User
     */
    public function find($id): User
    {
        return $this->getModel()->newQuery()->with(['address'])->withTrashed()->findOrFail($id);
    }
}