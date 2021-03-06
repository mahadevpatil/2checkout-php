<?php

abstract class Twocheckout
{
    public static $user;
    public static $pass;
    public static $format = "json";
    public static $apiBaseUrl = "https://www.2checkout.com/api/";
    public static $sid;
    public static $privateKey;
    public static $apiUrl;
    public static $environment;
    public static $error;
    const VERSION = '0.2.0';

    static function setCredentials($user, $pass, $environment="production")
    {
        self::$user = $user;
        self::$pass = $pass;
        self::$environment = $environment;
    }

    static function setApiCredentials($sid, $privateKey, $mode='', $environment="production")
    {
        self::$sid = $sid;
        self::$privateKey = $privateKey;
        if ($mode == 'sandbox') {
            self::$apiUrl = 'https://sandbox.2checkout.com/checkout/api/1/'.$sid.'/rs/authService';
        } else {
            self::$apiUrl = 'https://www.2checkout.com/checkout/api/1/'.$sid.'/rs/authService';
        }
        self::$environment = $environment;
    }
}

require(dirname(__FILE__) . '/Twocheckout/Api/TwocheckoutAccount.php');
require(dirname(__FILE__) . '/Twocheckout/Api/TwocheckoutPayment.php');
require(dirname(__FILE__) . '/Twocheckout/Api/TwocheckoutApi.php');
require(dirname(__FILE__) . '/Twocheckout/Api/TwocheckoutSale.php');
require(dirname(__FILE__) . '/Twocheckout/Api/TwocheckoutProduct.php');
require(dirname(__FILE__) . '/Twocheckout/Api/TwocheckoutCoupon.php');
require(dirname(__FILE__) . '/Twocheckout/Api/TwocheckoutOption.php');
require(dirname(__FILE__) . '/Twocheckout/Api/TwocheckoutUtil.php');
require(dirname(__FILE__) . '/Twocheckout/Api/TwocheckoutError.php');
require(dirname(__FILE__) . '/Twocheckout/TwocheckoutReturn.php');
require(dirname(__FILE__) . '/Twocheckout/TwocheckoutNotification.php');
require(dirname(__FILE__) . '/Twocheckout/TwocheckoutCharge.php');
require(dirname(__FILE__) . '/Twocheckout/TwocheckoutMessage.php');
