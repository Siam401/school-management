<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'supplier_id' => 'required',
            'transactionType' => 'required',
            'totalPrice' => 'required',
            'paidAmount' => 'required',
            'items' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'totalPrice' => 'required',
           
        ];
    }
}
