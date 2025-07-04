<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="index.php">
			<span class="align-middle">AdminKit</span>
		</a>

		<?php
		$currentPage = basename($_SERVER['PHP_SELF']);
		?>


		<ul class="sidebar-nav">
			<li class="sidebar-header">Pages</li>

			<li class="sidebar-item <?php echo ($currentPage == 'index.php') ? 'active' : '' ?>">
				<a class="sidebar-link" href="index.php">
					<i class="align-middle" data-feather="sliders"></i>
					<span class="align-middle">Dashboard</span>
				</a>
			</li>

			<li class="sidebar-item <?php echo ($currentPage == 'pages-profile.php') ? 'active' : '' ?>">
				<a class="sidebar-link" href="pages-profile.php">
					<i class="align-middle" data-feather="user"></i>
					<span class="align-middle">Profile</span>
				</a>
			</li>

			<li class="sidebar-item <?php echo ($currentPage == 'pages-sign-in.php') ? 'active' : '' ?>"">
				<a class=" sidebar-link" href="pages-sign-in.php">
				<i class="align-middle" data-feather="log-in"></i>
				<span class="align-middle">Sign In</span>
				</a>
			</li>

			<li class="sidebar-item <?php echo ($currentPage == 'pages-sign-up.php') ? 'active' : '' ?>"">
				<a class=" sidebar-link" href="pages-sign-up.php">
				<i class="align-middle" data-feather="user-plus"></i>
				<span class="align-middle">Sign Up</span>
				</a>
			</li>

			<li class="sidebar-item <?php echo ($currentPage == 'pages-blank.php') ? 'active' : '' ?>"">
				<a class=" sidebar-link" href="pages-blank.php">
				<i class="align-middle" data-feather="book"></i>
				<span class="align-middle">Blank</span>
				</a>
			</li>

			<li class="sidebar-header ">Tools & Components</li>

			<li class="sidebar-item <?php echo ($currentPage == 'ui-buttons.php') ? 'active' : '' ?>"">
				<a class=" sidebar-link" href="ui-buttons.php">
				<i class="align-middle" data-feather="square"></i>
				<span class="align-middle">Buttons</span>
				</a>
			</li>

			<li class="sidebar-item <?php echo ($currentPage == 'ui-forms.php') ? 'active' : '' ?>"">
				<a class=" sidebar-link" href="ui-forms.php">
				<i class="align-middle" data-feather="check-square"></i>
				<span class="align-middle">Forms</span>
				</a>
			</li>

			<li class="sidebar-item <?php echo ($currentPage == 'ui-cards.php') ? 'active' : '' ?>"">
				<a class=" sidebar-link" href="ui-cards.php">
				<i class="align-middle" data-feather="grid"></i>
				<span class="align-middle">Cards</span>
				</a>
			</li>

			<li class="sidebar-item <?php echo ($currentPage == 'ui-typography.php') ? 'active' : '' ?>"">
				<a class=" sidebar-link" href="ui-typography.php">
				<i class="align-middle" data-feather="align-left"></i>
				<span class="align-middle">Typography</span>
				</a>
			</li>

			<li class="sidebar-item <?php echo ($currentPage == 'icons-feather.php') ? 'active' : '' ?>"">
				<a class=" sidebar-link" href="icons-feather.php">
				<i class="align-middle" data-feather="coffee"></i>
				<span class="align-middle">Icons</span>
				</a>
			</li>

			<li class="sidebar-header">Plugins & Addons</li>

			<li class="sidebar-item <?php echo ($currentPage == 'charts-chartjs.php') ? 'active' : '' ?>"">
				<a class=" sidebar-link" href="charts-chartjs.php">
				<i class="align-middle" data-feather="bar-chart-2"></i>
				<span class="align-middle">Charts</span>
				</a>
			</li>

			<li class="sidebar-item <?php echo ($currentPage == 'maps-google.php') ? 'active' : '' ?>"">
				<a class=" sidebar-link" href="maps-google.php">
				<i class="align-middle" data-feather="map"></i>
				<span class="align-middle">Maps</span>
				</a>
			</li>
		</ul>

		<div class="sidebar-cta">
			<div class="sidebar-cta-content">
				<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
				<div class="mb-3 text-sm">
					Are you looking for more components? Check out our premium version.
				</div>
				<div class="d-grid">
					<a href="upgrade-to-pro.php" class="btn btn-primary">Upgrade to Pro</a>
				</div>
			</div>
		</div>
	</div>
</nav>