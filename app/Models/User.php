<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rol_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
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
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
        'is_admin',
        'cans'
    ];

    
    public function getIsAdminAttribute()
    {
        return $this->rol_id === 1; //obtenemos si es admin
    }

    public function role ()
    {
        return $this->belongsTo(Role::class,'role_id');//declaramos que un usuario solo tenga un rol
    }

    public function getCansAttribute() //definimos la lista de lo que pueden realizar
    {
      $cans = array(); //definimos el array de cans 
      if($this->is_admin) //con el attributo que definimos arriba comprobamos si es admin
      {
         $permissions = Permission::select('id','nombre')->get;//seleccionamos todos los permissos si es admin
      }
      else //sino es admin
      {
        //$permissions = $this->role->permissions(); //seleccionamos los permisos por ese rol
         $permissions = RolesPermission::select('permissions.id','permissions.nombre')
         ->join('permissions','roles_permissions.permission_id','permissions.id')
         ->where('roles_permissions.role_id','=', $this->rol_id)
         ->get();
         //return $permissions;
      }

      //recorremos el arreglo de cans y lo retornamos
      foreach ($permissions as $permission) 
      {
        $cans[$permission->nombre] =  $this->can($permission->nombre);
      }
      return $cans;
    }

    public function hasPermission($idPermission) //declaramos una funcion para saber si tiene permiso o no
    {
       //return $this->role->permissions()->where('permissions.id', $idPermission)->exists();
       RolesPermission::select('permissions.id','permissions.nombre')
         ->join('permissions','roles_permissions.permission_id','permissions.id')
         ->where('roles_permissions.role_id','=', $this->rol_id)
         ->get();
    }

}
