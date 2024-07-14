<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection Progress</title>
    <link rel="stylesheet" type="text/css" href="esp-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Waste Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="collection.php">Collection</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="report.php">Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Logout</a>
        </li>
        </ul>
    </div>
  </nav>
    <div class="container mx-auto my-6 text-center ">
        <header class="header mx-auto">
            <h1>Collection Progress:</h1>
            <form id="updateForm" class="form-inline justify-content-center">
                <div class="form-group mb-2">
                    <label for="readingsCount" class="sr-only">Number of readings</label>
                    <input type="number" class="form-control" id="readingsCount" name="readingsCount" min="1" placeholder="Number of readings (e.g., 20)">
                </div>
                <button type="submit" class="btn btn-primary mb-2 ml-2">UPDATE</button>
            </form>
        </header>
        <div class="text-center mt-4">
            <h2>View Latest Readings</h2>
            <table class="table table-bordered table-striped mx-auto" id="tableReadings">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sensor</th>
                        <th>Location</th>
                        <th>Volume %</th>
                        <th>Weight</th>
                        <th>Density (g/cm3)</th>
                        <th>Timestamp</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <!-- Table body content will be dynamically generated -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Initial fetch for default readingsCount
            fetchReadings(20); // Change this to your default number of readings

            // Handle form submission
            $('#updateForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission

                var readingsCount = $('#readingsCount').val(); // Get number of readings from input

                // Validate input
                if (!readingsCount || readingsCount < 1) {
                    alert('Please enter a valid number of readings.');
                    return;
                }

                // Fetch data from server based on readingsCount
                fetchReadings(readingsCount);
            });

            // Function to fetch readings from server (or static data for demo)
            function fetchReadings(readingsCount) {
                // Simulating data for demo purposes
                var fakeData = [];
                for (var i = 0; i < readingsCount; i++) {
                    fakeData.push({
                        id: i + 1,
                        sensor: 'Ultrasonic',
                        location: 'Ruiru',
                        volume: Math.floor(Math.random() * 200) + 1,
                        weight: 5000,
                        density: 0,
                        timestamp: '2023-11-06 13:00:00'
                    });
                }
                updateTable(fakeData); // Update table with fake data (replace with actual AJAX call)
            }

            // Function to update table with fetched data
            function updateTable(data) {
                var tableBody = $('#tableBody');

                // Clear existing table rows
                tableBody.empty();

                // Append new rows to table
                data.forEach(function(reading) {
                    var row = '<tr>';
                    row += '<td>' + reading.id + '</td>';
                    row += '<td>' + reading.sensor + '</td>';
                    row += '<td>' + reading.location + '</td>';
                    row += '<td>' + reading.volume + '</td>';
                    row += '<td>' + reading.weight + '</td>';
                    row += '<td>' + reading.density + '</td>';
                    row += '<td>' + reading.timestamp + '</td>';
                    row += '</tr>';
                    tableBody.append(row);
                });
            }
        });
    </script>
</body>
</html>
