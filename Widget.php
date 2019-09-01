<?php
/**
 * Bootstrap-select yii2 widget with colors.
 * Class Select
 * @author Pavel Orlov <orlandop@rambler.ru>
 * @since 1.0.0
 * @version 1.0.0
 * @link https://github.com/orlandost/yii2-bootstrap-select <Repostory>
 * @copyright 2019 Pavel Orlov
 * @license http://opensource.org/licenses/MIT MIT
 * @package orlandost\bootstrap\select
 */

namespace orlandost\bootstrap\select;

use Yii;
use yii\widgets\InputWidget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
* Based on brussens/yii2-bootstrap-select
* @see https://github.com/brussens/yii2-bootstrap-select
*/
class Widget extends InputWidget
{
    /**
     * Items for dropDownList
     * @var array
     */
    public $items = [];

    /**
     * Options of JavaScript plugin
     * @see https://silviomoreto.github.io/bootstrap-select/ Documentation of JavaScript plugin
     * @var array
     */
    public $clientOptions = [];

    /**
     * JS plugin selector class
     * @var string
     */
    public $cssClass = 'select-picker';

    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */
    public function run()
    {
        parent::run();
        $this->registerJs();
        return ($this->hasModel() ? Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options) : Html::dropDownList($this->name, $this->value, $this->items, $this->options));
    }

    /**
     * Registration JavaScript scripts.
     */
    private function registerJs()
    {
        $view = $this->getView();
        $options = !empty($this->clientOptions) ? Json::encode($this->clientOptions) : '';
        Html::addCssClass($this->options, $this->cssClass);
        Html::addCssClass($this->options, 'form-control');
        Asset::register($view);
        $view->registerJs("jQuery('.".$this->cssClass."').selectpicker(".$options.");");
    }
}
