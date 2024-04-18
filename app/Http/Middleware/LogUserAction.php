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
        $type = $request->query('button', 'url');

        $ip = $request->ip();
        $url = $request->fullUrl();

        $geo = session()->get('GEO');


        if ($geo === null) {

            $ip = $_SERVER['REMOTE_ADDR'];
            $geo = \Location::get($ip);

            session()->put('GEO', $geo);
        }
        Action::create([
            'type' => $type,
            'IP' => $ip,
            'url' => $url,
            'GEO' => json_encode($geo),
            'country' => $geo->countryName ? $geo->countryName : "null",
        ]);

        return $response;
    }
}
