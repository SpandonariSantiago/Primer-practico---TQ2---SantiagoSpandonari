<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Traits\Timestamp;

class Publicaciones extends Model
{
    use HasFactory;
    use Timestamp;
    use SoftDeletes;
}
