<!doctype html>
<html>
    <head>
        <title>WT Lab 2a</title>
        <style>
            hr { width: 350px; height: 2px; background: #000000;}
            select{width: 50%; float:right  ;;}
        </style>
    </head>
    <body>
        <center>
            <fieldset style="width: 300px;">
                <legend align="center"><h1>Registration Form</h1></legend>
                <form method="post" action="lab2b.php">
                <h2 align="left">First Name: <input style="float:right;" type="text" name = "fname" size="20%" required></h2>
                <hr>
                <h2 align="left">Last Name: <input style="float:right;" type="text" name = "lname" size="20%" required></h2>
                <hr>
                <h2 align="left">Date of Birth: <input style="float:right;" type="date" name = "dob" required></h2>
                <hr>
                <h2 align="left">
                <label for="blood">Blood Type:</label>
                <select name="blood" id="blood" required>
                    <option disabled selected value> -- select an option -- </option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
                </h2>
                <hr>
                <h2 align="left">Telephone: <input style="float:right;" type="text" name = "tel" size="20%" required></h2>
                <hr>
                <h2 align="left">Email: <input style="float:right;" type="text" name = "mail" size="20%" required></h2>
                <hr>
                <h2 align="left">Password: <input style="float: right;" type="password" name = "pass" size="20%" required></h2>
                <hr>
                <button>Submit</button>
                </form>
            </fieldset>
        </center>
    </body>
</html>