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
    $('#fb-main').formBuilder();
  });
JS;

$this->registerJs($js_form_builder, yii\web\View::POS_END, 'js_form_builder');
?>