<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectPage extends Model
{
    protected $table = 'project_page';

    protected $fillable = [
        'meta_title',
        'meta_description',
        'heading',
        'banner'
    ];
}
