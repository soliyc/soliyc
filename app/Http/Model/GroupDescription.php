<?php
namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class GroupDescription extends Model {
    
    protected $table = 'group_description';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'group_id', 'language_id','name','description'
    ];
}