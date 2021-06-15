<?php
    include "lib.php";

?>



<table width=800 border="1" >
    <tr>
        <th width=50> No  </th> 
        <th> Title   </th> 
        <th width=100> Writer  </th> 
        <th width=170>  Date   </th> 
    </tr>    
<?php

    $query = "select * from sing_board order by idx desc "; 
    $result = mysqli_query($connect, $query); 

    while($data = mysqli_fetch_array($result)){
?>
    <tr>
        <td> <?=$data['idx']?> </td>
        <td> <a href="view.php?idx=<?=$data['idx']?>"><?=$data['subject']?> </td>
        <td> <?=$data['name']?> </td>
        <td> <?=$data['regdate']?> </td> 

<?php } ?>

</table>


<a href="write.php">write</a> 



