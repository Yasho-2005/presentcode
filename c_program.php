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
            <h3>C Basic Program</h3>

            <div class="syntax-box">
                #inlcude &lt;stdio.h&gt; <br>
                int main(){<br>
                &nbsp;&nbsp;&nbsp; printf("Hello World");<br>
                return 0; <br>
                }
            </div>
            <h4>Output:</h4>
            <div class="syntax-box">
                Hello World
            </div>

            <p><b>#include</b> is a preprocessor that is used to process the header files while 
        compiling.</p>
        <p><b>stdio.h</b> standard input output is a library to run C basic program. It include built-in funciions like
            printf(), scanf(), keywords, etc. .h is a header file extension.
        </p>
        <p><b>int</b> - data type</p>
        <p><b>main()</b> the compiler's entry point. Every program in C starts with main() function.</p>
        <p>To print something in output we use <b>printf()</b> fucntion.</p>
        <p><b>return 0</b> used to return the program output successfully. return is a keyword in C.</p>

        </div> 
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