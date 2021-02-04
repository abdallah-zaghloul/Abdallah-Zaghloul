<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey ='id';
    protected $fillable =[
        'name',
        'company_id'
    ];
    public $timestamps;

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
