<?php

function checkTuoi($tuoi){
	if($tuoi <=0){
		throw new Exception("Lỗi tuổi không hợp lệ", 1);
		//echo "Lỗi tuổi không hợp lệ";
		// return;
	}

	echo "Tuổi là số dương ";

	 
	return true;
	 
}
 

try{
	// các công việc chính
	$t = -12;
	if(checkTuoi($t))
	 echo "Tuổi hợp lệ";

}catch(Exception $e){

	echo "Lỗi: ". $e->getMessage();

}