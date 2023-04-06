<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Index.css">
    <title>Form</title>
</head>

<body>
    <!--الفورم المستخدم هو فورم تم كتابته ضمن تكليف لمساق ويب 1 خلال الفصل السابق-->
    <section class="form">
        <form action="Registration.php" method="post">
            <div class="form-title">
                <h1 class="test-form">
                    Test Form
                </h1>
            </div>
            <div class="main-form">
                <div class="first">
                    <div class="section inputs">
                        <div class="input">
                            <label for="">Full Name</label>
                            <input type="text" name="FullName" placeholder="Enter Your Full Name">
                        </div>

                        <div class="input">
                            <label for="">Email</label>
                            <input type="email" name="Email" placeholder="Enter Your Email">
                        </div>

                        <div class="input">
                            <label for="PhoneNumber">Phone Number</label>
                            <input type="text" name="PhoneNumber" placeholder="Enter Your Phone Number">
                        </div>
                    </div>

                    <div class="section radios">
                        <h3>Age</h3>
                        <div>
                            <input class="radio" type="radio" id="18" name="age">
                            <label for="18">> 18</label>
                        </div>
                        <div>
                            <input class="radio" type="radio" id="35" name="age">
                            <label for="35">18-35</label>
                        </div>

                        <div>
                            <input class="radio" type="radio" id="35+" name="age">
                            <label for="35+">35+</label>
                        </div>
                    </div>

                    <div class="section messege">
                        <label for="messege">
                            <h3>Enter a Message</h3>
                        </label>
                        <textarea name="messege" id="messege" placeholder="Enter a Messege" rows="1"></textarea>
                    </div>

                </div>
                <div class="second">

                    <div class="section checkbox">
                        <h3>Education</h3>
                        <div>
                            <input type="checkbox" id="1" name="degree">
                            <label for="1">Hight School</label>
                        </div>
                        <div>
                            <input type="checkbox" id="2" name="degree">
                            <label for="2">Some College</label>
                        </div>
                        <div>
                            <input type="checkbox" id="3" name="degree">
                            <label for="3">Assocaite's Degree</label>
                        </div>
                        <div>
                            <input type="checkbox" id="4" name="degree">
                            <label for="4">Bachelor's Degree</label>
                        </div>
                    </div>
                    <div class="section date">
                        <label for="date">
                            <h3>Appointment Date</h3>
                        </label>
                        <input type="date" name="Date" id="date">
                    </div>

                    <div class="section reason">
                        <label for="Reason">
                            <h3>Reason for Appointment</h3>
                        </label>
                        <select name="Reason" id="Reason">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="0" selected>Slect Your Reason</option>
                        </select>
                    </div>

                    <div class="submit">
                        <input type="submit" name="Submit" value="Submit">
                    </div>
                </div>
            </div>

        </form>
    </section>
</body>

</html>