<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'file_path',
        'folder_id',   
        'user_id', 
    ];
    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission_user::class, 'file_permissions');
    }
    
}
