<?php
require_once './vendor/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRequestException;
use Facebook\FacebookRequest;
use Facebook\GraphUser;

$AppID = 370674746474221;
$AppSecret = '2cbe060f4862d3aeff88505acb94bd2a';
$accessToken = 'CAAFRIHCXPu0BABibXgPAiQ6UvPKrCzIEChzQ7nXTwu5k7dcqjmFtXXhiheNxZCQ3DxO3wXux45XxVg55apSFLYTvsQKYZAUQwwxGu7ccFsi2cioQ7WPrpdfZC6mmSZAbZAX8OKEPZB7QVlEw40IEcWZC40fLMm6gzC3AxZAeil6qbErc2kGZC6YfrZBAaZCJCEJJVqQtpQNB3o6L3vKU7p5jSTP';

FacebookSession::setDefaultApplication($AppID, $AppSecret);
$session = new FacebookSession($accessToken);

if ($session) {
    try {
        /*用户基本信息*/
        $user_profile = (new FacebookRequest(
            $session, 'GET', '/me'
        ))->execute()->getGraphObject(GraphUser::className());
        var_dump($user_profile);

        /*用户游戏好友列表*/
        $request = new FacebookRequest(
            $session,
            'GET',
            '/me/friends'
        );
        $response = $request->execute();
        $graphObject = $response->getGraphObject();
        var_dump($graphObject);

        /*用户所有好友列表*/
        $request = new FacebookRequest(
            $session,
            'GET',
            '/{friendlist-id}'
        );
        $response = $request->execute();
        $graphObject = $response->getGraphObject();
        print_r($graphObject);
    } catch (FacebookRequestException $e) {
        echo "Exception occured, code: " . $e->getCode();
        echo " with message: " . $e->getMessage();
    }
}
