<?php
use yii\helpers\Html;
?>
<?if(!empty($result)):?>
    <? foreach ($result as $item): ?>
        <div class="search-result__item">
            <div class="search-result__title"><a href="<?=$item['url']?>"><?=$item['title']?></a>
            </div>
            <div class="search-result__text"> <?=preg_replace("/($q)/i","<span class=\"search-result__text search-result__text_bold\">".$q."</span>",$item['text'])?></div>
        </div>
    <? endforeach;else: echo "end";endif;