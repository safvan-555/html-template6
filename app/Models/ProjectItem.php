<?php
// app/Models/ProjectItem.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectItem extends Model
{
    use HasFactory;
    
    protected $table = 'projects';

    protected $fillable = [
        'heading',
        'service_id',
        'sub_heading',
        'banner',
        'card_image',
        'meta_description', 
        'meta_title',
        'description',
        'order'
    ];

    public function service()
    {
        return $this->belongsTo(ServiceItem::class, 'service_id');
    }
}