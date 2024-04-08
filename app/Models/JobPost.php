<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;
    public static array $experience = ['junior', 'medior', 'senior'];
    public static array $category = ['IT', 'Finance', 'Marketing', 'Sales'];
}
