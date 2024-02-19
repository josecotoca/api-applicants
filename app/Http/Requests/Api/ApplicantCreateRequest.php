<?php

namespace App\Http\Requests\Api;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ApplicantCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {

        // $user = Auth::user();
        // $check = $user->hasPermissionTo(User::PERMISSION_CREATE_AGENT, 'api');
        // return $check;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:120',
            'source' => 'required|string|min:2|max:50',
            'owner' => 'required|numeric|exists:users,id',
        ];
    }
}
