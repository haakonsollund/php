
    <link rel="stylesheet" href="login.css">

    <?php
    if(isset($_POST['login'])){
        $brukernavn = $_POST['brukernavn'];
        $passord = $_POST['passord'];

        include "azure.php";


        $sql = "SELECT brukernavn, passord, fornavn, idbruker FROM bruker WHERE brukernavn = '$brukernavn'";
        $resultalt = $con->query($sql);

        $rad = $resultalt->fetch_assoc();

        if ($rad['passord'] == $passord){
            echo "logger deg in ett øyeblikk";


            session_start();
            $_SESSION['login_id'] = $rad['idbruker'];
            $_SESSION['fornavn'] = $rad['fornavn'];
            header("refresh:1; url=index.php",true, 303);
        
        }else{
            echo "feil passord eller brukernavn";
        }
        


    }
    ?>
    <div class="page">
  <div class="container">
    <div class="left">
      <div class="login">
      <a href="registrer.php">
        <br><button>registrer deg</button><br>
    </a>
      </div>
      <div class="eula">vis du ikke har en bruker registrer deg nå.</div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <form method="POST">
      <div class="form">
        <label for="brukernavn">brukernavn</label>
        <input type="text" name="brukernavn" id="brukernavn">
        <label for="password">Password</label>
        <input type="password" name="passord" id="passord">
        <input type="submit" name="login" value="login" id="submit">
      </div>
    </form>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.js"></script>


  <script type="text/javascript">
 
    var current = null;
document.querySelector("#brukernavn").addEventListener("focus", function (e) {
  if (current) current.pause();
  current = anime({
    targets: "path",
    strokeDashoffset: {
      value: 0,
      duration: 700,
      easing: "easeOutQuart"
    },
    strokeDasharray: {
      value: "240 1386",
      duration: 700,
      easing: "easeOutQuart"
    }
  });
});
document.querySelector("#passord").addEventListener("focus", function (e) {
  if (current) current.pause();
  current = anime({
    targets: "path",
    strokeDashoffset: {
      value: -336,
      duration: 700,
      easing: "easeOutQuart"
    },
    strokeDasharray: {
      value: "240 1386",
      duration: 700,
      easing: "easeOutQuart"
    }
  });
});
document.querySelector("#submit").addEventListener("focus", function (e) {
  if (current) current.pause();
  current = anime({
    targets: "path",
    strokeDashoffset: {
      value: -730,
      duration: 700,
      easing: "easeOutQuart"
    },
    strokeDasharray: {
      value: "530 1386",
      duration: 700,
      easing: "easeOutQuart"
    }
  });
});
  </script>

