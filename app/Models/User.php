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

    const ROLE_MANAGER = 'manager';
    const ROLE_AGENT = 'agent';

    const PERMISSION_CREATE_AGENT = 'crear_candidato';
    const PERMISSION_GET_AGENTS = 'obtener_candidatos';
    const PERMISSION_GET_AGENTS_BY_OWNER = 'obtener_candidatos_por_responsable';

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
        'updated_at'
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
}
