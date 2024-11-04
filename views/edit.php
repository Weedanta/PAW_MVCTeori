<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1 class="page-title text-center mb-20">Edit Post</h1>
            <form action="?c=Post&m=edit_process" method="post">
                <input type="hidden" name="id" value="<?php echo $post->id; ?>">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" value="<?php echo $post->title; ?>" required autofocus>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea id="content" name="content" required><?php echo $post->content; ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">Update Post</button>
                <a href="?c=Post" class="btn btn-edit mt-20" style="width: 100%;">Back to Posts</a>
            </form>
        </div>
    </div>
</body>

</html>