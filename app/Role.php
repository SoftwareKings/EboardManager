<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['role_name', 'description'];

    public function users() {
        return $this->hasMany(User::class);
    }
}
