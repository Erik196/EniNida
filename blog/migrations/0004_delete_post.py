# Generated by Django 5.1 on 2024-08-09 13:25

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('blog', '0003_clothes_alter_post_date_posted'),
    ]

    operations = [
        migrations.DeleteModel(
            name='Post',
        ),
    ]
