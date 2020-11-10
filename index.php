<?php
    $example_persons_array = [
        [
            'fullname' => 'Иванов Иван Иванович',
            'job' => 'tester',
        ],
        [
            'fullname' => 'Степанова Наталья Степановна',
            'job' => 'frontend-developer',
        ],
        [
            'fullname' => 'Пащенко Владимир Александрович',
            'job' => 'analyst',
        ],
        [
            'fullname' => 'Громов Александр Иванович',
            'job' => 'fullstack-developer',
        ],
        [
            'fullname' => 'Славин Семён Сергеевич',
            'job' => 'analyst',
        ],
        [
            'fullname' => 'Цой Владимир Антонович',
            'job' => 'frontend-developer',
        ],
        [
            'fullname' => 'Быстрая Юлия Сергеевна',
            'job' => 'PR-manager',
        ],
        [
            'fullname' => 'Шматко Антонина Сергеевна',
            'job' => 'HR-manager',
        ],
        [
            'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
            'job' => 'analyst',
        ],
        [
            'fullname' => 'Бардо Жаклин Фёдоровна',
            'job' => 'android-developer',
        ],
        [
            'fullname' => 'Шварцнегер Арнольд Густавович',
            'job' => 'babysitter',
        ],
    ];

    require 'getFullnameFromParts.php';
    require 'getPartsFromFullname.php';
    require 'getShortName.php';
    require 'getGenderFromName.php';
    require 'getGenderDescription.php';
    require 'getPerfectPartner.php';


    $info = <<<INFO
\nВыберите функцию для проверки:

1 - getFullnameFromParts
2 - getPartsFromFullname
3 - getShortName
4 - getGenderFromName
5 - getGenderDescription
6 - getPerfectPartner
 \n
INFO;

    echo $info;
    $select = readline("Введите номер функции: ");

    switch($select){
        case "1": 
            echo "\nВыбрана функция getFullnameFromParts \n\n";
            $surname = readline("Введите фамилию: ");
            $name = readline("Введите имя: ");
            $patronomyc = readline("Введите отчество: ");

            echo getFullnameFromParts($surname, $name, $patronomyc);
        break;
        case "2":
            echo "\nВыбрана функция getPartsFromFullname \n\n";
            $fullname = readline("Введите ФИО: ");

            print_r(getPartsFromFullname($fullname));
        break;
        case "3":
            echo "\nВыбрана функция getShortName \n\n";
            $fullname = readline("Введите ФИО: ");

            echo getShortName($fullname);
        break;
        case "4":
            echo "\nВыбрана функция getGenderFromName \n\n";
            $fullname = readline("Введите ФИО: ");

            echo getGenderFromName($fullname);
        break;
        case "5":
            echo "\nВыбрана функция getGenderDescription. Значения взяты из массива в файле index.php \n\n";

            getGenderDescription($example_persons_array);
        break;
        case "6": 
            echo "\nВыбрана функция getPerfectPartner. Значения для поиска пары взяты из массива в файле index.php \n\n";
            $surname = readline("Введите фамилию: ");
            $name = readline("Введите имя: ");
            $patronomyc = readline("Введите отчество: ");

            echo getPerfectPartner ($surname, $name, $patronomyc, $example_persons_array);
        break;
        default: 
            echo "\nНекорректный ввод";
        break;
    }
?>
