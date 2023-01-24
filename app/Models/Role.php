<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function permissions() //definimos una funcion para decir que un rol tiene varios permisos
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions','role_id')
        ->withTimestamps();
    }
}
