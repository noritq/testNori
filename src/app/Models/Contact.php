<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
        protected $guarded = array('id');
        public static $rules = array(
        'category_id' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'tel' => 'required',
        'address' => 'required',
        'building' => 'nullable()',
        'content' => 'required',

    );

    public function getTitle(){
        return 'ID'.$this->id . ':' . $this->title;
    }
    
}
