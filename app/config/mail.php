<?php

return array(
    'driver' => 'smtp',
    'host' => '',
    'port' => 465,
    'from' => array('address' => null, 'name' => null),
    'encryption' => 'ssl',
    'username' => '',
    'password' => '',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
);
