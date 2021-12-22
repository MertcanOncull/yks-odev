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
   @$kimyad =(int) $_POST['kimyad'];
   @$kimyay =(int) $_POST['kimyay'];
   $kimyan =(int) $kimyad - $kimyay * 0.25;
   //-----------------------------------------------
   $fizikd =(int) $_POST['fizikd'];
   $fiziky =(int) $_POST['fiziky'];
   $fizikn =(int) $fizikd - $fiziky * 0.25;
   //-----------------------------------------------
   @$biyolojid =(int) $_POST['biyolojid'];
   @$biyolojiy =(int) $_POST['biyolojiy'];
   $biyolojin =(int) $biyolojid - $biyolojiy * 0.25;
   //-----------------------------------------------
   $matematikd =(int) $_POST['matematikd'];
   $matematiky =(int) $_POST['matematiky'];
   $matematikn =(int) $matematikd - $matematiky * 0.25;
   //-----------------------------------------------
   $fend =(int) $_POST['fenid'];
   $feny =(int) $_POST['feniy'];
   $fenn =(int) $fend - $feny * 0.25;
   //-----------------------------------------------
   @$sosyald =(int) $_POST['sosyald'];
   @$sosyaly =(int) $_POST['sosyaly'];
   $sosyaln =(int) $sosyald - $sosyaly * 0.25;
   //-----------------------------------------------
   $turkced =(int) $_POST['turkced'];
   @$turkcey =(int) $_POST['turkcey'];
   $turkcen =(int) $turkced - $turkcey * 0.25;
   //-----------------------------------------------
   $tytturkceNetPuan = $turkcen * 1.32;
   $tytsosyalNetPuan = $sosyaln * 1.36;
   $tytfennNetPuan = $fenn * 1.36;
   $tytmatematikNetPuan = $matematikn * 1.32;
   $obs = (int) $_POST['obs'];
   $obsn = (int) $obs * 0.6;
   $tytHamNetPuan = $tytmatematikNetPuan + $tytfennNetPuan + $tytsosyalNetPuan + $tytturkceNetPuan + $obsn + 40;
   //-----------------------------------------------

   
   //-----------------------------------------------

   $aytSayisalMatNetPuan = $matematikn * 3.3;
   $aytSayisalBiyoNetPuan = $biyolojin * 3.3;
   $aytSayisalFizNetPuan = $fizikn * 3.4;
   $aytSayisalKimNetPuan = $kimyan * 3.4;
    
   $aytSayisalHamNetPuan = $aytSayisalKimNetPuan + $aytSayisalFizNetPuan + $aytSayisalBiyoNetPuan + $aytSayisalMatNetPuan + $tytHamNetPuan;
   $aytSayisalYerNetPuan = $aytSayisalKimNetPuan + $aytSayisalFizNetPuan + $aytSayisalBiyoNetPuan + $aytSayisalMatNetPuan + $tytHamNetPuan + $obsn + 60;

   $tytNetYuzdeKirkYerlestirme = $tytHamNetPuan * 0.4;
   $aytSayisalYerlestirmeYuzdeAltmis = $aytSayisalYerNetPuan * 0.6;

   $aytTytSayisalYuzdelik = $aytSayisalYerlestirmeYuzdeAltmis + $tytNetYuzdeKirkYerlestirme;
   //-----------------------------------------------
   ?>
   <?php if ($obs >= 50) { ?>
   <?php 
   if ($tytHamNetPuan > 150) {   ?> 
   <?php if ($aytTytSayisalYuzdelik > 180) { ?>
 <!-- Başlık -->
 <header class="baslik"> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
        <h1>Ayt Sayısal Not Hesaplama</h1>
       Ham Puan: <input type="number" placeholder="<?php echo "Ham Puan: " . $aytSayisalYerlestirmeYuzdeAltmis?>" class="itput" disabled>
       Yerleştirme Puanı:<input type="number" placeholder="<?php echo "Yerleştirme Puan: " . $aytTytSayisalYuzdelik?>" class="itput" disabled>
       <hr style="background-color:red;">
    <!-- Başlık -->

    <!-- Butonlar -->
        <form>
            <div class="butonlar">     
            <div> 
               <input type="number" placeholder="<?php echo "Mat Doğrunuz: " . $matematikd?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Mat Yanlışınız: ". $matematiky?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Mat Netiniz: " . $matematikn?>" class="itput" disabled>
            </div>

            <div> 
               <input type="number" placeholder="<?php echo "Kimya Doğrunuz: " . $kimyan?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Kimya Yanlışınız: " . $kimyan?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Kimya Netiniz: " . $kimyan?>" class="itput" disabled>
             </div>

            <div> 
               <input type="number" name="fizikd" placeholder="<?php echo "Fizik Doğrunuz: " . $fizikn?>" class="itput" disabled>
               <input type="number" name="fiziky" placeholder="<?php echo "Fizik Yanlışınız: " . $fizikn?>" class="itput" disabled>
               <input type="number" name="fizikn" placeholder="<?php echo "Fizik Netiniz: " . $fizikn?>" class="itput" disabled>
            </div>

             <div> 
                <input type="number" placeholder="<?php echo "Biyo Doğrunuz: " . $biyolojid?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Biyo Yanlışınız: " . $matematiky?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Biyo Netiniz: " . $matematikn?>" class="itput" disabled>
             </div>
             <div class="butonlar">

            <a href="aytsayisal.html">
                  <input type="button" class="itpute" value="Geri Dön">
            </a>
       </div>
   </div>
 </form>
</header>
    <!-- Butonlar -->

    <?php } else {  ?>
      <?php    echo "ayt notun" . $aytTytSayisalYuzdelik . " olduğu için ayt sınavına giremezsin ";?>
   <div class="butonlar">
     <a href="aytsayisal.html">
      <input type="button" class="itpute" value="Geri Dön">
     </a>
   </div>
 
      <?php } ?>
  <?php } else { ?>
   <?php    echo "tyt notun " . $tytHamNetPuan . " olduğu için ayt sınavına giremezsin ";?>
   <div class="butonlar">
     <a href="aytsayisal.html">
      <input type="button" class="itpute" value="Geri Dön">
     </a>
   </div>
 
     <?php } ?>

     <?php } else { ?>
  <?php echo "Lise ortalamanız 49 veya aşağısında olduğu için sınava giremezsiniz"; ?>

  <div class="butonlar">
     <a href="aytsayisal.html">
      <input type="button" class="itpute" value="Geri Dön">
     </a>
   </div>
   <?php } ?>
     
</body>
</html>