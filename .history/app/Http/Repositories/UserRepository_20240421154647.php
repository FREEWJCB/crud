<?php

namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserRepository{


     /**
     * @var User $user
     */
    private $user;

    /**
     * MainController constructor.
     * @param User $user
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->user = $userRepository;
    }
    /**
     * lists function
     *
     * @return LengthAwarePaginator
     */
    public function lists(): LengthAwarePaginator
    {
        return $this->user->paginate(10);
    }

    /**
     * @param $id
     * @return User
     */
    public function read($id): User
    {
        return $this->user->findOrFail($id);
    }
}
