<?php
    function getGenderDescription($persons){
        $male = 0;
        $female = 0;
        $undefined = 0;

        foreach ($persons as $person){
            $gender = getGenderFromName($person["fullname"]);

            switch($gender){
                case 'мужской пол': 
                    $male +=1;
                break;
                case 'женский пол':
                    $female +=1;
                break;
                case 'неопределенный пол':
                    $undefined +=1;
                break;
            }
        }

        $count = count($persons);

        $male = round($male/$count*100, 1);
        $female = round($female/$count*100, 1);
        $undefined= round($undefined/$count*100, 1);

        $result = <<<RESULT
Гендерный состав аудитории:
---------------------------
Мужчины - $male%
Женщины - $female%
Не удалось определить - $undefined%
RESULT;

        echo $result;
    }
?>
