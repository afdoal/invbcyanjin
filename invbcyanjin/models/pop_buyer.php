<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPD9waHANCnJlcXVpcmVfbwAAbmNlICIuLi9tb2RlbHMvYQEgYnNwYXRoLgJQIjsCfXBkb2NvYEBuAc8EMWZ1bmN0aQHnPz4NCjwhAABET0NUWVBFIGh0bWwgUFVCAABMSUMgIi0vL1czQy8vRFREAAAgWEhUTUwgMS4wIFRyYW5zQABpBDFhbC8vRU4iICJodHRwOgAALy93d3cudzMub3JnL1RSL1kGeATBMQPRALQtdAOoLmR0ZCIHsQJhIAIMeG1sbnM9BI8vMTk5OQPzAtNlYUIgZANRbWV0YQrAdHAtEfF2PSJDbwAMbnRlbnQtVHlwZSIgD9AA4T0iBAB0ZXh0LwYhOyBjaGFyc2V0PQAEaXNvLTg4NTktMSIgLwTBbGkAAG5rIHJlbD0ic3R5bGVzaGUAQGV0IiBocmVmPRcBdGhlbWVzEAAvaW4PMGFsdGFibGUuY3NzIjgBIHQGsAYkAQJtZWRpYT0iYWxsCrIAA3RpdGxlPkxvb2t1cDwvAOMWoCEAL2gMNGJvZHkH8WRpdiBpZD0iABhsaXN0aW5nIj48LwEwAaAJPGgAQzI+QnV5ZXI8LwCgDQoJPAfiAuJEelQIgUJyZw7AbGFzE7AKBARhB/EJAtByYVA+A0AAkWg+SUQIMGgBACAAGDx0aD4KGktvZGUBtAkCs05hbWEBJALIIALRUwDFdGF0dXMgS0ICDwICQXJlA78gAbIsxCZuKwA7A4QGkC90CeIuUiAJCQqRJHEAACA9ICJTRUxFQ1QgKiBGUk8AAE0gdGJjdXN0b21lciBPUkQBMEVSIEJZIEMBJF9DC8AvwQkJJHIoAGVjA9AkL4B2Yi0+cXVlcnkoJDYAcSkxkAHRcwHBAjAtPmZldGNoQWwAAGwoUERPOjpGRVRDSF9BU1MJAE9DKTsIU2ZvDEBjaCAoJHJzIAF8YXMgJHIpewnQPxOwC2ALUAqyFdBkPoQAC8NlY2hvAmBbJ051bWJlciddL94gPxwgdCphE/sDHgyKA48D4zwEoAacA4YaoGXn/AOPA48KFEtCAt8C3wLUBlYdQQOHAAADCRHgEaFkIMAiM+IxEy1hbGlnbjpjOSBlcjstMGkAAW5wdXQgYm9yZGVyPScwJzPTAAQnaW1hZ2UnIHNyYz0iDmliYVAEczTQchSwaW1nL2V4cGFuA5AuZwAAaWYiIG9uQ2xpY2s9ImlucwAKZXJ0X3R1anVhbignBAlyGPonQwMsAdl0cmltHeACIFBXUCddKQZQAh/wIAISEEYWkwKvbXlzcWxfIxBsX2VzYwSAYXBlX3MF4G5nA+JBZGRyZXNzyfMGLyLzVFAY8ycpSHExkCMhFJAxmn0/J4EB0M4APuEAsDwvQ2VNUgEg"));  ?>