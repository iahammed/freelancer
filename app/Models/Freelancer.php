<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'address', 
        'skills', 
        'profile', 
        'currency', 
        'rate'
    ];

    /**
     * This function generate path url for this model
     *
     * @return String
     */
    public function path()
    {
        return '/freelancers/'. $this->id;
    }
}
