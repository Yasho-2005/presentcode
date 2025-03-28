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
            <h5>Memory Management in C</h5>
            <p>When you store data in a program (like variables or arrays), that data is kept in <b>RAM (Random Access Memory)</b> while the program is running. But once you close the program, all the data is lost because RAM is temporary storage.</p>
            <p>For example:</p>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int age;
    printf("Enter your age: ");
    scanf("%d", &age);
    printf("Your age is: %d\n", age);
    return 0;
}</pre>
            </div>
            <p>👉 If you run this program and enter 21, it will display Your age is: 21. <br>
            👉 But if you close the program and reopen it, the age will be gone because it was stored in memory (RAM) temporarily.</p>

            <h4>How File Handling Helps?</h4>
            <p>To store data <b>permanently</b>, we use <b>files on a hard drive</b> instead of RAM.
When we write data to a file, we can open the file later and retrieve the data, even after the program is closed.

This is why file handling is <b>important</b>—it allows us to <b>store and retrieve data across multiple program runs.</b></p>
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