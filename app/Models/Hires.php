<?php
namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hires extends Model
{
    use HasFactory;
    protected $fillable = [
        'hire_day',
        'hire_time',
        'hire_status',
    ];

    public function user_client(){
        return $this->belongsTo(User::class,'id_client');
    }

    public function user_repairman(){
        return $this->belongsTo(User::class,'id_repairman');
    }
}
