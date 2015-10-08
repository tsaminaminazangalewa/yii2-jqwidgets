<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace tsaminaminazangalewa\jqwidgets\assets;
use yii\web\AssetBundle;
use Yii;
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class jqxThemeAsset extends AssetBundle
{
    public $sourcePath = '@npm/jqwidgets-framework/jqwidgets';

    public $theme=[];
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    /**
     * @inheritdoc
     */
    public function registerAssetFiles($view)
    {
    		foreach($this->theme as $theme){
        	$this->css[] = "styles/jqx.".$theme.".css";
    		}
        parent::registerAssetFiles($view);
    }
}