<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'name',
        'email',
        'password',   
        'image',
    ];
    public function folders()
    {
        return $this->hasMany(Folder::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission_user::class, 'employe_permissions');
    }
}
