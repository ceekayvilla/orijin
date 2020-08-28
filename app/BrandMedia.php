<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;

class BrandMedia extends Model
{

    use Uuids;
    public $incrementing = false;
    protected $keyType ='string';
    protected $table="brand_media";
    protected $primaryKey = 'id';
    protected $fillable = [ 
     'brand_id', 'media_id',
    ];
}
