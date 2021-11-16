# Vazir Font

Vazir is a Persian/Arabic font.

[![npm version](https://badge.fury.io/js/vazir-font.svg)](https://badge.fury.io/js/vazir-font)

<div dir='rtl'>

فونت فارسی/عربی وزیر  
[نمایش فونت - صفحه رسمی پروژه](https://rastikerdar.github.io/vazir-font/)  
[راهنمای فونت وزیر](https://github.com/rastikerdar/vazir-font/blob/master/HELP.md)  
[صفحه دریافت (دانلود) بسته فونت شامل فایل های ttf,woff,eot](https://github.com/rastikerdar/vazir-font/releases)  
با تشکر از برنامه [FontForge](https://fontforge.github.io)  
بر مبنای فونت [DejaVu Sans 2.35](https://dejavu-fonts.github.io)  
نسخه‌های بدون حروف لاتین یا تمام ارقام فارسی و همچنین نسخه UI با ارتفاع کم درون بستهٔ فشرده موجود می‌باشد.  

## توجه

از نسخه ۲۷ نام فایل نسخه معمولی وزیر از Vazir به Vazir-Regular تغییر یافته است. لطفا پیش از نصب برای جلوگیری از تداخل، نسخه‌های قبل را حذف نمایید.

## طریقه استفاده در صفحات وب

کد زیر را در قسمت style یا فایل css وارد نمایید:

</div>

```css
@font-face {
    font-family: Vazir;
    src: url('Vazir-Regular.eot');
    src: url('Vazir-Regular.eot?#iefix') format('embedded-opentype'),
         url('Vazir-Regular.woff2') format('woff2'),
         url('Vazir-Regular.woff') format('woff'),
         url('Vazir-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: Vazir;
    src: url('Vazir-Bold.eot');
    src: url('Vazir-Bold.eot?#iefix') format('embedded-opentype'),
         url('Vazir-Bold.woff2') format('woff2'),
         url('Vazir-Bold.woff') format('woff'),
         url('Vazir-Bold.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
}
@font-face {
    font-family: Vazir;
    src: url('Vazir-Black.eot');
    src: url('Vazir-Black.eot?#iefix') format('embedded-opentype'),
         url('Vazir-Black.woff2') format('woff2'),
         url('Vazir-Black.woff') format('woff'),
         url('Vazir-Black.ttf') format('truetype');
    font-weight: 900;
    font-style: normal;
}
@font-face {
    font-family: Vazir;
    src: url('Vazir-Medium.eot');
    src: url('Vazir-Medium.eot?#iefix') format('embedded-opentype'),
         url('Vazir-Medium.woff2') format('woff2'),
         url('Vazir-Medium.woff') format('woff'),
         url('Vazir-Medium.ttf') format('truetype');
    font-weight: 500;
    font-style: normal;
}
@font-face {
    font-family: Vazir;
    src: url('Vazir-Light.eot');
    src: url('Vazir-Light.eot?#iefix') format('embedded-opentype'),
         url('Vazir-Light.woff2') format('woff2'),
         url('Vazir-Light.woff') format('woff'),
         url('Vazir-Light.ttf') format('truetype');
    font-weight: 300;
    font-style: normal;
}
@font-face {
    font-family: Vazir;
    src: url('Vazir-Thin.eot');
    src: url('Vazir-Thin.eot?#iefix') format('embedded-opentype'),
         url('Vazir-Thin.woff2') format('woff2'),
         url('Vazir-Thin.woff') format('woff'),
         url('Vazir-Thin.ttf') format('truetype');
    font-weight: 100;
    font-style: normal;
}
```

## Install

### Download

Grab the [latest release](https://github.com/rastikerdar/vazir-font/releases/latest) file.

### [npm](https://www.npmjs.com/package/vazir-font)

```
npm install vazir-font
```
Fonts will be copied to `node_modules/vazir-font/dist` directory

### CDN

Link fonts from the [jsDelivr](https://www.jsdelivr.com/) CDN:

```html
<link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css" rel="stylesheet" type="text/css" />
```

and integrate the font into your CSS:

```
font-family: 'Vazir', sans-serif;
```

### Arch Linux

Arch user's could use [vazir-fonts](https://aur.archlinux.org/packages/vazir-fonts/) package from [AUR](https://aur.archlinux.org/) repository to install vazir font.
Use your favourite [AUR helper](https://wiki.archlinux.org/index.php/AUR_helpers) like pacaur or yaourt for installing package:

```shell
pacaur -S vazir-fonts
```

### GNU/Linux

gnu/linux users could use [kateb](https://github.com/kiamazi/kateb) font manager, to install vazir font.

```
kateb install vazir
or
kateb update vazir
```

### [Chocolatey](https://chocolatey.org/packages/vazir-font)
#### Install
```
choco install vazir-font
```
#### Upgrade
```
choco upgrade vazir-font
```
#### Uninstall
```
choco uninstall vazir-font
```

## Build instructions

Light, Medium and Bold versions are created with interpolation method by [fontmake](https://github.com/googlefonts/fontmake) library. See the [README.md](/scripts/README.md) file in folder `scripts`. All build steps (generating outputs) are done by scripts.

## License

2015 Saber Rastikerdar ([@rastikerdar](https://github.com/rastikerdar)). See [OFL.txt](OFL.txt).
