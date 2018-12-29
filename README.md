# BBCode Alerts / Notifications by 0E800

[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/0E800/flarum-ext-bbcode-alerts/blob/master/LICENSE)
[![Latest Stable Version](https://img.shields.io/packagist/v/oe800/flarum-ext-bbcode-alerts.svg)](https://packagist.org/packages/oe800/flarum-ext-bbcode-alerts)
[![Total Downloads](https://img.shields.io/packagist/dt/oe800/flarum-ext-bbcode-alerts.svg)](https://packagist.org/packages/oe800/flarum-ext-bbcode-alerts)

Add ALERTS, WARNINGS and other custom notifications to your Flarum posts.

### Installation

`composer require oe800/flarum-ext-bbcode-alerts`

### Updating

`composer update oe800/flarum-ext-bbcode-alterts`

### Usage

***Basic Notification Alerts:***

`[AWARNING]This is an AWARNING message.[/AWARNING]`

`[ASUCCESS]This is an ASUCCESS message.[/ASUCCESS]`

`[AINFO]This is an AINFO message.[/AINFO]`

`[ABASIC]This is an ABASIC message.[/ABASIC]`

`[ACUSTOM]red,black,green,This is an ACUSTOM message.[/ACUSTOM]`

***More Styled Notifications:***            

`[BWARNING]This is n BWARNING message.[/BWARNING]`

`[BSUCCESS]This is a BSUCCESS message.[/BSUCCESS]`

`[BERROR]This is a BERROR message.[/BERROR]`

`[CWARNING]darkorange,white,darkorange,THIS IS A CWARNING TITLE,This is a CWARNING message.[/CWARNING]`

`[CNOTICE]teal,white,teal,THIS IS A CNOTICE TITLE,This is a CNOTICE message.[/CNOTICE]`

`[CERROR]red,white,red,THIS IS A CERROR TITLE,This is a CERROR message.[/CERROR]`

`[CSUCCESS]green,white,green,THIS IS A CERROR TITLE,This is a CSUCCESS message.[/CSUCCESS]`

***Added Proper BBCode Formatting (Thanks to [JoshyPHP](https://github.com/joshyphp)):***

`[BCUSTOM]title=THIS IS A BCUSTOM TITLE font=red bg=black border=green[/BCUSTOM]`

`[DNOTICE title="This is a DNOTICE title" font="teal" bg="white" border="teal"]This is a DNOTICE message.[/DNOTICE]`

`[DERROR title="This is a DERROR title" font="red" bg="white" border="red"]This is a DERROR message.[/DERROR]`

`[DWARNING title="This is a DWARNING title" font="darkorange" bg="white" border="darkorange"]This is a DWARNING message.[/DWARNING]`

`[DSUCCESS title="This is a DSUCCESS title" font="green" bg="white" border="green"]This is a DSUCCESS message.[/DSUCCESS]`

### Screenshots

![Imgur](http://i.imgur.com/ZMXJe9r.png)
![Imgur](http://i.imgur.com/nPvuFdJ.png)
![Imgur](http://i.imgur.com/epDghP3.png?1)

***Properly Formatted BBCode:***

![Imgur](http://i.imgur.com/wmWPqpr.png)

### To Do

- Add more styles.
- Requests?

### Links

- [Packagist](https://packagist.org/packages/oe800/flarum-ext-bbcode-alerts)
