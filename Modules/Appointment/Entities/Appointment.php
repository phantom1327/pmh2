<?php

namespace Modules\Appointment\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Appointment extends Model
{
    public function user()
    {
        return $this->belongsTo(Post::class);
    }
}