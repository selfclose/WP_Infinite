<?php
require ('vendor/RedBeanPHP4_3_3/rb.php');
require ('src/autoload.php');

R::setup( 'mysql:host=localhost;dbname=test_redbean', 'root', '12345678' );
R::debug(true);
