<?php

include"db.php";

//insert into table timing data

$ins=$con->prepare("insert into timing(start_station,end_station,degree,speed,duration,start_time,end_time) values(?,?,?,?,?,?,?)");
$from='قنا';
$to='القاهرة';
$deg='vip';
$speed='500كم/س';
$dur='5:15';
$sta='7:15 م';
$end='1 م';

$ins->execute(array(
$from,$to,$deg,$speed,$dur,$sta,$end
)
);



$ins=$con->prepare("insert into timing(start_station,end_station,degree,speed,duration,start_time,end_time) values(?,?,?,?,?,?,?)");
$from='سوهاج';
$to='اسيوط';
$deg='mokeaf';
$speed='500كم/س';
$dur='5:15';
$sta='7:15 م';
$end='1 م';

$ins->execute(array(
$from,$to,$deg,$speed,$dur,$sta,$end
)
);

$ins=$con->prepare("insert into timing(start_station,end_station,degree,speed,duration,start_time,end_time) values(?,?,?,?,?,?,?)");
$from='اسوان';
$to='القاهرة';
$deg='exprise';
$speed='500كم/س';
$dur='5:15';
$sta='7:15 م';
$end='1 م';

$ins->execute(array(
$from,$to,$deg,$speed,$dur,$sta,$end
)
);

$ins=$con->prepare("insert into timing(start_station,end_station,degree,speed,duration,start_time,end_time) values(?,?,?,?,?,?,?)");
$from='الاقصر';
$to='اسيوط';
$deg='noom';
$speed='500كم/س';
$dur='5:15';
$sta='7:15 م';
$end='1 م';

$ins->execute(array(
$from,$to,$deg,$speed,$dur,$sta,$end
)
);
