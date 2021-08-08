<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Models\Role;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
   public function index(): View
   {
       abort_if(Gate::denies('roles_list'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       $roles = Role::all();

       return view('admin.roles.index', compact('roles'));
   }

   public function create(): View
   {
       abort_if(Gate::denies('roles_insert'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       return view('admin.roles.create');
   }

   public function store(StoreRoleRequest $request): RedirectResponse
   {
       abort_if(Gate::denies('roles_insert'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       Role::create($request->validated());

       return redirect()->route('admin.roles.index');
   }

   public function show(Role $role): View
   {
       abort_if(Gate::denies('roles_select'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       return view('admin.roles.show', compact('role'));
   }

   public function edit(Role $role): View
   {
       abort_if(Gate::denies('roles_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       return view('admin.roles.edit', compact('role'));
   }

   public function update(UpdateRoleRequest $request, Role $role): RedirectResponse
   {
       abort_if(Gate::denies('roles_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       $role->update($request->validated());
       $role->permissions()->sync($request->permissions);

       return redirect()->route('admin.roles.index');
   }

   public function destroy(Role $role): RedirectResponse
   {
       abort_if(Gate::denies('roles_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       $role->delete();

       return redirect()->route('admin.roles.index');
   }
}
