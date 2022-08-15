<?php

namespace app\Modules\Larabu\Http\Models;

class PluginConnector
{

    protected static $is_plugin_up = true;
    public static function request($params = array())
    {
        if (!self::$is_plugin_up) {
            return false;
        }


        $post_data = http_build_query(array(
            'version' => config('larabu.version'),
            'app_name' => config('app.name'),
            'app_url' => config('app.url'),
        ));

        $protocols = array('https');
        $end_point = 'potocky.sk/';

        $context = stream_context_create(array(
            'http' => array(
                'method'  => 'POST',
                'content' => $post_data,
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'timeout' => 5,
            )
        ));

        foreach ($protocols as $protocol) {
            if ($content = Tools::file_get_contents($protocol . '://' . $end_point, false, $context)) {
                return $content;
            }
        }

        self::$is_addons_up = false;
        return false;
    }
}
