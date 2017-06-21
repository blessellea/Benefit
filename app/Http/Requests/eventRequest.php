<?php

namespace app\Http\Requests;

use app\Http\Requests\Request;

class eventRequest extends Request
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
//            'event_id' => 'required',
//            'name' => 'required',
//            'description' => 'required',
//            'organizer' => 'required',
//            'gunStart_date' => 'required',
//            'registration_deadline' => 'required',
//            'status' => 'required'
        ];
    }
}
