<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer</title>
</head>
<body>
    <h1>Create new Freelancer</h1>

    <form action="/freelancers" method="post">
        @csrf
        name: <input type="test" name="name"><br />
        email: <input type="test" name="email"><br />
        phone: <input type="test" name="phone"><br />
        address: <input type="test" name="address"><br />
        skills: <input type="test" name="skills"><br />
        profile: <input type="test" name="profile"><br />
        currency: <select name ="currency">
            <option value="GBP" selected>GBP</option>
            <option value="EUR">EUR</option>
            <option value="USD">USD</option>
        </select><br />
        rate: <input type="number" name="rate" value="75"><br />
        <input type="submit" value="save">
    </form>

    <a href="/freelancers">Freelancers Lists</a>

</body>
</html>