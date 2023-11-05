<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    use HasFactory;
    protected $table = 'my-cv'; 
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'firstname', 
        'lastname',
        'profile_image',
        'designation',
        'email',
        'address',
        'phone',
        'website',      
        'career_objective',
        'skills',
        'secondary_school_name',
        's_school_from',
        's_school_to',
        'bachelors_degree',
        'b_degree_from',
        'b_degree_to',
        'company1_name',
        'job1_title',
        'company1_from',
        'company1_to',
        'c1_responsibilities',
        'company2_name',
        'job2_title',
        'company2_from',
        'company2_to',
        'c2_responsibilities',
       
        
    ];
    public $timestamps = false;
}
