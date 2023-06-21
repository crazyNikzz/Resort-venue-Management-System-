<!-- <!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <style type="text/css">
        body {
            background-color: brown;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>Bookings</h1>
    <table>
        <tr>
            <th>User Email</th>
            <th>Venue Location</th>
            <th>Start Date & Time</th>
            <th>End Date & Time</th>
            <th>Event Type</th>
        </tr>
        <?php
            include "db.php"; // include database connection

            $q = "SELECT * FROM venue1 ORDER BY stDate, sTime ASC"; // query to select all bookings in ascending order of start date and time
            $result = $mysqli->query($q);

            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['location']."</td>";
                echo "<td>".$row['stDate']." ".$row['sTime']."</td>";
                echo "<td>".$row['enDate']." ".$row['eTime']."</td>";
                echo "<td>".$row['eventType']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
 -->


 <!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <style type="text/css">
        body {
            background-color: brown;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>Bookings</h1>
    <div>
        <label for="booking-filter">Filter:</label>
        <select id="booking-filter">
            <option value="all">All Bookings</option>
            <option value="past">Past Bookings</option>
            <option value="upcoming">Upcoming Bookings</option>
        </select>
    </div>
    <table id="booking-table">
        <tr>
            <th>User Email</th>
            <th>Venue Location</th>
            <th>Start Date & Time</th>
            <th>End Date & Time</th>
            <th>Event Type</th>
        </tr>
        <?php
            include "db.php"; // include database connection

            $q = "SELECT * FROM venue1 ORDER BY stDate, sTime ASC"; // query to select all bookings in ascending order of start date and time
            $result = $mysqli->query($q);

            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['location']."</td>";
                echo "<td>".$row['stDate']." ".$row['sTime']."</td>";
                echo "<td>".$row['enDate']." ".$row['eTime']."</td>";
                echo "<td>".$row['eventType']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <script>
        const bookingFilter = document.querySelector('#booking-filter');
        const bookingTable = document.querySelector('#booking-table');
        const rows = bookingTable.querySelectorAll('tr');

        bookingFilter.addEventListener('change', (event) => {
            const selectedValue = event.target.value;
            const currentDate = new Date();

            rows.forEach((row, index) => {
                if (index === 0) {
                    return;
                }

                const dateParts = row.querySelector('td:nth-child(3)').textContent.split(' ');
                const eventDate = new Date(dateParts[0] + 'T' + dateParts[1]);

                if (selectedValue === 'all') {
                    row.style.display = '';
                } else if (selectedValue === 'past' && eventDate >= currentDate) {
                    row.style.display = 'none';
                } else if (selectedValue === 'upcoming' && eventDate < currentDate) {
                    row.style.display = 'none';
                } else {
                    row.style.display = '';
                }
            });
        });
    </script>
</body>
</html>
