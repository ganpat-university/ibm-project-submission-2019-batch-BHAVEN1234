
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
        $sql= mysqli_query($connection,"select * from doctor") or die(mysqli_error($connection));
        echo "<select name='doc'>";
        while($row= mysqli_fetch_array($sql))
        {
            echo "<option value=".$row['doctorid'].">".$row['docfname']." ".$row['doclname']."</option>";
        }
        
        echo "</select>";
        ?>
        <input type="submit" value="search">
    </form>
    
    <a href="#" onclick="window.print();">Print</a>
    
        <?php
        if(isset($_GET['doc']))
        {
             $doc=$_GET['doc'];
           
                $qey="select member_master.memid,member_master.memlname,member_master.memfname,doctorappointment.dateofappointment,doctorappointment.appointmenttime from member_master,doctorappointment where doctorappointment.memid = member_master.memid and doctorappointment.doctorid='$doc' and doctorappointment.Isconform='yes'";
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
        echo "<th>Consultancy Fee</th>";
        echo "</tr>";
       $i=1;
        while($row= mysqli_fetch_array($dquery))
        {                    

                  $qey1="select * from doctor where doctorid = '$doc'";
                
                $dquery1= mysqli_query($connection,"$qey1");
                $count1= mysqli_num_rows($dquery1);
                    $row1= mysqli_fetch_array($dquery1);

            echo "<tr>";

             echo "<td>".$row['memid']."</td>";
             echo "<td>".$row['memfname']." ".$row['memlname']."</td>";
             echo "<td>".$row['dateofappointment']."</td>";
             echo "<td>".$row['appointmenttime']."</td>";
             echo "<td>".$row1['Consultancyfee']."</td>";
            
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