<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title> Belajar PHP </title>
    </head>
    <body>
        <h1>Fungsi php</h1>
        <?php  
        //------- fungsi -------
        
        //parameter
        function print_text( $text, $angka )
        {
            $text = "gedung " . $text . "" .$angka;
            echo "---------";
            echo $text;
            echo "---------";
        }
        
        function jarak(){
            echo "<br>";
        }
        
        
      //  print_text("koding ", 21);
     //   jarak();
     //   print_text("perawat ", 21);
      //  jarak();
     //   print_text("mengemudi ", 213);
      //  jarak();
       
       //------- return fungsi -------
       
       // function menghitung ($x, $y){
       //  $z = $x + $y;
       // return $z;
       //  }
       //
       // $hasil = menghitung (2, 5) * 10;
       // echo "hasil dari penjumlahan ". $hasil;
       
       //------- scope -------
       
       $a = 20000;
       $b = 30;
       
       function menghitung(){
           global $a, $b;
           
           //$c = $globals['a'] + $globals['b'];
           $c = $a + $b;
           return $c;
       }
       
      // echo menghitung();
        
        
        //--- anonymous function ---
        
      //  $ngetik = function($text){
      //      echo $text;
            
     //   };
        
        
     //   $greeting = $ngetik;
        
     //   $greeting('selamat datang semuanya 123 ');
        
        //--- callback function ---
        
        
        function berteriak($callback){
            echo 'Halooooo <br>';
            //$callback;
            
            if( is_callable($callback) ){ // menguji apakah dia berfungsi
            call_user_func($callback, 'selamat datang');
            }else{
                echo ' dia bukan fungsi ';
        }
        
        }
        
        
        // berteriak(function){
        //  echo ' saya anonymous, alias tidak punya nama';
      //  });
          
          $panggil = function($text){
              echo $text;
             
          };
        
        berteriak( $panggil );
        
        
        
        ?>
        
        
    </body>
</html>