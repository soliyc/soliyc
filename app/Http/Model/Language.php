<?php
namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Language extends Model {
    
    protected $table = 'language';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'language_id', 'name','code','locale','status'
    ];
}