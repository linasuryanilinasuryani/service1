<!DoCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Course</title>
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('soal')); ?>">soal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('institution.index')); ?>">institution</a>
                  </li>
                </ul>

              </div>
            </div>
          </nav>

        <div class="container">
            <div class="alert alert-info">Institution</div>

            data institution

        </div>
    </body>
</html>

<?php /**PATH D:\laragon\www\service1\resources\views/institution/index.blade.php ENDPATH**/ ?>