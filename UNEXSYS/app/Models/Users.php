<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Login extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'suffix',
        'office_id',
        'unit_id',
        'designation',
        'reg_code',
        'prov_dist_code',
        'city_mun_code',
        'bgy_code',
        'email',
        'password',
        'user_access_id',
        'status'
    ];
}