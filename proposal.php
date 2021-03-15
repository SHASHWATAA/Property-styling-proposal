
<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="Header.css">
	<link type="text/css" rel="stylesheet" href="Body.css">
	<title></title>
</head>
<body>
	<div id="header-wrapper">
		<div class="header hidden">
			<div class="header-left"><a href="#default" class="logo"><img src="./images/canvas_logo_black_on_white.png"></a></div>
			<div class="header-right">
				<a href="#contact">Contact</a>
				<a class="active" href="#home">Home</a>
			</div>
		</div>	
		<div class="header">
			<div class="header-left"><a href="#default" class="logo"><img src="./images/canvas_logo_black_on_white.png"></a></div>
			<div class="header-right">
				<a href="#contact">
					<div class="contact-wrapper">
						<div><img class ="icon" src = "./images/phone.svg"></div><div>02 9368 7992</div>
					</div>
				</a>
				<a class="active" href="#home">Not Accepted</a>
			</div>
		</div>

	</div>
	<div id="page-content">
		<div id="banner">
			<img src="./images/banner.png">
		</div>
		<div id="address-bar">
			<?php print_r($_POST["Address"])?>
		</div>
		<div class="container top">
			<div class="title"><div class="left-border"><div>Our Story</div></div></div>
			<div class="text">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut justo eu lorem convallis imperdiet. Aliquam id interdum ante, ac porta libero. Nulla cursus dapibus luctus. Nulla facilisi. Duis consectetur mauris at nisl tincidunt sollicitudin. Nam sed commodo nunc. Morbi convallis aliquet aliquam. Nulla efficitur ante a pellentesque faucibus. Suspendisse auctor sapien vitae turpis ornare mollis. Vestibulum sagittis erat quis interdum laoreet. In laoreet fermentum iaculis.
			</div>
		</div>
		<div class="container">
			<div class="title"><div class="left-border"><div>Lookbook</div></div></div>
			<section id="PropertyStylingImageGrid">
				<img src="https://cdn.shopify.com/s/files/1/2527/1508/files/product-grid-3-template-7.jpg?v=1583298744" />
				<img src="https://cdn.shopify.com/s/files/1/2527/1508/files/product-grid-3-template-8.jpg?v=1583298745" />
				<img src="https://cdn.shopify.com/s/files/1/2527/1508/files/product-grid-3-template-9.jpg?v=1583298745" />
				<img src="https://cdn.shopify.com/s/files/1/2527/1508/files/product-grid-3-template-10.jpg?v=1583298744" />
				<img src="https://cdn.shopify.com/s/files/1/2527/1508/files/product-grid-3-template-11.jpg?v=1583298745" />
				<img src="https://cdn.shopify.com/s/files/1/2527/1508/files/product-grid-3-template-12.jpg?v=1583298744" />
			</section>
		</div>
		<div class="container">
			<div class="title"><div class="left-border"><div>Our Proposal</div></div></div>
			<div class="text">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut justo eu lorem convallis imperdiet. Aliquam id interdum ante, ac porta libero. Nulla cursus dapibus luctus. Nulla facilisi. Duis consectetur mauris at nisl tincidunt sollicitudin. Nam sed commodo nunc. Morbi convallis aliquet aliquam. Nulla efficitur ante a pellentesque faucibus. Suspendisse auctor sapien vitae turpis ornare mollis. Vestibulum sagittis erat quis interdum laoreet. In laoreet fermentum iaculis.
			</div>
		</div>
		<?php 
#print_r($_POST)
		?>

	</body>
	</html>


