<?php

namespace alien\jquery_formbuilder\widget;

use Yii;
use yii\base\Widget;
use yii\helpers\Url;

class formBuilder extends Widget
{
    public $language = "ru_RU";

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('formBuilder', [
            'language' => $this->language
        ]);
    }
}