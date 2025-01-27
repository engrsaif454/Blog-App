<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BlogApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Post Detail -->
    <div class="container mt-5">
        <h1>Blog Post Title</h1>
        <p class="text-muted">Published on January 27, 2025 | by Author</p>
        <img src="https://via.placeholder.com/1200x400" class="img-fluid" alt="Post Image">
        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet ligula vitae felis convallis tempor. Integer venenatis orci eu eros facilisis, eget fermentum dui tempor. Integer sed ante felis. Vivamus sagittis, elit at pharetra sodales, velit augue laoreet urna, id rutrum tortor elit vel elit. Suspendisse potenti. Integer scelerisque felis eget gravida sodales...</p>
        
        <h4>Comments</h4>
        <form action="#" method="post">
            <div class="mb-3">
                <textarea class="form-control" rows="3" placeholder="Add a comment..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post Comment</button>
        </form>
        <div class="mt-4">
            <p><strong>John Doe:</strong> Great post! Very informative.</p>
            <p><strong>Jane Smith:</strong> I learned a lot from this. Thanks for sharing!</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 BlogApp. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
