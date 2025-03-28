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
            <h3>Recursion</h3>
            <p><b>Recursion</b> is a technique where a function calls itself to <b>solve smaller</b> instances of a problem. A base condition is necessary to stop the recursion; otherwise, it will continue infinitely.</p>
            <p><i>Recursion is a concept where a function solves a problem by calling itself with a smaller version of the same problem. A stopping condition (base case) is necessary to prevent infinite recursion.</i></p>
            

            <h5>Factorial Calculation</h5>
            <div class="syntax-box">
                <pre>5! = 5 × 4 × 3 × 2 × 1 = 120</pre> 
            </div>

            <h5>Example: </h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

// Function to calculate factorial using recursion
int factorial(int n) {
    if (n == 0) // Base condition
        return 1;
    return n * factorial(n - 1); // Recursive call
}

int main() {
    int num = 5;
    printf("Factorial of %d is %d", num, factorial(num));
    return 0;
}</pre>
            </div>
            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Factorial of 5 is 120</pre>
            </div>
<h4>Explanation: </h4>
<p>If <i>n</i> is 0, return 1 (base condition). <br>
Otherwise, multiply <i>n</i> by the factorial of <i>n-1</i>. <br>
The function keeps calling itself until <i>n</i> becomes 0, at which point the recursion stops and results are returned step by step</p>

<h4>Real-Life Example: <b><i>Russian Dolls</i> (Matryoshka Dolls)</b></h4>
<p>Imagine you have a set of Russian dolls, where each doll contains a smaller doll inside it. To reach the smallest doll: <br>

1. You open the largest doll.  <br>
2. Take out the smaller doll inside. <br>
3. Repeat the process until you reach the smallest doll, which cannot be opened (base case).</p>
<p>This is just like recursion: <br><br>

The action of opening a doll and repeating it for the next smaller doll represents the function calling itself.
The smallest doll, which cannot be opened, represents the base case where recursion stops.</p>

<h4> Real-Life Example in Computing: File System Navigation</h4>
<p>When you open a folder on a computer, it may contain: <br>

1. Files<br>
2. More folders (which can contain more files or folders) <br> <br>
A program that lists all files in a folder recursively works like this: <br>

1. Open the folder. <br>
2. List all files. <br>
3. If a subfolder is found, open that and repeat the process. <br>
4. Stop when there are no more folders to open (base case).</p>

<h5>Sum of first 5 natural numbers</h5>
<div class="syntax-box">
    <pre>
5 + 4 + 3 + 2 + 1 + 0 = 15</pre>
</div>
<div class="syntax-box">
    <pre>
#include &lt;stdio.h&gt;

// Recursive function to find sum of first n natural numbers
int sumNatural(int n) {
    if (n == 0) 
        return 0;  // Base case
    return n + sumNatural(n - 1);  // Recursive call
}

int main() {
    int num = 5;
    printf("Sum of first %d natural numbers is: %d", num, sumNatural(num));
    return 0;
}</pre>
</div>
<h4>Output: </h4>
<div class="syntax-box">
    <pre>
Sum of first 5 natural numbers is: 15</pre>
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



    <?php include 'includes/footer.php'; ?>

</body>



</html>