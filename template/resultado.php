<!DOCTYPE html>
<html>
<head>
    
    <title>Integración IDES</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     {% load static %}
  <!-- Bootstrap Core CSS -->
  <link href="{% static 'css/bootstrap.min.css' %}" rel="stylesheet">

  <!-- IDES Core CSS -->
  <link href="{% static 'css/ides.css' %}" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="{% static 'css/metisMenu.min.css' %}" rel="stylesheet">

  <!-- Timeline CSS -->
  <link href="{% static 'css/timeline.css' %}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{% static 'css/sb-admin-2.css' %}" rel="stylesheet">
  <link href="{% static 'css/bootstrap-select.css' %}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{% static 'css/font-awesome.min.css' %}" rel="stylesheet" type="text/css">



  <link href="{% static 'css/carousel.css' %}" rel="stylesheet" type="text/css">    

  <!-- jQuery -->
  <script src="{% static 'js/jquery.min.js' %}"></script>
  <script src="{% static 'js/bootstrap-select.js' %}"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="{% static 'js/bootstrap.min.js' %}"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="{% static 'js/metisMenu.min.js' %}"></script>


  <script src="{% static 'js/prettify.min.js' %}"></script>
  <link rel="stylesheet" href="{% static 'css/prettify.min.css' %}">

  <link rel="stylesheet" href="{% static 'css/leaflet.css' %}" />
  <script src="{% static 'js/leaflet.js' %}"></script>
  <script src="{% static 'js/togeojson.js' %}"></script>
  <script src="{% static 'js/l.control.geosearch.js' %}"></script>
  <script src="{% static 'js/l.geosearch.provider.openstreetmap.js' %}"></script>
  <link rel="stylesheet" href="{% static 'css/l.geosearch.css' %}" />

  <script src="{% static 'js/leaflet-pip.js' %}"></script>
  <script src="{% static 'js/jquery.twbsPagination.js' %}"></script>
</head>
<body>

   <div id="wrapper">

  <div class="col-xs-12 col-md-12 col-lg-12" style="background-color:#ffffff;padding-left: 15%;padding-right: 15%;font-size:12px;">

