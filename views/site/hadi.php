
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $hadg,
    'itemView' => '/group/_hadg',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 10]); ?>" class="btn btn-primary">นโยบายและแผนงานทั้งหมด</a>
