<meta http-equiv="content-type" content="text/html" charset="UTF-8">

<?php

			//If triger the uplaad 如果触发上传情况
			if($_FILES["fileToUpload"]["name"] != null){
				$time = time();
				$target_dir = "../upload/img/";
				$fake_dir = "./upload/img/";
				$fileName = $time.'_'.basename($_FILES["fileToUpload"]["name"]);
        echo $fileName;
				$upAddress = $target_dir.$fileName;
				$uploadOk = 1;
				$imageFileType = pathinfo($upAddress,PATHINFO_EXTENSION);
				//File checker 文件类型检查器
							//Check image file type 检查文件格式
							if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
							    echo "<script>alert('Only support JPG/JPEG/PNG/GIF');history.go(-1);</script>";
									exit();
							    $uploadOk = 0;
							}
							// Check image is image 检查图片是图片
							$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
							   	if($check !== false) {
							        //echo "File is an image - " . $check["mime"] . ".";
							        $uploadOk = 1;
							    } else {
							        echo "<script>alert('This is not a image');history.go(-1);</script>";
							        $uploadOk = 0;
							}
							// Check file size 检查文件大小
							if ($_FILES["fileToUpload"]["size"] > 4000000) {
							    echo "<script>alert('Your image is oversize (max 4M)');history.go(-1);</script>";
							    $uploadOk = 0;
							}
				// Check if file already exists
				/*if (file_exists($upAddress)) {
				    echo "Sorry, file already exists.";
				    $uploadOk = 0;
				}*/
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    echo "<script>alert('Somgthing wrong');history.go(-1);</script>";
					exit();
				}else{
					    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $upAddress)){
                  //For Debug only 仅用于打印调试
					        //echo "The file ". basename( $_FILES["fileToUpload".$i.""]["name"]). " has been uploaded.";
									//var tf = Output URL. Multiple File Use ';' for Separate 输出地址，一个则为一个地址，多个为多个地址用分号隔开
									if(isset($tf)){
										$tf = $tf.";".$fake_dir.$fileName;
									}else{
										$tf = $fake_dir.$fileName;
									}
					    }else{
					        echo "<script>alert('Upload Error...');history.go(-1);</script>";
							exit();
					    }
				}
			}

?>
