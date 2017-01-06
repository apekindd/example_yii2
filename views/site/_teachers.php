<? foreach ($teachers as $item):?>
    <div class="bio">
        <div class="bio__picture">
            <IMG src="<?=\yii\helpers\Url::to("/web/img/{$item->img}")?>" alt="<?=$item->name?>"></IMG>
        </div>
        <div class="bio__info">
            <div class="bio__title">
                <h2><?=$item->name?></h2>
            </div>
            <div class="bio__subtitle">
                <h3><?=$item->position?></h3>
            </div>
            <div class="bio__text"><?=$item->text?></div>
        </div>
    </div>
<? endforeach;?>
<br>

