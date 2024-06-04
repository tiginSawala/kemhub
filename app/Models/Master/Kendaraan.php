<?php

namespace App\Models\Master;

use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kendaraan extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'kendaraan';

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id_input')
        ->with('provinsi', 'kota');
    }
}
