<?php
/**
 * DATE: 2019-07-14
 * TIME: 02:11
 * AUTHOR: hongcoo
 * PROJECT: yumingparking
 */

namespace App\Tools;

class ServerTool
{
    /**
     * @param $url
     * @return string
     */
    public static function getDomain($url)
    {
        if ('' === $url) {
            return '';
        }
        //查看是几级域名
        $data = explode('.', strtolower($url));
        $n = count($data);
        //判断是否是双后缀
        $preg = '/[\w].+\.(com|net|org|gov|edu)\.cn$/';
        if(($n > 2) && preg_match($preg, $url)){
            //双后缀取后3位
            $host = $data[$n-3].'.'.$data[$n-2].'.'.$data[$n-1];
        }else{
            //非双后缀取后两位
            $host = $data[$n-2].'.'.$data[$n-1];
        }
        return $host;
    }
}
