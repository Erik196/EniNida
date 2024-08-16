from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse
from django.urls import reverse
from .models import Clothes
import os



def home(request):
    clothes = Clothes.objects.all()  # Retrieve all clothes
    return render(request, 'blog/home.html', {'clothes': clothes})

def about(request, id):
    item = get_object_or_404(Clothes, id=id)
    return render(request, 'blog/about.html', {'item': item})
