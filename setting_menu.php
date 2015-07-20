<?php 
add_action('admin_menu','SavvyIDX_setup_menu');
function SavvyIDX_setup_menu()
{
add_menu_page('SavvyIDX Plugin Page', 'SavvyIDX Plugin', 'manage_options', 'SavvyIDX_Plugin', 'SavvyIDX_Plugin','',72); 
add_submenu_page('SavvyIDX_Plugin', 'Mortgage Calculator', 'Mortgage Calculator', 'manage_options', 'mortgage_calculator', 'mortgage_calc');
add_submenu_page('SavvyIDX_Plugin', 'Property Details', 'Property Details', 'manage_options', 'property_details', 'property_detl');
add_submenu_page('SavvyIDX_Plugin', 'Registration Options', 'Registration Options', 'manage_options', 'registration_options', 'user_register_option');
<<<<<<< HEAD
add_submenu_page('SavvyIDX_Plugin', 'User Intraction', 'User Intraction', 'manage_options', 'user_intraction', 'user_interaction_text');
=======
>>>>>>> d5e13077639e53e945db685b59fa50ea9c666a0a
}
function mortgage_calc()
{
if (isset($_POST['down_payment'])) {
        update_option('down_payment', $_POST['down_payment']);
         update_option('term_year', $_POST['term_year']);
          update_option('interest_rate', $_POST['interest_rate']);
          
        $value1 = $_POST['down_payment'];
         $value2 = $_POST['term_year'];
          $value3 = $_POST['interest_rate'];
    } 

    $value1 = get_option('down_payment','20%');
    $value2 = get_option('term_year','30');
    $value3 = get_option('interest_rate','5%');
    
    include 'mortgage_calc.php';
}
function property_detl()
{
if (isset($_POST['submit'])) {
	if(isset($_POST['email_listing'])){
        update_option('email_listing', $_POST['email_listing']);
	}else{
		 update_option('email_listing', '');
	}
	if(isset($_POST['rqst_info'])){
         update_option('rqst_info', $_POST['rqst_info']);
	}else{
		update_option('rqst_info', '');
	}
	if(isset($_POST['notify_me'])){
          update_option('notify_me', $_POST['notify_me']);
          }else{
			 update_option('notify_me', '');
		  }
		  if(isset($_POST['add_fvrt'])){
          update_option('add_fvrt', $_POST['add_fvrt']);
          }else{
           update_option('add_fvrt', '');
	  }
	   if(isset($_POST['share_social'])){
          update_option('share_social', $_POST['share_social']);
           }else{
			  update_option('share_social', ''); 
		   }
		   if(isset($_POST['prnt_brocher'])){
          update_option('prnt_brocher', $_POST['prnt_brocher']);
            }else{
          update_option('prnt_brocher', '');
	  }
	  if(isset($_POST['contact'])){
          update_option('contact', $_POST['contact']);
           }else{
			   update_option('contact', '');
		   }
		 if(isset($_POST['additional_info'])){   
          update_option('additional_info', $_POST['additional_info']);
          }else{
			 update_option('additional_info', ''); 
		  }
		   if(isset($_POST['mortagege_calc'])){ 
          update_option('mortagege_calc', $_POST['mortagege_calc']);
           }else{
			    update_option('mortagege_calc', '');
		   }
		   if(isset($_POST['contnt_map'])){ 
          update_option('contnt_map', $_POST['contnt_map']);
          }else{
			   update_option('contnt_map', '');
		  }
		   if(isset($_POST['flood_map'])){
		   update_option('flood_map', $_POST['flood_map']);
	   }else{
		   update_option('flood_map', '');
	   }
	   if(isset($_POST['neighbr_hood'])){
          update_option('neighbr_hood', $_POST['neighbr_hood']);
	  }else{
		  update_option('neighbr_hood', '');
	  }
	   if(isset($_POST['street_view'])){
          update_option('street_view', $_POST['street_view']);
           }else{
			   update_option('street_view', ''); 
		   }
		    if(isset($_POST['school_data'])){
          update_option('school_data', $_POST['school_data']);
          }else{
			  update_option('school_data', '');
		  }
    } 
    $email_listing1 = get_option('email_listing');
    $rqst_info1 = get_option('rqst_info');
    $notify_me1 = get_option('notify_me');
    $add_fvrt1 = get_option('add_fvrt');
    $share_social1 = get_option('share_social');
	$prnt_brocher1 = get_option('prnt_brocher');
	$contact1 = get_option('contact');
	$additional_info1 = get_option('additional_info');
	$mortagege_calc1 = get_option('mortagege_calc');
	$contnt_map1 = get_option('contnt_map');
	$flood_map1 = get_option('flood_map');
	$neighbr_hood1 = get_option('neighbr_hood');
	$street_view1 = get_option('street_view');
	$school_data1 = get_option('school_data');
	
    include 'set_property_detail.php';
}
function user_register_option()
{
<<<<<<< HEAD
if (isset($_POST['submit'])) {
		if (isset($_POST['force_registration'])) {
         update_option('force_registration', $_POST['force_registration']);
	 }else{
		  update_option('force_registration', '');
	  }
         update_option('search_before_forc_regs', $_POST['search_before_forc_regs']);
       if (isset($_POST['user_name'])) {
         update_option('user_name', $_POST['user_name']);
          }else{
			update_option('user_name', '');
		  }
          if (isset($_POST['user_address'])) {
			update_option('user_address', $_POST['user_address']);
          }else{
			  update_option('user_address', '');
		  }
		 if (isset($_POST['user_phoneno'])) {
			update_option('user_phoneno', $_POST['user_phoneno']);
          }else{
			  update_option('user_phoneno', '');
		  }  
		if (isset($_POST['alter_user_phone'])) {
			update_option('alter_user_phone', $_POST['alter_user_phone']);
          }else{
			  update_option('alter_user_phone', '');
		  }  
		 if (isset($_POST['user_email'])) {
			update_option('user_email', $_POST['user_email']);
          }else{
			  update_option('user_email', '');
		  }  
		  if (isset($_POST['user_newsletter'])) {
			update_option('user_newsletter', $_POST['user_newsletter']);
          }else{
			  update_option('user_newsletter', '');
		  } 
		  if (isset($_POST['user_listing_save_search'])) {
			update_option('user_listing_save_search', $_POST['user_listing_save_search']);
          }else{
			  update_option('user_listing_save_search', '');
		  } 
		  if (isset($_POST['user_update_favrt'])) {
			update_option('user_update_favrt', $_POST['user_update_favrt']);
          }else{
			  update_option('user_update_favrt', '');
		  }   
    } 
    $force_registration = get_option('force_registration');
    $search_before_forc_regs = get_option('search_before_forc_regs');
    $user_name = get_option('user_name');
    $user_address = get_option('user_address');
    $user_phoneno = get_option('user_phoneno');
    $alter_user_phone = get_option('alter_user_phone');
    $user_email = get_option('user_email');
    $user_newsletter = get_option('user_newsletter');
    $user_listing_save_search = get_option('user_listing_save_search');
    $user_update_favrt = get_option('user_update_favrt'); 
    include 'user_register_option.php';
}
function user_interaction_text()
{
if (isset($_POST['submit'])) {
        update_option('new_register', $_POST['new_register']);
        update_option('register_activation', $_POST['register_activation']);
        update_option('register_confirmation', $_POST['register_confirmation']);
        update_option('sharing_listing', $_POST['sharing_listing']);
        update_option('notify_popup', $_POST['notify_popup']);  
        
    } 

    $new_register = get_option('new_register');
    $register_activation = get_option('register_activation');
    $register_confirmation = get_option('register_confirmation');
    $sharing_listing = get_option('sharing_listing');
    $notify_popup = get_option('notify_popup');
    
    include 'text_user_intraction.php';
 }



