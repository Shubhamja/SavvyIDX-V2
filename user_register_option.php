<<<<<<< HEAD
<html>
<Head><h1>User Registration Options</h1></Head>
</br>
<body>
<div>
<form method="post">
<table width="60%" >
<th>Setting Option</th>
<tr>
<td >Force Registration</td>
<td ><input type="checkbox" id="force_registration" name="force_registration" value= "yes" <?php if($force_registration == 'yes'){echo 'checked';} ?> /></td>
</tr>
<tr >
<td >Search Before Force Registration</td>
<td>
<select id="search_before_forc_regs" name="search_before_forc_regs" width="50%">
<option <?php if($search_before_forc_regs=="0") {echo "selected='selected'";}?>value="5">0</option>
<option <?php if($search_before_forc_regs=="1") {echo "selected='selected'";}?>value="1">1</option>
<option <?php if($search_before_forc_regs=="2") {echo "selected='selected'";}?>value="2">2</option>
<option <?php if($search_before_forc_regs=="3") {echo "selected='selected'";}?>value="3">3</option>
<option <?php if($search_before_forc_regs=="4") {echo "selected='selected'";}?>value="4">4</option>
<option <?php if($search_before_forc_regs=="5") {echo "selected='selected'";}?>value="5">5</option>
</select><label><b>No. of Search Before Force Registration</b></label>
</td>
</tr>
<tr><td><td>&nbsp;</td></td></tr>
<th>User Information</th>
<tr>
<td >Name</td>
<td><input type="checkbox" id="user_name" name="user_name" value= "active" <?php if($user_name == 'active'){echo 'checked';} ?> /></td>
</tr>
<tr >
<td >Address</td>
<td><input type="checkbox" id="user_address" name="user_address" value= "active" <?php if($user_address == 'active'){echo 'checked';} ?> /></td>
</tr>
<tr>
<td>Phone No.</td>
<td><input type="checkbox" id="user_phoneno." name="user_phoneno" value= "active" <?php if($user_phoneno == 'active'){echo 'checked';} ?> /></td>
</tr>
<tr>
<td>Alternate Phone No.</td>
<td><input type="checkbox" id="alter_user_phone." name="alter_user_phone" value= "active" <?php if($alter_user_phone == 'active'){echo 'checked';} ?> /></td>
</tr>
<tr >
<td >E-mail Address</td>
<td ><input type="checkbox" id="user_email" name="user_email" value= "active" <?php if($user_email == 'active'){echo 'checked';} ?> /></td>
</tr>
<tr >
<td >Subscribe Newsletter</td>
<td ><input type="checkbox" id="user_newsletter" name="user_newsletter" value= "active" <?php if($user_newsletter == 'active'){echo 'checked';} ?> /></td>
</tr>
<tr>
<td >Send me Listing that Match my Save Search</td>
<td ><select id="user_listing_save_search" name="user_listing_save_search" width="50%">
<option <?php if($user_listing_save_search=="Yes") {echo "selected='selected'";}?>value="Yes">Yes</option>
<option <?php if($user_listing_save_search=="No") {echo "selected='selected'";}?>value="No">No</option>
<option <?php if($user_listing_save_search=="Frequency") {echo "selected='selected'";}?>value="Frequency">Frequency</option>
</select>
</td>
</tr>
<tr>
<td >Send me Updates to the Status of  Favorite Listing</td>
<td ><select id="user_update_favrt" name="user_update_favrt" width="50%">
<option <?php if($user_update_favrt=="Yes") {echo "selected='selected'";}?>value="Yes">Yes</option>
<option <?php if($user_update_favrt=="No") {echo "selected='selected'";}?>value="No">No</option>
<option <?php if($user_update_favrt=="Frequency") {echo "selected='selected'";}?>value="Frequency">Frequency</option>
</select>
</td>
</tr>
</table>
<?php submit_button();?>
</form>
</div>
</body>
</html>
=======
<Head><h1>User Registration Options</h1></Head>
>>>>>>> d5e13077639e53e945db685b59fa50ea9c666a0a
