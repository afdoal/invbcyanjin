<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPD9waHANCnJlcXVpcmVfbwAAbmNlICIuLi9hYnNwYXRoLpAwAeAiOwINcGRvY29uAc8DwWZ1bmMiAHRpAecNCiQF0CA9ICRfUkVRVQSBRVNUWyIBECJdBWAkZGF0ZTEBwABiZG15czJ5bWQoAlgBwiJdKQKFMu0AAo8E0gKBMgKDBsBxAmAiU0VMRUNUIAAIS2RCYXJhbmcsIE5tAKRIc04ADG8sU2F0LA0KCSAgKABjAvRJRgAIKFNVTShxdHkpPjAsALUsMCkAACBGUk9NIG1hdF9zdG9ja2MACGFyZCBzIFdIRVJFIAfhIDwgEAInIi4M0y4iJyBBTkQgcy4DAWlMIWQI8GEuCJUBonR5cGUBYCdCJykH8lwAKwBiKAhfCF8IU2luY2RldCBpYSAAYExFRlQgSk9JTgnSAYBoZHIgaQwDYiBPTgBgCBFpbl9pZD1pYQDGC2Tg/wnAAbAIojw+ICczC0MBYw0vAeMEYwUAC9ANN7hdDEMtDE8UnxSZb3V0ZAxAbwxNAYAMQW8MQjn3b2ILgQEwB1A9bwxSANMMZwEBDH90AXEMjwyD7HAEkwUwDI8gGM8hE19pbiFIAOEhem9wbmE//21lDR8jIAGzDUoBMwgQDUEA1g1EAQQL3wvfGF8tQr9uJJ5fEOAL6QDxC/8L/yDwXwjzC/9lC/8w8gMDX+CPC/8L/wv9KSBBUyA30F9iZTsgJRIAUjpf3n8ZQw04KQz6MIAYsTIPbmMMkTIPLaMxEDrwPWMPsP8BAPAlnQKDD6Ajqj1SAxMPckJFVFdFRU5BP7m/QkUyQkAzcw82aW5JEw8fIElvEkAPGx0QDxE03z//dXQPETTfJ5ELIAOADNEPNgEBD00y71UhD0UDIQ9f//9dUQ5AAlIPXw9WA9APbyvvN79Emje/UQUowxAqATMPUP+eECEA1je1RiIB0B3/ArQOvw6/dGUeB0T/K7M5L3T/vx0sDW8Nbx2GCeReoBrgANYNbyA3NxnCArQNbw1vDWmP7xwWYmFsHB8cHjqPdNQH8yuvU28gYKAC4xngG78/wUUgD4AtAAHQG78DhA5fDl8OX3R5LCAwSYUAAWVuZCwgRk9STUFUKDAsMhB2CgJkaWZmO5IgkqEkcSAuPSAigzNzEYV0X2KIMiBhIAIyNsNhLlRwiRMge8BBACh4ACwnNScpAjNPUkRFUiBCWdIIi/YIAEMFoQ0KjgBydW49JJgALT5xACJ1ZXJ5KCRxKTsJAYFzPSQBwC0AAD5mZXRjaEFsbChQRE86OkYAEEVUQ0hfQVNTT0MplJBlY2hvAAAganNvbl9lbmNvZGUoJHJzgAABgT8+"));  ?>