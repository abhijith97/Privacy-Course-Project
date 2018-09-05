<?php

require_once __DIR__.'/../vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

$train = 100;
$valid = 100;
$test = 100;

for ($i=0; $i<$train; $i++) {
    echo "Train : Captcha $i/$train... \n";

    $captcha = new CaptchaBuilder;

    $captcha
        ->setDistortion(false)
        ->build()
    ;

    $label=$captcha->getPhrase();
    $captcha->save("../../data/train_data/$label"."_gregwar.jpg");
   
}

for ($i=0; $i<$test; $i++) {
    echo "Test : Captcha $i/$test... \n";

    $captcha = new CaptchaBuilder;

    $captcha
        ->setDistortion(false)
        ->build()
    ;

    $label=$captcha->getPhrase();
    $captcha->save("../../data/captcha_recognize-master/data/test_data/$label"."_gregwar.jpg");
   
}

for ($i=0; $i<$valid; $i++) {
    echo "Captcha $i/$valid... \n";

    $captcha = new CaptchaBuilder;

    $captcha
        ->setDistortion(false)
        ->build()
    ;

    $label=$captcha->getPhrase();
    $captcha->save("../../data/captcha_recognize-master/data/valid_data/$label"."_gregwar.jpg");
   
}

echo "\n";
echo "Over\n";
