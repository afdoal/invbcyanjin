<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPHNjcmlwdCB0eXBlPSJ0ZQEAeHQvamF2YQFjIj4gICAKZnUAAG5jdGlvbiBzZXRkZygpewoAAAkkKCcjZGcnKS5kYXRhZ3IAAGlkKHsgIAkKCQl0aXRsZToQBCIiLADAd2lkdGg6NzM2ANFoZQBAaWdodDo1MTUsAoJvb2xiYXIIQDoiI3QAoENhcmkDMmZpdENvbAAgdW1uczoidHJ1ZQFScm93bnUKQG1iZXIBWWMCdFtbCiAJCQl7ZmkAAWVsZDonS2RCYXJhbmcnLAizAAgnUGFydCBDb2RlJywJEzgwfeRkCREDJgIRTm8DC05vLgL/BhNObQYfdCASI05hbQYWMTAGLFNhdAX2VW5pANAIr40MC8FjdXMBwAuEQwDQb21lcgiFBW5LZYG3AtdSZW1hcmsCtQ4tYRvyCDZBAPQIVRDiABAJZm9ybWF0dGVyOh8FKHZhbBAwdWUsF/AsaW5kZXgfkRagCXZhcgAAIGRldCA9ICc8YSBocmVmPQACIiMiIG9uY2xpY2s9IncC4G8AAHcub3BlbihcJ2NvbnN1bXCAISQRX3BkZi5waHA/GlUwPScrBfBAAC4BBSsnXCcsIFwnX2JsYW5rAABcJyk7Ij48aW1nIHNyYz0iIAA8PwPAIGVjaG8gJGJhc2VkaQAKciA/PnRoZW1lcy9pBoEvBhJuQYFnA2AvYT4nOyhQCxByZXR1cm4LMVGQOwDgCSfxCQl9AcEAUV1dEAF1cmw61HYM8AYvOwYwbSPgbHMvBiEMpADJXzABDXJyAAxlcT1tZW51JnBpbGMtMA3gJCgiASIjAOQiKS4VECgpKycmdHh0AgjgiwDkAgUI8XZpZXc6CyFhaWwAwSwuUhdQsuABAEYanxcQZXgakSk4cA2RDzQnPGRpdgQAIHN0eWw9wHBhZGRpbmc6MnBAAHgSAHRhYmxlIGlkPSJkZHYtDUcnICsgBFIAgCcB4C8B8j48LwQAFIAH4kAPfQhTb25FeHBhbmRSbwogIrYD0ggp3V5CIgWhKwGyQqsKMQkXMScdT3IXLyPBFy8g0D+C5xchbGlzdCYkJTAXQCUpC0MJCUWYRYEBdUAecxEQbGVTZWxlY3Q6AZkEQEdFAXlsALBvYWRNc2c6JypwIAxiTYQnYXV0zTFEQBKSCQlJ3Un/MjjmTWFJ/wR0CS8vTXX7C0pfR0BKWwkDTXZOSoQGp0Rlc2NNdjFKUV3hxEAxMgZ1cXR5CZZRdHkC6SxhbGlnbgnAOidyaVyAJ30G4zPQCsRvblJlc2k0A3plQ+coxQli7ygnZml4RGV0LOAkcFYISGGyJ0ZUOwUUJvQJCW9uTBdgU3VjCQBjZXNzBf8JCWlwVGltZW91dCjyDCkGB9cH7wfvaHQH7Ql9LDApCLYO0n0p/wRFAi2Sb7oM3wT3IkBGUAOyCn0KPC91gz4J"));  ?>