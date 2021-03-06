<?php include("../../path.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity
        crossorigin="anonymous">

        <!-- google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
        <script data-ad-client="ca-pub-5091783457643642" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <!-- custom styling-->
        <link rel="stylesheet" href="../../assets/css/style.css">

        <!-- admin styling-->
        <link rel="stylesheet" href="../../assets/css/admin.css">


    <title>Admin Section - Edit Post</title>
</head>

<body>

       <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!--Admin page wrapper -->
    <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

          <!-- Admin Content -->
          <div class="admin-content">
              <div class="button-group">
                  <a href="create.php" class="btn btn-big">Add Post</a>
                  <a href="index.php" class="btn btn-big">Manage Post</a>
              </div>
              <div class="content">
                <h2 class="page-title">Edit Posts</h2>
                <form action="create.html" method="post">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" class="text-input">
                    </div>
                    <div>
                            <label>Body</label>
                            <textarea name="body" id="body"></textarea>
                        </div>
                        <div>
                            <label>File</label>
                            <input type="file" name="File" class="text-input">
                        </div>
                        <div>
                            <label>Topic</label>
                            <select name="topic" class="text-input">
                                    <option value="Poems">Poems</option>
                                    <option value="Quotes">Quotes</option>
                                    <option value="Fiction">Fiction</option>
                                    <option value="Biograpy">Biograpy</option>
                                    <option value=" Motivation"> Motivation</option>
                                    <option value="Inspiration">Inspiration</option>
                                    <option value="Life Lesson">Life Lesson</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-big">Update Post</button>
                        </div>
                </form>
              </div>
          </div>
          <!-- // Admin Content -->



    </div>
    <!--// page wrapper -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--  Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>