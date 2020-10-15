<?php
/********************************
* Project: JSON Website Builder
* For: The Berman Consulting Group - BermanGroup.com
* By: Benjamin Sommer - smmr.dev (@remmosnimajneb)
* Theme Design: Hypothesis by Pixelarity
* Code Version: 1.5
***************************************************************************************/

/* 
* Main index page
* Get the Page resource and if it's an existing page, output it, if not show a 404
*/
    
    /* 0. Set ABSPATH & Other Vars */
    DEFINE( 'ABSPATH', dirname(__FILE__) );

    /* 1. Get Requested resource */
	$URL = rtrim(strtok($_SERVER['REQUEST_URI'], '?'), "/");

    /* Now figure out the Page Slug */
    $Page = strtolower(array_pop(explode('/', $URL)));

    /* Load Configuration */
    $Config = json_decode(file_get_contents("Config.json"), true);
    $Pages = json_decode(file_get_contents("Pages.json"), true);

    /* If Page Slug is NULL, we assume Home page */
    if($Page == NULL){
        $Page = "home";
    }

    /* Otherwise.....Pull Page Parts */

    /* If the page Exists in Config */
    if($Pages[$Page] != NULL){

        /* Check Redirect */
        if($Pages[$Page]["Redirect"] != ""){
            header('Location: ' . $Pages[$Page]["Redirect"]);
        }
    
        /* Get Header */
        if($Pages[$Page]["Header"] == NULL){
            require_once('Views/Header/Default.php');
        } else {
            require_once('Views/Header/' . $Pages[$Page]["Header"] . ".php");
        }

        /* Get Body */
        if($Pages[$Page]["Body"] == NULL){
            $Pages[$Page]["Body"] = "404";
        }
            require_once('Views/Body/' . $Pages[$Page]["Body"] . ".php");

        /* Get Footer */
        if($Pages[$Page]["Footer"] == NULL){
            require_once('Views/Footer/Default.php');
        } else {
            require_once('Views/Footer/' . $Pages[$Page]["Footer"] . ".php");
        }


    } else {
        
        /* Otherwise we're giving up, show a 404 */
        $Page = "404";
            require_once('Views/Header/Default.php');
            require_once('Views/Body/404.php');
            require_once('Views/Footer/Default.php');
    }

?>