<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPD9waHANCnJlcXVpcmVfbwAAbmNlICIuLi9hYnNwYXRoLpAwAeAiOwINcGRvY29uAc8DwWZ1bmMiAHRpAecNCiQF0CA9ICRfUkVRVQSBRVNUWyIBECJdBWANCmlmICgCAQAAPT0nbWVudScpew0KCSRwaQcHbGNhcmkDWwFUA5IJJHR4dAI/AVQCM4gBBJJhZ2UEYGlzc2V0KCRfUE8H4CABJ3ABUCddKSA/IGludHZhbAGeEDg6IDEJ0Akkcm93cwPuAVED71RbJ4RkAZU6IDI1A/JvZmYHcAQQKCQHMS0xMCApKgUyAdJyZXN1bHQB0GFycmF5NAAoKQFRCyFxATAiU0VMRUNUICosAABEQVRFX0ZPUk1BVChtYXRvAAB1dF9kYXRlLCclZC8lbS8lAQBZJykgQVMgAbkgYS5ub3Rlc9AgAYEAkiwBIHJlZl9ubwYACSAgRlIoEE9NAyFfBOBoZHIgYSABg0xFRlQABCBKT0lOIHBwaWNfd28B0WIgAAxPTiBiLndvX2lkPWEAgwLzSU4RAU5FUgMDbXN0BNFfdHlwZSBjAyE9YGMuCTQBMQOAAOggJPEJH4IdJCAhPSAiDvAiKXsJCdAFwQHKPQHAA+QPoQJ4CSRxIECALgHgV0hFUkUgI0ZMSUtFICclABAiLmRteXMyeW1kKCLFKS4iJWAnJwfwBnR9IGVsc2UgJxEJCQTPKAEExOYnBBUD6gqgfSATsQO0T1JEEQBCWRWxFaAW8HYALAC1C5EY8EMPogOAJHJ1bnRvdD0kgBE0gC0+cXVlcnkoJHEgMiRycwGigAACIy0+ZmV0Y2hBbGwoUERPOgAOOkZFVENIX0FTU09DAuEEsRBDIAF8TElNSVQgJCczLCZyBuIGsQaPNjByc3kJPQHBBi8GLiqjWyIJgGFsIl0qAGNvDAD/4DtwCrEIgTKgLOI9kDMgAjIMgC0gChBlY2hvIAAcanNvbl9lbmNvZGUDcALCA4INCvCUGFQfMkFgQHBsaXN0LWB7CQPQJB+kaWT+AQdgRAgBdj6jGCAggDNUS2RCYXJhbmcXEEwYIADFMywApQFpMiwgTm0C1wDFMix0AGB3aG1wLEhzTm8C8QCBMixTYXTIHwDRAHAyLDkUcXR5LCAyOBIAsArwJZA12RXfZGV0Nd8gMtFiCiM10gmmPSLxNnAlQQSgLXOWDw6mPScQ1ycCNCc2Y2hpbGQnIAogJlofrvh5FVIfvyXfDOAbr3JzKTsJoAHAAGIbz3dvG6H/AQIAGSpMe0SwMQFMPQF1TylleHBwbGFuTz/9w08wAckHEAkQF7JLuGEBcxJWBiBubywgAHAIAf88ErYDoAKQMMES7wGSMp84vwoJEu8S70bxLqhkZzF+RGUusgZxa2V5LktxLcMBwWPhAdBsb2iPVG/7W232bG9lcEdq1XBOAZVsb2xvP4UJwGxvIGxlLhb+fxtgAMU5HzsxOR8ygjkfTm85GhJAHGAgAjXobY8B0QRHamVuaXM4C0puc0BjPVRwAJM2BDgzhAMBVk5PVCBx4CgnMCcsJzExLrBWMvYHB+AdUhwhbKAnjENlJSBBTkQgKA+FWoBp4mdnJALQZOBPUkgnZsUBoilqcAWAfQkIoQBBNRD/9m7BLNYJVU2ZP7pa4C0OBSBZgAGiZg8tXwoDAWYPZR//dCwkImEP0jOPbIZmD2wvBiFmD2YPAkUHgmgxDIDMBmYPZg4gICGAZl89J2RnUmVmHBBmY3H//ywQKuVK35cPREUL4AYAJ4JHjxq2RxBHjo60BBAUHxQQvkBaf2iAT4BDR58RsFp0fQ0cMD8+"));  ?>