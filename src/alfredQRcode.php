<?php

require 'QRcodeLib.php';

class AlfredQrcode
{
    public static function create($value)
    {
        return QRcode::png( $value, 'QRcode.png', QR_ECLEVEL_H, 10);
    }
}