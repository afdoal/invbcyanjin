<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>