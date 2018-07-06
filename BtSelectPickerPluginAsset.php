<?php

namespace leandrogehlen\querybuilder;

use yii\web\AssetBundle;
use Yii;

/**
 * This asset bundle provides the [jquery QueryBuilder library](https://github.com/mistic100/jQuery-QueryBuilder)
 *
 * @author Leandro Gehlen <leandrogehlen@gmail.com>
 */
class BtSelectPickerPluginAsset extends AssetBundle {

    public $sourcePath = '@bower/bootstrap-select/dist';

    public $js = [
        'js/bootstrap-select.min.js',
    ];

    public $css = [
        'css/bootstrap-select.min.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
    public $locale = 'en_US';
    
    public function init()
    {
        $this->js[] = "js/i18n/defaults-{$this->locale}.min.js";
        parent::init();
    }
} 