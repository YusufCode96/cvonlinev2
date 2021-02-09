<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbAbout */
?>
<div class="tb-about-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'foto',
            'isi:ntext',
            'nama',
            'bagian',
            'ttl',
            'alamat:ntext',
            'negara',
            'no_hp',
            'email:email',
            'tahun_exper',
        ],
    ]) ?>

</div>
