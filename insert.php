<?php
include ('include.php');

$book = new \RB\Model\Book();
$book->setName('book'.rand(1,1000));
$book->setPrice(rand(1, 1000));

echo $book->insertAction();
