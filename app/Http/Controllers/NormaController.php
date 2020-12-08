<?php

namespace App\Http\Controllers;

use App\Http\Requests\NormaRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NormaController extends Controller
{
    public function enviar(NormaRequests $request){
        if($request['resp_com'] == "SI"){
            $request->validate([
                'pregunta_65'   => 'required|numeric',
                'pregunta_66'   => 'required|numeric',
                'pregunta_67'   => 'required|numeric',
                'pregunta_68'   => 'required|numeric',
            ]);
        }
        if($request['resp_com2'] == "SI"){
            $request->validate([
                'pregunta_69'   => 'required|numeric',
                'pregunta_70'   => 'required|numeric',
                'pregunta_71'   => 'required|numeric',
                'pregunta_72'   => 'required|numeric',
            ]);
        }

        DB::table('t_formulario')->insert([
            'empleado'          => 'Norma_035',
            'fecha_registro'    => \Carbon\Carbon::now(),
            'pre_01'            => $request['pregunta_01'],
            'pre_02'            => $request['pregunta_02'],
            'pre_03'            => $request['pregunta_03'],
            'pre_04'            => $request['pregunta_04'],
            'pre_05'            => $request['pregunta_05'],
            'pre_06'            => $request['pregunta_06'],
            'pre_07'            => $request['pregunta_07'],
            'pre_08'            => $request['pregunta_08'],
            'pre_09'            => $request['pregunta_09'],
            'pre_10'            => $request['pregunta_10'],
            'pre_11'            => $request['pregunta_11'],
            'pre_12'            => $request['pregunta_12'],
            'pre_13'            => $request['pregunta_13'],
            'pre_14'            => $request['pregunta_14'],
            'pre_15'            => $request['pregunta_15'],
            'pre_16'            => $request['pregunta_16'],
            'pre_17'            => $request['pregunta_17'],
            'pre_18'            => $request['pregunta_18'],
            'pre_19'            => $request['pregunta_19'],
            'pre_20'            => $request['pregunta_20'],
            'pre_21'            => $request['pregunta_21'],
            'pre_22'            => $request['pregunta_22'],
            'pre_23'            => $request['pregunta_23'],
            'pre_24'            => $request['pregunta_24'],
            'pre_25'            => $request['pregunta_25'],
            'pre_26'            => $request['pregunta_26'],
            'pre_27'            => $request['pregunta_27'],
            'pre_28'            => $request['pregunta_28'],
            'pre_29'            => $request['pregunta_29'],
            'pre_30'            => $request['pregunta_30'],
            'pre_31'            => $request['pregunta_31'],
            'pre_32'            => $request['pregunta_32'],
            'pre_33'            => $request['pregunta_33'],
            'pre_34'            => $request['pregunta_34'],
            'pre_35'            => $request['pregunta_35'],
            'pre_36'            => $request['pregunta_36'],
            'pre_37'            => $request['pregunta_37'],
            'pre_38'            => $request['pregunta_38'],
            'pre_39'            => $request['pregunta_39'],
            'pre_40'            => $request['pregunta_40'],
            'pre_41'            => $request['pregunta_41'],
            'pre_42'            => $request['pregunta_42'],
            'pre_43'            => $request['pregunta_43'],
            'pre_44'            => $request['pregunta_44'],
            'pre_45'            => $request['pregunta_45'],
            'pre_46'            => $request['pregunta_46'],
            'pre_47'            => $request['pregunta_47'],
            'pre_48'            => $request['pregunta_48'],
            'pre_49'            => $request['pregunta_49'],
            'pre_50'            => $request['pregunta_50'],
            'pre_51'            => $request['pregunta_51'],
            'pre_52'            => $request['pregunta_52'],
            'pre_53'            => $request['pregunta_53'],
            'pre_54'            => $request['pregunta_54'],
            'pre_55'            => $request['pregunta_55'],
            'pre_56'            => $request['pregunta_56'],
            'pre_57'            => $request['pregunta_57'],
            'pre_58'            => $request['pregunta_58'],
            'pre_59'            => $request['pregunta_59'],
            'pre_60'            => $request['pregunta_60'],
            'pre_61'            => $request['pregunta_61'],
            'pre_62'            => $request['pregunta_62'],
            'pre_63'            => $request['pregunta_63'],
            'pre_64'            => $request['pregunta_64'],
            'pre_65'            => $request['pregunta_65'],
            'pre_66'            => $request['pregunta_66'],
            'pre_67'            => $request['pregunta_67'],
            'pre_68'            => $request['pregunta_68'],
            'pre_69'            => $request['pregunta_69'],
            'pre_70'            => $request['pregunta_70'],
            'pre_71'            => $request['pregunta_71'],
            'pre_72'            => $request['pregunta_72'],
            'con_01'            => $request['resp_com2'],
            'con_02'            => $request['resp_com'],
        ]);
        return redirect()->route('gracias');
    }
}
