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
            <h3>Do while loop in C</h3>
            <p>The <b>do-while loop</b> is an exit-controlled loop, meaning it executes the code block at least once, even if the condition is false. The condition is checked after executing the loop body.</p>

            <h4>Flowchart:- </h4>
            <img src="img/dowhile.drawio.png" alt="" height="400px" width="500px">

            <h4>Syntax:</h4>
            <div class="syntax-box">
<pre>
do{
    //code to be executed
}while(condition);
</pre>
            </div>

            <h5>Example 1:</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int i = 1;

    do {
        printf("%d\n", i);
        i++;
    } while (i <= 10);

    return 0;
}</pre>
            </div>
            <h4>Output:</h4>
<div class="syntax-box">
    <pre>
1
2
3
4
5
6
7
8
9
10</pre>
</div>
<h5>Example 2: Multiplication Table using do-while loop in C</h5>
<div class="syntax-box">

    <pre>
#include &lt;stdio.h&gt;

int main() {
    int num, i = 1;

    printf("Enter a number: ");
    scanf("%d", &num);

    do {
        printf("%d x %d = %d\n", num, i, num * i);
        i++;
    } while (i <= 10);

    return 0;
}</pre>
</div>
<h4>Output:</h4>
<div class="syntax-box">
<pre>
Enter a number: 5

5 x 1 = 5
5 x 2 = 10
5 x 3 = 15
5 x 4 = 20
5 x 5 = 25
5 x 6 = 30
5 x 7 = 35
5 x 8 = 40
5 x 9 = 45
5 x 10 = 50
</pre></div>


<h5>Example 3: Star printing using do-while loop in C</h5>
<div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int i = 1;

    do {
        printf("* \n", i);
        i++;
    } while (i <= 10);

    return 0;
}</pre>
</div>
<h4>Output:</h4>

<div class="syntax-box">
    <pre>
* 
* 
* 
* 
* 
* 
* 
* 
* 
*</pre>
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