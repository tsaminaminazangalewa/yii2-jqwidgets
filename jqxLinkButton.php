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
class jqxLinkButton extends Widget
{
    /**
     * @var string the tag to use to render the button
     */
    public $tagName = 'button';
    /**
     * @var string the button label
     */
    public $text = 'Button';
    /**
     * @var boolean whether the label should be HTML-encoded.
     */
    public $url='#';
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
        $this->registerPlugin('jqxButton');
        $this->registerJS('jqxbuttons');
        $this->registerTheme();
        
        return Html::a($this->text, $this->url , $this->options);
    }
}
