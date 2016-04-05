<?php

//@toDO implement class based service

//supported languages, 75% of the translations must be completed rest left english.
$supported_languages = array("en", "fr");
$unsupported_languages = array("cs", "da", "de", "el", "es", "et", "fi", "it", "ja", "lv", "nl", "no", "pl", "pt", "ru", "sl", "sv", "tr", "vi", "zhcn", "zhtw");

$url = in_array($_GET["id"], $supported_languages);
$url2 = in_array($_GET["id"], $unsupported_languages);

//check if no page request and language not set return to default - aka a new visitor
if(!isset($_GET["id"]) && !isset($_SESSION["language"])) {
$_SESSION["language"] = "lang/en";
$_SESSION["home"] = WEBSITE_PATH;
$_SESSION["langShort"] = "en";
}
//check if supported lang is set and not already active session - aka new supported language session set
elseif($url == 1 && $url2 == 0 && !isset($_SESSION["language"])) {
$_SESSION["language"] = "lang/" . $_GET["id"];
$_SESSION["home"] = WEBSITE_PATH . $_GET["id"];
$shortlang = str_replace("lang/","",$_GET["id"]);
$_SESSION["langShort"] = $shortlang;
}
//check if language is already set and not resetting it - aka language set but language is in url set again incase new
elseif(isset($_SESSION["language"]) && $url == 1) {
$shortlang = str_replace("lang/","",$_GET["id"]);
$_SESSION["language"] = "lang/" . $_GET["id"];
$_SESSION["langShort"] = $shortlang;
$_SESSION["home"] = WEBSITE_PATH . $shortlang;
}
//different page no language set refer to default english
elseif(isset($_GET["id"]) && !isset($_SESSION["language"]) && $url != 1 && $url2 != 1) {
$_SESSION["language"] = "lang/en";
$_SESSION["home"] = WEBSITE_PATH;
$_SESSION["langShort"] = "en";
}
//different page language set refer to set language
elseif(isset($_GET["id"]) && isset($_SESSION["language"]) && $url != 1 && $url2 != 1) {
$_SESSION["language"] = $_SESSION["language"];
$shortlang = str_replace("lang/","",$_SESSION["language"]);
$_SESSION["home"] = WEBSITE_PATH . $shortlang;
$_SESSION["langShort"] = $shortlang;
}

?>