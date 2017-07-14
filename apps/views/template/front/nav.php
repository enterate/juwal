<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
			    <div class="col-xs-1">
					<div id="gtco-logo"><a href="<?= base_url() ?>">Juwal</a></div>
				</div>
				<div class="col-xs-10 text-left menu-1">
					<ul>
						
						<li><a href="<?= base_url() ?>front/open/about">Tentang Juwal</a></li>
						<!-- <li class="has-dropdown">
							<a href="<?= base_url() ?>front/open/paket">Paket</a>
							<ul class="dropdown">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li> -->
						<li><a href="<?= base_url() ?>front/open/contact">Contact</a></li>
					</ul>
				</div>
				<div class="col-xs-1 text-right">
					<?php if ($this->session->userdata('__usr_jwl')==TRUE) {  ?>
						<a href="<?= base_url() ?>user/dashboard">Dashboard</a>|<a href="<?= base_url() ?>user/account/logout">Logout</a>
					<?php } else { ?>
						<a href="<?= base_url() ?>front/login">Masuk</a>|<a href="<?= base_url() ?>front/login/register">Daftar</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</nav>