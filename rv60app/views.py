from django.db.models import F, Q, Value
from django.shortcuts import render, redirect
from .models import Libro, Capitulo, Versiculo, Diccionario, Lectura, Tema, Autor, Division, Doctrina, Doct_texto, Doct_verso, Video, Urls, Doct_exp, Expositor, Timeline
from django.db import connection
from django.db.models import Func
from django.contrib.postgres.search import SearchQuery, SearchVector, SearchRank, SearchHeadline
from django.core.paginator import Paginator


# Create your views here.

########################   Video

class Unaccent(Func):
    function = 'unaccent'
    

def video(request):
    busca_video = request.GET.get("busca_video")  # Get search term from request
    page_number = request.GET.get("page")  # Get page number from request

    if busca_video:
        # Normalize the search term by applying `unaccent`
        busca_video_unaccented = Func(Value(busca_video), function='unaccent')

        # Query the database, applying `unaccent` to fields for accent-insensitive comparison
        videos_queryset = Video.objects.annotate(
            unaccented_title=Func('titulo', function='unaccent'),
            unaccented_expositor=Func('id_fk_expositor__nombre', function='unaccent'),
            unaccented_doctrina=Func('id_fk_doct_exp__doctrina', function='unaccent')
        ).filter(
            Q(unaccented_title__icontains=busca_video_unaccented) |
            Q(unaccented_expositor__icontains=busca_video_unaccented) |
            Q(unaccented_doctrina__icontains=busca_video_unaccented)
        ).order_by('titulo')
    else:
        # If no search term, retrieve all videos
        videos_queryset = Video.objects.all().order_by('titulo')

    # Set up pagination (25 items per page, adjustable as needed)
    paginator = Paginator(videos_queryset, 25)
    page_obj = paginator.get_page(page_number)

    # Pass the page object and search term to the context
    context = {
        'page_obj': page_obj,
        'busca_video': busca_video  # Retain search term for template use
    }

    return render(request, 'rv60app/video.html', context=context)


########################   Biblia

def biblia(request):
    book = Libro.objects.all().order_by('id')
    return render(request, 'rv60app/biblia.html', {'books':book}) 

def chapter(request):
    chapter_select = request.GET.get('chapter_select') 
    book = Libro.objects.get(id=chapter_select) 
    #v = Versiculo.objects.raw(f"SELECT * FROM versiculo WHERE id = {chapter_select};") 
    v = Versiculo.objects.filter(numero=chapter_select)
    for verse in v:
        print(verse.numero.caps_de_libros)


    if chapter_select: 
            chapters = Capitulo.objects.filter(libros_id=chapter_select) 
    else:
         chapters = None
    context = {
        'chapters': chapters,
        'book':book.libro_es
    }
   # return render(request, 'partials/chapter.html', context)
    return render(request, "index.html")    

########################   Home

def home(request):
    
      
      return render(request, 'rv60app/index.html')

########################   RV Lectura

def rvlectura(request):
    
      mi_lectura = Libro.objects.all().order_by('id')
      context = {'libros': mi_lectura}

      return render(request, 'rv60app/rvlectura.html', context=context)
  
########################   Doctrina

# def doctrina(request):
#       busca_doctrina=request.GET.get("busca_doctrina")
    
#       mi_lectura = Doctrina.objects.all().order_by('titulo')
#       context = {'doctrinas': mi_lectura}
#       if busca_doctrina:
#                 doct=Doctrina.objects.filter(Q(titulo__icontains=busca_doctrina))
#                 my_lectura = Doctrina.objects.all()
#                 context = {'doctrinas': doct}
#                 return render(request, 'rv60app/doctrina.html', context=context)
#       return render(request, 'rv60app/doctrina.html', context=context)  
  
