<?php
/**
 * Created by PhpStorm.
 * User: cerberus
 * Date: 6/25/15
 * Time: 12:10 AM
 */

namespace Jestillore\PhpRouteSms;


class RouteSms {

    private $packageName = 'php-route-sms';

    private $server = '';
    private $port = '';
    private $username = '';
    private $password = '';
    private $dlr = '';
    private $url = '';

    private $type = '';
    private $destination = '';
    private $source = '';
    private $message = '';

    public function __construct() {
        $this->server = $this->getConfig('server');
        $this->port = $this->getConfig('port');
        $this->username = $this->getConfig('username');
        $this->password = $this->getConfig('password');
        $this->dlr = $this->getConfig('dlr');
        $this->url = $this->getConfig('url');
    }

    private function getConfig($config) {
        return config($this->packageName . '.' . $config);
    }

    public function test() {
        /*
         * type
         * destination
         * source
         * message
         * */
        return "";
    }

    public function sendSMS($config) {
        $this->type = $config['type'];
        $this->destination = urldecode(join(',', $config['destination']));
        $this->source = urldecode($config['source']);
        $this->message = urldecode($config['message']);

        return "http://$this->server:$this->port/bulksms/bulksms?username=$this->username&password=$this->password&type=$this->type&dlr=$this->dlr&destination=$this->destination&source=$this->source&message=$this->message";
    }

}
