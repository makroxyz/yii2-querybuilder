<?php

namespace leandrogehlen\querybuilder;

use yii\web\AssetBundle;
use Yii;

/**
 * This asset bundle provides the [jquery QueryBuilder library](https://github.com/mistic100/jQuery-QueryBuilder)
 *
 * @author Leandro Gehlen <leandrogehlen@gmail.com>
 */
class InteractjsPluginAsset extends AssetBundle {

    public $sourcePath = '@bower/interactjs/dist';

    public $js = [
        'interact.min.js'
    ];

    public $css = [
    ];

    public $depends = [
    ];
} 