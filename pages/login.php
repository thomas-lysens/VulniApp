<?php
require_once(__DIR__ . '/../db/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username)) {
        if (!empty($password)) {
            $query = "SELECT * FROM local.users WHERE username = '$username' AND password = '$password';";
            $db = new DB();
            $db = $db->connect('localhost', 'vulniapp', 'root', 'local', 3306);
	    $results = $db->query($query)->fetchAll();
	    if (!empty($results)) {
	    	setcookie("user", $results[0]["username"], 0);
	    	setcookie("user_logged_in", "true", 0);
	    	header("Location: ./");
	    	exit();
	    } else {
		    echo "Username or password did not match with anything what we have in our database";
	    }
        } else {
            printf("<h1>There is no password given. Please enter a password!</h1>");
        }
    } else {
        printf("<h1>There is no username given. Please enter an username!</h1>");
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
                    <form class="mb-4" method="POST" action="#">
                        <h1 class="h1 mb-3 fw-normal">Login</h1>
                        <div class="form-floating">
                            <input type="text" placeholder="Username" class="form-control" id="floatingInput" name="username">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" placeholder="password" class="form-control" id="floatingPassword" name="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
                    </form>
                    <p>Don't have an account? Contact our servicedesk and they will provide you with a login!</p>
                    <?php
                ?>
            </div>
        </div>
    </main>
    <?php include_once('./components/footer.php')?>
</body>
