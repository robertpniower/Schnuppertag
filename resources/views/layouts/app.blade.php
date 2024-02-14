<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobverwaltung</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="navbar-brand" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/users">Users</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/jobs">Jobs</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/company">Company</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="/category">Category</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="/users/register">Register</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content') 
    </div>
    <footer class="footer m-3">
        <div class="container">
            <span class="text-muted">© 2024 Career.NET</span>
        </div>    
    </footer> 
    </body>
</html>