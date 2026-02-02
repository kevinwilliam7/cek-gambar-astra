<?php

namespace App\Http\Requests\Motor;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Log;

class UpdateRequest extends FormRequest
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
            'kode_nosin' => 'required|min:5|max:5',
            'type_motor' => 'required|string',
            'deskripsi' => 'nullable|string',
            'hari_maksimum' => 'required',
            'km_maksimum' => 'required',
            'material' => 'required',
            'jasa' => 'required',
            'link_foto' => 'nullable',
            'deskripsi_speedometer' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'kode_nosin.required' => 'Kode Nosin wajib diisi',
            'kode_nosin.min' => 'Kode Nosin minimal 5 karakter',
            'kode_nosin.max' => 'Kode Nosin maksimal 5 karakter',
            'type_motor.required' => 'Type Motor wajib diisi',
            'material.required' => 'Material wajib diisi',
            'jasa.required' => 'Jasa wajib diisi',
            'hari_maksimum.required' => 'Hari Maksimum wajib diisi',
            'km_maksimum.required' => 'KM Maksimum wajib diisi',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        // Collect all error messages into a single string
        $errors = $validator->errors()->all();
        $errorMessage = implode(' & ', $errors);
        $statusCode = 422;
        $response = response()->json([
            'status' => false,
            'message' => $errorMessage
        ], $statusCode);
        Log::warning('Motor Store Request error: ' . $errorMessage);
        throw new HttpResponseException($response);
    }
}
