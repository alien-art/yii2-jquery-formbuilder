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
    public $sourcePath = '@vendor/kevinchappell/formBuilder';
    public $path = '';
    public $css = [
        'dist/form-builder.min.css'];
    public $js = [
        'dist/form-builder.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
		'yii\jui\JuiAsset'
    ];
}