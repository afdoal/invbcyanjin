<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>