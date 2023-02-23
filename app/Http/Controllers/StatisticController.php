<?php

namespace App\Http\Controllers;

use App\Helpers\StatisticHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
const CACHE_TIME = 5*60;
class StatisticController extends Controller
{

    public function statistics(Request $request){
        $cache_prefix="statistic_location_";
        $key = 'global';
        if ($request->has('location')) {
            $key = $request->location;
        }
        $cache_key = $cache_prefix.$key;
        if( Cache::has($cache_key) ){
            return Cache::get($cache_key);
        }else{
            return Cache::put($cache_key, function () use ($key){
                $phoneCount = StatisticHelper::phoneCountByLocation($key);
                $personCount = StatisticHelper::personCountByLocation($key);

                return [
                    'phone_count'=>$phoneCount,
                    'person_count'=>$personCount,
                ];
            },CACHE_TIME);
        }
    }
}
