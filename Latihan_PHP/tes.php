<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman_1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <h1>COLLEGE ADMISSIONS FORM</h1>
    <h2>Enter your admission information below</h2>
    <form action="process.php" method="POST">
        <div class="mb-5">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="middle_name">Middle Name:</label>
            <input type="text" id="middle_name" name="middle_name">

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <div class="mb-5">
            <label for="dob_month">Date of Birth (Month):</label>
            <select id="dob_month" name="dob_month" required>
                <option value="">Select Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">Agust</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>

            </select>

            <label for="dob_date">Date of Birth (Date):</label>
            <input type="number" id="dob_date" name="dob_date" min="1" max="31" required>

            <label for="dob_year">Date of Birth (Year):</label>
            <input type="number" id="dob_year" name="dob_year" min="1900" max="2023" required>
        </div>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <label for="country">Country of Origin:</label>
        <input type="text" id="country" name="country" required>

        <div class="mb-5">
            <label for="telephone">Telephone Number:</label>
            <input type="tel" id="telephone" name="telephone" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <label for="address">Home Address:</label>
        <textarea id="address" name="address" required></textarea>

        <label for="emergency_contact">Emergency Contact:</label>
        <input type="text" id="emergency_contact" name="emergency_contact" required>

        <label for="relationship">Relationship:</label>
        <input type="text" id="relationship" name="relationship" required>

        <label for="additional_language">Additional Language Proficiency:</label>
        <input type="text" id="additional_language" name="additional_language">

        <input type="submit" value="Submit">
    </form>
</body>

</html>