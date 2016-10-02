<?php

namespace eden\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model 
{
    protected $table = 'statuses';
    
    protected $fillable = [
        'body'
    ];
    
    public function user()
    {
        return $this->belongsTo('eden\Models\User', 'user_id');
    }
    
    public function scopeNotReply($query)
    {
        return $query->whereNull('parent_id');
    }
    
    public function replies()
    {
        return $this->hasMany('eden\Models\Status', 'parent_id');
    }
}