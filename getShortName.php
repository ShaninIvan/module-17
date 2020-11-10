<?php
    function getShortName($fullname){
        $parts = getPartsFromFullname($fullname);
        $shortSurname = mb_substr( $parts['surname'], 0, 1);
        return $parts['name'] . ' ' . $shortSurname . '.';
    }
?>
