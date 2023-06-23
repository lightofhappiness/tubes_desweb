<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Jual Voucher Game</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
			crossorigin="anonymous"
		/>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg bg-body-tertiary">
				<div class="container-fluid">
					<a class="navbar-brand ms-3" href="V_home.html">IsiVoucher</a>
					<button
						class="navbar-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarTogglerDemo02"
						aria-controls="navbarTogglerDemo02"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item ms-2">
								<a class="nav-link" aria-current="page" href="V_home.html"
									>Home</a
								>
							</li>
							<li class="nav-item ms-2">
								<a class="nav-link" href="V_home.html#tentangkita">About Us</a>
							</li>
							<li class="nav-item ms-2">
								<a class="nav-link" href="V_faq.html">FAQ</a>
							</li>
						</ul>
						<a
							class="btn btn-primary ml-auto"
							href="V_contact.html"
							role="button"
							>Contact Us</a
						>
					</div>
				</div>
			</nav>
		</header>

		<section>
			<h2 class="text-center my-4">Hubungi Kami</h2>
			<div class="mb-3 mx-5">
				<label for="exampleFormControlInput1" class="form-label">Nama</label>
				<input
					type="text"
					class="form-control"
					id="exampleFormControlInput1"
					placeholder="Masukkan nama Anda"
				/>
			</div>
			<div class="mb-3 mx-5">
				<label for="exampleFormControlInput1" class="form-label">Email</label>
				<input
					type="email"
					class="form-control"
					id="exampleFormControlInput1"
					placeholder="Masukkan email Anda"
				/>
			</div>
			<div class="mb-3 mx-5">
				<label for="exampleFormControlTextarea1" class="form-label"
					>Pesan</label
				>
				<textarea
					class="form-control"
					id="exampleFormControlTextarea1"
					rows="3"
				></textarea>
			</div>
			<div class="container my-5">
				<div class="row justify-content-center">
					<a class="btn btn-primary" href="#" role="button">Contact Us</a>
				</div>
			</div>
		</section>

		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
			integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
			crossorigin="anonymous"
		></script>
	</body>
</html>
