<?php

namespace Src\Facebook;

use Src\SocialNetworkConnectorInterface;

/**
 * This Concrete Product implements the Facebook API.
 */

class FacebookConnector implements SocialNetworkConnectorInterface
{
  private $login, $password;

  public function __construct(string $login, string $password)
  {
    $this->login = $login;
    $this->password = $password;
  }

  public function logIn(): void
  {
    echo "Logging in to Facebook with login: $this->login and password: $this->password\n";
    echo "<br/>";
  }

  public function logOut(): void
  {
    echo "Logging out of Facebook\n";
    echo "<br/>";
  }

  public function createPost(string $content): void
  {
    echo "Creating post on Facebook with content: $content\n";
    echo "<br/>";
  }
}
