<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield ('title') - Petugas</title>

		<!-- Site favicon -->
		<link rel="apple-touch-icon"
			sizes="180x180"
			href="/back/vendors/images/zhapavicon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/back/vendors/images/zhapavicon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/back/vendors/images/zhapavicon.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<style>
		html{
			cursor: url('/assets/juancursor.png'), auto;
			height: 100%
		}
	</style>
	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-white" style="box-shadow: 0px 15px 50px rgba(0, 0, 0, 0.1);">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="/back/vendors/images/zhalogo.png" alt="dashboard" class="dark-logo" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
		
				<div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: ">
					<ul class="navbar-nav">
						<li class="nav-item @if(request()->is('dashboard-petugas')) active @endif">
							<a class="nav-link" href="/dashboard-petugas">
								<span class="micon bi bi-house-fill"></span>
							</a> 
						</li>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li class="nav-item @if(request()->is('pelanggan-list')) active @endif">
							<a class="nav-link" href="/pelanggan-list">
								<span class="micon bi bi-basket2-fill"></span>
							</a>
						</li>

						<li class="nav-item" style="margin-left: 950px">
							<a class="nav-link" href="logout">
							<b>	<span class="micon bi bi-box-arrow-right"></span></b>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		

		<!-- Isi konten -->
		@yield('content')

		<!-- js -->
		<script src="/back/vendors/scripts/core.js"></script>
		<script src="/back/vendors/scripts/script.min.js"></script>
		<script src="/back/vendors/scripts/process.js"></script>
		<script src="/back/vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="/back/vendors/scripts/dashboard3.js"></script>
	</body>
</html>
