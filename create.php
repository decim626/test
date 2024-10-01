<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
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
            <form action="store.php" method = "POST">
                <div class="form group">
                    <label for="">Title</label>
                    <input type="text" name ="title" class = "form-control">
                </div>
                <div class="form group">
                    <button class="btn btn-success">Add Post</button>
                </div>    
          </form>
        </div>
    </div>
</div>
</body>
</html>