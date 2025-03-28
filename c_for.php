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
            <h3>For loop in C</h3>
            <p>The <b>for loop</b> is used when the number of iterations is known beforehand. </p>
            <h4>Flowchart:-</h4>
            <img src="img/forloop.png" alt="" height="450px" width="450px">

            <h4>Syntax:</h4>
            <div class="syntax-box">
            <pre>
for(initialization; condition; incr/decr) {
    // Code to be executed
}
</pre>

            </div>

            <h5>Example 1:</h5>
            <div class="syntax-box">
            <pre>
#include &lt;stdio.h&gt;

int main() {
    for(int i = 1; i <= 5; i++) {
        printf("%d\n", i);
    }
    return 0;
}
</pre>

            </div>
            <h4>Output:</h4>
<div class="syntax-box">
<pre>
1
2
3
4
5
</pre>

</div>
<h5>Example 2: Multiplication Table using for loop in C</h5>
<div class="syntax-box">

<pre>
#include &lt;stdio.h&gt;

int main() {
    int num;
    printf("Enter a number: ");
    scanf("%d", &num);

    for(int i = 1; i <= 10; i++) {
        printf("%d x %d = %d\n", num, i, num * i);
    }

    return 0;
}
</pre>

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


<h4>Difference</h4>
<p>When we say, <b>"we know beforehand,"</b> it means we already know how many times a loop should run before the loop starts execution. This is where a <b>for loop</b> is most useful.</p>
<p>When we <b>don't know beforehand</b> how many times the loop should run, we usually use a <b>while</b> or  <b>do-while loop</b>. This happens when the loop depends on user input or a condition that isn't known before execution.</p>

<h5>Example: Keep taking user input until user enters 0</h5>
<div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int num;
    
    while(1) { 
        // Infinite loop, will break when user enters 0
        printf("Enter numbers (enter 0 to stop):\n");
        scanf("%d", &num);
        
        if (num == 0) {
            break; // Stop the loop if user enters 0
        }

        printf("You entered: %d\n", num);
    }

    printf("Loop stopped because you entered 0.\n");

    return 0;
}</pre>
</div>
<h4>Output:</h4>

<div class="syntax-box">
    <pre>
Enter numbers (enter 0 to stop):
7
You entered: 7
Enter numbers (enter 0 to stop):
5
You entered: 5
Enter numbers (enter 0 to stop):
4
You entered: 4
Enter numbers (enter 0 to stop):
3
You entered: 3
Enter numbers (enter 0 to stop):
0
Loop stopped because you entered 0.</pre>
</div>
<h4>Explanation:</h4>
<p>Here, we don't know beforehand how many times the user will enter numbers. <br>
The loop continues until the user enters 0. <br>
We use a while(1) infinite loop with a break statement to stop it when needed</p>

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