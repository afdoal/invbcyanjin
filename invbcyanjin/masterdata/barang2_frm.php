<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>