<head>
    <title>VulniApp - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="./assets/css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
    <?php include_once('./components/header.php')?>
    <main>
        <div class="px-4 py-5 my-5 text-center bg-white hero">
            <h1 class="display-5 fw-bold">VulniApp</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Welcome to our cloud storage application! If you need to save some files and/or media, but you don't have the space on your computer... upload it to our cloud! We'll keep it safe for you!</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-primary upload-btn" onclick="window.location.pathname = '/upload';">Upload Media</button>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('./components/footer.php')?>
</body>