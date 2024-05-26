<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
</head>
<body>
	<h1> Buat Account Baru!</h1>
	<h2>Sign Up Form</h2>
	<form method="post" action ="{{ route('home') }}">
        @csrf
        <input type="text" name="first_name" placeholder="First Name"><br><br>
        <input type="text" name="last_name" placeholder="Last Name">
        <br><br>

        <label>Gender:</label><br></br>
        <input type="radio" name="gender" value="male">male <br>
        <input type="radio" name="gender" value="famale">famale <br>
        <input type="radio" name="gender" value="other">other <br></br>

        <label>nationality</label><br></br>
        <select name="nationality">
            <option value="indonesia">indonesia</option>
            <option value="Amerika">amerika</option>
        </select><br></br>

        <label>Langguage spoken:</label><br></br>
        <input type="checkbox" name="Langguage spoken" value="Bahasa indonesia"> Bahasa indonesia<br>
        <input type="checkbox" name="Langguage spoken" value="English"> English <br>
        <input type="checkbox" name="Langguage spoken" value="other"> other <br></br>

        <label>Bio:</label><br></br>
        <textarea name="massage"rows="10" cols="20"></textarea> <br>
        <input type="submit" value="sign up">
    </form>

</body>
</html>