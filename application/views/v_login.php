<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wisata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/admin">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/admin">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/wisata">Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/akomodasi">Akomodasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/acara">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="GET" action="/wisata">
                <input name="cari" class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-sm btn-outline-success my-2 mr-sm-2" type="submit">Search</button>
            </form>
            <form class="form-inline my-2 my-lg-0">
                <a href="<?php echo site_url('login/logout') ?>" button class="btn btn-sm btn-outline-danger mr-sm-1" type="submit">Logout</a>
            </form>
        </div>
    </nav>
	
	<br>
	
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-sm-6">
				<h2>Form Login</h2>
				<?php echo validation_errors(); ?>
				<?php echo $this->session->flashdata('pesan_flash'); ?>
				<form action="<?php echo site_url('login/aksi') ?>" method="post">
					<div class="form-group">
						<label for="email" id="email">Email:</label>
						<input type="text" class="form-control" id="usr" name="email">
					</div>
					<div class="form-group">
						<label for="password" id="password">Password:</label>
						<input type="password" class="form-control" id="pwd" name="password">
					</div>
					<button type="submit" class="btn btn-success">Login</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
