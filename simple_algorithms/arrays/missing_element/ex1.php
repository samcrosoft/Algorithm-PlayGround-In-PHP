<?php
/**
 * Created by PhpStorm.
 * User: adebola
 * Date: 12/04/2018
 * Time: 13:01
 */
require_once __DIR__ . '/../../../vendor/autoload.php';
/**
 * @param array $set1
 * @param array $set2
 * @return array
 */
function missing_elements(array $set1, array $set2): array
{
    $v1 = array_count_values($set1);
    $v2 = array_count_values($set2);
    $diff = array_diff_assoc($v1, $v2);

    return array_keys($diff);
}


$entries = [
    [
        [1, 2, 3, 4, 5],
        [2, 3, 4, 5],
        [1],
    ],
    [
        [2, 2, 3, 4, 5],
        [2, 4, 4, 5],
        [2, 3, 4],
    ],
];


foreach ($entries as [$v1, $v2, $expected]) {
    $result = missing_elements($v1, $v2);
    print_r($result);
    assert($result === $expected);
}