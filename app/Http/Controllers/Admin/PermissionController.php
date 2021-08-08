<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BulkStorePermissionRequest;
use App\Http\Requests\StorePermissionRequest;
use App\Models\Permission;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PermissionController extends Controller
{
   public function index(): View
   {
       abort_if(Gate::denies('permissions_list'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       $permissions = Permission::all();

       return view('admin.permissions.index', compact('permissions'));
   }

   public function create(): View
   {
       abort_if(Gate::denies('permissions_insert'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       return view('admin.permissions.create');
   }

   public function store(StorePermissionRequest $request): RedirectResponse
   {
       abort_if(Gate::denies('permissions_insert'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       Permission::create($request->validated());

       return redirect()->route('admin.permissions.index');
   }

   public function show(Permission $permission): View
   {
       abort_if(Gate::denies('permissions_select'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       return view('admin.permissions.show', compact('permission'));
   }

   public function edit(Permission $permission): View
   {
       abort_if(Gate::denies('permissions_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       return view('admin.permissions.edit', compact('permission'));
   }

   public function update(StorePermissionRequest $request, Permission $permission): RedirectResponse
   {
       abort_if(Gate::denies('permissions_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       $permission->update($request->validated());

       return redirect()->route('admin.permissions.index');
   }

   public function destroy(Permission $permission): RedirectResponse
   {
       abort_if(Gate::denies('permissions_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       $permission->delete();

       return redirect()->route('admin.permissions.index');
   }

   public function bulkCreate()
   {
       return view('admin.permissions.bulk-create');
   }
   public function bulkStore(BulkStorePermissionRequest $request): RedirectResponse
   {
       $permissions = $request->validated();

       foreach( $permissions['permission'] as $permission )
       {
           $permission = Permission::create($permission);
           $permission->roles()->sync($request->roles);
       }

       return redirect()->route('admin.permissions.index');
   }

   public function bulkDelete(): View
   {
       $permissionsCollection = Permission::orderBy('title')->get();
       $groupCtrl = '';
       $permissions = [];

       foreach( $permissionsCollection as $permission ) {
           $group = explode('_', $permission['title'])[0];
           if ( $group != $groupCtrl ) {
               $permissions[] = $group;
               $groupCtrl = $group;
           }
       }

       return view('admin.permissions.bulk-delete', compact('permissions'));
   }

   public function bulkDestroy(Request $request): RedirectResponse
   {
       $permissions = [];
       $default_permissions = ['list', 'select', 'insert', 'update', 'delete'];

       foreach( $default_permissions as $permission_suffix ) {
           $permissionToDelete = $request->object . '_' . $permission_suffix;
           $permission = Permission::where('title', $permissionToDelete)->first();
           $permission->roles()->detach();
           $permission->delete();
       }

       return redirect()->route('admin.permissions.index');
   }

}
