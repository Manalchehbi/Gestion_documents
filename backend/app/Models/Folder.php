<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'parent_folder_id',
        'user_id',   
    ];
    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function subfolders()
    {
        return $this->hasMany(Folder::class, 'parent_folder_id');
    }

    public function parentFolder()
    {
        return $this->belongsTo(Folder::class, 'parent_folder_id');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission_user::class, 'folder_permissions');
    }
}
