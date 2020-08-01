<?php

namespace App\Traits;

use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\NewAccessToken;

trait ApiTokens
{
    use HasApiTokens;

    public function installOldToken (string $oldToken, string $name, array $abilities = ['*'])
    {
        $token = $this->tokens()->create([
            'name' => $name,
            'token' => hash('sha256', $plainTextToken = $oldToken),
            'abilities' => $abilities,
        ]);

        return new NewAccessToken($token, $token->id.'|'.$plainTextToken);
    }
}
