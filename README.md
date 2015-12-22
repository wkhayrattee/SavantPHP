SavantPHP - The Simple, Elegant Template System For PHP
=======================================================

SavantPHP is a lightweight object-oriented template system for PHP. It aims at ONE thing, being a simple, linght-weight TEMPLATING system. I'm focusing only on that ONE thing. PHP can do everything, so do everything with it, just use SavantPHP for only separating the "view/templating" concern, that's it.

Unlike other template systems, Savant by default does not compile your templates into PHP; instead, it uses PHP itself as its template language so you don't need to learn a new markup system.

It is not a competitor to any of the likes of Dwoo or Twig..etc. SavantPHP is for those PHP/templating minimalists - "I just want to separate my front layer(view) from the back layer(code logic)" in the most simple & effective way and that's it, nothing more, nothing less, nothing else (no added crap).

### How To Install

composer require sevenphp/savantphp

### Why Use Savant for Templates?


- You don't need to learn a new language or markup to create a template. The template language is PHP, and the template file is a regular PHP file.
- [I will probably remove this side]* Even though Savant is not itself a compiling system, you can write your own compiler and plug it into Savant; this means you can use any template markup system you like.
- [I will probably remove the plugin & filter to keep it simple]* The object-oriented plugin, filter, error, and compiler classes for Savant are easy to use, understand, and extend.
- Because your template script is a regular PHP script, you can sprinkle it with comments and use phpDocumentor to document it.

### CREDIT

- This project has been retouched by Khayrattee on Dec 2015 to keep the spirit of Savant which was started by The Mighty 'Paul M. Jones' who is the author of Aura PHP.
- This project was handed over to Brett Bieber, but it seems it has been shamelessly abondonned as well as it's domain name.
- This project is hence a FORK from [https://github.com/saltybeagle/Savant3], but reworked to having namespaces & composer magic.

### The Future

- I have been a big fan and user of Savant. I decided to keep it alive and I'm still using it.
- I am not sure how far this will go, but I'm going to leave it here so that it can be used with the latest tools like composer, making it have proper namespace..etc just for me (and perhaps some others) to keep using it.
- Savant PHP still makes very much sense using as it honors the KISS principle. I like to keep it simple.
