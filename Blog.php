<?php

namespace serglitsiv\blog;

/**
 * blog module definition class
 */
class Blog extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'serglitsiv\blog\controllers';
    public $defaultRoute = 'blog';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
