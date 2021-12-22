<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bola extends Model
{
    use HasFactory;

    protected $table = "bolas";

    protected $fillable = [
        'name','club','number','birthday','status','file','note'
    ];

    public function status(){
        return $this->belongsTo(Status::class, 'status');
    }
}
