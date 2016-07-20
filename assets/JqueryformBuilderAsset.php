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
    public $sourcePath = '@bower/formbuilder';
    public $path = '';
    public $css = [
        'formbuilder-min.css'];
    public $js = [
        'formbuilder-min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}