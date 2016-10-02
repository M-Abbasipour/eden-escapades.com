<?php

namespace eden\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'users';    
        
    protected $fillable = [
        'email',
        'username',
        'password',
        'first_name',
        'last_name',
        'location',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];
    
    public function getName()
    {
        //check if both names are present
        if($this->first_name && $this->last_name) {
            //if available then return both values
            return "{$this->first_name} {$this->last_name}";
        }
        
        //if there is just a first name, return this
        if ($this->first_name){
            return $this->first_name;
        }

        //otherwise return nothing
        return null;
    }
    
    public function getNameOrUsername() 
    {
        return $this->getName() ?: $this->username;  
    }
    
    public function getFirstNameOrUsername()
    {
        return $this->first_name ?: $this->username;
    }
    
    public function getAvatarUrl()
    {
        return "https://www.gravatar.com/avatar/{{md5($this->email)}}?d=mm&s=40";
    }
    
    public function statuses()
    {
        return $this->hasMany('eden\Models\Status', 'user_id');
    }
        
    public function friendsOfMine() 
    {
        //create relationship between user and friend
        return $this->belongsToMany('eden\Models\User', 'friends', 'user_id', 'friend_id');
    }
    
    public function friendOf()
    {
        //create TWO-WAY relationship between friend and user - 'friends' is the DB table which is Pivot table
        return $this->belongsToMany('eden\Models\User', 'friends', 'friend_id', 'user_id');
    }
    
    public function friends()
    {
        //return friends of user both ways
        return $this->friendsOfMine()->wherePivot('accepted', true)->get()->merge($this->friendOf()->wherePivot('accepted', true)->get());

    }
    
    public function friendRequests()
    {
        return $this->friendsOfMine()->wherePivot('accepted', false)->get();
    }
    
    public function friendRequestsPending()
    {
        return $this->friendOf()->wherePivot('accepted', false)->get();
    }
    
    public function hasFriendRequestPending(User $user)
    {
        return (bool) $this->friendRequestsPending()->where('id', $user->id)->count();
    }
    
    public function hasFriendRequestReceived(User $user)
    {
        return (bool) $this->friendRequests()->where('id', $user->id)->count();
    }
    
    public function addFriend(User $user)
    {
        $this->friendOf()->attach($user->id);
    }
    
    public function acceptFriendRequest(User $user)
    {
        $this->friendRequests()->where('id', $user->id)->first()->pivot->update(['accepted' => true]);
    }
    
    public function isFriendsWith(User $user)
    {
        return (bool) $this->friends()->where('id', $user->id)->count();   
    }
}

