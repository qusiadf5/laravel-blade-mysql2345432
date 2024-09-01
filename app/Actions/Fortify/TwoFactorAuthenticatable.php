<?php 


namespace App\Traits;

use PragmaRX\Google2FA\Google2FA;

trait TwoFactorAuthenticatable
{
    public function twoFactorQrCodeSvg()
    {
        $google2fa = new Google2FA();
        $qrCodeUrl = $google2fa->getQRCodeUrl(
            config('app.name'),
            $this->email,
            $this->two_factor_secret
        );

        return '<img src="' . $qrCodeUrl . '" alt="QR Code">';
    }

    // الدوال الأخرى اللازمة
}
