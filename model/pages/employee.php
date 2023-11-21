<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Dashboard - Taskify</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        #employee-dashboard {
            display: flex;
        }

        #sidebar {
            width: 250px;
            background-color: #343a40;
            color: #F5F6FF;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }

        #main-content {
            margin-left: 250px;
            padding: 20px;
        }

        #header {
            height: 80px;
            background-color: #5C03A8;
            color: #F5F6FF;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .dashboard-section {
            background-color: #FFFFFF;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .dashboard-section h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .tasks-list {
            list-style-type: none;
            padding: 0;
        }

        .tasks-list li {
            border-radius: 4px;
            margin-bottom: 10px;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer; /* Add cursor pointer for clickable effect */
        }

        .tasks-list li:hover {
            background-color: #f5f5f5; /* Add background color on hover */
        }

        .tasks-list li .task-details {
            flex: 1;
            margin-right: 10px;
        }

        .tasks-list li .task-actions {
            flex-shrink: 0;
        }

    </style>
</head>

<body>
    <div id="employee-dashboard" class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-dark text-light">
            <a href="#" class="text-light d-block p-3">Home</a>
            <a href="#" class="text-light d-block p-3">Chat</a>
            <a href="#" class="text-light d-block p-3">Summary</a>
            <a href="#" class="text-light d-block p-3">Calendar</a>
            <a href="#" class="text-light d-block p-3">Notification</a>
            <a href="#" class="text-light d-block p-3">Profile</a>
	    <a href="/model/pages/login.html" class="text-light d-block p-3">Logout</a>
        </div>

        <!-- Main Content -->
        <div id="main-content" class="w-100">
            <!-- Header -->
            <div id="header" class="bg-primary text-light p-3">
                <h1 class="m-0">Employee Dashboard</h1>
            </div>

            <!-- Row with Two Columns -->
            <div class="row">
                <!-- Column for "My Projects" -->
                <div class="col-md-6">
                    <div class="dashboard-section">
                        <h2 class="section-heading">My Projects</h2>
                        <ul id="my-projects-list" class="tasks-list">
                            <li>
                                <div class="task-details">
                                    Project 1
                                </div>
                                <div class="task-actions">
                                    <button class="btn btn-success" onclick="markTaskAsCompleted(this)">Mark Completed</button>
                                </div>
                            </li>
                            <!-- Add more projects as needed -->
                        </ul>
                    </div>
                </div>

                <!-- Column for "Completed Tasks" -->
                <div class="col-md-6">
                    <div class="dashboard-section">
                        <h2 class="section-heading">Completed Tasks</h2>
                        <ul id="completed-tasks-list" class="tasks-list">
                            <!-- Completed tasks will be added dynamically -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        // Function to mark a task as completed
        function markTaskAsCompleted(button) {
            const taskElement = button.closest('li');
            const taskName = taskElement.querySelector('.task-details').textContent;

            // Move the task from "My Projects" to "Completed Tasks"
            taskElement.remove();
            const completedTaskElement = document.createElement('li');
            completedTaskElement.textContent = taskName;
            document.getElementById('completed-tasks-list').appendChild(completedTaskElement);

            // Optionally, you can add additional logic such as updating the server, etc.
        }
    </script>
</body>

</html>
