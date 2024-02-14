<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $primaryKey = 'company_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_id',
        'name',
        'industry',
        'employees_nr',
        'street',
        'number',
        'postalcode',
        'city',
        'country',
        'email',
        'website',
        'phone',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
