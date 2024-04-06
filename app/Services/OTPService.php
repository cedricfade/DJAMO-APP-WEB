<?php

namespace App\Services;

class OTPService
{
    public static function generateOTP($secret)
    {
        $counter = time() / 10; // Change every 30 seconds
        $otp = hash_hmac('sha1', $counter, $secret);
        return substr($otp, -6); // Extract 6-digit code
    }
}
