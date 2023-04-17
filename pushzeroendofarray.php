<?php
function pushZero($arr)
{
   $count = 0;

   $n = sizeof($arr);
    
    for ($i = 0; $i < $n; $i++)
    {
        if ($arr[$i] != 0)
          {
            $arr[$count++] = $arr[$i]; 
          }
     }
 
    // push non zero to front 
    
    while ($count < $n)
    {
        $arr[$count++] = 0;
    }

    return $arr;
}
$list1 = array(0,2,3,4,6,7,10);
$list2 = array(30,11,0,8,55,12);
print_r(pushZero($list1));
print_r(pushZero($list2));
?>