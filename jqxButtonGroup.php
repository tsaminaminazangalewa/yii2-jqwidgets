<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace tsaminaminazangalewa\jqwidgets;

use yii\helpers\Html;

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
class jqxButtonGroup extends Widget
{
    /**
     * @var string the tag to use to render the button
     */
    public $tagName = 'div';
    public $datas = [];
    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        //$this->clientOptions = false;
        //Html::addCssClass($this->options, 'btn');
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        $this->registerPlugin('jqxButtonGroup');
        $this->registerJS('jqxbuttongroup');
        $this->registerTheme();
        $str=Html::beginTag('div', $this->options);
		  foreach($this->datas as $d){
        		$str.=Html::tag('button', $d);
		  		
		  }
        $str.=Html::endTag('div');
        return $str; 
        //return Html::tag($this->tagName, '', $this->options);
    }
}
