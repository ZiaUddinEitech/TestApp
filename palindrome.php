<?php
class Palindrome1
{
	 //date_default_timezone_set('US/Eastern');
    public static function isPalindrome1($word)
    {
		$count=0;
		$k=strlen($word)-1;
		for($i=0;$i<strlen($word);$i++){
		
			if(strtolower($word[$i])==strtolower($word[$k])){
			$k--;
			$count++;	
			}
			else
				continue;
			
			
		}
		
		if($count==strlen($word)){
			echo "Palindrome";
		}else
			echo "Not Palindrome";
	   
    }
	public static function GetVowels($text){
		$count=0;
		for($i=0;$i<strlen($text);$i++){
			if(strstr("aeiouAEIOU",$text[$i]))
				$count++;
		}
		
		return $count; 
		
	}
	
}
	$max=0;
	for($i=201;$i<=210;$i++){
		$n=$i;
		$count=1;
		while($n>0){
			if($n==1)
				break;
			else if($n%2==0)
				$n=$n/2;
			else
				$n=3*$n+1;				
			$count++;
		}
		if($max<$count)
			$max=$count;
		 
	}
	echo $max. "<br>";
echo  date("Y-m-d", strtotime('-2 day'))."<br>";




?>