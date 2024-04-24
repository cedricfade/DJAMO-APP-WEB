<?php

namespace App\Services;

class OTPService
{
    public static function generateOTP($secret)
    {
        $counter = time() / 10; // Change every 30 seconds
        $otp = hash_hmac('sha1', $counter, $secret);
        $otpDigits = preg_replace('/\D/', '', $otp); // Retain only digits
        return substr($otpDigits, -5); // Extract last 6 digits
    }
}
