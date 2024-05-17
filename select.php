<?php
$conn = new mysqli('localhost', 'root', '', 'sms');
if($conn){
     $sql = "SELECT * FROM students";
     $result = $conn->query($sql);
     ?>
          <table border="1">
                <tr>
                     <th>ID</th>
                     <th>Class ID</th>
                     <th>Name</th>
                     <th>Age</th>
                     <th>Roll</th>
                </tr>
     <?php
     while($row = $result->fetch_assoc()){
       //echo $row['id'] .' -' . $row['class_id'] . ' -' . $row['name'] . ' -'. $row['age'] . ' -'. $row['roll'];
       ?>
       <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['class_id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['roll']; ?></td>
       </tr>

<?php
}
?>
</table>
<?php
}else{
  echo "Not Connected";
}

?>
































