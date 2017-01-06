<?
use \yii\helpers\Url;

$this->title = "Admin";
?>
<div class="admin-default-index">

    <h1>Admin</h1>

    <ul>
        <li><a href="<?= Url::to(['/admin/courses']) ?>">Курсы</a></li>
        <li><a href="<?= Url::to(['/admin/trainings']) ?>">Тренинги</a></li>
        <li><a href="<?= Url::to(['/admin/blog']) ?>">Blog</a></li>
        <li><a href="<?= Url::to(['/admin/news']) ?>">News</a></li>
        <li><a href="<?= Url::to(['/admin/offers']) ?>">Offers</a></li>
        <li><a href="<?= Url::to(['/admin/reviews']) ?>">Отзывы</a></li>
        <li><a href="<?= Url::to(['/admin/levels']) ?>">Уровни английского языка</a></li>
        <li><a href="<?= Url::to(['/admin/partners']) ?>">Партнеры</a></li>
        <li><a href="<?= Url::to(['/admin/static-page']) ?>">Статические страницы</a></li>
    </ul>

</div>
