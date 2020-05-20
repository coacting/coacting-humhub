<?php

namespace coacting\humhub\modules\initiative\controllers;

use humhub\modules\content\components\ContentContainerController;

class SpaceController extends ContentContainerController
{

    /**
     * Render admin only page
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}

