


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello World</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>

<body>
	<div class="card">
		<div class="card-body bg-dark">
			<h1 class="text-white text-center"><a href="index.php" >Create Insert & Delete to XML File Using PHP</a></h1>
		</div>
	</div><br>

	<div class="container">
<div class="row">
	<div class="col-md-6 offset-3">
		<?php if(@$_GET['m'] != ""){ ?>
		<div class="alert alert-<?php echo @$_GET['a'] ?> alert-dismissible fade show" role="alert">
			<strong><?php echo strtoupper(@$_GET['m']) ?></strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<?php } ?>
				<!-- Button to Open the Modal -->
		<button  class="btn btn-primary" data-toggle="modal" data-target="#myModal">
		Create Project
		</button><hr>

		<ul class="list-group">
			<?php 
			$xml = simplexml_load_file('projects.xml');
			foreach ($xml as $key => $value){ ?>

				<li class="list-group-item">
				<a href="<?php echo $value->url ?>"><?php echo $value->name ?> 
				<a class="btn btn-danger float-right" href="delete.php?delete=<?php echo $value->name ?>">Delete</a></a>
				</li>

			<?php } ?>
		</ul>
	</div>
	</div>
</div>


	<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Project</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      	<form action="create.php" method="POST">
      	Name:
        <input class="form-control" type="text" name="name"><br>
        Url:
        <input class="form-control" type="text" name="url"><br>
        <button class="btn btn-success" name="save">Save</button>
        </form>
      </div>

     

    </div>
  </div>
</div>
<br><br>
<div class="card">
	<div class="card-body bg-dark">
		<p class="text-center text-white">&#9400;Compyright Bek Naji</p>
	</div>
</div>
</body>
</html>
