from flask import Flask, render_template

app = Flask(__name__)


@app.route("/")
def hoofdpagina():
    return render_template("index.html")
@app.route("/SignIn.html")
def signinsingup():
    return render_template("SignIn.html")


if __name__ == '__main__':
    app.run()