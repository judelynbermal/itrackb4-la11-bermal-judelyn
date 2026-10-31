<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Food extends Model
{
    protected $table = 'foods';

    protected $fillable = ['name', 'restaurant', 'category_id', 'price'];

    protected function casts(): array
    {
        return [
            'price' => 'integer',
        ];
    }

   public function category(): BelongsTo      //singular  
    {
        return $this->belongsTo(Category::class);
    }
}