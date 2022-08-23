<?php

// TASK01

global $keys;
$keys = [];

function filt($arr1) {
	global $keys;
	if (!in_array($arr1['id'], $keys)) {
		$keys[] = $arr1['id'];
		return true;
	}
}

$arr = [
  ['id' => 1, 'date' => "12.01.2020", 'name' => "test1"],
  ['id' => 2, 'date' => "02.05.2020", 'name' => "test2"],
  ['id' => 4, 'date' => "08.03.2020", 'name' => "test4"],
  ['id' => 1, 'date' => "22.01.2020", 'name' => "test1"],
  ['id' => 2, 'date' => "11.11.2020", 'name' => "test4"],
  ['id' => 3, 'date' => "06.06.2020", 'name' => "test3"],
];

$arr2 = array_filter($arr, "filt");

// TASK02

function fSort($arr1, $arr2)
{
    if ($arr1['id'] == $arr2['id']) {
        return 0;
    }
    return ($arr1['id'] < $arr2['id']) ? -1 : 1;
}

$arr = [
  ['id' => 1, 'date' => "12.01.2020", 'name' => "test1"],
  ['id' => 2, 'date' => "02.05.2020", 'name' => "test2"],
  ['id' => 4, 'date' => "08.03.2020", 'name' => "test4"],
  ['id' => 1, 'date' => "22.01.2020", 'name' => "test1"],
  ['id' => 2, 'date' => "11.11.2020", 'name' => "test4"],
  ['id' => 3, 'date' => "06.06.2020", 'name' => "test3"],
];

usort($arr, "fSort");

// TASK03

function filt3($arr1, $id = 3) {
	if ($arr1['id'] == $id)
		return true;
}

$arr = [
  ['id' => 1, 'date' => "12.01.2020", 'name' => "test1"],
  ['id' => 2, 'date' => "02.05.2020", 'name' => "test2"],
  ['id' => 4, 'date' => "08.03.2020", 'name' => "test4"],
  ['id' => 1, 'date' => "22.01.2020", 'name' => "test1"],
  ['id' => 2, 'date' => "11.11.2020", 'name' => "test4"],
  ['id' => 3, 'date' => "06.06.2020", 'name' => "test3"],
];

$arr2 = array_filter($arr, "filt3");

// TASK04

function filt4($arr1) {
	return array($arr1['name'] => $arr1['id']);
}

$arr = [
  ['id' => 1, 'date' => "12.01.2020", 'name' => "test1"],
  ['id' => 2, 'date' => "02.05.2020", 'name' => "test2"],
  ['id' => 4, 'date' => "08.03.2020", 'name' => "test4"],
  ['id' => 1, 'date' => "22.01.2020", 'name' => "test1"],
  ['id' => 2, 'date' => "11.11.2020", 'name' => "test4"],
  ['id' => 3, 'date' => "06.06.2020", 'name' => "test3"],
];

$arr2 = array_map("filt4", $arr);

print_r($arr2);

// TASK05

SELECT G.id, G.name
FROM goods_tags
inner JOIN goods AS G ON G.id=goods_id
inner JOIN tags AS T ON T.id=tag_id
GROUP BY G.id

// TASK06

SELECT department_id  FROM evaluations
WHERE gender==1 and value>5
GROUP BY department_id

?>