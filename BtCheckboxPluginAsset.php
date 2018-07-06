<?php

namespace leandrogehlen\querybuilder;

use yii\web\AssetBundle;
use Yii;

/**
 * This asset bundle provides the [jquery QueryBuilder library](https://github.com/mistic100/jQuery-QueryBuilder)
 *
 * @author Leandro Gehlen <leandrogehlen@gmail.com>
 */
class BtCheckboxPluginAsset extends AssetBundle {

    public $sourcePath = '@bower/awesome-bootstrap-checkbox';

    public $js = [
    ];

    public $css = [
        'awesome-bootstrap-checkbox.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset'
    ];
} 