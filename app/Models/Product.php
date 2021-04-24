<?php

namespace App\Models;

use Attribute;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'quantity',
        'price',
        'category_id',
        'thumbnail',
        'hit',
        'new',
        'recommend',
    ];

    function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    function category()
    {
        return $this->belongsTo(Category::class);
    }

    static function uploadImage(Request $request, $image = null)
    {
        if ($request->hasFile('thumbnail')) {
            // если каритнка существует удаляем
            if ($image)
                Storage::delete($image);
            $folder = date('Y-m-d');
            return $request->file('thumbnail')->store('images/' . $folder);
        }
        return null;
    }

    function getImage()
    {
        if (!$this->thumbnail) {
            return asset('no_image.png');
        }
        return asset('uploads/' . $this->thumbnail);
    }

    function getPriceForCount()
    {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }

    function getCoutnForBasket()
    {
        return $this->pivot->count;
    }

    function getQuantity()
    {
        return $this->quantity;
    }

    function isAvailable()
    {
        return $this->quantity > 0;
    }

    function checkQuantity($count)
    {
        if ($count < $this->getQuantity())
            return true;
        return false;
    }

    function removeAmountFromWarehouse()
    {
        return $this->recommend === 1;
    }

    function setHitAttribute($value)
    {
        $this->attributes['hit'] = $value === 'on' ? 1 : 0;
    }

    function setNewAttribute($value)
    {
        $this->attributes['new'] = $value === 'on' ? 1 : 0;
    }

    function setRecommendAttribute($value)
    {
        $this->attributes['recommend'] = $value === 'on' ? 1 : 0;
    }

    function isHit()
    {
        return $this->hit === 1;
    }

    function isNew()
    {
        return $this->new === 1;
    }

    function isRecommend()
    {
        return $this->recommend === 1;
    }

    function scopeHit($query)
    {
        return $query->where('hit', 1);
    }

    function scopeNew($query)
    {
        return $query->where('new', 1);
    }

    function scopeRecommend($query)
    {
        return $query->where('recommend', 1);
    }
}
