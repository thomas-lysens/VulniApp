<?php if ($user_logged_in != false) { ?>
<head>
    <title>VulniApp - Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="./assets/css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<?php include_once('./components/header.php')?>
<main>
    <div class="container">
        <div class="form-frame">
            <form>
                <h2>Upload a File</h2>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
</main>
<?php include_once('./components/footer.php')?>
</body>
<?php } else {
	    header("Location: ./login");
	    exit();
}
?>
