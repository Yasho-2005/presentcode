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
            <h3>Functions in C</h3>
            <p>Functions in C are <b>blocks of code</b> that perform a specific task. Instead of writing the same code multiple times, we can create a function and call it whenever needed.</p>
            <h5>Types of Functions in C</h5>
            <p><img src="img/tof.png" alt="" height="300px" width="700px"></p>
            <h5>1. Library Functions (Predefined Functions)</h5>
            <p>These are functions already defined in C's standard library. Examples: <br>
                <b>printf()</b> - Prints output to the screen<br>
                <b>scanf()</b> - Takes user input<br>
                <b>sqrt()</b> - Calculates square root
            </p>

            <h5>Example 1: </h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;
#include &lt;math.h&gt // Required for sqrt()

int main() {
    int num = 81;
    printf("Square root of %d is %.2f", num, sqrt(num));
    return 0;
}</pre>
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Square root of 81 is 9.00</pre>
            </div>

            <h5>User-Defined Functions:</h5>
            <p>These are <b>functions created by the user</b> for specific tasks.</p>
            <h4>Types of User-defined</h4>
            <p><b>1. Functions with No Arguments & No Return Value</b> <br>
                Functions with No Arguments & No Return Value</p>
            <p><b>2. Functions with Arguments but No Return Value</b> <br>
                Takes parameters but does not return a value</p>
            <p><b>3. Functions with No Arguments but Returns a Value</b> <br>
                Does not take parameters but returns a value</p>
            <p><b>4. Functions with Arguments & Returns a Value</b> <br>
                Takes parameters and returns a value</p>


                <h5>Where Do We Use Functions in Real Life?</h5>
                <p>Functions are used <b>everywhere</b> in programming, from games to web applications.</p>

                <h5>Example : Functions in a Video Game</h5>
                <p>Imagine you’re developing a <b>2D platformer game</b> where a player controls a character. You need functions for different actions:</p>
                <p>🔹<b>moveLeft()</b>→ Move the character left <br>
                🔹<b>moveRight()</b>→ Move the character right <br>
                🔹<b>moveJump()</b>→ Move the character jump <br>
                🔹<b>moveSlide()</b>→ Move the character slide <br>
            </p>

            <div class="syntax-box">
                <pre>
void moveLeft() {
printf("Character moved left\n");
}

void moveRight() {
    printf("Character moved right\n");
}

void jump() {
    printf("Character jumped\n");
}

void attack() {
    printf("Character attacked\n");
}

int main() {
    moveLeft();
    moveRight();
    jump();
    attack();
    return 0;
}</pre>
            </div>
            <h5>Example: Functions in an ATM System</h5>
            <p>Think about how an <b>ATM machine works</b>. It has different operations that need to be repeated for multiple users.</p>
            <p>
            🔹<b>withdrawMoney()</b> → Handles cash withdrawals <br>
            🔹<b>dipositMoney()</b> → Allow deposits <br>
            🔹<b>checkBalance()</b> → Displays current account balance <br>
            </p>

            <h5>Why Are Functions Important?</h5>
            <p><b>Avoid Repetition</b> ✖️ : Instead of writing the same code multiple times, we use functions. <br>
            <b>Easy Debugging </b>🛠️: If something goes wrong, we fix it in one place instead of searching everywhere. <br>
            <b>Better Code Organization</b> 📂: Helps in structuring large projects like games, banking software, and websites.</p>
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