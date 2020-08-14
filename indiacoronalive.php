<!doctype html>
<html lang="en">

	<head>
  
		<title>Corona Go</title>
		
		<?php include 'link/links.php'; ?>
		
		<?php include 'css/style.php'; ?>

		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		
	</head>
	
	<body onload="fetch()">
	
		<nav class="navbar navbar-expand-lg nav_style">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="worldcoronalive.php">Worldcoronalive</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">Indiacoronalive</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>
    </div>
  </nav>
  
  
  <section class="container-fluid corona_world_update">
	
		<div class="my-5">
		
			<h3 class="text-uppercase text-center">covid-19 live state-wise updates of india</h3>
		
		</div>
		
		<div class="table-responsive">
		
			<table class="table table-bordered table-striped text-center" id="tbvalin">
			
				<tr>
				
					<th>Last Updated Time</th>
					<th>State</th>
					<th>Confirmed</th>
					<th>Active</th>
					<th>Recovered</th>
					<th>Deaths</th>
				
				</tr>
			
			<?php
			
				$data = file_get_contents('https://api.covid19india.org/data.json');
				$coronalive = json_decode($data, true);
				
				/*echo "<pre>";
				
					print_r($coronalive);
					
				echo "</pre>";*/
				
				$statecount = count($coronalive['statewise']);
				
				$i = 1;
				
				while($i < $statecount){
					
					?>
					
						<tr>
						
							<td style="background-color:#7a4a91"><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
							<td style="background-color:#4bb7d8"><?php echo $coronalive['statewise'][$i]['state'] ?></td>
							<td style="background-color:#f36e23"><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
							<td style="background-color:#9cc850"><?php echo $coronalive['statewise'][$i]['active'] ?></td>
							<td style="background-color:#4bb7d8"><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
							<td style="background-color:#f36e23"><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
						
						</tr>
				
						<!--
						echo $coronalive['statewise'][$i]['lastupdatedtime'] . "<br>";
						echo $coronalive['statewise'][$i]['state'] . "<br>";
						echo $coronalive['statewise'][$i]['confirmed'] . "<br>";
						echo $coronalive['statewise'][$i]['active'] . "<br>";
						echo $coronalive['statewise'][$i]['recovered'] . "<br>";
						echo $coronalive['statewise'][$i]['deaths'] . "<br>";
						-->
					
					<?php
					
					$i++;
				}
			
			?>
			
			
			</table>
		
		</div>
		
	</section>
	
  
  <div class="container scrolltop float-right pr-5">
	
		<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
	
	</div>
	
	<footer class="mt-5">
	
		<div class="container-fluid footer_style text-white text-center">
		
			<p>Copyright © 2020 by AS Technical</p>
		
		</div>
	
	</footer>
	
	<script type="text/javascript">

	mybutton = document.getElementById("myBtn");
	
	window.onscroll = function(){
		scrollFunction()
	};
	
	function scrollFunction(){
		if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
			mybutton.style.display = "block";
		}else{
			mybutton.style.display = "none";
		}
	}
	
	function topFunction(){
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
	
	
	
	
	
	</script>

	</body>
	
</html>