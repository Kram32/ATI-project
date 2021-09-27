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
        'birthdate',
        'sex',
        'civil_status',
        'curr_reg_code',
        'curr_prov_dist_code',
        'curr_city_mun_code',
        'curr_bgy_code',
        'curr_zip_code',
        'curr_street',
        'perm_reg_code',
        'perm_prov_dist_code',
        'perm_city_mun_code',
        'perm_bgy_code',
        'perm_zip_code',
        'perm_street',
        'mobile',
        'email',
        'password',
        'status'
    ];
}