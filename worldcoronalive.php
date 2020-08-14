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
		
			<h3 class="text-uppercase text-center">covid-19 live updates of the world</h3>
		
		</div>
		
		<div class="table-responsive">
		
			<table class="table table-bordered table-striped text-center" id="tbval">
			
				<tr>
				
					<th>Country</th>
					<th>Total Confirmed</th>
					<th>Total Recovered</th>
					<th>Total Deaths</th>
					<th>New Confirmed</th>
					<th>New Recovered</th>
					<th>New Deaths</th>
				
				</tr>
			
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
	
	
	function fetch(){
		$.get("https://api.covid19api.com/summary",
		
			function(data){
				//console.log(data['Countries'].length);
				var tbval = document.getElementById('tbval');
				
				for(var i=1; i<(data['Countries'].length); i++){
					
					var x = tbval.insertRow();
					
					x.insertCell(0);
					tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
					tbval.rows[i].cells[0].style.background = "#7a4a91";
					tbval.rows[i].cells[0].style.color = "#fff";
					
					x.insertCell(1);
					tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
					tbval.rows[i].cells[1].style.background = "#4bb7d8";
					
					x.insertCell(2);
					tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
					tbval.rows[i].cells[2].style.background = "#4bb7d8";
					
					x.insertCell(3);
					tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
					tbval.rows[i].cells[3].style.background = "#f36e23";
					
					x.insertCell(4);
					tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
					tbval.rows[i].cells[4].style.background = "#4bb7d8";
					
					x.insertCell(5);
					tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
					tbval.rows[i].cells[5].style.background = "#9cc850";
					
					x.insertCell(6);
					tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
					tbval.rows[i].cells[6].style.background = "#f36e23";
					
				}
				
			}
			
		);
		
	}
	
	
	
	</script>

	</body>
	
</html>
