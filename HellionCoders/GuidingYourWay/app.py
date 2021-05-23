import json as j
from flask import Flask, render_template,request
app = Flask(__name__)

headings = []
retData = []
@app.route('/',methods=['GET','POST'])
def homeLode():
    if request.method == 'POST':
        Msgname = request.form.get("Msgname")
        Msgsurname = request.form.get("Msgsurname")
        Msgemail = request.form.get("Msgemail")
        Msgmessage = request.form.get("Msgmessage")
        print(Msgname)
        print(Msgsurname)
        print(Msgemail)
        print(Msgmessage)
    return render_template('home.html', title='Home page')

@app.route('/collegeFinder',methods=['GET','POST'])
def collegeFinder():
    if request.method == "POST":
        subGroup = request.form.get("subDropDown")
        cat = request.form.get("catDropDown")
        fromPer = request.form.get("fromPer")
        toPer = request.form.get("toPer")
        criteria = request.form.get("critDropDown")
        print(subGroup)
        print(cat)
        print(fromPer)
        print(toPer)
        headings = ['College Name','Sub Group','Category',str(criteria)]
        retData = getRes(subGroup,cat,fromPer,toPer,criteria)
        return render_template('service1-collegefind.html',heading = headings,useData = retData)
    return render_template('service1-collegefind.html', title='College Finding page')

@app.route('/contentFinder',methods=['GET','POST'])
def contentFinder():
    if request.method == "POST":
        dept = request.form.get("deptDropDown")
        sem = request.form.get("semDropDown")
        course = request.form.get("courseDropDown")
        print(dept)
        print(sem)
        headings = ['Subject','Books','Learning Resources Links']
        retData = getContent(course,dept,sem)
        return render_template('service2-contentfind.html',heading = headings,useData = retData)
    return render_template('service2-contentfind.html',title='Content Finding page')

def getContent(course,dept,sem):
    import json as j
    from os import link
    f = open('static/Content.json',"r")
    x = f.read()
    data = j.loads(x)
    f.close()
    retData = []
    try:
        for i in data[course][dept][sem]:
            bookList = data[course][dept][sem][i]["Books"]
            links = data[course][dept][sem][i]["YouTube"]
            sub = i
            for j in range(max(len(bookList),len(links))):
                try:
                    b = bookList[j]
                except IndexError:
                    b = None
                try:
                    l = links[j]
                except IndexError:
                    l = None
                retData.append([sub,b,l])
                sub = None
    except KeyError:
        print("KeyError")

    return retData

