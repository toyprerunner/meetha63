
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $hadd,
    'itemView' => '/group/_hadd',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 5]); ?>" class="btn btn-primary">นโยบายและแผนงานทั้งหมด</a>
