<nav class="navbar fixed-top navbar-light navbar-expand-xl zp-navi-large bg-light" id="zp-navi">
	<div class="zp-navi-inner">
		<div class="zp-navi-item">
			<a class="navbar-brand" href="/">
				<img id="zp-logo" src=" {{ asset('/img/zp-logo-color.png') }} " alt="">
			</a>
		</div>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="zp-navi-item">
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Products
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				        	<a class="dropdown-item" href="/products/walkie-talkie">Walkie Talkie</a>
				        	<a class="dropdown-item" href="/products/wirelss-charger">Wireless Charger</a>
				        	<a class="dropdown-item" href="/products/smart-room-controller">Room Control Unit</a>
				        </div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Solutions
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				         	<a class="dropdown-item" href="/solutions/system-integration">System Integration</a>
				        	<a class="dropdown-item" href="/solutions/dms">Device Management System</a>
				        	<a class="dropdown-item" href="/solutions/iot">Internet of Things</a>
				        </div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/about-us">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/contact-us">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>