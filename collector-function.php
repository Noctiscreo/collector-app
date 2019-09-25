<?php

function monsterDisplay($monsters){
    $html = '';
    foreach($monsters as $monster){
        $html .= '<div>'
        . '<h3>Name: ' . $monster['Name'] . '</h3>'
        . '<p>Weapon: ' . $monster['Weapon'] . '</p>'
        . '<p>Challenge: ' . $monster['Challenge'] . '</p>'
        . '</div>';
    }
    return $html;
}

