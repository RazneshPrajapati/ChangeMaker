<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
	body{
		margin:0;
	}
	main{
		height:100vh;
		width:100%;
	}

	.message_row{;
		
		display:flex;
		flex-direction: left;
		justify-content: space-around;

	}
	.message_cols{
		background: green;
		padding:10px;
		border-radius: 5px;
		color:white;
		width:200px;
		height:200px;
		display:flex;
		flex-direction: column;
		font-size: 1.3rem;
		position: :relative;
		background-image: linear-gradient(to bottom right, rgba(0,50,0,0), rgba(0,250,0,1));
		
		-webkit-box-shadow: 2px 2px 4px 3px #ccc;
		-moz-box-shadow:    1px 1px 4px 3px #ccc;
		box-shadow:         1px 1px 4px 4px #ccc; 
	}
	a{
		text-decoration: none;
	}

	a:hover{
		text-decoration: none;
		zoom:110%;
	}
	.message_content{
		margin-top : 8px;
		font-size : 1.1rem;
	}
	.message_head{
		display: flex;
		font-weight: bold;
		flex-direction: column;
		justify-content: center;
		
		font-size: 2.8rem;
		align-items: center;
	}
	.beautiful_quotes{
		font-size: 1.1rem;
		font-weight: 100;

	}
	.verticle_line{
		margin-bottom: 12px;
	}

	</style>
</head>
<body>
	<main>
		<div class="message_head">
			Message
			<span class="beautiful_quotes">
				A beautiful quotes
			</span>
		</div>
		<hr width="60%" class="verticle_line"></hr>
		<div class="message">
	        <div class="message_row">
	        	<a href="">
		            <div class="message_cols">
		            	<div class="message_title">Titile here</div>
		            	<div class="message_content">content goes here</div>
		            </div>	
	        	</a>
	            <a href="">
		            <div class="message_cols">
		            	<div class="message_title">Titile here</div>
		            	<div class="message_content">content goes here</div>
		            </div>	
	        	
	        </div>
	   	</div>
   </main>
</body>
</html>