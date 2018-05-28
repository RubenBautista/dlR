<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	
    <link href="css/reloj.css" rel="stylesheet">
    
   </head>

<head>
    <title>TV SHOW</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    
   
  
    <script>
        $(document).ready(function(){                   
            $('.slider')._TMS({
                show:0,
                pauseOnHover:true,
                prevBu:'.prev',
                nextBu:'.next',
                playBu:false,
                duration:10000,
                preset:'zoomer',
                pagination:true,
                pagNums:false,
                slideshow:7000,
                numStatus:false,
                banners:'fade',
                waitBannerAnimation:false,
                progressBar:false
            })      
        });
    </script>
    

</head>


<body>
    
    <br/> 
     <div id="slide">       
        <div class="slider">
            <ul class="items">
            <li><img src="imagenes/tv1.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>The Big Bang Theory</strong>
                    <br/><span>En el final de la temporada anterior, con Amy en Princeton, y a pesar de que todo el grupo...</span></p></div></li>
                
                <li><img src="imagenes/tv2.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>Daredevil</strong>
                    <br/> <span>Netflix y Marvel Entertainment vuelven a aunar fuerzas de cara a la temporada 3 de ‘Daredevil’...</span></p>
                </div></li>

            </ul>
        </div>  
        <a href="#" class="prev"></a><a href="#" class="next"></a>
     </div> 

  <!--==============================content================================-->




    <section id="content"><div class="ic"></div>
            <br/><br/><br/><br/>


        <?php 


            $url ='http://api.tvmaze.com/shows?page=1';

            $json = file_get_contents($url);

            $retVal = json_decode($json, TRUE);

                for ($i=1; $i <=20 ; $i++) { 
          
        ?>

                <div class="grid_4">

                    <center><h2 class="p2"><?php echo $retVal[$i]['name'] ?></h2><br/></center>
                    <img src="<?php echo $retVal[$i]['image']['medium'] ?>" alt=""><br/><br/>
                    <center><h3 class="p2"><?php echo $retVal[$i]['network']['name'] ?></h3><br/></center>
                    <center><h4 class="p2"><?php echo $retVal[$i]['officialSite'] ?></h4><br/></center>
                    <center><h5 class="p2"><?php echo $retVal[$i]['premiered'] ?></h5><br/><br/><br/></center>
        
                </div>

        <?php

            }
            
        ?>


    </section> 


 
<!--==============================footer=================================-->



    <footer>
        <div class="wrap">
        
            <div class="fecha">
                <span id="diaSemana" class="diaSemana">Martes</span>
                <span id="dia" class="dia">27</span>
                <span>de </span>
                <span id="mes" class="mes">Octubre</span>
                <span>del </span>
                <span id="year" class="year">2015 </span>
                
            </div>
        
        </div>

            <script src="js/reloj.js"></script> 
                <small>    
                    <i>Todos los derechos reservados..</i>
                </small>
    
    </footer>

</body>

</html>