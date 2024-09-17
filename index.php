<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="section-block">
    <div class="block">
        <h1>Задание №1</h1>
        <div class="mini-block">
            <?
            // Создание массива со списком студентов
            $students = ['Иванов', 'Петров', 'Сидоров', 'Смирнов', 'Козлов', 'Соколов', 'Васильев'];

            // Вывод списка студентов
            echo "<h3>Список студентов: </h3>\n";
            foreach ($students as $student) {
                echo " "?><p><?=$student?></p><? "\n <br>";
            }


            // Подсчет количества студентов
            $studentCount = count($students);
            echo "\n <h3>Количество студентов:</h3>" ?><p><?=$studentCount?></p><? "\n ";

            // Проверка наличия "Сидоров" в списке
            if (in_array("Сидоров", $students)) {
                echo "\n <h3>Студент Сидоров есть в списке.</h3>\n";
            } else {
                echo "\n<h3>Студента Сидорова нет в списке.</h3>\n";
            }

            // Удаление последней фамилии из списка
            $expelled = array_pop($students);
            echo "\n<h3>Удален студент: </h3>" ?><p><?=$expelled?></p><?"\n <br>";

            // Вывод обновленного списка студентов
            echo "<h3>Обновленный список студентов: </h3>\n";
            foreach ($students as $student) {
                echo " " ?><p><?=$student?></p><? "\n <br>";
            }
            ?>
        </div>
    </div>
    <div class="block">
        <h1>Задание №2</h1>
        <div class="mini-block">
            <?
            // Создание массива с заданными значениями
            $circles = array(
                "Спортивный" => "Сидоров",
                "Художественный" => "Емелина",
                "Музыкальный" => "Иванова",
                "Литературный" => "Петров",
                "Биологический" => "Антонова"
            );

            // Сортировка массива по фамилиям
            asort($circles);

            // Вывод списка в формате "Кружок - Фамилия"
            foreach ($circles as $circle => $name) {?>
                <div class="circle"><?
                echo "<h3>$circle </h3> <p>$name</p>\n";?>
                </div><?
            }
            ?>
        </div>
    </div>

    <div class="block">
        <h1>Задание №3</h1>
        <div class="mini-block">
            <?
            $student = array(
                "Имя" => "Самат",
                "Фамилия" => "Ибрагимов",
                "Группа" => "425 ВЕБ",
                "Хобби" => array("Спорт", "Автомобили", "Программирование"),
                "Соцсети" => array(
                    "ВКонтакте" => "samtgvv",
                    "Instagram" => "samtgvv",
                    "Telegram" => "samtgvv"
                )
            );
            
            // Вывод информации о студенте
            echo "<h3>Имя: </h3>" ?><p><?=$student['Имя']?></p><? "\n";
            echo "<h3>Фамилия: </h3>" ?><p><?=$student['Фамилия']?></p><? "\n";
            echo "<h3>Группа: </h3>" ?><p><?=$student['Группа']?></p><? "\n";
            echo "<h3>Хобби: </h3>\n";
            foreach ($student["Хобби"] as $hobby) {
                echo "" ?><p><?=$hobby?></p><? "\n";
            }
            echo "<h3>Социальные сети:\n </h3>";
            foreach ($student["Соцсети"] as $platform => $username) {?>
                <div class="circle"><?
                echo "<h3>$platform</h3> <p>$username</p>\n";?>
                </div><?
            }?>
        </div>
    </div>
</div>

</body>
</html>