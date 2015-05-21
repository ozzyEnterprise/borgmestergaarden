<?php
//General:
include 'variables.php';
include 'databaseloginvariables.php';
include 'connect.php';
include 'cutdescription.php';
include 'sqlWantedInfo.php';
include 'alert.php';
include 'lookupuserpassword.php';
include 'lookupusersecretkey.php';
include 'getsecretkey.php';
include 'userkey.php';

//Rooms:
include 'listrooms.php';
include 'checkroomname.php';
include 'makeroomsql.php';
include 'updateroom.php';
include 'roomdata.php';
include 'deleteRoom.php';

//Types:
include 'listtypes.php';
include 'checktypename.php';
include 'maketypesql.php';
include 'countroomoftype.php';
include 'deletetype.php';
include 'updatetype.php';
include 'typedata.php';

//Overview.php
include 'checkandmaketype.php';
include 'checkandmakeroom.php';

//Type.php
include 'typeeditbox.php';

//Room.php
include 'roomeditbox.php';
include 'picturesection.php';
include 'deletepicture.php';
//include 'uploadpicture.php';
?>