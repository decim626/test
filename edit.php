<?php
include 'functions.php';
$db = include 'database/start.php';

$id = $_GET['id'];
$post = $db->getOne('posts',$id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="/update.php?id=" method = "POST">
                <input type="hidden" value ="<?php echo $post['id'];?>" name = "id">
                <div class="form group">
                    <label for="">Title</label>
                    <input type="text" name ="title" class = "form-control" value="<?php echo $post['title'];?>">
                </div>
                <div class="form group">
                    <button class="btn btn-warning">Edit Post</button>
                </div>    
          </form>
        </div>
    </div>
</div>
</body>
</html>