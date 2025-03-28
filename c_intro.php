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
            <h3>C Prgramming Intro tutorial</h3>
            <p>According to <a href="https://en.wikipedia.org/wiki/C_(programming_language)">Wikipedia</a>, <b>C</b> is a general-purpose programming language. Used in operating systems code, device drivers, protocol stacks and application software.</p>
            <p>It was created by Dennis Ritchie in 1972 to develop <i>Unix</i> operating system</p>
            <p><b>C </b>is commonly used on computer architectures that range from the largest 
        <i>supercomputers</i> to the smallest <i>microcontrollers</i> and <i>embedded systems.</i></p>
        <p>C is designed to be compiled into machine code, giving direct access to memory and hardware while using minimal extra resources. Even though it works at a <u> low-level</u>, it still supports writing programs that can run on different systems. A well-written C program that follows standards can be easily compiled and run on many computers and operating systems with little to no changes in the code.</p>
        <h3></h3>

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