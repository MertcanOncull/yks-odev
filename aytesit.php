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
   $tarihd =(int) $_POST['tarihd'];
   $tarihy =(int) $_POST['tarihy'];
   $tarihn =(int) $tarihd - $tarihy * 0.25;
   //-----------------------------------------------
   @$edebiyatd =(int) $_POST['edebiyatd'];
   @$edebiyaty =(int) $_POST['edebiyaty'];
   $edebiyatn =(int) $edebiyatd - $edebiyaty * 0.25;
   //-----------------------------------------------
   $cografyad =(int) $_POST['cografyad'];
   $cografyay =(int) $_POST['cografyay'];
   $cografyan =(int) $cografyad - $cografyay * 0.25;
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

   $aytSozelMatNetPuan = $matematikn * 3;
   $aytSozelEdebiyatNetPuan = $edebiyatn * 3;
   $aytSozelTarihNetPuan = $tarihn * 2.8;
   $aytSozelCografyaNetPuan = $cografyan * 3.33;
    
   $aytSozelHamNetPuan = $aytSozelCografyaNetPuan + $aytSozelTarihNetPuan + $aytSozelEdebiyatNetPuan + $aytSozelMatNetPuan + $tytHamNetPuan;
   $aytSozelYerNetPuan = $aytSozelCografyaNetPuan + $aytSozelTarihNetPuan + $aytSozelEdebiyatNetPuan + $aytSozelMatNetPuan + $tytHamNetPuan + $obsn + 60;

   $tytNetYuzdeKirkYerlestirme = $tytHamNetPuan * 0.4;
   $aytSozelYerlestirmeYuzdeAltmis = $aytSozelYerNetPuan * 0.6;

   $aytTytSozelYuzdelik = $aytSozelYerlestirmeYuzdeAltmis + $tytNetYuzdeKirkYerlestirme;
   //-----------------------------------------------
   ?>
   <?php if ($obs >= 50) { ?>
   <?php 
   if ($tytHamNetPuan > 150) {   ?> 
   <?php if ($aytTytSozelYuzdelik > 180) { ?>
 <!-- Başlık -->
 <header class="baslik"> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
        <h1>Ayt Sayısal Not Hesaplama</h1>
       Ham Puan: <input type="number" placeholder="<?php echo "Ham Puan: " . $aytSozelYerlestirmeYuzdeAltmis?>" class="itput" disabled>
       Yerleştirme Puanı:<input type="number" placeholder="<?php echo "Yerleştirme Puan: " . $aytTytSozelYuzdelik?>" class="itput" disabled>
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
               <input type="number" placeholder="<?php echo "Tarih Doğrunuz: " . $tarihd?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Tarih Yanlışınız: " . $tarihy?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Tarih Netiniz: " . $tarihn?>" class="itput" disabled>
             </div>

            <div> 
               <input type="number" name="fizikd" placeholder="<?php echo "Coğrafya Doğrunuz: " . $cografyad?>" class="itput" disabled>
               <input type="number" name="fiziky" placeholder="<?php echo "Coğrafya Yanlışınız: " . $cografyay?>" class="itput" disabled>
               <input type="number" name="fizikn" placeholder="<?php echo "Coğrafya Netiniz: " . $cografyan?>" class="itput" disabled>
            </div>

             <div> 
                <input type="number" placeholder="<?php echo "Edebiyat Doğrunuz: " . $edebiyatd?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Edebiyat Yanlışınız: " . $edebiyaty?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Edebiyat Netiniz: " . $edebiyatn?>" class="itput" disabled>
             </div>
             <div class="butonlar">

            <a href="index.html">
                  <input type="button" class="itpute" value="Geri Dön">
            </a>
       </div>
   </div>
 </form>
</header>
<script></script>
    <!-- Butonlar -->
    <?php } else { ?>
   <?php     echo "Ayt Notunuz" . $aytSozelYerNetPuan . " olduğu için ayt sınavına giremezsin Barajı Geçemediniz";?>
   <div class="butonlar">
     <a href="aytesit.html">
      <input type="button" class="itpute" value="Geri Dön">
     </a>
   </div>
 
     <?php } ?>
     
    <?php } else {  ?>
      <?php    echo "Tyt Notunuz" . $tytHamNetPuan . " olduğu için ayt sınavına giremezsin ";?>
   <div class="butonlar">
     <a href="aytesit.html">
      <input type="button" class="itpute" value="Geri Dön">
     </a>
   </div>
 
      <?php } ?>
      <?php } else { ?>
  <?php echo "Lise ortalamanız 49 veya aşağısında olduğu için sınava giremezsiniz"; ?>

  <div class="butonlar">
     <a href="aytesit.html">
      <input type="button" class="itpute" value="Geri Dön">
     </a>
   </div>
   <?php } ?>

  
     
</body>
</html>