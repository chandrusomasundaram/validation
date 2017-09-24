<?php
require 'init.php';

$table = "<br/><br/><center><table border='1'>
            <tbody>
            <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Email</th>
                <th>Mobile Number</th>
            </tr>";
$table_end = "</tbody></table></center>";
$output = NULL;
$query = "SELECT * FROM emp_det";
$result = mysqli_query($db_conn,$query);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)){
        $output .= "<tr align='center'>
            <td>".$row['name']."</td>
            <td>".$row['dept']."</td>
            <td>".$row['email']."</td>
            <td>".$row['mob_no']."</td> 
            </tr>";
    }
    echo $table;
    echo $output;
    echo $table_end;
}
else{
    $output = "<tr><td colspan='6' align='center'><b>No Data Available</b></td></tr>"; 
    echo $table;
    echo $output;
    echo $table_end;
}
?>