from django.contrib import admin
from .models import Libro, Capitulo, Versiculo, Diccionario, Lectura, Tema, Autor, Division, Doctrina, Doct_texto, Doct_verso, Expositor, Doct_exp, Video, Urls, Timeline, Tdetail


# Register your models here.

admin.site.register(Libro)
admin.site.register(Capitulo)
admin.site.register(Versiculo)
admin.site.register(Diccionario)
admin.site.register(Lectura)
admin.site.register(Tema)
admin.site.register(Autor)
admin.site.register(Division)
admin.site.register(Doctrina)
admin.site.register(Doct_texto)
admin.site.register(Doct_verso)
admin.site.register(Expositor)
admin.site.register(Doct_exp)
admin.site.register(Urls)
admin.site.register(Video)
admin.site.register(Timeline)
admin.site.register(Tdetail)
class VideoAdmin(admin.ModelAdmin):
    list_display = ('titulo',)
    search_fields = ('titulo',)