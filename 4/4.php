<?php
$n = 100;
for ($i=0;$i<=$n;$i++){
print_r($arr[$i] = rand(-51,51)." ");
}
$count=0;
for($i=0;$i<$n;$i++)
{	
	if ($arr[$i] == $arr[$i+1]){
    $count++;
	}
}
print_r('<br />');
print_r(" Количество последовательных пар одинаковых элементов - ".$count);
?>	
			
</body>
</html>
