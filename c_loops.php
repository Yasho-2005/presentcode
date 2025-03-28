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
        <?php include 'sidebar.php' ?>


        <div class="content">
            <h3>Introduction to Loops in C</h3>
            <p>Loops are used in programming to execute a block of code multiple times until a certain condition is met. <br>C provides three types of loops:</p>

            <p><b>✔ do-while loop -</b>  Executes the block <b>at least once</b>, then continues if the condition is true.</p>
            <p><b> ✔ while loop -</b> Executes a block of code as long <b>as the condition is true.</b></p>
            <p><b>✔ for loop - </b>Best for cases where the number of iterations is known beforehand.</p>
            <p><br></p>
            <p>Each loop type has its own use cases: 
                <br><br>

                --  Use <a href="c_do-while.php"><b>do-while</b></a> when you want the loop to execute at least once. <br>
                       --  Use <a href="c_while.php"><b>while</b></a> when you don’t know how many times the loop should run. <br>
                       --  Use <a href="c_for.php"><b>for</b></a> when the number of iterations is fixed.</p>

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



    <?php include 'includes/footer.php'; ?>

</body>



</html>