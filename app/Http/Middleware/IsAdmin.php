<?php
  
namespace App\Http\Middleware;
  
use Closure;
   
class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user= auth()->user();
        if($user == null)
        {
            return redirect('login');
        }
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }
   
        return redirect('/')->with('msg',"you dont have Admin access");
}
}