<?php

namespace App;

use App\Traits\ApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Accounts extends Authenticatable
{
    use ApiTokens;


    protected $table = 'accounts';
}
