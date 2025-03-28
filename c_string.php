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
            <h3>strlen()</h3>
            <p>The strlen() function returns the number of characters in a string</p>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;

int main() {
    char name[] = "Alice";
    printf("Length of string: %d\n", strlen(name));  
    return 0;
}</pre>
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Length of string: 5</pre>
            </div>
            <h3>strcpy() String Copy</h3>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;

int main() {
    char src[] = "Hello";
    char dest[20];  

    strcpy(dest, src);  
    printf("Copied string: %s\n", dest);
    return 0;
}</pre>
            </div>
            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>Copied string: Hello</pre>
            </div>
            <h5>strcat() String Concatenation</h5>
            <p>strcat() joins two strings.</p>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;

int main() {
    char str1[20] = "Hello, ";
    char str2[] = "World!";
    
    strcat(str1, str2);
    printf("Concatenated string: %s\n", str1);
    return 0;
}</pre>
            </div>
            <div class="syntax-box">
                <pre>
Concatenated string: Hello, World!</pre>
            </div>
            <h5>strcmp() String Compare</h5>
            <p>The strcmp() function compares two strings lexicographically (dictionary order).</p>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;

int main() {
    char str1[] = "apple";
    char str2[] = "banana";

    int result = strcmp(str1, str2);

    if (result == 0)
        printf("Strings are equal\n");
    else if (result > 0)
        printf("First string is greater\n");
    else
        printf("Second string is greater\n");

    return 0;
}</pre>
            </div>
            <div class="syntax-box">
                <pre>Second string is greater</pre>
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