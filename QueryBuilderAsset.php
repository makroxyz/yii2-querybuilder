<?php

namespace leandrogehlen\querybuilder;

use yii\web\AssetBundle;
use Yii;

/**
 * This asset bundle provides the [jquery QueryBuilder library](https://github.com/mistic100/jQuery-QueryBuilder)
 *
 * @author Leandro Gehlen <leandrogehlen@gmail.com>
 */
class QueryBuilderAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery-querybuilder/dist';

    public $js = [
        'js/query-builder.standalone.min.js',
    ];

    public $css = [
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'leandrogehlen\querybuilder\BootstrapAsset',
    ];
    
    public $dark = false;
    
    public $lang;
    
    public function init()
    {
        if ($this->lang === null) {
            $this->lang = Yii::$app->language;
        }
        if ($this->dark) {
            $this->css[] = 'css/query-builder.dark.min.css';
        } else {
            $this->css[] = 'css/query-builder.default.min.css';
        }
        $this->js[] = "i18n/query-builder.{$this->lang}.js";
        parent::init();
    }
} 