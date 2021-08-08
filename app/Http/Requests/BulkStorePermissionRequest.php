<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BulkStorePermissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $permissions = [];
        $default_permissions = ['list', 'select', 'insert', 'update', 'delete'];
        foreach( $default_permissions as $permission_suffix ) {
            $permissions[] = [
                'title'  => $this->object . '_' . $permission_suffix
            ];
        }
        $this->merge([
            'permission' => $permissions,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'permission.*.title' => ['required', 'unique:permissions']
        ];
    }
}
