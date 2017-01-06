<?if($tables):?>
<div class="table-container">    
<div class="table-tabs">
    <?if(count($tables)>1):?>
    <ul class="table-tabs__links">
        <?$c=0;foreach ($tables as $item):?>
        <li class="table-tabs__item <?if($c++==0) echo "is-active";?>">
            <?=$item->title?>
        </li>
        <?endforeach;?>
    </ul>
    <?endif;?>
    <?$c=0;foreach ($tables as $item):?>
    <div class="table-tabs__content <?if($c++==0) echo "is-active";?>">
        <div class="table-container">
            <?=$item->text?>
        </div>
    </div>
    <?endforeach;?>
</div>
</div>
<?endif?>