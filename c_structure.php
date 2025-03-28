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
            <h3>Structure</h3>
            <p>A <b>structure</b> in C is a <b>user-defined data type</b> that groups related variables of different data types into a single unit. It allows us to store multiple pieces of information together, making it useful for organizing complex data.</p>
            <p> <b><i> "In modern programming, databases are used to store structured data like employee or student details. However, in C, we use structures to group related information together, providing a way to handle such data within a program's memory."</i></b></p>
            <h4>Syntax:</h4>
            <div class="syntax-box">
                <pre>
struct structure_name   
{  
    data_type member1;  
    data_type member2;  
    .  
    .  
    data_type memeberN;  
};</pre>
            </div>
            

            <h5>Example 1:</h5>
            <p>A structure is defined using the <b>struct</b> keyword:</p>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
// Define a structure
struct Student {
    char name[50];
    int age;
    float marks;
};

int main() {
    // Declare a structure variable
    struct Student s1;
    strcpy(s1.name, "Alice");
    s1.age = 20;
    s1.marks = 90;

    // Accessing structure members
    printf("Name: %s\n", s1.name);
    printf("Age: %d\n", s1.age);
    printf("Marks: %.2f\n", s1.marks);

    return 0;
}</pre> 
            </div>
            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Name: Alice
Age: 20
Marks: 90.00</pre>
            </div>
            <p>We use the dot (.) operator to store and access members like s1.name, s1.age, etc</p>

            <h5>Example 2: Storing values at one time</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

struct Student {
    char name[50];
    int age;
    float marks;
};

int main() {
    
    struct Student s1 = {"Alice", 20, 90};

    // Accessing structure members
    printf("Name: %s\n", s1.name);
    printf("Age: %d\n", s1.age);
    printf("Marks: %.2f\n", s1.marks);

    return 0;
}</pre>
            </div>
            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Name: Alice
Age: 20
Marks: 90.00</pre>
            </div>
            <h5>Example 3: Storing data of multiple students.</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

// Define a structure
struct Student {
    char name[50];
    int age;
    float marks;
};

int main() {
    // Declare an array of structures
    struct Student students[2];

    // Input details for 2 students
    for (int i = 0; i < 2; i++) {
        printf("Enter details for Student %d:\n", i + 1);
        printf("Name: ");
        scanf("%s", students[i].name);
        printf("Age: ");
        scanf("%d", &students[i].age);
        printf("Marks: ");
        scanf("%f", &students[i].marks);
    }

    // Display student details
    printf("\nStudent Details:\n");
    for (int i = 0; i < 2; i++) {
        printf("Student %d - Name: %s, Age: %d, Marks: %.2f\n", i + 1, students[i].name, 
        students[i].age, students[i].marks);
    }

    return 0;
}</pre>
            </div>
            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Enter details for Student 1:
Name: Alice
Age: 20
Marks: 85.5

Enter details for Student 2:
Name: Bob
Age: 22
Marks: 90.0

Student Details:
Student 1 - Name: Alice, Age: 20, Marks: 85.50
Student 2 - Name: Bob, Age: 22, Marks: 90.00</pre>
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