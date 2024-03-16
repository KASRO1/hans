<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Action;
use Torann\GeoIP\Facades\GeoIP;

class LogUserAction
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Проверяем наличие переменной 'button' в строке запроса
        $type = $request->query('button', 'url');

        // Получаем IP клиента
        $ip = $request->ip();

        // Получаем текущий URL
        $url = $request->fullUrl();

        // Пытаемся получить GEO из сессии
        $geo = session()->get('GEO');

        // Если в сессии нет GEO, получаем его и сохраняем в сессию
        if ($geo === null) {
//            $ip = $_SERVER['REMOTE_ADDR'];
            $ip = "5.206.49.59";
            $geo = \Location::get($ip);

            session()->put('GEO', $geo);
        }
        Action::create([
            'type' => $type,
            'IP' => $ip,
            'url' => $url,
            'GEO' => json_encode($geo),
            'country' => $geo->countryName,
        ]);

        return $response;
    }
}
