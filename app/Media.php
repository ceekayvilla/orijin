<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Emadadly\LaravelUuid\Uuids;

class Media extends Model{
    use Uuids;
    use SoftDeletes;
    public $incrementing = false;
    protected $keyType ='string';
    protected $table = 'media';
    protected $primaryKey = 'id';
    protected $fillable = [
        'path',
        'type',
        'original_name',
        'filesize'
    ];

    /*public function vendor(){
        return $this->hasManyThrough('App\Vendor', 'App\OnlinevendorMedia');
    }*/

    public function vendor_media(){
        return $this->hasMany('vendor_media');
    }
    

}