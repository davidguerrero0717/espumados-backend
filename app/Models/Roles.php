<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Roles extends Model
{
    use HasFactory;
    protected $fillable = [ 'nombre', 'cedula', 'email', 'password', 'role_id' ];

    public function rolesUSers() {
        return $this->belongsTo(User::class);
    }
}
