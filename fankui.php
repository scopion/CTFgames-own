<form method="post" name="guestform" " action="fankui.php">
			<table width="550" border="0" cellpadding="2" cellspacing="1">
				<tr>
					<td width="100">邮箱</td>
					<td><input name="txtName" type="text" size="30" maxlength="10"></td>
				</tr>
				<tr>
					<td width="100">反馈</td>
					<td><textarea name="mtxMessage" cols="50" rows="3" maxlength="50"></textarea></td>
				</tr>
				<tr>
					<td width="100">&nbsp;</td>
					<td>
						<input name="btnSign" type="submit" value="提交" />
					</td>
				</tr>
			</table>

		</form>

<?php




if( isset( $_POST[ 'btnSign' ] ) ) {
    // Get input
    $message = $_POST[ 'mtxMessage' ] ;
    $name    = trim( $_POST[ 'txtName' ] );
	


    if (strstr($message,'<script>')){
		echo '感谢您的反馈！';
		echo '<!--the flag is {the.next.feedback.is.real}-->';
	}
	else{
		echo '感谢您的反馈！';
	
	};//6  

}

?>


