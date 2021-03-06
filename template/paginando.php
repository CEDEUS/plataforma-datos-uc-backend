<!DOCTYPE html>
<html>
<head>
    
    <title>Buscador PD</title>

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
<!--
    <div class="col-md-12" style="background-color:#ffffff;padding-left: 15%;padding-top: 2%;padding-right: 15%;border-bottom-style: inset;padding-bottom: 2%;">
        <div class="col-md-6">
            <img src="../images/logos/iconos_logos-21.png" alt="Plataforma" style="float:left;padding-top:1%;">
        </div>
        <div class="col-md-6">
            <img src="../images/logos/iconos_logos-22.png" alt="UC"  style="float:right;">
        </div>
    </div>
-->
       

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
       <form action="/buscador/" method="GET">
       <div class="form-group">
      <div class="col-md-12" style="border-bottom-style: outset;padding-left:0px;padding-right:0px;">
       <h3 style="color:#3BA9E0;font-family:'open-sans condensed bold';">Buscar:
        </h3>
        <div id="custom-search-input" style="margin-bottom:20px;">
            <div class="input-group col-md-12">
            <form method="get" action="/buscador">
                {% if bus == '' %}
                <input name="busqueda" type="text" class="form-control input-lg" placeholder="Palabra clave" />
                {% else %}
                 <input name="busqueda" type="text" class="form-control input-lg" placeholder="{{bus}}" />
                {% endif %}               
               <!-- <span class="input-group-btn">
                    <button class="btn btn-info btn-lg" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </span>-->
                </form>
            </div>
        </div>
      </div>

      <div class="col-md-12" style="border-bottom-style: outset;padding-left:0px;padding-right:0px;">
        <div class="col-md-6" style="padding-left:0px;">
       <h3 style="color:#3BA9E0;font-family:'open-sans condensed bold';">FILTRO</h3>
        <div id="custom-search-input" style="margin-bottom:20px;">
            <div class="input-group col-md-12" style="padding-bottom:2%;">
                <select name="categoria" class="form-control">
                  <option value="CATEGORIA">CATEGORÍA</option>
                  <option value="boundaries">FRONTERAS</option>
                  <option value="health">SALUD</option>
                  <option value="economy">ECONOMÍA</option>
                  <option value="elevation">ELEVACIÓN</option>
                  <option value="environment">MEDIO AMBIENTE</option>
                  <option value="farming">AGRICULTURA</option>
                  <option value="geoscientificInformation">INFORMACIÓN</option>
                  <option value="climatologyMeteorologyAtmosphere">CLIMATOLOGÍA</option>
                  <option value="imageryBaseMapsEarthCover">IMÁGENES SATELITALES</option>
                  <option value="inlandWaters">AGUAS TERRESTRES</option>
                  <option value="intelligenceMilitary">INTELIGENCIA MILITAR</option>
                  <option value="location">LOCALIZACIÓN</option>
                  <option value="oceans">OCEANOS</option>
                  <option value="biota">BIOTA</option>
                  <option value="society">SOCIEDAD</option>
                  <option value="structure">INFRAESTRUCTURA</option>
                  <option value="transportation">TRANSPORTE</option>
                  <option value="utilitiesCommunication">TELECOMUNICACIONES</option>
                  <option value="planningCadastre">PLANIFICACIÓN CATASTRO</option>
                </select>
            </div>
            <div class="input-group col-md-12">
                <select name="origen" class="form-control">
                  <option value="ORIGEN">ORIGEN</option>
                  <option value="CEDEUS">CEDEUS</option>
                  <option value="CIGIDEN">CIGIDEN</option>
                  <option value="OCUC">OCUC</option>
                </select>
            </div>
          </div>
        </div>
        <div class="col-md-6" style="padding-right:0px;">
       <h3 style="color:#3BA9E0;font-family:'open-sans condensed bold';">ORDEN</h3>
        <div id="custom-search-input" style="margin-bottom:20px;">
            <div class="input-group col-md-12" style="padding-bottom:2%;">
                <select name="orden" class="form-control">
                  <option value="titulo">ASC</option>
                  <option value="-titulo">DESC</option>
                </select>
            </div>
            <div class="input-group col-md-12">
                <select name="fecha" class="form-control">
                  <option value="fecha">MÁS ANTIGUO</option>
                  <option value="-fecha">MÁS NUEVO</option>
                </select>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12" style="padding:0;">
      <button class="btn btn-info btn-lg" type="submit" style="display:block;width:100%;">
          BUSCAR <i class="glyphicon glyphicon-search"></i>
      </button>
      </div>
      </div>

      </form>
    </div>

    <div class="col-md-12" style="background-color:#ffffff;padding-left: 15%;padding-right: 15%;padding-bottom: 2%;font-size:12px;">
      <div class="col-md-12" style="border-bottom-style:outset;border-bottom-color:#3BA9E0;padding:0px;">
      <div class="col-md-4" style="border-top-style:outset;border-top-color:#3BA9E0;">
       <h3 style="color:#3BA9E0;font-family:'open-sans condensed bold';">RECOMENDADOS</h3>
      </div>
      <div class="col-md-8">      
             {% for item in content %}
             <div class="col-md-12" style="padding-bottom:10px;"><div class="col-md-4" style="padding:0px;">

             {%if item.categoria == "Fronteras"%}
             <img src="{% static "images/iconos/Icono02_fronteras.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;">
             {%elif item.categoria == "Salud"%}
             <img src="{% static "images/iconos/iconos09_salud.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;">
             {%elif item.categoria == "Economia"%}
             <img src="{% static "images/iconos/iconos04_economia.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;">
             {%elif item.categoria == "Elevación"%}
             <img src="{% static "images/iconos/iconos05_elevacion.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;">
             {%elif item.categoria == "Medio ambiente"%}
             <img src="{% static "images/iconos/iconos06_mediambiente.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;">
             {%elif item.categoria == "Agricultura"%}
             <img src="{% static "images/iconos/iconos07_agri.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;">
             {%elif item.categoria == "Información"%}
             <img src="{% static "images/iconos/iconos08_informacion.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;">
             {%elif item.categoria == "Climatología"%}
             <img src="{% static "images/iconos/iconos03_meteorolo.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;">
             {%elif item.categoria == "Imágenes satelitales"%}
             <img src="{% static "images/iconos/iconos10_imagesatelital.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;">
             {%elif item.categoria == "Imágenes satelitales"%}
             <img src="{% static "images/iconos/iconos10_imagesatelital.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;">
             {%elif item.categoria == "Inteligencia militar"%}
             <img src="{% static "images/iconos/iconos12_intmilitar.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;">             
             {%elif item.categoria == "Localización"%}
             <img src="{% static "images/iconos/iconos13_localizacion.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;"> 
             {%elif item.categoria == "Oceanos"%}
             <img src="{% static "images/iconos/iconos14_oceanos.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;"> 
             {%elif item.categoria == "Biota"%}
             <img src="{% static "images/iconos/iconos20_biota.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;"> 
             {%elif item.categoria == "Sociedad"%}
             <img src="{% static "images/iconos/iconos16_sociedad.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;">    
             {%elif item.categoria == "Infraestructura"%}
             <img src="{% static "images/iconos/iconos17_infraestructura.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;"> 
             {%elif item.categoria == "Transporte"%}
             <img src="{% static "images/iconos/iconos18_transporte.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;"> 
             {%elif item.categoria == "Telecomunicaciones"%}
             <img src="{% static "images/iconos/iconos19_telecomunicaciones.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;"> 
             {%elif item.categoria == "Planificación catastro"%}
             <img src="{% static "images/iconos/iconos15_planificacioncatastros.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;"> 
             {%else%}
             <img src="{% static "images/iconos/Icono01_buscador.png" %}" alt="icono" style="width:100%;background-color:#EDEDED;"> 

             {%endif%}

             </div><div class="col-md-8">

             {%if item.ide == "OCUC"%}
             <a href="http://ideocuc.cl/layers/{{item.workspace}}:{{item.name}}">
             {%elif item.ide == "CEDEUS"%}
             <a href="http://datos.cedeus.cl/layers/{{item.workspace}}:{{item.name}}">             
             {%elif item.ide == "CIGIDEN"%}
             <a href="http://ide.cigiden.cl/layers/{{item.workspace}}:{{item.name}}">
             {%endif%}

             <h4 style="margin-top:0px;color:#000000;font-family:open-sans condensed bold;">{{item.titulo}}</h4></a><p>Fuente: 
             {%if item.ide == "CIGIDEN"%}
              <strong style="color:#ff5000;">
             {%elif item.ide == "OCUC"%}
              <strong style="color:#000000;">
             {%elif item.ide == "CEDEUS" %}
              <strong style="color:#337ab7;">
             {%endif%}

             {{item.ide}}</strong>
             <br>Categoría: <strong>{{item.categoria}}</strong><br>Descripción:<br>{{item.abstract}}<br>Fecha:{{item.fecha}}</p></div></div>
             {%endfor%}

              {% if content.has_other_pages %}
                <ul class="pagination">
                  {% if content.number == 1 %}
                  <li class="disabled"><a href="?page=1" style="color:rgb(119, 119, 119);"><i class="glyphicon glyphicon-fast-backward"></i></a></li>
                  {% else %}
                    <li><a href="?page=1"><i class="glyphicon glyphicon-fast-backward"></i></a></li>
                  {% endif %}
                  {% if content.has_previous %}
                    <li><a href="?page={{ content.previous_page_number }}"><i class="glyphicon glyphicon-backward"></i></a></li>
                  {% else %}
                    <li class="disabled"><span><i class="glyphicon glyphicon-backward"></i></span></li>
                  {% endif %}
              
                  {% for pg in page_range %}
                    {% if content.number == pg %}
                      <li class="active"><span>{{ pg }} <span class="sr-only">(current)</span></span></li>
                    {% else %}
                      <li><a href="?page={{ pg }}">{{ pg }}</a></li>
                    {% endif %}
                  {% endfor %}
                  {% if content.has_next %}
                    <li><a href="?page={{ content.next_page_number }}"><i class="glyphicon glyphicon-forward"></i></a></li>
                  {% else %}
                    <li class="disabled"><span><i class="glyphicon glyphicon-forward"></i></span></li>
                  {% endif %}
                  {% if content.number == max_index %}
                  <li class="disabled"><a href="?page={{max_index}}" style="color:rgb(119, 119, 119);"><i class="glyphicon glyphicon-fast-forward"></i></a></li>
                  {% else %}
                    <li><a href="?page={{max_index}}"><i class="glyphicon glyphicon-fast-forward"></i></a></li>
                  {% endif %}
                </ul>
              {% endif %}
      </div>      

        <div class="col-md-12" style="margin-top: 3%;">


        
  <div class="col-md-3">
    <a href="#myTopnav"><img class="img-responsive logos" src="{% static 'images/logos/iconos_logos-21.png' %}" /></a>
  </div>

  <div class="col-md-1">
    <a href="http://www.uc.cl/"><img class="img-responsive logos" src="{% static 'images/logos/iconos_logos-22.png' %}" /></a>
  </div>

  <div class="col-md-3">
    <a href="http://ocuc.cl/"><img class="img-responsive logos" src="{% static 'images/logos/iconos_logos-23.png' %}" /></a>
  </div>
  <div class="col-md-3">
    <a href="http://www.cigiden.cl/"><img class="img-responsive logos" src="{% static 'images/logos/iconos_logos-24.png' %}" /></a>
  </div>

  <div class="col-md-2">
    <a href="http://www.cedeus.cl/"><img class="img-responsive logos" src="{% static 'images/logos/iconos_logos-25.png' %}" /></a>
  </div>
        
        </div>

        <div class="col-md-12">



        </div>
</div>

</div>


</body>
</html>