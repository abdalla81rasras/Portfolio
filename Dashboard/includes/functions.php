<?php 
include "connection.php";
include "incFun.php";

//header
if(isset($_POST['save_header'])){
	
   if(empty($_FILES['img_tab']['name'])){
      $errors['img_tab']="No Selected Image !";
   }else{
      $img_tab = $_FILES['img_tab']['name'];
      $img_tabTamp = $_FILES["img_tab"]["tmp_name"];
      $folderimg_tab = "Upload/" . $img_tab;
      move_uploaded_file($img_tabTamp , $folderimg_tab);
   }

   if(empty($_POST['name_tab'])){
      $errors['name_tab']="No Name !";
   }else{
      $name_tab = $_POST['name_tab'];
   }

   if(empty($_FILES['img_logo']['name'])){
      $errors['img_logo']="No Selected Image !";
   }else{
      $img_logo =$_FILES['img_logo']['name'];
      $img_logoTamp=$_FILES["img_logo"]["tmp_name"];
      $folderimg_logo="Upload/" . $img_logo;
      move_uploaded_file($img_logoTamp , $folderimg_logo);
   }

   if(!array_filter($errors)){
      $img_tab = mysqli_real_escape_string($conn , $_FILES['img_tab']['name']);
      $name_tab = mysqli_real_escape_string($conn , $_POST['name_tab']);
      $img_logo = mysqli_real_escape_string($conn , $_FILES['img_logo']['name']);

      $sql="UPDATE `header` SET `name_tab`='$name_tab' ,`img_tab`='$img_tab' , `img_logo`='$img_logo'";

      if(mysqli_query($conn , $sql)){
         header("Location:View_header.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_header'])){
   $id_header=$_GET['edit_header'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `header` WHERE `id_header`='$id_header'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $name_tab = $row['name_tab'];
      $img_tab = $row['img_tab'];
      $img_logo = $row['img_logo'];
   }

   if(empty($_FILES['edit_img_tab']['name'])){
      $errors['edit_img_tab']="Be selected Old image when updating data !!";
   }

   if(empty($_FILES['img_logo']['name'])){
      $errors['edit_img_logo']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_header'])){
   $id_header=$_POST['id_header'];

   $update=true;

   if(empty($_FILES['img_tab']['name'])){
      $errors['img_tab']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_tab = $_FILES['img_tab']['name'];
      $img_tabTamp = $_FILES["img_tab"]["tmp_name"];
      $folderimg_tab = "Upload/" . $img_tab;
      move_uploaded_file($img_tabTamp , $folderimg_tab);
   }

   if(empty($_POST['name_tab'])){
      $errors['name_tab']="No Update Name !";
   }else{
      $name_tab = $_POST['name_tab'];
   }

   if(empty($_FILES['img_logo']['name'])){
      $errors['img_logo']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_logo =$_FILES['img_logo']['name'];
      $img_logoTamp=$_FILES["img_logo"]["tmp_name"];
      $folderimg_logo="Upload/" . $img_logo;
      move_uploaded_file($img_logoTamp , $folderimg_logo);
   }

   if(!array_filter($errors)){
      $img_tab = mysqli_real_escape_string($conn , $_FILES['img_tab']['name']);
      $name_tab = mysqli_real_escape_string($conn , $_POST['name_tab']);
      $img_logo = mysqli_real_escape_string($conn , $_FILES['img_logo']['name']);

      $sql="UPDATE `header` SET `name_tab`='$name_tab' ,`img_tab`='$img_tab' , `img_logo`='$img_logo' WHERE `id_header`= '$id_header'";

      if(mysqli_query($conn , $sql)){
         header("Location:View_header.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

//footer
if(isset($_POST['save_footer'])){
	
   if(empty($_FILES['img_footer']['name'])){
      $errors['img_footer']="No Selected Image !";
   }else{
      $img_footer =$_FILES['img_footer']['name'];
      $img_footerTamp=$_FILES["img_footer"]["tmp_name"];
      $folderimg_footer="Upload/" . $img_footer;
      move_uploaded_file($img_footerTamp , $folderimg_footer);
   }

   if(!array_filter($errors)){
      $img_footer= mysqli_real_escape_string($conn , $_FILES['img_footer']['name']);

      $sql="UPDATE `footer` SET `img_footer`='$img_footer'";

      if(mysqli_query($conn , $sql)){
         header("Location:View_footer.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_footer'])){
   $id_footer=$_GET['edit_footer'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `footer` WHERE `id_footer`='$id_footer'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_footer = $row['img_footer'];
   }

   if(empty($_FILES['img_footer']['name'])){
      $errors['edit_img_footer']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_footer'])){
   $id_footer=$_POST['id_footer'];

   $update=true;

   if(empty($_FILES['img_footer']['name'])){
      $errors['img_footer']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_footer = $_FILES['img_footer']['name'];
      $img_footerTamp = $_FILES["img_footer"]["tmp_name"];
      $folderimg_footer = "Upload/" . $img_footer;
      move_uploaded_file($img_footerTamp , $folderimg_footer);
   }

   if(!array_filter($errors)){
      $img_footer= mysqli_real_escape_string($conn , $_FILES['img_footer']['name']);

      $sql="UPDATE `footer` SET `img_footer`='$img_footer' WHERE `id_footer`= '$id_footer'";

      if(mysqli_query($conn , $sql)){
         header("Location:View_footer.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//home
if(isset($_POST['save_home'])){
	
   if(empty($_POST['name_home'])){
       $errors['name_home']="No Name !";
    }else{
       $name_home = $_POST['name_home'];
   }

   if(empty($_POST['department'])){
       $errors['department']="No Department !";
    }else{
       $department = $_POST['department'];
   }

    if(empty($phone_home = $_POST['phone_home'])){
        $errors['phone_home']="No Phone Number !";
     }else{
        $phone_home = $_POST['phone_home'];
        if(!preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $phone_home)){
            $errors['phone_home'] = 'Phone Number valid !';
        }
    }

    if(empty($email_home = $_POST['email_home'])){
        $errors['email_home']="No Email !";
     }else{
        $email_home = $_POST['email_home'];
        if(!filter_var($email_home, FILTER_VALIDATE_EMAIL)){
            $errors['email_home'] = 'Email valid !';
        }    
    }

   if(empty($_POST['zoom'])){
       $errors['zoom']="No Link !";
    }else{
       $zoom = $_POST['zoom'];
   }

   if(empty($_POST['messenger'])){
       $errors['messenger']="No Link !";
    }else{
       $messenger = $_POST['messenger'];
   }

    if(empty($_FILES['cv_home']['name'])){
        $errors['cv_home']="No Selected File !";
     }else{
        $cv_home = $_FILES['cv_home']['name'];
        $cv_homeTamp = $_FILES["cv_home"]["tmp_name"];
        $foldercv_home = "Upload/" . $cv_home;
        move_uploaded_file($cv_homeTamp , $foldercv_home);
    }

   if(!array_filter($errors)){
       $name_home = mysqli_real_escape_string($conn , $_POST['name_home']);
       $department = mysqli_real_escape_string($conn , $_POST['department']);
       $phone_home = mysqli_real_escape_string($conn , $_POST['phone_home']);
       $email_home = mysqli_real_escape_string($conn , $_POST['email_home']);
       $zoom = mysqli_real_escape_string($conn , $_POST['zoom']);
       $messenger = mysqli_real_escape_string($conn , $_POST['messenger']);
       $cv_home= mysqli_real_escape_string($conn , $_FILES['cv_home']['name']);

       $sql="UPDATE `home` SET `name_home`='$name_home' ,`department`='$department' , `phone_home`='$phone_home' ,`email_home`='$email_home' , `zoom`='$zoom' ,`messenger`='$messenger' , `cv_home`='$cv_home'";

       if(mysqli_query($conn , $sql)){
            header("Location:View_home.php");
       }else{
            echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['edit_home'])){
   $id_home=$_GET['edit_home'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `home` WHERE `id_home`='$id_home'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $name_home = $row['name_home'];
      $department = $row['department'];
      $phone_home = $row['phone_home'];
      $email_home = $row['email_home'];
      $zoom = $row['zoom'];
      $messenger = $row['messenger'];
      $cv_home = $row['cv_home'];
   }

   if(empty($_FILES['cv_home']['name'])){
      $errors['edit_cv_home']="Be selected Old file when updating data !!";
   }
}

if(isset($_POST['update_home'])){
   $id_home=$_POST['id_home'];

   $update=true;

   if(empty($_POST['name_home'])){
      $errors['name_home']="No Update Name !";
   }else{
      $name_home = $_POST['name_home'];
   }

   if(empty($_POST['department'])){
      $errors['department']="No Update Department !";
   }else{
      $department = $_POST['department'];
   }

   if(empty($_POST['phone_home'])){
      $errors['phone_home']="No Update Phone Number !";
   }else{
      $phone_home = $_POST['phone_home'];
      if(!preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $phone_home)){
            $errors['phone_home'] = 'Phone Number valid !';
      }
   }

   if(empty($_POST['email_home'])){
      $errors['email_home']="No Update Email !";
   }else{
      $email_home = $_POST['email_home'];
      if(!filter_var($email_home, FILTER_VALIDATE_EMAIL)){
            $errors['email_home'] = 'Email valid !';
      }    
   }

   if(empty($_POST['zoom'])){
      $errors['zoom']="No Update Link !";
   }else{
      $zoom = $_POST['zoom'];
   }

   if(empty($_POST['messenger'])){
      $errors['messenger']="No Update Link !";
   }else{
      $messenger = $_POST['messenger'];
   }

   if(empty($_FILES['cv_home']['name'])){
      $errors['cv_home']="No update file , or the original file must be selected when updating data !!";
   }else{
      $cv_home =$_FILES['cv_home']['name'];
      $cv_homeTamp=$_FILES["cv_home"]["tmp_name"];
      $foldercv_home="Upload/" . $cv_home;
      move_uploaded_file($cv_homeTamp , $foldercv_home);
   }

   if(!array_filter($errors)){
      $name_home = mysqli_real_escape_string($conn , $_POST['name_home']);
      $department = mysqli_real_escape_string($conn , $_POST['department']);
      $phone_home = mysqli_real_escape_string($conn , $_POST['phone_home']);
      $email_home = mysqli_real_escape_string($conn , $_POST['email_home']);
      $zoom = mysqli_real_escape_string($conn , $_POST['zoom']);
      $messenger = mysqli_real_escape_string($conn , $_POST['messenger']);
      $cv_home= mysqli_real_escape_string($conn , $_FILES['cv_home']['name']);

      $sql="UPDATE `home` SET `name_home`='$name_home' ,`department`='$department' , `phone_home`='$phone_home' ,`email_home`='$email_home' , `zoom`='$zoom' ,`messenger`='$messenger' , `cv_home`='$cv_home' WHERE `id_home`= '$id_home'";

      if(mysqli_query($conn , $sql)){
            header("Location:View_home.php");
      }else{
            echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//about
if(isset($_POST['save_about'])){

   if(empty($_POST['description_about'])){
      $errors['description_about']="No Description !";
   }else{
      $description_about = $_POST['description_about'];
   }

   if(empty($_FILES['cv_about']['name'])){
      $errors['cv_about']="No Selected File !";
   }else{
      $cv_about = $_FILES['cv_about']['name'];
      $cv_aboutTamp = $_FILES["cv_about"]["tmp_name"];
      $foldercv_about = "Upload/" . $cv_about;
      move_uploaded_file($cv_aboutTamp , $foldercv_about);
   }

   if(!array_filter($errors)){
      $description_about = mysqli_real_escape_string($conn , $_POST['description_about']);
      $cv_about = mysqli_real_escape_string($conn , $_FILES['cv_about']['name']);

      $sql="UPDATE `about` SET `description_about`='$description_about' , `cv_about`='$cv_about'";

      if(mysqli_query($conn , $sql)){
            header("Location:View_about.php");
      }else{
            echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_about'])){
   $id_about=$_GET['edit_about'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `about` WHERE `id_about`='$id_about'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $description_about = $row['description_about'];
      $cv_about = $row['cv_about'];
   }

   if(empty($_FILES['cv_about']['name'])){
      $errors['edit_cv_about']="Be selected Old file when updating data !!";
   }
}
 
if(isset($_POST['update_about'])){
   $id_about = $_POST['id_about'];

   $update=true;

   if(empty($_POST['description_about'])){
      $errors['description_about']="No Update Description !";
   }else{
      $description_about = $_POST['description_about'];
   }

   if(empty($_FILES['cv_about']['name'])){
      $errors['cv_about']="No update file , or the original file must be selected when updating data !!";
   }else{
      $cv_about =$_FILES['cv_about']['name'];
      $cv_aboutTamp=$_FILES["cv_about"]["tmp_name"];
      $foldercv_about="Upload/" . $cv_about;
      move_uploaded_file($cv_aboutTamp , $foldercv_about);
   }

   if(!array_filter($errors)){
      $description_about = mysqli_real_escape_string($conn , $_POST['description_about']);
      $cv_about = mysqli_real_escape_string($conn , $_FILES['cv_about']['name']);

      $sql="UPDATE `about` SET `description_about`='$description_about' , `cv_about`='$cv_about'  WHERE `id_about`= '$id_about'";

      if(mysqli_query($conn , $sql)){
         header("Location:View_about.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//under about
if(isset($_POST['save_underabout'])){

   if(empty($_POST['experience'])){
      $errors['experience']="No Experience !";
   }else{
      $experience = $_POST['experience'];
   }

   if(empty($_POST['P_E'])){
      $errors['P_E']="No Phone Number !";
   }else{
      $P_E = $_POST['P_E'];
      if(!preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $P_E)){
      $errors['P_E'] = 'No valid Phone Number !';
      }
   }

   if(!array_filter($errors)){
      $experience = mysqli_real_escape_string($conn , $_POST['experience']);
      $P_E = mysqli_real_escape_string($conn , $_POST['P_E']);

      $sql="UPDATE `under_about` SET `experience`='$experience' , `P_E`='$P_E'";

      if(mysqli_query($conn , $sql)){
            header("Location:View_underabout.php");
      }else{
            echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_underabout'])){
   $id_underabout=$_GET['edit_underabout'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `under_about` WHERE `id_underabout`='$id_underabout'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $experience = $row['experience'];
      $P_E = $row['P_E'];
   }
}
 
if(isset($_POST['update_underabout'])){
   $id_underabout = $_POST['id_underabout'];

   $update=true;

   if(empty($_POST['experience'])){
      $errors['experience']="No Update Experience !";
   }else{
      $experience = $_POST['experience'];
   }

   if(empty($_POST['P_E'])){
      $errors['P_E']="No Update Phone !";
   }else{
      $P_E = $_POST['P_E'];
      if(!preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $P_E)){
      $errors['P_E'] = 'No valid Phone Number !';
      }
   }

   if(!array_filter($errors)){
      $experience = mysqli_real_escape_string($conn , $_POST['experience']);
      $P_E = mysqli_real_escape_string($conn , $_POST['P_E']);

      $sql="UPDATE `under_about` SET `experience`='$experience' , `P_E`='$P_E' WHERE `id_underabout`='$id_underabout'";

      if(mysqli_query($conn , $sql)){
            header("Location:View_underabout.php");
      }else{
            echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//images under about
if(isset($_POST['save_imgs_underabout'])){
	
   if(empty($_FILES['img_imgs_underabout']['name'])){
      $errors['img_imgs_underabout']="No Selected Image !";
   }else{
      $img_imgs_underabout = $_FILES['img_imgs_underabout']['name'];
      $img_imgs_underaboutTamp = $_FILES["img_imgs_underabout"]["tmp_name"];
      $folderimg_imgs_underabout = "Upload/" . $img_imgs_underabout;
      move_uploaded_file($img_imgs_underaboutTamp , $folderimg_imgs_underabout);
   }

   if(!array_filter($errors)){
      $img_imgs_underabout= mysqli_real_escape_string($conn , $_FILES['img_imgs_underabout']['name']);

      $sql="INSERT INTO `imgs_underabout`(`img_imgs_underabout`) VALUES('$img_imgs_underabout')";

      if(mysqli_query($conn , $sql)){
         header("Location:View_imges_underabout.php");
      }else{
      echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_imgs_underabou'])){
   $id_imgs_underabout=$_GET['delete_imgs_underabou'];

   $sql="DELETE FROM `imgs_underabout` WHERE `id_imgs_underabout`='$id_imgs_underabout'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   header('Location:View_imges_underabout.php');
}

if(isset($_GET['edit_imgs_underabout'])){
   $id_imgs_underabout=$_GET['edit_imgs_underabout'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `imgs_underabout` WHERE `id_imgs_underabout`='$id_imgs_underabout'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_imgs_underabout = $row['img_imgs_underabout'];
   }

   if(empty($_FILES['img_imgs_underabout']['name'])){
      $errors['edit_img_imgs_underabout']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_imgs_underabout'])){
   $id_imgs_underabout=$_POST['id_imgs_underabout'];

   $update=true;

   if(empty($_FILES['img_imgs_underabout']['name'])){
      $errors['img_imgs_underabout']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_imgs_underabout =$_FILES['img_imgs_underabout']['name'];
      $img_imgs_underaboutTamp=$_FILES["img_imgs_underabout"]["tmp_name"];
      $folderimg_imgs_underabout="Upload/" . $img_imgs_underabout;
      move_uploaded_file($img_imgs_underaboutTamp , $folderimg_imgs_underabout);
   }

   if(!array_filter($errors)){
      $img_imgs_underabout= mysqli_real_escape_string($conn , $_FILES['img_imgs_underabout']['name']);

      $sql="UPDATE `imgs_underabout` SET `img_imgs_underabout`='$img_imgs_underabout' WHERE `id_imgs_underabout`= '$id_imgs_underabout'";

      if(mysqli_query($conn , $sql)){
         header("Location:View_imges_underabout.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//srvice
if(isset($_POST['save_service'])){
	
   if(empty($_POST['title_service1'])){
      $errors['title_service1']="No Title !";
   }else{
      $title_service1 = $_POST['title_service1'];
   }

   if(empty($_POST['description_service1'])){
      $errors['description_service1']="No Description !";
   }else{
      $description_service1 = $_POST['description_service1'];
   }

   if(empty($_POST['title_service2'])){
      $errors['title_service2']="No Title !";
   }else{
      $title_service2 = $_POST['title_service2'];
   }

   if(empty($_POST['description_service2'])){
      $errors['description_service2']="No Description !";
   }else{
      $description_service2 = $_POST['description_service2'];
   }

   if(empty($_POST['title_service3'])){
      $errors['title_service3']="No Title !";
   }else{
      $title_service3 = $_POST['title_service3'];
   }

   if(empty($_POST['description_service3'])){
      $errors['description_service3']="No Description !";
   }else{
      $description_service3 = $_POST['description_service3'];
   }

   if(empty($_POST['title_service4'])){
      $errors['title_service4']="No Title !";
   }else{
      $title_service4 = $_POST['title_service4'];
   }

   if(empty($_POST['description_service4'])){
      $errors['description_service4']="No Description !";
   }else{
      $description_service4 = $_POST['description_service4'];
   }

   if(!array_filter($errors)){
      $title_service1 = mysqli_real_escape_string($conn , $_POST['title_service1']);
      $description_service1 = mysqli_real_escape_string($conn , $_POST['description_service1']);
      $title_service2 = mysqli_real_escape_string($conn , $_POST['title_service2']);
      $description_service2 = mysqli_real_escape_string($conn , $_POST['description_service2']);
      $title_service3 = mysqli_real_escape_string($conn , $_POST['title_service3']);
      $description_service3 = mysqli_real_escape_string($conn , $_POST['description_service3']);
      $title_service4 = mysqli_real_escape_string($conn , $_POST['title_service4']);
      $description_service4 = mysqli_real_escape_string($conn , $_POST['description_service4']);

      $sql="UPDATE `service` SET `title_service1`='$title_service1' ,`description_service1`='$description_service1' , `title_service2`='$title_service2' ,`description_service2`='$description_service2' , `title_service3`='$title_service3' ,`description_service3`='$description_service3' , `title_service4`='$title_service4' ,`description_service4`='$description_service4'";

      if(mysqli_query($conn , $sql)){
         header("Location:View_service.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_service'])){
   $id_service=$_GET['edit_service'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `service` WHERE `id_service`='$id_service'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $title_service1 = $row['title_service1'];
      $description_service1 = $row['description_service1'];
      $title_service2 = $row['title_service2'];
      $description_service2 = $row['description_service2'];
      $title_service3 = $row['title_service3'];
      $description_service3 = $row['description_service3'];
      $title_service4 = $row['title_service4'];
      $description_service4 = $row['description_service4'];
   }
}

if(isset($_POST['update_service'])){
   $id_service=$_POST['id_service'];

   $update=true;

   if(empty($_POST['title_service1'])){
      $errors['title_service1']="No Update Title !";
   }else{
      $title_service1 = $_POST['title_service1'];
   }

   if(empty($_POST['description_service1'])){
      $errors['description_service1']="No Update Description !";
   }else{
      $description_service1 = $_POST['description_service1'];
   }

   if(empty($_POST['title_service2'])){
      $errors['title_service2']="No Update Title !";
   }else{
      $title_service2 = $_POST['title_service2'];
   }

   if(empty($_POST['description_service2'])){
      $errors['description_service2']="No Update Description !";
   }else{
      $description_service2 = $_POST['description_service2'];
   }

   if(empty($_POST['title_service3'])){
      $errors['title_service3']="No Update Title !";
   }else{
      $title_service3 = $_POST['title_service3'];
   }

   if(empty($_POST['description_service3'])){
      $errors['description_service3']="No Update Description !";
   }else{
      $description_service3 = $_POST['description_service3'];
   }

   if(empty($_POST['title_service4'])){
      $errors['title_service4']="No Update Title !";
   }else{
      $title_service4 = $_POST['title_service4'];
   }

   if(empty($_POST['description_service4'])){
      $errors['description_service4']="No Update Description !";
   }else{
      $description_service4 = $_POST['description_service4'];
   }

   if(!array_filter($errors)){
      $title_service1 = mysqli_real_escape_string($conn , $_POST['title_service1']);
      $description_service1 = mysqli_real_escape_string($conn , $_POST['description_service1']);
      $title_service2 = mysqli_real_escape_string($conn , $_POST['title_service2']);
      $description_service2 = mysqli_real_escape_string($conn , $_POST['description_service2']);
      $title_service3 = mysqli_real_escape_string($conn , $_POST['title_service3']);
      $description_service3 = mysqli_real_escape_string($conn , $_POST['description_service3']);
      $title_service4 = mysqli_real_escape_string($conn , $_POST['title_service4']);
      $description_service4 = mysqli_real_escape_string($conn , $_POST['description_service4']);

      $sql="UPDATE `service` SET `title_service1`='$title_service1' ,`description_service1`='$description_service1' , `title_service2`='$title_service2' ,`description_service2`='$description_service2' , `title_service3`='$title_service3' ,`description_service3`='$description_service3' , `title_service4`='$title_service4' ,`description_service4`='$description_service4' WHERE `id_service`= '$id_service'";

      if(mysqli_query($conn , $sql)){
         header("Location:View_service.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//portfolio
if(isset($_POST['save_portfolio'])){
	
   if(empty($_POST['state'])){
      $errors['state']="No Selected Mneu !";
   }else{
      $state = $_POST['state'];
   }

   if(empty($_POST['state'])){

   }else{
      $state2 = $_POST['state2'];
   }

   if(empty($_FILES['img_portfolio']['name'])){
      $errors['img_portfolio']="No Selected Image !";
   }else{
      $img_portfolio = $_FILES['img_portfolio']['name'];
      $img_portfolioTamp = $_FILES["img_portfolio"]["tmp_name"];
      $folderimg_portfolio = "Upload/" . $img_portfolio;
      move_uploaded_file($img_portfolioTamp , $folderimg_portfolio);
   }

   if(empty($_POST['name_portfolio'])){
      $errors['name_portfolio']="No Name Project !";
   }else{
      $name_portfolio = $_POST['name_portfolio'];
   }

   if(!array_filter($errors)){
      $state = mysqli_real_escape_string($conn , $_POST['state']);
      $state2 = mysqli_real_escape_string($conn , $_POST['state2']);
      $img_portfolio = mysqli_real_escape_string($conn , $_FILES['img_portfolio']['name']);
      $name_portfolio = mysqli_real_escape_string($conn , $_POST['name_portfolio']);

      $sql="INSERT INTO `portfolio`(`state`, `state2` , `img_portfolio`,`name_portfolio`) VALUES('$state','$state2','$img_portfolio','$name_portfolio')";

      if(mysqli_query($conn , $sql)){
         header("Location:View_portfolio.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
}
}

if(isset($_GET['delete_portfolio'])){
   $id_portfolio=$_GET['delete_portfolio'];

   $sql="DELETE FROM `portfolio` WHERE `id_portfolio`='$id_portfolio'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   header('Location:View_portfolio.php');
}

if(isset($_GET['edit_portfolio'])){
   $id_portfolio=$_GET['edit_portfolio'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `portfolio` WHERE `id_portfolio`='$id_portfolio'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $state = $row['state'];
      $state2 = $row['state2'];
      $img_portfolio = $row['img_portfolio'];
      $name_portfolio = $row['name_portfolio'];
   }

   if(empty($_FILES['img_portfolio']['name'])){
      $errors['edit_img_portfolio']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_portfolio'])){
   $id_portfolio=$_POST['id_portfolio'];

   $update=true;

   if(empty($_POST['state'])){
      $errors['state']="No Selected Mneu !";
   }else{
      $state = $_POST['state'];
   }

   if(empty($_POST['state'])){
   
   }else{
   $state2 = $_POST['state2'];
   }

   if(empty($_FILES['img_portfolio']['name'])){
      $errors['img_portfolio']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_portfolio = $_FILES['img_portfolio']['name'];
      $img_portfolioTamp = $_FILES["img_portfolio"]["tmp_name"];
      $folderimg_portfolio = "Upload/" . $img_portfolio;
      move_uploaded_file($img_portfolioTamp , $folderimg_portfolio);
   }

   if(empty($_POST['name_portfolio'])){
      $errors['name_portfolio']="No Update Name Portfolio !";
   }else{
      $name_portfolio = $_POST['name_portfolio'];
   }

   if(!array_filter($errors)){
      $state = mysqli_real_escape_string($conn , $_POST['state']);
      $state2 = mysqli_real_escape_string($conn , $_POST['state2']);
      $img_portfolio = mysqli_real_escape_string($conn , $_FILES['img_portfolio']['name']);
      $name_portfolio = mysqli_real_escape_string($conn , $_POST['name_portfolio']);

      $sql="UPDATE `portfolio` SET `state`='$state' ,`state2`='$state2' ,`img_portfolio`='$img_portfolio' ,`name_portfolio`='$name_portfolio' WHERE `id_portfolio`= '$id_portfolio'";

      if(mysqli_query($conn , $sql)){
         header("Location:View_portfolio.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//feedback
if(isset($_POST['save_feedback'])){

   if(empty($_FILES['img_feedback']['name'])){
        $errors['img_feedback']="No Selected Image !";
     }else{
        $img_feedback =$_FILES['img_feedback']['name'];
        $img_feedbackTamp=$_FILES["img_feedback"]["tmp_name"];
        $folderimg_feedback="Upload/" . $img_feedback;
        move_uploaded_file($img_feedbackTamp , $folderimg_feedback);
   }

    if(empty($_POST['name_client'])){
       $errors['name_client']="No Name Client !";
    }else{
       $name_client = $_POST['name_client'];
    }

    if(empty($_POST['feed_client'])){
       $errors['feed_client']="No Feedback !";
    }else{
       $feed_client = $_POST['feed_client'];
    }

   if(!array_filter($errors)){
       $img_feedback= mysqli_real_escape_string($conn , $_FILES['img_feedback']['name']);
       $name_client = mysqli_real_escape_string($conn , $_POST['name_client']);
       $feed_client = mysqli_real_escape_string($conn , $_POST['feed_client']);

       $sql="INSERT INTO `feedback`(`img_feedback`,`name_client`,`feed_client`) VALUES('$img_feedback','$name_client','$feed_client')";

       if(mysqli_query($conn , $sql)){
            header("Location:View_feedback.php");
       }else{
            echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_feedback'])){
   $id_feedback=$_GET['delete_feedback'];

   $sql="DELETE FROM `feedback` WHERE `id_feedback`='$id_feedback'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   header('Location:View_feedback.php');
}

if(isset($_GET['edit_feedback'])){
   $id_feedback=$_GET['edit_feedback'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `feedback` WHERE `id_feedback`='$id_feedback'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_feedback = $row['img_feedback'];
      $name_client = $row['name_client'];
      $feed_client = $row['feed_client'];
   }

   if(empty($_FILES['img_feedback']['name'])){
      $errors['edit_img_feedback']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_feedback'])){
   $id_feedback = $_POST['id_feedback'];

   $update=true;

   if(empty($_FILES['img_feedback']['name'])){
      $errors['img_feedback']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_feedback = $_FILES['img_feedback']['name'];
      $img_feedbackTamp = $_FILES["img_feedback"]["tmp_name"];
      $folderimg_feedback = "Upload/" . $img_feedback;
      move_uploaded_file($img_feedbackTamp , $folderimg_feedback);
   }

   if(empty($_POST['name_client'])){
      $errors['name_client']="No Update Name Client !";
   }else{
      $name_client = $_POST['name_client'];
   }

   if(empty($_POST['feed_client'])){
      $errors['feed_client']="No Update Feedback !";
   }else{
      $feed_client = $_POST['feed_client'];
   }

   if(!array_filter($errors)){
      $img_feedback= mysqli_real_escape_string($conn , $_FILES['img_feedback']['name']);
      $name_client = mysqli_real_escape_string($conn , $_POST['name_client']);
      $feed_client = mysqli_real_escape_string($conn , $_POST['feed_client']);

      $sql="UPDATE `feedback` SET `img_feedback`='$img_feedback' ,`name_client`='$name_client' ,`feed_client`='$feed_client' WHERE `id_feedback`= '$id_feedback'";

      if(mysqli_query($conn , $sql)){
         header("Location:View_feedback.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//contact
if(isset($_POST['save_contact'])){
	
   if(empty($_POST['facebook'])){
      $errors['facebook']="No Link !";
   }else{
      $facebook = $_POST['facebook'];
   }

   if(empty($_POST['twitter'])){
      $errors['twitter']="No Link !";
   }else{
      $twitter = $_POST['twitter'];
   }

   if(empty($_POST['instagram'])){
      $errors['instagram']="No Link !";
   }else{
      $instagram = $_POST['instagram'];
   }

   if(empty($_POST['linkedin'])){
      $errors['linkedin']="No Link !";
   }else{
      $linkedin = $_POST['linkedin'];
   }

   if(!array_filter($errors)){
      $facebook = mysqli_real_escape_string($conn , $_POST['facebook']);
      $twitter = mysqli_real_escape_string($conn , $_POST['twitter']);
      $instagram = mysqli_real_escape_string($conn , $_POST['instagram']);
      $linkedin = mysqli_real_escape_string($conn , $_POST['linkedin']);

      $sql="UPDATE `contact` SET `facebook`='$facebook' ,`twitter`='$twitter' , `instagram`='$instagram' ,`linkedin`='$linkedin'";

      if(mysqli_query($conn , $sql)){
            header("Location:View_contact.php");
      }else{
            echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_contact'])){
   $id_contact=$_GET['edit_contact'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `contact` WHERE `id_contact`='$id_contact'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $facebook = $row['facebook'];
      $twitter = $row['twitter'];
      $instagram = $row['instagram'];
      $linkedin = $row['linkedin'];
   }
}

if(isset($_POST['update_contact'])){
   $id_contact=$_POST['id_contact'];

   $update=true;

   if(empty($_POST['facebook'])){
      $errors['facebook']="No Update Link !";
   }else{
      $facebook = $_POST['facebook'];
   }

   if(empty($_POST['twitter'])){
      $errors['twitter']="No Update Link !";
   }else{
      $twitter = $_POST['twitter'];
   }

   if(empty($_POST['instagram'])){
      $errors['instagram']="No Update Link !";
   }else{
      $instagram = $_POST['instagram'];
   }

   if(empty($_POST['linkedin'])){
      $errors['linkedin']="No Update Link !";
   }else{
      $linkedin = $_POST['linkedin'];
   }

   if(!array_filter($errors)){
      $facebook = mysqli_real_escape_string($conn , $_POST['facebook']);
      $twitter = mysqli_real_escape_string($conn , $_POST['twitter']);
      $instagram = mysqli_real_escape_string($conn , $_POST['instagram']);
      $linkedin = mysqli_real_escape_string($conn , $_POST['linkedin']);

      $sql="UPDATE `contact` SET `facebook`='$facebook' ,`twitter`='$twitter' , `instagram`='$instagram' ,`linkedin`='$linkedin' WHERE `id_contact`= '$id_contact'";

      if(mysqli_query($conn , $sql)){
         header("Location:View_contact.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

?>