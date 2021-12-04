<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = null;
    protected $table = 'passwords';
    protected $fillable = [];
    protected $hidden = [];
}
