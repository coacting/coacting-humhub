<?php

use coacting\humhub\modules\initiative\Events;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\widgets\TopMenu;
use humhub\modules\space\widgets\Menu;

return [
	'id' => 'initiative',
	'class' => 'coacting\humhub\modules\initiative\Module',
	'namespace' => 'coacting\humhub\modules\initiative',
	'events' => [
        [
            'class' => Menu::class,
            'event' => Menu::EVENT_INIT,
            'callback' => [Events::class, 'onSpaceMenuInit']
        ],
		[
			'class' => TopMenu::class,
			'event' => TopMenu::EVENT_INIT,
			'callback' => [Events::class, 'onTopMenuInit'],
		],
		[
			'class' => AdminMenu::class,
			'event' => AdminMenu::EVENT_INIT,
			'callback' => [Events::class, 'onAdminMenuInit']
		],
	],
];
