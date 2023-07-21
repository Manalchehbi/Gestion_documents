<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'file_id',
        'folder_id',   
        'can_edit',
        'can_view',
          
    ];
    public function employe()
    {
        return $this->belongsToMany(Employe::class, 'employe_permissions');
    }

    public function files()
    {
        return$this->belongsToMany(File::class, 'file_permissions');
    }

    public function folders()
    {
        return $this->belongsToMany(Folder::class, 'folder_permissions');
    }
}
