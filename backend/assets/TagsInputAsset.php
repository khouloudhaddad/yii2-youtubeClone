<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class TagsInputAsset extends AssetBundle
{
    public $basePath = '@webroot/tagsinput';
    public $baseUrl = '@web/tagsInput';

    public $css = [
        'tagsinput.css'
    ];

    public $js = [
        'tagsinput.js'
    ];

    public $depends = [
        JqueryAsset::class
    ];
}