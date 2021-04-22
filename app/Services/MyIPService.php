<?php

namespace App\Services;

class MyIPService
{
    public function checkIP($ip): string
    {
        $ip = ip2long($ip);
        
        if(($ip >= ip2long("10.0.0.0") and $ip <= ip2long("10.255.255.255")) or ($ip >= ip2long("100.64.0.0") and $ip <= ip2long("100.127.255.255"))
        or ($ip >= ip2long("172.16.0.0") and $ip <= ip2long("172.31.255.255")) or ($ip >= ip2long("192.168.0.0") and $ip <= ip2long("192.168.255.255"))
        or ($ip >= ip2long("127.0.0.0") and $ip <= ip2long("127.255.255.255")))
            $result = "Серый";
        else
            $result = "Белый";
        return $result;
    }
}
