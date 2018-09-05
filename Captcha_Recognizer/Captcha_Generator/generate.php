<?php

require_once __DIR__.'/./vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

$train = 100000;
$valid = 100;
$test = 1000;

$basepath = "../data/"; 
for ($i=0; $i<$train; $i++) {
    echo "Train : Captcha $i/$train... \n";

    $captcha = new CaptchaBuilder;

    $captcha
        ->setDistortion(false)
        ->build()
    ;

    $label=$captcha->getPhrase();
    $captcha->save($basepath."train_data/$label"."_gregwar.jpg");
   
}

for ($i=0; $i<$test; $i++) {
    echo "Test : Captcha $i/$test... \n";

    $captcha = new CaptchaBuilder;

    $captcha
        ->setDistortion(false)
        ->build()
    ;

    $label=$captcha->getPhrase();
    $captcha->save($basepath."test_data/$label"."_gregwar.jpg");
   
}

for ($i=0; $i<$valid; $i++) {
    echo "Valid : Captcha $i/$valid... \n";

    $captcha = new CaptchaBuilder;

    $captcha
        ->setDistortion(false)
        ->build()
    ;

    $label=$captcha->getPhrase();
    $captcha->save($basepath."valid_data/$label"."_gregwar.jpg");
   
}

echo "\n";
echo "Over\n";
