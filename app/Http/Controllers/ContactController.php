<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ContactController extends BaseController
{
    const SITE_TITLE = 'レンタルホームページ';
    const EMAIL_OWNER = 'ryo238715@icloud.com';

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $pageName = '問い合わせ';
        return view('contact.index', compact('pageName'));
    }

    public function send()
    {
        $requestData = json_decode(file_get_contents('php://input'), true);
        if (isset($requestData['mail']) && $requestData['mail'] != '') {
            $toOwner = self::EMAIL_OWNER;
            $toCustomer = $requestData['mail'];
            $subjectOwner = '【' . self::SITE_TITLE . '】問い合わせがありました';
            $subjectCustomer = '【' . self::SITE_TITLE . '】お問い合わせ頂きありがとうございました';

            $messageOwner    = $this->buildBodyToOwner($requestData);
            $messageCustomer = $this->buildBodyToCustomer($requestData);

            // サイトオーナーへメールを送信
            mb_send_mail($toOwner, $subjectOwner, $messageOwner, "From:".$toCustomer);

            // 問い合わせユーザーへメールを送信
            mb_send_mail($toCustomer, $subjectCustomer, $messageCustomer, "From:".$toOwner);

            echo 1;
        }
    }

    public function complete()
    {
        $pageName = '問い合わせ完了';
        return view('contact.complete', compact('pageName'));
    }

    private function buildBodyToOwner($requestData)
    {
        $body = '以下の内容で問い合わせがありました。';
        $body .= "\n\n";
        $body .= '名前: ' . $requestData['name'] . "\n";
        $body .= 'メールアドレス: ' . $requestData['mail']. "\n";
        $body .= '自由記述欄: ' . $requestData['message']. "\n\n";
        $body .= '※このメールに返信されても、返信内容の確認およびご返答ができません'. "\n";
        return $body;
    }

    private function buildBodyToCustomer($requestData)
    {
        $body = '';
        if ($requestData['name'] != '') {
            $body .=  $requestData['name'] . ' 様';
            $body .= "\n\n";
        }

        $body .= 'お問い合わせいただき誠にありがとうございました。';
        $body .= "\n\n";
        $body .= '以下の内容を受け付けました。';
        $body .= "\n\n";
        $body .= 'お名前: ' . $requestData['name'] . "\n";
        $body .= 'メールアドレス: ' . $requestData['mail']. "\n";
        $body .= '自由記述欄: ' . $requestData['message']. "\n\n";
        $body .= '※このメールに返信されても、返信内容の確認およびご返答ができません'. "\n";

        $body .= "\n\n";
        $body .= self::SITE_TITLE;

        return $body;
    }
}
