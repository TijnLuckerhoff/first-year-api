<?php
/**
 * Class to handle an AJAX call as a proxy
 */
class Proxy
{
    private $url;

    private $key;

    public function __construct($url, $key)
    {
        $this->url = $url;
        $this->key = $key;
    }

    public function getData($collection)
    {
        $request_url = $this->url . "/" . $collection . ".json?api_key=" . $this->key;
        $curl = curl_init($request_url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);
        
        //API call with Authorization
        //Change the key with your settings
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer hxocgznbtR9YFOgaSltR88vjOO1ftla78NwYl10N'
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}
