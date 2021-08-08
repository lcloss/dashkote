<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
   public function index(): View
   {
       abort_if(Gate::denies('users_list'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       $users = User::all();

       return view('admin.users.index', compact('users'));
   }

   public function create(): View
   {
       abort_if(Gate::denies('users_insert'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       return view('admin.users.create');
   }

   public function store(StoreUserRequest $request): RedirectResponse
   {
       abort_if(Gate::denies('users_insert'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       $userData = $request->validated();
       $userData['name'] = $request->first_name . ' ' . $request->last_name;
       $user = User::create($userData);
       $user->roles()->sync($request->roles);

       return redirect()->route('admin.users.index');
   }

   public function show(User $user): View
   {
       abort_if(Gate::denies('users_select'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       return view('admin.users.show', compact('user'));
   }

   public function edit(User $user): View
   {
       abort_if(Gate::denies('users_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       return view('admin.users.edit', compact('user'));
   }

   public function update(UpdateUserRequest $request, User $user): RedirectResponse
   {
       abort_if(Gate::denies('users_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       $userData = $request->validated();
       $userData['name'] = $request->first_name . ' ' . $request->last_name;
       $user->update($userData);
       $user->roles()->sync($request->roles);

       return redirect()->route('admin.users.index');
   }

   public function destroy(User $user): RedirectResponse
   {
       abort_if(Gate::denies('users_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       $user->delete();

       return redirect()->route('admin.users.index');
   }
}
