<?php
echo "파일 정보 확인<br/>";
$dir = '../OCR/resource/OriImgPath/';
$uploadfile= $dir.basename($_FILES['uploaded_file']['name']);
echo "tmp :".$_FILES['uploaded_file']['tmp_name']."<br>";
if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$uploadfile)){
	echo"파일이 업로드 되었습니다.<br />";
    echo "<img src ={$_FILES['uploaded_file']['name']}> <p>";
    echo "1. file name : {$_FILES['uploaded_file']['name']}<br />";
    echo "2. file type : {$_FILES['uploaded_file']['type']}<br />";
    echo "3. file size : {$_FILES['uploaded_file']['size']} byte <br />";
    echo "4. temporary file size : {$_FILES['uploaded_file']['size']}<br />";
} else{
	echo "오류 발생 : "; //오류 타입에 따라 echo '오류종류"}';
	switch ($_FILES['uploaded_file']['error']){ 
		case 0: echo '왜 발생했는지 모르겠다~'; break;
		case 1: echo 'upload_max_filesize 초과';break; 
		case 2: echo 'max_file_size 초과';break; 
		case 3: echo '파일이 부분만 업로드됐습니다.';break; 
		case 4: echo '파일을 선택해 주세요.';break; 
		case 6: echo '임시 폴더가 존재하지 않습니다.';break; 
		case 7: echo '임시 폴더에 파일을 쓸 수 없습니다. 퍼미션을 살펴 보세요.';break; 
		case 8: echo '확장에 의해 파일 업로드가 중지되었습니다.';break; 
	}
}
?>
