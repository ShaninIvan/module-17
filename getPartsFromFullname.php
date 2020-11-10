<?php
    function getPartsFromFullname($fullname){
        $keys = ['surname', 'name', 'patronomyc'];
        $values = explode(' ', $fullname);
        return array_combine($keys, $values);
    }
?>
