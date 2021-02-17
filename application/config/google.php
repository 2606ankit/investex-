<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '319972561095-1mhhfn2alb836k3jrt7tvqa5ojr5squt.apps.googleusercontent.com';
$config['google']['client_secret']    = 'F-KstEgVR7vUTxfEvkm87P4B';
$config['google']['redirect_uri']     = 'https://example.com/project_folder_name/user_authentication/';
$config['google']['application_name'] = 'Login to CodexWorld.com';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();