<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/header.php";
   include_once($path);
?>

		<div class="picture-slide"></div>

		<!-- Main Skeleton Begins-->

		<div class="container">
			<div id="slider-content" class="sixteen columns"></div>
		
        	
			<div id="left" class="nine columns">
            
            
            <div id="annual" class="nine columns">
            <p>Plan ahead! See what quarter your classes fall on.</p>
            <h2> <img src="img/calender_icon.png"/>
           <a href="#" class="classname">View Annual Class Availbility</a></h2>
			</div>
			<div id="register" class="eight columns">
				
                    <div id="forms" class="three columns">  
                    <h3><img src="/img/form_icon.png"/> Forms </h3>
				    <ul class"form-list">
				    	<li><a href="#">Withdrawl</a></li>
				    	<li><a href="#">Change Work Load</a></li>
				    	<li><a href="#">Release Artwork</a></li>
				    	<li><a href="#">Release Photos</a></li>
				    	<li><a href="#">FAFSA</a></li>
				    </ul>
				</div>
              <div id="table" class="five columns">
					<h3><img src="/img/matrix_icon.png"/> Download Matrix</h3>
					<table width="250">
					  <tr>
					    <th scope="col">Major</th>
					    <th scope="col">Bachlors</th>
					    <th scope="col">Associate</th>
					  </tr>
					  <tr>
					    <td>Advertising</td>
					    <td><a href="#">Download</a></td>
					    <td><a href="#">Download</a></td>
					    
					  </tr>
					  <tr>
					    <td>Graphic Design</td>
					    <td><a href="#">Download</a></td>
					    <td><a href="#">Download</a></td>
					  </tr>
					  <tr>
					    <td>Web Design</td>
					    <td><a href="#">Download</a></td>
					    <td><a href="#">Download</a></td>
					  </tr>
				    </table>
				</div>
				
			</div>
            </div>

			<div id="twitter-box" class=" offset-by-four columns">
				<h1>CONTENT</h1>
			</div>
			

		</div>
		<!-- Main Skeleton Ends-->
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/footer.php";
   include_once($path);
?>