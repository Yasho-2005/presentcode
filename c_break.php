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
            <h3>Break Statement in C</h3>
            <p>The <b>break</b> statement in C is used to <b>immediately terminate</b> a loop (such as for, while, or do-while) or a switch statement. When break is encountered, the program <b>exits the loop</b>.</p>

            <h4>Syntax:</h4>
            <div class="syntax-box">
                break;
            </div>

            <h5>Example 1: break statement in switch</h5>
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

            <h5>Example 2: break statement in for loop</h5>

            <div class="syntax-box">
        <pre>
#include &lt;stdio.h&gt;
    int main() {
    int i;
    
    for (i = 1; i <= 10; i++) {
        if (i == 5) {
            printf("Loop stopped at %d\n", i);
            break;  // Exit the loop when i == 5
        }
        printf("i = %d\n", i);
    }

    printf("Loop exited.\n");

    return 0;
}</pre>
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
i = 1
i = 2
i = 3
i = 4
Loop stopped at 5
Loop exited.</pre>
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