<?php

namespace App\Http\Middleware;

use App\Models\Order;
use Closure;
use Illuminate\Http\Request;

class BasketIsNotEmpty
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
        $order_id = session('order_id');

        if (!is_null($order_id) && Order::getFullSum() > 0) {
            return $next($request);
        }

        session()->flash('worning', 'Корзина пуста!');
        return redirect()->route('index');
    }
}
