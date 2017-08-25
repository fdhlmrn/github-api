<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Github extends Model
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.github.com',
            'headers' => [
                'Accept' => 'application/vnd.github.v3+json',
                'Authorization' => 'Basic ZmRobG1ybjpmNDE1ZTg1MjY2Yzc3M2Y3Nzc1ZDcwMDY0ZDcxMzBjMjViNzZlZmNj',
            ],
        ]);
    }

    public function getUser($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('Missing username');
        }
        $result = $this->client->request('GET', '/users/' . $username)
            ->getBody()->getContents();

        return $decodeUser = json_decode($result, true);
    }

    public function getRepo($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('Missing username');
        }
        $result = $this->client->request('GET', '/users/' . $username . '/repos')
            ->getBody()->getContents();
        return $decodeRepo = json_decode($result, true);
    }

    public function getCommit($request)
    {
        $url = $request['url'] . '/commits';
        $result = $this->client->get($url)
            ->getBody();
        return $commits = json_decode($result, true);
    }

    public function getIssue($request)
    {
        $url = $request['url'] . '/issues';
        $result = $this->client->get($url)
            ->getBody();
        return $issues = json_decode($result, true);
    }

    public function getPull($request)
    {
        $url = $request['url'] . '/pulls';
        $result = $this->client->get($url)
            ->getBody();
        return $pullrequests = json_decode($result, true);
    }
}
