<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>