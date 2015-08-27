<?php
/**
 * Created by PhpStorm.
 * User: EMMA
 * Date: 6/8/15
 * Time: 8:00 PM
 */
//get real ip address
function get_real_ip_address()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function get_user_country($ip_address)
{
    if (check_live_server()) {
        //enable soap for this to work
        $client = new SoapClient("http://www.webservicex.net/geoipservice.asmx?WSDL");
        $params = new stdClass;
        $params->IPAddress = $ip_address;
        $result = $client->GetGeoIP($params);
        // Check for errors...
        return $result->GetGeoIPResult->CountryName;
    } else {
        //if on local host return uganda
        return 'Uganda';
    }


}


//Get an array with geoip-infodata
function get_geo_info($ip)
{
    //check, if the provided ip is valid
    if (!filter_var($ip, FILTER_VALIDATE_IP)) {
        throw new InvalidArgumentException("IP is not valid");
    }

    //contact ip-server
    $response = @file_get_contents('http://www.netip.de/search?query=' . $ip);
    if (empty($response)) {
        throw new InvalidArgumentException("Error contacting Geo-IP-Server");
    }

    //Array containing all regex-patterns necessary to extract ip-geoinfo from page
    $patterns = array();
    $patterns["domain"] = '#Domain: (.*?)&nbsp;#i';
    $patterns["country"] = '#Country: (.*?)&nbsp;#i';
    $patterns["region"] = '#State/Region: (.*?)<br#i';
    $patterns["city"] = '#City: (.*?)<br#i';
    $patterns['latitude'] = '#var latitude = (.*?);#i';
    $patterns['longitude'] = '#var longitude = (.*?);#i';


    //Array where results will be stored
    $ipInfo = array();

    //check response from ipserver for above patterns
    foreach ($patterns as $key => $pattern) {
        //store the result in array
        $ipInfo[$key] = preg_match($pattern, $response, $value) && !empty($value[1]) ? $value[1] : 'not found';
    }

    return $ipInfo;
}

//get location from longitude and latitude
function getaddress($lat, $lng)
{
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' . trim($lat) . ',' . trim($lng) . '&sensor=false';
    $json = @file_get_contents($url);
    $data = json_decode($json);
    $status = $data->status;
    if ($status == "OK")
        return $data->results[0]->formatted_address;
    else
        return false;
}

