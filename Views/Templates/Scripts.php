<script>
    const BASE_URL = "<?php echo BASE_URL; ?>"
</script>
<script src="<?php echo media() . 'js/app.js' ?>"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
<?php 
    foreach($data['js'] as $js) {
        echo "<script src='" . BASE_URL . "/Assets/js/" . $js . "'></script>";
    }
?>