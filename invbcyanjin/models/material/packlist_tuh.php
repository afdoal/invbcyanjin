<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>