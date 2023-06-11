<?php
require_once 'fakeDB/fakeDB.php';
$_POST['dop0'] = 'on';

$PlayersCount = $_POST['number_of_players'] ?? '';
$DetectivesArr = [];
$MonstersArr = [];
$PreludesArr = [];


for ($i = 0; $i <= 8; $i++)
{
    if(array_key_exists('dop' . $i, $_POST))
    {
        $DetectivesArr[] = $DetectivArray[$i];
        $MonstersArr[] = $Monsters[$i];
        if(array_key_exists('preludes_yes', $_POST)){
            $PreludesArr[] = $Preludes[$i];
        }
    }
}

$DetectivesArr = array_reduce($DetectivesArr, 'array_merge', array());
$MonstersArr = array_reduce($MonstersArr, 'array_merge', array());
function GetRandomValue($arr, $singleValue = false): string
{
    global $PlayersCount;
    $res = "";
    if($singleValue){
        return $arr[rand(0, count($arr) - 1)];
    }
    for ($i = 1; $i <= $PlayersCount; $i++){
        $randInt = rand(0, count($arr) - 1);
        $res .= $i == $PlayersCount ? $arr[$randInt] : $arr[$randInt] . "<br>";
        unset($arr[$randInt]);
        $arr = array_values($arr);
    }
    return $res;
}


if(count($PreludesArr) > 1){
    $PreludesArr = array_reduce($PreludesArr, 'array_merge', array());
    if(count($PreludesArr) > 0)
    {
        $randomPreludes = GetRandomValue($PreludesArr, true);
    }
}

$randomMonster = GetRandomValue($MonstersArr, true);
$randomDetectiv = GetRandomValue($DetectivesArr);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $resualt = isset($randomPreludes) ? ['preludes' => $randomPreludes, 'monster' => $randomMonster, 'detectives' => $randomDetectiv] : ['monster' => $randomMonster,'detectives' => $randomDetectiv];
    echo json_encode($resualt);
}