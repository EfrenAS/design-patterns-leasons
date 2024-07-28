<?php

namespace Src\Linkedin;

use Src\SocialNetworkConnectorInterface;
use Src\SocialNetworkPoster;

/**
 * This Concrete Creator supports LinkedIn.
 */

class LinkedInPoster extends SocialNetworkPoster
{
  private $email, $password;

  public function __construct(string $email, string $password)
  {
    $this->email = $email;
    $this->password = $password;
  }

  public function getSocialNetwork(): SocialNetworkConnectorInterface
  {
    return new LinkedInConnector($this->email, $this->password);
  }
}
