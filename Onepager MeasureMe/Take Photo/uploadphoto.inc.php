<?php

session_start();

if(isset($_SESSION['userId'])) {

  $userId = $_SESSION['userId'];

  $target_dir = "../uploads/".$userId."/";

  if (!file_exists($target_dir)) {
    mkdir("../uploads/".$userId."/", 0700);
  }
  
  $target_file = $target_dir . basename($_FILES["userfile"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if(isset($_POST['send_photo'])) {
    $check = getimagesize($_FILES["userfile"]["tmp_name"]);
    if($check !== false) {
        if(file_exists($target_file)) {
          echo "<script>
            alert('De foto bestaat al. Probeer een andere foto.');
            window.location.href='../profiel.php';
            </script>";
          exit();
        }
        else if ($_FILES["userfile"]["size"] > 500000) {
          echo "<script>
            alert('De foto is niet van geldig formaat. Probeer een andere foto.');
            window.location.href='../profiel.php';
            </script>";
          exit();
        }
        else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
          echo "<script>
            alert('De foto is niet van het juiste bestandstype. Probeer een foto die jpg, png of jpeg is, uit te kiezen.');
            window.location.href='../profiel.php';
            </script>";
          exit();
        }
        else {
        if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) {
          echo "<script>
            alert('De foto is succesvol geüpload. u kunt op versturen klikken.');
            window.location.href='';
            </script>";
          exit();
        } else {
        }
      }
    } else {
        echo "<script>
          alert('Het bestand dat u probeede up te loaden was geen foto. Probeer het alstublieft opniew.');
          window.location.href='../profiel.php';
          </script>";
        exit();
    }
  }
}
else {
  echo "<script>
    alert('U moet ingelogd zijn om een foto up te kunnen loaden. Log in.');
    window.location.href='../login.php';
    </script>";
  exit();
}
?>
