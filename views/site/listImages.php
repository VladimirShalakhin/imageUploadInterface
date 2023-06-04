<?php
use yii\grid\GridView;
use yii\helpers\Html;
?>
<html>
<h1>Банк изображений</h1>
<a href="/upload" type="button" class="btn btn-primary">Добавить изображение</a>
</html>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => "{summary}\n{items}\n<div class='d-flex justify-content-center'>{pager}</div>",
        'pager' => ['class' => \yii\bootstrap5\LinkPager::class,
            'firstPageLabel' => 'First',
            'lastPageLabel'  => 'Last',
            'maxButtonCount' => 5
            ],
        'columns' => [
            'name',
            'upload_date',
            [
                'header' => 'Изображение',
                'contentOptions' => ['style' => 'width:auto;
                                                 height:auto;',
                                    'class' => 'text-center'],
                'attribute' => 'image',
                'label' => 'Image',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::a(Html::img(Yii::$app->request->BaseUrl.'/uploads/' . $data['name'],
                        ['width' => '60px', 'height' => '40px']), '/uploads/'.$data['name']);
                }
            ]
        ]
    ])
?>
