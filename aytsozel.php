<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ayt Sözel Not Hesaplama</title>
</head>
<body>
<?php

   $edebiyatd =(int) $_POST['edebiyatd'];
   $edebiyaty =(int) $_POST['edebiyaty'];
   $edebiyatn =(int) $edebiyatd - $edebiyaty * 0.25;
   //-----------------------------------------------
   $tarihd =(int) $_POST['tarihd'];
   $tarihy =(int) $_POST['tarihy'];
   $tarihn =(int) $tarihd - $tarihy * 0.25;
   //-----------------------------------------------
   $cografyad =(int) $_POST['cografyad'];
   $cografyay =(int) $_POST['cografyay'];
   $cografyan =(int) $cografyad - $cografyay * 0.25;
   //-----------------------------------------------
   $tarih2d =(int) $_POST['tarih2d'];
   @$tarih2y =(int) $_POST['tarih2y'];
   $tarih2n =(int) $tarih2d - $tarih2y * 0.25;
   //-----------------------------------------------
    //-----------------------------------------------
    $cografya2d =(int) $_POST['cografya2d'];
    @$cografya2y =(int) $_POST['cografya2y'];
    $cografya2n =(int) $cografya2d - $cografya2y * 0.25;
    //-----------------------------------------------
     //-----------------------------------------------
   $felsefed =(int) $_POST['felsefed'];
   $felsefey =(int) $_POST['felsefey'];
   $felsefen =(int) $felsefed - $felsefey * 0.25;
   //-----------------------------------------------
    //-----------------------------------------------
    $dikabd =(int) $_POST['dikabd'];
    $dikaby =(int) $_POST['dikaby'];
    $dikabn =(int) $dikabd - $dikaby * 0.25;
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

    $tytYuzdeKırk = $tytHamNetPuan * 0.4;

   //-----------------------------------------------

   $edebiyatNetPuan = $edebiyatn * 3;
   $tarihNetPuan = $tarihn * 2.8;
   $cografyaNetPuan = $cografyan * 3.3;
   $tarih2NetPuan = $tarih2n * 2.91;
   $cografya2NetPuan = $cografya2n * 2.91;
   $felsefeNetPuan = $felsefen * 3;
   $dikabNetPuan = $dikabn * 3.3;

   $aytSozelNetHamPuan = $edebiyatNetPuan + $tarihNetPuan + $cografyaNetPuan + $tarih2NetPuan + $cografya2NetPuan +   $felsefeNetPuan + $dikabNetPuan;
   $aytSozelYerNetPuan = $edebiyatNetPuan + $tarihNetPuan + $cografyaNetPuan + $tarih2NetPuan + $cografya2NetPuan +   $felsefeNetPuan + $dikabNetPuan  + $obsn + 60;

   $aytSozelYerNetPuanYuzdeAltmis = $aytSozelYerNetPuan * 0.6;

   $aytTytSozelYuzdelik = $aytSozelYerNetPuanYuzdeAltmis + $tytYuzdeKırk;
   //-----------------------------------------------
   ?>
   <?php if ($obs >= 50) {?>
   <?php 
   if ($aytTytSozelYuzdelik >= 180) {   ?> 
   <?php if ($tytHamNetPuan >= 150) { ?>
 <!-- Başlık -->
 <header class="baslik"> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h1>Ayt Sözel Not Hesaplama</h1>
       Ham Puan: <input type="number" name="matematikd" placeholder="<?php echo "Ham Puan: " . $aytSozelYerNetPuanYuzdeAltmis ?>" class="itput" disabled>
       Yerleştirme Puanı:<input type="number" name="matematiky" placeholder="<?php echo "Yerleştirme Puan: " . $aytTytSozelYuzdelik ?>" class="itput" disabled>
       <hr style="background-color:red;">
    <!-- Başlık -->

    <!-- Butonlar -->
        <form>
            <div class="butonlar"> 
               
            <div> 
               <input type="number" placeholder="<?php echo "Edebiyat doğrunuz: " . $edebiyatd ?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Edebiyat yanlışınız: ". $edebiyaty ?>" class="itput" disabled>
               <input type="number" placeholder="<?php echo "Edebiyat netiniz: " . $edebiyatn ?>" class="itput" disabled>
            </div>

            <div> 
                <input type="number" placeholder="<?php echo "Tarih doğrunuz: " . $tarihd ?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Tarih yanlışınız: " . $tarihy ?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Tarih netiniz: " . $tarihn ?>" class="itput" disabled>
             </div>

             <div> 
             <input type="number" name="fizikd" placeholder="<?php echo "Coğrafya doğrunuz: " . $cografyad ?>" class="itput" disabled>
                 <input type="number" name="fiziky" placeholder="<?php echo "Coğrafya yanlışınız: " . $cografyay ?>" class="itput" disabled>
        <input type="number" name="fizikn" placeholder="<?php echo "Coğrafya netiniz: " . $cografyan ?>" class="itput" disabled>
             </div>

             <div> 
                <input type="number" placeholder="<?php echo "Tarih 2 doğrunuz: " . $tarih2d ?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Tarih 2  yanlışınız: " . $tarih2y ?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Tarih 2  netiniz: " . $tarih2n ?>" class="itput" disabled>
             </div>
             <div> 
                <input type="number" placeholder="<?php echo "Coğrafya 2 doğrunuz: " . $cografya2d ?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Coğrafya 2 yanlışınız: " . $cografya2y ?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Coğrafya 2 netiniz: " . $cografya2n ?>" class="itput" disabled>
             </div>
             <div> 
                <input type="number" placeholder="<?php echo "Felsefe doğrunuz: " . $felsefed ?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Felsefe yanlışınız: " . $felsefey ?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Felsefe netiniz: " . $felsefen ?>" class="itput" disabled>
             </div>
             <div> 
                <input type="number" placeholder="<?php echo "Dikab doğrunuz: " . $dikabd ?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Dikab yanlışınız: " . $dikaby ?>" class="itput" disabled>
                <input type="number" placeholder="<?php echo "Dikab netiniz: " . $dikabn ?>" class="itput" disabled>
   </div>
             
             <div class="butonlar">
               <a href="aytsozel.html">
                  <input type="button" class="itpute" value="Geri dön">
               </a>
            </div>
    </div>
    </form>
 </header>
    <!-- Butonlar -->

  <?php } else { ?>
   <?php    echo "Ayt Sözel Ortalamanız" . $aytTytSozelYuzdelik . " olduğu için ayt sınavında barajı geçemediniz ";?>
   <div class="butonlar">
     <a href="aytsozel.html">
      <input type="button" class="itpute" value="Geri dön">
     </a>
   </div>
 
     <?php } ?>

     <?php } else {  ?>
      <?php    echo "tyt notunuz " . $tytHamNetPuan . " olduğu için ayt sınavına giremezsin ";?>
   <div class="butonlar">
     <a href="aytsozel.html">
      <input type="button" class="itpute" value="Geri dön">
     </a>
   </div>
 
      <?php } ?>

     <?php } else { ?>
      <?php echo "Lise ortalamanız 49 veya aşağısında olduğu için sınava giremezsiniz"; ?>

      <div class="butonlar">
         <a href="aytsozel.html">
      <input type="button" class="itpute" value="Geri dön">
         </a>
      </div>
   <?php } ?>
</body>
</html>