=======
if (isset($_POST['down_payment'])) {
        update_option('down_payment', $_POST['down_payment']);
         update_option('term_year', $_POST['term_year']);
          update_option('interest_rate', $_POST['interest_rate']);
          
        $value1 = $_POST['down_payment'];
         $value2 = $_POST['term_year'];
          $value3 = $_POST['interest_rate'];
    } 

    $value1 = get_option('down_payment','20%');
    $value2 = get_option('term_year','30');
    $value3 = get_option('interest_rate','5%');
    
    include 'user_register_option.php';
}
>>>>>>> d5e13077639e53e945db685b59fa50ea9c666a0a
function SavvyIDX_Plugin()
{
?>
<div class="wrap">
<h2>SavvyIDX Plugin</h2>
<form method="post" action="options.php">
<?php settings_fields('SavvyIDX-plugin-settings-group'); ?>
<?php do_settings_sections('SavvyIDX-plugin-settings-group'); ?>
<table class="form-table">
<tr valign="top">
<th scope="row">Enter API Key</th>
<td><input type="text" name="api_key" value="<?php echo get_option( 'api_key' ); ?>" /></td>
</tr>
<tr valign="top">
<th scope="row">Enter Google Map Key</th>
<td><input type="text" name="map_key" value="<?php echo get_option( 'map_key' ); ?>" /></td>
</tr>
</table>
<?php submit_button();?>
</form>
</div>
<?php } ?>
