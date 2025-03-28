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
            <h3>Continue Statement in C</h3>
            <p>The <b>continue</b> statement is used to <b>skip the current iteration</b> of a loop and move to the next iteration immediately.</p>

            <h4>Syntax:</h4>
            <div class="syntax-box">
                continue;
            </div>

            <h5>Example 1: continue statement in for loop</h5>
            <div class="syntax-box">
            <pre>
#include &lt;stdio.h&gt;

int main() {
    for (int i = 1; i <= 5; i++) {
        if (i == 3) {
            continue; // Skip the iteration when i is 3
        }
        printf("Iteration: %d\n", i);
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
4
5</pre>
</div>

            <h5>Example 2: continue statement of skip negative numbers and sum.</h5>

            <div class="syntax-box">
        <pre>
#include &lt;stdio.h&gt;
int main() {
    int n, sum = 0;

    for (int i = 1; i <= 5; i++) {
        printf("Enter a number (%d/5): ", i);
        scanf("%d", &n);

        if (n < 0) {  // If the number is negative, skip it
            printf("Negative numbers are not allowed. Skipping...\n");
            continue;
        }

        sum += n;  // Add positive number to sum
    }

    printf("Total Sum of Positive Numbers: %d\n", sum);
    return 0;
}</pre>
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Enter a number (1/5): 1
Enter a number (2/5): -5
Negative numbers are not allowed. Skipping...
Enter a number (3/5): -3
Negative numbers are not allowed. Skipping...
Enter a number (4/5): 4
Enter a number (5/5): 6
Total Sum of Positive Numbers: 11</pre>
            </div>
            <h4>Explanation :</h4>
            <p>You are writing a program that asks the user for numbers. The program ignores negative numbers but continues adding positive numbers to a total sum.</p>
            <h4>When to Use continue?</h4>
        <p>Skipping invalid user inputs (like negative numbers in this case).</p>
        <p>Skipping unnecessary iterations in loops (e.g., ignoring weekends in a work schedule).</p>
        <p>Filtering out unwanted data in file reading or database processing.</p>
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