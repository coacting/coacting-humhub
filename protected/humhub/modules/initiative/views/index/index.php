<?php

use humhub\widgets\Button;

// Register our module assets, this could also be done within the controller
\coacting\humhub\modules\initiative\assets\Assets::register($this);

$displayName = (Yii::$app->user->isGuest) ? Yii::t('InitiativeModule.base', 'Guest') : Yii::$app->user->getIdentity()->displayName;

// Add some configuration to our js module
$this->registerJsConfig("initiative", [
    'username' => (Yii::$app->user->isGuest) ? $displayName : Yii::$app->user->getIdentity()->username,
    'text' => [
        'hello' => Yii::t('InitiativeModule.base', 'Hi there {name}!', ["name" => $displayName])
    ]
])

?>

<div class="panel-heading"><strong>Initiative</strong> <?= Yii::t('InitiativeModule.base', 'overview') ?></div>

<div class="panel-body">
    <p><?= Yii::t('InitiativeModule.base', 'Hello World!') ?></p>

    <?=  Button::primary(Yii::t('InitiativeModule.base', 'Say Hello!'))->action("initiative.hello")->loader(false); ?></div>
