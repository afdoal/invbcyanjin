<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>