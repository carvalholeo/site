<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    private static function parseResponse($content)
    {
        $feed = json_decode($content);
        return $feed;
    }

    private static function getPosts()
    {
        $url = 'https://api.rss2json.com/v1/api.json?rss_url=https://blog.leocarvalho.dev/feed.xml';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $feed = curl_exec($ch);
        curl_close($ch);
        $content = self::parseResponse($feed);

        return $content;
    }

    public static function getContent($quantity = 3)
    {
        $feed = self::getPosts();
        $feedToView = Array();
        for ($i=0; $i < $quantity; $i++) {
            $feedToView[] = $feed->items[$i];
        }
        return $feedToView;
    }
}
