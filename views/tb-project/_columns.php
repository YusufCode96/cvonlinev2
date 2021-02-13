<?php
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nama_project',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'desk_project',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'desk2_project',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'header' => 'Gambar pertama',
        'format' => 'raw',
        'value' => function($data){
            return "<img width='104px' src='".Yii::getAlias('@web/themeweb/images/project/' . $data->image1)."'>";
        }
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'header' => 'Gambar kedua',
        'format' => 'raw',
        'value' => function($data){
            return "<img width='104px' src='".Yii::getAlias('@web/themeweb/images/project/' . $data->image2)."'>";
        }
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'header' => 'Gambar ketiga',
        'format' => 'raw',
        'value' => function($data){
            return "<img width='104px' src='".Yii::getAlias('@web/themeweb/images/project/' . $data->image3)."'>";
        }
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'client_project',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'team_project',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'services_project',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'date_project',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'about_id',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   