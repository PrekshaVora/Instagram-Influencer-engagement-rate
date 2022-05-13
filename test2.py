import os, platform, time, urllib.request, openpyxl, operator
import datetime as dt
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.action_chains import ActionChains
from openpyxl import Workbook
import sys, requests, re, json
from selenium.webdriver.common.keys import Keys
from bs4 import BeautifulSoup

import pandas as pd
import numpy as np

import warnings
warnings.filterwarnings('ignore')

import utils



from bs4 import BeautifulSoup
import requests

from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
import time

user=input("Enter username:")
#specify the path to chromedriver.exe (download and save on your computer)
driver = webdriver.Chrome(r"C:\Users\PREKSHA\Desktop\Preksha\chromedriver.exe")
driver.implicitly_wait(5) # seconds
#open the webpage
driver.get("http://www.instagram.com")

from selenium.webdriver.support.ui import WebDriverWait
wait = WebDriverWait(driver, 30)


#target username
username =wait.until(EC.element_to_be_clickable((By.CSS_SELECTOR, "input[name='username']")))	
password = wait.until(EC.element_to_be_clickable((By.CSS_SELECTOR, "input[name='password']")))

#enter username and password
username.clear()
username.send_keys("shw.etap8686")
password.clear()
password.send_keys("Shweta@8686")

#target the login button and click it
button = wait.until(EC.element_to_be_clickable((By.CSS_SELECTOR, "button[type='submit']"))).click()

	#We are logged in!

time.sleep(5)
alert = wait.until(EC.element_to_be_clickable((By.XPATH, '//button[contains(text(), "Not Now")]'))).click()

alert2 = wait.until(EC.element_to_be_clickable((By.XPATH, '//button[contains(text(), "Not Now")]'))).click()

URL='https://www.instagram.com/'+user+'/'
url = driver.get(URL)
posts = driver.find_element_by_xpath('//*[@id="react-root"]/section/main/div/header/section/ul/li[1]/div/span').text
followers = driver.find_element_by_xpath('//*[@id="react-root"]/section/main/div/header/section/ul/li[2]/a/div/span').text
followings = driver.find_element_by_xpath('//*[@id="react-root"]/section/main/div/header/section/ul/li[3]/a/div/span').text#click onimage
data={}

print(posts,followers,followings)
data['Followers'] = followers
data['Following'] = followings 
data['Posts'] = posts
print(data)
driver.refresh()
time.sleep(10)
""""
for i in range (1,4):
    for j in range (1,4):
        likes=wait.until(EC.element_to_be_clickable((By.XPATH,'//*[@id="react-root"]/section/main/div/div[4]/article/div/div/div[1]/div[1]/a/div[1]/div[2]'))).click()
        likes1=driver.find_element_by_xpath('/html/body/div[6]/div[3]/div/article/div/div[2]/div/div/div[2]/section[2]/div/div/div/a/div/span').text
        print(likes1)
        driver.execute_script("window.history.go(-1)")
"""
#//*[@id="react-root"]/section/main/div/div[4]/article/div/div/div[1]/div[1]/a/div[1]/div[2]
#//*[@id="react-root"]/section/main/div/div[4]/article/div/div/div[1]/div[2]/a/div[1]/div[2]
#//*[@id="react-root"]/section/main/div/div[4]/article/div/div/div[1]/div[3]/a/div/div[2]



link1 = []
names1 = []
likes1=[]
followers1=[]
followings1=[]
post1=[]
dates1=[]
captions1=[]
comments_count=[]
type_post1=[]
time.sleep(5)
#call links 
def get_influencer_link(name):
    #to influencer url
    driver = webdriver.Chrome(r"C:\Users\PREKSHA\Desktop\Preksha\chromedriver.exe")
    driver.get("http://www.instagram.com")

    from selenium.webdriver.support.ui import WebDriverWait
    wait = WebDriverWait(driver, 30)


    #target username
    username =wait.until(EC.element_to_be_clickable((By.CSS_SELECTOR, "input[name='username']")))	
    password = wait.until(EC.element_to_be_clickable((By.CSS_SELECTOR, "input[name='password']")))

    #enter username and password
    username.clear()
    username.send_keys("shw.etap8686")
    password.clear()
    password.send_keys("Shweta@8686")

    #target the login button and click it
    button = wait.until(EC.element_to_be_clickable((By.CSS_SELECTOR, "button[type='submit']"))).click()

    	#We are logged in!

    time.sleep(5)
    alert = wait.until(EC.element_to_be_clickable((By.XPATH, '//button[contains(text(), "Not Now")]'))).click()

    alert2 = wait.until(EC.element_to_be_clickable((By.XPATH, '//button[contains(text(), "Not Now")]'))).click()

    url = f'https://www.instagram.com/{name}/'
    
    driver.get(url)

    time.sleep(10)

    i = 0
    while i < 1:   
        try:
            #get the links
            pages = driver.find_elements_by_tag_name("a")
            for data in pages:
                data_2 = data.get_attribute("href")
                if '/p/' in data_2:
                    link1.append(data.get_attribute("href"))
                    followers1.append(followers)
                    followings1.append(followings)
                    post1.append(posts)
                    type_post1.append("GraphImage")
                    names1.append(user)
                    
                    
            # Scroll down to bottom
            driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")

            # Wait to load page
            time.sleep(1)
            i += 1
        except:
            i += 1
            continue
    

    return link1, names1

get_influencer_link(user)

print(link1) #print links
for link in link1:
    j=0
    URL=link
    url = driver.get(URL)
    likes=driver.find_element_by_xpath('//*[@id="react-root"]/section/main/div/div[1]/article/div/div[2]/div/div[2]/section[2]/div/div/div/a/div/span').text
    date_of_post=driver.find_element_by_xpath('//*[@id="react-root"]/section/main/div/div[1]/article/div/div[2]/div/div[2]/div[2]/div/a/div/time').text
    captions=driver.find_element_by_xpath('//*[@id="react-root"]/section/main/div/div[1]/article/div/div[2]/div/div[2]/div[1]/ul/div/li/div/div/div[2]/div[1]/span').text
    likes1.append(likes)
    dates1.append(date_of_post)
    captions1.append(captions)
    comm = driver.find_elements_by_class_name("Mr508")
    for data in comm:
            j+=1
    comments_count.append(j)
    driver.execute_script("window.history.go(-1)")
    driver.execute_script("window.history.go(-1)")

print(likes1) #print likes
for i in range(0, len(likes1)):
    likes1[i] = int(likes1[i])
total=0
for ele in range(0, len(likes1)):
    total = total + likes1[ele]

for i in range(0, len(comments_count)):
    comments_count[i] = int(comments_count[i])
comments_count1=0
for elem in range(0, len(comments_count)):
    comments_count1 = comments_count1 + comments_count[elem]
 
# printing total value
print("Total Likes", total)
print("Total comments", comments_count1)

Likes_engagement=total/(int(followers)*100);
print(Likes_engagement);
comments_engagement=comments_count1/(int(followers)*100);
print(comments_engagement);
print("Total Engagement is : ",(Likes_engagement+comments_engagement)*100)
print("")
