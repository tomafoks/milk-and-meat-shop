<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id'];

    function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    static function changeFullSum($changeSum)
    {
        $sum = self::getFullSum() + $changeSum;
        session(['get_order_sum' => $sum]);

    }

    static function getFullSum()
    {
        return session('get_order_sum', 0);
    }

    function calculateGetFullSum()
    {
        $sum = 0;
        foreach ($this->products()->withTrashed()->get() as $product) {
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }

    static function eraseOrderSum()
    {
        session()->forget('get_order_sum');
    }

    function saveOrder($name, $phone)
    {

        if($this->status == 0){
            $this->name = $name;
            $this->phone = $phone;
            $this->status = 1;
            $this->save();
            session()->forget('order_id');
            // $this->products->removeAmountFromWarehouse();
            return true;
        }
        return false;
    }

    function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
