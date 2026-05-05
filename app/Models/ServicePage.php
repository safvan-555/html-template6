<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePage extends Model
{
    protected $table = 'service_page';

    protected $fillable = [
        'meta_title',
        'meta_description',
        'heading',
        'banner'
    ];
}
