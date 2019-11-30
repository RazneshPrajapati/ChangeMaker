<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body{
		margin:0;
		font-family: sans-serif;
	}
	nav{
		padding:0 5vw;
		box-sizing: border-box;
		align-items: center;
		position:fixed;
		height:8vh;
		width:100%;
		background:#06F90B;
		color:white;
		display: flex;
		justify-content: space-between;
	}
	.nav-items{
		
		justify-content: space-around;
		display: flex;
		margin:0px;
	}
	ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #06F90B;
}

li {
  float: left;
}

li a,a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #05BF09;
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #f5fff5;
  color: #b07cff;
  font-size: .8rem;
  
  display: flex;
  align-items: center;
  flex-direction: column-reverse;
}

.logo
{
  height: 4vh;
}

.footer_left{
	display: flex;
	align-items: center;
	margin-bottom: 8px;
}

.footer_right{
	display:flex;
}
.contact{
	margin-top: 8px;
	font-size: 1rem;
}
</style>
<body>
<nav>
	<a href=""><div class="logo">Logo</div></a>
	<div class="nav-items">
		<ul>
		  <li><a class="active" href="#home">Home</a></li>
		  <li><a href="#podcast">Podcast</a></li>
		  <li><a href="#Message">Message</a></li>
		  <li><a href="#about">About</a></li>
		</ul>
	</div>
</nav>
<div class="footer">

	<div class="footer_left" style="margin-left: 8px;">
		&copy2019 Copyright: Change Maker
	</div>
	<div class="footer_right">
		<div class="social">
			<a href="#">
            <img class="logo" src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/online_social_media_facebook-128.png">
          	</a>
		</div>
		<div class="social">
			<a href="#">
            <img class="logo" src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/twitter_online_social_media-128.png">
          	</a>
		</div>
		<div class="social">
			<a href="#">
            <img class="logo" src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/instagram_online_social_media_photo-128.png">
          	</a>
		</div>
		<div class="social">
			<a href="#">
            <img class="logo" src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/online_social_media_google_plus-128.png">
          	</a>
		</div>
	</div>
	<div class="contact">
			Contact us:
	</div>
</div>
</body>
</html>
