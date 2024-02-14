<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $primaryKey = 'job_id';



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'start',
        'company_id',
        'company_name',
        'location',
        'description',
        'mission',
        'skills',
        'category_id',
        'category_name',
    ];

    /**
     * Get the company that owns the job.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get the category of the job.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
