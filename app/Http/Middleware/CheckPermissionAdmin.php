<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Morilog\Jalali\Jalalian;

class CheckPermissionAdmin
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
        $user=auth()->user();
        $firstDay= \Morilog\Jalali\Jalalian::fromFormat('Y-m-d', (Jalalian::now()->format('Y-m-01')))->toCarbon()->format('Y-m-d')  ;
        $today= \Morilog\Jalali\Jalalian::fromFormat('Y-m-d', (Jalalian::now()->format('Y-m-d')))->toCarbon()->format('Y-m-d');
        $postCount= DB::table('advertisings')->whereDate('created_at','>=',$firstDay)->whereDate('created_at','<=',$today)->where('user_id',$user->id)->count();

        if (!$user->permission ==0 && $postCount  > 1){
            return  abort(403,'تعداد پست های رایگان شما به پایان رسید لطفا نسبت به تهیه اشراک اقدام کنید');
        }else{
            return $next($request);
        }


//        if (!($request->user() && $request->user()->permission == 0)) {
//            return abort(403, 'شما به این بخش از صفحه دسترسی ندارید');
//        }

    }
}