<nav class="navbar navbar-default navbar-fixed-top" style="padding-left:15%;padding-right:15%;background-color:#ffffff;border-color:#ffffff;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/" style="padding:0;height:50px;"><img src="{% static 'images/logos/iconos_logos-29.png' %}" alt="Plataforma" style="width:96%;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav" style="text-align:center;">
            <li class="centros"><a href="/">QUIENES SOMOS</a></li>
            <li class="centros"><a href="/#categoria">CATEGORÍAS</a></li>
            <li class="centros"><a href="#myModal" data-toggle="modal" data-target="#myModal">CONTACTO</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right" style="text-align:center;margin-right:0px;">
            <li style="border-bottom-color:#000000;" class="centros"><a href="ide.ocuc.cl">IDEOCUC</a></li>
            <li style="border-bottom-color:#1F71b8;" class="centros"><a href="http://datos.cedeus.cl/">IDECEDEUS</a></li>
            <li style="border-bottom-color:#ff5000;" class="centros"><a href="http://ide.cigiden.cl/">IDECIGIDEN</a></li>
          </ul>
        </div><!--/.nav-collapse -->
    </nav>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">FORMULARIO DE CONTACTO</h4>
      </div>
      <div class="modal-body">
        <h3 style="color:#3BA9E0;font-family:'open-sans condensed bold';">CONTACTO</h3>
       <div class="form-group">
         <input type="text" class="form-control" id="nombre" placeholder="Nombre completo*:">
       </div>
       <div class="form-group">
         <input type="password" class="form-control" id="email" placeholder="E-mail*">
       </div>
       <div class="form-group">
         <input type="password" class="form-control" id="asunto" placeholder="Asunto*">
       </div>
  
        <h3 style="color:#3BA9E0;font-family:'open-sans condensed bold';">MENSAJE</h3>
         <div class="form-group">
           <textarea class="form-control" rows="5"></textarea>
         </div>
  
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" style="border:0;font- size:22px;color:#3BA9E0;font-family:'open-sans condensed bold';" data-dismiss="modal">CERRAR</button>
        <button type="submit" class="btn btn-default" style="border:0;font- size:22px;color:#3BA9E0;font-family:'open-sans condensed bold';">ENVIAR<i class="glyphicon   glyphicon-chevron-right"></i></button>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="col-xs-12 col-md-12 col-lg-12 col_principal" style="background-color:#ffffff;padding-left: 15%;padding-right: 15%;padding-bottom: 2%;font-size:12px;">

    <div class="col-md-12" style="background-image: url('{% static 'images/fondo/fondo_home-27.png' %}');border-bottom-style:inset;border-bottom-color:#3ba9e0;padding-bottom:3%;">
      <div class="col-md-3">
        <img src="../images/iconos/Icono01_buscador.png" alt="Plataforma" style="width: 75%;padding-top:12%;">
      </div>

      <div class="col-md-9">
        <h2 style="font-family:'open-sans condensed bold';color:#3ba9e0;">FRONTERAS</h2>
        <p>
          Consectetur adipiscing elit. Curabitur vel lacus vel dui interdum mollis eget et
          odio. Etiam malesuada sapien metus, pellentesque consectetur nibh dapibus
          a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
          inceptos himenaeos. 
        </p>
      </div>
    </div>

    </div>

    <div class="col-md-12" style="background-color:#ffffff;padding-left: 15%;padding-right: 15%;padding-bottom: 2%;font-size:12px;">
      <div class="col-md-12" style="border-bottom-style:outset;border-bottom-color:#3BA9E0;padding:0px;">
      <div class="col-md-4" style="border-top-style:outset;border-top-color:#3BA9E0;">
       <h3 style="color:#3BA9E0;font-family:'open-sans condensed bold';">ORDEN</h3>
        <div id="custom-search-input" style="padding-bottom:20px;border-bottom-style:outset;">
            <div class="input-group col-md-12" style="padding-bottom:2%;">
                <input type="text" style="font-size:12px;" class="form-control input-lg" placeholder="Alfabético: A-Z / Z-A" />
                <span class="input-group-btn">
                    <button class="btn btn-info btn-lg" type="button">
                        <i class="glyphicon glyphicon-chevron-down"></i>
                    </button>
                </span>
            </div>
            <div class="input-group col-md-12">
                <input type="text" style="font-size:12px;" class="form-control input-lg" placeholder="Fecha: Más Reciente / Más Antiguo" />
                <span class="input-group-btn">
                    <button class="btn btn-info btn-lg" type="button">
                        <i class="glyphicon glyphicon-chevron-down"></i>
                    </button>
                </span>
            </div>
          </div>
       <h3 style="color:#3BA9E0;font-family:'open-sans condensed bold';">FILTRO</h3>
        <div id="custom-search-input" style="margin-bottom:20px;">
            <div class="input-group col-md-12" style="padding-bottom:2%;">
                <input type="text" style="font-size:12px;" class="form-control input-lg" placeholder="Autor: CIGIDEN - CEDEUS - OCUC" />
                <span class="input-group-btn">
                    <button class="btn btn-info btn-lg" type="button">
                        <i class="glyphicon glyphicon-chevron-down"></i>
                    </button>
                </span>
            </div>
          </div>


      </div>
      <div class="col-md-8">      
           <nav aria-label="Page navigation">
           <div id="content"></div>
           <ul class="sync-pagination pagination-sm"></ul>
           </nav>
      </div>
      </div>

<div class="col-xs-12 col-md-12 col-lg-12 footer">

  <!--<div class="col-xs-12 col-md-3 col-lg-3">
    <a href="#myTopnav"><img class="img-responsive logos" src="{% static 'images/logos/iconos_logos-21.png' %}" /></a>
  </div>-->

  <div class="col-xs-12 col-md-3 col-lg-3">
    <a href="http://www.uc.cl/"><p style="text-align:-webkit-center;"><img class="img-responsive logos" src="{% static 'images/logos/logo_uc.jpg' %}" id="logo_uc"/></p></a>
  </div>

  <div class="col-xs-4 col-md-3 col-md-3">
    <a href="http://ocuc.cl/"><p style="text-align:-webkit-center;"><img class="img-responsive logos" src="{% static 'images/logos/iconos_logos-23.png' %}" id="logo_ocuc"/></p></a>
  </div>
  <div class="col-xs-4 col-md-3 col-md-3">
    <a href="http://www.cigiden.cl/"><p style="text-align:-webkit-center;"><img class="img-responsive logos" src="{% static 'images/logos/iconos_logos-24.png' %}" id="logo_cigiden"/></p></a>
  </div>

  <div class="col-xs-4 col-md-3 col-md-3">
    <a href="http://www.cedeus.cl/"><p style="text-align:-webkit-center;"><img class="img-responsive logos" src="{% static 'images/logos/iconos_logos-25.png' %}" id="logo_cedeus"/></p></a>
  </div>

