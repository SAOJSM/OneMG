<?php
if (!class_exists('Onedrive')) require 'Onedrive.php';

class SharepointCN extends Onedrive {

    function __construct($tag) {
        $this->disktag = $tag;
        $this->redirect_uri = 'https://saojsm.github.io/Brian-Onemg/';
        if (getConfig('client_id', $tag) && getConfig('client_secret', $tag)) {
            $this->client_id = getConfig('client_id', $tag);
            $this->client_secret = getConfig('client_secret', $tag);
        } else {
            $this->client_id = '3764a07d-e049-49db-b5be-ffa012e64833';
            $this->client_secret = 'PKS8Q~53cHtlfWEAXFn42mPEX08LyN-Bcs5Zzbva';
        }
        $this->oauth_url = 'https://login.partner.microsoftonline.cn/common/oauth2/v2.0/';
        $this->api_url = 'https://microsoftgraph.chinacloudapi.cn/v1.0';
        $this->scope = 'https://microsoftgraph.chinacloudapi.cn/Files.ReadWrite.All https://microsoftgraph.chinacloudapi.cn/Sites.ReadWrite.All offline_access';
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
