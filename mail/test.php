<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
        <th>Наименование</th>
        <th>Количество</th>
        <th>Цена</th>
        <th>Сумма</th>
        </thead>
        <tbody>
        <?php foreach($test as $id=>$item){?>
            <tr>
                <td><?= $item['name'] ?></td>
                <td><?= $item['qty'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['qty'] * $item['price'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>


