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
            <h3>Switch Statement in C</h3>
            <p>The <b>switch</b> statement in C is used for decision-making. It allows the program to execute a block of code when a specified case value is <b>true</b> and execute a different block when the condition is <b>false</b>.</p>
            <p>The <b>Switch</b> statement is used for handling multiple conditions, similar to if-else if statements. </p>
            <p>The difference in both is that <b>if-else if</b> can check multiple conditions, while <b>switch</b> checks one value against different cases. </p>
            <h4>Syntax:</h4>
            <div class="syntax-box"> switch(expression) { <br> &nbsp;&nbsp;&nbsp;&nbsp; case value1: <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Code to execute if expression == value1 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br> &nbsp;&nbsp;&nbsp;&nbsp; case value2: <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Code to execute if expression == value2 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br> &nbsp;&nbsp;&nbsp;&nbsp; default: <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Code to execute if no cases match <br> } </div>

            <h5>Example 2: Check Day of the Week</h5>
<p>This program takes a number (1-7) as input and displays the corresponding day of the week using a switch statement.</p>

<div class="syntax-box">
    <pre>
#include &lt;stdio.h&gt;

int main() {
    int day;

    printf("Enter a number (1-7) for the day of the week: ");
    scanf("%d", &day);

    switch (day) {
        case 1:
            printf("Monday\n");
            break;
        case 2:
            printf("Tuesday\n");
            break;
        case 3:
            printf("Wednesday\n");
            break;
        case 4:
            printf("Thursday\n");
            break;
        case 5:
            printf("Friday\n");
            break;
        case 6:
            printf("Saturday\n");
            break;
        case 7:
            printf("Sunday\n");
            break;
        default:
            printf("Invalid input! Please enter a number between 1 and 7.\n");
    }

    return 0;
}</pre>
</div>

<h4>Output:</h4>
<div class="syntax-box">
    <pre>
Enter a number (1-7) for the day of the week: 3
Wednesday</pre>
</div>


            <h4>Output:</h4>
            <div class="syntax-box">
            Enter a number (1-7): 3 <br>
                Wednesday
            </div>
            <div class="syntax-box">
            Enter a number (1-7): 9 <br>
            Invalid input! Please enter a number from 1 to 7.
            </div>

            <h5>Example 2: Menu Selection Using Switch</h5>
<p>This program displays a menu of food items and asks the user to enter a choice. Based on the selection, the program prints the corresponding item using a switch statement.</p>

<div class="syntax-box">
    #include &lt;stdio.h&gt; <br>
    int main() { <br>
    &nbsp;&nbsp;&nbsp;&nbsp; int choice; <br><br>

    &nbsp;&nbsp;&nbsp;&nbsp; printf("Menu:\n"); <br>
    &nbsp;&nbsp;&nbsp;&nbsp; printf("1. Pizza\n"); <br>
    &nbsp;&nbsp;&nbsp;&nbsp; printf("2. Burger\n"); <br>
    &nbsp;&nbsp;&nbsp;&nbsp; printf("3. Pasta\n"); <br>
    &nbsp;&nbsp;&nbsp;&nbsp; printf("Enter your choice (1-3): "); <br>
    &nbsp;&nbsp;&nbsp;&nbsp; scanf("%d", &choice); <br><br>

    &nbsp;&nbsp;&nbsp;&nbsp; switch (choice) { <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; case 1: <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("You selected Pizza.\n"); <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; case 2: <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("You selected Burger.\n"); <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; case 3: <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("You selected Pasta.\n"); <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; default: <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Invalid choice! Please select between 1-3.\n"); <br>
    &nbsp;&nbsp;&nbsp;&nbsp; } <br><br>

    &nbsp;&nbsp;&nbsp;&nbsp; return 0; <br>
    }
</div>

<h4>Output:</h4>
<div class="syntax-box">
    Menu:<br>
    1. Pizza<br>
    2. Burger<br>
    3. Pasta<br>
    Enter your choice (1-3): 2<br>
    You selected Burger.
</div>

<h5>Example 3: Simple Calculator Using Switch</h5>
<p>This program takes two numbers and an operator as input and performs the corresponding arithmetic operation using a switch statement.</p>

<div class="syntax-box">
    #include &lt;stdio.h&gt; <br>
    int main() { <br>
    &nbsp;&nbsp;&nbsp;&nbsp; double num1, num2, result; <br>
    &nbsp;&nbsp;&nbsp;&nbsp; char op; <br><br>

    &nbsp;&nbsp;&nbsp;&nbsp; printf("Enter first number: "); <br>
    &nbsp;&nbsp;&nbsp;&nbsp; scanf("%lf", &num1); <br>
    &nbsp;&nbsp;&nbsp;&nbsp; printf("Enter an operator (+, -, *, /): "); <br>
    &nbsp;&nbsp;&nbsp;&nbsp; scanf(" %c", &op); <br>
    &nbsp;&nbsp;&nbsp;&nbsp; printf("Enter second number: "); <br>
    &nbsp;&nbsp;&nbsp;&nbsp; scanf("%lf", &num2); <br><br>

    &nbsp;&nbsp;&nbsp;&nbsp; switch (op) { <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; case '+': <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; result = num1 + num2; <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Result: %.2lf\n", result); <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; case '-': <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; result = num1 - num2; <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Result: %.2lf\n", result); <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; case '*': <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; result = num1 * num2; <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Result: %.2lf\n", result); <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; case '/': <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (num2 != 0) { <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; result = num1 / num2; <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Result: %.2lf\n", result); <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; } else { <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Error! Division by zero is not allowed.\n"); <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; } <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; default: <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Invalid operator! Please use +, -, *, or /.\n"); <br>
    &nbsp;&nbsp;&nbsp;&nbsp; } <br><br>

    &nbsp;&nbsp;&nbsp;&nbsp; return 0; <br>
    }
</div>

<h4>Output:</h4>
<div class="syntax-box">
    Enter first number: 10<br>
    Enter an operator (+, -, *, /): *<br>
    Enter second number: 5<br>
    Result: 50.00
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