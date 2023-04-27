
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
        $sql= mysqli_query($connection,"select * from medical_store") or die(mysqli_error($connection));
        echo "<select name='medical_store'>";
        while($row= mysqli_fetch_array($sql))
        {
            echo "<option value=".$row['medistoid'].">".$row['medicalstorename']."</option>";
        }
        
        echo "</select>";
        ?>
        <input type="submit" value="search">
    </form>
    
    <a href="#" onclick="window.print();">Print</a>
    
        <?php
        if(isset($_GET['medical_store']))
        {
             $medical_store=$_GET['medical_store'];
           
                $qey="select medicalorder.dateoforder,medicalorder.memid,medicine_master.medtype,medicine_master.medinename,medicine_master.meddis,medicine_master.Mprice from medicalorder,medicine_master where medicalorder.medid=medicine_master.medid and medicalorder.medistoid='$medical_store'";
                // echo $qey;
            $dquery= mysqli_query($connection,"$qey");
        $count= mysqli_num_rows($dquery);
        
              
        echo "<br><center>Record Found:".$count."</center><br>";
        echo "<table border='1' align='center'>";
        echo "<tr>";
        
        echo "<th>Member Id</th>";
        echo"<th>Member Name</th>";
        echo"<th>Date Of Order</th>";
        echo"<th>Medicine Name</th>";
        echo "<th>Medicine Type</th>";
        echo "<th>Medicine Details</th>";
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
             echo "<td>".$row['dateoforder']."</td>";
             echo "<td>".$row['medinename']."</td>";
             echo "<td>".$row['medtype']."</td>";
             echo "<td>".$row['meddis']."</td>";
             echo "<td>".$row['Mprice']."</td>";
            
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