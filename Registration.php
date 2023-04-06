<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Registration.css">
    <title>Form</title>
</head>

<body>

    <section>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Age</th>
                    <th>Education</th>
                    <th>Reason</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php $a = 0; $a++; echo $a ?></td>
                    <td><?php echo $_POST["FullName"] ?></td>
                    <td><?php echo $_POST["Email"] ?></td>
                    <td><?php echo $_POST["PhoneNumber"] ?></td>
                    <td><?php echo (isset($_POST["age"])) ?></td>
                    <td><?php echo $_POST["degree"] ?></td>
                    <td><?php echo $_POST["Reason"] ?></td>
                    <td><?php echo $_POST["messege"] ?></td>
                </tr>
            </tbody>
        </table>
        <?php
        /*echo "<table border ='1'>";
        echo "<tr><th>Full Name:</th><th>Email</th><th>Phone Number</th><th>Age</th><th>Education</th>
        <th>Reason for Appointment</th><th>Message</th></tr>";
        echo "<tr><td>" . $_POST["FullName"] . "</td><td>" . $_POST["Email"] . "</td>
            <td>" . $_POST["PhoneNumber"] . "</td><td>" . $_POST["age"] . "</td><td>" . $_POST["degree"] . "</td>
            <td>" . $_POST["Reason"] . "</td><td>" . $_POST["messege"] . "</td>
            </tr>";
        echo "</table>";*/
        ?>
    </section>

</body>

</html>