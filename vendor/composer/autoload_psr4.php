<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'tp5er\\' => array($vendorDir . '/tp5er/tp5-databackup/src'),
    'think\\mongo\\' => array($vendorDir . '/topthink/think-mongo/src'),
    'think\\migration\\' => array($vendorDir . '/topthink/think-migration/src'),
    'think\\helper\\' => array($vendorDir . '/topthink/think-helper/src'),
    'think\\composer\\' => array($vendorDir . '/topthink/think-installer/src'),
    'think\\captcha\\' => array($vendorDir . '/topthink/think-captcha/src'),
    'think\\auth\\' => array($vendorDir . '/dh2y/think-auth/src'),
    'think\\' => array($baseDir . '/thinkphp/library/think', $vendorDir . '/topthink/think-image/src', $vendorDir . '/topthink/think-queue/src'),
    'app\\' => array($baseDir . '/application'),
    'Workerman\\MySQL\\' => array($vendorDir . '/workerman/mysql/src'),
    'Workerman\\' => array($vendorDir . '/workerman/workerman', $vendorDir . '/workerman/workerman-for-win'),
    'Predis\\' => array($vendorDir . '/predis/predis/src'),
    'Phinx\\' => array($vendorDir . '/topthink/think-migration/phinx/src/Phinx'),
    'GatewayWorker\\' => array($vendorDir . '/workerman/gateway-worker/src', $vendorDir . '/workerman/gateway-worker-for-win/src'),
    'GatewayClient\\' => array($vendorDir . '/workerman/gatewayclient'),
);
