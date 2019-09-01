#Bootstrap select widget for Yii2 with colors

Based on https://github.com/brussens/yii2-bootstrap-select

Used bootstrap button styles for colorizing select

##Install
Either run
```
php composer.phar require --prefer-dist orlandost/yii2-bootstrap-select "*"
```

or add

```
"orlandost/yii2-bootstrap-select": "*"
```

to the require section of your `composer.json` file.

##Options

* **clientOptions** - options of plugin. See https://silviomoreto.github.io/bootstrap-select/

##Usage
```php
use orlandost\bootstrap\select\Widget as Select;
echo $form->field($model, 'subject')->widget(Select::className(), [
                            'options' => ['data-live-search' => 'true'],
                            'colors' => [
                                '1' => 'btn-primary',
                                '2' => 'btn-secondary',
                                '3' => 'btn-success',
                                '4' => 'btn-danger',
                                '5' => 'btn-warning',
                            ],
                            'items' => [
                                '1' => 'Item 1',
                                '2' => 'Item 2',
                                '3' => 'Item 3',
                                '4' => 'Item 4',
                                '5' => 'Item 5',
                            ]
                        ]);
```
##Profit
