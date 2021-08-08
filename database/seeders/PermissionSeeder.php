<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $models = ['users', 'roles', 'permissions'];
        $crudOp = ['list', 'select', 'insert', 'update', 'delete'];

        foreach( $models as $model ) {
            foreach( $crudOp as $op ) {
                $data = [
                    'title'  => $model . '_' . $op
                ];
                $permission = Permission::create($data);
                Role::findOrFail(1)->permissions()->attach($permission->id);
            }
        }
        $other_permissions = [
            0   => [
                'title' => 'users_manage'
            ],
            1   => [
                'title' => 'permissions_bulkInsert'
            ],
            2   => [
                'title' => 'permissions_bulkDelete'
            ]
        ];
        foreach( $other_permissions as $data ) {
            $permission = Permission::create($data);
            Role::findOrFail(1)->permissions()->attach($permission->id);
        }
    }
}
