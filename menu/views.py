from django.shortcuts import render, redirect
from rv60app.models import Libro , Capitulo, Versiculo, Tema





def menu_combined(request):
    books = Libro.objects.all().order_by('id')
    chapters = None
    verses = None
    selected_book = None
    selected_chapter = None 
    selected_tema = None
    numero_verso = None

    book_select = request.GET.get('book_select')  # Selected book
    chapter_select = request.GET.get('chapter_select')  # Selected chapter
    holly = Tema.objects.all()
     
    if book_select:
        selected_book = Libro.objects.get(id=book_select)
        chapters = Capitulo.objects.filter(libros=selected_book) 


    if chapter_select:
        selected_chapter = Capitulo.objects.get(id=chapter_select)
        verses = Versiculo.objects.filter(capitulos=selected_chapter)
        
        
        for y in holly:
            for x in verses:
                 if x.id == y.verso_start:
                     selected_tema=(y.titulo)
                     numero_verso=(x.id)
                    

    # Handle POST for navigating to the next or previous chapter
    if request.method == "POST":
        action = request.POST.get('next') or request.POST.get('prev')
        if selected_chapter:
            if action == 'next':
                # Find the next chapter
                next_chapter = Capitulo.objects.filter(libros=selected_chapter.libros, caps_de_libros__gt=selected_chapter.caps_de_libros).first()
                if next_chapter:
                    return redirect(f"{request.path}?book_select={selected_book.id}&chapter_select={next_chapter.id}")
                else:
                    # Move to the first chapter of the next book
                    next_book = Libro.objects.filter(id__gt=selected_book.id).first()
                    if next_book:
                        first_chapter = Capitulo.objects.filter(libros=next_book).first()
                        if first_chapter:
                            return redirect(f"{request.path}?book_select={next_book.id}&chapter_select={first_chapter.id}")

            elif action == 'prev':
                # Find the previous chapter
                prev_chapter = Capitulo.objects.filter(libros=selected_chapter.libros, caps_de_libros__lt=selected_chapter.caps_de_libros).last()
                if prev_chapter:
                    return redirect(f"{request.path}?book_select={selected_book.id}&chapter_select={prev_chapter.id}")
                else:
                    # Move to the last chapter of the previous book
                    prev_book = Libro.objects.filter(id__lt=selected_book.id).last()
                    if prev_book:
                        last_chapter = Capitulo.objects.filter(libros=prev_book).last()
                        if last_chapter:
                            return redirect(f"{request.path}?book_select={prev_book.id}&chapter_select={last_chapter.id}")
    
    context = {
        'books': books,
        'chapters': chapters,
        'verses': verses,
        'selected_book': selected_book,
        'selected_chapter': selected_chapter,
        'selected_tema': selected_tema,
        'numero_verso': numero_verso,
        'holly':holly,
        
    }
    return render(request, 'menu/menu.html', context)
