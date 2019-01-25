<?php
/**
 * Register hook function call.
 *
 * @param string $hookPoint The hook point to call
 * @param integer $priority The priority for the given hook function
 * @param string|function Function name to call or anonymous function.
 *
 * @return Depends on hook function point.
 */
add_hook('ClientAdd', 1, function ($vars)
{
    $userid = $vars['userid'];
    $firstname = $vars['firstname'];
    $lastname = $vars['lastname'];
    $email = $vars['email'];
    $password = $vars['password'];

    // Run code to create remote forum account here...
});
