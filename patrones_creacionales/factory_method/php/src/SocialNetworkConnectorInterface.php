<?php

namespace Src;

/**
 * The Product interface declares behaviors of various types of products.
 */

interface SocialNetworkConnectorInterface
{
  public function logIn(): void;
  public function logOut(): void;
  public function createPost(string $content): void;
}
