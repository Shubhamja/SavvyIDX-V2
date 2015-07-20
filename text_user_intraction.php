<html>
<Head><h1>Text Content For User Intraction</h1></Head>
</br>
<body>
<div>
<form method="post">
<table width="60%" >
<th></th>
<tr>
<td >New User Registration Form Intro Text</td>
<td ><textarea rows="4" cols="50" name="new_register" value="<?php $new_register ?>" class="widefat" required> <?php echo $new_register?></textarea></td>
</tr>
<tr>
<td >Registration Activation Email Text</td>
<td ><textarea rows="4" cols="50" name="register_activation" value="<?php $register_activation ?>" class="widefat" required> <?php echo $register_activation?></textarea></td>
</tr>
<tr>
<td >Registration Confirmation Email Text</td>
<td ><textarea rows="4" cols="50" name="register_confirmation" value="<?php $register_confirmation ?>" class="widefat" required> <?php echo $register_confirmation?></textarea></td>
</tr>
<tr>
<td >Sharing a Listing Popup  Default/Email Text</td>
<td ><textarea rows="4" cols="50" name="sharing_listing" value="<?php $sharing_listing ?>" class="widefat" required> <?php echo $sharing_listing?></textarea></td>
</tr>
<tr>
<td >Notify Me Popup  Default/Email Text</td>
<td ><textarea rows="4" cols="50" name="notify_popup" value="<?php $notify_popup ?>" class="widefat" required> <?php echo $notify_popup?></textarea></td>
</tr>
</table>
<?php submit_button();?>
</form>
</div>
</body>
</html>
