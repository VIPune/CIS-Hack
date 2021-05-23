from django.contrib import admin
from django.urls import path,include
from . import views
urlpatterns = [
    path('', views.index,name='homepage'),
    path('predictImage', views.predictImage,name='predictimage'),
    path('viewDataBase', views.viewDataBase,name='viewDataBase'),

]
