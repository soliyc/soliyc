<?php
namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {
    
    protected $table = 'group';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status', 'deleted'
    ];

     /**
     * Get the description for the blog post.
     */
    public function description()
    {
        return $this->hasMany('App\Http\GroupDescription');
    }
}