<?php

namespace  coacting\humhub\modules\problem_canvas;

use Yii;
use yii\helpers\Url;

class Events
{
    /**
     * Defines what to do when the top menu is initialized.
     *
     * @param $event
     */
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Problems',
            'icon' => '<i class="fa fa-th"></i>',
            'url' => Url::to(['/problem_canvas/index']),
            'sortOrder' => 201,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'problem_canvas' && Yii::$app->controller->id == 'index'),
        ]);
    }

    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param $event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Problem Canvas',
            'url' => Url::to(['/problem_canvas/admin']),
            'group' => 'manage',
            'icon' => '<i class="fa fa-th"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'problem_canvas' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 99999,
        ]);
    }
}
