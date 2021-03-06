<?php

namespace Botble\Blog\Http\Requests;

use Botble\Support\Http\Requests\Request;

class ProvinsiRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * @author Sang Nguyen
     */
    public function rules()
    {
        return [
            'provinsi' => 'required',
            'address' => 'required',
        ];
    }
}
