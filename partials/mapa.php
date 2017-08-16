<script type="text/javascript">
    $( document ).ready(function() {
      $('.maps').click(function () {
          $('.maps iframe').css("pointer-events", "auto");
      });

      $( ".maps" ).mouseleave(function() {
        $('.maps iframe').css("pointer-events", "none");
      });
    });
</script>
<div class="map" id="localizacion">
  <h2 style="padding: 1.2em">Dónde Estamos</h2>
  <p class="maps"><iframe itemprop="hasMap" style="pointer-events:none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.922478917067!2d-0.381466084632598!3d39.471079979486206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f4c1c85b2e1%3A0x26ea0be400a35866!2sGuarch+Abogados+-+Valencia!5e0!3m2!1ses!2ses!4v1501970684973" frameborder="0" style="border:0" allowfullscreen></iframe>
  </p>
</div>