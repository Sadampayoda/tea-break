<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Whislist extends Model
{
    use HasFactory;

    protected $guarded=['id'];


    public function users():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function menus():BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
}
