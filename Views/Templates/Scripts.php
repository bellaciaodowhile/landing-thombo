<script>
    const BASE_URL = "<?php echo BASE_URL; ?>"
    const LOGIN = "<?php if(isset($_SESSION['login'])) echo 'true'; ?>"
</script>

<script src="<?php echo media() . 'js/app.js' ?>"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<?php 
    foreach($data['js'] as $js) {
        echo "<script src='" . BASE_URL . "/Assets/js/" . $js . "'></script>";
    }
?>