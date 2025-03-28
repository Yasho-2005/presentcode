<header class="header">
    <div class="flex">
        <a href="index.php" class="logo">logo</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="c.php">C</a>
            <a href="cpp.php">C++</a>
            <a href="order.php">Java</a>
            <a href="about.php">SQL</a>
            <a href="contact.php">PHP</a>
            <a href="contact.php">.NET</a>
            <a href="contact.php">C#</a>
            <!-- <a href="login.php" class="btn">Sign in</a> -->
        </nav>
        
        <!-- Dark Mode Toggle (Moon & Sun Icons) -->
        <span id="dark-mode-toggle" class="dark-mode-toggle">🌙</span>
    </div>
</header>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const toggleIcon = document.getElementById("dark-mode-toggle");
    const body = document.body;

    if (!toggleIcon) {
        console.error("Dark mode toggle icon not found!");
        return;
    }

    // Check localStorage for dark mode preference
    if (localStorage.getItem("darkMode") === "enabled") {
        body.classList.add("dark-mode");
        toggleIcon.innerHTML = "☀️"; // Change to Sun for Light Mode
    }

    // Toggle Dark Mode on Click
    toggleIcon.addEventListener("click", function() {
        if (body.classList.contains("dark-mode")) {
            body.classList.remove("dark-mode");
            localStorage.setItem("darkMode", "disabled");
            toggleIcon.innerHTML = "🌙"; // Moon for Dark Mode
        } else {
            body.classList.add("dark-mode");
            localStorage.setItem("darkMode", "enabled");
            toggleIcon.innerHTML = "☀️"; // Sun for Light Mode
        }
    });
});
</script>