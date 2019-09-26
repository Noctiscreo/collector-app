<?php
/*
 * Loops through the array in the db, accesses the values on each key,
 * and puts the result into html.
 *
 * @param $monsters array of monsters with different attributes
 *
 * @data 'Name' = string
 * @data 'Weapon' = string
 * @data 'Challenge' = float
 *
 * @return sends string result to be displayed on the 'collector-display' page.
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

