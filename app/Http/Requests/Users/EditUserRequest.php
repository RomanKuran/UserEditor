<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $userId = $this->request->get('userId');

        return [
            'userId'        => ['required', 'string', 'max:11', 'exists:users,id'],
            'firstName'     => ['required', 'string', 'max:255'],
            'lastName'      => ['required', 'string', 'max:255'],
            'email'         => ['required', 'unique:users,email,'.$userId],
            'password'      => ['required', 'string', 'min:8'],
        ];
    }
}
