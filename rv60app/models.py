
from django.db import models

#########################################################

class Autor(models.Model):
    profeta = models.CharField(max_length=50)

    class Meta:
        db_table="autor"
    def __str__(self):
        return f"{self.profeta}"

#########################################################    
    
class Division(models.Model):
    grupo = models.CharField(max_length=50)
    
    class Meta:
        db_table="division"
    def __str__(self):
        return f"{self.grupo}"    

#########################################################

class Libro(models.Model):
    link = models.CharField(max_length=150, blank=True, null=True)
    libro_en = models.CharField(max_length=100, blank=True, null=True)
    libro_es = models.CharField(max_length=100, blank=True, null=True)
    temaprincipal = models.CharField(max_length=500, blank=True, null=True)
    textos = models.CharField(max_length=500, blank=True, null=True)
    year = models.CharField(max_length=15, blank=True, null=True)
    author = models.ForeignKey(Autor, models.DO_NOTHING, blank=True, null=True)
    divisiones = models.ForeignKey(Division, models.DO_NOTHING, blank=True, null=True)
    
    class Meta:
        db_table="libro"
    def __str__(self):
        return f"{self.link} | {self.libro_en} | {self.libro_es} | {self.temaprincipal} | {self.textos} | {self.year} | {self.author} | {self.divisiones}"    

#########################################################
    
class Capitulo(models.Model):
    caps_de_libros = models.IntegerField(blank=True, null=True)
    libros = models.ForeignKey('Libro', models.DO_NOTHING)    
    
    class Meta:
        db_table="capitulo"
    def __str__(self):
        return f"{self.caps_de_libros} | {self.libros}"    

#########################################################

class Versiculo(models.Model):
    contenido = models.TextField(blank=True, null=True)
    numero = models.IntegerField(blank=True, null=True)
    content = models.TextField(blank=True, null=True)
    capitulos = models.ForeignKey(Capitulo, models.DO_NOTHING, blank=True, null=True)
    
    class Meta:
        db_table="versiculo"
    def __str__(self):
        return f"{self.contenido} | {self.numero} | {self.content} | {self.capitulos}"    
    
#########################################################
       
class Tema(models.Model):
    titulo = models.TextField()
    verso_start = models.IntegerField()
    verso_end = models.IntegerField()

    class Meta:
        db_table="tema"
    def __str__(self):
        return f"{self.titulo} | {self.verso_start} | {self.verso_end}"

#########################################################

class Diccionario(models.Model):
    palabra = models.CharField(max_length=100, blank=True, null=True)
    definicion = models.TextField(blank=True, null=True)

    class Meta:
        db_table="diccionario"
    def __str__(self):
        return f"{self.palabra} | {self.definicion}"

#########################################################

class Lectura(models.Model):
    mes = models.IntegerField()
    dia = models.IntegerField()
    st_am = models.IntegerField()
    end_am = models.IntegerField()
    st_pm = models.IntegerField()
    end_pm = models.IntegerField()

    class Meta:
        db_table="lectura"
    def __str__(self):
        return f"{self.mes} | {self.dia} | {self.st_am} | {self.end_am} | {self.st_pm} | {self.end_pm}"

#########################################################

class Doctrina(models.Model):
    titulo = models.CharField(max_length=150, blank=True)
    maintexto = models.TextField(blank=True, null=True)
    
    class Meta:
        db_table="doctrina"
    def __str__(self):
        return f"{self.titulo} | {self.maintexto}"    

#########################################################

class Doct_texto(models.Model):
    texto = models.TextField(blank=True, null=True)
    orden_t = models.IntegerField(blank=True, null=True)
    textofk = models.ForeignKey(Doctrina, models.DO_NOTHING, blank=True, null=True)

    class Meta:
        db_table="doct_texto"
    def __str__(self):
        return f"{self.textofk.titulo} | {self.orden_t} | {self.texto}"
    
#########################################################

class Doct_verso(models.Model):
    verso = models.IntegerField(blank=True, null=True)
    orden_v = models.IntegerField(blank=True, null=True)
    versofk = models.ForeignKey(Doctrina, models.DO_NOTHING, blank=True, null=True)
 
    class Meta:
        db_table="doct_verso"
    def __str__(self):
        return f"{self.versofk.titulo} | {self.orden_v} | {self.verso}"
    
#########################################################

class Timeline(models.Model):
    evento = models.CharField(max_length=255, blank=True, null=True)
    desde = models.IntegerField(null=True)  # Example: -500 for 500 BCE
    hasta = models.IntegerField(null=True)  # Example: -500 for 500 BCE
    texto = models.TextField(blank=True, null=True)
    class Meta:
        db_table="timeline"
    def __str__(self):
        return f"{self.evento} | {self.desde} | {self.hasta} | {self.texto}"
    
#########################################################

class Tdetail(models.Model):
    id_fk_timeline = models.ForeignKey(Timeline, models.DO_NOTHING, blank=True, null=True)
    texto = models.TextField(blank=True, null=True)
    foto = models.CharField(blank=True, null=True)
    
    class Meta:
        db_table="tdetail"
    def __str__(self):
        return f"{self.id_fk_timeline.evento} | {self.texto} | {self.foto}"
    
#########################################################

class Expositor(models.Model):
    nombre = models.CharField(blank=True, null=True)
    pais = models.CharField(blank=True, null=True)
    
    class Meta:
        db_table="expositor"
    def __str__(self):
        return f"{self.nombre} | {self.pais}"
    
#########################################################

class Doct_exp(models.Model):
    doctrina = models.CharField(blank=True, null=True)
    
    class Meta:
        db_table="doct_exp"
    def __str__(self):
        return f"{self.doctrina}"
    
#########################################################

class Video(models.Model):
    id_fk_expositor = models.ForeignKey(Expositor, models.DO_NOTHING, blank=True, null=True)
    id_fk_doct_exp = models.ForeignKey(Doct_exp, models.DO_NOTHING, blank=True, null=True)
    link = models.CharField(blank=True, null=True)
    titulo = models.CharField(blank=True, null=True)
    
    class Meta:
        db_table="video"
    def __str__(self):
        return f"{self.id_fk_expositor.nombre} | {self.id_fk_doct_exp.doctrina} | {self.link} | {self.titulo}"
    
#########################################################

class Urls(models.Model):
    link = models.CharField(blank=True, null=True)
    titulo = models.CharField(blank=True, null=True)
    
    class Meta:
        db_table="urls"
    def __str__(self):
        return f"{self.link} | {self.titulo}"
    
#########################################################

# class Addressip(models.Model):
#     ip = models.GenericIPAddressField(blank=True, null=True)
#     date = models.DateField(blank=True, null=True)
#     time = models.TimeField(blank=True, null=True)
#     tipo = models.BooleanField(blank=True, null=True)