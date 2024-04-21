<?php

namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserRepository{

    /**
     * @var UserRepository $userRepository
     */
    private $userRepository;

    /**
     * MainController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
     * lists function
     *
     * @return LengthAwarePaginator
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
