<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    protected $fillable = [
        'name',
        'description',
        'comment',
        'upload',
        'view',
        'modify',
    ];

    // Cast JSON fields as arrays
    protected $casts = [
        'comment' => 'array',
        'upload' => 'array',
        'view' => 'array',
        'modify' => 'array',
    ];

    public function rolesWithCommentAccess()
    {
        return Role::whereIn('id', $this->comment)->get();
    }

    public function rolesWithUploadAccess()
    {
        return Role::whereIn('id', $this->upload)->get();
    }

    public function rolesWithViewAccess()
    {
        return Role::whereIn('id', $this->view)->get();
    }

    public function rolesWithModifyAccess()
    {
        return Role::whereIn('id', $this->modify)->get();
    }
}
