<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="page-title">Blog Posts</h1>
            <a href="?c=Post&m=create" class="btn btn-primary">Create New Post</a>
        </div>

        <div class="posts-container">
            <?php if (!$posts->num_rows): ?>
                <p class="text-center">No posts available.</p>
            <?php else: ?>
                <?php while ($post = $posts->fetch_object()): ?>
                    <div class="post-item">
                        <h3 class="post-title"><?php echo $post->title; ?></h3>
                        
                        <div class="post-actions">
                            <a href="?c=Post&m=edit&id=<?php echo $post->id; ?>" class="btn btn-edit">Edit</a>
                            <form action="?c=Post&m=delete" method="post" style="display: inline;">
                                <input type="hidden" name="id" value="<?php echo $post->id; ?>">
                                <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </div>

                        <p class="post-content"><?php echo $post->content; ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>