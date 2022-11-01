<?php

require_once(__DIR__ . '/../vendor/autoload.php');

$MyAccessToken = "123.8988ad88e3e01a9539e4727128a4905e.xs76e0LWYBzCa2flYMJ4ztxS0PmdE1YyFKndXX5.FpvhWQ";


/**
 * @return bool|\OpenAPI\Client\Model\Fileprecreateresponse
 */
function MyXpanfileprecreate()
{
    global $MyAccessToken;
    $access_token = $MyAccessToken;                          // string
    $path = "/来自：小度设备/a.txt";                              // string
    $isdir = 0;                                     // int
    $size = 14;                                     // int
    $autoinit = 1;                                 // int
    $block_list = '["f649cdca4f6987c74b0471e87f195af4"]'; // string
    $rtype = 3;                                     // int | rtype (optional)


    $apiInstance = new OpenAPI\Client\Api\FileuploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->xpanfileprecreate($access_token, $path, $isdir, $size, $autoinit, $block_list, $rtype);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling FileuploadApi->xpanfileprecreate: ', $e->getMessage(), PHP_EOL;
        return false;
    }

    return $result;
}

/**
 * @param $uplodidTmp
 */
function MyPcssuperfile2($uplodidTmp)
{

    global $MyAccessToken;
    $access_token = $MyAccessToken;                          // string
    $partseq = "0";               // string
    $path = "/来自：小度设备/a.txt";
    $uploadid = $uplodidTmp; // string
    $type = "tmpfile";
    $file = "./data/1.txt";

    $apiInstance = new OpenAPI\Client\Api\FileuploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->pcssuperfile2($access_token, $partseq, $path, $uploadid, $type, $file);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling FileuploadApi->pcssuperfile2: ', $e->getMessage(), PHP_EOL;
    }
}

/**
 * @param $uplodidTmp
 */
function MyXpanfilecreate($uplodidTmp)
{

    global $MyAccessToken;
    $access_token = $MyAccessToken;
    $path = "/来自：小度设备/a.txt";
    $isdir = 0;                                // int
    $size = 14;                                     // int
    $uploadid = $uplodidTmp; // string
    $block_list = '["f649cdca4f6987c74b0471e87f195af4"]'; // string
    $rtype = 3;                                     // int | rtype (optional)

    $apiInstance = new OpenAPI\Client\Api\FileuploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->xpanfilecreate($access_token, $path, $isdir, $size, $uploadid, $block_list, $rtype);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling FileuploadApi->xpanfilecreate: ', $e->getMessage(), PHP_EOL;
    }
}


function fileupload()
{
    // 上传相关的三个接口

    // precreate
    $precreateReturn = MyXpanfileprecreate();
    if ($precreateReturn->getErrno() != 0) {
        echo 'Exception when calling FileuploadApi->xpanfileprecreate: errno:', $precreateReturn->getErrno(), PHP_EOL;
        return false;
    }

    // superfile2
    MyPcssuperfile2($precreateReturn->getUploadid());

    // create
    MyXpanfilecreate($precreateReturn->getUploadid());
}

function filemeta()
{
    MyXpanfileimagelist();

    MyXpanfiledoclist();

    MyXpanfilesearch();

    MyXpanfilelist();
}

function MyXpanfileimagelist()
{
    global $MyAccessToken;
    $access_token = $MyAccessToken;
    $web = "1";    // string |  (optional)
    $parent_path = "/";    // string |  (optional)
    $recursion = "1";    // string |  (optional)
    $page = 1;    // int |  (optional)
    $num = 1;    // int |  (optional)
    $order = "time";    // string |  (optional)
    $desc = "1";    // string |  (optional)

    $apiInstance = new OpenAPI\Client\Api\FileinfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->xpanfileimagelist($access_token, $parent_path, $recursion, $page, $num, $order, $desc, $web);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling FileinfoApi->xpanfileimagelist: ', $e->getMessage(), PHP_EOL;
    }

}

function MyXpanfiledoclist()
{
    global $MyAccessToken;
    $access_token = $MyAccessToken;
    $web = "1"; // string |  (optional)
    $parent_path = "/"; // string |  (optional)
    $page = 1; // int |  (optional)
    $num = 1; // int |  (optional)
    $recursion = "1"; // string |  (optional)
    $order = "time"; // string |  (optional)
    $desc = "1"; // string |  (optional)

    $apiInstance = new OpenAPI\Client\Api\FileinfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->xpanfiledoclist($access_token, $parent_path, $recursion, $page, $num, $order, $desc, $web);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling FileinfoApi->xpanfiledoclist: ', $e->getMessage(), PHP_EOL;
    }
}

