<?php session_start();?>
   
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/css/style.css"/>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/7.0.0/normalize.css">
    <title>Document</title>
</head>
<body>
   <header>
    <nav class="nav-content">
      <div class="nav-logo">
        <a href="index.html">
          <img src="https://image.ibb.co/k3aB2a/Captura_de_pantalla_2017_05_25_a_las_8_15_36_p_m.png" alt=""/>
        </a>
      </div>
      <div class="nav-menu">
        <a href="index.html"> Inicio </a>
        <a href="donar.html"> Quiero donar</a>
        <a href=""> Dar Hogar</a>
        <a href="register.html"> Registrarse</a>
        <p>Bienvenido, <?php echo $_SESSION['name'] ?></p>
      </div>
      <div class="clear"></div>
    </nav>
  </header>
  <section class="section">
    <div class="section-content">
      <div class="section-content-form">
        <?php
            include('php/core.php');
            $db = new PDOconnect;
            $query = $db->queryList("SELECT `ID`, `user_name`, `user_lastname`, `user_birthdate`, `user_sex`, `user_email`, `user_telephone`, `user_login`, `user_password`, `user_register` FROM `ia_users` ", array( ));
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
                                    
            
            ?>
            <table >
	            <tbody>
	            <?php 
                    for($i=0;$i<=$result[$i];$i++){
                        echo '<tr>
                                <td>'.$result[$i]['ID'].'</td>
                                <td>'.$result[$i]['user_name'].'</td>
                                <td>'.$result[$i]['user_lastname'].'</td>
                                <td>'.$result[$i]['user_login'].'</td>
                                <td>'.$result[$i]['user_register'].'</td>
                            </tr>';
                        
                    }
                    ?>
                </tbody>
            </table>
      </div>
    </div>
  </section>
  <footer>
      <div class="foot-menu">
        <a href="index.html"> Inicio </a>
        <a href="donar.html"> Quiero donar</a>
        <a href=""> Dar Hogar</a>
        <a href="register.html"> Registrarse</a>
      </div>
  </footer>   
</body>
</html>