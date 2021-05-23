from django.shortcuts import render
from django.core.files.storage import FileSystemStorage
import torch,os
import torchvision
import joblib
from PIL import Image
from x_ray_classification.settings import MEDIA_ROOT
# Create your views here.


train_transform = torchvision.transforms.Compose([
    torchvision.transforms.Resize(size=(100, 100)),
    torchvision.transforms.RandomHorizontalFlip(),
    torchvision.transforms.ToTensor(),
    torchvision.transforms.Normalize(mean=[0.485, 0.456, 0.406], std=[0.229, 0.224, 0.225])
])

test_transform = torchvision.transforms.Compose([
    torchvision.transforms.Resize(size=(224, 224)),
    torchvision.transforms.ToTensor(),
    torchvision.transforms.Normalize([0.485, 0.456, 0.406], [0.229, 0.224, 0.225])
])
model_Pred = joblib.load("resnet18.sav")

def index(request):
    context={'a':1}
    return render(request,'index.html',context)



def predictImage(request):

    fileObj=request.FILES['filePath']
    fs=FileSystemStorage()
    filePathName1=fs.save(fileObj.name,fileObj)
    filePathName=fs.url(filePathName1)


    img=Image.open(os.path.join(MEDIA_ROOT,filePathName1)).convert("RGB")
    img_trans=test_transform(img)
    batch_single=torch.unsqueeze(img_trans,0)
    
    model_Pred.eval()
    outputs = model_Pred(batch_single)
    _, preds = torch.max(outputs, 1)
    if(preds==0):
        final_output='Normal'
    elif(preds==1):
        final_output="Pneumonia"
    elif(preds==2):
        final_output="Covid-19"

    context={'filePathName':filePathName,"filePathName1":filePathName1,"final_output":final_output}

    if(final_output=='Normal'):
        return render(request,'result_neg.html',context)
    elif(final_output=='Covid-19'):
        return render(request,'result_pos.html',context)
    else:
        return render(request,'result_pnem.html',context)


def viewDataBase(request):
    listofimages=os.listdir('./media/')
    listofimagespath=['./media/'+i for i in listofimages]
    context={'listofimagespath':listofimagespath}

    return render(request,'viewDB.html',context)

#https://upload.photobox.com/images/icon_service_instagram_10.a.png
#background-image: url(https://assets.hongkiat.com/uploads/wood-textures/brown-wood.jpg) 
