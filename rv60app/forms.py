from django import forms
from .models import Addressip

class AddressipForm(forms.ModelForm):
    class Meta:
        model = Addressip
        fields = ['ip', 'tipo']
