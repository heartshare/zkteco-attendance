<?php
class Attendance{
    private $zk;
    public function __construct($zk)
    {
        $this->zk = $zk;
    }

    public function attendances($date)
    {
        $attendance = $this->zk->getAttendance();
        sleep(1);
        $data = [];
        $del = $this->deleteOldData($date);
        foreach($attendance as $idx => $attendancedata) {
            
            if ( $attendancedata[2] == 1 )
                $status = 'Check Out';
            else
                $status = 'Check In';

            $puchDate = date("Y-m-d", strtotime( $attendancedata[3]));
            
            if($date == $puchDate){
                $item = [
                    'uid'=>$attendancedata[0],
                    'user_id'=>$attendancedata[1],
                    'status'=>$status,
                    'datetime'=>$attendancedata[3],
                    'factory_id'=> 1
                ];
                $data[] = $item;
                $result = DB::query("INSERT INTO `attendance` (`uid`, `user_id`, `status`, `datetime`, `factory_id`) VALUES ('$item[uid]', '$item[user_id]', '$item[status]', '$item[datetime]', '$item[factory_id]');");
            }
        }
        return $data;
        

    }

    public function deleteOldData($date)
    {
        $result = DB::query("DELETE FROM attendance WHERE DATE(`datetime`) = DATE('$date')");
    }

}