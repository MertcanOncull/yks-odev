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
    $tytYerNetPuan = $tytmatematikNetPuan + $tytfennNetPuan + $tytsosyalNetPuan + $tytturkceNetPuan + $obsn +60;
    
    ?>
     <!-- Başlık -->
     <?php if ($obs >= 50) {?>
      <?php if ($tytYerNetPuan >= 150) { ?>
         <header class="baslik"><br><br><br> <br><br><br> <br><br><br> <br><br><br>
        <h1>Tyt Sayısal Not Hesaplama</h1>
       Ham puan: <input type="number" name="matematikd" placeholder="<?php echo "Ham Puan: " . $tytHamNetPuan ?>" class="itput" disabled>
       Yerleştirme puanı:<input type="number" name="matematiky" placeholder="<?php echo "Yerleştirme Puan: " . $tytYerNetPuan ?>" class="itput" disabled>
       <hr style="background-color:red;">
    <!-- Başlık -->

    <!-- Butonlar -->
        <form>
          <div class="butonlar"> 
            <div> 
               <input type="number" placeholder="<?php echo "Mat doğrunuz: " . $matematikd ?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Mat yalnışınız: ". $matematiky ?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Mat netiniz: " . $matematikn ?>" class="itput" disabled>
            </div>

            <div> 
                <input type="number"  placeholder="<?php echo "Fen doğrunuz: " . $fenid ?>" class="itput" disabled>
                <input type="number"  placeholder="<?php echo "Fen yalnışınız: " . $feniy ?>" class="itput" disabled>
                <input type="number"  placeholder="<?php echo "Fen netiniz: " . $fenin ?>" class="itput" disabled>
             </div>

             <div> 
               <input type="number"  placeholder="<?php echo "Sosyal doğrunuz: " . $sosyalid ?>" class="itput" disabled>
               <input type="number"  placeholder="<?php echo "Sosyal yalnışınız: " . $sosyaliy ?>" class="itput" disabled>
               <input type="number"  placeholder="<?php echo "Sosyal netiniz: " . $sosyalin ?>" class="itput" disabled>
             </div>

            <div> 
               <input type="number"  placeholder="<?php echo "Türkçe doğrunuz: " . $turkced ?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Türkçe yalnışınız: " . $turkcey ?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Türkçe netiniz: " . $turkcen ?>"  class="itput" disabled>
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