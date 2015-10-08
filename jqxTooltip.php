<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace tsaminaminazangalewa\jqwidgets;

use yii\helpers\Html;
use yii\helpers\Json;
use tsaminaminazangalewa\jqwidgets\assets\jqxThemeAsset;
/**
 * Button renders a bootstrap button.
 *
 * For example,
 *
 * ```php
 * echo Button::widget([
 *     'label' => 'Action',
 *     'options' => ['class' => 'btn-lg'],
 * ]);
 * ```
 * @see http://getbootstrap.com/javascript/#buttons
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @since 2.0
 */
class jqxTooltip extends Widget
{
	private $_themeAsset;
	    public $selector = '';
    public function init()
    {
        parent::init();
    }    
    public function run()
    {	
        $this->registerPlugin('jqxTooltip');
        $this->registerJS('jqxtooltip');
        $this->registerTheme();
        //return true;
    }
	protected function registerPlugin($name) {
		$id = $this->options['id'];
		if ($this->clientOptions !== false) {
			$options = empty($this->clientOptions) ? '' : Json::htmlEncode($this->clientOptions);
			$js = "jQuery('".$this->selector."').$name($options);";
			$view = $this->getView();
			$view->registerJs($js);
		}
		$this->registerClientEvents();
	}
}
