"""integracion URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/1.9/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  url(r'^$', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  url(r'^$', Home.as_view(), name='home')
Including another URLconf
    1. Add an import:  from blog import urls as blog_urls
    2. Import the include() function: from django.conf.urls import url, include
    3. Add a URL to urlpatterns:  url(r'^blog/', include(blog_urls))
"""
from django.conf.urls import patterns, include, url
from django.contrib import admin
from ides.views import index,buscador,quienes_somos,sesion,send_email,paginando,login,resultado,add_capa,codigo,categoria,user_admin,user_admin_perfil
from django.contrib.staticfiles.urls import staticfiles_urlpatterns
from django.conf.urls.static import static
import settings

urlpatterns = patterns('',
    url(r'^admin/', admin.site.urls),
    url(r'^$',index),
    url(r'^quienes_somos',quienes_somos),  
    url(r'^buscador',buscador),    
    url(r'^resultado/$',resultado),
    url(r'^codigo/',codigo),
    url(r'^user_admin/',user_admin),
    url(r'^user_admin_perfil/',user_admin_perfil),
    url(r'^login/',login),
    url(r'^send_email/',send_email),
    url(r'^sesion/',sesion),
    url(r'^paginando/',paginando),
    url(r'^perfil/',user_admin_perfil),
    url(r'^categoria',categoria)
)

urlpatterns += staticfiles_urlpatterns()
urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
