<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPD9waHANCnJlcXVpcmVfbwCAbmNlICIuLi8AMG1vZGVscy8AkGFic3BhdGguAoAiOwKtcGRvYzAib24BzwRhZnVuY3RpAecNCiQGcCAABD0gJF9SRVFVRVNUWyIBECJdhwAFYCRDQVIBqwEQAaIvLyRtYXRvdQIAdGRvX2lkAkAiUk1PLTAwMDFAgDMI8Q0KaWYgKAWRPT0nZGcnKQIAew0KCSRxAoFTRUxFQ1QgKiwAAERBVEVfRk9STUFUKERva1QAAGcsJyVkLyVtLyVZJykgQVNAACABUkRteSBGUk9NIGRva3VtGAJlbiAF8QSxLj0gIldIRVJFAoFLAABkQmM9JzEnIEFORCBDQVI9QAAnC7EnIE9SREVSIEJZIG5vIgJSOwkNCn0gE8BlIAnaMgnvICoHQ2IHwGFyYW5nBz8HPwc/BzIHLz0naW5oZEDgcgdPIGEuKixjAEARiRZAaW5fZGE5hHRlEd0BpxWgCSALAwFQX2luYwYAIGFAACABg0xFRlQgSk9JTiBwdXJfIBNwbwHBYiBPTiBiLnAbsT1hAIMC/hATbXN0BMBfdHlwZSBjAxFjLgXwCOD4PgEhA2AA1wO0GNNLZEpucxugGOIayRi2A5NuHYNvLCAAow3hHvBDAtEaD2luZGV0EuAb0Hz8CScxCBAnAiroBHNpZCmSIbEhoCZkIYAcMiwgGJBObUIAogagIFVyAMMsICf0cXR5LDggIDInUgCxAWRwcmljZQGFSHJnU2Ue33JhaBVjKSIHgBIgYwoAFu8gE/Ej9BbyCKUwML7AA4JkE2oBMA2SK4AAtScCFBOGY2hpbGRfPABubwwgEsARABLfZGdQZXRpS2VtYX1ucxMwCrA3OyJTICBwAmBrAmEtvyAbwArANO9SgUI06E5vVXJ1dBsfcT7iQ2FyaQf0ZD4BdGQA0A9AGvgBQxrUZHRzYW1wYWkCPfBiAWMCVEOLDXAJQ09OQ0NwLdEoYS4/ECwADTMpLCcuJyxSSUdIVAE2HSJGAfGD8wNdTm9EYWYDWwE1A1MA4wNxOQlUZwNxSoxwPEYBYgKxIXJoZWFkZXIhNAohN/MhEWplE/puaXMhaWIuMwIo8zVQAOgf8gP3G2B0SNBzDN9ha3NpOQUatWEuAKRP8mMRAQTAD3AJQQQ6ruAfl2Q9MWQDlQLwBDlkBD8MUwhgcGVsYWIC33VoYW4gZQQxZQQ/CGJlBDtB0wqWQeEJ0YIAJDEJaWYoJCFTICE9ICcnICYmc+AgARAgMwEzKToC4SzgX2FeQRcyIEJFVFcAAUVFTiAnIi5kbXlzMnltZAS1HwcpLiJg4wHMBWMB4gfSZW5kaWZusEOBBdHCQjb2JXIgREVTNtQNCnKhdW49JHXgLQAgPnF1ZXJ5KCRxKQPAJHJzPSQAAHJ1bi0+ZmV0Y2hBbGwoUEQAAk86OkZFVENIX0FTU09DAnFlAA1jaG8ganNvbl9lbmN8YHIAcwGBIBEvLwGiJ1t7IklEIjp0qCwiTV+wA8RyaWFsX0MDEAHActB2YTAxIgHITmEgAG1lAcBKQUNLRVQgQ09UVE9OiUECAFNpegFxWEwAwEwFkWJsYWNrANAECENvbG9yAxAxNSBEQVkBEFVuaURFdAEAUk9MAsFRdHkA0DUwMAGgUgMhHiY6IjgAsFNlAcAIZiAtIAdrfSwMXwxfQXfdVAxfDF8MWVMIEAxPCLAMTwxIMYkQA5AMVDcAsJkgDFgnLmUBjDUuJwzPXScd0D8+"));  ?>