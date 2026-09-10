<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'video_path',
        'video_url',
        'video_disk',
        'mime_type',
        'file_size',
        'status',
        'level',
        'teacher_name',
    ];
}