function randck()
{
$cookie = 'presence=EDvF3EtimeF1700355182EuserFA21B79175492482A2EstateFDutF0CEchF_7bCC;fr=0KpFBUGG6M2IlGFiY.AWUUnq7X3byZWDG5f_ugUX8y9Z8.BlWVw4.oz.AAA.0.0.BlWVxW.AWXB98ZywKI;xs=48%3AgdIvKuwoos2Cog%3A2%3A1700355155%3A-1%3A10717;c_user=100079175492482;locale=en_GB;wd=500x436;sb=OFxZZQTvj4PXj_Cy83OMMfoB;datr=OFxZZfOaIxb2lEc5NdAGW2mS;
presence=EDvF3EtimeF1700355185EuserFA21B833835B81A2EstateFDutF0CEchF_7bCC;fr=0e4fPpLTGshR5vFPV.AWX4PgC_b6E_w4Vy3LZftGhbGlw.BlWVw6.97.AAA.0.0.BlWVxU.AWWykyYgJuE;xs=42%3As-9X7mV808ireQ%3A2%3A1700355153%3A-1%3A7528;c_user=100083383500081;locale=en_GB;wd=500x436;sb=OlxZZdx1tn3pCQHkVhDt0wO-;datr=OlxZZQaHqfk7DagxCrC511t5;
wd=500x436;fr=0urHGfnTzxnX4Foi0..BlWVw8.o4.AAA.0.0.BlWVxI.AWVBE4fNUEc;sb=PFxZZQj_vzGUzeGu2CjEvj7J;datr=O1xZZSKBSqfhWl26csrdsrKD;
presence=EDvF3EtimeF1700355181EuserFA21B52328241414A2EstateFDutF0CEchF_7bCC;fr=04da0dXac8OfwEgIK.AWUIybHzHpdrreFXiJ3tefdW-zw.BlWVw9.UJ.AAA.0.0.BlWVxe.AWUyIzqCQdM;xs=12%3AVMEpCP5T_KcQsQ%3A2%3A1700355163%3A-1%3A5099;c_user=100052328241414;locale=en_GB;wd=500x436;sb=PVxZZQjbq52fFeOFLp26PLcj;datr=PVxZZc1jGmSAPzUvaB3fq0jJ;
fr=1lnmGuzYQLF8XUtc0.AWUJTCRZBrQotAq1mD0I8hhE8dE.BlWWQV.6l.AAA.0.0.BlWWQV.AWUI28VinJQ;xs=21%3A0fDDXhvpiLdG4w%3A2%3A1700317777%3A-1%3A4863%3A%3AAcVvBOavp5OOKYXGv3Qf9rUjuH57A4cbzOIvxSrCnA;presence=EDvF3EtimeF1700357143EuserFA21B29044132244A2EstateFDutF0CEchF_7bCC;c_user=100029044132244;locale=vi_VN;wd=500x436;sb=OcpYZaTgMgnHyc7WV59zFeda;datr=OMpYZX7jZGQVXyUGOKmVcr6S;';
$userAgentArray = explode ('
', $cookie);
   


$getArrayKey = array_rand($userAgentArray);
	return $userAgentArray[$getArrayKey];
 
}
