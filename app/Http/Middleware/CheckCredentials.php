<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCredentials
{
    public function handle(Request $request, Closure $next)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        // قم بفحص اسم المستخدم وكلمة المرور هنا
        if (auth()->user()->Type == 'admin') {
            // إذا لم تتطابق بيانات الاعتماد، يمكنك إعادة توجيه المستخدم إلى صفحة تسجيل الدخول أو أي صفحة أخرى
            $next($request);
        }else{
                    // إذا كانت بيانات الاعتماد صحيحة، يمكنك السماح بالمرور إلى الصفحة المطلوبة
        return redirect('/famile')->with('error', 'Invalid credentials');
        }
    }
}