</div>



    </div>

</div>


<script type="text/javascript">

var cont=1;
    $('.sync-pagination').twbsPagination({
        totalPages: 3,
        onPageClick: function (evt, page) {
            $('#content').html('<div class="col-md-12"><div class="col-md-4" style="padding:0px;"><img src="{% static "images/iconos/iconos04_economia.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;"></div><div class="col-md-8"><h4 style="margin-top:0px;color:#000000;font-family:open-sans condensed bold;">NOMBRE DATO PELLENTESQUUE LUCTUS LACUS VITAE EX LOBORTIS EGESTAS '+cont+'</h4><p>Fuente: <strong style="color:#ff5000;">CIGIDEN</strong><br>Categoría: <strong>Fronteras</strong><br>Descripción:<br>Vel aliquest risus. Pellentesque luctus lacus vitae ex lobortis egestas. Mauris eget tinvel aliquest risus. Pellentesque luctus lacus vitae ex lobortis egestas. Mauris eget tinvel aliquest risus.</p></div></div><div class="col-md-12"><div class="col-md-4" style="padding:0px;"><img src="{% static "images/iconos/iconos04_economia.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;"></div><div class="col-md-8"><h4 style="margin-top:0px;color:#000000;font-family:open-sans condensed bold;">NOMBRE DATO PELLENTESQUUE LUCTUS LACUS VITAE EX LOBORTIS EGESTAS '+cont+'</h4><p>Fuente: <strong style="color:#1F71b8;">CEDEUS</strong><br>Categoría: <strong>Fronteras</strong><br>Descripción:<br>Vel aliquest risus. Pellentesque luctus lacus vitae ex lobortis egestas. Mauris eget tinvel aliquest risus. Pellentesque luctus lacus vitae ex lobortis egestas. Mauris eget tinvel aliquest risus.</p></div></div><div class="col-md-12"><div class="col-md-4" style="padding:0px;"><img src="{% static "images/iconos/iconos04_economia.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;"></div><div class="col-md-8"><h4 style="margin-top:0px;color:#000000;font-family:open-sans condensed bold;">NOMBRE DATO PELLENTESQUUE LUCTUS LACUS VITAE EX LOBORTIS EGESTAS '+cont+'</h4><p>Fuente: <strong style="color:#000000;">OCUC</strong><br>Categoría: <strong>Fronteras</strong><br>Descripción:<br>Vel aliquest risus. Pellentesque luctus lacus vitae ex lobortis egestas. Mauris eget tinvel aliquest risus. Pellentesque luctus lacus vitae ex lobortis egestas. Mauris eget tinvel aliquest risus.</p></div></div><div class="col-md-12"><div class="col-md-4" style="padding:0px;"><img src="{% static "images/iconos/iconos04_economia.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;"></div><div class="col-md-8"><h4 style="margin-top:0px;color:#000000;font-family:open-sans condensed bold;">NOMBRE DATO PELLENTESQUUE LUCTUS LACUS VITAE EX LOBORTIS EGESTAS '+cont+'</h4><p>Fuente: <strong style="color:#000000;">OCUC</strong><br>Categoría: <strong>Fronteras</strong><br>Descripción:<br>Vel aliquest risus. Pellentesque luctus lacus vitae ex lobortis egestas. Mauris eget tinvel aliquest risus. Pellentesque luctus lacus vitae ex lobortis egestas. Mauris eget tinvel aliquest risus.</p></div></div><div class="col-md-12"><div class="col-md-4" style="padding:0px;"><img src="{% static "images/iconos/iconos04_economia.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;"></div><div class="col-md-8"><h4 style="margin-top:0px;color:#000000;font-family:open-sans condensed bold;">NOMBRE DATO PELLENTESQUUE LUCTUS LACUS VITAE EX LOBORTIS EGESTAS '+cont+'</h4><p>Fuente: <strong style="color:#000000;">OCUC</strong><br>Categoría: <strong>Fronteras</strong><br>Descripción:<br>Vel aliquest risus. Pellentesque luctus lacus vitae ex lobortis egestas. Mauris eget tinvel aliquest risus. Pellentesque luctus lacus vitae ex lobortis egestas. Mauris eget tinvel aliquest risus.</p></div></div>');
            cont++;
        }
    });
</script>




</body>
</html>