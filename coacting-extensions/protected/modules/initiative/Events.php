<?php

namespace  coacting\humhub\modules\initiative;

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
            'label' => 'Initiatives',
            'icon' => '<i class="fa fa-lightbulb-o"></i>',
            'url' => Url::to(['/initiative/index']),
            'sortOrder' => 200,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'initiative' && Yii::$app->controller->id == 'index'),
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
            'label' => 'Initiatives',
            'url' => Url::to(['/initiative/admin']),
            'group' => 'manage',
            'icon' => '<i class="fa fa-lightbulb-o"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'initiative' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 99999,
        ]);
    }

    /**
     * On build of a Space Navigation, check if this module is enabled.
     * When enabled add a menu item
     *
     * @param type $event
     */
    public static function onSpaceMenuInit($event)
    {
      $space = $event->sender->space;

      // Is Module enabled on this workspace?
      if ($space->isModuleEnabled('initiative')) {
        $event->sender->addItem(array(
          'label' => 'Initiatives',
          'group' => 'modules',
          'url' => $space->createUrl('/initiative/space'),
          'icon' => '<i class="fa fa-lightbulb-o"></i>',
          'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'initiative' && Yii::$app->controller->id == 'space'),
          'sortOrder' => 100,
        ));
      }
    }
}
