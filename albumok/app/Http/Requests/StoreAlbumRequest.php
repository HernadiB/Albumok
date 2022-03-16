<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlbumRequest extends FormRequest
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
        return [
            "title" => ["required", "string", "max:45"],
            "released" => ["required", "integer"],
            "genre" => ["required", "string", "max:45"],
            "tcc" => ["required", "boolean"],
            "sales" => ["required", "integer"],
            "cover" => ["required", "string", "max:100"]
        ];
    }
}
