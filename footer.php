<div class="footer" style="background-color:#232f3e;">
	<div class="container">
		<div class="w3_footer_grids" >
			<div class="col-md-3 w3_footer_grid">
				<h3>Contact</h3>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
				<ul class="address">
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Information</h3>
				<ul class="info"> 
					<li><a href="about.html">About Us</a></li>
					<li><a href="mail.html">Contact Us</a></li>
					<li><a href="codes.html">Short Codes</a></li>
					<li><a href="faq.html">FAQ's</a></li>
					<li><a href="products.html">Special Products</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Category</h3>
				<ul class="info"> 
					<li><a href="products.html">Mobiles</a></li>
					<li><a href="products1.html">Laptops</a></li>
					<li><a href="products.html">Purifiers</a></li>
					<li><a href="products1.html">Wearables</a></li>
					<li><a href="products2.html">Kitchen</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Profile</h3>
				<ul class="info"> 
					<li><a href="index.html">Home</a></li>
					<li><a href="products.html">Today's Deals</a></li>
				</ul>
				<h4>Follow Us</h4>
				<div class="agileits_social_button">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="google"> </a></li>
						<li><a href="#" class="pinterest"> </a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-copy">
		<div class="footer-copy1">
			<div class="footer-copy-pos">
				<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
			</div>
		</div>
		<div class="container">
			<p>&copy; 2017 Electronic Store. All rights reserved | Design by <a href="#">Mihir kumar Singh & Ayush Kumar Mishra</a></p>
		</div>
	</div>
</div>
<!-- //footer --> 
<!-- cart-js -->
<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo2").flexisel({
			visibleItems:4,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,    		
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: { 
				portrait: { 
					changePoint:568,
					visibleItems: 1
				}, 
				landscape: { 
					changePoint:667,
					visibleItems:2
				},
				tablet: { 
					changePoint:768,
					visibleItems: 3
				}
			}
		});

	});
</script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
	w3ls.render();

	w3ls.cart.on('w3sb_checkout', function (evt) {
		var items, len, i;

		if (this.subtotal() > 0) {
			items = this.items();

			for (i = 0, len = items.length; i < len; i++) { 
			}
		}
	});
</script>  
</body>
</html> 
