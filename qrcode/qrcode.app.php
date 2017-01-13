<?php

/**
 *    二维码生成
 *    @author    zjs
 */
$qrcode = new QrcodeApp();
$qrcode->index();
class QrcodeApp
{
    function index()
    {
        require_once('./phpqrcode.php');
        $url = urldecode($_GET['data']);
        QRcode::png($url);
    }

    
}

