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
		<style>
			.card.active {
				background-color: #00b7ff; /* Ganti dengan warna yang diinginkan */
			}
		</style>
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
			<h2 class="text-center my-4">Detail Produk</h2>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6">
						<img class="rounded float-start me-5" src="" width="250px" />
						<h4>Nama Produk: <span id="productName"></span></h4>
						<h4>Deskripsi Produk:</h4>
					</div>
				</div>
			</div>
			<div class="container text-center mt-5">
				<div class="row justify-content-center">
					<div class="col col-lg-2">
						<div class="card" data-value="5000" style="width: 10rem">
							<div class="card-body text-center">
								<h5 class="card-title">Rp 5.000</h5>
							</div>
						</div>
					</div>
					<div class="col col-lg-2">
						<div class="card" data-value="10000" style="width: 10rem">
							<div class="card-body text-center">
								<h5 class="card-title">Rp 10.000</h5>
							</div>
						</div>
					</div>
					<div class="col col-lg-2">
						<div class="card" data-value="20000" style="width: 10rem">
							<div class="card-body text-center">
								<h5 class="card-title">Rp 20.000</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container text-center mt-3">
				<div class="row justify-content-center">
					<div class="col col-lg-2">
						<div class="card" data-value="50000" style="width: 10rem">
							<div class="card-body text-center">
								<h5 class="card-title">Rp 50.000</h5>
							</div>
						</div>
					</div>
					<div class="col col-lg-2">
						<div class="card" data-value="100000" style="width: 10rem">
							<div class="card-body text-center">
								<h5 class="card-title">Rp 100.000</h5>
							</div>
						</div>
					</div>
					<div class="col col-lg-2">
						<div class="card" data-value="150000" style="width: 10rem">
							<div class="card-body text-center">
								<h5 class="card-title">Rp 150.000</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container text-center mt-3">
				<div class="row justify-content-center">
					<div class="col col-lg-2">
						<div class="card" data-value="300000" style="width: 10rem">
							<div class="card-body text-center">
								<h5 class="card-title">Rp 300.000</h5>
							</div>
						</div>
					</div>
					<div class="col col-lg-2">
						<div class="card" data-value="500000" style="width: 10rem">
							<div class="card-body text-center">
								<h5 class="card-title">Rp 500.000</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container my-5">
				<div class="row justify-content-center">
					<a class="btn btn-primary" href="V_transaction.html" role="button"
						>Lanjut Bayar</a
					>
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

		<!-- Menampilkan gambar dan judul game sesuai dengan yang dipilih -->
		<script>
			// Mengambil selected product dari Local Storage
			var selectedProduct = localStorage.getItem("selectedProduct");

			// Select elemennya
			var productImage = document.querySelector(".rounded.float-start.me-5");
			var productName = document.getElementById("productName");

			// Mengatur isi dari elemennya
			if (selectedProduct === "freefire") {
				productImage.src = "assets/icons/ff.jpg";
				productName.textContent = "Free Fire";
			} else if (selectedProduct === "genshin") {
				productImage.src = "assets/icons/genshin.jpg";
				productName.textContent = "Genshin Impact";
			} else if (selectedProduct === "hsr") {
				productImage.src = "assets/icons/hsr.png";
				productName.textContent = "Honkai Star Rail";
			} else if (selectedProduct === "ml") {
				productImage.src = "assets/icons/ml.jpg";
				productName.textContent = "Mobile Legends";
			} else if (selectedProduct === "pubg") {
				productImage.src = "assets/icons/pubg.jpg";
				productName.textContent = "PUBG";
			} else if (selectedProduct === "valorant") {
				productImage.src = "assets/icons/valo.jpg";
				productName.textContent = "Valorant";
			}

			// Menghapus selected product dari Local Storage
			localStorage.removeItem("selectedProduct");
		</script>

		<!-- Mengambil nominal harga yang dipilih -->
		<script>
			var selectedCard = null;

			document.querySelectorAll(".card").forEach(function (card) {
				card.addEventListener("click", function () {
					if (selectedCard) {
						selectedCard.classList.remove("active");
					}

					selectedCard = this;
					selectedCard.classList.add("active");

					var value = selectedCard.getAttribute("data-value");
					localStorage.setItem("selectedValue", value);
					console.log("Selected Value:", value);
				});
			});
		</script>
	</body>
</html>
