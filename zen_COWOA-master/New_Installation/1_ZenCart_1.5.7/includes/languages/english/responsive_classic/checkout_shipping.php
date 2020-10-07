<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_shipping.php 18697 2011-05-04 14:35:20Z wilt $
 * @version $Id: Integrated COWOA v2.6
 */
if($_SESSION['COWOA']) $COWOA=TRUE;

define('NAVBAR_TITLE_1', 'Checkout');
define('NAVBAR_TITLE_2', 'Shipping Method');

if($COWOA)
define('HEADING_TITLE', 'Step 2 of 5 - Shipping Information');
else
define('HEADING_TITLE', 'Step 1 of 4 - Shipping Information');

define('TABLE_HEADING_SHIPPING_ADDRESS', 'Shipping Address');
define('TEXT_CHOOSE_SHIPPING_DESTINATION', '<ul class="fa-ul">Tips: <li><i class="fa fa-info-circle"></i> Double check your shipping address.</li><li><i class="fa fa-info-circle"></i> Commercial address? Include the business name.</li><li><i class="fa fa-info-circle"></i> No shipping quotes? - Check your zip code.</li><li><i class="fa fa-info-circle"></i> USPS Flat Rate is the same speed as USPS Priority. </li><li><i class="fa fa-info-circle"></i> Free shipping is the same speed as Fedex Ground.</li><li><i class="fa fa-info-circle"></i> Orders that will not arrive by Saturday are held till Monday.</li><li><i class="fa fa-info-circle"></i> For more details, visit the <a href="index.php?main_page=contact_us">Shipping Info</a> page.</li></ul>');
define('TITLE_SHIPPING_ADDRESS', 'Shipping Address:');

define('TABLE_HEADING_SHIPPING_METHOD', 'Shipping Method:');
define('TEXT_CHOOSE_SHIPPING_METHOD', '');
define('TITLE_PLEASE_SELECT', 'Please Select');
define('TEXT_ENTER_SHIPPING_INFORMATION', 'This is currently the only shipping method available to use on this order.');
define('TITLE_NO_SHIPPING_AVAILABLE', 'Not Available At This Time');
define('TEXT_NO_SHIPPING_AVAILABLE','<span class="alert">Sorry, we are not shipping to your region at this time.</span><br />Please contact us for alternate arrangements.');

define('TABLE_HEADING_COMMENTS', 'Special Instructions or Comments About Your Order');
if($COWOA)
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Continue to Step 3');
else
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Continue to Step 2');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- choose your payment method.');

// when free shipping for orders over $XX.00 is active
define('FREE_SHIPPING_TITLE', 'Free Shipping');
define('FREE_SHIPPING_DESCRIPTION', 'Free shipping for orders over %s');

define('ERROR_PLEASE_RESELECT_SHIPPING_METHOD', 'Your available shipping options have changed. Please re-select your desired shipping method.');
