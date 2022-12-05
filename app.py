from flask import Flask,redirect
from flask import jsonify
from flask_cors import CORS
from flask import request
from flask import render_template
from flask_login import UserMixin,login_user, LoginManager, login_required, logout_user, current_user
from flask_wtf import FlaskForm
from wtforms import StringField, PasswordField, SubmitField
from wtforms.validators import InputRequired,Length, ValidationError
import json
import csv
import sys
import os
SECRET_KEY = os.urandom(32)
app = Flask(__name__)
app.config['SECRET_KEY'] = SECRET_KEY

CORS(app)

login_manager = LoginManager()
login_manager.init_app(app)
login_manager.login_view = "login"

@login_manager.user_loader
def load_user(user_id):
    return "quoc"




class RegisterForm(FlaskForm):
    mail = StringField(validators=[InputRequired(),Length(min = 1, max = 20)], render_kw={"placeholder": "Mail"})
    username = StringField(validators=[InputRequired(),Length(min = 1, max = 20)], render_kw={"placeholder": "Username"})
    password = PasswordField(validators=[InputRequired(),Length(min = 1, max = 20)], render_kw={"placeholder": "Password"})
    submit = SubmitField("Register")
    
class LoginForm(FlaskForm):
    username = StringField(validators=[InputRequired(),Length(min = 1, max = 20)], render_kw={"placeholder": "Username"})
    password = PasswordField(validators=[InputRequired(),Length(min = 1, max = 20)], render_kw={"placeholder": "Password"})
    submit = SubmitField("Login")


def ifUserInDatabase(username,password):
    result = False
    data = readCsv("login") 
    print("check User In database", file=sys.stderr)
    with open('login.csv', 'w') as f:
        for line in data:
            for l in line:
                array = l.split(',')
                if array[0] == username and array[1] == password:
                    result = True
            f.write(line[0])
            f.write('\n')
    f.close()
    return result

def addUser(username,password,mail):
    print("You dumPPPPPPPPPPPPPPPPPPPPPPPP", file=sys.stderr)
    data = readCsv("login")

    r = username + "," + password + "," + mail
    data.append(r)
    with open('login.csv', 'w') as f:
        for line in data:
            f.write(''.join(line))
            f.write('\n')
    f.close()


def readCsv(filen):
    with open(filen + '.csv', newline='') as csvfile:
        spamreader = csv.reader(csvfile, delimiter=' ', quotechar='|')
        data = list(spamreader)
        return data
@app.route("/json/")
def jsonFile():
    data = readCsv("login")
    return jsonify({'data':data})




@app.route("/")
def hoofdpagina():
    username = request.args.get('username')
    return render_template("index.html", username = username)
    
        
@app.route("/login",methods=['GET','POST'])
def login():
    form = LoginForm()
   
    if form.validate_on_submit():
        check = ifUserInDatabase(form.username.data,form.password.data)
        if check:
            return redirect("/?username=" + form.username.data)
    return render_template("SignIn.html",form=form)
    
@app.route("/signup",methods=['GET','POST'])
def signup():
    form = RegisterForm()
    if form.validate_on_submit():
         addUser(form.username.data,form.password.data,form.mail.data)
         return redirect("/login")
    return render_template("SignUp.html",form=form)
if __name__ == '__main__':
    app.run(debug=True)










# username = request.args.get('username')
#     password = request.args.get('password')
#     data = readCsv("login")
#     success = False
#     print("input Clicked", file=sys.stderr)
#     with open('students.csv', 'w') as f:
#         for line in data:
            
#             for l in line:
#                 array = l.split(',')
#                 if array[1] == password and array[0] == username:
#                     success = True
#             f.write(line[0])
#             f.write('\n')
#     f.close()
#     returnS = ""
#     if success:
#         returnS = username
#     message = {
#         'status': success,
#         'message': returnS,
#     }
#     resp = jsonify(message)
#     return resp