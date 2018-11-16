<?php

namespace Stripe\Error\OAuth;

/**
 * InvalidClient is raised when the client doesn't belong to you, or the API key mode (live or test)
 * doesn't match the client mode. Or the stripe_user_id doesn't exist or isn't connected to your
 * application.
 *
 * @package Stripe\Error\OAuth
 */
class InvalidClient extends OAuthBase
{
}
