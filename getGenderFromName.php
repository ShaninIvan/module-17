<?php
    function getGenderFromName($fullname){
        $parts = getPartsFromFullname($fullname);

        $surname = mb_strtolower($parts['surname']);
        $name = mb_strtolower($parts['name']);
        $patronomyc = mb_strtolower($parts['patronomyc']);

        $result = 0;

        // Признаки женского ФИО
        if (mb_substr($patronomyc, -3) == 'вна') {$result -=1;}
        if (mb_substr($name, -1) == 'а') {$result -=1;}
        if (mb_substr($surname, -2) == 'ва') {$result -=1;}

        // Признаки мужского ФИО
        if (mb_substr($patronomyc, -2) == 'ич') {$result +=1;}
        if (mb_substr($name, -1) == 'й' || mb_substr($name, -1) == 'й') {$result +=1;}
        if (mb_substr($surname, -1) == 'в') {$result +=1;}

        //Результат
        if ($result>0){return 'мужской пол';}
        if ($result<0){return 'женский пол';}
        return 'неопределенный пол';
    }
?>
