<footer class="modal-footer">
  <div class="text-center">
    <span class="text-muted">&copy;Desenvolvido por: Douglas Willian de Castro <?php echo date('Y') ?>. Todos Direitos Reservados</span>
  </div>
</footer>
    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="<?= base_url(); ?>assets/css/bootstrap.min.js"></script>

      <!-- Icons -->
      <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
      <script>
        feather.replace()
      </script>

      <!-- Graphs -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
      <script>
       
        function formatar(src, mask)
        {
          var i = src.value.length;
          var saida = mask.substring(0,1);
          var texto = mask.substring(i)
          if (texto.substring(0,1) != saida)
          {
            src.value += texto.substring(0,1);
          }
        }

      </script>
    </body>
    </html>
