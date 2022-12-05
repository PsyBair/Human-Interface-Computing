from flask import Flask, render_template

app = Flask(__name__)


@app.route("/")
def hoofdpagina():
    return render_template("index.html")
@app.route("/SignIn.html")
def SignIn():
    return render_template("SignIn.html")
@app.route("/SignUp.html")
def SignUp():
    return render_template("SignUp.html")
if __name__ == '__main__':
    app.run(debug=True)