<?php

use humhub\widgets\Button;

// Register our module assets, this could also be done within the controller
\coacting\humhub\modules\problem_canvas\assets\Assets::register($this);

$displayName = (Yii::$app->user->isGuest) ? Yii::t('ProblemCanvasModule.base', 'Guest') : Yii::$app->user->getIdentity()->displayName;

// Add some configuration to our js module
$this->registerJsConfig("problem_canvas", [
    'username' => (Yii::$app->user->isGuest) ? $displayName : Yii::$app->user->getIdentity()->username,
    'text' => [
        'hello' => Yii::t('ProblemCanvasModule.base', 'Hi there {name}!', ["name" => $displayName])
    ]
])

?>

<div class="panel-heading"><strong>Problem canvas</strong> <?= Yii::t('ProblemCanvasModule.base', 'overview') ?></div>

<div class="panel-body">
    <p><?= Yii::t('ProblemCanvasModule.base', 'Hello World!') ?></p>

    <?=  Button::primary(Yii::t('ProblemCanvasModule.base', 'Say Hello!'))->action("problem_canvas.hello")->loader(false); ?></div>
