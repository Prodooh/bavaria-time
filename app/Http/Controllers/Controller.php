<?php

namespace App\Http\Controllers;

use App\Models\Screen;
use App\Services\OpenWeatherMapService;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getAd( Screen $screen, OpenWeatherMapService $service)
    {
        if($screen->type == 'HORARIO'){
            $hoy = Carbon::now();
            $diaSemana = $hoy->dayOfWeek;
            $horaActual = $hoy->hour;
            $hora = $hoy->format('h:i a');
            if ($diaSemana >= Carbon::MONDAY && $diaSemana <= Carbon::THURSDAY) {
                if ($horaActual >= 19) {
                    return view('Lun-Jue.night')->with(['hora' => $hora, 'screen' => $screen]);;
                } else {
                    return view('Lun-Jue.morning')->with(['hora' => $hora, 'screen' => $screen]);;
                }
            } elseif ($diaSemana >= Carbon::FRIDAY && $diaSemana <= Carbon::SATURDAY) {
                if ($horaActual >= 19) {
                    return view('Vie-Sab.night')->with(['hora' => $hora, 'screen' => $screen]);;
                } else {
                    return view('Vie-Sab.morning')->with(['hora' => $hora, 'screen' => $screen]);
                }
            }
        }else{
            $clima = $service->getCurrentWeatherCity('Costa Rica','9.928120143034393', '-84.09094194565513');
            return view('Weather.weather')->with(['clima' => $clima, 'screen' => $screen]);
        }
    }
}
