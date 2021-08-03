</main>
<footer>
    <?php 
    
    include 'nav.php';
    
    ?>
    <p>&copy; <?php echo date('Y'); ?> COMP 1950</p>
</footer>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="/scripts/menu.js"></script>
<?php if(basename($_SERVER['PHP_SELF']) == 'index.php'): ?>
<script src="/scripts/slideshow.js"></script>
<?php endif ?>
<?php if(basename($_SERVER['PHP_SELF']) == 'contact.php'): ?>
<script src="/scripts/form.js"></script>
<?php endif ?>
</body>
</html>