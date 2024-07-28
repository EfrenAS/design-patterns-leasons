<?php

include_once 'vendor/autoload.php';

use Src\Facebook\FacebookPoster;
use Src\Linkedin\LinkedInPoster;
use Src\SocialNetworkPoster;

/**
 * The client code can work with any subclass of SocialNetworkPoster since it
 * doesn't depend on concrete classes.
 */

function clientPost(SocialNetworkPoster $creator)
{
  $creator->post('Hello, world!');
  $creator->post("I had a large hamburger this morning!");
}

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */

echo "Testing ConcreteCreator1: \n";
echo "<br/>";
echo "<br/>";
clientPost(new FacebookPoster("john_smith", "*******"));
echo "<br/>";

echo "Testing ConcreteCreator2: \n";
echo "<br/>";
echo "<br/>";
clientPost(new LinkedInPoster("jane_doe", "*******"));
echo "<br/>";
