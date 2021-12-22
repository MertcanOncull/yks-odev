<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ayt Sayısal Not Hesaplama</title>
</head>
<body>
<?php
    $matematikd =(int) $_POST['matematikd'];
    $matematiky =(int) $_POST['matematiky'];
    $matematikn =(int) $matematikd - $matematiky * 0.25;
    //-----------------------------------------------
    $fenid =(int) $_POST['fenid'];
    $feniy =(int) $_POST['feniy'];
    $fenin =(int) $fenid - $feniy * 0.25;
    //-----------------------------------------------
    $sosyalid =(int) $_POST['sosyalid'];
    $sosyaliy =(int) $_POST['sosyaliy'];
    $sosyalin =(int) $sosyalid - $sosyaliy * 0.25;
    //-----------------------------------------------
    $turkced =(int) $_POST['turkced'];
    @$turkcey =(int) $_POST['turkcey'];
    $turkcen =(int) $turkced - $turkcey * 0.25;
    //-----------------------------------------------
    $obs = (int) $_POST['obs'];
    $obsn = (int) $obs * 0.6;
      //-----------------------------------------------
    $tytturkceNetPuan = $turkcen * 1.2;
    $tytsosyalNetPuan = $sosyalin * 1.6;
    $tytfennNetPuan = $fenin * 1.6;
    $tytmatematikNetPuan = $matematikn * 1.2;
    
    $tytHamNetPuan = $tytmatematikNetPuan + $tytfennNetPuan + $tytsosyalNetPuan + $tytturkceNetPuan;
    $tytYerNetPuan = $tytmatematikNetPuan + $tytfennNetPuan + $tytsosyalNetPuan + $tytturkceNetPuan + $obsn +50;
    
    ?>
     <!-- Başlık -->
     <?php if ($obs >= 50) {?>
      <?php if ($tytYerNetPuan >= 150) { ?>
         <header class="baslik"><br><br><br> <br><br><br> <br><br><br> <br><br><br>
        <h1>tyt Sayısal Not Hesaplama</h1>
       Ham Puan: <input type="number" name="matematikd" placeholder="<?php echo "Ham Puan: " . $tytHamNetPuan ?>" class="itput" disabled>
       Yerleştirme Puanı:<input type="number" name="matematiky" placeholder="<?php echo "Yerleştirme Puan: " . $tytYerNetPuan ?>" class="itput" disabled>
       <hr style="background-color:red;">
    <!-- Başlık -->

    <!-- Butonlar -->
        <form>
          <div class="butonlar"> 
            <div> 
               <input type="number" placeholder="<?php echo "Mat Doğrunuz: " . $matematikd ?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Mat Yanlışınız: ". $matematiky ?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Mat Netiniz: " . $matematikn ?>" class="itput" disabled>
            </div>

            <div> 
                <input type="number"  placeholder="<?php echo "Fen Doğrunuz: " . $fenid ?>" class="itput" disabled>
                <input type="number"  placeholder="<?php echo "Fen Yanlışınız: " . $feniy ?>" class="itput" disabled>
                <input type="number"  placeholder="<?php echo "Fen Netiniz: " . $fenin ?>" class="itput" disabled>
             </div>

             <div> 
               <input type="number"  placeholder="<?php echo "Sosyal Doğrunuz: " . $sosyalid ?>" class="itput" disabled>
               <input type="number"  placeholder="<?php echo "Sosyal Yanlışınız: " . $sosyaliy ?>" class="itput" disabled>
               <input type="number"  placeholder="<?php echo "Sosyal Netiniz: " . $sosyalin ?>" class="itput" disabled>
             </div>

            <div> 
               <input type="number"  placeholder="<?php echo "Türkçe Doğrunuz: " . $turkced ?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Türkçe Yanlışınız: " . $turkcey ?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Türkçe Netiniz: " . $turkcen ?>"  class="itput" disabled>
            </div>
      </div>
            <div class="butonlar">
     <a href="tyt.html">
      <input type="button" class="itpute" value="Geri Dön">
     </a>
   </div>
    </div>
    </form>
 </header>
 <?php } else { ?>
  <?php echo " tyt puanınız: ". $tytYerNetPuan . " "  ." (150 ve aşağısında olduğunuz için barajı geçemediniz)"; ?>

  <div class="butonlar">
     <a href="tyt.html">
      <input type="button" class="itpute" value="Geri Dön">
     </a>
   </div>
   <?php } ?>
   <?php } else { ?>
  <?php echo "Lise ortalamanız 49 veya aşağısında olduğu için sınava giremezsiniz"; ?>

  <div class="butonlar">
     <a href="tyt.html">
      <input type="button" class="itpute" value="Geri Dön">
     </a>
   </div>
   <?php } ?>
    <!-- Butonlar -->
</body>
</html>