<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPHNjcmlwdCB0eXBlPSJ0ZQEAeHQvamF2YQFjIj4gICAKZnUAAG5jdGlvbiBzZXRkZygpewoAAAkkKCcjZGcnKS5kYXRhZ3IAAGlkKHsgIAkKCQl0aXRsZToQBCIiLADAd2lkdGg6NzM2ANFoZQBAaWdodDo1MTUsAoJvb2xiYXIMADoiI3QAowMiZml0Q29sdW1ucwIAOiJ0cnVlAVJyb3dudW1iZXKkAAFZYwJ0W1sKEAkJCXtmaWVsZDoAASdLZFBlbGFidWhhbjAnLAjjwAsBXAlzODAsaGlkZGVuOgaRfQoxBF8hM2FuBEdvZGUgBcYnLARlA6tObQI4B+QISE5hbWEDrzMwMH0SQF1dB6F1cmwAADogJzw/cGhwIGVjaG8gJGIAEGFzZWRpcjsgPz5tB6Bscy9w1IMNhQCnXxehLgNQJywQYnNhdmVVBLIBFDAUdXAaAAE7ZGVzdHJveQJ0CRjAfSkAUDsKfQoKdmFyIAiAOx73dGFtYigAYWgfB2wfEmlhbG9nKCdvcGVu6FAgAQD0IbBUH7EnLCdUA3IgDOlObU1lLIBudQzAJwbAI9JmbQPQZm9ybSgnYwzxbGVhcgGSB/AgPRCPEI8eAhCIdHVoEHEA3z9ha3NpPXQnDQIrZnUMVQ4hJNAGMCv/AAgnZ2V0U2VsZWN0ZWQIwmlmIFu+KALQKS7QCxJkD+8v4A/vVQbgD88PxgTCD9hsBfRvYWQnLAaROyDgEB8gnw93AKdfEBp1JotgMGk9JysF8C4BOQawfR8xEjZzaW1wYWAbbh6mCghzdWJtaXQnLBBxCeA6IjErIRMAb25TAaI6IARVA+IJCXJldHVybgBDICQodGhpcykuHjN2YWxpKKEVokBACTMyc3VjY2VzcwQIcmVzdWx0ujEXEgkasgECGuBlA/AoJygMgAEiKycpBINvBAkaQgFCLgT0A+MWUhsbY2xvc2UDcAkJEDcvLyAA0iB0aGUgZBwSF6AJA0MuIk01COAncmVsGfEpOwkDUADTA2J1c2VyIKQADQBhA5MubQyQYWdlci5zaG93KOAwErFJID/jICdJbmZvJxMxAUBtc2c6XgIgDoMuAMAD8jfxAbB9IGVsc2UgA9Mk4C8FPwIwVdQgJ0Vycm9yBU90BU4GEEZQBiHAzz4QGpUgaGFwdXMa8hZyb3cWQDEvMS8xKYLAChdjb25maTyBQwCTQCBBcGFrYWgACCBhbmRhIHlha2luIAEAbiBtGAllbmcHwhPCIGluaT8nLAllKHIbw8A/HUIAswkkLnBvc3QoUZ9Rn18RMQ8rgEExBX86J2gnLDAZOjEtfQiIJRIIJCifKJ8ZoSi/af9zBCUlnygln2FkJZ8FgCCPAVAAMSXfAWElMCX+N+YJCR/xAeEJJjovEBxHK4MuYQChIGUmARrwc3z/cy1gJEAD4gc1J9oJCQdPAuEHRwPyAPQowAjjR+sHBnRvcGRmKQJlUUZgKCI8Pz1PpXAQYQ+xc3RlcjcBHigDMF8yZbM9AxEAsz8+ImZQkAAvADwvjFM+CQ=="));  ?>