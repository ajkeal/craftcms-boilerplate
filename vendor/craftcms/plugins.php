<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'nystudio107/craft-vite' => 
  array (
    'class' => 'nystudio107\\vite\\Vite',
    'basePath' => $vendorDir . '/nystudio107/craft-vite/src',
    'handle' => 'vite',
    'aliases' => 
    array (
      '@nystudio107/vite' => $vendorDir . '/nystudio107/craft-vite/src',
    ),
    'name' => 'Vite',
    'version' => '4.0.6',
    'description' => 'Allows the use of the Vite.js next generation frontend tooling with Craft CMS',
    'developer' => 'nystudio107',
    'developerUrl' => 'https://nystudio107.com',
    'documentationUrl' => 'https://nystudio107.com/docs/vite/',
  ),
);
