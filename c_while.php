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
            <h3>While loop in C</h3>
            <p>A <b>while loop</b> in programming is used to execute a block of code repeatedly as long as a given condition remains true. The loop checks the condition before executing the code block.</p>

            <h4>Flowchart:-</h4>
            <p><img src="img/while.drawio.png" alt="" height="400px" width="500px"></p>

            <h4>Syntax:</h4>
            <div class="syntax-box">
<pre>
while(condition){
    //code to be executed
}
</pre>
            </div>

            <h5>Example 1:</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int i = 1;

    while (i <= 10){
        printf("%d\n", i);
        i++;
    }

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
<h5>Example 2: Multiplication Table using while loop in C</h5>
<div class="syntax-box">

    <pre>
#include &lt;stdio.h&gt;

int main() {
    int num, i = 1;

    printf("Enter a number: ");
    scanf("%d", &num);

    while (i <= 10){
        printf("%d x %d = %d\n", num, i, num * i);
        i++;
    }

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


<h5>Example 3: Star printing using while loop in C</h5>
<div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int i = 1;

    while (i <= 10){
        printf("* \n", i);
        i++;
    } 

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