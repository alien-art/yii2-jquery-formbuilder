<?php

namespace alien\jquery_formbuilder\widget;

use Yii;
use yii\base\Widget;
use yii\helpers\Url;

class formBuilder extends Widget
{
    public $language = "ru_RU";
    public $url = "";
    public $entityName = "";
    public $entityModel = "";
    public $attributes;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $this->load_attributes();
        return $this->render('formBuilder', [
            'language' => $this->language,
            'url' => $this->url,
            'entityModel' => str_replace('\\','/', $this->entityModel),
            'entityName' => $this->entityName,
            'attributes' => $this->load_attributes()
        ]);
    }
    
    public function load_attributes ()
    {
        $model = new $this->entityModel;
        $attributes = "";
        foreach($model->getEavAttributes()->all() as $attr)
        {
            $attributes .= "{ 
                             label : '".$attr->label."',
                             name : '".$attr->name."',
                             description : '".$attr->description."',
                             type : '".$attr->eavType->name."'
                             },";
        }

       return ($attributes == "")?"":substr($attributes, 0, -1);
    }
}