<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    public $table = 'contactus';

    public $fillable = ['name','email','message'];
}
