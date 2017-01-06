<div>
    <p>Здравствуйте!</p>
    <p>Новый пользователь на сайте заполнил форму «<?= $params['title'] ?>».</p>
    <?php unset($params['title'])?>
    <p>Заполненные поля:</p>
    <ul>
    <?php $i=1;foreach($params as $name=>$value){ ?>
        <li><?= $i.") ".$name.": ".$value ?></li>
    <?php $i++; } ?>
    </ul>
</div>