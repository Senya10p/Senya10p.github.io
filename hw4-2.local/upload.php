<?php
//var_dump($_FILES);
if (isset($_FILES['myimage'])) {                //Проверка, что файл существует
    if (0 == $_FILES['myimage']['error']) {     //Проверка, нет ли ошибок при загрузке файла
                                                //4. Ограничение загрузки. Загружаются только файлы типа jpeg, jpg, png
        if ($_FILES['myimage']['type'] == 'image/jpg' || $_FILES['myimage']['type'] == 'image/png' || $_FILES['myimage']['type'] == 'image/jpeg') {

                                                // Проверка наличия указанного файла.
            if (file_exists(__DIR__ . '/images/' . $_FILES['myimage']['name'])) {

                $i = 1;
                while (file_exists(__DIR__ . '/images/' . $i. $_FILES['myimage']['name'])) {     //Пока файл с таким именем существует, добавляем в начале имени число(сначала 1, если такой есть, то добавляем 2 и т.д.)
                    $i++;
                }
                move_uploaded_file(
                    $_FILES['myimage']['tmp_name'],
                    __DIR__ . '/images/' . $i .$_FILES['myimage']['name']   //Если файл с таким именем существует, то добавляем в начале имени число и перемещаем файл из временного места в папку images
                );
                echo 'Файл успешно загружен!';
            }
            else {
            //3. Иначе если файла с таким именем не существует, то загружаем файл от пользователя с тем же именем файла. Перемещаем файл из временного места в папку images
            move_uploaded_file(
                $_FILES['myimage']['tmp_name'],
                __DIR__ . '/images/' . $_FILES['myimage']['name']           //Загрузка файла от пользователя с тем же именем файла, что и на компьютере пользователя
            );
            echo 'Файл успешно загружен!';
            }
        }
        else {
            echo 'Ошибка! Файл не загружен. Тип файла должен быть jpeg, jpg, png';
        }
    }
}
?>
<br><br>
<a href="/hw4-2.local/gallery.php">Перейти в фотогалерею</a><br><br>
<a href="/hw4-2.local/index.php">Перейти в форму для загрузки изображений</a>