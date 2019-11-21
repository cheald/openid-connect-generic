<?php
# Hooks for TTI's specific usage of this plugin

// Set the user's role when creating a new user
function oidc_add_roles_to_new_user_data($user_data, $user_claim) {
    echo "data";
    print_r($user_data);
    echo "<hr />";
    print_r($user_claim);
    exit();
    return $user_data;
}

add_filter("openid-connect-generic-alter-user-data", "oidc_add_roles_to_new_user_data");

function oidc_update_user_roles($user, $user_claim) {
    echo "data";
    print_r($user);
    echo "<hr />";
    print_r($user_claim);
    exit();
}

add_action("openid-connect-generic-update-user-using-current-claim", "oidc_update_user_roles");
?>
