<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Asbryantara</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu 4</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-3">


        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Cat 1</a>
                  </li>
                  <li>
                    <a href="#">Cat 2</a>
                  </li>
                  <li>
                    <a href="#">Cat 3</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Blog Entries Column -->
      <div class="col-md-9">

        <h1 class="my-4">Judul
          <small>Sub Judul</small>
        </h1>

            <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> ..</div>
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            Nomor
                        </th>
                        <th>
                            Username
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Comments
                        </th>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                    $koneksi = mysqli_connect('localhost','root','','belajar');
                    $que="SELECT posts.title,users.username,comments.comment 
                  FROM `posts` JOIN users on posts.createdBy=users.id JOIN comments on comments.postId=posts.id 
                  WHERE posts.id ='1'";
                    $result=mysqli_query($koneksi,$que);
                    $no=1;
                    while ($kolom_db = mysqli_fetch_assoc($result) ) {?>
                    <tr class="active">
                      <td class="align-center"><?=$no++;?></td>
                        <td><?php echo $kolom_db['username'];?></td>
                        <td><?php echo $kolom_db['title'];?></td>
                        <td><?php echo $kolom_db['comment'];?></td>
                    </tr>
                   <?php

              };?>
                </tbody>
            </table>
        </div>


        <!-- Pagination -->
          <!-- <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul> -->

        </div>

        <!-- Sidebar Widgets Column -->
        
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark" style="margin-top: auto">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Ardyan Sukma Bryantara 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  </html>