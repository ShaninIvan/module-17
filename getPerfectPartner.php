<?php
    function getPerfectPartner ($surname, $name, $patronomyc, $persons){
        $fullnameOne = mb_convert_case(getFullnameFromParts($surname, $name, $patronomyc), MB_CASE_TITLE_SIMPLE);
        $genderOne = getGenderFromName($fullnameOne);

        $fullnameTwo = null;
        $genderTwo = $genderOne;
        $break = 0;

        while ($genderTwo == $genderOne || $break<100){
            $fullnameTwo = $persons[array_rand($persons, 1)]["fullname"];
            $genderTwo = getGenderFromName($fullnameTwo);

            $break++;
        }

        $shortnameOne = getShortName($fullnameOne);
        $shortnameTwo = getShortName($fullnameTwo);
        $percent = rand(5000, 10000)/100;

        $result = <<<RESULT
        
$shortnameOne + $shortnameTwo = 
♡ Идеально на $percent% ♡
RESULT;

        return $result;
    }
?>
