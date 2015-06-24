<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class JuiAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery-ui';
    public $js = [
        'jquery-ui.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
