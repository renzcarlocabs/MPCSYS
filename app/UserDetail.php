<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    public function user()
    {
    	return $this->belongsTo('User');
    }

    protected $fillable = ['employee_id', 'user_level_id', 'fname', 'mname', 'lname', 'address', 'contact_no', 'date_employed', 'service_years', 'basic_salary', 'img', 'user_id'];
    
}
