<?php

return [
    'name'     => 'Newsletters',
    'settings' => [
        'email'             => [
            'templates' => [
                'title'       => 'Newsletter',
                'description' => 'Config newsletter email templates',
                'to_admin'    => [
                    'title'       => 'Email send to admin',
                    'description' => 'Template for sending email to admin',
                ],
                'to_user'     => [
                    'title'       => 'Email send to user',
                    'description' => 'Template for sending email to subscriber',
                ],
            ],
        ],
        'title'             => 'Newsletter',
        'description'       => 'Settings for newsletter',
        'mailchimp_api_key' => 'Mailchimp API Key',
        'mailchimp_list_id' => 'Mailchimp List ID',
        'sendgrid_api_key'  => 'Sendgrid API Key',
        'sendgrid_list_id'  => 'Sendgrid List ID',
    ],
    'statuses' => [
        'subscribed'   => 'Subscribed',
        'unsubscribed' => 'Unsubscribed',
    ],
];
