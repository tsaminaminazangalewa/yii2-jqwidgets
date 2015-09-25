<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace tsaminaminazangalewa\jqwidgets\assets;
use yii\web\AssetBundle;
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class jqxAsset extends AssetBundle
{
    public $sourcePath = '@npm/jqwidgets-framework/jqwidgets';
    public $js = [
        'jqxcore.js',
    ];
    public $css = [
        'styles/jqx.base.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}