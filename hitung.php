<?php
        if(isset($_POST['submit'])){
            $jari   =$_POST['jari'];
            $phie    =22/7;
            
            // menghitung luas lingkaran
            $luas_lingkaran = $phie*($jari*$jari);
            $keliling_lingkaran = $phie*($jari+$jari);

            echo "Hasil hitung luas lingkaran adalah sebagai berikut <br /><br />";
            echo "Diketahui: <br />";
            echo "Jari-jari lingkaran = $jari<br />";
            echo "Phie = $phie<br />";
            echo "Maka luas lingkaran = [ $phie x $jari x $jari ] = $luas_lingkaran <br />";
            echo "Maka keliling lingkaran = [ $phie x $jari + $jari ] = $keliling_lingkaran";
         }
    ?>