<?php

namespace coacting\humhub\modules\problem_canvas\controllers;

use humhub\components\Controller;

class IndexController extends Controller
{

    public $subLayout = "@problem_canvas/views/layouts/default";

    /**
     * Renders the index view for the module
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}

