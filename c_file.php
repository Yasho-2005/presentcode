<style type="text/css">
    <?php include 'style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C-tutorial</title>
    <style>
        table {
            width: 80%;
            margin-left: 40px;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 9px;
            text-align: left;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sidebar.php' ?>


        <div class="content">
            <h3>File Handling in C</h3>
            <p><b>File handling</b> allows us to store data permanently in files instead of just keeping it in memory. In C, we use the FILE pointer and functions like fopen(), fprintf(), fscanf(), fclose(), etc.</p>
            <h4>File Handling modes in C</h4>
            <table>
    <tr>
        <th>Mode</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>"r"</td>
        <td>Read-only mode. The file must exist.</td>
    </tr>
    <tr>
        <td>"w"</td>
        <td>Write mode. Creates a new file or overwrites an existing file.</td>
    </tr>
    <tr>
        <td>"a"</td>
        <td>Append mode. Creates a new file if it doesn’t exist, otherwise appends to the existing file.</td>
    </tr>
    <tr>
        <td>"r+"</td>
        <td>Read and write mode. The file must exist.</td>
    </tr>
    <tr>
        <td>"w+"</td>
        <td>Read and write mode. Creates a new file or overwrites an existing file.</td>
    </tr>
    <tr>
        <td>"a+"</td>
        <td>Read and append mode. Creates a new file if it doesn’t exist.</td>
    </tr>
    <tr>
        <td>"rb"</td>
        <td>Read mode for binary files. The file must exist.</td>
    </tr>
    <tr>
        <td>"wb"</td>
        <td>Write mode for binary files. Creates a new file or overwrites an existing file.</td>
    </tr>
    <tr>
        <td>"ab"</td>
        <td>Append mode for binary files. Creates a new file if it doesn’t exist, otherwise appends to the existing file.</td>
    </tr>
    <tr>
        <td>"rb+"</td>
        <td>Read and write mode for binary files. The file must exist.</td>
    </tr>
    <tr>
        <td>"wb+"</td>
        <td>Read and write mode for binary files. Creates a new file or overwrites an existing file.</td>
    </tr>
    <tr>
        <td>"ab+"</td>
        <td>Read and append mode for binary files. Creates a new file if it doesn’t exist.</td>
    </tr>
</table>
            <h5>Writing in File</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    FILE *file = fopen("data.txt", "w");  // Open file in write mode and also creates if not created
    if (file == NULL) {
        printf("Error opening file!\n");
        return 1;  // Exit if file opening fails
    }

    char name[50];
    int age;

    printf("Enter name: ");
    scanf("%s", name);
    printf("Enter age: ");
    scanf("%d", &age);

    fprintf(file, "Name: %s\nAge: %d\n", name, age);  // Writing to file
    fclose(file);  // Close the file

    printf("Data written successfully!\n");
    return 0;
}</pre>
            </div>

            <h5>Reading Data from a File</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    FILE *file = fopen("data.txt", "r");  // Open file in read mode
    if (file == NULL) {
        printf("Error opening file!\n");
        return 1;
    }

    char name[50];
    int age;

    fscanf(file, "Name: %s\nAge: %d\n", name, &age);  // Read data from file
    fclose(file);

    printf("Data from file:\n");
    printf("Name: %s\nAge: %d\n", name, age);
    
    return 0;
}</pre>
            </div>

            <h5>Append (add) in to File</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    FILE *file = fopen("data.txt", "a"); // Open file in append mode
    if (file == NULL) {
        printf("Error opening file!\n");
        return 1;
    }

    fprintf(file, "This is a new line added to the file.\n"); // Append data
    fclose(file);

    printf("Data appended successfully!\n");
    return 0;
}</pre>
            </div>
            <h5>Deleting File</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    if (remove("data.txt") == 0) {
        printf("File deleted successfully!\n");
    } else {
        printf("Error deleting file!\n");
    }
    return 0;
}</pre>
            </div>
            <h5>File Handling + Structure Example(Employee Management)</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;

// Define structure for Employee
struct Employee {
    int id;
    char name[50];
    float salary;
};

// Function to add an employee
void addEmployee() {
    FILE *fp = fopen("employees.dat", "ab"); // Open file in append mode
    struct Employee emp;
    
    printf("Enter Employee ID: ");
    scanf("%d", &emp.id);
    getchar(); // To consume newline

    printf("Enter Employee Name: ");
    fgets(emp.name, sizeof(emp.name), stdin);
    emp.name[strcspn(emp.name, "\n")] = 0; // Remove newline character

    printf("Enter Salary: ");
    scanf("%f", &emp.salary);

    fwrite(&emp, sizeof(struct Employee), 1, fp); // Write to file
    fclose(fp);

    printf("Employee added successfully!\n");
}

// Function to view all employees
void viewEmployees() {
    FILE *fp = fopen("employees.dat", "rb");
    struct Employee emp;

    if (fp == NULL) {
        printf("No records found!\n");
        return;
    }

    printf("\n----- Employee Records -----\n");
    while (fread(&emp, sizeof(struct Employee), 1, fp)) {
        printf("ID: %d | Name: %s | Salary: %.2f\n", emp.id, emp.name, emp.salary);
    }
    fclose(fp);
}

// Function to delete an employee
void deleteEmployee() {
    FILE *fp = fopen("employees.dat", "rb");
    FILE *temp = fopen("temp.dat", "wb");
    struct Employee emp;
    int id, found = 0;

    if (fp == NULL) {
        printf("No records found!\n");
        return;
    }

    printf("Enter Employee ID to delete: ");
    scanf("%d", &id);

    while (fread(&emp, sizeof(struct Employee), 1, fp)) {
        if (emp.id != id) {
            fwrite(&emp, sizeof(struct Employee), 1, temp);
        } else {
            found = 1;
        }
    }
    fclose(fp);
    fclose(temp);

    remove("employees.dat");
    rename("temp.dat", "employees.dat");

    if (found)
        printf("Employee deleted successfully!\n");
    else
        printf("Employee ID not found!\n");
}

// Main menu
int main() {
    int choice;
    
    do {
        printf("\nEmployee Management System\n");
        printf("1. Add Employee\n");
        printf("2. View Employees\n");
        printf("3. Delete Employee\n");
        printf("4. Exit\n");
        printf("Enter your choice: ");
        scanf("%d", &choice);
        getchar(); // To consume newline

        switch (choice) {
            case 1:
                addEmployee();
                break;
            case 2:
                viewEmployees();
                break;
            case 3:
                deleteEmployee();
                break;
            case 4:
                printf("Exiting program...\n");
                break;
            default:
                printf("Invalid choice! Please try again.\n");
        }
    } while (choice != 4);

    return 0;
}</pre>
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