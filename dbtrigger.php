<?php
   include 'Connection.php';
   function sql1()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from P_HISTORY_log");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>DATABASE_USER</th>"; 
   echo "<th>OPERATION_NAME</th>"; 
   echo "<th>OPERATION_DATE</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }

   
   function sql4($trigger1)
   {
   $conn = connect();
   $s = oci_parse($conn, "Alter trigger patient_insert_trigger $trigger1");       
   $res= oci_execute($s);
   return $res;
   }

   function sql5($trigger2)
   {
   $conn = connect();
   $s = oci_parse($conn, "Alter trigger Monitor_P_HISTORY $trigger2");       
   $res= oci_execute($s);
   return $res;
   }

    
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   







   
   
   function sql6($trigger3)
   {
   $conn = connect();
   $s = oci_parse($conn, "Alter trigger Monitor_ART01_table $trigger3");       
   $res= oci_execute($s);
   return $res;
   }

    function sql7($trigger4)
   {
   $conn = connect();
   $s = oci_parse($conn, "Alter trigger price_trigger $trigger4");       
   $res= oci_execute($s);
   return $res;
   }
?>