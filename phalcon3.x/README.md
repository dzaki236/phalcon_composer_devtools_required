# phalcon_composer_devtools_required (3.x)

<p>What is?</p>
<p>i made phalcon_composer_devtools_required forr phalcon development to make sure i do not do like manually,and just with 1 repository can development as simply</p>

<br>

## How To Use :
- *composer init* to make custom package ("src") and made it!.
- If you don't wanna make your own package or helper?, just create new file "composer.json" on main root of your project.
- Copy code from "./composer.json" file.
- on your phalcon project just create 2 new file.
- : ".gitignore and composer file".
- make sure for your composer new file name is "composer.json",and paste the code after you copy from repository.
- and at ".gitignore" file type " /vendor ", to ignore vendor file.
- then run *composer install* and then *composer dump-autoload* on terminal.

## WARN !
- DO NOT TOUCH "composer.lock" file,it can happends and affected to composer!
