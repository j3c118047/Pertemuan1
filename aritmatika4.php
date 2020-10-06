<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pertemuan 1</title>
	<link rel="stylesheet" href="../style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>
</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">Maria Widhi Astuti - J3C118047</div>
      
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="aritmatika4.php" class="active">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Pertemuan 1</span></a></li>
        <li><a href="../p2/tampil_data.php">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Pertemuan 2</span>
          </a></li>
        <li><a href="#">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Pertemuan 3</span>
          </a></li>
        <!-- <li><a href="#">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Pertemuan 4</span>
          </a></li>
        <li><a href="#">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Pertemuan 5</span>
          </a></li>
        <li><a href="#">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Pertemuan 6</span>
          </a></li>
        <li><a href="#">
          <span class="icon"><i class="fas fa-book"></i></span>
          <span class="title">Pertemuan 7</span> -->
          </a></li>
    </ul>
  </div>
  
  <div class="main_container">
  <h1>Kalkulator Sederhana</h1>
  <br>
		<form method="GET" action="aritmatika4.php">
            <input type="number" name="bil1"
                <?php 
                    if (isset($_GET['bil1'])) {
                        echo 'value="'.$_GET['bil1'].'"';
                    }
                ?>
            > 
            <select name="opr">
                <option value="+"
                    <?php 
                        if (isset($_GET['opr']) && $_GET['opr']=='+') {
                            echo 'selected';
                        }
                    ?>
                >+</option>
                <option value="-"
                    <?php 
                            if (isset($_GET['opr']) && $_GET['opr']=='-') {
                                echo 'selected';
                            }
                        ?>
                >-</option>
                <option value="/" 
                    <?php 
                            if (isset($_GET['opr']) && $_GET['opr']=='/') {
                                echo 'selected';
                            }
                        ?>
                >/</option>
                <option value="x"
                    <?php 
                            if (isset($_GET['opr']) && $_GET['opr']=='x') {
                                echo 'selected';
                            }
                        ?>
                >x</option>
            </select>
            <input type="number" name="bil2"
            <?php 
                    if (isset($_GET['bil2'])) {
                        echo 'value="'.$_GET['bil2'].'"';
                    }
                ?>
            >
            <input type="submit" name="sub" value="=">
            <?php
                include 'pustaka.php';
                if (isset($_GET['sub']) && strlen($_GET['bil1']) && strlen($_GET['bil2'])) {
                  echo $rslt = operasikan($_GET['bil1'],$_GET['bil2'],$_GET['opr']);
                  $log = $_GET['history']."<br>". $_GET['bil1']." ".$_GET['opr']." ".$_GET['bil2']." = ".$rslt;
                  echo "<h3>Log Perhitungan</h3>";
                  echo $log;
                }

            ?>
            <input type="hidden" name="history"
                <?php
                    if (isset($_GET['sub'])) {
                        echo 'value="'.$log.'"';
                    }
                ?>
            >
 
        </form>

  </div>
</div>
	
</body>
</html>

