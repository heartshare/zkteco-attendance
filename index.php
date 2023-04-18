<html>
    <head>
        <title>ZK Test</title>
    </head>
    
    <body>
<?php
    include("zkteco/zklib/zklib.php");
    
    $zk = new ZKLib("192.168.0.102", 4370);
    
    $ret = $zk->connect();
    //echo $ret;
    // sleep(1);
    // if ( $ret ): 
    //     $zk->disableDevice();
    //     sleep(1);
    ?>
        
        <table border="1" cellpadding="5" cellspacing="2" style="float: left; margin-right: 10px;">
            <tr>
                <th colspan="5">Data User</th>
            </tr>
            <tr>
                <th>UID</th>
                <th>ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Password</th>
            </tr>
            <?php
            try {
                
                //$zk->setUser(1, '1', 'Admin', '', LEVEL_ADMIN);
                $user = $zk->getUser();
                sleep(1);
                //while(list($uid, $userdata) = each($user)):
                 foreach($user as $uid => $userdata) {  
                    
                    if ($userdata[4] == LEVEL_ADMIN)
                        $role = 'ADMIN';
                    elseif ($userdata[4] == LEVEL_USER)
                        $role = 'USER';
                    else
                        $role = 'Unknown';
                ?>
                <tr>
                    <td><?php echo $uid ?></td>
                    <td><?php echo $userdata[0] ?></td>
                    <td><?php echo $userdata[1] ?></td>
                    <td><?php echo $role ?></td>
                    <td><?php echo $userdata[5] ?>&nbsp;</td>
                </tr>
                <?php
                }
            } catch (Exception $e) {
                header("HTTP/1.0 404 Not Found");
                header('HTTP', true, 500); // 500 internal server error                
            }
            //$zk->clearAdmin();
            ?>
        </table>
        
        <table border="1" cellpadding="5" cellspacing="2">
            <tr>
                <th colspan="6">Data Attendance</th>
            </tr>
            <tr>
                <th>Index</th>
                <th>UID</th>
                <th>ID</th>
                <th>Status</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
            <?php
            $attendance = $zk->getAttendance();
            sleep(1);
            //while(list($idx, $attendancedata) = each($attendance)):
             foreach($attendance as $idx => $attendancedata) {
               
                if ( $attendancedata[2] == 1 )
                    $status = 'Check Out';
                else
                    $status = 'Check In';
            ?>
            <tr>
                <td><?php echo $idx ?></td>
                <td><?php echo $attendancedata[0] ?></td>
                <td><?php echo $attendancedata[1] ?></td>
                <td><?php echo $status ?></td>
                <td><?php echo date( "d-m-Y", strtotime( $attendancedata[3] ) ) ?></td>
                <td><?php echo date( "H:i:s", strtotime( $attendancedata[3] ) ) ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
        
        <fieldset>
            <legend><b>Example Using: </b></legend>
            

        
        </fieldset-->
    <?php
       // $zk->enrollUser('123');
       // $zk->setUser(123, '123', 'Shubhamoy Chakrabarty', '', LEVEL_USER);
        //$zk->enableDevice();
        //sleep(1);
     ///   $zk->disconnect();
    //endif
?>
    </body>
</html>
