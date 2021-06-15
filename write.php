<?php
    include "lib.php";
	
    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx); 

    $query = "select * from sing_board where idx='$idx' ";
    $result = mysqli_query($connect, $query); 
    $data = mysqli_fetch_array($result); 

?>


<form action="writePost.php" method="post"> 
    <input type="hidden" name="idx" value="<?=$idx?>">
    <table width=800 border="1" cellpadding=5 >
    <tr>
            <th> name </th> 
            <td> <input type="text" name="name" value="<?=$data['name']?>" > </td>
        </tr>
    <tr>
            <th> title </th> 
            <td> <input type="text" name="subject" style="width:100%;"value="<?=$data['subject']?>" > </td>
        </tr>
        
    <tr>
            <th> content </th> 
            <td> 
                <textarea name="memo" style="width:100%; height:300px;"><?=$data['memo']?></textarea> 
            </td>
        </tr>
		
		<tr>
            <th> password </th> 
            <td> <input type="password" name="pwd" placeholder="password"  size=20 > </td>
        </tr>


        <tr>
            <td colspan="2">
                <div style="text-align:center; ">
                        <input type="submit" value="Save">
                </div> 
            </td>
        </tr>
    </table>
</form>  