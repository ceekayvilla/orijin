<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Emadadly\LaravelUuid\Uuids;

class Onlinevendor extends Model{
    use Uuids;
    use SoftDeletes;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table='vendors';
    protected $primaryKey = 'id';
    protected $fillable = [ 
     'name',
     'website',
    ];
    
    public function vendor_media(){
        return $this->hasMany('vendor_media');
    }

    /*public function media(){
        return $this->hasManyThrough('App\Media', 'App\OnlinevendorMedia');
    }*/
}