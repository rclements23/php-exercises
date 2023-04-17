<?php

        
     function isPowerOfTwo($n)
        {
            //is integer positive
    if($n > 0){
            
            //is integer power of two
      if(($n & ($n - 1)) == 0)
        {
    		return "$n is power of 2"."\n";
    	
       }
      else
       {
    		return "$n is not power of 2";
       }
    }
        else
    {
		return "$n is not a positive integer";
    }
        }
            
                
   

print_r(isPowerOfTwo(4));
print_r(isPowerOfTwo(2));
print_r(isPowerOfTwo(6));
print_r("\n");
print_r(isPowerOfTwo(23));
print_r("\n");
print_r(isPowerOfTwo(256));
print_r("\n");
print_r(isPowerOfTwo(-3));
?>