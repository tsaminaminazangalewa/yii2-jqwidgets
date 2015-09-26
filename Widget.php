<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace tsaminaminazangalewa\jqwidgets;
use Yii;
use yii\helpers\Json;
use tsaminaminazangalewa\jqwidgets\assets\jqxAsset;
use tsaminaminazangalewa\jqwidgets\assets\jqxThemeAsset;
/**
 * \yii\bootstrap\Widget is the base class for all bootstrap widgets.
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Widget extends \yii\base\Widget {
	private $_themeAsset;
	private $_asset;
	/**
	 * @var array the HTML attributes for the widget container tag.
	 * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
	 */
	public $options = [];
	/**
	 * @var array the options for the underlying Bootstrap JS plugin.
	 * Please refer to the corresponding Bootstrap plugin Web page for possible options.
	 * For example, [this page](http://getbootstrap.com/javascript/#modals) shows
	 * how to use the "Modal" plugin and the supported options (e.g. "remote").
	 */
	public $clientOptions = [];
	/**
	 * @var array the event handlers for the underlying Bootstrap JS plugin.
	 * Please refer to the corresponding Bootstrap plugin Web page for possible events.
	 * For example, [this page](http://getbootstrap.com/javascript/#modals) shows
	 * how to use the "Modal" plugin and the supported events (e.g. "shown").
	 */
	public $clientEvents = [];
	/**
	 * Initializes the widget.
	 * This method will register the bootstrap asset bundle. If you override this method,
	 * make sure you call the parent implementation first.
	 */
	public function init() {
		parent::init();
		if (!isset($this->options['id'])) {
			$this->options['id'] = $this->getId();
		}
	}
	/**
	 * Registers a specific plugin and the related events
	 * @param string $name the name of the Bootstrap plugin
	 */
	protected function registerPlugin($name) {
		
		$id = $this->options['id'];
		if ($this->clientOptions !== false) {
			$options = empty($this->clientOptions) ? '' : Json::htmlEncode($this->clientOptions);
			$js = "jQuery('#$id').$name($options);";
				$view = $this->getView();
			$view->registerJs($js);
		}
		$this->registerClientEvents();
	}
	/**
	 * Registers JS event handlers that are listed in [[clientEvents]].
	 * @since 2.0.2
	 */
	protected function registerClientEvents() {
		if (!empty($this->clientEvents)) {
			$id = $this->options['id'];
			$js = [];
			foreach ($this->clientEvents as $event => $handler) {
				$js[] = "jQuery('#$id').on('$event', $handler);";
			}
			$this->getView()->registerJs(implode("\n", $js));
		}
	}
	protected function registerTheme() {
		if (isset($this->clientOptions['theme'])) {
			if($this->_themeAsset==null) {
				$view = $this->getView();
				$this->_themeAsset = jqxThemeAsset::register($view);
			}
			$this->_themeAsset->theme = $this->clientOptions['theme'];
		}
	}
	protected function registerJS($js) {
			if($this->_asset==null) {
				$view = $this->getView();
				$this->_asset = jqxAsset::register($view);
			}
				$this->_asset->js[] = $js.'.js';

	}
}
