<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: growlingwillow.com
    $siteKey = "6LdqBTUUAAAAANC5sBhoVYbpj_FszrdfJhCzmTni";
    $secretKey = "6LdqBTUUAAAAAEnRX4Z4_vDQuvyZBIbdBlMTh7oh";

//this helps eliminate PHP date errors
    date_default_timezone_set('America/Los Angeles');

//this constant allows a page to know its own url/name
    define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//header.php
//nav array
    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "BIG";
    $nav1['aia.php'] = "AIA";
    $nav1['ux.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contact.php'] = "Contact";

//switch between pages that are in this site--does not include external links for Big and FP
switch(THIS_PAGE)
{
    case "index.php":
        $title = "Catherine Blake Smith: WEB 120 Portal";
        $logo = "fa-home";
        $PageID = " Welcome";
    break;
        
    case "aia.php":
        $title = "AIA";
        $logo = "fa-users";
        $PageID = " Audiences, Issues, and Approach";
    break;
        
    case "ux.php":
        $title = "Final Project Flowchart";
        $logo = "fa-file-text-o";
        $PageID = " Final Project Flowchart";
    break;
    
    case "contact.php":
        $title = "Contact";
        $logo = "fa-pencil-square-o";
        $PageID = " Contact Catherine";
    break;
//this is a default in case something breaks
    default:
        $title = THIS_PAGE;
        $logo = "";
        $PageID = "";
    break;   
}
  
//function to make the links selected, based on the page
 function makeLinks($nav)
 {
        $myReturn = '';
        foreach($nav as $url => $text)
        {
            if(THIS_PAGE == $url)
            {//add class
                $myReturn .= '<li><a href="' . $url . '" class="selected">' . $text . '</a></li>';
            }else{//no class
                $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>';
            }
        }
        
        return $myReturn;
    }