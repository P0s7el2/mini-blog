<h3><?php echo $title; ?></h3>
<form action="/admin/update" method="post">
    <p>Название</p>
    <p><input type="text" name="name"></p>
    <p>Описание</p>
    <p><input type="text" name="description"></p>
    <p>Текст</p>
    <p><input type="text" name="text"></p>
    <p>Изображение</p>
    <p><input type="file" name="img"></p>
    <b><button type="submit" name="enter">Добавить</button></b>
</form>