<?php

namespace App\Http\Repositories;

trait UserRepository{

    /**
     * @param $id
     * @return User
     */
    public function findCity($id): User
    {
        return $this->newQuery()->with(['address'])->withTrashed()->findOrFail($id);
    }
}