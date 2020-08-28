<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;

class OnlinevendorMedia extends Model
{

    use Uuids;
    public $incrementing = false;
    protected $keyType ='string';
    protected $table="vendor_media";
    protected $primaryKey = 'id';
    protected $fillable = [ 
     'vendor_id', 'media_id',
    ];
    

    public function vendor(){
        return $this->belongsTo('App\Vendor','vendor_id');
    }

    public function media(){
        return $this->belongsTo('App\Media', 'media_id');
    }
}