function MyXpanfilesearch()
{
    global $MyAccessToken;
    $access_token = $MyAccessToken;
    $web = "1";         // string |  (optional)
    $num = "2";     // string |  (optional)
    $page = "1";     // string |  (optional)
    $dir = "/";     // string |  (optional)
    $recursion = "1";     // string |  (optional)
    $key = "txt";     // string |

    $apiInstance = new OpenAPI\Client\Api\FileinfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->xpanfilesearch($access_token, $key, $web, $num, $page, $dir, $recursion);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling FileinfoApi->xpanfilesearch: ', $e->getMessage(), PHP_EOL;
    }

}

function MyXpanfilelist()
{
    global $MyAccessToken;
    $access_token = $MyAccessToken;

    $folder = "0";      // string |  (optional)
    $web = "web";      // string |  (optional)
    $start = "0";      // string |  (optional)
    $limit = 2;      // int |  (optional)
    $dir = "/";      // string |  (optional)
    $order = "time";      // string |  (optional)
    $desc = 1;      // int |  (optional)
    $showempty = 0;      // int |  (optional)

    $apiInstance = new OpenAPI\Client\Api\FileinfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->xpanfilelist($access_token, $dir, $folder, $start, $limit, $order, $desc, $web, $showempty);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling FileinfoApi->xpanfilelist: ', $e->getMessage(), PHP_EOL;
    }
}


function userinfo()
{
    MyApiQuota();

    MyXpannasuinfo();
}

function MyApiQuota()
{
    global $MyAccessToken;
    $access_token = $MyAccessToken;
    $checkexpire = 1;      // int |  (optional)
    $checkfree = 1;        // int |  (optional)


    $apiInstance = new OpenAPI\Client\Api\UserinfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->apiquota($access_token, $checkexpire, $checkfree);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling UserinfoApi->apiquota: ', $e->getMessage(), PHP_EOL;
    }
}

function MyXpannasuinfo()
{
    global $MyAccessToken;
    $access_token = $MyAccessToken;

    $apiInstance = new OpenAPI\Client\Api\UserinfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );


    try {
        $result = $apiInstance->xpannasuinfo($access_token);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling UserinfoApi->xpannasuinfo: ', $e->getMessage(), PHP_EOL;
    }
}

function multimediafile()
{
    MyXpanmultimediafilemetas();

    MyXpanfilelistall();
}

function MyXpanmultimediafilemetas()
{
    global $MyAccessToken;
    $access_token = $MyAccessToken;
    $thumb = "1";                 // string |  (optional)
    $extra = "1";                 // string |  (optional)
    $fsids = "[933321022657559]"; // string
    $dlink = "1";                 // string |  (optional)
    $needmedia = 1; // int

    $apiInstance = new OpenAPI\Client\Api\MultimediafileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->xpanmultimediafilemetas($access_token, $fsids, $thumb, $extra, $dlink, "", $needmedia);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling MultimediafileApi->xpanmultimediafilemetas: ', $e->getMessage(), PHP_EOL;
    }
}

function MyXpanfilelistall()
{
    global $MyAccessToken;
    $access_token = $MyAccessToken;
    $path = "/";   // string
    $web = "1";   // string |  (optional)
    $start = 0;   // int |  (optional)
    $limit = 5;   // int |  (optional)
    $recursion = 1;   // int | (optional)

    $order = "";// string |  (optional)
    $desc = 0; // int | (optional)

    $apiInstance = new OpenAPI\Client\Api\MultimediafileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->xpanfilelistall($access_token, $path, $recursion, $web, $start, $limit, $order, $desc);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling MultimediafileApi->xpanfilelistall: ', $e->getMessage(), PHP_EOL;
    }
}

function auth()
{
    $auth_code = MyOauthTokenAuthorizationCode();
    $refresh_token = $auth_code->getRefreshToken();
    if (!$auth_code || empty($refresh_token)) {
        return false;
    }
    MyOauthTokenRefreshToken($auth_code->getRefreshToken());

    MyOauthTokenDeviceCode();

    MyOauthTokenDeviceToken('d5610bc247c050e0cb8a425b461009e1');
}


/**
 * @return bool|\OpenAPI\Client\Model\OauthTokenAuthorizationCodeResponse
 */
function MyOauthTokenAuthorizationCode()
{
    $code = "42e3ad57c556c25c1ace3d5d9f775310";  // string
    $client_id = "QyUVtHyEGny6M6pnSvG94w2duhbDm7Ei"; // string
    $client_secret = "HyE4oaCRH2O8aOMf6Kwxe2wx1A3mGv7Q"; // string
    $redirect_uri = "oob";

    $apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->oauthTokenCode2token($code, $client_id, $client_secret, $redirect_uri);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling AuthApi->oauthTokenCode2token: ', $e->getMessage(), PHP_EOL;
        return false;
    }

    return $result;

}

