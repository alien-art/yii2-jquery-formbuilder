<?php

use alien\jquery_formbuilder\assets\JqueryformBuilderAsset;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
JqueryformBuilderAsset::register($this);
?>

    <div id="fb-main">
    </div>
<?php
$js_form_builder = <<<JS
  jQuery(document).ready(function($) {
    'use strict';
    var options = {
    disableFields: [
      'autocomplete',
      'button',
      //'checkbox',
      //'checkbox-group',
      'date',
      'file',
      'header',
      'hidden',
      'paragraph',
      //'number',
      //'radio-group',
      //'select',
      //'text',
      //'textarea'
    ],
    controlOrder: [
        'text',
        'textarea',
        'number',
        'select',
        'checkbox',
        'checkbox-group',
        'radio-group'
      ]
    };  
    var formBuilder = $('#fb-main').formBuilder(options);
        
    $(".form-builder-save").click(function(e) {
    e.preventDefault();
    var formData = formBuilder.data('formBuilder').formData;
    alert(formData);
  });
  });
JS;

$this->registerJs($js_form_builder, yii\web\View::POS_END, 'js_form_builder');
?>