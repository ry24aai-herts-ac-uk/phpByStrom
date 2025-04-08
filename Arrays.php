<?php
$Names = ['Rajasekhar','pavan','siddarth','tanooj','vishal'];
echo "Project Member 1 : . $Names[0]<br>";
$index = 0;
foreach ($Names as $Name) {
    echo "Project Member ". $index+1 . ": $Name<br>";
    $index++;
}
echo  $Names.implode(", ", $Names)." are Project Members. <br>";

//associative arrays
$team = [
    'Rajasekhar' => 'Team Lead',
    'pavan' => 'Developer PHP',
    'siddarth' => 'Tester',
    'tanooj' => 'Designer',
    'vishal' => 'Developer DBA',
];

echo "Team Lead is " . $team['Rajasekhar'] . "<br>";
echo "Team Members are:<br>";
foreach ($team as $name => $role) {
    echo "$name is a $role<br>";
}

?>