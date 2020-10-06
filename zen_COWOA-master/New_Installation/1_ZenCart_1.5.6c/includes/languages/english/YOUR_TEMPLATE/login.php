<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 14280 2009-08-29 01:33:18Z drbyte $
 * @version $Id: login.php $ Integrated COWOA v2.6
 */

define('NAVBAR_TITLE', 'Login');
define('HEADING_TITLE', 'Login');

define('HEADING_NEW_CUSTOMER', 'New Customers');
define('HEADING_NEW_CUSTOMER_SPLIT', 'New Customers');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Create a customer profile with <strong>' . STORE_NAME . '</strong> which allows you to shop faster, track the status of your current orders and review your previous orders.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Have a PayPal account? Want to pay quickly with a credit card? Use the PayPal button below to use the Express Checkout option.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Or</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Dont have an account with us? Create a customer profile. <ul class="fa-ul"><li><i class="fa-li fa fa-check-square"></i>Shop fast</li><li><i class="fa-li fa fa-check-square"></i>Track the status of your orders</li><li><i class="fa-li fa fa-check-square"></i>Review your previous orders.</li></ul>');

define('TEXT_LOGIN_ASSIST','<strong>Login Troubleshooting:</strong><br/> 1) First, verify you have previously created an account. <br/>&nbsp;&nbsp;&nbsp;&nbsp;a)If you previously checked out without creating a customer profile you will need to do the same again or will need to create an account at this time (using the New Customers path.) <br/>&nbsp;&nbsp;&nbsp;&nbsp;b) If you joined our newsletter, that does not automatically mean you also created a store account. <br/><br/>2) Login emails and passwords are case sensitive. If you have a prior order invoice available, double check for any email spelling errors.<br/><br/>3) Use the Forgot your password? link to reset your password. ');
define('HEADING_RETURNING_CUSTOMER', 'Returning Customers');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Returning Customers');

define('TEXT_STANDARD_ACCOUNT_HEADING', '');
define('TEXT_COWOA_HEADING', 'Prefer to Shop Without Creating A Customer Profile?');
define('TEXT_RATHER_COWOA', 'Click the <strong>"Continue"</strong> button to checkout without creating a customer profile. Upon completion of your order, you will receive an e-mail order confirmation with a link to track your order status.<br /><br/>Note, if choosing this option you will need to enter your address info every time you order.<br/>');
define('COWOA_HEADING', 'Guest Checkout');
//define('TEXT_RETURNING_CUSTOMER_SPLIT', 'In order to continue, please login to your <strong>' . STORE_NAME . '</strong> account.');
define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Returning Customer? Enter your information for faster checkout.');

define('TEXT_HEADING_CHECKOUT_CONFIDENCE', 'Shop With Confidence');
define('TEXT_HEADING_CHECKOUT_CUST_SERVICE', 'Customer Service');

define('TEXT_PASSWORD_FORGOTTEN', 'Forgot your password?');

define('TEXT_LOGIN_ERROR', 'Sorry, there is no match for that email address and/or password. <br/><br/>If you are certain you have a store account, double check you have entered the correct email, including prior misspelling, casing, etc. <br/><br/>If you are certain the email is correct, try using the Forgot Your Password? link to reset your password.<br/><br/>If you previously used the Guest Checkout method, you will need to use that method again to checkout or use the New Customers checkout method.  ');
define('TEXT_VISITORS_CART', '<strong>Note:</strong> If you have shopped with us before and left something in your cart, for your convenience, the contents will be merged if you log back in. <a href="javascript:session_win();">[More Info]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Privacy Statement</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Please acknowledge you agree with our privacy statement by ticking the following box. The privacy statement can be read</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">here</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">I have read and agreed to your privacy statement.</span>');

define('ERROR_SECURITY_ERROR', 'There was a security error when trying to login.');

define('TEXT_LOGIN_BANNED', 'Error: Access denied.');