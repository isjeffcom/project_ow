# 2017.2.24
# JIANFENG WU
# DMP Coursework
# Python web crawler for update

#import package
import requests
from pyquery import PyQuery as pq
from lxml import etree

import MySQLdb

# Connect to MySQL
db = MySQLdb.connect("localhost", "root", "123321", "py")
cursor = db.cursor()

#visit reference website to get data
url = 'https://www.overbuff.com/heroes'
r = requests.get(url)
p = pq(r.text).find('.table-with-filter-tabs tr')
a = 1
i = 1

#start a loop for row out all data value
for _row in p:

    row = pq(_row)
    hero_name = row.find('td:nth-child(2)').text()
    popularity = row.find('td:nth-child(3)').attr('data-value')
    picked = row.find('td:nth-child(4)').attr('data-value')
    win_rate = row.find('td:nth-child(5)').attr('data-value')
    on_fire = row.find('td:nth-child(6)').attr('data-value')
    ed_ratio = row.find('td:nth-child(7)').attr('data-value')
    elimis = row.find('td:nth-child(8)').attr('data-value')
    obj_elims = row.find('td:nth-child(9)').attr('data-value')
    obj_time = row.find('td:nth-child(10)').attr('data-value')
    damage = row.find('td:nth-child(11)').attr('data-value')
    healing = row.find('td:nth-child(12)').attr('data-value')
    blocked = row.find('td:nth-child(13)').attr('data-value')
    deaths = row.find('td:nth-child(14)').attr('data-value')
    ed_ratio_re = row.find('td:nth-child(15)').attr('data-value')
    eliminations = row.find('td:nth-child(16)').attr('data-value')
    solo_kills = row.find('td:nth-child(17)').attr('data-value')
    final_blows = row.find('td:nth-child(18)').attr('data-value')
    medals = row.find('td:nth-child(19)').attr('data-value')
    gold = row.find('td:nth-child(20)').attr('data-value')
    silver = row.find('td:nth-child(21)').attr('data-value')
    bronze = row.find('td:nth-child(22)').attr('data-value')
    cards = row.find('td:nth-child(23)').attr('data-value')

    #if none then contunue
    if hero_name is None or popularity is None:
        continue

    #split hero name and hero type because they are in the same father element
    hero_name_s = hero_name.split(" ", hero_name.count(hero_name))

    
    #print all variable for test everythings normal
    print(hero_name_s[0],hero_name_s[1], popularity, picked, win_rate, on_fire, ed_ratio, elimis, obj_elims, obj_time, damage, healing, blocked, deaths, ed_ratio_re, eliminations, solo_kills, medals, gold, silver, bronze, cards)

    #set SQL commend    
    sql = "UPDATE py SET name='%s', type='%s', popularity='%s', picked='%s', win_rate='%s', on_fire='%s', ed_ratio='%s', elimis='%s', obj_elims='%s', obj_time='%s', damage='%s', healing='%s', blocked='%s', deaths='%s', ed_ratio_re='%s', eliminations='%s', solo_kills='%s', \
	final_blows='%s', medals='%s', gold='%s', silver='%s', bronze='%s', cards='%s' WHERE id='%s'" \
	% (hero_name_s[0],hero_name_s[1], popularity, picked, win_rate, on_fire, ed_ratio, elimis, obj_elims, obj_time, damage, healing, blocked, deaths, ed_ratio_re, eliminations, solo_kills, final_blows, medals, gold, silver, bronze, cards, i)
    
    
    #execute SQL commend
    cursor.execute(sql)
    i = i+1
    print i

    
