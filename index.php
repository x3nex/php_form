<html>
<head>
    <meta charset="UTF-8">
    <title>Form submit</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.css">

</head>
<body>

    <div class="container">
        <form action="submission.php" method="POST">
        <label class="label">Name</label>
        <p class="control">
        <input class="input" type="text" placeholder="Please enter your name" name="name" value="">
        </p>
        <label class="label">Username</label>
        <p class="control has-icon has-icon-right">
            <input class="input is-success" type="text" placeholder="Please enter your user name" name="userName" value="">
            <span class="icon is-small">
                <i class="fa fa-check"></i>
            </span>
            <span class="help is-success">This username is available</span>
        </p>
        <label class="label">Email</label>
        <p class="control has-icon has-icon-right">
            <input class="input is-danger" type="text" placeholder="Please enter your e-mail" name="eMail" value="">
            <span class="icon is-small">
                <i class="fa fa-warning"></i>
            </span>
            <span class="help is-danger">This email is invalid</span>
        </p>
        <label class="label">Please select your country</label>
        <p class="control">
            <span class="select">
                <select name="country">
                    <option>Select country</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Bosnia">Bosnia</option>
                </select>
            </span>
        </p>
        <p class="control">
            <label class="radio">
                <input type="radio" name="gender" value="Male">
                Male
            </label>
            <label class="radio">
                <input type="radio" name="gender" value="Female">
                Female
            </label>
            <p class="control">
            <label class="checkbox">
                <input type="hidden" name="terms" value="Not Checked">
                <input type="checkbox" name="terms" value="Checked">
                I accept the terms and conditions.
            </label>
        </p>
        </p>
        <div class="control is-grouped">
            <p class="control">
                <button class="button is-primary">Submit</button>
            </p>
            <p class="control">
                <button class="button is-link">Cancel</button>
            </p>
        </div>
        </form>
    </div>




</body>
</html>