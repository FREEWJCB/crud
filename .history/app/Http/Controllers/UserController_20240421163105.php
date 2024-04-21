<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UserRepository;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserController extends Controller
{
     /**
     * @var UserRepository $userRepository
     */
    private $userRepository;

    /**
     * MainController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /**
     * index function
     *
     * @return LengthAwarePaginator
     */
    public function index(): LengthAwarePaginator
    {
        return $this->userRepository->lists();
    }
    /**
     * read function
     *
     * @param string $id
     * @return User
     */
    public function read(string $id): User
    {
        return $this->userRepository->read($id);
    }

    /**
     * create function
     *
     * @param StoreUserRequest $request
     * @return void
     */
    public function create(StoreUserRequest $request)
    {
        return $this->userRepository->create($request);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        return $this->userRepository->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->userRepository->delete($id);
    }
}
