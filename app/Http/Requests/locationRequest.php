<?php
/**
 * Created by PhpStorm.
 * User: Bless
 * Date: 4/22/2017
 * Time: 10:43 PM
 */


namespace app\Http\Requests;

class locationRequest extends Request
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
            'event_id' => 'required',
            'user_id' => 'required',
            'lng' => 'required',
            'lat' => 'required',
        ];
    }
}
