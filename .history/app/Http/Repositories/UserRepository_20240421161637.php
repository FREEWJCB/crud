<?php

namespace App\Http\Repositories;

use App\Http\Requests\StoreUserRequest;
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
    public function read(string $id): User
    {
        return $this->user->findOrFail($id);
    }

    /**
     * update function
     *
     * @param  StoreUserRequest  $request
     * @param  string  $id
     * @return User
     */
    public function update(StoreUserRequest $request, string $id): User
    {
        $user = $this->user->findOrFail($id);
        return $user->update($request->all());
    }
    /**
     * create function
     *
     * @param StoreUserRequest $request
     * @return User
     */
    public function create(StoreUserRequest $request): User
    {
        return $this->user->create($request->all());
    }

    /**
     * @param $id
     * @return User
     */
    public function delete($id): bool|null
    {
        $user = $this->user->findOrFail($id);
        return $user->delete();
    }
}