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
        name: <input type="test" name="name" value="Iftakher Ahammed"><br />
        email: <input type="test" name="email" value="iahammed@gmail.com"><br />
        phone: <input type="test" name="phone" value="07707492700"><br />
        address: <input type="test" name="address" value="11 Valentines Road"><br />
        skills: <input type="test" name="skills" value="PHP, PYTHON"><br />
        profile: <input type="test" name="profile" value="Web Developer"><br />
        currency: <input type="test" name="currency" value="EUR"><br />
        rate: <input type="test" name="rate" value="75"><br />
        <input type="submit" value="save">
    </form>

    <a href="/freelancers">Home</a>

</body>
</html>