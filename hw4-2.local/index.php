<html>
<head>
    <title>PHP-1</title>
</head>
    <body>
        <h1>PHP</h1>
        <h2>4 урок</h2>
        <h2>Работа с файлами на сервере. Загрузка от клиента</h2>
        <h4>Домашняя работа</h4>
        <h5>2.	На основе кода, изученного на уроке, сделайте простейшую фотогалерею:<br>
            1).	Скрипт, который выводит в браузер изображения из определенной папки на сервере<br>
            2).	Форма и скрипт загрузки нового изображения в эту папку<br>
            3.	Решите задачу загрузки файла от пользователя в заданное место на сервере с тем же именем файла, что он имел на компьютере пользователя.<br>
            4.	* Решите задачу ограничения загрузки, например - только файлов JPEG и PNG<br>
        </h5>
        <h4>Фотогалерея</h4>
        <p>Загрузка изображений в формате JPEG, JPG, PNG</p>
        <!--2. 2). Форма загрузки нового изображения в папку images-->
        <form action="/upload.php" method="post" enctype="multipart/form-data">

            <input type="file" name="myimage">
            <button type="submit">Добавить</button>

        </form>
        <br><br>
        <a href="gallery.php">Перейти в фотогалерею</a>

    </body>
</html>