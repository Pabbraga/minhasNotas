<?php
require './components/data.php';

$dt = new Data('root', 'etec');

print_r($dt->selectData('user'));
print_r($dt->selectData('user'));