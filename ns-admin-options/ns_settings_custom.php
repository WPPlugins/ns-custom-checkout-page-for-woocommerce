<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php settings_fields('ns_cuscheckout_options_group'); ?>

<div class="genRowNssdc">

<h4>Check to hide an element</h4>
<table class="form-table adjTblNs">
 <tbody>
  <tr>
   <th scope="row"><label for="ns-code-checkout-name">First Name</label></th>
   <td><input  <?php if(get_option('ns-code-checkout-name', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-name" name="ns-code-checkout-name"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-last-name">Last  Name</label></th>
   <td><input  <?php if(get_option('ns-code-checkout-last-name', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-last-name" name="ns-code-checkout-last-name"></td>
  </tr>  
  <tr>
   <th scope="row"><label for="ns-code-checkout-company-name">Company Name</label></th>
   <td><input  <?php if(get_option('ns-code-checkout-company-name', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-company-name" name="ns-code-checkout-company-name"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-email">Email Address</label></th>
   <td><input  <?php if(get_option('ns-code-checkout-email', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-email" name="ns-code-checkout-email"></td>
  </tr>   
  <tr>
   <th scope="row"><label for="ns-code-checkout-phone">Phone</label></th>
   <td><input  <?php if(get_option('ns-code-checkout-phone', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-phone" name="ns-code-checkout-phone"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-country">Country</label></th>
   <td><input  <?php if(get_option('ns-code-checkout-country', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-country" name="ns-code-checkout-country"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-address">Address</label></th>
   <td><input  <?php if(get_option('ns-code-checkout-address', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-address" name="ns-code-checkout-address"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-postcode">Postcode / ZIP</label></th>
   <td><input  <?php if(get_option('ns-code-checkout-postcode', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-postcode" name="ns-code-checkout-postcode"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-town">Town / City</label></th>
   <td><input  <?php if(get_option('ns-code-checkout-town', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-town" name="ns-code-checkout-town"></td>
  </tr>
  <tr>
   <th scope="row"><label for="ns-code-checkout-prov">Province</label></th>
   <td><input  <?php if(get_option('ns-code-checkout-prov', '') == 'on') echo'checked'; ?> type="checkbox" id="ns-code-checkout-prov" name="ns-code-checkout-prov"></td>
  </tr>           
 </tbody>
</table>
</div>
