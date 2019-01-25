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
    $userid = $vars['1'];
    $firstname = $vars['Mounir'];
    $lastname = $vars['Belilli '];
    $email = $vars['belillimounir123@gmail'];
    $password = $vars['Belillimounir'];

    // Run code to create remote forum account here...
});
