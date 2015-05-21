<html>
<head>
<?php include './php/booking.php' ?>

</head>
<body>

<h1>Test checkRoom()</h1>
<?php
$test = 'testvaerelse';
if (checkRoom($test)) {
    print $test . " <b>er</b> i listen";
} else {
    print $test . " er ikke i listen";
}
?>
<br />
<?php
$test = 'room1-3';
if (checkRoom($test)) {
    print $test . " <b>er</b> i listen";
} else {
    print $test . " er ikke i listen";
}
?>

<h1>Test checkType()</h1>
<?php
$test = 'testtype';
if (checkType($test)) {
    print $test . " <b>er</b> i listen";
} else {
    print $test . " er ikke i listen";
}
?>
<br />
<?php
$test = 'suite';
if (checkType($test)) {
    print $test . " <b>er</b> i listen";
} else {
    print $test . " er ikke i listen";
}
?>

<h1>Test countRoomOfType()</h1>
<?php
$test = '10';
print "Der er " . countRoomOfType($test) . " vaerelser af typen " . $test . ".";
?>
<br />
<?php
$test = '2';
print "Der er " . countRoomOfType($test) . " vaerelser af typen " . $test . ".";
?>

<h1>Test deleteType()</h1>
<?php
print "Tester... ";
/*
deleteType('4');
*/
?>

<h1>Test deleteRoom()</h1>
<?php
print "Tester... ";
/*
deleteRoom('1');
*/
?>

<h1>listRooms()</h1>
<?php
$rooms = listRooms();
foreach ($rooms as $row) {
    print_r($row);
    print "<br />";
}
?>

<h1>listTypes()</h1>
<?php
$types = listTypes();
foreach ($types as $row) {
    print_r($row);
    print "<br />";
}
?>

<h1>makeRoom()</h1>
<?php
/*
$makeRoomData = array(
    "newRoomName" => "bar",
    "newRoomType" => "2",
    "newRoomMaxPeople" => "10",
);
$run = makeRoom($makeRoomData);
*/
print "Tester...";
?>

<h1>makeType()</h1>
<?php
/*
$makeTypeData = array(
    "newTypeName" => "saloon",
);
$run = makeType($makeTypeData);
*/
print "Tester...";
?>

<h1>roomData()</h1>
<?php
$rooms = roomData("1");
foreach ($rooms as $row) {
    print_r($row);
    print "<br />";
}
?>

<h1>typeData()</h1>
<?php
$type = typeData("1");
foreach ($type as $row) {
    print_r($row);
    print "<br />";
}
?>

<h1>updateRoom()</h1>
<?php
/*
$updateRoomData = array(
    "updateRoomNameDK" => "NyLejlighed",
    "updateRoomNameUK" => "NewApp",
    "updateRoomNameGR" => "Neue Von",
    "updateRoomType" => "2",
    "updateRoomMaxPeople" => "5",
    "updateRoomDescriptionDK" => "Fedt: mere tekst...",
    "updateRoomDescriptionUK" => "Great mere tekst...",
    "updateRoomDescriptionGR" => "Gail mere tekst...",
    "updateRoomShortDK" => "Fedt",
    "updateRoomShortUK" => "Great",
    "updateRoomShortGR" => "Gail",
    "updateRoomAddress" => "Roskildevej 35",
    "id" => "1",
);
updateRoom($updateRoomData);
*/
print "Testing...";
?>

<h1>updateType()</h1>
<?php
/*
$updateTypeData = array(
    "updateTypeNameDK" => "NyType",
    "updateTypeNameUK" => "NewType",
    "updateTypeNameGR" => "NeueType",
    "updateTypeDescriptionDK" => "Fed Type: mere tekst...",
    "updateTypeDescriptionUK" => "Great Type mere tekst...",
    "updateTypeDescriptionGR" => "Gail Type mere tekst...",
    "id" => "1",
);
updateType($updateTypeData);
*/
print "Testing...";
?>



</body>
</html>