def getRes(subGroup,cast,fromPerStr,toPerStr,criteria):
    f = open('static/data.json','r')
    x = f.read()
    data = j.loads(x)
    f.close()

    clgList = list(data.keys())
    if subGroup == 'Aeronautical Engineering':
        subList = ['Aeronautical Engineering[First Shift][Sub Group : 0304]',
                    'Aeronautical Engineering[First Shift][Sub Group : 0401]']
    elif subGroup == 'Agricultural Engineering' :
        subList = ['Agricultural Engineering[First Shift][Sub Group : 0401]']
    elif subGroup == 'Automobile Engineering' :
        subList = ['Automobile Engineering[First Shift][Sub Group : 0201]',
                    'Automobile Engineering[First Shift][Sub Group : 0302]',
                    'Automobile Engineering[First Shift][Sub Group : 0304]',
                    'Automobile Engineering[First Shift][Sub Group : 0305]',
                    'Automobile Engineering[First Shift][Sub Group : 0401]',
                    'Automobile Engineering[First Shift][Sub Group : 0402]',
                    'Automobile Engineering[First Shift][Sub Group : 0404]'
                ]
    elif subGroup == 'Bio Medical Engineering' :
        subList = [
            'Bio Medical Engineering[First Shift][Sub Group : 0301]',
            'Bio Medical Engineering[First Shift][Sub Group : 0302]',
            'Bio Medical Engineering[First Shift][Sub Group : 0303]'
        ]
    elif subGroup == 'Bio Technology' :
        subList = [
            'Bio Technology[First Shift][Sub Group : 0101]',
            'Bio Technology[First Shift][Sub Group : 0301]',
            'Bio Technology[First Shift][Sub Group : 0302]',
            'Bio Technology[First Shift][Sub Group : 0303]',
            'Bio Technology[First Shift][Sub Group : 0304]',
            'Bio Technology[First Shift][Sub Group : 0401]'
        ]
    elif subGroup == 'Chemical Engineering' :
        subList = [
            'Chemical Engineering[First Shift][Sub Group : 0101]',
            'Chemical Engineering[First Shift][Sub Group : 0102]',
            'Chemical Engineering[First Shift][Sub Group : 0103]',
            'Chemical Engineering[First Shift][Sub Group : 0401]',
            'Chemical Engineering[First Shift][Sub Group : 0702]'
        ]
    elif subGroup == 'Chemical Technology' :
        subList = [
            'Chemical Technology[First Shift][Sub Group : 0101]',
            'Chemical Technology[First Shift][Sub Group : 0201]',
            'Chemical Technology[First Shift][Sub Group : 0401]',
            'Chemical Technology[First Shift][Sub Group : 0404]',
            'Chemical Technology[First Shift][Sub Group : 0701]'
        ]
    elif subGroup == 'Civil Engineering' :
        subList = [
            'Civil Engineering[First Shift][Sub Group : 0201]',
            'Civil Engineering[First Shift][Sub Group : 0301]',
            'Civil Engineering[First Shift][Sub Group : 0302]',
            'Civil Engineering[First Shift][Sub Group : 0304]',
            'Civil Engineering[First Shift][Sub Group : 0401]',
            'Civil Engineering[First Shift][Sub Group : 0404]',
            'Civil Engineering[First Shift][Sub Group : 0701]',
            'Civil Engineering[Second Shift][Sub Group : 0201]',
            'Civil Engineering[Second Shift][Sub Group : 0401]'
        ]
    elif subGroup == 'Computer Engineering' :
        subList = [
            'Computer Engineering[First Shift][Sub Group : 0101]',
            'Computer Engineering[First Shift][Sub Group : 0102]',
            'Computer Engineering[First Shift][Sub Group : 0201]',
            'Computer Engineering[First Shift][Sub Group : 0301]',
            'Computer Engineering[First Shift][Sub Group : 0302]',
            'Computer Engineering[First Shift][Sub Group : 0303]',
            'Computer Engineering[First Shift][Sub Group : 0304]',
            'Computer Engineering[First Shift][Sub Group : 0401]',
            'Computer Engineering[First Shift][Sub Group : 0701]',
            'Computer Engineering[First Shift][Sub Group : 0702]',
            'Computer Engineering[Second Shift][Sub Group : 0301]',
            'Computer Science and Engineering[First Shift][Sub Group : 0201]',
            'Computer Science and Engineering[First Shift][Sub Group : 0301]',
            'Computer Science and Engineering[First Shift][Sub Group : 0302]',
            'Computer Science and Engineering[First Shift][Sub Group : 0303]',
            'Computer Science and Engineering[First Shift][Sub Group : 0304]',
            'Computer Science and Engineering[First Shift][Sub Group : 0401]',
            'Computer Science and Engineering[First Shift][Sub Group : 0501]',
            'Computer Science and Engineering[Second Shift][Sub Group : 0301]',
            'Computer Science and Engineering[Second Shift][Sub Group : 0401]',
            'Computer Science and Technology[First Shift][Sub Group : 0301]',
            'Computer Technology[First Shift][Sub Group : 0301]',
            'Computer Technology[First Shift][Sub Group : 0501]'
        ]
    elif subGroup == 'Electrical & Instrumentation Engineering' :
        subList = [
            'Electrical & Instrumentation Engineering[First Shift][Sub Group : 0304]'
        ]
    elif subGroup == 'Electrical and Electronics Engineering' :
        subList = [
            'Electrical and Electronics Engineering[First Shift][Sub Group : 0304]'
        ]
    elif subGroup == 'Electronics Engineering' :
        subList = [
            'Electronic and Communication Technology[First Shift][Sub Group : 0302]',
            'Electronic and Communication Technology[First Shift][Sub Group : 0401]',
            'Electronics & Communication Engineering(Sandwich)[Sub Group : 0302]',
            'Electronics & Communication Engineering(Sandwich)[Sub Group : 0304]',
            'Electronics Design Technology[First Shift][Sub Group : 0302]',
            'Electronics Engineering[First Shift][Sub Group : 0101]',
            'Electronics Engineering[First Shift][Sub Group : 0301]',
            'Electronics Engineering[First Shift][Sub Group : 0302]',
            'Electronics Engineering[First Shift][Sub Group : 0303]',
            'Electronics Engineering[First Shift][Sub Group : 0304]',
            'Electronics Engineering[First Shift][Sub Group : 0305]',
            'Electronics Engineering[First Shift][Sub Group : 0401]',
            'Electronics Engineering[First Shift][Sub Group : 0701]',
            'Electronics Engineering[First Shift][Sub Group : 0702]',
            'Electronics Engineering[Second Shift][Sub Group : 0301]',
            'Electronics Engineering[Second Shift][Sub Group : 0302]',
            'Electronics and Communication Engineering[First Shift][Sub Group : 0301]',
            'Electronics and Communication Engineering[First Shift][Sub Group : 0302]',
            'Electronics and Communication Engineering[First Shift][Sub Group : 0304]',
            'Electronics and Communication Engineering[First Shift][Sub Group : 0401]',
            'Electronics and Communication Engineering[Second Shift][Sub Group : 0302]',
            'Electronics and Electrical Engineering[First Shift][Sub Group : 0302]',
            'Electronics and Electrical Engineering[First Shift][Sub Group : 0304]',
            'Electronics and Telecommunication Engg[First Shift][Sub Group : 0201]',
            'Electronics and Telecommunication Engg[First Shift][Sub Group : 0301]',
            'Electronics and Telecommunication Engg[First Shift][Sub Group : 0302]',
            'Electronics and Telecommunication Engg[First Shift][Sub Group : 0303]',
            'Electronics and Telecommunication Engg[First Shift][Sub Group : 0304]',
            'Electronics and Telecommunication Engg[First Shift][Sub Group : 0305]',
            'Electronics and Telecommunication Engg[First Shift][Sub Group : 0401]',
            'Electronics and Telecommunication Engg[First Shift][Sub Group : 0701]',
            'Electronics and Telecommunication Engg[First Shift][Sub Group : 0702]',
            'Electronics and Telecommunication Engg[Second Shift][Sub Group : 0301]',
            'Electronics and Telecommunication Engg[Second Shift][Sub Group : 0302]',
            'Electronics and Telecommunication Engg[Second Shift][Sub Group : 0304]'
        ]
    elif subGroup == 'Electrical Engineering' :
        subList = [
            'Electrical Engg [Electrical and Power][First Shift][Sub Group : 0304]',
            'Electrical Engg [Electrical and Power][Second Shift][Sub Group : 0304]',
            'Electrical Engg[Electronics and Power][First Shift][Sub Group : 0301]',
            'Electrical Engg[Electronics and Power][First Shift][Sub Group : 0302]',
            'Electrical Engineering[First Shift][Sub Group : 0102]',
            'Electrical Engg[Electronics and Power][First Shift][Sub Group : 0304]',
            'Electrical Engg[Electronics and Power][First Shift][Sub Group : 0401]',
            'Electrical Engineering[First Shift][Sub Group : 0201]',
            'Electrical Engineering[First Shift][Sub Group : 0301]',
            'Electrical Engineering[First Shift][Sub Group : 0302]',
            'Electrical Engineering[First Shift][Sub Group : 0303]',
            'Electrical Engineering[First Shift][Sub Group : 0304]',
            'Electrical Engineering[First Shift][Sub Group : 0305]',
            'Electrical Engineering[First Shift][Sub Group : 0401]',
            'Electrical Engineering[First Shift][Sub Group : 0402]',
            'Electrical Engineering[Second Shift][Sub Group : 0304]'
        ]
    elif subGroup == 'Environmental Engineering' :
        subList = [
            'Environmental Engineering[First Shift][Sub Group : 0201]',
            'Environmental Engineering[First Shift][Sub Group : 0304]'
        ]
    elif subGroup == 'Food Engineering and Technology' :
        subList = [
            'Food Engineering and Technology[First Shift][Sub Group : 0103]',
            'Food Engineering and Technology[First Shift][Sub Group : 0201]',
            'Food Technology[First Shift][Sub Group : 0101]',
            'Food Technology[First Shift][Sub Group : 0103]'
        ]
    elif subGroup == 'Industrial Engineering' :
        subList = [
            'Industrial Engineering[First Shift][Sub Group : 0302]',
            'Industrial Engineering[First Shift][Sub Group : 0304]',
            'Industrial Engineering[First Shift][Sub Group : 0401]',
            'Industrial Engineering[First Shift][Sub Group : 0402]'
        ]
    elif subGroup == 'Information Technology' :
        subList = [
            'Information Technology[First Shift][Sub Group : 0301]',
            'Information Technology[First Shift][Sub Group : 0302]',
            'Information Technology[First Shift][Sub Group : 0304]',
            'Information Technology[First Shift][Sub Group : 0401]',
            'Information Technology[Second Shift][Sub Group : 0301]'
        ]
    elif subGroup == 'Instrumentation Engineering' :
        subList = [
            'Instrumentation Engineering[First Shift][Sub Group : 0301]',
            'Instrumentation Engineering[First Shift][Sub Group : 0302]',
            'Instrumentation Engineering[First Shift][Sub Group : 0303]',
            'Instrumentation Engineering[First Shift][Sub Group : 0304]',
            'Instrumentation Engineering[First Shift][Sub Group : 0305]',
            'Instrumentation Engineering[First Shift][Sub Group : 0401]',
            'Instrumentation Engineering[First Shift][Sub Group : 0501]',
            'Instrumentation and Control Engineering[First Shift][Sub Group : 0101]',
            'Instrumentation and Control Engineering[First Shift][Sub Group : 0301]',
            'Instrumentation and Control Engineering[First Shift][Sub Group : 0302]',
            'Instrumentation and Control Engineering[First Shift][Sub Group : 0303]',
            'Instrumentation and Control Engineering[First Shift][Sub Group : 0304]',
            'Instrumentation and Control Engineering[First Shift][Sub Group : 0305]',
            'Instrumentation and Control Engineering[First Shift][Sub Group : 0401]'
        ]
    elif subGroup == 'Man Made Textile Technology' :
        subList = ['Man Made Textile Technology[First Shift][Sub Group : 0701]']
    elif subGroup == 'Mechanical Engineering' :
        subList = [
            'Mechanical Engineering (Auto)[Sub Group : 0401]',
            'Mechanical Engineering[First Shift][Sub Group : 0101]',
            'Mechanical Engineering[First Shift][Sub Group : 0102]',
            'Mechanical Engineering[First Shift][Sub Group : 0201]',
            'Mechanical Engineering[First Shift][Sub Group : 0301]',
            'Mechanical Engineering[First Shift][Sub Group : 0302]',
            'Mechanical Engineering[First Shift][Sub Group : 0303]',
            'Mechanical Engineering[First Shift][Sub Group : 0304]',
            'Mechanical Engineering[First Shift][Sub Group : 0401]',
            'Mechanical Engineering[First Shift][Sub Group : 0402]',
            'Mechanical Engineering[First Shift][Sub Group : 0403]',
            'Mechanical Engineering[First Shift][Sub Group : 0404]',
            'Mechanical Engineering[Sandwich][First Shift][Sub Group : 0401]',
            'Mechanical Engineering[Second Shift][Sub Group : 0201]',
            'Mechanical Engineering[Second Shift][Sub Group : 0302]',
            'Mechanical Engineering[Second Shift][Sub Group : 0304]',
            'Mechanical Engineering[Second Shift][Sub Group : 0401]',
            'Mechanical Engineering[Second Shift][Sub Group : 0402]',
            'Mechanical Engineering[Second Shift][Sub Group : 0404]'
        ]
    elif subGroup == 'Mechatronics Engineering' :
        subList = [
            'Mechatronics Engineering[First Shift][Sub Group : 0301]',
            'Mechatronics Engineering[First Shift][Sub Group : 0302]',
            'Mechatronics Engineering[First Shift][Sub Group : 0304]',
            'Mechatronics Engineering[First Shift][Sub Group : 0401]'
        ]
    elif subGroup == 'Metallurgical Engineering' :
        subList = [
            'Metallurgical Engineering[First Shift][Sub Group : 0404]'
        ]
    elif subGroup == 'Mining Engineering' :
        subList = [
            'Mining Engineering[First Shift][Sub Group : 0201]',
            'Mining Engineering[First Shift][Sub Group : 0301]',
            'Mining Engineering[First Shift][Sub Group : 0302]',
            'Mining Engineering[First Shift][Sub Group : 0304]',
            'Mining Engineering[First Shift][Sub Group : 0401]',
            'Mining Engineering[First Shift][Sub Group : 0501]'
        ]
    elif subGroup == 'Oil Fats and Waxes Technology' :
        subList = [
            'Oil Fats and Waxes Technology[First Shift][Sub Group : 0104]',
            'Oil Fats and Waxes Technology[First Shift][Sub Group : 0401]'
        ]
    elif subGroup == 'Oil Technology' :
        subList = [
            'Oil Technology[First Shift][Sub Group : 0104]'
        ]
    elif subGroup == 'Oil and Paints Technology' :
        subList = [
            'Oil and Paints Technology[First Shift][Sub Group : 0104]'
        ]
    elif subGroup == 'Paints Technology' :
        subList = ['Paints Technology[First Shift][Sub Group : 0104]']
    elif subGroup == 'Paper and Pulp Technology' :
        subList = [
            'Paper and Pulp Technology[First Shift][Sub Group : 0101]',
            'Paper and Pulp Technology[First Shift][Sub Group : 0104]'
        ]
    elif subGroup == 'Petro Chemical Engineering' :
        subList = [
            'Petro Chemical Engineering[First Shift][Sub Group : 0101]',
            'Petro Chemical Engineering[First Shift][Sub Group : 0102]',
            'Petro Chemical Engineering[First Shift][Sub Group : 0201]',
            'Petro Chemical Technology[First Shift][Sub Group : 0101]'
        ]
    elif subGroup == 'Pharmaceutical and Fine Chemical Technology' :
        subList = [
            'Pharmaceutical and Fine Chemical Technology[First Shift][Sub Group : 0101]'
        ]
    elif subGroup == 'Plastic Technology' :
        subList = ['Plastic Technology[First Shift][Sub Group : 0102]']
    elif subGroup == 'Plastic and Polymer Engineering' :
        subList = [
            'Plastic and Polymer Engineering[First Shift][Sub Group : 0102]',
            'Plastic and Polymer Technology[First Shift][Sub Group : 0102]'
        ]
    elif subGroup == 'Printing Engineering and Graphics Communication' :
        subList = [
            'Printing Engineering and Graphics Communication[First Shift][Sub Group : 0401]',
            'Printing Engineering and Graphics Communication[First Shift][Sub Group : 0601]'
        ]
    elif subGroup == 'Printing and Packing Technology' :
        subList = [
            'Printing and Packing Technology[First Shift][Sub Group : 0102]',
            'Printing and Packing Technology[First Shift][Sub Group : 0601]'
        ]
    elif subGroup == 'Production Engineering' :
        subList = [
            'Production Engineering[First Shift][Sub Group : 0102]',
            'Production Engineering[First Shift][Sub Group : 0304]',
            'Production Engineering[First Shift][Sub Group : 0401]',
            'Production Engineering[First Shift][Sub Group : 0402]',
            'Production Engineering[First Shift][Sub Group : 0404]',
            'Production Engineering[First Shift][Sub Group : 0702]',
            'Production Engineering[First Shift][Sub Group : 0801]',
            'Production Engineering[Sandwich][First Shift][Sub Group : 0301]',
            'Production Engineering[Sandwich][First Shift][Sub Group : 0401]',
            'Production Engineering[Sandwich][First Shift][Sub Group : 0402]',
            'Production Engineering[Sandwich][First Shift][Sub Group : 0404]'
        ]
    elif subGroup == 'Surface Coating Technology' :
        subList = [
            'Surface Coating Technology[First Shift][Sub Group : 0104]'
        ]
    elif subGroup == 'Textile Chemistry' :
        subList = [
            'Textile Chemistry[First Shift][Sub Group : 0701]',
            'Textile Chemistry[First Shift][Sub Group : 0702]'
        ]
    elif subGroup == 'Textile Engineering' :
        subList = [
            'Textile Engineering (Fashion Technology)[First Shift][Sub Group : 0701]',
            'Textile Engineering / Technology[First Shift][Sub Group : 0701]'
        ]
    elif subGroup == 'Textile Plant Engineering' :
        subList = [
            'Textile Plant Engineering[First Shift][Sub Group : 0301]',
            'Textile Plant Engineering[First Shift][Sub Group : 0701]'
        ]
    elif subGroup == 'Textile Technology' :
        subList = [
            'Textile Technology[First Shift][Sub Group : 0701]'
        ]
    else:
        subList = [
            'Textile Technology[First Shift][Sub Group : 0701]'
        ]
    fromPer = float(fromPerStr)
    toPer = float(toPerStr)

    if criteria == 'Percentage':
        criteria = 'percentage'
    else:
        criteria = 'rank';

    retData = []
    for clg in clgList:
        for sub in subList:
            if data[clg].get(sub):
                if data[clg][sub].get(cast):
                    if data[clg][sub][cast].get(criteria):
                        if fromPer <= data[clg][sub][cast][criteria] and data[clg][sub][cast][criteria] <= toPer:
                            print("College name : ",clg)
                            print("SubGroup name : ",sub)
                            print("Category : ",cast)
                            per = data[clg][sub][cast][criteria]
                            print("Percentage : ",per)
                            retData.append([clg,sub,cast,per])
    print(retData)
    return retData
    

if __name__ == "__main__":
    app.run(debug=True)