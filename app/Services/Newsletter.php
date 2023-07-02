<?php 

namespace App\Services;
use MailchimpMarketing\ApiClient;

class Newsletter 
{

    public function subscribe (string $email, string $list=null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');
        $mailchimp = new ApiClient();

        
    
        
        return $this->client()->lists->addListMember($list,[
         'email_address' => request('email'),
         'status' => 'subscribed'
        ]);
    }

    protected function client()
    {
        $mailchimp = new ApiClient();

        return $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us17'
        ]);
    }

}