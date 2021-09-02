<?php
if (!class_exists('Onedrive')) require 'Onedrive.php';

class OnedriveCN extends Onedrive {

    function __construct($tag) {
        $this->disktag = $tag;
        $this->redirect_uri = 'https://saojsm.github.io/Brian-Onemg';
        if (getConfig('client_id', $tag) && getConfig('client_secret', $tag)) {
            $this->client_id = getConfig('client_id', $tag);
            $this->client_secret = getConfig('client_secret', $tag);
        } else {
            $this->client_id = 'dce8f7eb-04c1-4f6b-8169-7cbeadd89232';
            $this->client_secret = 'W2uMAf_93eGqae7u3E7TZu3-G6~~kfcX3h';
        }
        $this->oauth_url = 'https://login.partner.microsoftonline.cn/common/oauth2/v2.0/';
        $this->api_url = 'https://microsoftgraph.chinacloudapi.cn/v1.0';
        $this->scope = 'https://microsoftgraph.chinacloudapi.cn/Files.ReadWrite.All https://microsoftgraph.chinacloudapi.cn/Sites.ReadWrite.All offline_access';
        $res = $this->get_access_token(getConfig('refresh_token', $tag));

        $this->client_secret = urlencode($this->client_secret);
        $this->scope = urlencode($this->scope);
        $this->DownurlStrName = '@microsoft.graph.downloadUrl';
        $this->ext_api_url = '/me/drive/root';
    }
}
