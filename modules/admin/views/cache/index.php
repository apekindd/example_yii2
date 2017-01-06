<?php
$this->title = 'Кеш сайта';
?>
<style>
    .list-group li {
        display: inline;
        background: transparent;
        border: none;
        padding:0;
    }
</style>
<?php
$arColors = [
    'btn-primary', 'btn-success', 'btn-info', 'btn-warning'
];
?>
<div class="container">
    <h2>Кеш на сайте</h2>
    <p>Нажмите на кнопку чтобы очистить кеш</p>
    <?php if(!empty($cacheArray)){?>
    <ul class="list-group col-md-12">
        <?php foreach($cacheArray as $cache){ ?>
        <li class="list-group-item">
                <form action="/admin/cache/" method="post" style="display:inline;">
                        <input type="hidden" name="code" value="<?= $cache ?>" />
                        <input class="btn <?=$arColors[rand(0,3)] ?>" aria-hidden="true" type="submit" value="<?= $translate[$cache] ?>" />
                </form>
        </li>
        <?php } ?>
    </ul>
        <form action="/admin/cache/" method="post" style="margin-top:10%">
            <input type="hidden" name="code" value="clear_all" />
            <input class="btn btn-danger" aria-hidden="true" type="submit" value="Очистить все" />
        </form>
    <?php }else{
        echo '<h3 class="text-danger">Кеша нет!</h3>';
    } ?>
</div>

