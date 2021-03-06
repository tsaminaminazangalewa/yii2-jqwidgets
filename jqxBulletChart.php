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
class jqxBulletChart extends Widget
{
    public function run()
    {
        $this->registerPlugin('jqxBulletChart');
        $this->registerJS('jqxbulletchart');
        $this->registerJS('jqxdata');

        if($this->clientOptions['showTooltip']){
        $this->registerJS('jqxtooltip');
        
        }
        
        
        return Html::tag('div','', $this->options);        
        //return Html::tag($this->tagName, $this->encodeLabel ? Html::encode($this->label) : $this->label, $this->options);
    }
}
