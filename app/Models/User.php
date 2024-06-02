<?php

namespace App\Models;

use App\Models\Like;
use App\Models\ShopOwner;
use App\Models\UserProfile;
use App\Models\TeamMember;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'father_name',
        'email',
        'device_token',
        'password',
        'quarter_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }


    public function posts()
    {

        return $this->hasMany(Post::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function profiles()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function shopOwner()
    {
        return $this->hasOne(ShopOwner::class);
    }

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }

    public function teamMembers()
    {
        return $this->hasOne(TeamMember::class);
    }

    public function quarter()
    {
        return $this->belongsTo(Quarter::class);
    }

    public function getMapLocationUrl()
    {
        $quarter = $this->quarter;
        if ($quarter) {
            $location = urlencode($quarter->name . ' ' . $quarter->district->name . ' ' . $quarter->district->region->name);
            return "https://maps.google.com/maps?q={$location}&t=k&z=9&ie=UTF8&iwloc=B&output=embed";
        }
        return "null";
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
}