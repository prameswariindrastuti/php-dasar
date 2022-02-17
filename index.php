<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title> Belajar PHP </title>
    </head>
    <body>
        
        <?php  
        
        /*
        
         beberapa baris
         komentar
         terserah teman2
        
        
        */
        
        // variabel pada php
        
           $nama  = "Sekolah koding";
           $nama2 = 'Bermain koding';
         
         echo "Selamat datang di $nama <br>";
        
        //tipe data angka/number
        // 1. inter 2. float
       
           $angka  = 1000;
           $angka2 = 3;
           $angka3 = 2.64;
        
        //--------- operator math ---------
        // + - * / % ++ --
        
        //nama = nilai
        //$angka = $angka + $angka2;
        //$angka *= $ $angka2;
        
        //--------- math method ---------
        //round Rand(min, max) max min
        //echo "angka hari ini adalah". min($angka3, $angka, $angka2);
        
        //--------- String method ---------
        //strlen && str_word_count
        //str_replace(find, replace, string)
        //str_repeat(text, Times); str_shuffle(text)
        
        $text = "hai Semuanya di sini ";
        echo str_repeat( str_replace( "Hai", "Hallo" ,$text), 10 );
        
        
        
        
        
        
        ?>
        
        
    </body>
</html>