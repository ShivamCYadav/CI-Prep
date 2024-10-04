<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Add Employee</h2>

    <!-- Display success message if available -->
    <?php if(isset($message)): ?>
        <div style="color: green;">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <form action="/employee/save" method="post">
        <?= csrf_field() ?> <!-- CSRF protection -->

        <label for="employee_id">Employee ID:</label><br>
        <input type="text" id="employee_id" name="employee_id"><br><br>

        <label for="employee_name">Employee Name:</label><br>
        <input type="text" id="employee_name" name="employee_name"><br><br>

        <label for="employee_email">Employee Email:</label><br>
        <input type="email" id="employee_email" name="employee_email"><br><br>

        <label for="employee_address">Employee Address:</label><br>
        <input type="text" id="employee_address" name="employee_address"><br><br>

        <label for="employee_dob">Employee Date of Birth:</label><br>
        <input type="date" id="employee_dob" name="employee_dob"><br><br>

        <label for="employee_phone_number">Employee Phone Number:</label><br>
        <input type="text" id="employee_phone_number" name="employee_phone_number"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
