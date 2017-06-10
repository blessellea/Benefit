<?php
/**
 * Created by PhpStorm.
 * User: Bless
 * Date: 4/28/2017
 * Time: 4:29 PM
 */
namespace app\Http\Requests;

class runnerRequest extends Request
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
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'birthdate' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
    }
}
