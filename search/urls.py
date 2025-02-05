from django.urls import path
from . import views

urlpatterns = [
    path('', views.search, name="search"),
    path("results/", views.results, name="results"),
    path("chapter/<book>/<chapter>", views.get_chapter, name="get_chapter"),
]

