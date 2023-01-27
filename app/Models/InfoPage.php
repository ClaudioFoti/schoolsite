<?php

namespace App\Models;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class InfoPage extends Model implements HasMedia
{
    use HasFactory, BelongsToTenant, SoftDeletes;
    use InteractsWithMedia;

    protected $guarded = [];

    public function responsible()
    {
        return $this->belongsTo(User::class, 'responsible_id');
    }
}
