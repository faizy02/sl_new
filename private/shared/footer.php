<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.2.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.0.0.js"></script>
<footer class="">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© <?php echo Date('Y'); ?> Copyright:
      <a href="https://SL.com"> SL.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>
</html>
<?php
  db_disconnect($db);
 ?>
