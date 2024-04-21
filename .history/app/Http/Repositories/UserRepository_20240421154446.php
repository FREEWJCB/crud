<?php

namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserRepository{


     /**
     * @var User $userRepository
     */
    private $user;

    /**
     * MainController constructor.
     * @param User $userRepositoryuseruser
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