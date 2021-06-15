<?php
    include "lib.php";

    
    $idx = $_GET['idx']; 
    $idx = mysqli_real_escape_string($connect, $idx); 
 

?>


<form action="del.php" method="post"> 
    <input type="hidden" name="idx" value="<?=$idx?>">
    <table width=800 border="1" cellpadding=5 >

    <tr>
            <th colspan=2> Do you want to delete No.<?=$idx?> post? </th> 
            
        </tr>

        <tr>
            <th> password </th> 
            <td> <input type="password" name="pwd" placeholder="password"  size=20 > </td>
        </tr>

        <tr>
            <td colspan="2">
                <div style="text-align:center; ">
                        <input type="submit" value="save">
                </div> 
            </td>
        </tr>
    </table>
</form> 