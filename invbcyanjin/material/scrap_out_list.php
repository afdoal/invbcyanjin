<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPD9waHANCnJlcXVpcmVfbwAAbmNlICIuLi9tb2RlbHMvYQEgYnNwYXRoLgJQIjsCfXNlc3NpGBBvbnMB7wRRcGRvY29uAcUNCiROAABtTWVudT0kX1JFUVVFU1RbSAMiASMiXQWgJFRwQmFyYW5nAgkBRYAiAiI/Pg0KPGh0bWwAgmVhZACBbAAAaW5rIHJlbD0ic3R5bGVzaAAAZWV0IiB0eXBlPSJ0ZXh0LwAQY3NzIiBocmVmPSIOsiBlY2gAAG8gJGJhc2VkaXI7ID8+dGgAP2VtZXMvbWFpbi4C4QV/BX8FfwV/BXMAAmRlZmF1bHQvZWFzeXVpBh8i++ALjwuPF+ALjwuEaRZRC4oP7w/vD+1yZWRtbwAAbmQvanF1ZXJ5LXVpLTEuOABrLjQuY3VzdG9tC3IWc1MWeC8SsBlAAhBzY3JpcHQXWWphdmEBYyIgc3JGSGMXv2RpchegJkRqcwd0Lm0YMGpzIhv9PjwvA+MGADwAowXvB0EF7x2VBe8NXwbvCgbvOBkvagzPGP8G/3kuZ3JpZA0vEw94dAZP4QAqvyqyExdkYXRhBhEtZGV0YWlsdg/waWV3LhOvEkETrwFhE68TpTExBodnbG9iAEBhbC5mb3JtYXQGImRpc2FibAFAZVNlbGVjdD/gKD5wdW1lbnQuAaxib2R5KTsgDiAb+D8S0Q1GDB1AYXAABl9vdXRfbGlzdC5tanNCdUiLbV8AcwIkYwInQHIzUg2pMBQua29sb20yIAAIewlmbG9hdDpsZWZ0RdAJd2kAA2R0aDoxNzBweDsJDQp9CkIsoZpgJiEvaETUDBEgUCBvbjgxDUB1PSJyZQAEdHVybiBmYWxzZTsiIAURbWEABnJnaW49IjIwIiByaWdJMAEYdCA5b3ACBTE1IiBib3Q0AAElAyA+IAfAAA1kaXYgaWQ9InciPiAAEgFAdBVhkY8BYmRnGeBpbmcWVUygcnVlMWECQgM0A4C+AQNgLwSwARUA8ADgBDJ0b29sQ2FyaQYBICMNCgKwIFNlYXJjaADDIDxzG+ICsgh4cGlsYwKhIG5hbVNQAPURkANxCTxvQcBwHmEgdmFsdQHwIGAbcW5vIj5TYwAHcmFwIE91dCBOby48LwKDA3QDsfhaA68DoSuQDLADx0RhdGUD3yAD3FwAXwdBUhPGZWYuBv8gIEMQDSIV4QfCaW5wCZBQpyKOVA7CdHh0DskA9iTyPSIiZDAiYCIMlDxhoQBj1CMEI2R0bEMVcCBjbGFzcz0ipZldYy1oYWJ1HqBuAmBZAENsAcBZkS1zF3K2CBvBYQUvBG9rBG8E8C1wZGYiKZBDbGkgAGNrbqBob3dQcmludCgpOyI+x+QAoiPBPC9hIKIgcCFiAIEtIRFBPC8qYGw+"));  ?>