Flarum BBCode Alerts / Notifications  Extension

Add Alerts and Warnings and other custom Notifications to your Flarum posts.

***Install:***

`composer require oe800/flarum-ext-bbcode-alerts`

***Update:***

`composer update oe800/flarum-ext-bbcode-alterts`

**Current Ver.:***

Version 0.1.6 - Released 6/22/2017

- Updated to be responcive to Mobile devices 


**Usage:**


***Basic notification alert:***


`[AWARNING]{TEXT}[/AWARNING]`


`[ASUCCESS]{TEXT}[/ASUCCESS]`


`[AINFO]{TEXT}[/AINFO]`


`[ABASIC]{TEXT}[/ABASIC]`


`[ACUSTOM]{COLOR},{COLOR2},{COLOR3},{TEXT}[/ACUSTOM]`


***More styled notification:***            


`[berror]{TEXT}[/berror]` 


`[cerror]{COLOR},{COLOR2},{COLOR3},{TEXT},{TEXT2}[/cerror]` 


`[bsuccess]{TEXT}[/bsuccess]` 


`[csuccess]{COLOR},{COLOR2},{COLOR3},{TEXT},{TEXT2}[/csuccess]` 


`[bwarning]{TEXT}[/bwarning]` 


`[cwarning]{COLOR},{COLOR2},{COLOR3},{TEXT},{TEXT2}[/cwarning]` 


`[bnotice]{TEXT}[/bnotice]` 


`[cnotice]{COLOR},{COLOR2},{COLOR3},{TEXT},{TEXT2}[/cnotice]` 


***Added proper BBCode formatting*** - (Thanks to JoshyPHP)


`[BCUSTOM]title={TEXT} font={COLOR} gb={COLOR2} border={COLOR3}[/BCUSTOM]`


`[derror title={TEXT} font={COLOR} bg={COLOR2} border={COLOR3}]{TEXT2}[/derror]`

`[dsuccess title={TEXT} font={COLOR} bg={COLOR2} border={COLOR3}]{TEXT2}[/dsuccess]`

`[dwarning title={TEXT} font={COLOR} bg={COLOR2} border={COLOR3}]{TEXT2}[/dwarning]`

`[dnotice title={TEXT} font={COLOR} bg={COLOR2} border={COLOR3}]{TEXT2}[/dnotice]`


**Examples:**




![Imgur](http://i.imgur.com/ZMXJe9r.png)


![Imgur](http://i.imgur.com/nPvuFdJ.png)
![Imgur](http://i.imgur.com/epDghP3.png?1)

**Properly formatted BBCode**

![Imgur](http://i.imgur.com/wmWPqpr.png)



**Todos:**
 - Add more styles.

Comments / Suggestions welcome.
