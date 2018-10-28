<p> Главная </p>

<br>

<? foreach ($news as $value): ?>
    <hr>
    <h3><? echo $value['title'] ?></h3>

    <p><? echo $value['text']; ?></p>
    <hr>
<? endforeach; ?>
