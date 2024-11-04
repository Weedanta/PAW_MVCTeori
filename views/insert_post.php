<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1 class="page-title text-center mb-20">Create New Post</h1>
            <form action="?c=Post&m=create_process" method="post">
                <input type="hidden" name="id">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" required autofocus>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea id="content" name="content" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">Create Post</button>
            </form>
        </div>
    </div>
</body>

</html>