<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $primaryKey = 'id';

    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion',
    ];
    public static $rules = array(
        'fullname' => 'required|max:255',
        'gender' => 'required',
        'email' => 'required|email|max:255',
        'postcode' => 'required|max:8',
        'address' => 'required|max:255',
        'building_name' => 'max:255',
        'opinion' => 'required|max:120',
    );
}
