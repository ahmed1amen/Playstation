<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Modules\\Sms\\Exceptions\\SmsException' => $baseDir . '/Exceptions/SmsException.php',
    'Modules\\Sms\\Facades\\Gateway' => $baseDir . '/Facades/Gateway.php',
    'Modules\\Sms\\GatewayInterface' => $baseDir . '/GatewayInterface.php',
    'Modules\\Sms\\GatewayManager' => $baseDir . '/GatewayManager.php',
    'Modules\\Sms\\Gateways\\Twilio' => $baseDir . '/Gateways/Twilio.php',
    'Modules\\Sms\\Gateways\\Vonage' => $baseDir . '/Gateways/Vonage.php',
    'Modules\\Sms\\Providers\\SmsServiceProvider' => $baseDir . '/Providers/SmsServiceProvider.php',
    'Modules\\Sms\\Sms' => $baseDir . '/Sms.php',
);