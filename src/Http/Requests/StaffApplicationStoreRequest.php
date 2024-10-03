<?php

namespace Atom\Theme\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffApplicationStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'position_id' => ['required', 'exists:website_open_positions,id'],
            'rank_id' => ['required', 'exists:permissions,id'],
            'content' => ['required', 'string'],
        ];
    }
}
