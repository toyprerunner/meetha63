
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $hadf,
    'itemView' => '/group/_hadf',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 7]); ?>" class="btn btn-primary">นโยบายและแผนงานทั้งหมด</a>
