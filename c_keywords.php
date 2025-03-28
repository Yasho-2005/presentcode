<style type="text/css">
    <?php include 'style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C-tutorial</title>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sidebar.php'?>


        <div class="content">
            <h3>Keywords in C</h3>
            <p><b>Keywords</b> in C are reserved words that have a predefined meaning and cannot be used as variable names, function names, or identifiers. These keywords help define the structure and behavior of a C program.</p>
            <p><img src="img/keywords-removebg-preview.png" alt="" height="300px" width="700px"></p>

            </div>

        
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".dropdown-toggle").forEach(item => {
                item.addEventListener("click", function(e) {
                    e.preventDefault();
                    let dropdownMenu = this.nextElementSibling;
                    dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
                });
            });
        });
    </script>


<?php include 'includes/footer.php';?>

</body>

</html>