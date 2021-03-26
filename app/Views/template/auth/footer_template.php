<!-- jQuery -->
<script src="<?=$page_path?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=$page_path?>/plugins/bootstrap/js/bootstrap.bundle.min.js">
</script>
<!-- AdminLTE App -->
<script src="<?=$page_path?>/dist/js/adminlte.min.js"></script>

<script>
    document.getElementById("btnSubmit").addEventListener("click", function(e) {
        e.preventDefault()
        console.log("Clicou");
    });
</script>
</body>
</html>