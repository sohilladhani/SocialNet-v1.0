<?php 
session_start();
if(!isset($_SESSION['email']))
{
	header('Location: login.php');
}
else
{	include_once ('file_constants.php');
	$emailses = $_SESSION['email'];
	$query = "SELECT * FROM members WHERE Email = '$emailses'";
	$query = mysql_query($query);
	$data = mysql_fetch_array($query);
	$id = $data['ID'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$about_me = $_POST['about_me'];
	
	
	if(isset($_POST['submit']))
	{
		if($name != "")
		{
			$updatequery = "UPDATE members SET Name = '$name'  , About_Me = '$about_me' WHERE ID = '$id'";
			mysql_query($updatequery);
		}
		else
		{
			$updatequery = "UPDATE members SET About_Me = '$about_me' WHERE ID = '$id'";
			mysql_query($updatequery);
		}


	}
	else
	{
		echo "ERROR";
	}
		
	if(isset($_FILES['image']['tmp_name']))
	{
		$image_size = getimagesize($_FILES['image']['tmp_name']);


		if($image_size['mime'] === 'image/jpeg')
		{
			$image = imagecreatefromjpeg($_FILES['image']['tmp_name']);
		}

		else if($image_size['mime'] === 'image/png')
		{
			$image = imagecreatefrompng($_FILES['image']['tmp_name']);
		}
		else if($image_size['mime'] === 'image/gif')
		{
			$image = imagecreatefromgif($_FILES['image']['tmp_name']);
		}
		else
		{
			$image = false;
		}

		if($image!==false)
		{
			$thumb_width = 120;
			//$thumb_height = (int)(($image_size[1] / $image_size[0]) * $thumb_width);
			$thumb_height = 120;
			//to maintain the aspect ratio the original image: original_height / original_width * desired_width. 

			if($image_size[0] <= $thumb_width)
			{
				$thumb = $image;
			}

			else
			{
				$new_size[0] = $thumb_width;
				$new_size[1] = $thumb_height;

				$thumb = imagecreatetruecolor($new_size[0], $new_size[1]);
			//syntax : imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h);
				imagecopyresampled($thumb, $image, 0, 0, 0, 0, $new_size[0], $new_size[1], $image_size[0], $image_size[1]);

		}
		$img_dir = "members_image" . "\\" . $id . "\\" . $id . ".jpg";
		echo $img_dir;
		$img_dir= addslashes($img_dir);
		imagejpeg($thumb,$img_dir);
		$updatequery = "UPDATE members SET Image = '$img_dir' WHERE ID = '$id'";
		mysql_query($updatequery);
		
		

		
	}

	
}

include('conclose.php');

header('Location: profile.php');


}
?>