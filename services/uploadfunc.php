<meta http-equiv="content-type" content="text/html" charset="UTF-8">

<?php

			//If triger the uplaad
			if($_FILES["fileToUpload"]["name"] != null){
				$time = time();
				$target_dir = "../upload/img/";
				$fake_dir = "./upload/img/";
				$fileName = $time.'_'.basename($_FILES["fileToUpload"]["name"]);
        echo $fileName;
				$upAddress = $target_dir.$fileName;
				$uploadOk = 1;
				$imageFileType = pathinfo($upAddress,PATHINFO_EXTENSION);
				//File type checker
							//Check image file type
							if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
							    echo "<script>alert('Only support JPG/JPEG/PNG/GIF');history.go(-1);</script>";
									exit();
							    $uploadOk = 0;
							}
							// Check image is image
							$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
							   	if($check !== false) {
							        //echo "File is an image - " . $check["mime"] . ".";
							        $uploadOk = 1;
							    } else {
							        echo "<script>alert('This is not a image');history.go(-1);</script>";
							        $uploadOk = 0;
							}
							// Check file size
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
                  //For Debug only
					        //echo "The file ". basename( $_FILES["fileToUpload".$i.""]["name"]). " has been uploaded.";
									//var tf = Output URL. Multiple File Use ';' for Separate
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
