<?php
require __DIR__ .'/../vendor/autoload.php';

return array(
             'db' => array('host' => 'localhost',
                           'username' => 'root',
                           'password' => '',
                           'name' => 'e-learning'),
             'paypal' => array(
             	'success' => 'http://cong.dev3/e-learning/paypal-success',
             	'cancel' => 'http://cong.dev3/e-learning/paypal-cancel'
             ),
             'mail' => array('abc' => 'abc@gamil.com')
            );


?>