<?php

namespace App\Http\Repositories;

trait UserRepository{

    /**
     * @param $id
     * @return City
     */
    public function findCity($id): City
    {
        return $this->newQuery()->with(['address'])->withTrashed()->findOrFail($id);
    }
}