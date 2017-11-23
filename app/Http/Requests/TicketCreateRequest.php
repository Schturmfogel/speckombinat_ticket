<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'raised' => 'required|string|min:5',
            'phone' => 'required',
            'description' => 'required',
            'category_id' => ['nullable', Rule::in($categoriesIds)],
            'status' => ['nullable', Rule::in(['new', 'in progress', 'awaiting', 'closed'])],
            'priority' => ['nullable', Rule::in(['low', 'normal', 'high'])],
            'user_id' => 'nullable|exists:users,id',
            'notes' => 'nullable|string'
        ];
    }
}
