<?php
include ('connection.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="form">
        <form action="/action_page.php" target="_blank">
            <fieldset id="name">
                <legend>Name</legend>
                <div id="fname">
                    <label for="fname">First Name</label><br>
                    <input id="fname" type="text" name="fname" placeholder="First Name" required>
                </div>
                <div id="lname">
                    <label for="lname">Last Name</label><br>
                    <input id="lname" type="text" name="lname" placeholder="Last Name" required>
                </div>
            </fieldset>
            <div id="dob">
                <label for="dob">Date of birth</label>
                <input type="datetime-local" id="dob" name="dob" required>
            </div>
            <fieldset id="doc">
                <div id="document">
                    <label for="document">Upload Your Document's: </label>
                    <input type="file" id="document" name="document" required>
                </div>
                <div id="marks">
                    <label for="10classmark">10th grade score</label>
                    <input type="number" id="10classmark" name="10classmark" min="0" max="100">
                </div>
            </fieldset>
            <div id="fcolor">
                <label for="fcolor">Favourite Color</label>
                <input type="color" id="fcolor" name="fcolor">
            </div>
            <div id="emailaddress">
                <label for="email">Email Address</label><br>
                <input id="email" type="email" name="email" placeholder="email@domain.com" required>
            </div>
            <fieldset id="company">
                <legend>Company</legend>
                <div id="cname">
                    <label for="cname">Company Name</label><br>
                    <input id="cname" type="text" name="cname" placeholder="Company Name" required>
                </div>
                <div id="caddress">
                    <label for="caddress">Company Address</label>
                    <textarea name="caddress" id="caddress" placeholder="address..."></textarea>
                </div>
            </fieldset>
            <div id="pno_cn">
                <div id="pnumber">
                    <label for="pnumber">Phone Number</label><br>
                    <input id="pnumber" type="tel" name="pnumber" placeholder="123-456-789"
                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
                </div>
                <div id="country">
                    <label for="country">Country</label>
                    <select name="country" id="country">
                        <option value="" disabled selected>Choose your Country</option>
                        <option value="usa">USA</option>
                        <option value="india">India</option>
                        <option value="russia">Russia</option>
                        <option value="china">China</option>
                        <option value="canada">Canada</option>
                        <option value="europe">Europe</option>
                    </select>
                </div>
            </div>
            <div id="address">
                <label for="address">Address</label>
                <textarea name="address" id="address" rows="3" placeholder="address..."></textarea>
            </div>
            <div id="linkedin">
                <label for="linkedin">Linkedin url</label>
                <input type="url" id="linkedin" name="linkedin">
            </div>
            <div id="password">
                <label for="password">Set a password</label>
                <input type="password" id="password" name="password">
            </div>
            <div id="terms">
                <input type="checkbox" name="terms" id="terms" required>
                <label for="terms">I agree to all terms and conditions</label>
            </div>
            <div id="rating">
                <p style="background-color: rgba(172, 164, 180, 0.8);">Rating</p>
                <input type="radio" id="1" name="rating" class="rate">
                <label for="1">1</label>

                <input type="radio" id="2" name="rating" class="rate">
                <label for="2">2</label>

                <input type="radio" id="3" name="rating" class="rate">
                <label for="3">3</label>

                <input type="radio" id="4" name="rating" class="rate">
                <label for="4">4</label>

                <input type="radio" id="5" name="rating" class="rate">
                <label for="5">5</label>
            </div>
            <br>
            <div id="subdiv">
                <input type="submit" id="submit" class="subres">
                <input type="image" src='https://freepngimg.com/thumb/submit_button/25769-3-submit-button-image.png'
                    alt="submit image" width="40" height="20" id="submitimage" class="subres">
                <input type="reset" id="reset" class="subres">
            </div>
        </form>
    </div>
</body>

</html>

