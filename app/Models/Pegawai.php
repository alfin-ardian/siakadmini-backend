<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model{
    protected $table = 'pegawai';
    protected $guarded = [];
    protected $primaryKey = 'nip';


    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}