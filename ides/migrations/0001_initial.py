# -*- coding: utf-8 -*-
# Generated by Django 1.9 on 2017-02-04 22:26
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Capas_cedeus',
            fields=[
                ('titulo', models.CharField(max_length=200, primary_key=True, serialize=False)),
                ('categoria', models.CharField(max_length=200)),
                ('fecha', models.CharField(max_length=200)),
                ('keys', models.CharField(max_length=300)),
                ('abstract', models.CharField(max_length=1000)),
                ('name', models.CharField(default='', max_length=200)),
                ('workspace', models.CharField(default='', max_length=200)),
            ],
        ),
        migrations.CreateModel(
            name='Capas_cigiden',
            fields=[
                ('titulo', models.CharField(max_length=200, primary_key=True, serialize=False)),
                ('categoria', models.CharField(max_length=200)),
                ('fecha', models.CharField(max_length=200)),
                ('keys', models.CharField(max_length=300)),
                ('abstract', models.CharField(max_length=1000)),
                ('name', models.CharField(default='', max_length=200)),
                ('workspace', models.CharField(default='', max_length=200)),
            ],
        ),
        migrations.CreateModel(
            name='Capas_ocuc',
            fields=[
                ('titulo', models.CharField(max_length=200, primary_key=True, serialize=False)),
                ('categoria', models.CharField(max_length=200)),
                ('fecha', models.CharField(max_length=200)),
                ('keys', models.CharField(max_length=300)),
                ('abstract', models.CharField(max_length=1000)),
                ('name', models.CharField(default='', max_length=200)),
                ('workspace', models.CharField(default='', max_length=200)),
            ],
        ),
        migrations.CreateModel(
            name='Funciona',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('titulo', models.CharField(max_length=200, null=True)),
                ('categoria', models.CharField(max_length=200, null=True)),
                ('fecha', models.CharField(max_length=200, null=True)),
                ('keys', models.CharField(max_length=300, null=True)),
                ('abstract', models.CharField(max_length=1000, null=True)),
                ('name', models.CharField(default='', max_length=200, null=True)),
                ('workspace', models.CharField(default='', max_length=200, null=True)),
                ('ide', models.CharField(default='', max_length=200, null=True)),
            ],
        ),
    ]