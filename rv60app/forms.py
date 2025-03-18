from django import forms
from .models import Addressip

class AddressipForm(forms.ModelForm):
    class Meta:
        model = Addressip
        fields = ['ip', 'tipo']
        

class ContactForm(forms.Form):
    name = forms.CharField(max_length=100, widget=forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'Su Nombre'}))
    email = forms.EmailField(widget=forms.EmailInput(attrs={'class': 'form-control', 'placeholder': 'Su Email'}))
    subject = forms.CharField(max_length=200, widget=forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'Tópico'}))
    message = forms.CharField(widget=forms.Textarea(attrs={'class': 'form-control', 'placeholder': 'Su Mensaje', 'rows': 4}))
