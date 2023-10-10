<?php

namespace App\Http\Middleware;

use App\Models\Advertising;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Morilog\Jalali\Jalalian;

class CheckAdvertisingLimitForUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        dd('saaa');
//        $user=$request->user();
//        dd($user);
        //$firstDay= \Morilog\Jalali\Jalalian::fromFormat('Y-m-d', (Jalalian::now()->format('Y-m-01')))->toCarbon()->format('Y-m-d')  ;
       // $today= \Morilog\Jalali\Jalalian::fromFormat('Y-m-d', (Jalalian::now()->format('Y-m-d')))->toCarbon()->format('Y-m-d');
//        $postCount= DB::table('advertisings')->whereDate('created_at','>=',$firstDay)->whereDate('created_at','<=',$today)->where('user_id',$user->id)->count();
//          dd($postCount);
//       if (!$user->permission ==0 && $postCount)


//        return $next($request);
    }
}
