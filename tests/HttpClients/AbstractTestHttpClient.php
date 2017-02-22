<?php

namespace Munouni\Instagram\Tests\HttpClients;

class AbstractTestHttpClient extends \PHPUnit_Framework_TestCase
{
    public function testDummy()
    {
        $this->isTrue();
    }

    protected $fakeRawBodyNextUrl = '
    {"meta": {"code": 200},
     "data": {"bio": "profile...", "username": "asamingosu", "id": "1234567890", "website": "",
      "counts": {"media": 72, "follows": 55, "followed_by": 78}, "profile_picture": "", "full_name": "imaiasami"},
      "pagination": {"next_url":"http://next.com"}}';
    protected $fakeDecodeBodyNextUrl = [
        'meta'       => ['code' => 200],
        'data'       => [
            'bio'             => 'profile...',
            'username'        => 'asamingosu',
            'id'              => '1234567890',
            'website'         => '',
            'counts'          => [
                'media'       => 72,
                'follows'     => 55,
                'followed_by' => 78
            ],
            'profile_picture' => '',
            'full_name'       => 'imaiasami'
        ],
        'pagination' => [
            'next_url' => 'http://next.com'
        ]
    ];

    protected $fakeRawBody = '
    {"meta": {"code": 200},
     "data": {"bio": "profile...", "username": "asamingosu", "id": "1234567890", "website": "",
      "counts": {"media": 72, "follows": 55, "followed_by": 78}, "profile_picture": "", "full_name": "imaiasami"}}';
    protected $fakeDecodeBody = [
        'meta' => ['code' => 200],
        'data' => [
            'bio'             => 'profile...',
            'username'        => 'asamingosu',
            'id'              => '1234567890',
            'website'         => '',
            'counts'          => [
                'media'       => 72,
                'follows'     => 55,
                'followed_by' => 78
            ],
            'profile_picture' => '',
            'full_name'       => 'imaiasami'
        ]
    ];
    protected $fakeRawHeader = 'Expires:Sat, 01 Jan 2000 00:00:00 GMT
Content-Type:application/json; charset=utf-8
Pragma:no-cache
Content-Language:en
x-ratelimit-remaining:7272
Vary:Cookie, Accept-Language, Accept-Encoding
x-ratelimit-limit:5000
Date:Tue, 31 Jan 2017 08:47:14 GMT
Cache-Control:private, no-cache, no-store, must-revalidate
Set-Cookie:s_network=""; expires=Tue, 31-Jan-2017 09:47:14 GMT; Max-Age=3600; Path=/, csrftoken=uWIg9gGuRsd7pCAHJ7WtRY7eJea9PWJL; expires=Tue, 30-Jan-2018 08:47:14 GMT; Max-Age=31449600; Path=/; Secure
Connection:keep-alive
Content-Length:53444';
    protected $fakeHeadersAsArray = [
        'Expires'               => ['Sat, 01 Jan 2000 00:00:00 GMT'],
        'Content-Type'          => ['application/json; charset=utf-8'],
        'Pragma'                => ['no-cache'],
        'Content-Language'      => ['en'],
        'x-ratelimit-remaining' => [7272],
        'Vary'                  => ['Cookie, Accept-Language, Accept-Encoding'],
        'x-ratelimit-limit'     => [5000],
        'Date'                  => ['Tue, 31 Jan 2017 08:47:14 GMT'],
        'Cache-Control'         => ['private, no-cache, no-store, must-revalidate'],
        'Set-Cookie'            => ['s_network=""; expires=Tue, 31-Jan-2017 09:47:14 GMT; Max-Age=3600; Path=/, csrftoken=uWIg9gGuRsd7pCAHJ7WtRY7eJea9PWJL; expires=Tue, 30-Jan-2018 08:47:14 GMT; Max-Age=31449600; Path=/; Secure'],
        'Connection'            => ['keep-alive'],
        'Content-Length'        => ['53444']
    ];
}
