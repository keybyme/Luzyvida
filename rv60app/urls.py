
from django.urls import path

from . import views

urlpatterns = [
    
  path('', views.home, name="index"),  
 
  path('rvlectura', views.rvlectura, name="rvlectura"),
  
  path('biblia', views.biblia, name="biblia"),
  
  path('doctrina', views.doctrina, name="doctrina"),
  
  path('timeline', views.timeline, name="timeline"),
  
  path('diccionario', views.diccionario, name="diccionario"),
  
  path('tema', views.tema, name="tema"),
  
  path('video', views.video, name="video"),
  
  path('urls', views.urls, name="urls"),
  
  path('porcion/<start>/<end>/<titulo>/', views.porcion, name="porcion"),
  
  path('doctrina/<pk>/', views.doctrina_detail_view, name='doctrina_detail'),
  
  path('hoy', views.hoy, name="hoy"),
  
  path('contact_view', views.contact_view, name='contact_view'),
  
]