<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

echo froala\froalaeditor\FroalaEditorWidget::widget([
    'name' => 'content',
    'options' => [
        // html attributes
        'id'=>'content'
    ],
    'clientOptions' => [
        'toolbarInline'=> false,
        'theme' =>'royal', //optional: dark, red, gray, royal
        'language'=>'en_gb', // optional: ar, bs, cs, da, de, en_ca, en_gb, en_us ...
		'events' => [
          'blur' => new \yii\web\JsExpression('function () {console.log("blur 1");}'),
		  'focus' => new \yii\web\JsExpression('function () {console.log("focus 1");}')
        ]
    ]
]);

echo froala\froalaeditor\FroalaEditorWidget::widget([
    'name' => 'content2',
    'options' => [
        // html attributes
        'id'=>'content2'
    ],
    'clientOptions' => [
        'toolbarInline'=> false,
        'theme' =>'royal', //optional: dark, red, gray, royal
        'language'=>'en_gb', // optional: ar, bs, cs, da, de, en_ca, en_gb, en_us ...
		'events' => [
          'blur' => new \yii\web\JsExpression('function () {console.log("blur 2");}'),
		  'focus' => new \yii\web\JsExpression('function () {console.log("focus 2");}')
        ]
    ]
]);
?>