def doctrina(request):
    busca_doctrina = request.GET.get("busca_doctrina")
    page_number = request.GET.get("page")   
  
    if busca_doctrina:
        busca_doctrina_unaccented = Func(Value(busca_doctrina), function='unaccent')
        doctrinas_queryset = Doctrina.objects.annotate(
            unaccented_title=Func('titulo', function='unaccent')
        ).filter(
            Q(unaccented_title__icontains=busca_doctrina_unaccented) 
        ).order_by('titulo')
    else:
        doctrinas_queryset = Doctrina.objects.all().order_by('titulo')  
         
    paginator = Paginator(doctrinas_queryset, 5)
    page_obj = paginator.get_page(page_number)
 
    context = {
        'page_obj': page_obj,
        'busca_doctrina': busca_doctrina, 
        'doctrinas_queryset': doctrinas_queryset
    }

    return render(request, 'rv60app/doctrina.html', context=context)  
  
 ########################   Diccionario

def diccionario(request):
    busca_palabra = request.GET.get("busca_palabra")  # Get search term from request
    page_number = request.GET.get("page")  # Get page number from request

    if busca_palabra:
        busca_palabra_unaccented = Func(Value(busca_palabra), function='unaccent')
        palabras_queryset = Diccionario.objects.annotate(
            unaccented_title=Func('palabra', function='unaccent')
        ).filter(
            Q(unaccented_title__icontains=busca_palabra_unaccented) 
        ).order_by('palabra')
    else:
        palabras_queryset = Diccionario.objects.all().order_by('palabra')

    # Set up pagination (8 items per page, you can adjust this number)
    paginator = Paginator(palabras_queryset, 8)
    page_obj = paginator.get_page(page_number)

    # Pass the page object and search term to the context
    context = {
        'page_obj': page_obj,
        'busca_palabra': busca_palabra  # Retain search term for template use
    }

    return render(request, 'rv60app/diccionario.html', context=context)
  
 ########################   Temas

def tema(request):
    busca_tema = request.GET.get("busca_tema")
    page_number = request.GET.get("page")  # Get the page number from the request

    if busca_tema:
        busca_tema_unaccented = Func(Value(busca_tema), function='unaccent')
        temas_queryset = Tema.objects.annotate(
            unaccented_title=Func('titulo', function='unaccent')
        ).filter(
            Q(unaccented_title__icontains=busca_tema_unaccented) 
        ).order_by('verso_start')
    else:
        temas_queryset = Tema.objects.all().order_by('verso_start')

    # Set up pagination (25 items per page, you can adjust this number)
    paginator = Paginator(temas_queryset, 25)
    page_obj = paginator.get_page(page_number)

    # Pass the page object to the context
    context = {
        'page_obj': page_obj,
        'busca_tema': busca_tema  # Retain search term for use in the template
    }

    return render(request, 'rv60app/tema.html', context=context)



def porcion(request, start, end, titulo):
#     v = Versiculo.objects.filter(
#         id__range=(start, end)
#     ).select_related('capitulos__libros').annotate(
#         libro_es=F('capitulos__libros__libro_es'),
#         caps_de_libros=F('capitulos__caps_de_libros')
#     )

    v = Versiculo.objects.raw(f""" 
      SELECT * FROM public.versiculo 
         inner join public.capitulo on versiculo.capitulos_id = capitulo.id
         inner join public.libro on capitulo.libros_id = libro.id
         where versiculo.id between {start} and {end}
         order by versiculo.id
		 
""")
    processed_result = []
    last_caps = None  # Track the last processed chapter
    last_libro = None  # Track the last processed book

    for x in v:
        # Reset libro_es only when caps_de_libros changes
        if x.caps_de_libros != last_caps:
            last_caps = x.caps_de_libros
            last_libro = x.libro_es
        else:
            x.caps_de_libros = None  # Clear caps_de_libros for repeated rows
            x.libro_es = None  # Clear libro_es for repeated rows

        processed_result.append(x)

    # Replace None with a blank string for display
    for x in processed_result:
        if x.libro_es is None:
            x.libro_es = ''
        if x.caps_de_libros is None:
            x.caps_de_libros = ''

    contexto = {
        'resultado': processed_result,
        'titulo': titulo,
    }

    return render(request, 'rv60app/tematico.html', contexto)



