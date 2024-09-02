<script>
    const BASE_URL = "<?php echo BASE_URL; ?>"
</script>
<?php 
    foreach($data['js'] as $js) {
        echo "<script src='" . BASE_URL . "/Assets/js/" . $js . "'></script>";
    }
?>