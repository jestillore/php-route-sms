<?php return [
    
    /*
    |--------------------------------------------------------------------------
    | Package Configuration Option
    |--------------------------------------------------------------------------
    | Describe what it does. 
    */

    'server' => '121.241.242.114',
    'port' => '8080',

    /*
     * Username of the SMPP Account
     * */
    'username' => '',

    /*
     * Password of the SMPP Account
     * */
    'password' => '',

    /*
     * Indicates whether you want delivery report for this message
     * */
    'dlr' => '0', // 0 means no and 1 means yes

    /*
     * If sending a WAP Push message (type=4), this holds the link that you wish to send, for any
     * other type of message, no value needs to be supplied for this field (if specified will be
     * ignored) . Just like “message” field, this field should also be URL encoded with UTF-8
     * character encoding (even for sending non-ASCII domain names).
     * */
    'url' => ''

];
