
<?php
//include './class/atclass.php';
$connection= mysqli_connect("localhost", "root", "", "careathome");
?>
<html>
    <body>
    <center><h3>CaraAtHome</h3></center>
    <hr>
    <center><h3>Project Report</h3></center>
    
    <?php
    echo "<b><u>Date:". date("d-m-y")."</u></b><br><br>";
    
    ?>
    <form method="get">
        <?php
        $sql= mysqli_query($connection,"select * from lab") or die(mysqli_error($connection));
        echo "<select name='lab'>";
        while($row= mysqli_fetch_array($sql))
        {
            echo "<option value=".$row['labid'].">".$row['labname']."</option>";
        }
        
        echo "</select>";
        ?>
        <input type="submit" value="search">
    </form>
    
    <a href="#" onclick="window.print();">Print</a>
    
        <?php
        if(isset($_GET['lab']))
        {
             $lab=$_GET['lab'];
           
                $qey="select lab_appo.memid,lab_appo.labid,lab_appo.Appointmentdate,lab_appo.Appointmenttime,labtype.labtest_name,labtype.price from lab_appo,labtype where lab_appo.Isconform='Yes' and lab_appo.labtest_id=labtype.labtest_id and lab_appo.labid=$lab;";
                // echo $qey;
            $dquery= mysqli_query($connection,"$qey");
        $count= mysqli_num_rows($dquery);
        
              
        echo "<br><center>Record Found:".$count."</center><br>";
        echo "<table border='1' align='center'>";
        echo "<tr>";
        
        echo "<th>Member Id</th>";
        echo"<th>Member Name</th>";
        echo"<th>Date Of Appointment</th>";
        echo"<th>Date Of Time</th>";
        echo "<th>Lab Test Name</th>";
        echo "<th>Price</th>";
        echo "</tr>";
       $i=1;
        while($row= mysqli_fetch_array($dquery))
        {                    

            $memid=$row['memid'];
            // echo $memid;
                  $qey1="select * from member_master where memid = '$memid'";
                // echo $qey1;
                $dquery1= mysqli_query($connection,"$qey1");
                $count1= mysqli_num_rows($dquery1);
                    $row1= mysqli_fetch_array($dquery1);

            echo "<tr>";

             echo "<td>".$row['memid']."</td>";
             echo "<td>".$row1['memfname']." ".$row1['memlname']."</td>";
             echo "<td>".$row['Appointmentdate']."</td>";
             echo "<td>".$row['Appointmenttime']."</td>";
             echo "<td>".$row['labtest_name']."</td>";
             echo "<td>".$row['price']."</td>";
            
            $i++;
             echo "</tr>";
        }
         echo "</table>";
        } 
        ?>
        
  
    <br>
   
    <?php
   
    ?>
</body>
</html>