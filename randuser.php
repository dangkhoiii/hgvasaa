function getUserAgent()
{

$userAgentArray[] = "Mozilla/5.0 (Linux; Android 7.1; Pixel XL Build/NRD90M) AppleWebKit/533.49 (KHTML, like Gecko)  Chrome/54.0.1987.276 Mobile Safari/600.6";
    $getArrayKey = array_rand($userAgentArray);
	return $userAgentArray[$getArrayKey];
 
}
 