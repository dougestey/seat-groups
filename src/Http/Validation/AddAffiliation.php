<?php
/**
 * Created by PhpStorm.
 *  * User: Herpaderp Aldent
 * Date: 24.06.2018
 * Time: 11:42
 */

namespace Herpaderpaldent\Seat\SeatGroups\Http\Validation;

use Illuminate\Foundation\Http\FormRequest;

class AddAffiliation extends FormRequest
{
    /**
     * Authorize the request by default.
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
            'corporations'=>'required',
            'seatgroup_id'=>'required'
        ];
    }
}