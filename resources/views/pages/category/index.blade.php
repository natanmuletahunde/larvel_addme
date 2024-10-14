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

/* Body settings */
body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f6f9; /* Background color */
    font-family: Arial, sans-serif;
}

/* Centered panel styling */
.centered-panel {
    background-color: white;
    padding: 30px;
    width: 500px; /* Set a width for the admin panel */
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Add a light shadow for depth */
    border-radius: 8px; /* Slightly rounded corners */
}

/* Profile header */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 10px;
    border-bottom: 1px solid #ddd; /* Separator line */
}

.header h2 {
    margin: 0;
    font-size: 24px;
    color: #343a40; /* Text color */
}

.profile-name {
    font-weight: bold;
}

/* Content area */
main {
    margin-top: 20px;
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
                    <span class="profile-name">Admin Name</span>
                </div>
            </div>
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
