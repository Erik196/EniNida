from django.db import models

class Clothes(models.Model):
    title = models.CharField(max_length=200)
    content = models.TextField(max_length=500)
    type = models.CharField(max_length=20)
    image = models.ImageField(upload_to='images/') 

    def __str__(self):
        return self.title