<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'title' => 'required',
        'work' => 'required'
    );
    
    public function getData()
    {
        return $this->id.':'$this->work.;
    }

}
