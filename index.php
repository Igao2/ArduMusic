<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>&#65279;</title>
    <link rel="icon" type="image/x-icon" href="1x1.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>





<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex justify-content-center h-100 text-center text-bg-dark" style="overflow-y: hidden; overflow-x: hidden;
    -ms-user-select: none;  user-select: none;">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <nav class="nav nav-masthead justify-content-center float-md-end">
      </nav>
    </div>
  </header>



  <main class="px-3">


    <img class="" data-aos="zoom-in" src="../assets/inst.png" alt="" width="132" height="124">
    <h1>ArduMusic.</h1>
    <p class="lead">Crie suas melodias e mande para o seu arduino com essa ferramenta.</p>
    <br>

    <p class="lead">
    <input title="Tecla A" id="t1" class="btn btn-lg btn-secondary fw-bold border-white bg-white" type="submit" name="do" value="Dó">
    <input title="Tecla S" id="t2" class="btn btn-lg btn-secondary fw-bold border-white bg-white" type="submit" name="re" value="Ré">
    <input title="Tecla D" id="t3" class="btn btn-lg btn-secondary fw-bold border-white bg-white" type="submit" name="mi" value="Mi">
    <input title="Tecla F" id="t4" class="btn btn-lg btn-secondary fw-bold border-white bg-white" type="submit" name="fa" value="Fá">
    <input title="Tecla G" id="t5" class="btn btn-lg btn-secondary fw-bold border-white bg-white" type="submit" name="sol" value="Sol">
    <input title="Tecla H" id="t6" class="btn btn-lg btn-secondary fw-bold border-white bg-white" type="submit" name="la" value="Lá">
    <input title="Tecla J" id="t7" class="btn btn-lg btn-secondary fw-bold border-white bg-white" type="submit" name="si" value="Si">
    </p>

    <br><br>

    <p class="lead">
      <form method="POST" action="#">
      <input type="hidden" name="note1" value="" id="note1">
    <input id="bt" class="btn btn-lg btn-secondary fw-bold border-white bg-white" type="submit" name="beat" value="Enviar para o Arduino">
  </form>
    </p>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </main>


</div>



  </body>

<audio id="a1"><source src="../assets/264.mp3" type="audio/mpeg"></audio>
<audio id="a2"><source src="../assets/297.mp3" type="audio/mpeg"></audio>
<audio id="a3"><source src="../assets/330.mp3" type="audio/mpeg"></audio>
<audio id="a4"><source src="../assets/352.mp3" type="audio/mpeg"></audio>
<audio id="a5"><source src="../assets/396.mp3" type="audio/mpeg"></audio>
<audio id="a6"><source src="../assets/440.mp3" type="audio/mpeg"></audio>
<audio id="a7"><source src="../assets/495.mp3" type="audio/mpeg"></audio>

<script>
  var texto = document.querySelector("#note1").value;
let limite = 0;
var x1 = document.getElementById("a1"); var x2 = document.getElementById("a2");
var x3 = document.getElementById("a3"); var x4 = document.getElementById("a4");
var x5 = document.getElementById("a5"); var x6 = document.getElementById("a6");
var x7 = document.getElementById("a7");
var tempo;
var count = 0;
document.addEventListener("keydown", function(event) {
  if (event.keyCode == 65) {
    console.log('ta pegando A');
    document.getElementById("t1").classList.remove("bg-white");
    document.getElementById("t1").classList.add("bg-dark");
    document.getElementById("t1").classList.add("text-white")
    x1.play();
  }
  else if (event.keyCode == 83) {
    console.log('ta pegando S');
    document.getElementById("t2").classList.remove("bg-white");
    document.getElementById("t2").classList.add("bg-dark");
    document.getElementById("t2").classList.add("text-white");
    x2.play();
  }
  else if (event.keyCode == 68) {
    console.log('ta pegando D');
    document.getElementById("t3").classList.remove("bg-white");
    document.getElementById("t3").classList.add("bg-dark");
    document.getElementById("t3").classList.add("text-white");
    x3.play();
  }
  else if (event.keyCode == 70) {
    console.log('ta pegando F');
    document.getElementById("t4").classList.remove("bg-white");
    document.getElementById("t4").classList.add("bg-dark");
    document.getElementById("t4").classList.add("text-white");
    x4.play();
  }
  else if (event.keyCode == 71) {
    console.log('ta pegando G');
    document.getElementById("t5").classList.remove("bg-white");
    document.getElementById("t5").classList.add("bg-dark");
    document.getElementById("t5").classList.add("text-white");
    x5.play();
  }
  else if (event.keyCode == 72) {
    console.log('ta pegando H');
    document.getElementById("t6").classList.remove("bg-white");
    document.getElementById("t6").classList.add("bg-dark");
    document.getElementById("t6").classList.add("text-white");
    x6.play();
  }
  else if (event.keyCode == 74) {
    console.log('ta pegando J');
    document.getElementById("t7").classList.remove("bg-white");
    document.getElementById("t7").classList.add("bg-dark");
    document.getElementById("t7").classList.add("text-white");
    x7.play();
  }
});

