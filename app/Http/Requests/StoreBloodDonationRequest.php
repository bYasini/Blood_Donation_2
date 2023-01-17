<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBloodDonationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fullName' => ['required', 'max:255'],
            'address' => ['required'],
            'contact' => ['required'],
            'bloodType' => ['required'],
            'status' => ['required'],
            'period' => ['required'],
            'category' => ['required'],
        ];
    }
}
