<?php
require '../vendor/autoload.php';

// carbonオブジェクトの挙動が上手く働かない
use Carbon\Carbon;

$dt = CarbonImmutable::now();

echo $dt;