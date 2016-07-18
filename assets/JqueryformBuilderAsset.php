<?php
namespace alien\jquery_formbuilder\assets;

use yii\web\AssetBundle;

/**
 * 18 July 2016
 *
 * @author Alien-art <alien@alien-art.ru>
 * Class Asset
 * @package alien\jquery_i18next\assets\JqueryI18NextAsset
 */
class JqueryformBuilderAsset extends AssetBundle
{
    public $sourcePath = '@bower/formBuilder';
    public $path = '';
    public $css = [
        'css/form-builder.min.css'];
    public $js = [
        'js/form-builder.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}