<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    const ROLE_ADMIN = 'administrador';
    const ROLE_INDUSTRY = 'industria';
    const ROLE_SUPERVISOR = 'supervisor';
    const ROLE_CONTROL = 'control';
    const ROLE_GREMIO = 'gremio';

    const PERMISSION_GET_INDUSTRIES = 'listar_industrias';
    const PERMISSION_UPLOAD_RESUME_PERIODO = 'subir_responsable';

    protected $table = 'users';
    protected $guarded = ['id'];

    protected $fillable = [
        'username',
        'password',
        'last_login',
        'role',
        'is_active'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'last_login' => 'datetime',
        'password' => 'hashed',
    ];

    public function isActive()
    {
        return $this->is_active;
    }

    public function getJWTIdentifier()
    {
      return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
      return [];
    }

    public function industry_user()
    {
        return $this->hasMany('App\Models\IndustryUser');
    }
}
