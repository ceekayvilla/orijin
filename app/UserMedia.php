<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;

class UserMedia extends Model
{

    use Uuids;
    public $incrementing = false;
    protected $keyType ='string';
    protected $table="user_media";
    protected $primaryKey = 'id';
    protected $fillable = [ 
     'user_id', 'media_id',
    ];
}
