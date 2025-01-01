<?php

namespace App\Traits;

use DateTimeInterface;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\NewAccessToken;

trait CustomHasApiTokens
{
    use HasApiTokens;

    public function createToken(string $name, array $abilities = ['*'], ?DateTimeInterface $expiresAt = null)
    {
        $plainTextToken = $this->generateTokenString();

        $token = $this->tokens()->create([
            'name' => $name,
            'token' => hash('sha256', $plainTextToken),
            'abilities' => $abilities,
            'expires_at' => $expiresAt,
        ]);
        $token->unhashed_token = $plainTextToken;
        $token->save();

        return new NewAccessToken($token, $token->getKey().'|'.$plainTextToken);
    }


}
