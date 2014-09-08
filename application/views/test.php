<?php echo "<table>";
foreach($worksheetrows as $worksheetrow)
{
      echo "<tr>";
     for($i=0; $i<worksheetcolumns; $i++)
    {
           // if the field is not blank -- otherwise CI will throw warnings
           if (isset($worksheetrow[$i]))
                 echo "<td>".$worksheetrow[$i]."</td>";
           // empty field
           else
                 echo "<td>&nbsp; </td>";
     }
     echo "</tr>";
} 
echo "</table>";
?>