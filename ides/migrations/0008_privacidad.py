# -*- coding: utf-8 -*-
# Generated by Django 1.9 on 2017-04-12 16:52
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('ides', '0007_auto_20170412_1423'),
    ]

    operations = [
        migrations.CreateModel(
            name='Privacidad',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('titulo', models.CharField(max_length=200, null=True)),
                ('privacidad', models.CharField(default='', max_length=200, null=True)),
            ],
        ),
    ]