document.addEventListener("keyup", function(event) {
  if (event.keyCode == 65) {
    document.getElementById("t1").classList.remove("bg-dark");
    document.getElementById("t1").classList.add("bg-white");
    document.getElementById("t1").classList.remove("text-white");
    document.querySelector("#note1").value = texto + ","+ tempo + "," + 264;
    texto = document.querySelector("#note1").value;
    x1.pause();

  }
  else if (event.keyCode == 83) {
    document.getElementById("t2").classList.remove("bg-dark");
    document.getElementById("t2").classList.add("bg-white");
    document.getElementById("t2").classList.remove("text-white");
    document.querySelector("#note1").value = texto + ","+ tempo + "," + 297;
    texto = document.querySelector("#note1").value;
    x2.pause();
    
  }
  else if (event.keyCode == 68) {
    document.getElementById("t3").classList.remove("bg-dark");
    document.getElementById("t3").classList.add("bg-white");
    document.getElementById("t3").classList.remove("text-white");
    document.querySelector("#note1").value = texto + ","+ tempo + "," + 330;
    texto = document.querySelector("#note1").value;
    x3.pause();
   
  }
  else if (event.keyCode == 70) {
    document.getElementById("t4").classList.remove("bg-dark");
    document.getElementById("t4").classList.add("bg-white");
    document.getElementById("t4").classList.remove("text-white");
    document.querySelector("#note1").value = texto + ","+ tempo + "," + 352;
    texto = document.querySelector("#note1").value;
    x4.pause();
   
  }
  else if (event.keyCode == 71) {
    document.getElementById("t5").classList.remove("bg-dark");
    document.getElementById("t5").classList.add("bg-white");
    document.getElementById("t5").classList.remove("text-white");
    document.querySelector("#note1").value = texto + ","+ tempo + "," + 396;
    texto = document.querySelector("#note1").value;
    x5.pause();
    
  }
  else if (event.keyCode == 72) {
    document.getElementById("t6").classList.remove("bg-dark");
    document.getElementById("t6").classList.add("bg-white");
    document.getElementById("t6").classList.remove("text-white");
    document.querySelector("#note1").value = texto + ","+ tempo + "," + 440;
    texto = document.querySelector("#note1").value;
    x6.pause();

   
  }
  else if (event.keyCode == 74) {
    document.getElementById("t7").classList.remove("bg-dark");
    document.getElementById("t7").classList.add("bg-white");
    document.getElementById("t7").classList.remove("text-white");
    document.querySelector("#note1").value = texto + ","+ tempo + "," + 496;
    texto = document.querySelector("#note1").value;
    x7.pause();
    
  }
});

const signalKeypressDuration = (key, duration) => {
  console.log(`Key ${key} pressed for ${duration} ms`);
  tempo = duration;
  console.log(tempo);
};

const keys = {};
document.body.addEventListener("keydown", ({ key }) => {
  if (!keys[key]) keys[key] = Date.now();
});
document.body.addEventListener("keyup", ({ key }) => {
  signalKeypressDuration(key, Date.now() - keys[key]);
  keys[key] = null;
});

</script>


</html>
<?php
  
  
  
 if(isset($_POST['beat']))
 {
  $filee = fopen("COM7","w");
  
  $note1 = $_POST['note1'];
  $exp=explode(",",$note1);
  $leng=count($exp);
  fwrite($filee,'787,234');
 }



?>
