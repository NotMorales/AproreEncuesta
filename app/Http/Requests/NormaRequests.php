<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NormaRequests extends FormRequest
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
            'pregunta_01'   => 'required|numeric',
            'pregunta_02'   => 'required|numeric',
            'pregunta_03'   => 'required|numeric',
            'pregunta_04'   => 'required|numeric',
            'pregunta_05'   => 'required|numeric',
            'pregunta_06'  => 'required|numeric',
            'pregunta_07'   => 'required|numeric',
            'pregunta_08'   => 'required|numeric',
            'pregunta_09'   => 'required|numeric',
            'pregunta_10'   => 'required|numeric',
            'pregunta_11'   => 'required|numeric',
            'pregunta_12'   => 'required|numeric',
            'pregunta_13'   => 'required|numeric',
            'pregunta_14'   => 'required|numeric',
            'pregunta_15'   => 'required|numeric',
            'pregunta_16'   => 'required|numeric',
            'pregunta_17'   => 'required|numeric',
            'pregunta_18'   => 'required|numeric',
            'pregunta_19'   => 'required|numeric',
            'pregunta_20'   => 'required|numeric',
            'pregunta_21'   => 'required|numeric',
            'pregunta_22'   => 'required|numeric',
            'pregunta_23'   => 'required|numeric',
            'pregunta_24'   => 'required|numeric',
            'pregunta_25'   => 'required|numeric',
            'pregunta_26'   => 'required|numeric',
            'pregunta_27'   => 'required|numeric',
            'pregunta_28'   => 'required|numeric',
            'pregunta_29'   => 'required|numeric',
            'pregunta_30'   => 'required|numeric',
            'pregunta_31'   => 'required|numeric',
            'pregunta_32'   => 'required|numeric',
            'pregunta_33'   => 'required|numeric',
            'pregunta_34'   => 'required|numeric',
            'pregunta_35'   => 'required|numeric',
            'pregunta_36'   => 'required|numeric',
            'pregunta_37'   => 'required|numeric',
            'pregunta_38'   => 'required|numeric',
            'pregunta_39'   => 'required|numeric',
            'pregunta_40'   => 'required|numeric',
            'pregunta_41'   => 'required|numeric',
            'pregunta_42'   => 'required|numeric',
            'pregunta_43'   => 'required|numeric',
            'pregunta_44'   => 'required|numeric',
            'pregunta_45'   => 'required|numeric',
            'pregunta_46'   => 'required|numeric',
            'pregunta_47'   => 'required|numeric',
            'pregunta_48'   => 'required|numeric',
            'pregunta_49'   => 'required|numeric',
            'pregunta_50'   => 'required|numeric',
            'pregunta_51'   => 'required|numeric',
            'pregunta_52'   => 'required|numeric',
            'pregunta_53'   => 'required|numeric',
            'pregunta_54'   => 'required|numeric',
            'pregunta_55'   => 'required|numeric',
            'pregunta_56'   => 'required|numeric',
            'pregunta_57'   => 'required|numeric',
            'pregunta_58'   => 'required|numeric',
            'pregunta_59'   => 'required|numeric',
            'pregunta_60'   => 'required|numeric',
            'pregunta_61'   => 'required|numeric',
            'pregunta_62'   => 'required|numeric',
            'pregunta_63'   => 'required|numeric',
            'pregunta_64'   => 'required|numeric',
            'pregunta_65'   => 'nullable|numeric',
            'pregunta_66'   => 'nullable|numeric',
            'pregunta_67'   => 'nullable|numeric',
            'pregunta_68'   => 'nullable|numeric',
            'pregunta_69'   => 'nullable|numeric',
            'pregunta_70'   => 'nullable|numeric',
            'pregunta_71'   => 'nullable|numeric',
            'pregunta_72'   => 'nullable|numeric',
            'resp_com'      => 'required|string',
            'resp_com2'     => 'required|string'
        ];
    }
}
