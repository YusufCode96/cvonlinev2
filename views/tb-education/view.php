<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbEducation */
?>
<div class="tb-education-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_instan',
            'nama_edu',
            'tahun',
            'alamat_edu',
            'deskripsi_edu',
            'about_id',
        ],
    ]) ?>

</div>
