<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard - Taskify</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        #admin-dashboard {
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
	#sidebar a{
            text-decoration: none;
            margin: 10px 0px 20px 10px;
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

        #header h1 {
            font-size: 24px;
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

        /* Card Styles */
        .card {
            margin-bottom: 20px;
        }

        /* Modal Styles */
        .modal-dialog {
            max-width: 80%;
        }
        
        .task-details-popup .modal-dialog {
            max-width: 50%;
            margin: 10% auto;
        }

        .task-details-popup .modal-content {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.9);
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
        }

        .tasks-list li .task-details {
            flex: 1;
            margin-right: 10px;
        }

        .tasks-list li .task-actions {
            flex-shrink: 0;
        }


        /* Styling for "All Tasks" */
        #all-tasks-list, #completed-tasks-list{
            list-style: none;
        }
        #all-tasks-list li, #completed-tasks-list li {
            background-color: #d9edf7;
            border: 1px solid #bce8f1;
            padding: 20px;
        }

        /* Styling for "Completed Tasks" */
        #completed-tasks-list li {
            background-color: #dff0d8;
            border: 1px solid #d6e9c6;
        }
    </style>
</head>

<body>
    <div id="admin-dashboard" class="d-flex">
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
                <h1 class="m-0">Admin Dashboard</h1>
            </div>

            <!-- "Create New Task" Section -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create New Task</h5>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#task-popup">Create Task</button>
                </div>
            </div>

            <!-- Row with Two Columns -->
            <div class="row">
                <!-- Column for "All Tasks" -->
                <div class="col-md-6">
                    <div class="dashboard-section">
                        <h2 class="section-heading">All Tasks</h2>
                        <!-- All Tasks content goes here -->
                        <ul id="all-tasks-list">
                            <li>dedsefdd</li>
                        </ul>
                    </div>
                </div>

                <!-- Column for "Completed Tasks" -->
                <div class="col-md-6">
                    <div class="dashboard-section">
                        <h2 class="section-heading">Completed Tasks</h2>
                        <!-- Completed Tasks content goes here -->
                        <ul id="completed-tasks-list">
                            <li>wadawdwa</li>
                        </ul>
                    </div>
                </div>
            </div>

            

            <!-- Task Popup -->
            <div class="modal" id="task-popup">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create New Task</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!-- Task Form -->
                            <form id="task-form">
                                <div class="form-group">
                                    <label for="task-title">Task Title</label>
                                    <input type="text" class="form-control" id="task-title" required>
                                </div>
                                <div class="form-group">
                                    <label for="task-description">Task Description</label>
                                    <textarea class="form-control" id="task-description" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="task-assignee">Task Assignee</label>
                                    <input type="text" class="form-control" id="task-assignee" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Create Task</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal task-details-popup" id="task-details-popup" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Task Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h2 id="popup-task-name">Task Name</h2>
                            <p id="popup-task-description">Task Description</p>
                            <p id="popup-task-assignee">Assigned to: Assignee Name</p>
                            <button id="delete-task-btn" class="btn btn-danger">Delete Task</button>
                            <button id="complete-task-btn" class="btn btn-success">Complete Task</button>
                        </div>
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
        // Function to handle form submission for creating a new task
        document.getElementById("task-form").addEventListener("submit", function (event) {
            event.preventDefault();
            const taskTitle = document.getElementById("task-title").value;
            const taskDescription = document.getElementById("task-description").value;
            const taskAssignee = document.getElementById("task-assignee").value;

            // Create task element
            const taskElement = document.createElement("li");
            taskElement.textContent = `${taskTitle} - Assigned to: ${taskAssignee}`;

            // Add task to the "All Tasks" list
            document.getElementById("all-tasks-list").appendChild(taskElement);

            // Hide the task popup
            $('#task-popup').modal('hide');
        });

        // Function to show the task details popup
        function showTaskDetailsPopup(taskName, taskDescription, taskAssignee) {
            const taskDetailsPopup = document.getElementById("task-details-popup");
            const popupTaskName = document.getElementById("popup-task-name");
            const popupTaskDescription = document.getElementById("popup-task-description");
            const popupTaskAssignee = document.getElementById("popup-task-assignee");

            popupTaskName.textContent = taskName;
            popupTaskDescription.textContent = taskDescription;
            popupTaskAssignee.textContent = "Assigned to: " + taskAssignee;

            taskDetailsPopup.style.display = "flex";
        }

        // Function to hide the task details popup
        function hideTaskDetailsPopup() {
            const taskDetailsPopup = document.getElementById("task-details-popup");
            taskDetailsPopup.style.display = "none";
        }

        // Attach event listener to the "All Tasks" list to show details popup
        document.getElementById("all-tasks-list").addEventListener("click", function (event) {
            const targetTask = event.target;
            if (targetTask.tagName === "LI") {
                const taskName = targetTask.textContent.split(" - ")[0];
                const taskAssignee = targetTask.textContent.split(": ")[1];
                showTaskDetailsPopup(taskName, "Task Description", taskAssignee);
            }
        });

        // Attach event listener to the "Delete Task" button in the details popup
        document.getElementById("delete-task-btn").addEventListener("click", function () {
            // Delete the task from the "All Tasks" list
            const taskDetailsPopup = document.getElementById("task-details-popup");
            const taskName = document.getElementById("popup-task-name").textContent;
            const taskElement = Array.from(document.getElementById("all-tasks-list").children)
                .find((element) => element.textContent.includes(taskName));
            taskElement.remove();

            // Hide the task details popup
            hideTaskDetailsPopup();
        });

        // Attach event listener to the "Complete Task" button in the details popup
        document.getElementById("complete-task-btn").addEventListener("click", function () {
            // Move the task to the "Completed Tasks" list
            const taskDetailsPopup = document.getElementById("task-details-popup");
            const taskName = document.getElementById("popup-task-name").textContent;
            const taskElement = Array.from(document.getElementById("all-tasks-list").children)
                .find((element) => element.textContent.includes(taskName));

            // Remove the task from "All Tasks" list
            taskElement.remove();

            // Add the task to "Completed Tasks" list
            document.getElementById("completed-tasks-list").appendChild(taskElement);

            // Hide the task details popup
            hideTaskDetailsPopup();
        });
    </script>
</body>

</html>
