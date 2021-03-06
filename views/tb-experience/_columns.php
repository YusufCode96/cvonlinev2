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
        'class' => '\kartik\grid\DataColumn',
        'header' => 'Foto Profil',
        'format' => 'raw',
        'value' => function($data){
            return "<img width='104px' src='".Yii::getAlias('@web/themeweb/images/experience/' . $data->foto_exper)."'>";
        }
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'tahun',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'judul_exper',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'deskripsi_exper',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'about_id',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'alamat_exper',
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