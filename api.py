from flask import Flask,jsonify,request
from datetime import datetime
from flask_cors import CORS
import time

from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.options import Options
from profanity_check import predict, predict_prob
app = Flask(__name__)
CORS(app)

@app.route('/offensive/<string:user>')
def get_offensive(user):
    options = Options()
    options.add_argument("--headless")  
    browser = webdriver.Chrome(executable_path='C:/xampp/htdocs/chromedriver.exe', chrome_options=options)
    urlFollow = "https://twitter.com/"+user
    browser.get(urlFollow)
    time.sleep(3)

    elem = browser.find_element_by_tag_name("body")

    no_of_pagedowns = 40

    while no_of_pagedowns:
        elem.send_keys(Keys.PAGE_DOWN)
        time.sleep(0.2)
        no_of_pagedowns-=1
    post_elems = browser.find_elements_by_class_name('r-my5ep6')
    counter = 0
    tweets = []
    for post in post_elems:
        if(counter!=0):
            print(post.text)
            tweets.append({"Num":str(counter), "Text": post.text, "Rating":str(predict_prob([post.text]))})
        counter = counter+1
    return jsonify(tweets)

app.run(port=5000)