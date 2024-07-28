<?php

namespace Src\Linkedin;

use Src\SocialNetworkConnectorInterface;

/**
 * This Concrete Product implements the LinkedIn API.
 */

class LinkedinConnector implements SocialNetworkConnectorInterface
{
  private $email, $password;

  public function __construct(string $email, string $password)
  {
    $this->email = $email;
    $this->password = $password;
  }

  public function logIn(): void
  {
    echo "Send HTTP API request to log in user $this->email with password $this->password.";
    echo "<br/>";
  }

  public function logOut(): void
  {
    echo "Send HTTP API request to log out user $this->email.";
    echo "<br/>";
  }

  public function createPost(string $content): void
  {
    echo "Send HTTP API request to create post with content '$content' for user $this->email";
    echo "<br/>";
  }
}