##################################################################################################

from django.shortcuts import render, get_object_or_404

        
from django.views.generic.detail import DetailView
from .models import Doctrina, Doct_texto, Doct_verso

class DoctrinaDetailView(DetailView):
    model = Doctrina
    template_name = 'doctrina_detail.html'
    context_object_name = 'doctrina'

   

def doctrina_detail_view(request, pk):
    doctrina = get_object_or_404(Doctrina, pk=pk)
    
    doct_textos = Doct_texto.objects.filter(textofk=doctrina).order_by('orden_t')
    doct_versos = Doct_verso.objects.filter(versofk=doctrina).order_by('orden_v')
    

    v2 = []
    for x in doct_versos:
        v = Versiculo.objects.filter(id=(x.verso)
    ).select_related('capitulos__libros').annotate(
        libro_es=F('capitulos__libros__libro_es'),
        caps_de_libros=F('capitulos__caps_de_libros')
    )
    
    
        v2.append(v)
    
        
        context={
            'doct_textos':doct_textos,
            # 'doct_versos':doct_versos,
            'doct_versosx':v2
        }
    return render(request, 'rv60app/doctrina_detail.html', context)



def urls(request):
    busca_urls = request.GET.get("busca_urls")  # Get search term from request
    page_number = request.GET.get("page")  # Get page number from request

    if busca_urls:
        urls_queryset = Urls.objects.filter(Q(titulo__icontains=busca_urls)).order_by('titulo')
    else:
        urls_queryset = Urls.objects.all().order_by('titulo')

    # Set up pagination (10 items per page, adjustable as needed)
    paginator = Paginator(urls_queryset, 10)
    page_obj = paginator.get_page(page_number)

    # Pass the page object and search term to the context
    context = {
        'page_obj': page_obj,
        'busca_urls': busca_urls  # Retain search term for template use
    }

    return render(request, 'rv60app/urls.html', context=context)  

##################################################################################################
 
########################   Timeline


def timeline(request):
    busca_timeline = request.GET.get("busca_timeline")
    page_number = request.GET.get("page")  # Get the page number from the request 
  
    if busca_timeline:
        busca_timeline_unaccented = Func(Value(busca_timeline), function='unaccent')
        timelines_queryset = Timeline.objects.annotate(
            unaccented_title=Func('evento', function='unaccent')
        ).filter(
            Q(unaccented_title__icontains=busca_timeline_unaccented) 
        ).order_by('-desde')
    else:
        timelines_queryset = Timeline.objects.all().order_by('-desde')
    differences = []
    for i in range(0, len(timelines_queryset)):
        diff = timelines_queryset[i].hasta - timelines_queryset[i].desde
        differences.append({
        "desde": timelines_queryset[i].desde,
        "hasta": timelines_queryset[i].hasta,
        "evento": timelines_queryset[i].evento,
        "texto": timelines_queryset[i].texto,
        "difference": abs(diff), 
        "d":diff}) # Absolute difference
              
    # Set up pagination (5 items per page, you can adjust this number)
    paginator = Paginator(timelines_queryset, 5)
    page_obj = paginator.get_page(page_number)
 
    context = {
        'page_obj': page_obj,
        'busca_timeline': busca_timeline, 
        'timelines_queryset': timelines_queryset,
        'differences' : differences,
    }

    return render(request, 'rv60app/timeline.html', context=context) 
  
  
 

from datetime import date

def today_date_view(request):
    # Get today's date
    today = date.today()
    print (today)
    
    # Extract month and day
    today_month = today.month
    today_day = today.day
    print(today_month)
    print(today_day)
    
    context = {
    'today_month' : today_month,
    'today_day' : today_day,
    }
    
    return render(request, 'rv60app/hoy.html', context=context)