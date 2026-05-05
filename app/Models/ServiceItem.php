<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'card_banner',
        'card_icon',
        'card_heading',
        'card_description',
        'meta_description', 
        'meta_title',
        'description',
        'page_banner'
    ];
}