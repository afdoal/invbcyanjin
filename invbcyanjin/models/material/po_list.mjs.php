<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPHNjcmlwdCB0eXBlPSJ0ZQEAeHQvamF2YQFjIj4gICAKZnUAAG5jdGlvbiBzZXRkZygpewoAAAkkKCcjZGcnKS5kYXRhZ3IAAGlkKHsgIAkKCQl0aXRsZToQBCIiLADAd2lkdGg6NzM2ANFoZQBAaWdodDo1MTUsAoJvb2xiYXIIQDoiI3QAoENhcmkDMnJvd251bQAgYmVyczoidHJ1ZQFSZnJvemUAEG5Db2x1bW5zOltbCTAJCQl7AAJmaWVsZDoncG9fbm8nLAeTJwCOUE8gTm8uJywHwzgwfQfBAskLEGWPLALpRGF0AQAC9wWgC7BdXQOBYwc/BzJzdQIZcHBsaWVyBIZTZWxsAPEEczEwB3wLoGF0dG4CxkEA0AofDNVwApdQUE4gKDBcJSkMzw+DdGVybXMFZlQA4wgTD31jdQLhcnJlbmN5AuZDARYDHxVBbm90ZQXHcLxOAOMCvwKxc3BlYwWGUwDQDc8NxAQCX3QoYG9sAvZXIhEgVG9sA08DRHRoaWNrvBgDSlQBIQNPG3AhFVdybWF4Bkcngi9SbwAwbGwgTWF4LihrZxU/BuRkbHZfgDgiCkRlbGl2ZXJ5ICJtIjAlVndoXxgGbmFtJFAoNFdhcmVob3VzASAPMjqBcBj9cmVtYXJrCiZSAPQC3xYBYXV0aAo7X3NpZyGHQQEgLiBTATATfwyUYTsCBiZwqEEA9AYlLcEJCWZvEpB0JHA6PhUodmEIGGx1ZSw4UCxpbmRleD6hFZAJdmEAAHIgZGV0ID0gJzxhIGhyZWYARD0iIyIgb25jbBnwPSJ3AuBvdwCALm9wZW4oXCc5EHBkZi5waHAAAD9ObU1lbnU9UHVyY2hhc2UBBSBPcmRlciYCEGlkPScrBoAuAMIAACsnXCcsIFwnX2JsYW5rXCcAACk7Ij48aW1nIHNyYz0iPD+AQASwIGVjaG8gJGIEYGRpciA/PgAEdGhlbWVzL2ljb25zLwcCbmeCAQNgL2E+JzsZ4QkJcmV0dXJuC5FjhjsMUUdhCQl9AcEAUT4jdXJsOg1QBi87gEEGMG1vZGVscy9tQiByaWFsLwrAwQZOsQ2icmVxPW0NwCZwaWxjS+AM8CQRACgiIwDkIikuFLAoKSsnJnR4dPBFAggA5AIFGJF2aWV3OgphYWlsAMEsTfLZcBbwAQBGGj8WsGV4GjEpVyAM0Q50JzxkaQIAdiBzdHlsXHBwYWRkaW5nOjIgQHB4EUB0YWJsZSAXMCJkZHYtJxqOICsgBFIAgCcB4C8B8j48LwQAE8AH4n2AHwhTb25FeHBhbmRSbwogIlYD0ggpYNK6sAWhKwGyYVsKMQkWcSccj3IWbxZvbGlzdOdIIz8KEyxQaXRhlWMBAXVzD+BsZVlwZWN0eAI6AZknQGYVAXlsb2FkTXNnOicogCDDMAsyawQnYXV0ZeARYgkJYR1oZ0tkQmEEDnJhbmcyN1ZNYXQuIEMkMFwZBIQJIPwvL0rlUGFydE4GIEPUAPFsLQkTRwZObYXiBr1EZXNjBmUxZ9F7YS9CBmVTYXQJp1Uch25pdAL1ScEGDHF0YpdRdWFuCaABEEPDiEwF4CxhbEewOidyaX0AJ30XJQn2cHI5+GljT7ADYICQJ1AA4wPvA+MRBDjQAKRvblIGgGVzaXplSUcuhQmHXygnZml4RGVqxHQyoCowSF6iJ0u0OwUUChZvbkweUFN1BIBjY2VzcwX/CQmN4FRpbWVvdXR5BiguxgfXB+8H72h0B+0JfSwwKQi2FpJ9f5EpSgIzUpQqDN8E9ykwS1ADsX0KmQhob3cWEDP+bnSZQkfEPSRIjwcgR6QB4gDESGUB4FuxOlAo2ABb0TcRX1UiXChPIEN1c3RvbWVyIH8gTDkST3YHdE66BhQOoArwPC+k0z4J"));  ?>