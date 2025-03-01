<?php
if (!class_exists('Onedrive')) require 'Onedrive.php';

class Sharepoint extends Onedrive {

    function __construct($tag) {
        $this->disktag = $tag;
        $this->redirect_uri = 'https://saojsm.github.io/Brian-Onemg/';
        if (getConfig('client_id', $tag) && getConfig('client_secret', $tag)) {
            $this->client_id = getConfig('client_id', $tag);
            $this->client_secret = getConfig('client_secret', $tag);
        } else {
            $this->client_id = '3764a07d-e049-49db-b5be-ffa012e64833';
            $this->client_secret = 'wXf7Q~-FTPqCO1OQed4yRymqxwh0PpV3Bq2r1';
        }
        $this->oauth_url = 'https://login.microsoftonline.com/common/oauth2/v2.0/';
        $this->api_url = 'https://graph.microsoft.com/v1.0';
        $this->scope = 'https://graph.microsoft.com/Files.ReadWrite.All https://graph.microsoft.com/Sites.ReadWrite.All offline_access';
        $res = $this->get_access_token(getConfig('refresh_token', $tag));

        $this->client_secret = urlencode($this->client_secret);
        $this->scope = urlencode($this->scope);
        $this->DownurlStrName = '@microsoft.graph.downloadUrl';
        $this->ext_api_url = '/sites/' . getConfig('siteid', $tag) . '/drive/root';
    }

    public function ext_show_innerenv()
    {
        return [ 'sharepointSite', 'siteid' ];
    }
}
