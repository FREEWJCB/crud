<?php

namespace App\Http\Repositories;

use App\Models\User;

trait UserRepository{

    /**
     * @param $id
     * @return User
     */
    public function findCity($id): User
    {
        return $this->getModel()newQuery()->with(['address'])->withTrashed()->findOrFail($id);
    }
}