<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $table = 'messages';

    protected $fillable = [
        'name',
        'email',
        'message', // pas aan naar wat jouw formulier opslaat
    ];
}
