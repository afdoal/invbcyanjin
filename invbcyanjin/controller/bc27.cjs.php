<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>