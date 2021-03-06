<?php
/** @var $bottom bool  */
use yii\helpers\Html;
use kartik\icons\Icon;

?>

<nav id="dotplant-floating-panel" class="<?= $bottom?'dotplant-floating-panel-bottom':''?>">
    <div class="container-fluid">
        <a href="/backend/" class="navbar-text">DotPlant2</a>
        <div class="navbar-text">

            <?= Yii::t('app', 'Logged as')?>:
            <?= Yii::$app->user->identity->username ?>
            <a href="/logout">
                <?= Icon::show('sign-out') ?>
            </a>
        </div>

        <?= \yii\widgets\Menu::widget([
            'items' => $items,
            'encodeLabels' => false,
            'options' => [
                'class' => 'nav navbar-nav',
            ],
            'linkTemplate' => '<a href="{url}" target="_blank">{label}</a>',
        ]) ?>


    </div>

</nav>
<?php if (!$bottom) :?>
<script>
    $(function(){
        $('body').css('padding-top', parseInt($('body').css('padding-top'))+51);
    })
</script>
<?php endif; ?>