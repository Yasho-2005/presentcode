<?php include 'includes/header.php'?>
<style type="text/css">
    <?php include 'style.css'; ?>
</style>
<section class="main">
<?php include 'sidebar.php'?>
    <div class="content">
        <h3>Features of C</h3>
        <p><img src="img/featuresofc.png" alt="" height="450px" width="750px"></p>
        
        <ul class="feature">  
            <!-- add diagram will look good -->
        <li><strong>Simple & Efficient:</strong> Easy to learn, with a clean syntax.</li>
        <li><strong>Fast & Powerful:</strong> Provides direct memory access and low-level programming.</li>
        <li><strong>Portable:</strong> Write once, compile anywhere with minimal changes.</li>
        <li><strong>Structured Programming:</strong> Supports functions, loops, and conditionals for organized code.</li>
        <li><strong>Rich Library Support:</strong> Standard libraries for input/output, math, string handling, etc.</li>
        <li><strong>Memory Management:</strong> Uses pointers for direct memory manipulation.</li>
        <li><strong>Low-Level Programming Capabilities:</strong> Can work with hardware directly.</li>
        <li><strong>Modularity:</strong> Large programs can be split into functions/modules.</li>
        <li><strong>Dynamic Memory Allocation:</strong> Supports <code>malloc()</code>, <code>calloc()</code>, <code>free()</code>, etc.</li>
        <li><strong>Extensible:</strong> Can add features using libraries and custom functions.</li>
    </ul>
   
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


<?php include 'includes/footer.php';?>