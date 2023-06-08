<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
</head>

<body>
    <h1>Buat Akun Baru</h1>
    <h3>Sign Up Form</h3>

    <form action="/register" method="POST">
        @csrf
        <p>First Name:</p>
        <input type="text" name="first_name">
        <br>
        <p>Last Name:</p>
        <input type="text" name="last_name">
        <p>Gender:</p>
        <input type="radio" name="gender" value="Male"><label for="">Male</label> <br>
        <input type="radio" name="gender" value="Female"><label for="">Female</label><br>
        <input type="radio" name="gender" value="Other"><label for="">Other</label><br>
        <p>Nationality:</p>
        <select name="nationality">
            <option value="indonesia">Indonesia</option>
            <option value="singapura">Singapura</option>
            <option value="thailand">Thailand</option>
        </select>
        <p>Language Spoken:</p>
        <input type="checkbox" name="languages[]" value="Bahasa Indonesia"><label for="">Bahasa Indonesia</label> <br>
        <input type="checkbox" name="languages[]" value="English"><label for="">English</label><br>
        <input type="checkbox" name="languages[]" value="Other"><label for="">Other</label><br>
        <p>Bio:</p>
        <textarea name="bio" cols="30" rows="10"></textarea> <br>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>
