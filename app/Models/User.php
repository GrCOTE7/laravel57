<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $dates = [
        'created_at',
        'updated_at',
        'email_verified_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'settings',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the images.
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * Get the albums.
     */
    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    /**
     * User is admin.
     *
     * @return integer
     */
    public function getAdminAttribute()
    {
        return $this->role === 'admin';
    }

    public function setAdultAttribute($value)
    {
        $this->attributes['settings'] = json_encode([
            'adult'      => $value,
            'pagination' => $this->settings->pagination,
        ]);
    }

    /**
     * Get the adult status.
     *
     * @return boolean
     */
    public function getAdultAttribute()
    {
        return $this->settings->adult;
    }

    /**
     * Get the pagination value status.
     *
     * @return integer
     */
    public function getPaginationAttribute()
    {
        return $this->settings->pagination;
    }

    /**
     * Get the settings.
     *
     * @param Json $value
     * @return integer
     */
    public function getSettingsAttribute($value)
    {
        return json_decode($value);
    }
}
