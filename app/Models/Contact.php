<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes; //SoftDeletes trait:

    protected $fillable = ['name', 'email', 'phone', 'country', 'city', 'state', 'zip'];
}

/* Soft deletes mean that when you delete a record, 
it doesn't get permanently removed from the database. 
Instead, a deleted_at timestamp is set, marking the record as deleted.
This is useful for cases where you want to retain a record's existence for
historical purposes or potential restoration.*/