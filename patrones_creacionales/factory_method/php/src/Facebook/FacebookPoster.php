<?php

namespace Src\Facebook;

use Src\SocialNetworkPoster;
use Src\SocialNetworkConnectorInterface;

/**
 * This Concrete Creator supports Facebook. Remember that this class also
 * inherits the 'post' method from the parent class. Concrete Creators are the
 * classes that the Client actually uses.
 */

class FacebookPoster extends SocialNetworkPoster
{
  private $login, $password;

  public function __construct(string $login, string $password)
  {
    $this->login = $login;
    $this->password = $password;
  }

  public function getSocialNetwork(): SocialNetworkConnectorInterface
  {
    return new FacebookConnector($this->login, $this->password);
  }
}
