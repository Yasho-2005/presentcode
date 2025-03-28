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
            <h3>If-Else Statement in C</h3>
            <p>The <b>if-else</b> statement in C is used for decision-making. It allows the program to execute a block of code when a specified condition is <b>true</b> and a different block when the condition is <b>false</b>.</p>
            <h4>Flowchart:-</h4>
            <p><center><img src="img/ifelse.drawio.png" alt="" height="500px" width="500px"></center></p>

            <h4>Syntax:</h4>
            <div class="syntax-box">
                if (condition) { <br>
                &nbsp;&nbsp;&nbsp; // Code to execute if the condition is true <br>
                } else { <br>
                &nbsp;&nbsp;&nbsp; // Code to execute if the condition is false <br>
                }
            </div>

            <h5>Example 1: Check if a Number is Even or Odd</h5>
            <div class="syntax-box">
                #include &lt;stdio.h&gt; <br>
                int main() { <br>
                &nbsp;&nbsp;&nbsp; int num; <br><br>

                &nbsp;&nbsp;&nbsp; printf("Enter a number: "); <br>
                &nbsp;&nbsp;&nbsp; scanf("%d", &num); <br><br>

                &nbsp;&nbsp;&nbsp; if (num % 2 == 0) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("%d is even.\\n", num); <br>
                &nbsp;&nbsp;&nbsp; } else { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("%d is odd.\\n", num); <br>
                &nbsp;&nbsp;&nbsp; } <br><br>

                &nbsp;&nbsp;&nbsp; return 0; <br>
                }
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                Enter a number: 10 <br>
                10 is even.
            </div>

            <h5>Example 2: Check if a Person is Eligible to Vote</h5>
            <p>In this example, we check whether a person is eligible to vote based on their age. A person is eligible to vote if their age is 18 or above.</p>

            <div class="syntax-box">
                #include &lt;stdio.h&gt; <br>
                int main() { <br>
                &nbsp;&nbsp;&nbsp;&nbsp; int age; <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; printf("Enter your age: "); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; scanf("%d", &amp;age); <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; if (age &gt;= 18) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("You are eligible to vote.\n"); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } else { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("You are not eligible to vote.\n"); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; return 0; <br>
                }
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                Enter your age: 20 <br>
                You are eligible to vote.
            </div>

            <h3>If-Else-If Statement in C</h3>
            <p>As above following examples, the <i>if</i> code is printed when the condition is true and the <i>else</i> code is printed when the condition is false.</p>
            <p>But what if, we want multiple conditions? There we use If-Else-If to work on multiple conditions.</p>
            <h4>Flowchart:-</h4>
            <p><center><img src="img/ifelseif.drawio.png" alt="" height="500px" width="700px"></center></p>
            <h4>Syntax:</h4>
            <div class="syntax-box">
                if (condition) { <br>
                &nbsp;&nbsp;&nbsp; // Code to execute if the condition is true <br>
                } else if (condition){ <br>
                &nbsp;&nbsp;&nbsp; // Code to execute if the condition is true <br>
                }
                else { <br>
                &nbsp;&nbsp;&nbsp; // Code to execute if the condition is false <br>
                }
            </div>
            <h5>Example 3: Check Positive, Negative, or Zero</h5>
            <div class="syntax-box">
                #include &lt;stdio.h&gt; <br>
                int main() { <br>
                &nbsp;&nbsp;&nbsp; int num; <br><br>

                &nbsp;&nbsp;&nbsp; printf("Enter a number: "); <br>
                &nbsp;&nbsp;&nbsp; scanf("%d", &num); <br><br>

                &nbsp;&nbsp;&nbsp; if (num > 0) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("The number is positive.\\n"); <br>
                &nbsp;&nbsp;&nbsp; } else if (num < 0) { <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("The number is negative.\\n"); <br>
                    &nbsp;&nbsp;&nbsp; } else { <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("The number is zero.\\n"); <br>
                    &nbsp;&nbsp;&nbsp; } <br><br>

                    &nbsp;&nbsp;&nbsp; return 0; <br>
                    }
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                Enter a number: -5 <br>
                The number is negative.
            </div>
            <h4>Explanation :</h4>
            <p>In the first condition if the number is greater than zero then it will print.</p>
            <p>If the number is not greater than zero then it will go onto the <i>else-if</i> to check whether the number is less than zero.</p>
            <p>If number is not greater than zero nor less then all the condition will be false and the <i>else</i> code will be printed.</p>

            <h5>Example 4: Check Grade according to given marks.</h5>
            <p>This program checks the grade of a student based on marks entered by the user, using if-else if statements and logical operators.</p>

            <div class="syntax-box">
                #include &lt;stdio.h&gt; <br>
                int main() { <br>
                &nbsp;&nbsp;&nbsp;&nbsp; int marks; <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; printf("Enter your marks (0-100): "); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; scanf("%d", &amp;marks); <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; if (marks &gt;= 90 && marks &lt;= 100) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Grade: A"); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } else if (marks &gt;= 80 && marks &lt; 90) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Grade: B"); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } else if (marks &gt;= 70 && marks &lt; 80) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Grade: C"); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } else if (marks &gt;= 60 && marks &lt; 70) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Grade: D"); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } else if (marks &gt;= 0 && marks &lt; 60) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Grade: F (Fail)"); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } else { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Invalid marks entered! Please enter a value between 0 and 100."); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; return 0; <br>
                }
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                <b>Example 1:</b><br>
                Enter your marks: 85 <br>
                Grade: B <br><br>

                <b>Example 2:</b><br>
                Enter your marks: 150 <br>
                Invalid marks entered! Please enter a value between 0 and 100.
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