<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPD9waHANCnJlcXVpcmVfbwAAbmNlICIuLi9hYnNwYXRoLpAwAeAiOwINcGRvY29uAc8DwWZ1bmMiAHRpAecNCiQF0CA9ICRfUkVRVQSBRVNUWyIBECJdBWANCmlmICgCAQAAPT0nbWVudScpew0KCSRwaQcHbGNhcmkDWwFUA5IJJHR4dAI/AVQCM4gBBJJhZ2UEYGlzc2V0KCRfUE8H4CABJ3ABUCddKSA/IGludHZhbAGeEDg6IDEJ0Akkcm93cwPuAVED71RbJ4RkAZU6IDI1A/JvZmYHcAQQKCQHMS0xMCApKgUyAdJyZXN1bHQB0GFycmF5NAAoKQFQCxFxASAiU0VMRUNUICosAABEQVRFX0ZPUk1BVChtYXRpAABuX2RhdGUsJyVkLyVtLyVZAwEnKSBBUyABpwQgCSAgRlJPTQFRACBfaW5jaGRyIGEgAYNMRUZUIACASk9JTiBtc3QB0F90eXBlIGMDMCBPTiBjLgRTASE9YQDYA7RXSEVSIA1FIAGaTk9UIElOKCczCFAiIQkcsoA8GCQgIT0gIiIpewkI8AfRAcIcFCA98EIBwAbzDOECaAkkcSAuAdBBTkQgIEZMAABJS0UgJyUiLmRteXMyeW1kQCAoH8UpLiIlJyAiOwZEfSBlbHMk82UgJBEJCQSvaSAEpAP1A8oKUH0gBJMDtADHT1JERVIgQlkUoReQbm8sAKQLURdwYAhDD1IDgCRydW50b3Q9JDFgLT5xAbB1ZXJ5KCRxHREkIHMBogIjLT5mZQAAdGNoQWxsKFBETzo6RkVUQwHgSF9BU1NPQwLhBLEQAwqgTUlUICS+PCQTLCNSBuIGsQaPMxBycz0BwQYvBi4ng1sihP8JgGFsIl0m8GNvDAA4UAqxCIELYCnCOnAwAIgAAjIkcnMqA2VjaG8ganNvbl9lB/BuY29kZQNwAsIDgRgEHrI+ED0gbGlzdJn8IeB7CQ2xHyNpZAcgQKgBZTszF7Af8C/0S2QCmEJhcmFuZxbAIADFMywApQFpMiwgMABObQLXAMUyLHR3aG1wLEhzTm/BkALxAIEyLFNhdADRAHAyLDW0cXR5LDg9IDI0wgCxAWRwcmljZQGFANMBpAJQKgETnjUDZGFtFEEOYCQgN+lkZXQ37zfiYg2zYjfRrxYNNj0mIV8SMASjN1MSJT0nJAC1JzlkKjZjA/9oaWxkX24OYSlzCIAEQCExIv4Y0iMPKS8EEIYYHv9ycyk7PVMe/2RnRGUfAgOgJHBv/+8MkV9qATIenx3WGXEQxR6fILEenxRyMh4/BMEePx4/8G8eP1bjHj8ePXB1cl9wMDAeL04eLyy1Hi9VcP/tEYId8ACCHc8dzx/xHc9HMB3PRu9G5Akdzx3CIAXQxi8dvx2yRmlyPQMeAWtleTyrcR2jAcFu4QHQzf93b3OPVFt49ndvZXtHddV7TgGVd293b02lCcB3Z7/XE0JxATB3dSg1JDEAxSj/KP9IRjJHj29HihJAOhD8j0KTeKBAxBeQNaE/Y1RwTQM9JzFuMgMAA2AAMO12VfIX0XYgJ5LzbtUgc4EoCzVkUHOSJALQbrBPbPxSCgYBqyl0IAWAfQkIAQBBWFB4UUXWBRZBU//wRdMC4CfhZCBF3gGyZJFo8gIgaS9pLm9PZXQsJP/+HYFvT3XLBlIGLwYub09vTwJFB4JxcW9Pb04ZVTMPZA/xZ1JlZm+2JemdWz8whPGdLQF1oAlkbHaf7/3Rn+ABhRewCQAlUkmzaJ+wJNME8HSesD0nMCTB//8CkB49AhCOAQBwCOEvkB6QKMECsAAwHtEerjNyZH9kf+AABBBGv0axDQp9DQo/Pg=="));  ?>