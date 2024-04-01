

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="styles-r.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="container">
        <div class="title">Registration</div>
        <form action="connect.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name :</span>
                    <input type="text" class="text" name="fullname" placeholder="enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number :</span>
                    <input type="text" class="text" name="phone" placeholder="enter your phone number" required>
                </div>
                <div class="input-box">
                    <span class="details">Car Color :</span>
                    <input type="text" class="text" name="color" placeholder="enter your car color" required>
                </div>
                <div class="input-box">
                    <span class="details">Car License Number :</span>
                    <input type="text" class="text" name="license" placeholder="enter your license number" required>
                </div>
                <div class="input-box">
                    <span class="details">Car Engine Number :</span>
                    <input type="text" class="text" name="engine" placeholder="enter your engine number" required>
                </div>
                <div class="input-box">
                    <span class="details">Appointment date :</span>
                    <input type="date" id="date" name="date" placeholder="enter the date" required>
                </div>
                <div class="input-box">
                    <span class="details">Your Desire Mechanic Name:</span>
                    <input type="text" class="text" name="mechanic" placeholder="enter your desire mechanic name" required>
                    <select id="mechanic" name="mechanic" required>
                        <option value="mechanic1">Mechanic 1</option>
                        <option value="mechanic2">Mechanic 2</option>
                        <option value="mechanic3">Mechanic 3</option>
                        <option value="mechanic4">Mechanic 4</option>
                        <!-- Add more mechanics as needed -->
                    </select>
                </div>
            </div>
          
            <div class="gender-details">
                <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="male">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <input type="radio" name="gender" id="check value="Male">

                        <label for="female">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <input type="radio" name="gender" id="check" value="Female">

                        <label for="prefer_not_to_say">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>
                        <input type="radio" name="gender" id="check" value="Prefer not to say">
                    </div>
            </div>
            <div class="button">
                <input type="submit" value="register">
            </div>
        </form>
    </div>
</body>

</html>
