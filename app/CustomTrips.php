<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class CustomTrips extends Model
{
    use SyncsWithFirebase;

    protected $hidden = [];

    protected $guarded = [];
}
