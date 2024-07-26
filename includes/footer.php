</div>
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"   
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="./assets/js/flowbite.min.js"></script>
<script src="./assets/js/custom.js"></script>
<!-- Alertify js -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
<script>
    alertify.set('notifier', 'position', 'top-right');
    <?php if (isset($_SESSION['message'])): ?>
        alertify.success('<?= $_SESSION['message'] ?>');

        <?php unset($_SESSION['message']);
    endif ?>
</script>

</body>

</html>