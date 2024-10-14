<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Link your CSS file here -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<style>
    /* admin.css */

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f6f9;
        margin: 0;
    }

    .container {
        display: flex;
        min-height: 100vh;
        flex-direction: row;
    }

    /* Sidebar styles */
    .sidebar {
        width: 200px;
        background-color: #343a40;
        padding: 20px;
        display: flex;
        flex-direction: column;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .sidebar ul li {
        margin: 20px 0;
    }

    .sidebar ul li a {
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 10px;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .sidebar ul li a:hover {
        background-color: #495057;
    }

    /* Content styles */
    .content {
        flex: 1;
        padding: 20px;
        background-color: #fff;
    }

    .content h1 {
        font-size: 24px;
    }

    /* Header styling for added profile section */
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #343a40;
        color: white;
        padding: 10px 20px;
    }

    .header .profile {
        display: flex;
        align-items: center;
    }

    .header .profile img {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    .header .profile-name {
        font-weight: bold;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }

        .sidebar {
            width: 100%;
            padding: 10px;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .content {
            padding: 10px;
        }

        .header {
            flex-direction: column;
            text-align: center;
        }

        .header h2 {
            margin-bottom: 10px;
        }

        .header .profile {
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .header h2 {
            font-size: 18px;
        }

        .sidebar ul li a {
            padding: 8px;
        }

        .content h1 {
            font-size: 20px;
        }
    }

</style>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
        
        <!-- Main content area -->
        <div class="content">
            <!-- Profile header -->
            <div class="header">
                <h2>Admin Panel</h2>
                <div class="profile">
                    <span class="profile-name">E-commerce</span>
                </div>
            </div>
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
