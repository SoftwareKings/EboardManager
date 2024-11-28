<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'timeline',
        'goals',
        'coordinator',
        'electronics',
        'firmware',
        'tester',
        'supplier',
        'status',
    ];


    public function coordinatorUser()
    {
        return $this->belongsTo(User::class, 'coordinator');
    }

    public function electronicsUser()
    {
        return $this->belongsTo(User::class, 'electronics');
    }

    public function firmwareUser()
    {
        return $this->belongsTo(User::class, 'firmware');
    }

    public function TesterUser()
    {
        return $this->belongsTo(User::class, 'tester');
    }

    public function SupplierUser() {
        return $this->belongsTo(User::class, 'supplier');
    }
}
