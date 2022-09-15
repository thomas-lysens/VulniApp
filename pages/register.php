<?php
require_once(__DIR__ . '/../db/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email)) {
        if (!empty($password)) {
            $query = "INSERT INTO local.users (email, password) VALUES ('$email', '$password');";
            $db = new DB();
            $db = $db->connect('localhost', 'root', 'root', 'local', 3306);
            $db->query($query);
            $db->close();
        } else {
            printf("<h1>There is no password given. Please enter a password!</h1>");
        }
    } else {
        printf("<h1>There is no email given. Please enter an email!</h1>");
    }
}
?>
<head>
    <title>VulniApp - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="./assets/css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<?php include_once('./components/header.php')?>
<main>
    <div class="container m-100">
        <div class="form-frame form-signin m-auto">
                <form class="mb-4" method="POST" action="register">
                    <h1 class="h1 mb-3 fw-normal">Register</h1>
                    <div class="form-floating">
                        <input type="email" placeholder="example@domain.com" class="form-control" id="floatingInput" name="email">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" placeholder="password" class="form-control" id="floatingPassword" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" class="w-100 btn btn-lg btn-primary">Register</button>
                </form>
                <p>Already have an account? <a href="/login">Login here!</a></p>
        </div>
    </div>
</main>
<?php include_once('./components/footer.php')?>
</body>