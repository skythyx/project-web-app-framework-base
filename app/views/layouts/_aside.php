<aside class="main-aside-container" id="myAside">
	<div class="aside-content-frame">
		<div class="aside-content">
			<div class="aside-header">
				<p>PHP Framework</p>
			</div>
			<div class="aside-body">
				<a href="<?php echo BASE_URL; ?>"><i class="fas fa-home fa-fw"></i>Home</a>
				<a href="<?php echo BASE_URL; ?>about"><i class="fas fa-users fa-fw"></i>about</a>

				<?php
					$getUsers = app\auth\Auth::getUser();

					if (isset($getUsers)) {
						// var_dump($getUsers->name);
				?>
						<!-- show menu edit account if user authenticated -->
						<!-- hide menu edit account if user not authenticated -->
						<hr />
						<a href="<?php echo BASE_URL; ?>editaccount"><i class="fas fa-users fa-fw"></i>edit account</a>
				<?php
					}
					else {
				?>
						<!-- show menu register & login if user not authenticated -->
						<!-- hide menu register & login if user authenticated -->
						<hr />
						<a href="<?php echo BASE_URL; ?>register"><i class="fas fa-user fa-fw"></i>register</a>
						<a href="<?php echo BASE_URL; ?>login"><i class="fas fa-sign-in-alt fa-fw"></i>login</a>
				<?php
					}
				?>

				<!-- link for categorized user -->
				<!-- <?php
					// $getUsers = app\auth\Auth::getUser();

					// if (isset($getUsers)) {
					// 	if ($getUsers->level == 'admin') {
					// 		// admin menu
					// 	}
					// 	else {
					// 		// user menu
					// 	}
					// }
				?> -->

				<a href="<?php echo BASE_URL; ?>logout"><i class="fas fa-sign-out-alt fa-fw"></i>logout</a>
				<hr />
				<a href="<?php echo BASE_URL; ?>pwgen"><i class="fas fa-link fa-fw"></i>password generator</a>
				<a href="<?php echo BASE_URL; ?>agecalc"><i class="fas fa-link fa-fw"></i>age calculator</a>
				<a href="<?php echo BASE_URL; ?>strrev"><i class="fas fa-link fa-fw"></i>string reverser</a>
				<hr />
				<a href="<?php echo BASE_URL; ?>matdescol"><i class="fas fa-link fa-fw"></i>material design color</a>
				<hr />
				<a href="#"><i class="fas fa-home fa-fw"></i>link</a>
				<a href="#"><i class="fas fa-info fa-fw"></i>link link link link link</a>
				<a href="#"><i class="fas fa-home fa-fw"></i>link</a>
				<a href="#"><i class="fas fa-home fa-fw"></i>link link link link link</a>
				<a href="#"><i class="fas fa-home fa-fw"></i>link</a>
				<a href="#"><i class="fas fa-home fa-fw"></i>link link link link link</a>
				<hr />
				<a href="#"><i class="fas fa-home fa-fw"></i>link</a>
				<a href="#"><i class="fas fa-info fa-fw"></i>link link link link link</a>
				<a href="#"><i class="fas fa-home fa-fw"></i>link</a>
				<a href="#"><i class="fas fa-home fa-fw"></i>link link link link link</a>
				<a href="#"><i class="fas fa-home fa-fw"></i>link</a>
				<a href="#"><i class="fas fa-home fa-fw"></i>link link link link link</a>
			</div>
		</div>
	</div>
</aside>

<div class="main-aside_bg-container" id="myAside_bg" onclick="myAsideCloseFunction(); myAside_bgCloseFunction();"></div>