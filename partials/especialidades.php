<script type="text/javascript">
  function mail_con_asunto(tema) {
      $("#asunto_mail").val("Consulta " +tema);
      $("textarea#consulta_mail").focus();
  };
</script>
<div class="container" id="especialidades">
  <h2 style="padding: 1.2em">Nuestras Especialidades</h2>
  <div class="row">
  <div class="col-xs-18 col-sm-6 col-md-3">
      <div class="thumbnail">
        <img src="images/icons/4.png" alt="Clausula suelo">
          <div class="caption">
            <h3>Cláusula suelo</h3>
            <p class="card-text">
            Desde el despacho le llevamos su reclamación de la <strong>cláusula suelo</strong> así como todas las clausulas nulas de su hipoteca.<br> Nuestros abogados solo cobrarían si usted cobra.</p>
            <a class="btn btn-default btn-md" onclick="mail_con_asunto('Cláusula suelo')">Consultar</a>
        </div>
      </div>
    </div>
    <div class="col-xs-18 col-sm-6 col-md-3">
      <div class="thumbnail">
        <img src="images/icons/8.png" alt="abogado divorcios">
          <div class="caption">
            <h3>Matrimonial</h3>
            <p class="card-text">Despacho con especialidad contrastada en derecho matrimonial en todos sus ámbitos: separación, <strong><a href="divorcio-valencia"> divorcio </a></strong>, modificación de medidas, aspectos relativos a la filiación régimen económico matrimonial y liquidación de sociedades conyugales.</p>
            <a class="btn btn-default btn-md" href="divorcio-valencia">Mas información</a>
        </div>
      </div>
    </div>

    <div class="col-xs-18 col-sm-6 col-md-3">
      <div class="thumbnail">
        <img src="images/icons/11.png" alt="abogado penal">
          <div class="caption">
            <h3>Penal</h3>
            <p class="card-text">Nuestros abogados le otorgarán <strong>asistencia jurídica</strong> en Comisaría, Juzgados, Juzgados de Guardia, declaraciones, asesoramiento y dirección técnica a lo largo de la Instrucción incluida vista oral.</p>
            <a class="btn btn-default btn-md" onclick="mail_con_asunto('Penal')">Consultar</a>
        </div>
      </div>
    </div>

    <div class="col-xs-18 col-sm-6 col-md-3">
      <div class="thumbnail">
        <img src="images/icons/6.png" alt="abogado laboral">
          <div class="caption">
            <h3>Laboral</h3>
            <p class="card-text">Desde el despacho le ayudaremos en sus reclamaciones como la indemnización por despido ante la jurisdicción Social o <strong>la reclamación de lesiones</strong>.</p>
            <a class="btn btn-default btn-md" onclick="mail_con_asunto('Laboral')">Consultar</a>
        </div>
      </div>
    </div>

  </div><!--/row-->
  <div class="row">
    <div class="col-xs-18 col-sm-6 col-md-3">
      <div class="thumbnail">
        <img src="images/icons/12.png" alt="abogado civil">
          <div class="caption">
            <h3>Civil</h3>
            <p class="card-text">Nuestros abogados son conocedores de la diversidad de materias que el derecho civil comprende, resaltamos entre ellas como especialidad en este ámbito, nacionalidad, <strong>herencia</strong>, sucesiones.</p>
            <a class="btn btn-default btn-md" onclick="mail_con_asunto('Civil')">Consultar</a>
        </div>
      </div>
    </div>

    <div class="col-xs-18 col-sm-6 col-md-3">
      <div class="thumbnail">
        <img src="images/icons/10.png" alt="impagos">
          <div class="caption">
            <h3>Impagos</h3>
            <p class="card-text">El despacho le garantiza el asesoramiento y dirección técnica por nuestros abogados en esta materia. De este modo, asistimos tanto a empresas como a particulares en relación a la gestión y <strong>cobro de impagados</strong>.</p>
            <a class="btn btn-default btn-md" onclick="mail_con_asunto('Impagos')">Consultar</a>
        </div>
      </div>
    </div>

    <div class="col-xs-18 col-sm-6 col-md-3">
      <div class="thumbnail">
        <img src="images/icons/13.png" alt="Accidentes de Trafico">
          <div class="caption">
            <h3  style="margin-top: -15px;">Accidentes de Tráfico</h3>
            <p class="card-text">Despacho especializado durante más de veinte años en <strong>reclamación de lesiones</strong> derivadas de accidentes de tráfico. Garantizándoles el asesoramiento y dirección técnica durante el procedimiento.</p>
            <a class="btn btn-default btn-md" style="margin-top: 0px;" onclick="mail_con_asunto('Accidentes de Tráfico')">Consultar</a>
        </div>
      </div>
    </div>
    <!--/Patrimonial
    <div class="col-xs-18 col-sm-6 col-md-3">
      <div class="thumbnail">
        <img src="images/icons/4.png" alt="Derecho patrimonial icono">
          <div class="caption">
            <h3>Patrimonial</h3>
            <p class="card-text">Reclamación de los perjuicios sufridos por daños materiales y lesiones frente a la Administración Pública.</p>
            <a class="btn btn-default btn-md" onclick="mail_con_asunto('Patrimonial')">Consultar</a>
        </div>
      </div>
    </div>-->

    <div class="col-xs-18 col-sm-6 col-md-3">
      <div class="thumbnail">
        <img src="images/icons/3.png" alt="abogado familiar">
          <div class="caption">
            <h3>Familiar</h3>
            <p class="card-text">Nuestros abogados le asesorarán y llevarán los <strong>trámites y procesos de Adopción</strong>, Patria Potestad, Emancipación y demás temas Legales relacionados con el Derecho de Familia.</p>
            <a class="btn btn-default btn-md" onclick="mail_con_asunto('Familiar')">Consultar</a>
        </div>
      </div>
    </div>
  </div>
</div>