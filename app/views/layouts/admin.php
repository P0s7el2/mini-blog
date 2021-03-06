<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title><?php echo $title; ?></title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="/public/scripts/jquery-3.3.1.js"></script>
    <script src="/public/scripts/form.js"></script>
</head>

<body>
<script src="js/scripts.js"></script>
<h2> Admin page </h2>
<?php if ($this->route['action'] != 'login') : ?>
<p><a href="/admin/logout">Выход</a>  <a href="/admin/posts">Посты</a>  <a href="/admin/add">Добавить</a></p>
<?php endif; ?>
    <?php echo $content; ?>

</body>
</html>