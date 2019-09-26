<?php
/*
 * Loops through each $monsters in 'monsters' database and
 * adds html. Sends result to be displayed on the 'collector-display' page.
 *
 * @param $monsters = monsters in db
 *
 * @data 'Name' = string
 * @data 'Weapon' = string
 * @data 'Challenge' = float
 *
 * @return holds the html and db values.
 */
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

