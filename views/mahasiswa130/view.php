
<?php
use yii\widgets\DetailView;
?>

<?=
    DetailView::widget([
        'model' => $mhs,
        'attributes' => [
            'id130',
            'nim130',
            'nama130',
            'kelas130',
            'status130',
        ],
    ]);
?>