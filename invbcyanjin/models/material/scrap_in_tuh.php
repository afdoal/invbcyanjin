<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPD9waHAgDQpyZXF1aXJlXwAAb25jZSAiLi4vYWJzcGF0aEgGLgHwIjsCDXNlc3Npb25zAe8D4XAGDGRvY29uAc8BwWZ1bmN0A7AB5Q0KAAANCi8vVkFSSUFCRUwgWUFOAABHIERJIFBPU1QNCiRtYXRpAABuX2lkPSRfUkVRVUVTVFsnmAABRSddCXACJGRhdGU9ZG15czJ5GINtZCgC3gHxJ10pAwFub3RlcwT5ARLAAATCCJFGT1JNIExJU1QgREFUQQUAIE1BVEUJoEwIsG5vbGlzdD1lAA54cGxvZGUoImAiLCAGmAHzBlRLAPFkQmFyYW5nMgL/DFQCJgMkcXR5As/hIQLEAcACZHRvdF8A4D0wDKFqbWxuCKAAInQ9c2l6ZW9mKCQIMyktMQHgZgIKb3IgKCRpAqAgJGk8JALFOwDgKwEEKyl7DQoJJATUICs9ICQFUFskUHBpFRF9GREkYWtzaRJZAQESRCR0Z2xAAD0VESgnWS1tLWQgSDppOnMniAAV0nVzcgNgU0VTU0lPTlsndXMCAGVyTmFtZQOlTm1NZW51PSJzAQBjcmFwIGluJYENCnRyeSB7CYAACSFzcWxbXSA9ICJTVEFSVCAAxlRSQU5TQUNUBMACoQlpZg0wCKE9DAA9J3QnDFIDcQkvL1RBTUJBSCACQkhFQURFUgSgCSQEtklOU0UEwEkIGE5UTyAjoF9pbmNoZBHAAmEJCSDQ1QFBJiIsAdF0eXBlAJEBIGQlICwhwgkAECCUICADBSkgVkFMKJAgKAElJyhEaWQH0ScsJzEyAFABFAQxAOEEYicC9SkiOwtkA4BBS0hJUiALzgKRDTZERVRBSUwJ/xwDIh1PIAIdRQpwA7EPvw+4ZGV0C5cPIA6QaWQAbyxjaGlsZF9ubw+xNtAsIOAEoRHxDv//ow76J0QjwQ6hLWYBFQSgALIE9iIP030vLw/qDnPAAAJhAEEka2V0bG9nPSJBZGQgJKYgI2MgFVRpZCDCDtVtc2cjEmF2ZSBTFCh1Y2NJgC4CEyRlcnIB6UYUgEVEIcBQAdMVEn0gZWxzZSAleXUldC8vSEEAA1BVUyBEVUxVIFNFTVVBCYIlYgAGPSJERUxFVEUgRlJPTSQBJUVXDZ9IRVJFAREVYj0SmAdTLy8ZwwQfKVAZoQQfr/9P9CcEFVUufzMjLn8uf1SRHjIuf1FAFSAw8A5xH4//+wEhDPgufx/RLn4EwR6FC5gXwjtQATIfky3yJEpVTR93/DsDQzAfMB8JP88/yRZxO6YwHwEgMB8/Dxl1LCf/wzAfX5MvYgHwMB8wHBBoEwEAQS/2RWRpdDAPIMPL/wKSLgRVcEaxIDAPAgswKS/EYJEYsC7SBSIuLy0R/8AuLyTBLi8uLzI4F7EuLxS1DWg/5URlbGV0ZZ/5EB8iO1jzCxIONALEED8CCxA6J2EEQDlUICI0Sd+4R/BeljAcgG9QLkFuEABxCiMnXLEEWkixQ09NHBFNSVROgwXgK0BlYWNoKAZhIGFzdrCBB2uTLy9lY2hvAPAuIlxyXHCyK7CToAAnLT5xdWVyeSgkcXUxCX0EQA7yAvIAgGpzb25fZW5jf4AoYXJyYXkoIA0nc09jJz0+dHJ1ZSwnDxAAwCQAcBBAKSk7a3B9IGNhdAgQIFBET0V4EsBjZXCX4SAkALcpd9MHuCJST0xMQgf0QUNLIikq4ge/B7MGQAaxVpMMhC4Fpy0+CCBnZXRNWSBhZ2UoKQjgDQoJZXgMAGl0KDANoQ2QPz4="));  ?>