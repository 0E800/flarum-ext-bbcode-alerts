<?php
namespace oe800\BBCodeAlerts\Listeners;
use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;
class AddBBCode
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'addBBCode']);
    }
    public function addBBCode(ConfigureFormatter $event)
    {


	 $event->configurator->BBCodes->addCustom(
            '[AWARNING]{TEXT}[/AWARNING]',
            '<div id="aaalertbody">
	<div class="aaalert aaerror">
		<p class="aainner">
			<strong>Warning!</strong>&nbsp; {TEXT}
		</p></div></div>'
        );


$event->configurator->BBCodes->addCustom(
            '[ASUCCESS]{TEXT}[/ASUCCESS]',
            '<div id="aaalertbody">
<div class="aaalert aasuccess">
                <p class="aainner">{TEXT}</p></div></div>'
        );

$event->configurator->BBCodes->addCustom(
            '[AINFO]{TEXT}[/AINFO]',
            '<div id="aaalertbody">
<div class="aaalert aainfo">
                <p class="aainner">{TEXT}</p></div></div>'
        );

$event->configurator->BBCodes->addCustom(
            '[ABASIC]{TEXT}[/ABASIC]',
            '<div id="aaalertbody">
<div class="aaalert">
                <p class="aainner">{TEXT}</p></div></div>'
        );

$event->configurator->BBCodes->addCustom(
            '[ACUSTOM]{COLOR},{COLOR2},{COLOR3},{TEXT}[/ACUSTOM]',
            '<div id="aaalertbody">
<div class="aaalert">
                <p class="aainner" style="color: {COLOR}; background-color: {COLOR2}; border-color: {COLOR3};">{TEXT}</p></div></div>'
        );

$event->configurator->BBCodes->addCustom(
            '[berror]{TEXT}[/berror]',
            '<div id="aaalertbody"><div class="bbalert-box bberror"><span>error: </span>{TEXT}</div></div>'
        );

$event->configurator->BBCodes->addCustom(
            '[cerror]{COLOR},{COLOR2},{COLOR3},{TEXT},{TEXT2}[/cerror]',
            '<div id="aaalertbody"><div class="bbalert-box bberror" style="color: {COLOR}; background-color: {COLOR2}; border-color: {COLOR3};"><span>{TEXT}: </span>{TEXT2}</div></div>'
        );

$event->configurator->BBCodes->addCustom(
            '[bsuccess]{TEXT}[/bsuccess]',
            '<div id="aaalertbody"><div class="bbalert-box bbsuccess"><span>success: </span>{TEXT}</div></div>'
        );

$event->configurator->BBCodes->addCustom(
            '[csuccess]{COLOR},{COLOR2},{COLOR3},{TEXT},{TEXT2}[/csuccess]',
            '<div id="aaalertbody"><div class="bbalert-box bbsuccess" style="color: {COLOR}; background-color: {COLOR2}; border-color: {COLOR3};"><span>{TEXT}: </span>{TEXT2}</div></div>'
        );

$event->configurator->BBCodes->addCustom(
            '[bwarning]{TEXT}[/bwarning]',
            '<div id="aaalertbody"><div class="bbalert-box bbwarning"><span>warning: </span>{TEXT}</div></div>'
        );


$event->configurator->BBCodes->addCustom(
            '[cwarning]{COLOR},{COLOR2},{COLOR3},{TEXT},{TEXT2}[/cwarning]',
            '<div id="aaalertbody"><div class="bbalert-box bbwarning" style="color: {COLOR}; background-color: {COLOR2}; border-color: {COLOR3};"><span>{TEXT}: </span>{TEXT2}</div></div>'
        );

$event->configurator->BBCodes->addCustom(
            '[bnotice]{TEXT}[/bnotice]',
            '<div id="aaalertbody"><div class="bbalert-box bbnotice"><span>notice: </span>{TEXT}</div></div>'
        );

$event->configurator->BBCodes->addCustom(
            '[cnotice]{COLOR},{COLOR2},{COLOR3},{TEXT},{TEXT2}[/cnotice]',
            '<div id="aaalertbody"><div class="bbalert-box bbnotice" style="color: {COLOR}; background-color: {COLOR2}; border-color: {COLOR3};"><span>{TEXT}: </span>{TEXT2}</div></div>'
        );

    }
}
