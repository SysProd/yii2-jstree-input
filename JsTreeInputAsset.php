<?php

namespace SysProd\JsTreeInput;

use yii\web\AssetBundle;

/**
 * JsTree asset bundle.
 *
 * Class TreeInputAsset
 * @package SysProd\JsTree
 */
class JsTreeInputAsset extends AssetBundle
{

    public $sourcePath = '@vendor/vakata/jstree/dist';

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();

        // set css & js
        $min = YII_DEBUG ? '' : '.min';
        $this->css = ["themes/default/style{$min}.css"];
        $this->js = ["jstree{$min}.js"];
    }

}