function MyOauthTokenRefreshToken($rToken)
{
    $refresh_token = $rToken;
    $client_id = "QyUVtHyEGny6M6pnSvG94w2duhbDm7Ei";     // string
    $client_secret = "HyE4oaCRH2O8aOMf6Kwxe2wx1A3mGv7Q"; // string

    $apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->oauthTokenRefreshToken($refresh_token, $client_id, $client_secret);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling AuthApi->oauthTokenRefreshToken: ', $e->getMessage(), PHP_EOL;
    }
}

function MyOauthTokenDeviceCode()
{
    $client_id = "QyUVtHyEGny6M6pnSvG94w2duhbDm7Ei"; // string
    $scope = "basic,netdisk";                      // string

    $apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->oauthTokenDeviceCode($client_id, $scope);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling AuthApi->oauthTokenDeviceCode: ', $e->getMessage(), PHP_EOL;
        return false;
    }

    return $result;
}

function MyOauthTokenDeviceToken($codeTmp)
{
    $code = $codeTmp;                           // string
    $client_id = "QyUVtHyEGny6M6pnSvG94w2duhbDm7Ei";    // string
    $client_secret = "HyE4oaCRH2O8aOMf6Kwxe2wx1A3mGv7Q"; // string

    $apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $result = $apiInstance->oauthTokenDeviceToken($code, $client_id, $client_secret);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling AuthApi->oauthTokenDeviceToken: ', $e->getMessage(), PHP_EOL;
    }
}

function filemanager()
{
    MyFilemanagercopy();

    MyFilemanagermove();

    MyFilemanagerrename();

    MyFilemanagerdelete();
}

function MyFilemanagercopy()
{
    $access_token = "123.243f175dfe1664651d2fe67fface30re.Y7-t1F0DIy5SI4cXZUktt9LyoRMygzzWpaXkI1Q.hTVwnw";        // string
    $async = 1;                                                   // int
    $filelist = '[{"path":"/test/123123.docx","dest":"/test/abc","newname":"123124.docx","ondup":"overwrite"}]'; // string
    $ondup = "overwrite";                                                                                  // string | ondup (optional)

    $apiInstance = new OpenAPI\Client\Api\FilemanagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $apiInstance->filemanagercopy($access_token, $async, $filelist, $ondup);
    } catch (Exception $e) {
        echo 'Exception when calling FilemanagerApi->filemanagercopy: ', $e->getMessage(), PHP_EOL;
    }
}

function MyFilemanagermove()
{
    $access_token = "123.243f175dfe1664651d2fe67fface30be.Y7-t1F0DIy5SI4cXZUktt9LyoRMygzzWpaXkI1Q.hTVwnw";       // string
    $async = 1;                                                                                          // int32
    $filelist = '[{"path":"/test/abc/123124.docx","dest":"/test/","newname":"123124.docx","ondup":"overwrite"}]'; // string
    $ondup = "overwrite";                                                                                     // string | ondup (optional)

    $apiInstance = new OpenAPI\Client\Api\FilemanagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $apiInstance->filemanagermove($access_token, $async, $filelist, $ondup);
    } catch (Exception $e) {
        echo 'Exception when calling FilemanagerApi->filemanagermove: ', $e->getMessage(), PHP_EOL;
    }
}

function MyFilemanagerrename()
{
    $access_token = "123.243f175dfe1664651d2fe67fface30be.Y7-t1F0DIy5SI4cXZUktt9LyoRMygzzWpaXkI1Q.hTVwnw";// string
    $async = 1;                                                                                   // int32
    $filelist = '[{"path":"/test/123124.docx","newname":"123125.docx"}]';                                // string
    $ondup = "overwrite";  // string | ondup (optional)

    $apiInstance = new OpenAPI\Client\Api\FilemanagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $apiInstance->filemanagerrename($access_token, $async, $filelist, $ondup);
    } catch (Exception $e) {
        echo 'Exception when calling FilemanagerApi->filemanagerrename: ', $e->getMessage(), PHP_EOL;
    }
}

function MyFilemanagerdelete()
{
    $access_token = "123.243f175dfe1664651d2fe67fface30be.Y7-t1F0DIy5SI4cXZUktt9LyoRMygzzWpaXkI1Q.hTVwnw"; // string
    $async = 1;                                                 // int32
    $filelist = '[{"path":"/test/123125.docx"}]';                                                         // string
    $ondup = "overwrite";                                                           // string | ondup (optional)

    $apiInstance = new OpenAPI\Client\Api\FilemanagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client()
    );

    try {
        $apiInstance->filemanagerdelete($access_token, $async, $filelist, $ondup);
    } catch (Exception $e) {
        echo 'Exception when calling FilemanagerApi->filemanagerdelete: ', $e->getMessage(), PHP_EOL;
    }
}

fileupload();

filemeta();

userinfo();

multimediafile();

auth();

filemanager();
