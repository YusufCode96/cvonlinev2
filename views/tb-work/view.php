<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbWork */
?>
<div class="tb-work-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_perusahaan',
            'desk_perusahaan:ntext',
            'image',
            'about_id',
        ],
    ]) ?>

</div>
