<p align="center">📢<sub><sup> <i><b> YOUR SUPPORT IS GREATLY APPRECIATED/</b> <a href="https://www.patreon.com/donPabloNow">PATREON.COM/DONPABLONOW</a>/<b>BTC</b>  3HVNOVVMLHVEWQLSCCQX9DUA26P5PRCTNQ/<b>ETH</b> 0X3D288C7A673501294C9289C6FC42480A2EA61417 </i>🙏 </sub></sup></p><blockquote><p> ⛔️ <sub><b>ARCHIVE PENDING</b>: This endeavour is likely to fail owing to a lack of support. If you find this project interesting, please support it by smashing the "star" button. If the project receives at some interest work on the project will continue.</sub></p></blockquote></br><a href="https://www.donPabloNow.com/#notice"><img alt="image" src="https://www.donPabloNow.com/notice.wepd"/></a></br></br>

<p align="center">
<img alt="image" align="center" src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/logo.png' />
</p>
<p align="center">
<a align="center" href="https://sourceforge.net/projects/proxy-yxorp/files/latest/download"><img alt="image" align="center" alt="Download Proxy yxorP" src="https://a.fsdn.com/con/app/sf-download-button" width=276 height=48 srcset="https://a.fsdn.com/con/app/sf-download-button?button_size=2x 2x"></a>
</p>
<h1  align="center">🦄 .yxorP Stateful SAAS(y), Multi-tenancy Proxy Guzzler</h1><blockquote><p> ⭐️<sub><b>DEMO LIVE</b>: We have just launched the first working live demo / sneak preview of the yxorP Proxy, which is now available via gitpod <a href="https://gitpod.io/#https://github.com/4dboard/proxy-yxorp">[Live Demo]</a></blockquote>
<h3  align="center"><i>Backend (GUI) included, PHP CURL+Composer are Optional</i></h3>
<br /><img alt="image" align="center" src='https://user-images.githubusercontent.com/6468571/174686673-e3ee3ce5-2c13-4ae6-886d-f22aed12a5a0.png' /><br/>
yxorP is a plug-and-play, flat-file application that <b>does not need Composer, PHP CURL, or databases</b>; these are
all optional additions that are fully supported. yxorP is intended to act as a proxy that can edit or update the content
of <b>multiple websites</b> using a PHAR (PHP archive) binary version of <b>Guzzle</b>, and managed via a
user-friendly <b>Cockpit backend (GUI)</b>.<br/>
<br/>It is well-known that yxorP is one of the web proxy systems that offers the most customization compared to other web proxy systems now available on the market. This is owing to its event-driven architecture and emphasis on its plugin-based design, as opposed to its built-in features, which are the most crucial and differentiating components that allow customization and development of its capabilities. In addition to its Back-end administration CMS and graphical user interface, yxorP has a number of other distinguishing features.<br/><br/><br/>
The incoming request hostname is used to fetch site-specific requirements from the backend, the target website is then
retrieved and modified accordingly. Additionally, the website content can be optionally spun using the <b>article
spinning engine</b> that is already embedded into the application. After the website has been modified the result is
then stored for a predefined time inside a custom-built, <b>flat-file cache</b> system architectured to be <b>500x
faster than memory-based cache</b> systems such as Memcache and Redis. This is accomplished by bypassing the
serialisation and deserialization processes, which resulted a significantly faster cache.<br /><br/>

![image](https://user-images.githubusercontent.com/6468571/174922574-d5a246b5-c30e-4a63-bc22-4957184feef9.png)

yxorP was designed to operate with either a stateless server (Apache) or a <b>stateful server</b> (Swoole) which are <b>
high-performance</b> networking frameworks with an <b>event-driven, asynchronous, and non-blocking I/O</b> model -
Compatible with TCP, UDP, Unix socket, HTTP, and Websocket and allows the creation of concurrent services (<b>
Parrelelle</b>) that are both rapid and scalable.

## Stateless Server:

```
<VirtualHost 192.168.1.1 127.0.0.1>
    DocumentRoot "/.yxorP/index.php"
    ServerName www.demo.com
    ServerAlias server
</VirtualHost>
```

## Statefull Server:

```
php ./server.php
```

The constants::get(BUGSNAG) error reporting and warning system now supports yxorP in its most complete version after an
upgrade. This was done to assure constants::get(BUGSNAG)'s compatibility with the modification. Changes to the <b>
default logging</b> system may be done in as little as two minutes due to the program's compatibility with the great
majority of the <b>industry's primary error tracking systems</b>.

## Docker Composer:

```

cd inc

docker-composer up -d

```

## Docker:

```

cd inc

docker run -p 80:80 --rm -u www-data -v `pwd`:/var/www -e ENV=dev donpablonow/yxorp

```

<video controls="true" width="100%" height="auto" autoplay="" name="media"><source src="https://4dboard.github.io/proxy-yxorp/movie.mp4?8" type="video/mp4"></video>

<br />
<br />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/174686718-8501af5f-3fd3-4df9-8854-3319f7837e51.png'/>


> ⚠️**Requires**: Minimum requirement is PHP version 8.0 +

<b>NB:</b><i> Before launching the website, you must ensure that the "cockpit" submodule has been pulled and the details
in the '.env.example' are correct and the file has been renamed '.env'.</i>

Cockpit is the graphical user interface (GUI) for the administration interface, which may be immediately accessed by
entering "/cockpit" and supplying the admin username and password set in the '.env' file.

The credentials defined in the '.env' file are used to setup the sqlite database for the 'cockpit' application. Once the
application is accessed/run for the first time, the only way to 'update/change' the credentials is directly in the
sqlite database or via the 'cockpit' application itself (The '.env' admin username and password are only used on the
first run). The application can also always be reset via a clean installation.

<p align="center"><img alt="image" src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/diagrams.png' /></p>

<br />
<br />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/174686903-294074b2-2129-4084-a42d-33d6387a8851.png' />

<h3 >🔋 Batteries Included: Plug & Play [CURL + Composer Optional], Proxy as a Service, Multi-tenant, Multi-Threaded,
with Cache & Article Spinner.</h3>

Convenient features such as built-in content spinning and an auto caching engine are hidden behind a slick online
interface. Among the cache drivers provided are Arangodb, Devnull, Dynamodb (AWS), Cassandra, Devrandom, Files,
CouchBasev3, Memstatic, Firestore, Couchdb, Leveldb, Mongodb, Memcache(d),Predis, Sqlite, Redis, Wincache, Ssdb, and
Zend Disk Cache.

The combined might of two of the most successful web proxy initiatives is harnessed for maximum effect. This
self-service proxy engine has zero performance loss and supports numerous tenants by combining a flat-file beautiful web
interface with a custom multi-threaded caching layer and an extremely powerful 10,000+ word thesaurus article spinner.
Vanilla Dashboard is a no-cost, no-commitment self-service proxy engine that supports numerous tenants. Specifically,
the project is looking for funding to help tie off some loose ends, particularly with the backed GUI; the front-end is
complete and functional, but code cleanup and unit testing are required.

yxorP (proxy.) is a one-of-a-kind, plug-and-play (no installation required), multi-threaded, website mirroring and
content augmentation, fast cache, and multi-web proxy server that performs website mirroring and content augmentation,
website mirroring and content augmentation, fast cache, and multi-web proxy server (reverse proxy). In addition to
having a built-in "cache" management system as well as a web-based "cache" management system, the proxy is "modular"
or "plugin-based." Web-based reporting and analytics using a graphical user interface (GUI) (GUI). By leveraging a
custom-built content spinning engine, the system allows material to be "augmented" (or "spun") with little performance
degradation (10,000+ thesaurus/dictionary entries) while maintaining high quality.

<p align="center"><img alt="image" src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/Idna.png' /></p>

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157205365-af23c9a1-98a7-40fd-8b74-0b9b0918a259.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157188599-5fdfd399-b340-434e-b80b-ca356f8ad8ab.png' />

### Cockpit Back-End

Cockpit is awesome if you need a flexible content structure but don't want to be limited in how to use the content.
Cockpit is a perfect match if you want to support multiple devices or need a content management UI for static site
builders. Build unique applications and let Cockpit feed them with content.

<img alt="image" src='https://user-images.githubusercontent.com/6468571/174488292-66e75484-d57b-472f-8921-661d09387727.png' />

Introduction Cockpit is a headless CMS with an API-first approach that puts content first. It is designed to simplify
the process of publication by separating content management from content consumption on the client side. Cockpit is
focusing just on the back-end work to manage content. Rather than worry about delivery of content through pages, its
goal is to provide structured content across different channels via a simple API.

<img alt="image" src='https://user-images.githubusercontent.com/6468571/174488463-767e2f7a-8409-445b-b7e8-ed45d0965a89.png' />

#### Key features:

Manage flexible content models. There are no pre-defined content models. Define the content model yourself. Uncluttered
UI. Cockpit offers you a modern and simple user interface. One system, consume it the way you want. Receive your content
via a simple API.

#### The Advantages Of Going Headless

- No presentation limitations – build the best design ever.
- Content for multiple channels – create content once, consume anywhere.
- Highly scalable content – for all your devices and microsites.
- Minimum training required – get started, immediately.
- Easy integrations – connect with everything.

<img alt="image" src='https://user-images.githubusercontent.com/6468571/174488424-88456e97-539c-4ec2-918b-fc59be5be8da.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157205537-31de601d-4b8b-4c6b-af36-4c1e7e3f184f.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157188653-bde1f08c-27ee-4eb8-90f7-69d1e60aa949.png' />

<p align="center"><img alt="image" src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (3).gif' /></p>

## Use case/Applications

Create static flat file variants of your original webpages by using yxorP to mirror your websites and offer the
mirrored/cloned copies as static flat file variations of the original webpages.

#### 🔥 Cache

When you use caching to load your websites, you may reduce loading time and server strain, resulting in websites that
load faster.

#### 📛 Firewall

Create a virtual firewall to protect your websites behind your proxy server, giving security against website assaults
such as DDOS attacks and other types of attacks.

#### 🔳 iFrame

It is possible to circumvent CORS for the iframing services that you need – **not recommended, but feasible**.

#### 🔱 Load-balancing

This may be accomplished by deploying cloned copies of your website on various servers that are connected to a
load-balancing system.

#### ⌛ Allways-online

High/Continuous availability is achieved by running a proxy version of your existing website and switching to this
version of the website during upgrades or down-time.

##### + many more..

There are several additional uses that may be explored, and these are only a few of the more common ones.

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png' />
<img alt="image" src="https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/logosnag.png"/>

constants::get(BUGSNAG) provides a solution for error monitoring and application stability management that is easy to
use and implement. The ability to make data-driven decisions about whether to develop software or address problems is
contingent on the ability to maintain stability.

<img alt="image" src="https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/constants::get(BUGSNAG).gif"/>

Diagnostic data from our mobile assistance, which has been regarded as the best-in-/**

* {@inlinetag}

* this is @not a standardtag - must begin a line.

* this is a valid {@inlinetag} also

* @standardtag

*/ class in the industry, enables teams to reproduce and fix issues as soon as they begin to have an impact on system
stability. Reports on error situations are arranged by root cause and may also be /**

* {@inlinetag}

* this is @not a standardtag - must begin a line.

* this is a valid {@inlinetag} also

* @standardtag

*/ classified by business impact. In addition, they are supplied with extensive diagnostic information.

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157205793-efeaaa6c-eae6-4070-8838-50637876156b.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157188697-4c3a2b95-b40b-441c-bf6a-45c97e4e4b57.png' />

<p align="center"><img alt="image" src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (4).gif' /></p>

## Instant Setup

Instant Development Enviroment stup with your prefered service provider:

<a href="https://vercel.com/new/clone?repository-url=https://github.com/4dboard/yxorP"><img alt="image" src="https://vercel.com/button" /></a> <a href="https://www.heroku.com/deploy/?template=https://gitpod.io/#https://github.com/4dboard/yxorP"><img alt="image" src="https://www.herokucdn.com/deploy/button.svg" /></a> <a href="https://render.com/deploy?repo=https://github.com/4dboard/yxorP"><img alt="image" src="https://render.com/images/deploy-to-render-button.svg" /></a> <a href="https://gitpod.io/#https://github.com/4dboard/yxorP"><img alt="image" src="https://gitpod.io/button/open-in-gitpod.svg" /></a> <img alt="image" src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' /> <img alt="image" src='https://user-images.githubusercontent.com/6468571/157205943-7e735dd6-4d7f-401b-97b7-a25ecc2b9c3b.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157188746-0eb4f847-b0de-464a-9719-acf5bb39e8c4.png' />

# Background Information

Two of the most powerful PHP reverse proxies now accessible on the internet have been merged to create a single web
proxy that outperforms the two when their combined performance is considered. Please keep in mind that this is a
brand-new project that may undergo changes in the future. With the php-proxy library, a component of the PHP programming
language that is available for free download, you may quickly and easily configure a web proxy application for your web
server. If you are able to contribute to or support this project, it would be much appreciated as it would enable me to
devote more development time to it, therefore expediting its progress.

<img alt="image" src='https://user-images.githubusercontent.com/6468571/153799459-4c352a2d-2bc0-413d-9048-7f94bdd7a1a5.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157206067-a7263dc6-09e4-4350-8ad2-3bd51fc349b0.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157188795-5034fd0f-d40e-4a58-9e8e-286e713fb397.png' />

## Web-Proxy vs Proxy Server

Bear in mind that this proxy script may not function properly on websites or pages that are very script-heavy or include
an excessive number of "dynamic components," as indicated above. Web proxies' inability to encrypt data is a
well-documented flaw in the technology. When visiting such websites, you should utilize a legitimate proxy server to
redirect your browser's HTTP requests via the following domains:

<img alt="image" src='https://user-images.githubusercontent.com/6468571/153799352-ee3e60ed-6564-4633-9cc1-7acc2cfb2b50.png' />
<img alt="image" src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157206147-738b606d-6a02-411e-ac17-b5a364601b62.png' />

## Installation

It is critical to keep in mind that this is a **project** and not a library. It is not recommended to install this
package via * require*. This type of project should be immediately uploaded to your web server's public directory.

Download a pre-installed version of this application as a ZIP archive from the downloads area. [**
Releases**](https://github.com/4dboard/yxorP/releases/).

# The Dashboard

🍦 The Dashboard component provides an application-specific JavaScript dashboard that connects with a PHP-written
on-disk database adapted to the application's needs. Vanilla Dashboard, a free and open source program, may be
downloaded from the internet. Numerous "Easter Eggs" are scattered around the Dashboard. The "Who Is Online," "Live
Chat," and "Who Is Online" services, as well as a variety of other features, are all wrapped up in an easy-to-use
CSS-based user interface that is available for download for free.

<img alt="image" src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />
<img alt="image" src='https://user-images.githubusercontent.com/6468571/157188876-61dc86c4-508f-4169-a1f2-a9582c035c2a.png' />

## Development Environment

A Liberating Dev Tool For All Your Projects LAMP recipe, which may be purchased from the link above, are required in
order to complete the Lando - A Liberating Dev Tool For All Your Projects project. You may use the Lando - A Liberating
Dev Tool For All Your Projects project for all of your projects since it enables you to either "plug and play" on
PHP-compatible PCs or create in a LAMP environment. If you need any further information regarding this project, please
visit the section under "Frequently Asked Questions." Worldwide, professional developers use local development and
DevOps technologies on a daily basis, with the United States having the highest concentration of such technologies. In
spite of the fact that there are insufficient instruments to assist in the development process, it is possible to
transcend the conceptual limitations imposed by this situation. Concentrating your attention on the most important
activities will allow you to save time, money, and frustration in the long run. Focusing your efforts on the most
important tasks may help to alleviate some of the stress.

<img alt="image" src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />
<img alt="image" src='https://user-images.githubusercontent.com/6468571/152177774-25482b2a-f8cd-4f19-a221-97dc29212a2d.png' />

Clone this repo

```

git clone https://github.com/4dboard/proxy-yxorp

```

Clone the "sample.env" to ".env" and update with the correct details.

```
cp ./sample.env ./.env
```

Host the files on a PHP server

```
cd ./inc

# Start it up
lando start

# List information about this app.
lando info
```

or

```
# Initialize a lamp recipe using the latest codeigniter version
lando init \
  --source remote \
  --remote-url https://github.com/bcit-ci/CodeIgniter/archive/3.1.10.tar.gz \
  --remote-options="--strip-components 1" \
  --recipe lamp \
  --webroot . \
  --name my-first-lamp-app
```

For more information please see: https://docs.lando.dev/config/lamp.html

<img alt="image" src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157189458-e55e96dd-1faf-4fdf-8c63-f98fc5eab426.png' />

<p align="center"><img alt="image" src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (10).gif' /></p>

## Keep it up-to-date

When it comes to software updates, it is more often than not that they will be made to the application's dependant
packages rather than the program itself; for example, most of the adjustments will be made to the php-proxy package
rather than to the application itself.

#### .env

This file will be loaded into the Config /**

* {@inlinetag}

* this is @not a standardtag - must begin a line.

* this is a valid {@inlinetag} also

* @standardtag

*/ class at the global level.

#### /plugins/

Users are encouraged to create their own unique plugins in this subdirectory, which will then be loaded automatically
from the main directory. The proxy, which comes with a number of built-in plugins, is not without its limitations, and
users are urged to create their own custom plugins in order to broaden the range of options available. Think of a simple
example like the file /plugins/TestPlugin.php in the plugins directory as an illustration.

<img alt="image" src='https://user-images.githubusercontent.com/6468571/152181962-33e4e658-5fbc-4b2d-9366-7147e9fabe65.png' />
<img alt="image" src='https://user-images.githubusercontent.com/6468571/157206367-1c11d91a-87e6-4724-8501-14d9860d78de.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157188915-5ad7cad1-af0a-4e0a-8807-c9fe4708e06b.png' />

# Gitpod

Gitpod, a free and open-source Kubernetes program that is freely accessible on the internet, allows developers to
quickly and efficiently set up code-ready development environments on their workstations. With the use of cloud-based
technology, every piece of work accomplished leads in the production of new, automated development environments in the
cloud, which are then accessible to other developers. It is only via the use of cloud computing that this is made
feasible. The option to start immediate, remote, and cloud-based development environments regardless of whether your
development environment is defined in code is available if you have a browser or desktop integrated development
environment open on your computer.

<img alt="image" src='https://user-images.githubusercontent.com/6468571/152177615-421c1286-33cd-4c38-9f7b-3c486901ba81.png' />
<img alt="image" src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />
<img alt="image" src='https://user-images.githubusercontent.com/6468571/152181058-6446dd76-3012-4e9f-b05a-7d86ca5d0872.png' />
<img alt="image" src='https://user-images.githubusercontent.com/6468571/157206427-04af776e-d516-4fc3-b0ca-2c2cbc0f44cc.png' />

## Usage & How to Guide

Navigate to the root of the project with your browser, register an account and then login.

<img alt="image" src='https://user-images.githubusercontent.com/6468571/152181949-99b9aaa6-586e-4f64-826d-ec7616535d1c.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157189005-b1eb3398-be00-47a3-825d-c13a90258fc2.png' />

## Contributing to the Project

Before pull requests may be implemented in the production environment, they must be evaluated and authorized by the
development team. Please open a new issue with the appropriate subject title to discuss the modifications you want to
make to the document. Please make every effort to keep tests current in order to minimize the chance of wrong
interpretation of results. We appreciate all of your assistance and support.

<p align="center"><img alt="image" src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (14).gif' /></p>

<img alt="image" src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />

<br />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157206554-6f07c153-cca7-4679-a5c7-441f88580bd4.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157189069-baae9f9f-3576-4eea-9427-58a236210541.png' />

## Road Map

- [x] Front-end
    - [x] Combine Proxy Engines
    - [x] Allow Multi-tent rendering
    - [x] Build Caching Layer
    - [x] Develop Multi-threading support (PHP Vanilla/Independent)

    + More (To be listed soon)

- [x] Foundation
    - [x] API Service
    - [x] TxT DB
    - [x] Login
    - [x] Registration
    - [x] Dashboard
    - [x] Who is Online
    - [x] Documentation
- [ ] Tables
    - [x] Users
    - [x] Notes
    - [x] Tasks
    - [ ] Chat
- [ ] Notes
    - [x] Data Scheme
    - [x] API Endpoints
    - [x] Functions
    - [ ] UI
- [ ] Tasks
    - [x] Data Scheme
    - [x] API Endpoints
    - [x] Functions
    - [ ] UI
- [ ] Chat
    - [ ] Data Scheme
    - [x] API Endpoints
    - [x] Functions
    - [ ] UI
- [ ] Testing
    - [x] Versions
    - [x] Owners
    - [ ] Crate details

<img alt="image" src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />
<img alt="image" src='https://user-images.githubusercontent.com/6468571/157206640-0ecdb227-cc7f-46a3-8b26-b0c76ac030a5.png' />

<img alt="image" src='https://user-images.githubusercontent.com/6468571/157189108-1914f60d-d58e-400a-9ced-a5d09a5d81ad.png' />

## Licensing

[MIT Software License for .yxorP The PHP Web-Proxy by don Pablo](https://choosealicense.com/licenses/mit/)

The Massachusetts Institute of Technology (MIT) License, sometimes referred to as the "MIT License," is a permissive
free software license developed in the late 1980s and still in use at the Massachusetts Institute of Technology today.
Repurposing is confined to a limited number of scenarios due to the permissive nature of the program, which assures
compliance with licensing agreements. This license is straightforward and concise; it is a permissive license that just
requires copyright protection and prominent display of licensing information in the form of terms. They may be released
in a number of forms and without the source code because they are licensed works, adaptations, or large-scale works.

![](asset/live.png?v=3)

# Documentation

## Table of Contents

| Method | Description |
|--------|-------------|
| [**attributesSimplifier**](#attributesSimplifier) |  |
| [attributesSimplifier::getReplacePatternData](#attributesSimplifiergetReplacePatternData) |  |
| [**blockListPluginAction**](#blockListPluginAction) |  |
| [blockListPluginAction::onBeforeRequest](#blockListPluginActiononBeforeRequest) |  |
| [blockListPluginAction::callable](#blockListPluginActioncallable) |  |
| [**bugsnagHandlerAction**](#bugsnagHandlerAction) |  |
| [bugsnagHandlerAction::onBuildException](#bugsnagHandlerActiononBuildException) |  |
| [**cache**](#cache) |  |
| [cache::clearAll](#cacheclearAll) |  |
| [cache::super](#cachesuper) |  |
| [cache::get](#cacheget) |  |
| [cache::isValid](#cacheisValid) |  |
| [cache::cache](#cachecache) |  |
| [cache::set](#cacheset) |  |
| [**cacheStoreAction**](#cacheStoreAction) |  |
| [cacheStoreAction::onCompleted](#cacheStoreActiononCompleted) |  |
| [**checkFilesAction**](#checkFilesAction) |  |
| [checkFilesAction::buildIncludes](#checkFilesActionbuildIncludes) |  |
| [**ClassLoader**](#ClassLoader) | ClassLoader implements a PSR-0, PSR-4 and classmap class loader. |
| [ClassLoader::__construct](#ClassLoader__construct) |  |
| [ClassLoader::getPrefixes](#ClassLoadergetPrefixes) |  |
| [ClassLoader::getPrefixesPsr4](#ClassLoadergetPrefixesPsr4) |  |
| [ClassLoader::getFallbackDirs](#ClassLoadergetFallbackDirs) |  |
| [ClassLoader::getFallbackDirsPsr4](#ClassLoadergetFallbackDirsPsr4) |  |
| [ClassLoader::getClassMap](#ClassLoadergetClassMap) |  |
| [ClassLoader::addClassMap](#ClassLoaderaddClassMap) |  |
| [ClassLoader::add](#ClassLoaderadd) | Registers a set of PSR-0 directories for a given prefix, eitherappending or prepending to the ones previously set for this prefix. |
| [ClassLoader::addPsr4](#ClassLoaderaddPsr4) | Registers a set of PSR-4 directories for a given namespace, eitherappending or prepending to the ones previously set for this namespace. |
| [ClassLoader::set](#ClassLoaderset) | Registers a set of PSR-0 directories for a given prefix,replacing any others previously set for this prefix. |
| [ClassLoader::setPsr4](#ClassLoadersetPsr4) | Registers a set of PSR-4 directories for a given namespace,replacing any others previously set for this namespace. |
| [ClassLoader::setUseIncludePath](#ClassLoadersetUseIncludePath) | Turns on searching the include path for class files. |
| [ClassLoader::getUseIncludePath](#ClassLoadergetUseIncludePath) | Can be used to check if the autoloader uses the include path to checkfor classes. |
| [ClassLoader::setClassMapAuthoritative](#ClassLoadersetClassMapAuthoritative) | Turns off searching the prefix and fallback directories for classesthat have not been registered with the class map. |
| [ClassLoader::isClassMapAuthoritative](#ClassLoaderisClassMapAuthoritative) | Should class lookup fail if not found in the current class map? |
| [ClassLoader::setApcuPrefix](#ClassLoadersetApcuPrefix) | APCu prefix to use to cache found/not-found classes, if the extension is enabled. |
| [ClassLoader::getApcuPrefix](#ClassLoadergetApcuPrefix) | The APCu prefix in use, or null if APCu caching is not enabled. |
| [ClassLoader::register](#ClassLoaderregister) | Registers this instance as an autoloader. |
| [ClassLoader::unregister](#ClassLoaderunregister) | Unregisters this instance as an autoloader. |
| [ClassLoader::loadClass](#ClassLoaderloadClass) | Loads the given class or interface. |
| [ClassLoader::findFile](#ClassLoaderfindFile) | Finds the path to the file where the class is defined. |
| [ClassLoader::getRegisteredLoaders](#ClassLoadergetRegisteredLoaders) | Returns the currently registered loaders indexed by their corresponding vendor directories. |
| [**
ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40**](#ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40) |  |
| [ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40::loadClassLoader](#ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40loadClassLoader) |  |
| [ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40::getLoader](#ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40getLoader) |  |
| [**ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40**](#ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40) |  |
| [ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40::getInitializer](#ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40getInitializer) |  |
| [**Config**](#Config) |  |
| [Config::__construct](#Config__construct) |  |
| [Config::get](#Configget) |  |
| [Config::extend](#Configextend) |  |
| [Config::withDefaults](#ConfigwithDefaults) |  |
| [**constants**](#constants) |  |
| [constants::create](#constantscreate) |  |
| [constants::env](#constantsenv) |  |
| [constants::set](#constantsset) |  |
| [constants::localise](#constantslocalise) |  |
| [constants::get](#constantsget) |  |
| [**cookiePluginAction**](#cookiePluginAction) |  |
| [cookiePluginAction::onBeforeRequest](#cookiePluginActiononBeforeRequest) |  |
| [cookiePluginAction::beforeRequest](#cookiePluginActionbeforeRequest) |  |
| [cookiePluginAction::onHeadersReceived](#cookiePluginActiononHeadersReceived) |  |
| [cookiePluginAction::headersReceived](#cookiePluginActionheadersReceived) |  |
| [cookiePluginAction::Received](#cookiePluginActionReceived) |  |
| [**CorruptedPathDetected**](#CorruptedPathDetected) |  |
| [CorruptedPathDetected::forPath](#CorruptedPathDetectedforPath) |  |
| [**dailyMotionPluginAction**](#dailyMotionPluginAction) |  |
| [dailyMotionPluginAction::onCompleted](#dailyMotionPluginActiononCompleted) |  |
| [dailyMotionPluginAction::completed](#dailyMotionPluginActioncompleted) |  |
| [**debubEnablingAction**](#debubEnablingAction) |  |
| [debubEnablingAction::buildIncludes](#debubEnablingActionbuildIncludes) |  |
| [**debugHandlerAction**](#debugHandlerAction) |  |
| [debugHandlerAction::onBuildException](#debugHandlerActiononBuildException) |  |
| [**DirectoryAttributes**](#DirectoryAttributes) |  |
| [DirectoryAttributes::__construct](#DirectoryAttributes__construct) |  |
| [DirectoryAttributes::path](#DirectoryAttributespath) |  |
| [DirectoryAttributes::type](#DirectoryAttributestype) |  |
| [DirectoryAttributes::visibility](#DirectoryAttributesvisibility) |  |
| [DirectoryAttributes::lastModified](#DirectoryAttributeslastModified) |  |
| [DirectoryAttributes::extraMetadata](#DirectoryAttributesextraMetadata) |  |
| [DirectoryAttributes::isFile](#DirectoryAttributesisFile) |  |
| [DirectoryAttributes::isDir](#DirectoryAttributesisDir) |  |
| [DirectoryAttributes::withPath](#DirectoryAttributeswithPath) |  |
| [DirectoryAttributes::fromArray](#DirectoryAttributesfromArray) |  |
| [DirectoryAttributes::jsonSerialize](#DirectoryAttributesjsonSerialize) |  |
| [**DirectoryListing**](#DirectoryListing) |  |
| [DirectoryListing::__construct](#DirectoryListing__construct) |  |
| [DirectoryListing::filter](#DirectoryListingfilter) |  |
| [DirectoryListing::map](#DirectoryListingmap) |  |
| [DirectoryListing::sortByPath](#DirectoryListingsortByPath) |  |
| [DirectoryListing::getIterator](#DirectoryListinggetIterator) |  |
| [DirectoryListing::toArray](#DirectoryListingtoArray) |  |
| [**EmptyExtensionToMimeTypeMap**](#EmptyExtensionToMimeTypeMap) |  |
| [EmptyExtensionToMimeTypeMap::lookupMimeType](#EmptyExtensionToMimeTypeMaplookupMimeType) |  |
| [**ExtensionMimeTypeDetector**](#ExtensionMimeTypeDetector) |  |
| [ExtensionMimeTypeDetector::__construct](#ExtensionMimeTypeDetector__construct) |  |
| [ExtensionMimeTypeDetector::detectMimeType](#ExtensionMimeTypeDetectordetectMimeType) |  |
| [ExtensionMimeTypeDetector::detectMimeTypeFromPath](#ExtensionMimeTypeDetectordetectMimeTypeFromPath) |  |
| [ExtensionMimeTypeDetector::detectMimeTypeFromFile](#ExtensionMimeTypeDetectordetectMimeTypeFromFile) |  |
| [ExtensionMimeTypeDetector::detectMimeTypeFromBuffer](#ExtensionMimeTypeDetectordetectMimeTypeFromBuffer) |  |
| [**FallbackMimeTypeDetector**](#FallbackMimeTypeDetector) |  |
| [FallbackMimeTypeDetector::__construct](#FallbackMimeTypeDetector__construct) |  |
| [FallbackMimeTypeDetector::detectMimeType](#FallbackMimeTypeDetectordetectMimeType) |  |
| [FallbackMimeTypeDetector::detectMimeTypeFromBuffer](#FallbackMimeTypeDetectordetectMimeTypeFromBuffer) |  |
| [FallbackMimeTypeDetector::detectMimeTypeFromPath](#FallbackMimeTypeDetectordetectMimeTypeFromPath) |  |
| [FallbackMimeTypeDetector::detectMimeTypeFromFile](#FallbackMimeTypeDetectordetectMimeTypeFromFile) |  |
| [**FileAttributes**](#FileAttributes) |  |
| [FileAttributes::__construct](#FileAttributes__construct) |  |
| [FileAttributes::type](#FileAttributestype) |  |
| [FileAttributes::path](#FileAttributespath) |  |
| [FileAttributes::fileSize](#FileAttributesfileSize) |  |
| [FileAttributes::visibility](#FileAttributesvisibility) |  |
| [FileAttributes::lastModified](#FileAttributeslastModified) |  |
| [FileAttributes::mimeType](#FileAttributesmimeType) |  |
| [FileAttributes::extraMetadata](#FileAttributesextraMetadata) |  |
| [FileAttributes::isFile](#FileAttributesisFile) |  |
| [FileAttributes::isDir](#FileAttributesisDir) |  |
| [FileAttributes::withPath](#FileAttributeswithPath) |  |
| [FileAttributes::fromArray](#FileAttributesfromArray) |  |
| [FileAttributes::jsonSerialize](#FileAttributesjsonSerialize) |  |
| [**Filesystem**](#Filesystem) |  |
| [Filesystem::__construct](#Filesystem__construct) |  |
| [Filesystem::fileExists](#FilesystemfileExists) |  |
| [Filesystem::directoryExists](#FilesystemdirectoryExists) |  |
| [Filesystem::has](#Filesystemhas) |  |
| [Filesystem::write](#Filesystemwrite) |  |
| [Filesystem::writeStream](#FilesystemwriteStream) |  |
| [Filesystem::read](#Filesystemread) |  |
| [Filesystem::readStream](#FilesystemreadStream) |  |
| [Filesystem::delete](#Filesystemdelete) |  |
| [Filesystem::deleteDirectory](#FilesystemdeleteDirectory) |  |
| [Filesystem::createDirectory](#FilesystemcreateDirectory) |  |
| [Filesystem::listContents](#FilesystemlistContents) |  |
| [Filesystem::move](#Filesystemmove) |  |
| [Filesystem::copy](#Filesystemcopy) |  |
| [Filesystem::lastModified](#FilesystemlastModified) |  |
| [Filesystem::fileSize](#FilesystemfileSize) |  |
| [Filesystem::mimeType](#FilesystemmimeType) |  |
| [Filesystem::setVisibility](#FilesystemsetVisibility) |  |
| [Filesystem::visibility](#Filesystemvisibility) |  |
| [**FinfoMimeTypeDetector**](#FinfoMimeTypeDetector) |  |
| [FinfoMimeTypeDetector::__construct](#FinfoMimeTypeDetector__construct) |  |
| [FinfoMimeTypeDetector::detectMimeType](#FinfoMimeTypeDetectordetectMimeType) |  |
| [FinfoMimeTypeDetector::detectMimeTypeFromPath](#FinfoMimeTypeDetectordetectMimeTypeFromPath) |  |
| [FinfoMimeTypeDetector::detectMimeTypeFromFile](#FinfoMimeTypeDetectordetectMimeTypeFromFile) |  |
| [FinfoMimeTypeDetector::detectMimeTypeFromBuffer](#FinfoMimeTypeDetectordetectMimeTypeFromBuffer) |  |
| [**generalHelper**](#generalHelper) |  |
| [generalHelper::vid_player](#generalHelpervid_player) |  |
| [generalHelper::starts_with](#generalHelperstarts_with) |  |
| [generalHelper::str_before](#generalHelperstr_before) |  |
| [generalHelper::is_html](#generalHelperis_html) |  |
| [generalHelper::in_arrayi](#generalHelperin_arrayi) |  |
| [generalHelper::re_match](#generalHelperre_match) |  |
| [generalHelper::array_merge_custom](#generalHelperarray_merge_custom) |  |
| [generalHelper::str_rot_pass](#generalHelperstr_rot_pass) |  |
| [generalHelper::app_url](#generalHelperapp_url) |  |
| [generalHelper::render_string](#generalHelperrender_string) |  |
| [generalHelper::time_ms](#generalHelpertime_ms) |  |
| [generalHelper::base64_url_encode](#generalHelperbase64_url_encode) |  |
| [generalHelper::base64_url_decode](#generalHelperbase64_url_decode) |  |
| [generalHelper::proxify_url](#generalHelperproxify_url) |  |
| [generalHelper::add_http](#generalHelperadd_http) |  |
| [generalHelper::rel2abs](#generalHelperrel2abs) |  |
| [generalHelper::array_merge_ignore](#generalHelperarray_merge_ignore) |  |
| [generalHelper::CSV](#generalHelperCSV) |  |
| [generalHelper::fileCheck](#generalHelperfileCheck) |  |
| [generalHelper::extractSubdomains](#generalHelperextractSubdomains) |  |
| [generalHelper::extractDomain](#generalHelperextractDomain) |  |
| [**GeneratedExtensionToMimeTypeMap**](#GeneratedExtensionToMimeTypeMap) |  |
| [GeneratedExtensionToMimeTypeMap::lookupMimeType](#GeneratedExtensionToMimeTypeMaplookupMimeType) |  |
| [**globalCollectionAction**](#globalCollectionAction) |  |
| [globalCollectionAction::onBuildContext](#globalCollectionActiononBuildContext) |  |
| [**guzzleClientAction**](#guzzleClientAction) |  |
| [guzzleClientAction::onBeforeRequest](#guzzleClientActiononBeforeRequest) |  |
| [**headerRewritePluginAction**](#headerRewritePluginAction) |  |
| [headerRewritePluginAction::onBeforeRequest](#headerRewritePluginActiononBeforeRequest) |  |
| [headerRewritePluginAction::onHeadersReceived](#headerRewritePluginActiononHeadersReceived) |  |
| [headerRewritePluginAction::headersReceived](#headerRewritePluginActionheadersReceived) |  |
| [**htmlCommentsRemover**](#htmlCommentsRemover) |  |
| [htmlCommentsRemover::getReplacePatternData](#htmlCommentsRemovergetReplacePatternData) |  |
| [**inlineCssMinifier**](#inlineCssMinifier) |  |
| [inlineCssMinifier::process](#inlineCssMinifierprocess) |  |
| [**inlineJavascriptMinifier**](#inlineJavascriptMinifier) |  |
| [inlineJavascriptMinifier::process](#inlineJavascriptMinifierprocess) |  |
| [**
InstalledVersions**](#InstalledVersions) | This class is copied in every Composer installed project and available to all |
| [InstalledVersions::getInstalledPackages](#InstalledVersionsgetInstalledPackages) | Returns a list of all package names which are present, either by being installed, replaced or provided |
| [InstalledVersions::getInstalledPackagesByType](#InstalledVersionsgetInstalledPackagesByType) | Returns a list of all package names with a specific type e.g. &#039;library&#039; |
| [InstalledVersions::isInstalled](#InstalledVersionsisInstalled) | Checks whether the given package is installed |
| [InstalledVersions::satisfies](#InstalledVersionssatisfies) | Checks whether the given package satisfies a version constraint |
| [InstalledVersions::getVersionRanges](#InstalledVersionsgetVersionRanges) | Returns a version constraint representing all the range(s) which are installed for a given package |
| [InstalledVersions::getVersion](#InstalledVersionsgetVersion) |  |
| [InstalledVersions::getPrettyVersion](#InstalledVersionsgetPrettyVersion) |  |
| [InstalledVersions::getReference](#InstalledVersionsgetReference) |  |
| [InstalledVersions::getInstallPath](#InstalledVersionsgetInstallPath) |  |
| [InstalledVersions::getRootPackage](#InstalledVersionsgetRootPackage) |  |
| [InstalledVersions::getRawData](#InstalledVersionsgetRawData) | Returns the raw installed.php data for custom implementations |
| [InstalledVersions::getAllRawData](#InstalledVersionsgetAllRawData) | Returns the raw data of all installed.php which are currently loaded for custom implementations |
| [InstalledVersions::reload](#InstalledVersionsreload) | Lets you reload the static array from another file |
| [**InvalidStreamProvided**](#InvalidStreamProvided) |  |
| [**InvalidVisibilityProvided**](#InvalidVisibilityProvided) |  |
| [InvalidVisibilityProvided::withVisibility](#InvalidVisibilityProvidedwithVisibility) |  |
| [**LocalFilesystemAdapter**](#LocalFilesystemAdapter) |  |
| [LocalFilesystemAdapter::__construct](#LocalFilesystemAdapter__construct) |  |
| [LocalFilesystemAdapter::write](#LocalFilesystemAdapterwrite) |  |
| [LocalFilesystemAdapter::writeStream](#LocalFilesystemAdapterwriteStream) |  |
| [LocalFilesystemAdapter::delete](#LocalFilesystemAdapterdelete) |  |
| [LocalFilesystemAdapter::deleteDirectory](#LocalFilesystemAdapterdeleteDirectory) |  |
| [LocalFilesystemAdapter::listContents](#LocalFilesystemAdapterlistContents) |  |
| [LocalFilesystemAdapter::move](#LocalFilesystemAdaptermove) |  |
| [LocalFilesystemAdapter::copy](#LocalFilesystemAdaptercopy) |  |
| [LocalFilesystemAdapter::read](#LocalFilesystemAdapterread) |  |
| [LocalFilesystemAdapter::readStream](#LocalFilesystemAdapterreadStream) |  |
| [LocalFilesystemAdapter::fileExists](#LocalFilesystemAdapterfileExists) |  |
| [LocalFilesystemAdapter::directoryExists](#LocalFilesystemAdapterdirectoryExists) |  |
| [LocalFilesystemAdapter::createDirectory](#LocalFilesystemAdaptercreateDirectory) |  |
| [LocalFilesystemAdapter::setVisibility](#LocalFilesystemAdaptersetVisibility) |  |
| [LocalFilesystemAdapter::visibility](#LocalFilesystemAdaptervisibility) |  |
| [LocalFilesystemAdapter::mimeType](#LocalFilesystemAdaptermimeType) |  |
| [LocalFilesystemAdapter::lastModified](#LocalFilesystemAdapterlastModified) |  |
| [LocalFilesystemAdapter::fileSize](#LocalFilesystemAdapterfileSize) |  |
| [**logPluginAction**](#logPluginAction) |  |
| [logPluginAction::onHeadersReceived](#logPluginActiononHeadersReceived) |  |
| [**mimeTypesAction**](#mimeTypesAction) |  |
| [mimeTypesAction::buildHeaders](#mimeTypesActionbuildHeaders) |  |
| [**minify**](#minify) |  |
| [minify::__construct](#minify__construct) |  |
| [minify::createDefault](#minifycreateDefault) |  |
| [minify::process](#minifyprocess) |  |
| [minify::addProcessor](#minifyaddProcessor) |  |
| [**MountManager**](#MountManager) |  |
| [MountManager::__construct](#MountManager__construct) | MountManager constructor. |
| [MountManager::fileExists](#MountManagerfileExists) |  |
| [MountManager::has](#MountManagerhas) |  |
| [MountManager::directoryExists](#MountManagerdirectoryExists) |  |
| [MountManager::read](#MountManagerread) |  |
| [MountManager::readStream](#MountManagerreadStream) |  |
| [MountManager::listContents](#MountManagerlistContents) |  |
| [MountManager::lastModified](#MountManagerlastModified) |  |
| [MountManager::fileSize](#MountManagerfileSize) |  |
| [MountManager::mimeType](#MountManagermimeType) |  |
| [MountManager::visibility](#MountManagervisibility) |  |
| [MountManager::write](#MountManagerwrite) |  |
| [MountManager::writeStream](#MountManagerwriteStream) |  |
| [MountManager::setVisibility](#MountManagersetVisibility) |  |
| [MountManager::delete](#MountManagerdelete) |  |
| [MountManager::deleteDirectory](#MountManagerdeleteDirectory) |  |
| [MountManager::createDirectory](#MountManagercreateDirectory) |  |
| [MountManager::move](#MountManagermove) |  |
| [MountManager::copy](#MountManagercopy) |  |
| [**overridePluginAction**](#overridePluginAction) |  |
| [overridePluginAction::onCompleted](#overridePluginActiononCompleted) |  |
| [overridePluginAction::REWRITE](#overridePluginActionREWRITE) |  |
| [**OverridingExtensionToMimeTypeMap**](#OverridingExtensionToMimeTypeMap) |  |
| [OverridingExtensionToMimeTypeMap::__construct](#OverridingExtensionToMimeTypeMap__construct) |  |
| [OverridingExtensionToMimeTypeMap::lookupMimeType](#OverridingExtensionToMimeTypeMaplookupMimeType) |  |
| [**paramStore**](#paramStore) |  |
| [paramStore::__construct](#paramStore__construct) |  |
| [paramStore::replace](#paramStorereplace) |  |
| [paramStore::clear](#paramStoreclear) |  |
| [paramStore::set](#paramStoreset) |  |
| [paramStore::has](#paramStorehas) |  |
| [paramStore::remove](#paramStoreremove) |  |
| [paramStore::get](#paramStoreget) |  |
| [paramStore::all](#paramStoreall) |  |
| [paramStore::__toString](#paramStore__toString) |  |
| [**PathPrefixer**](#PathPrefixer) |  |
| [PathPrefixer::__construct](#PathPrefixer__construct) |  |
| [PathPrefixer::prefixPath](#PathPrefixerprefixPath) |  |
| [PathPrefixer::stripPrefix](#PathPrefixerstripPrefix) |  |
| [PathPrefixer::stripDirectoryPrefix](#PathPrefixerstripDirectoryPrefix) |  |
| [PathPrefixer::prefixDirectoryPath](#PathPrefixerprefixDirectoryPath) |  |
| [**PathTraversalDetected**](#PathTraversalDetected) |  |
| [PathTraversalDetected::path](#PathTraversalDetectedpath) |  |
| [PathTraversalDetected::forPath](#PathTraversalDetectedforPath) |  |
| [**PortableVisibilityConverter**](#PortableVisibilityConverter) |  |
| [PortableVisibilityConverter::__construct](#PortableVisibilityConverter__construct) |  |
| [PortableVisibilityConverter::forFile](#PortableVisibilityConverterforFile) |  |
| [PortableVisibilityConverter::forDirectory](#PortableVisibilityConverterforDirectory) |  |
| [PortableVisibilityConverter::inverseForFile](#PortableVisibilityConverterinverseForFile) |  |
| [PortableVisibilityConverter::inverseForDirectory](#PortableVisibilityConverterinverseForDirectory) |  |
| [PortableVisibilityConverter::defaultForDirectories](#PortableVisibilityConverterdefaultForDirectories) |  |
| [PortableVisibilityConverter::fromArray](#PortableVisibilityConverterfromArray) |  |
| [**PortableVisibilityGuard**](#PortableVisibilityGuard) |  |
| [PortableVisibilityGuard::guardAgainstInvalidInput](#PortableVisibilityGuardguardAgainstInvalidInput) |  |
| [**proxifyPluginAction**](#proxifyPluginAction) |  |
| [proxifyPluginAction::onBeforeRequest](#proxifyPluginActiononBeforeRequest) |  |
| [proxifyPluginAction::onCompleted](#proxifyPluginActiononCompleted) |  |
| [proxifyPluginAction::clean_content_type](#proxifyPluginActionclean_content_type) |  |
| [**quotesRemover**](#quotesRemover) |  |
| [quotesRemover::getReplacePatternData](#quotesRemovergetReplacePatternData) |  |
| [**readyCheckAction**](#readyCheckAction) |  |
| [readyCheckAction::onCheck](#readyCheckActiononCheck) |  |
| [**request**](#request) |  |
| [request::__construct](#request__construct) |  |
| [request::setUrl](#requestsetUrl) |  |
| [request::parseQuery](#requestparseQuery) |  |
| [request::setBody](#requestsetBody) |  |
| [request::prepare](#requestprepare) |  |
| [request::buildPostBody](#requestbuildPostBody) |  |
| [request::createFromGlobals](#requestcreateFromGlobals) |  |
| [request::getMethod](#requestgetMethod) |  |
| [request::setMethod](#requestsetMethod) |  |
| [request::getUrl](#requestgetUrl) |  |
| [request::getProtocolVersion](#requestgetProtocolVersion) |  |
| [request::getRawHeaders](#requestgetRawHeaders) |  |
| [request::getRawBody](#requestgetRawBody) |  |
| [request::getUri](#requestgetUri) |  |
| [**requestBodyAction**](#requestBodyAction) |  |
| [requestBodyAction::buildRequest](#requestBodyActionbuildRequest) |  |
| [**requestResponseAction**](#requestResponseAction) |  |
| [requestResponseAction::buildIncludes](#requestResponseActionbuildIncludes) |  |
| [**resourceHandlerAction**](#resourceHandlerAction) |  |
| [resourceHandlerAction::onBuildException](#resourceHandlerActiononBuildException) |  |
| [**response**](#response) |  |
| [response::__construct](#response__construct) |  |
| [response::setStatusCode](#responsesetStatusCode) |  |
| [response::getContent](#responsegetContent) |  |
| [response::setContent](#responsesetContent) |  |
| [response::printContent](#responseprintContent) |  |
| [response::sendHeaders](#responsesendHeaders) |  |
| [response::getStatusText](#responsegetStatusText) |  |
| [response::getStatusCode](#responsegetStatusCode) |  |
| [**setHeadersAction**](#setHeadersAction) |  |
| [setHeadersAction::buildHeaders](#setHeadersActionbuildHeaders) |  |
| [**siteCollectionAction**](#siteCollectionAction) |  |
| [siteCollectionAction::onBuildContext](#siteCollectionActiononBuildContext) |  |
| [**streamPluginAction**](#streamPluginAction) |  |
| [streamPluginAction::onHeadersReceived](#streamPluginActiononHeadersReceived) |  |
| [streamPluginAction::onCurlWrite](#streamPluginActiononCurlWrite) |  |
| [streamPluginAction::onCompleted](#streamPluginActiononCompleted) |  |
| [**SymbolicLinkEncountered**](#SymbolicLinkEncountered) |  |
| [SymbolicLinkEncountered::location](#SymbolicLinkEncounteredlocation) |  |
| [SymbolicLinkEncountered::atLocation](#SymbolicLinkEncounteredatLocation) |  |
| [**twitterPluginAction**](#twitterPluginAction) |  |
| [twitterPluginAction::onCompleted](#twitterPluginActiononCompleted) |  |
| [**UnableToCheckDirectoryExistence**](#UnableToCheckDirectoryExistence) |  |
| [UnableToCheckDirectoryExistence::operation](#UnableToCheckDirectoryExistenceoperation) |  |
| [**UnableToCheckExistence**](#UnableToCheckExistence) |  |
| [UnableToCheckExistence::forLocation](#UnableToCheckExistenceforLocation) |  |
| [UnableToCheckExistence::operation](#UnableToCheckExistenceoperation) |  |
| [**UnableToCheckFileExistence**](#UnableToCheckFileExistence) |  |
| [UnableToCheckFileExistence::operation](#UnableToCheckFileExistenceoperation) |  |
| [**UnableToCopyFile**](#UnableToCopyFile) |  |
| [UnableToCopyFile::source](#UnableToCopyFilesource) |  |
| [UnableToCopyFile::destination](#UnableToCopyFiledestination) |  |
| [UnableToCopyFile::fromLocationTo](#UnableToCopyFilefromLocationTo) |  |
| [UnableToCopyFile::operation](#UnableToCopyFileoperation) |  |
| [**UnableToCreateDirectory**](#UnableToCreateDirectory) |  |
| [UnableToCreateDirectory::atLocation](#UnableToCreateDirectoryatLocation) |  |
| [UnableToCreateDirectory::dueToFailure](#UnableToCreateDirectorydueToFailure) |  |
| [UnableToCreateDirectory::operation](#UnableToCreateDirectoryoperation) |  |
| [UnableToCreateDirectory::location](#UnableToCreateDirectorylocation) |  |
| [**UnableToDeleteDirectory**](#UnableToDeleteDirectory) |  |
| [UnableToDeleteDirectory::atLocation](#UnableToDeleteDirectoryatLocation) |  |
| [UnableToDeleteDirectory::operation](#UnableToDeleteDirectoryoperation) |  |
| [UnableToDeleteDirectory::reason](#UnableToDeleteDirectoryreason) |  |
| [UnableToDeleteDirectory::location](#UnableToDeleteDirectorylocation) |  |
| [**UnableToDeleteFile**](#UnableToDeleteFile) |  |
| [UnableToDeleteFile::atLocation](#UnableToDeleteFileatLocation) |  |
| [UnableToDeleteFile::operation](#UnableToDeleteFileoperation) |  |
| [UnableToDeleteFile::reason](#UnableToDeleteFilereason) |  |
| [UnableToDeleteFile::location](#UnableToDeleteFilelocation) |  |
| [**UnableToMountFilesystem**](#UnableToMountFilesystem) |  |
| [UnableToMountFilesystem::becauseTheKeyIsNotValid](#UnableToMountFilesystembecauseTheKeyIsNotValid) |  |
| [UnableToMountFilesystem::becauseTheFilesystemWasNotValid](#UnableToMountFilesystembecauseTheFilesystemWasNotValid) |  |
| [**UnableToMoveFile**](#UnableToMoveFile) |  |
| [UnableToMoveFile::source](#UnableToMoveFilesource) |  |
| [UnableToMoveFile::destination](#UnableToMoveFiledestination) |  |
| [UnableToMoveFile::fromLocationTo](#UnableToMoveFilefromLocationTo) |  |
| [UnableToMoveFile::operation](#UnableToMoveFileoperation) |  |
| [**UnableToReadFile**](#UnableToReadFile) |  |
| [UnableToReadFile::fromLocation](#UnableToReadFilefromLocation) |  |
| [UnableToReadFile::operation](#UnableToReadFileoperation) |  |
| [UnableToReadFile::reason](#UnableToReadFilereason) |  |
| [UnableToReadFile::location](#UnableToReadFilelocation) |  |
| [**UnableToResolveFilesystemMount**](#UnableToResolveFilesystemMount) |  |
| [UnableToResolveFilesystemMount::becauseTheSeparatorIsMissing](#UnableToResolveFilesystemMountbecauseTheSeparatorIsMissing) |  |
| [UnableToResolveFilesystemMount::becauseTheMountWasNotRegistered](#UnableToResolveFilesystemMountbecauseTheMountWasNotRegistered) |  |
| [**UnableToRetrieveMetadata**](#UnableToRetrieveMetadata) |  |
| [UnableToRetrieveMetadata::lastModified](#UnableToRetrieveMetadatalastModified) |  |
| [UnableToRetrieveMetadata::visibility](#UnableToRetrieveMetadatavisibility) |  |
| [UnableToRetrieveMetadata::fileSize](#UnableToRetrieveMetadatafileSize) |  |
| [UnableToRetrieveMetadata::mimeType](#UnableToRetrieveMetadatamimeType) |  |
| [UnableToRetrieveMetadata::create](#UnableToRetrieveMetadatacreate) |  |
| [UnableToRetrieveMetadata::reason](#UnableToRetrieveMetadatareason) |  |
| [UnableToRetrieveMetadata::location](#UnableToRetrieveMetadatalocation) |  |
| [UnableToRetrieveMetadata::metadataType](#UnableToRetrieveMetadatametadataType) |  |
| [UnableToRetrieveMetadata::operation](#UnableToRetrieveMetadataoperation) |  |
| [**UnableToSetVisibility**](#UnableToSetVisibility) |  |
| [UnableToSetVisibility::reason](#UnableToSetVisibilityreason) |  |
| [UnableToSetVisibility::atLocation](#UnableToSetVisibilityatLocation) |  |
| [UnableToSetVisibility::operation](#UnableToSetVisibilityoperation) |  |
| [UnableToSetVisibility::location](#UnableToSetVisibilitylocation) |  |
| [**UnableToWriteFile**](#UnableToWriteFile) |  |
| [UnableToWriteFile::atLocation](#UnableToWriteFileatLocation) |  |
| [UnableToWriteFile::operation](#UnableToWriteFileoperation) |  |
| [UnableToWriteFile::reason](#UnableToWriteFilereason) |  |
| [UnableToWriteFile::location](#UnableToWriteFilelocation) |  |
| [**UnreadableFileEncountered**](#UnreadableFileEncountered) |  |
| [UnreadableFileEncountered::location](#UnreadableFileEncounteredlocation) |  |
| [UnreadableFileEncountered::atLocation](#UnreadableFileEncounteredatLocation) |  |
| [**Visibility**](#Visibility) |  |
| [**WhitespacePathNormalizer**](#WhitespacePathNormalizer) |  |
| [WhitespacePathNormalizer::normalizePath](#WhitespacePathNormalizernormalizePath) |  |
| [**whitespacesRemover**](#whitespacesRemover) |  |
| [whitespacesRemover::process](#whitespacesRemoverprocess) |  |
| [**youtubePluginAction**](#youtubePluginAction) |  |
| [youtubePluginAction::onBeforeRequest](#youtubePluginActiononBeforeRequest) |  |
| [youtubePluginAction::onCompleted](#youtubePluginActiononCompleted) |  |

## attributesSimplifier

* Full name: \yxorP\minify\attributesSimplifier
* Parent class: \yxorP\minify\areplacer
* This class implements: \yxorP\minify\minfyInterface

### attributesSimplifier::getReplacePatternData

```php
attributesSimplifier::getReplacePatternData(  ): array
```

**Return Value:**





---

## blockListPluginAction

* Full name: \blockListPluginAction
* Parent class: \yxorP\http\wrapper

### blockListPluginAction::onBeforeRequest

```php
blockListPluginAction::onBeforeRequest(  ): void
```

**Return Value:**





---

### blockListPluginAction::callable

```php
blockListPluginAction::callable( mixed fnc_custom, mixed url ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `fnc_custom` | **mixed** |  |
| `url` | **mixed** |  |

**Return Value:**





---

## bugsnagHandlerAction

* Full name: \bugsnagHandlerAction
* Parent class: \yxorP\http\wrapper

### bugsnagHandlerAction::onBuildException

```php
bugsnagHandlerAction::onBuildException( mixed e ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `e` | **mixed** |  |

**Return Value:**





---

## cache

* Full name: \yxorP\http\cache

### cache::clearAll

```php
cache::clearAll(  ): void
```

* This method is **static**.

**Return Value:**





---

### cache::super

```php
cache::super(  ): void
```

**Return Value:**





---

### cache::get

```php
cache::get(  ): void
```

**Return Value:**





---

### cache::isValid

```php
cache::isValid(  ): bool
```

**Return Value:**





---

### cache::cache

```php
cache::cache(  ): mixed
```

* This method is **static**.

**Return Value:**





---

### cache::set

```php
cache::set( mixed val ): \yxorP\http\cache
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `val` | **mixed** |  |

**Return Value:**





---

## cacheStoreAction

* Full name: \cacheStoreAction
* Parent class: \yxorP\http\wrapper

### cacheStoreAction::onCompleted

```php
cacheStoreAction::onCompleted(  ): void
```

**Return Value:**





---

## checkFilesAction

* Full name: \checkFilesAction
* Parent class: \yxorP\http\wrapper

### checkFilesAction::buildIncludes

```php
checkFilesAction::buildIncludes(  ): mixed
```

**Return Value:**





---

## ClassLoader

ClassLoader implements a PSR-0, PSR-4 and classmap class loader.

$loader = new \Composer\Autoload\ClassLoader();

    // register classes with namespaces
    $loader->add('Symfony\Component', __DIR__.'/component');
    $loader->add('Symfony',           __DIR__.'/framework');

    // activate the autoloader
    $loader->register();

    // to enable searching the include path (eg. for PEAR packages)
    $loader->setUseIncludePath(true);

In this example, if you try to use a class in the Symfony\Component namespace or one of its children (
Symfony\Component\Console for instance), the autoloader will first look for the class under the component/ directory,
and it will then fallback to the framework/ directory if not found before giving up.

This class is loosely based on the Symfony UniversalClassLoader.

* Full name: \Composer\Autoload\ClassLoader

**See Also:**

* https://www.php-fig.org/psr/psr-0/ - * https://www.php-fig.org/psr/psr-4/ -

### ClassLoader::__construct

```php
ClassLoader::__construct( ?string vendorDir = null ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `vendorDir` | **?string** |  |

**Return Value:**





---

### ClassLoader::getPrefixes

```php
ClassLoader::getPrefixes(  ): string[]
```

**Return Value:**





---

### ClassLoader::getPrefixesPsr4

```php
ClassLoader::getPrefixesPsr4(  ): array[]
```

**Return Value:**





---

### ClassLoader::getFallbackDirs

```php
ClassLoader::getFallbackDirs(  ): array[]
```

**Return Value:**





---

### ClassLoader::getFallbackDirsPsr4

```php
ClassLoader::getFallbackDirsPsr4(  ): array[]
```

**Return Value:**





---

### ClassLoader::getClassMap

```php
ClassLoader::getClassMap(  ): string[]
```

**Return Value:**

Array of classname => path



---

### ClassLoader::addClassMap

```php
ClassLoader::addClassMap( string[] classMap ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `classMap` | **string[]** | Class to filename map |

**Return Value:**





---

### ClassLoader::add

Registers a set of PSR-0 directories for a given prefix, either appending or prepending to the ones previously set for
this prefix.

```php
ClassLoader::add( string prefix, string[]|string paths, bool prepend = false ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prefix` | **string** | The prefix |
| `paths` | **string[]\|string** | The PSR-0 root directories |
| `prepend` | **bool** | Whether to prepend the directories |

**Return Value:**





---

### ClassLoader::addPsr4

Registers a set of PSR-4 directories for a given namespace, either appending or prepending to the ones previously set
for this namespace.

```php
ClassLoader::addPsr4( string prefix, string[]|string paths, bool prepend = false ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prefix` | **string** | The prefix/namespace, with trailing &#039;\\&#039; |
| `paths` | **string[]\|string** | The PSR-4 base directories |
| `prepend` | **bool** | Whether to prepend the directories |

**Return Value:**





---

### ClassLoader::set

Registers a set of PSR-0 directories for a given prefix, replacing any others previously set for this prefix.

```php
ClassLoader::set( string prefix, string[]|string paths ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prefix` | **string** | The prefix |
| `paths` | **string[]\|string** | The PSR-0 base directories |

**Return Value:**





---

### ClassLoader::setPsr4

Registers a set of PSR-4 directories for a given namespace, replacing any others previously set for this namespace.

```php
ClassLoader::setPsr4( string prefix, string[]|string paths ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prefix` | **string** | The prefix/namespace, with trailing &#039;\\&#039; |
| `paths` | **string[]\|string** | The PSR-4 base directories |

**Return Value:**





---

### ClassLoader::setUseIncludePath

Turns on searching the include path for class files.

```php
ClassLoader::setUseIncludePath( bool useIncludePath ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `useIncludePath` | **bool** |  |

**Return Value:**





---

### ClassLoader::getUseIncludePath

Can be used to check if the autoloader uses the include path to check for classes.

```php
ClassLoader::getUseIncludePath(  ): bool
```

**Return Value:**





---

### ClassLoader::setClassMapAuthoritative

Turns off searching the prefix and fallback directories for classes that have not been registered with the class map.

```php
ClassLoader::setClassMapAuthoritative( bool classMapAuthoritative ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `classMapAuthoritative` | **bool** |  |

**Return Value:**





---

### ClassLoader::isClassMapAuthoritative

Should class lookup fail if not found in the current class map?

```php
ClassLoader::isClassMapAuthoritative(  ): bool
```

**Return Value:**





---

### ClassLoader::setApcuPrefix

APCu prefix to use to cache found/not-found classes, if the extension is enabled.

```php
ClassLoader::setApcuPrefix( string|null apcuPrefix ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `apcuPrefix` | **string\|null** |  |

**Return Value:**





---

### ClassLoader::getApcuPrefix

The APCu prefix in use, or null if APCu caching is not enabled.

```php
ClassLoader::getApcuPrefix(  ): string|null
```

**Return Value:**





---

### ClassLoader::register

Registers this instance as an autoloader.

```php
ClassLoader::register( bool prepend = false ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prepend` | **bool** | Whether to prepend the autoloader or not |

**Return Value:**





---

### ClassLoader::unregister

Unregisters this instance as an autoloader.

```php
ClassLoader::unregister(  ): void
```

**Return Value:**





---

### ClassLoader::loadClass

Loads the given class or interface.

```php
ClassLoader::loadClass( string class ): true|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `class` | **string** | The name of the class |

**Return Value:**

True if loaded, null otherwise



---

### ClassLoader::findFile

Finds the path to the file where the class is defined.

```php
ClassLoader::findFile( string class ): string|false
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `class` | **string** | The name of the class |

**Return Value:**

The path if found, false otherwise



---

### ClassLoader::getRegisteredLoaders

Returns the currently registered loaders indexed by their corresponding vendor directories.

```php
ClassLoader::getRegisteredLoaders(  ): self[]
```

* This method is **static**.

**Return Value:**





---

## ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40

* Full name: \ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40

### ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40::loadClassLoader

```php
ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40::loadClassLoader( mixed class ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `class` | **mixed** |  |

**Return Value:**





---

### ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40::getLoader

```php
ComposerAutoloaderInitab293cd0cd12e6cb9da10a8189827d40::getLoader(  ): \Composer\Autoload\ClassLoader
```

* This method is **static**.

**Return Value:**





---

## ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40

* Full name: \Composer\Autoload\ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40

### ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40::getInitializer

```php
ComposerStaticInitab293cd0cd12e6cb9da10a8189827d40::getInitializer( \Composer\Autoload\ClassLoader loader ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `loader` | **\Composer\Autoload\ClassLoader** |  |

**Return Value:**





---

## Config

* Full name: \League\Flysystem\Config

### Config::__construct

```php
Config::__construct( array options = [] ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `options` | **array** |  |

**Return Value:**





---

### Config::get

```php
Config::get( string property, mixed default = null ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `property` | **string** |  |
| `default` | **mixed** |  |

**Return Value:**





---

### Config::extend

```php
Config::extend( array options ): \League\Flysystem\Config
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `options` | **array** |  |

**Return Value:**





---

### Config::withDefaults

```php
Config::withDefaults( array defaults ): \League\Flysystem\Config
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `defaults` | **array** |  |

**Return Value:**





---

## constants

* Full name: \yxorP\inc\constants

### constants::create

```php
constants::create( _dir ): void
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `_dir` | **** |  |

**Return Value:**





---

### constants::env

```php
constants::env( line ): void
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `line` | **** |  |

**Return Value:**





---

### constants::set

```php
constants::set( _name, _value ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `_name` | **** |  |
| `_value` | **** |  |

**Return Value:**





---

### constants::localise

```php
constants::localise( _req ): void
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `_req` | **** |  |

**Return Value:**





---

### constants::get

```php
constants::get( _name ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `_name` | **** |  |

**Return Value:**





---

## cookiePluginAction

* Full name: \cookiePluginAction
* Parent class: \yxorP\http\wrapper

### cookiePluginAction::onBeforeRequest

```php
cookiePluginAction::onBeforeRequest(  ): void
```

**Return Value:**





---

### cookiePluginAction::beforeRequest

```php
cookiePluginAction::beforeRequest( mixed match ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `match` | **mixed** |  |

**Return Value:**





---

### cookiePluginAction::onHeadersReceived

```php
cookiePluginAction::onHeadersReceived(  ): void
```

**Return Value:**





---

### cookiePluginAction::headersReceived

```php
cookiePluginAction::headersReceived( mixed response, mixed set_cookie ): void
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `response` | **mixed** |  |
| `set_cookie` | **mixed** |  |

**Return Value:**





---

### cookiePluginAction::Received

```php
cookiePluginAction::Received( mixed line ): void
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `line` | **mixed** |  |

**Return Value:**





---

## CorruptedPathDetected

* Full name: \League\Flysystem\CorruptedPathDetected
* Parent class:
* This class implements: \League\Flysystem\FilesystemException

### CorruptedPathDetected::forPath

```php
CorruptedPathDetected::forPath( string path ): \League\Flysystem\CorruptedPathDetected
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

## dailyMotionPluginAction

* Full name: \dailyMotionPluginAction
* Parent class: \yxorP\http\wrapper

### dailyMotionPluginAction::onCompleted

```php
dailyMotionPluginAction::onCompleted(  ): void
```

**Return Value:**





---

### dailyMotionPluginAction::completed

```php
dailyMotionPluginAction::completed( mixed matches, mixed content ): void
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `matches` | **mixed** |  |
| `content` | **mixed** |  |

**Return Value:**





---

## debubEnablingAction

* Full name: \debubEnablingAction
* Parent class: \yxorP\http\wrapper

### debubEnablingAction::buildIncludes

```php
debubEnablingAction::buildIncludes(  ): void
```

**Return Value:**





---

## debugHandlerAction

* Full name: \debugHandlerAction
* Parent class: \yxorP\http\wrapper

### debugHandlerAction::onBuildException

```php
debugHandlerAction::onBuildException( mixed e ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `e` | **mixed** |  |

**Return Value:**





---

## DirectoryAttributes

* Full name: \League\Flysystem\DirectoryAttributes
* This class implements: \League\Flysystem\StorageAttributes

### DirectoryAttributes::__construct

```php
DirectoryAttributes::__construct( string path, ?string visibility = null, ?int lastModified = null, array extraMetadata = [] ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `visibility` | **?string** |  |
| `lastModified` | **?int** |  |
| `extraMetadata` | **array** |  |

**Return Value:**





---

### DirectoryAttributes::path

```php
DirectoryAttributes::path(  ): string
```

**Return Value:**





---

### DirectoryAttributes::type

```php
DirectoryAttributes::type(  ): string
```

**Return Value:**





---

### DirectoryAttributes::visibility

```php
DirectoryAttributes::visibility(  ): ?string
```

**Return Value:**





---

### DirectoryAttributes::lastModified

```php
DirectoryAttributes::lastModified(  ): ?int
```

**Return Value:**





---

### DirectoryAttributes::extraMetadata

```php
DirectoryAttributes::extraMetadata(  ): array
```

**Return Value:**





---

### DirectoryAttributes::isFile

```php
DirectoryAttributes::isFile(  ): bool
```

**Return Value:**





---

### DirectoryAttributes::isDir

```php
DirectoryAttributes::isDir(  ): bool
```

**Return Value:**





---

### DirectoryAttributes::withPath

```php
DirectoryAttributes::withPath( string path ): \League\Flysystem\StorageAttributes
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### DirectoryAttributes::fromArray

```php
DirectoryAttributes::fromArray( array attributes ): \League\Flysystem\StorageAttributes
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |

**Return Value:**





---

### DirectoryAttributes::jsonSerialize

```php
DirectoryAttributes::jsonSerialize(  ): array
```

**Return Value:**





---

## DirectoryListing

* Full name: \League\Flysystem\DirectoryListing
* This class implements: \IteratorAggregate

### DirectoryListing::__construct

```php
DirectoryListing::__construct( iterable&lt;\League\Flysystem\T&gt; listing ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `listing` | **iterable&lt;\League\Flysystem\T&gt;** |  |

**Return Value:**





---

### DirectoryListing::filter

```php
DirectoryListing::filter( callable filter ): \League\Flysystem\DirectoryListing
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filter` | **callable** |  |

**Return Value:**





---

### DirectoryListing::map

```php
DirectoryListing::map( callable mapper ): \League\Flysystem\DirectoryListing
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `mapper` | **callable** |  |

**Return Value:**





---

### DirectoryListing::sortByPath

```php
DirectoryListing::sortByPath(  ): \League\Flysystem\DirectoryListing
```

**Return Value:**





---

### DirectoryListing::getIterator

```php
DirectoryListing::getIterator(  ): \Traversable&lt;\League\Flysystem\T&gt;
```

**Return Value:**





---

### DirectoryListing::toArray

```php
DirectoryListing::toArray(  ): \League\Flysystem\T[]
```

**Return Value:**





---

## EmptyExtensionToMimeTypeMap

* Full name: \League\MimeTypeDetection\EmptyExtensionToMimeTypeMap
* This class implements: \League\MimeTypeDetection\ExtensionToMimeTypeMap

### EmptyExtensionToMimeTypeMap::lookupMimeType

```php
EmptyExtensionToMimeTypeMap::lookupMimeType( string extension ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `extension` | **string** |  |

**Return Value:**





---

## ExtensionMimeTypeDetector

* Full name: \League\MimeTypeDetection\ExtensionMimeTypeDetector
* This class implements: \League\MimeTypeDetection\MimeTypeDetector

### ExtensionMimeTypeDetector::__construct

```php
ExtensionMimeTypeDetector::__construct( \League\MimeTypeDetection\ExtensionToMimeTypeMap extensions = null ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `extensions` | **\League\MimeTypeDetection\ExtensionToMimeTypeMap** |  |

**Return Value:**





---

### ExtensionMimeTypeDetector::detectMimeType

```php
ExtensionMimeTypeDetector::detectMimeType( string path, mixed contents ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `contents` | **mixed** |  |

**Return Value:**





---

### ExtensionMimeTypeDetector::detectMimeTypeFromPath

```php
ExtensionMimeTypeDetector::detectMimeTypeFromPath( string path ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### ExtensionMimeTypeDetector::detectMimeTypeFromFile

```php
ExtensionMimeTypeDetector::detectMimeTypeFromFile( string path ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### ExtensionMimeTypeDetector::detectMimeTypeFromBuffer

```php
ExtensionMimeTypeDetector::detectMimeTypeFromBuffer( string contents ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `contents` | **string** |  |

**Return Value:**





---

## FallbackMimeTypeDetector

* Full name: \League\Flysystem\Local\FallbackMimeTypeDetector
* This class implements: \League\MimeTypeDetection\MimeTypeDetector

### FallbackMimeTypeDetector::__construct

```php
FallbackMimeTypeDetector::__construct( \League\MimeTypeDetection\MimeTypeDetector detector, array inconclusiveMimetypes = self::INCONCLUSIVE_MIME_TYPES ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `detector` | **\League\MimeTypeDetection\MimeTypeDetector** |  |
| `inconclusiveMimetypes` | **array** |  |

**Return Value:**





---

### FallbackMimeTypeDetector::detectMimeType

```php
FallbackMimeTypeDetector::detectMimeType( string path, mixed contents ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `contents` | **mixed** |  |

**Return Value:**





---

### FallbackMimeTypeDetector::detectMimeTypeFromBuffer

```php
FallbackMimeTypeDetector::detectMimeTypeFromBuffer( string contents ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `contents` | **string** |  |

**Return Value:**





---

### FallbackMimeTypeDetector::detectMimeTypeFromPath

```php
FallbackMimeTypeDetector::detectMimeTypeFromPath( string path ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### FallbackMimeTypeDetector::detectMimeTypeFromFile

```php
FallbackMimeTypeDetector::detectMimeTypeFromFile( string path ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

## FileAttributes

* Full name: \League\Flysystem\FileAttributes
* This class implements: \League\Flysystem\StorageAttributes

### FileAttributes::__construct

```php
FileAttributes::__construct( string path, ?int fileSize = null, ?string visibility = null, ?int lastModified = null, ?string mimeType = null, array extraMetadata = [] ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `fileSize` | **?int** |  |
| `visibility` | **?string** |  |
| `lastModified` | **?int** |  |
| `mimeType` | **?string** |  |
| `extraMetadata` | **array** |  |

**Return Value:**





---

### FileAttributes::type

```php
FileAttributes::type(  ): string
```

**Return Value:**





---

### FileAttributes::path

```php
FileAttributes::path(  ): string
```

**Return Value:**





---

### FileAttributes::fileSize

```php
FileAttributes::fileSize(  ): ?int
```

**Return Value:**





---

### FileAttributes::visibility

```php
FileAttributes::visibility(  ): ?string
```

**Return Value:**





---

### FileAttributes::lastModified

```php
FileAttributes::lastModified(  ): ?int
```

**Return Value:**





---

### FileAttributes::mimeType

```php
FileAttributes::mimeType(  ): ?string
```

**Return Value:**





---

### FileAttributes::extraMetadata

```php
FileAttributes::extraMetadata(  ): array
```

**Return Value:**





---

### FileAttributes::isFile

```php
FileAttributes::isFile(  ): bool
```

**Return Value:**





---

### FileAttributes::isDir

```php
FileAttributes::isDir(  ): bool
```

**Return Value:**





---

### FileAttributes::withPath

```php
FileAttributes::withPath( string path ): \League\Flysystem\StorageAttributes
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### FileAttributes::fromArray

```php
FileAttributes::fromArray( array attributes ): \League\Flysystem\StorageAttributes
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `attributes` | **array** |  |

**Return Value:**





---

### FileAttributes::jsonSerialize

```php
FileAttributes::jsonSerialize(  ): array
```

**Return Value:**





---

## Filesystem

* Full name: \League\Flysystem\Filesystem
* This class implements: \League\Flysystem\FilesystemOperator

### Filesystem::__construct

```php
Filesystem::__construct( \League\Flysystem\FilesystemAdapter adapter, array config = [], \League\Flysystem\PathNormalizer pathNormalizer = null ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `adapter` | **\League\Flysystem\FilesystemAdapter** |  |
| `config` | **array** |  |
| `pathNormalizer` | **\League\Flysystem\PathNormalizer** |  |

**Return Value:**





---

### Filesystem::fileExists

```php
Filesystem::fileExists( string location ): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### Filesystem::directoryExists

```php
Filesystem::directoryExists( string location ): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### Filesystem::has

```php
Filesystem::has( string location ): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### Filesystem::write

```php
Filesystem::write( string location, string contents, array config = [] ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `contents` | **string** |  |
| `config` | **array** |  |

**Return Value:**





---

### Filesystem::writeStream

```php
Filesystem::writeStream( string location, mixed contents, array config = [] ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `contents` | **mixed** |  |
| `config` | **array** |  |

**Return Value:**





---

### Filesystem::read

```php
Filesystem::read( string location ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### Filesystem::readStream

```php
Filesystem::readStream( string location ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### Filesystem::delete

```php
Filesystem::delete( string location ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### Filesystem::deleteDirectory

```php
Filesystem::deleteDirectory( string location ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### Filesystem::createDirectory

```php
Filesystem::createDirectory( string location, array config = [] ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `config` | **array** |  |

**Return Value:**





---

### Filesystem::listContents

```php
Filesystem::listContents( string location, bool deep = self::LIST_SHALLOW ): \League\Flysystem\DirectoryListing
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `deep` | **bool** |  |

**Return Value:**





---

### Filesystem::move

```php
Filesystem::move( string source, string destination, array config = [] ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **string** |  |
| `destination` | **string** |  |
| `config` | **array** |  |

**Return Value:**





---

### Filesystem::copy

```php
Filesystem::copy( string source, string destination, array config = [] ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **string** |  |
| `destination` | **string** |  |
| `config` | **array** |  |

**Return Value:**





---

### Filesystem::lastModified

```php
Filesystem::lastModified( string path ): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### Filesystem::fileSize

```php
Filesystem::fileSize( string path ): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### Filesystem::mimeType

```php
Filesystem::mimeType( string path ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### Filesystem::setVisibility

```php
Filesystem::setVisibility( string path, string visibility ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `visibility` | **string** |  |

**Return Value:**





---

### Filesystem::visibility

```php
Filesystem::visibility( string path ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

## FinfoMimeTypeDetector

* Full name: \League\MimeTypeDetection\FinfoMimeTypeDetector
* This class implements: \League\MimeTypeDetection\MimeTypeDetector

### FinfoMimeTypeDetector::__construct

```php
FinfoMimeTypeDetector::__construct( string magicFile = '', \League\MimeTypeDetection\ExtensionToMimeTypeMap extensionMap = null, ?int bufferSampleSize = null, array inconclusiveMimetypes = self::INCONCLUSIVE_MIME_TYPES ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `magicFile` | **string** |  |
| `extensionMap` | **\League\MimeTypeDetection\ExtensionToMimeTypeMap** |  |
| `bufferSampleSize` | **?int** |  |
| `inconclusiveMimetypes` | **array** |  |

**Return Value:**





---

### FinfoMimeTypeDetector::detectMimeType

```php
FinfoMimeTypeDetector::detectMimeType( string path, mixed contents ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `contents` | **mixed** |  |

**Return Value:**





---

### FinfoMimeTypeDetector::detectMimeTypeFromPath

```php
FinfoMimeTypeDetector::detectMimeTypeFromPath( string path ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### FinfoMimeTypeDetector::detectMimeTypeFromFile

```php
FinfoMimeTypeDetector::detectMimeTypeFromFile( string path ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### FinfoMimeTypeDetector::detectMimeTypeFromBuffer

```php
FinfoMimeTypeDetector::detectMimeTypeFromBuffer( string contents ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `contents` | **string** |  |

**Return Value:**





---

## generalHelper

* Full name: \yxorP\inc\generalHelper

### generalHelper::vid_player

```php
generalHelper::vid_player( mixed url, mixed width = '100%', mixed height = '100%', mixed extension = false ): string
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `url` | **mixed** |  |
| `width` | **mixed** |  |
| `height` | **mixed** |  |
| `extension` | **mixed** |  |

**Return Value:**





---

### generalHelper::starts_with

```php
generalHelper::starts_with( mixed haystack, mixed needles ): bool
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `haystack` | **mixed** |  |
| `needles` | **mixed** |  |

**Return Value:**





---

### generalHelper::str_before

```php
generalHelper::str_before( mixed subject, mixed search ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `subject` | **mixed** |  |
| `search` | **mixed** |  |

**Return Value:**





---

### generalHelper::is_html

```php
generalHelper::is_html( mixed content_type ): bool
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content_type` | **mixed** |  |

**Return Value:**





---

### generalHelper::in_arrayi

```php
generalHelper::in_arrayi( mixed needle, mixed haystack ): bool
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `needle` | **mixed** |  |
| `haystack` | **mixed** |  |

**Return Value:**





---

### generalHelper::re_match

```php
generalHelper::re_match( mixed pattern, mixed string ): bool
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `pattern` | **mixed** |  |
| `string` | **mixed** |  |

**Return Value:**





---

### generalHelper::array_merge_custom

```php
generalHelper::array_merge_custom(  ): array
```

* This method is **static**.

**Return Value:**





---

### generalHelper::str_rot_pass

```php
generalHelper::str_rot_pass( mixed str, mixed key, mixed decrypt = false ): string
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `str` | **mixed** |  |
| `key` | **mixed** |  |
| `decrypt` | **mixed** |  |

**Return Value:**





---

### generalHelper::app_url

```php
generalHelper::app_url(  ): string
```

* This method is **static**.

**Return Value:**





---

### generalHelper::render_string

```php
generalHelper::render_string( mixed str, mixed vars = array() ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `str` | **mixed** |  |
| `vars` | **mixed** |  |

**Return Value:**





---

### generalHelper::time_ms

```php
generalHelper::time_ms(  ): float
```

* This method is **static**.

**Return Value:**





---

### generalHelper::base64_url_encode

```php
generalHelper::base64_url_encode( mixed input ): string
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `input` | **mixed** |  |

**Return Value:**





---

### generalHelper::base64_url_decode

```php
generalHelper::base64_url_decode( mixed input ): bool|string
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `input` | **mixed** |  |

**Return Value:**





---

### generalHelper::proxify_url

```php
generalHelper::proxify_url( mixed url, mixed base_url = CHAR_EMPTY_STRING ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `url` | **mixed** |  |
| `base_url` | **mixed** |  |

**Return Value:**





---

### generalHelper::add_http

```php
generalHelper::add_http( mixed url ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `url` | **mixed** |  |

**Return Value:**





---

### generalHelper::rel2abs

```php
generalHelper::rel2abs( mixed rel, mixed base ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `rel` | **mixed** |  |
| `base` | **mixed** |  |

**Return Value:**





---

### generalHelper::array_merge_ignore

```php
generalHelper::array_merge_ignore( mixed arrays ): array
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `arrays` | **mixed** |  |

**Return Value:**





---

### generalHelper::CSV

```php
generalHelper::CSV( mixed filename = CHAR_EMPTY_STRING ): array
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filename` | **mixed** |  |

**Return Value:**





---

### generalHelper::fileCheck

```php
generalHelper::fileCheck( mixed dir, mixed inc ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `dir` | **mixed** |  |
| `inc` | **mixed** |  |

**Return Value:**





---

### generalHelper::extractSubdomains

```php
generalHelper::extractSubdomains( mixed domain ): ?string
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `domain` | **mixed** |  |

**Return Value:**





---

### generalHelper::extractDomain

```php
generalHelper::extractDomain( mixed domain ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `domain` | **mixed** |  |

**Return Value:**





---

## GeneratedExtensionToMimeTypeMap

* Full name: \League\MimeTypeDetection\GeneratedExtensionToMimeTypeMap
* This class implements: \League\MimeTypeDetection\ExtensionToMimeTypeMap

### GeneratedExtensionToMimeTypeMap::lookupMimeType

```php
GeneratedExtensionToMimeTypeMap::lookupMimeType( string extension ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `extension` | **string** |  |

**Return Value:**





---

## globalCollectionAction

* Full name: \globalCollectionAction
* Parent class: \yxorP\http\wrapper

### globalCollectionAction::onBuildContext

```php
globalCollectionAction::onBuildContext(  ): void
```

**Return Value:**





---

## guzzleClientAction

* Full name: \guzzleClientAction
* Parent class: \yxorP\http\wrapper

### guzzleClientAction::onBeforeRequest

```php
guzzleClientAction::onBeforeRequest(  ): void
```

**Return Value:**





---

## headerRewritePluginAction

* Full name: \headerRewritePluginAction
* Parent class: \yxorP\http\wrapper

### headerRewritePluginAction::onBeforeRequest

```php
headerRewritePluginAction::onBeforeRequest(  ): void
```

**Return Value:**





---

### headerRewritePluginAction::onHeadersReceived

```php
headerRewritePluginAction::onHeadersReceived(  ): void
```

**Return Value:**





---

### headerRewritePluginAction::headersReceived

```php
headerRewritePluginAction::headersReceived( mixed response, mixed request_url ): void
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `response` | **mixed** |  |
| `request_url` | **mixed** |  |

**Return Value:**





---

## htmlCommentsRemover

* Full name: \yxorP\minify\htmlCommentsRemover
* Parent class: \yxorP\minify\areplacer
* This class implements: \yxorP\minify\minfyInterface

### htmlCommentsRemover::getReplacePatternData

```php
htmlCommentsRemover::getReplacePatternData(  ): array
```

**Return Value:**





---

## inlineCssMinifier

* Full name: \yxorP\minify\inlineCssMinifier
* This class implements: \yxorP\minify\minfyInterface

### inlineCssMinifier::process

```php
inlineCssMinifier::process( string buffer ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `buffer` | **string** |  |

**Return Value:**





---

## inlineJavascriptMinifier

* Full name: \yxorP\minify\inlineJavascriptMinifier
* This class implements: \yxorP\minify\minfyInterface

### inlineJavascriptMinifier::process

```php
inlineJavascriptMinifier::process( string buffer ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `buffer` | **string** |  |

**Return Value:**





---

## InstalledVersions

This class is copied in every Composer installed project and available to all

See also https://getcomposer.org/doc/07-runtime.md#installed-versions

To require its presence, you can require `composer-runtime-api ^2.0`

* Full name: \Composer\InstalledVersions

### InstalledVersions::getInstalledPackages

Returns a list of all package names which are present, either by being installed, replaced or provided

```php
InstalledVersions::getInstalledPackages(  ): string[]
```

* This method is **static**.

**Return Value:**





---

### InstalledVersions::getInstalledPackagesByType

Returns a list of all package names with a specific type e.g. 'library'

```php
InstalledVersions::getInstalledPackagesByType( string type ): string[]
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `type` | **string** |  |

**Return Value:**





---

### InstalledVersions::isInstalled

Checks whether the given package is installed

```php
InstalledVersions::isInstalled( string packageName, bool includeDevRequirements = true ): bool
```

This also returns true if the package name is provided or replaced by another package

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `packageName` | **string** |  |
| `includeDevRequirements` | **bool** |  |

**Return Value:**





---

### InstalledVersions::satisfies

Checks whether the given package satisfies a version constraint

```php
InstalledVersions::satisfies( \Composer\Semver\VersionParser parser, string packageName, string|null constraint ): bool
```

e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:

Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `parser` | **
\Composer\Semver\VersionParser** | Install composer/semver to have access to this class and functionality |
| `packageName` | **string** |  |
| `constraint` | **string\|null** | A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package |

**Return Value:**





---

### InstalledVersions::getVersionRanges

Returns a version constraint representing all the range(s) which are installed for a given package

```php
InstalledVersions::getVersionRanges( string packageName ): string
```

It is easier to use this via isInstalled() with the $constraint argument if you need to check whether a given version of
a package is installed, and not just whether it exists

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `packageName` | **string** |  |

**Return Value:**

Version constraint usable with composer/semver



---

### InstalledVersions::getVersion

```php
InstalledVersions::getVersion( string packageName ): string|null
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `packageName` | **string** |  |

**Return Value:**

If the package is being replaced or provided but is not really installed, null will be returned as version, use
satisfies or getVersionRanges if you need to know if a given version is present



---

### InstalledVersions::getPrettyVersion

```php
InstalledVersions::getPrettyVersion( string packageName ): string|null
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `packageName` | **string** |  |

**Return Value:**

If the package is being replaced or provided but is not really installed, null will be returned as version, use
satisfies or getVersionRanges if you need to know if a given version is present



---

### InstalledVersions::getReference

```php
InstalledVersions::getReference( string packageName ): string|null
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `packageName` | **string** |  |

**Return Value:**

If the package is being replaced or provided but is not really installed, null will be returned as reference



---

### InstalledVersions::getInstallPath

```php
InstalledVersions::getInstallPath( string packageName ): string|null
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `packageName` | **string** |  |

**Return Value:**

If the package is being replaced or provided but is not really installed, null will be returned as install path.
Packages of type metapackages also have a null install path.



---

### InstalledVersions::getRootPackage

```php
InstalledVersions::getRootPackage(  ): array
```

* This method is **static**.

**Return Value:**





---

### InstalledVersions::getRawData

Returns the raw installed.php data for custom implementations

```php
InstalledVersions::getRawData(  ): array[]
```

* This method is **static**.* **Warning:** this method is **deprecated**. This means that this method will likely be
  removed in a future version.

**Return Value:**





---

### InstalledVersions::getAllRawData

Returns the raw data of all installed.php which are currently loaded for custom implementations

```php
InstalledVersions::getAllRawData(  ): array[]
```

* This method is **static**.

**Return Value:**





---

### InstalledVersions::reload

Lets you reload the static array from another file

```php
InstalledVersions::reload( array[] data ): void
```

This is only useful for complex integrations in which a project needs to use this class but then also needs to execute
another project's autoloader in process, and wants to ensure both projects have access to their version of
installed.php.

A typical case would be PHPUnit, where it would need to make sure it reads all the data it needs from this class, then
call reload() with
`require $CWD/vendor/composer/installed.php` (or similar) as input to make sure the project in which it runs can then
also use this class safely, without interference between PHPUnit's dependencies and the project's dependencies.

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `data` | **array[]** | A vendor/composer/installed.php data set |

**Return Value:**





---

## InvalidStreamProvided

* Full name: \League\Flysystem\InvalidStreamProvided
* Parent class:
* This class implements: \League\Flysystem\FilesystemException

## InvalidVisibilityProvided

* Full name: \League\Flysystem\InvalidVisibilityProvided
* Parent class:
* This class implements: \League\Flysystem\FilesystemException

### InvalidVisibilityProvided::withVisibility

```php
InvalidVisibilityProvided::withVisibility( string visibility, string expectedMessage ): \League\Flysystem\InvalidVisibilityProvided
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visibility` | **string** |  |
| `expectedMessage` | **string** |  |

**Return Value:**





---

## LocalFilesystemAdapter

* Full name: \League\Flysystem\Local\LocalFilesystemAdapter
* This class implements: \League\Flysystem\FilesystemAdapter

### LocalFilesystemAdapter::__construct

```php
LocalFilesystemAdapter::__construct( string location, \League\Flysystem\UnixVisibility\VisibilityConverter visibility = null, int writeFlags = LOCK_EX, int linkHandling = self::DISALLOW_LINKS, \League\MimeTypeDetection\MimeTypeDetector mimeTypeDetector = null, bool lazyRootCreation = false ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `visibility` | **\League\Flysystem\UnixVisibility\VisibilityConverter** |  |
| `writeFlags` | **int** |  |
| `linkHandling` | **int** |  |
| `mimeTypeDetector` | **\League\MimeTypeDetection\MimeTypeDetector** |  |
| `lazyRootCreation` | **bool** |  |

**Return Value:**





---

### LocalFilesystemAdapter::write

```php
LocalFilesystemAdapter::write( string path, string contents, \League\Flysystem\Config config ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `contents` | **string** |  |
| `config` | **\League\Flysystem\Config** |  |

**Return Value:**





---

### LocalFilesystemAdapter::writeStream

```php
LocalFilesystemAdapter::writeStream( string path, mixed contents, \League\Flysystem\Config config ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `contents` | **mixed** |  |
| `config` | **\League\Flysystem\Config** |  |

**Return Value:**





---

### LocalFilesystemAdapter::delete

```php
LocalFilesystemAdapter::delete( string path ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### LocalFilesystemAdapter::deleteDirectory

```php
LocalFilesystemAdapter::deleteDirectory( string prefix ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prefix` | **string** |  |

**Return Value:**





---

### LocalFilesystemAdapter::listContents

```php
LocalFilesystemAdapter::listContents( string path, bool deep ): iterable&lt;\League\Flysystem\StorageAttributes&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `deep` | **bool** |  |

**Return Value:**





---

### LocalFilesystemAdapter::move

```php
LocalFilesystemAdapter::move( string source, string destination, \League\Flysystem\Config config ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **string** |  |
| `destination` | **string** |  |
| `config` | **\League\Flysystem\Config** |  |

**Return Value:**





---

### LocalFilesystemAdapter::copy

```php
LocalFilesystemAdapter::copy( string source, string destination, \League\Flysystem\Config config ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **string** |  |
| `destination` | **string** |  |
| `config` | **\League\Flysystem\Config** |  |

**Return Value:**





---

### LocalFilesystemAdapter::read

```php
LocalFilesystemAdapter::read( string path ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### LocalFilesystemAdapter::readStream

```php
LocalFilesystemAdapter::readStream( string path ): resource
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### LocalFilesystemAdapter::fileExists

```php
LocalFilesystemAdapter::fileExists( string location ): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### LocalFilesystemAdapter::directoryExists

```php
LocalFilesystemAdapter::directoryExists( string location ): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### LocalFilesystemAdapter::createDirectory

```php
LocalFilesystemAdapter::createDirectory( string path, \League\Flysystem\Config config ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `config` | **\League\Flysystem\Config** |  |

**Return Value:**





---

### LocalFilesystemAdapter::setVisibility

```php
LocalFilesystemAdapter::setVisibility( string path, string visibility ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `visibility` | **string** |  |

**Return Value:**





---

### LocalFilesystemAdapter::visibility

```php
LocalFilesystemAdapter::visibility( string path ): \League\Flysystem\FileAttributes
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### LocalFilesystemAdapter::mimeType

```php
LocalFilesystemAdapter::mimeType( string path ): \League\Flysystem\FileAttributes
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### LocalFilesystemAdapter::lastModified

```php
LocalFilesystemAdapter::lastModified( string path ): \League\Flysystem\FileAttributes
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### LocalFilesystemAdapter::fileSize

```php
LocalFilesystemAdapter::fileSize( string path ): \League\Flysystem\FileAttributes
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

## logPluginAction

* Full name: \logPluginAction
* Parent class: \yxorP\http\wrapper

### logPluginAction::onHeadersReceived

```php
logPluginAction::onHeadersReceived(  ): void
```

**Return Value:**





---

## mimeTypesAction

* Full name: \mimeTypesAction
* Parent class: \yxorP\http\wrapper

### mimeTypesAction::buildHeaders

```php
mimeTypesAction::buildHeaders(  ): void
```

**Return Value:**





---

## minify

* Full name: \yxorP\minify\minify
* This class implements: \yxorP\minify\minfyInterface

### minify::__construct

```php
minify::__construct( \yxorP\minify\minfyInterface processors ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `processors` | **\yxorP\minify\minfyInterface** |  |

**Return Value:**





---

### minify::createDefault

```php
minify::createDefault(  ): self
```

* This method is **static**.

**Return Value:**





---

### minify::process

```php
minify::process( string buffer ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `buffer` | **string** |  |

**Return Value:**





---

### minify::addProcessor

```php
minify::addProcessor( \yxorP\minify\minfyInterface processor ): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `processor` | **\yxorP\minify\minfyInterface** |  |

**Return Value:**





---

## MountManager

* Full name: \League\Flysystem\MountManager
* This class implements: \League\Flysystem\FilesystemOperator

### MountManager::__construct

MountManager constructor.

```php
MountManager::__construct( array&lt;string,\League\Flysystem\FilesystemOperator&gt; filesystems = [] ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filesystems` | **array&lt;string,\League\Flysystem\FilesystemOperator&gt;** |  |

**Return Value:**





---

### MountManager::fileExists

```php
MountManager::fileExists( string location ): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### MountManager::has

```php
MountManager::has( string location ): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### MountManager::directoryExists

```php
MountManager::directoryExists( string location ): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### MountManager::read

```php
MountManager::read( string location ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### MountManager::readStream

```php
MountManager::readStream( string location ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### MountManager::listContents

```php
MountManager::listContents( string location, bool deep = self::LIST_SHALLOW ): \League\Flysystem\DirectoryListing
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `deep` | **bool** |  |

**Return Value:**





---

### MountManager::lastModified

```php
MountManager::lastModified( string location ): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### MountManager::fileSize

```php
MountManager::fileSize( string location ): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### MountManager::mimeType

```php
MountManager::mimeType( string location ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### MountManager::visibility

```php
MountManager::visibility( string location ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### MountManager::write

```php
MountManager::write( string location, string contents, array config = [] ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `contents` | **string** |  |
| `config` | **array** |  |

**Return Value:**





---

### MountManager::writeStream

```php
MountManager::writeStream( string location, mixed contents, array config = [] ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `contents` | **mixed** |  |
| `config` | **array** |  |

**Return Value:**





---

### MountManager::setVisibility

```php
MountManager::setVisibility( string path, string visibility ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `visibility` | **string** |  |

**Return Value:**





---

### MountManager::delete

```php
MountManager::delete( string location ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### MountManager::deleteDirectory

```php
MountManager::deleteDirectory( string location ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

### MountManager::createDirectory

```php
MountManager::createDirectory( string location, array config = [] ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `config` | **array** |  |

**Return Value:**





---

### MountManager::move

```php
MountManager::move( string source, string destination, array config = [] ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **string** |  |
| `destination` | **string** |  |
| `config` | **array** |  |

**Return Value:**





---

### MountManager::copy

```php
MountManager::copy( string source, string destination, array config = [] ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `source` | **string** |  |
| `destination` | **string** |  |
| `config` | **array** |  |

**Return Value:**





---

## overridePluginAction

* Full name: \overridePluginAction
* Parent class: \yxorP\http\wrapper

### overridePluginAction::onCompleted

```php
overridePluginAction::onCompleted(  ): mixed
```

**Return Value:**





---

### overridePluginAction::REWRITE

```php
overridePluginAction::REWRITE( mixed content ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **mixed** |  |

**Return Value:**





---

## OverridingExtensionToMimeTypeMap

* Full name: \League\MimeTypeDetection\OverridingExtensionToMimeTypeMap
* This class implements: \League\MimeTypeDetection\ExtensionToMimeTypeMap

### OverridingExtensionToMimeTypeMap::__construct

```php
OverridingExtensionToMimeTypeMap::__construct( \League\MimeTypeDetection\ExtensionToMimeTypeMap innerMap, array&lt;string,string&gt; overrides ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `innerMap` | **\League\MimeTypeDetection\ExtensionToMimeTypeMap** |  |
| `overrides` | **array&lt;string,string&gt;** |  |

**Return Value:**





---

### OverridingExtensionToMimeTypeMap::lookupMimeType

```php
OverridingExtensionToMimeTypeMap::lookupMimeType( string extension ): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `extension` | **string** |  |

**Return Value:**





---

## paramStore

* Full name: \yxorP\http\paramStore

### paramStore::__construct

```php
paramStore::__construct( mixed parameters = array(), mixed case_sensitive = false ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `parameters` | **mixed** |  |
| `case_sensitive` | **mixed** |  |

**Return Value:**





---

### paramStore::replace

```php
paramStore::replace( array data ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `data` | **array** |  |

**Return Value:**





---

### paramStore::clear

```php
paramStore::clear(  ): void
```

**Return Value:**





---

### paramStore::set

```php
paramStore::set( mixed key, mixed value, mixed replace = true ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |
| `value` | **mixed** |  |
| `replace` | **mixed** |  |

**Return Value:**





---

### paramStore::has

```php
paramStore::has( mixed key ): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |

**Return Value:**





---

### paramStore::remove

```php
paramStore::remove( mixed key ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |

**Return Value:**





---

### paramStore::get

```php
paramStore::get( mixed key, mixed default = null ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |
| `default` | **mixed** |  |

**Return Value:**





---

### paramStore::all

```php
paramStore::all(  ): array
```

**Return Value:**





---

### paramStore::__toString

```php
paramStore::__toString(  ): mixed
```

**Return Value:**





---

## PathPrefixer

* Full name: \League\Flysystem\PathPrefixer

### PathPrefixer::__construct

```php
PathPrefixer::__construct( string prefix, string separator = '/' ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `prefix` | **string** |  |
| `separator` | **string** |  |

**Return Value:**





---

### PathPrefixer::prefixPath

```php
PathPrefixer::prefixPath( string path ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### PathPrefixer::stripPrefix

```php
PathPrefixer::stripPrefix( string path ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### PathPrefixer::stripDirectoryPrefix

```php
PathPrefixer::stripDirectoryPrefix( string path ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### PathPrefixer::prefixDirectoryPath

```php
PathPrefixer::prefixDirectoryPath( string path ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

## PathTraversalDetected

* Full name: \League\Flysystem\PathTraversalDetected
* Parent class:
* This class implements: \League\Flysystem\FilesystemException

### PathTraversalDetected::path

```php
PathTraversalDetected::path(  ): string
```

**Return Value:**





---

### PathTraversalDetected::forPath

```php
PathTraversalDetected::forPath( string path ): \League\Flysystem\PathTraversalDetected
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

## PortableVisibilityConverter

* Full name: \League\Flysystem\UnixVisibility\PortableVisibilityConverter
* This class implements: \League\Flysystem\UnixVisibility\VisibilityConverter

### PortableVisibilityConverter::__construct

```php
PortableVisibilityConverter::__construct( int filePublic = 0644, int filePrivate = 0600, int directoryPublic = 0755, int directoryPrivate = 0700, string defaultForDirectories = Visibility::PRIVATE ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filePublic` | **int** |  |
| `filePrivate` | **int** |  |
| `directoryPublic` | **int** |  |
| `directoryPrivate` | **int** |  |
| `defaultForDirectories` | **string** |  |

**Return Value:**





---

### PortableVisibilityConverter::forFile

```php
PortableVisibilityConverter::forFile( string visibility ): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visibility` | **string** |  |

**Return Value:**





---

### PortableVisibilityConverter::forDirectory

```php
PortableVisibilityConverter::forDirectory( string visibility ): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visibility` | **string** |  |

**Return Value:**





---

### PortableVisibilityConverter::inverseForFile

```php
PortableVisibilityConverter::inverseForFile( int visibility ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visibility` | **int** |  |

**Return Value:**





---

### PortableVisibilityConverter::inverseForDirectory

```php
PortableVisibilityConverter::inverseForDirectory( int visibility ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visibility` | **int** |  |

**Return Value:**





---

### PortableVisibilityConverter::defaultForDirectories

```php
PortableVisibilityConverter::defaultForDirectories(  ): int
```

**Return Value:**





---

### PortableVisibilityConverter::fromArray

```php
PortableVisibilityConverter::fromArray( array permissionMap, string defaultForDirectories = Visibility::PRIVATE ): \League\Flysystem\UnixVisibility\PortableVisibilityConverter
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `permissionMap` | **array** |  |
| `defaultForDirectories` | **string** |  |

**Return Value:**





---

## PortableVisibilityGuard

* Full name: \League\Flysystem\PortableVisibilityGuard

### PortableVisibilityGuard::guardAgainstInvalidInput

```php
PortableVisibilityGuard::guardAgainstInvalidInput( string visibility ): void
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `visibility` | **string** |  |

**Return Value:**





---

## proxifyPluginAction

* Full name: \proxifyPluginAction
* Parent class: \yxorP\http\wrapper

### proxifyPluginAction::onBeforeRequest

```php
proxifyPluginAction::onBeforeRequest(  ): void
```

**Return Value:**





---

### proxifyPluginAction::onCompleted

```php
proxifyPluginAction::onCompleted(  ): void
```

**Return Value:**





---

### proxifyPluginAction::clean_content_type

```php
proxifyPluginAction::clean_content_type( mixed content_type ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content_type` | **mixed** |  |

**Return Value:**





---

## quotesRemover

* Full name: \yxorP\minify\quotesRemover
* Parent class: \yxorP\minify\areplacer
* This class implements: \yxorP\minify\minfyInterface

### quotesRemover::getReplacePatternData

```php
quotesRemover::getReplacePatternData(  ): array
```

**Return Value:**





---

## readyCheckAction

* Full name: \readyCheckAction
* Parent class: \yxorP\http\wrapper

### readyCheckAction::onCheck

```php
readyCheckAction::onCheck(  ): string
```

**Return Value:**





---

## request

* Full name: \yxorP\http\request

### request::__construct

```php
request::__construct( mixed method, mixed url, mixed body = null ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `method` | **mixed** |  |
| `url` | **mixed** |  |
| `body` | **mixed** |  |

**Return Value:**





---

### request::setUrl

```php
request::setUrl( mixed url ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `url` | **mixed** |  |

**Return Value:**





---

### request::parseQuery

```php
request::parseQuery( mixed query ): array
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `query` | **mixed** |  |

**Return Value:**





---

### request::setBody

```php
request::setBody( mixed body, mixed content_type = false ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `body` | **mixed** |  |
| `content_type` | **mixed** |  |

**Return Value:**





---

### request::prepare

```php
request::prepare(  ): void
```

**Return Value:**





---

### request::buildPostBody

```php
request::buildPostBody( mixed fields, mixed files, mixed boundary = null ): string
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `fields` | **mixed** |  |
| `files` | **mixed** |  |
| `boundary` | **mixed** |  |

**Return Value:**





---

### request::createFromGlobals

```php
request::createFromGlobals(  ): \yxorP\http\request
```

* This method is **static**.

**Return Value:**





---

### request::getMethod

```php
request::getMethod(  ): string
```

**Return Value:**





---

### request::setMethod

```php
request::setMethod( mixed method ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `method` | **mixed** |  |

**Return Value:**





---

### request::getUrl

```php
request::getUrl(  ): string
```

**Return Value:**





---

### request::getProtocolVersion

```php
request::getProtocolVersion(  ): string
```

**Return Value:**





---

### request::getRawHeaders

```php
request::getRawHeaders(  ): string
```

**Return Value:**





---

### request::getRawBody

```php
request::getRawBody(  ): string
```

**Return Value:**





---

### request::getUri

```php
request::getUri(  ): mixed
```

**Return Value:**





---

## requestBodyAction

* Full name: \requestBodyAction
* Parent class: \yxorP\http\wrapper

### requestBodyAction::buildRequest

```php
requestBodyAction::buildRequest(  ): void
```

**Return Value:**





---

## requestResponseAction

* Full name: \requestResponseAction
* Parent class: \yxorP\http\wrapper

### requestResponseAction::buildIncludes

```php
requestResponseAction::buildIncludes(  ): void
```

**Return Value:**





---

## resourceHandlerAction

* Full name: \resourceHandlerAction
* Parent class: \yxorP\http\wrapper

### resourceHandlerAction::onBuildException

```php
resourceHandlerAction::onBuildException( mixed e ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `e` | **mixed** |  |

**Return Value:**





---

## response

* Full name: \yxorP\http\response

### response::__construct

```php
response::__construct( mixed content = CHAR_EMPTY_STRING, mixed status = 200, mixed headers = array() ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **mixed** |  |
| `status` | **mixed** |  |
| `headers` | **mixed** |  |

**Return Value:**





---

### response::setStatusCode

```php
response::setStatusCode( mixed code ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `code` | **mixed** |  |

**Return Value:**





---

### response::getContent

```php
response::getContent(  ): string
```

**Return Value:**





---

### response::setContent

```php
response::setContent( mixed content ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **mixed** |  |

**Return Value:**





---

### response::printContent

```php
response::printContent(  ): void
```

**Return Value:**





---

### response::sendHeaders

```php
response::sendHeaders(  ): void
```

**Return Value:**





---

### response::getStatusText

```php
response::getStatusText(  ): string
```

**Return Value:**





---

### response::getStatusCode

```php
response::getStatusCode(  ): mixed
```

**Return Value:**





---

## setHeadersAction

* Full name: \setHeadersAction
* Parent class: \yxorP\http\wrapper

### setHeadersAction::buildHeaders

```php
setHeadersAction::buildHeaders(  ): void
```

**Return Value:**





---

## siteCollectionAction

* Full name: \siteCollectionAction
* Parent class: \yxorP\http\wrapper

### siteCollectionAction::onBuildContext

```php
siteCollectionAction::onBuildContext(  ): void
```

**Return Value:**





---

## streamPluginAction

* Full name: \streamPluginAction
* Parent class: \yxorP\http\wrapper

### streamPluginAction::onHeadersReceived

```php
streamPluginAction::onHeadersReceived(  ): void
```

**Return Value:**





---

### streamPluginAction::onCurlWrite

```php
streamPluginAction::onCurlWrite(  ): void
```

**Return Value:**





---

### streamPluginAction::onCompleted

```php
streamPluginAction::onCompleted(  ): void
```

**Return Value:**





---

## SymbolicLinkEncountered

* Full name: \League\Flysystem\SymbolicLinkEncountered
* Parent class:
* This class implements: \League\Flysystem\FilesystemException

### SymbolicLinkEncountered::location

```php
SymbolicLinkEncountered::location(  ): string
```

**Return Value:**





---

### SymbolicLinkEncountered::atLocation

```php
SymbolicLinkEncountered::atLocation( string pathName ): \League\Flysystem\SymbolicLinkEncountered
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `pathName` | **string** |  |

**Return Value:**





---

## twitterPluginAction

* Full name: \twitterPluginAction
* Parent class: \yxorP\http\wrapper

### twitterPluginAction::onCompleted

```php
twitterPluginAction::onCompleted(  ): void
```

**Return Value:**





---

## UnableToCheckDirectoryExistence

* Full name: \League\Flysystem\UnableToCheckDirectoryExistence
* Parent class: \League\Flysystem\UnableToCheckExistence

### UnableToCheckDirectoryExistence::operation

```php
UnableToCheckDirectoryExistence::operation(  ): string
```

**Return Value:**





---

## UnableToCheckExistence

* Full name: \League\Flysystem\UnableToCheckExistence
* Parent class:
* This class implements: \League\Flysystem\FilesystemOperationFailed

### UnableToCheckExistence::forLocation

```php
UnableToCheckExistence::forLocation( string path, \Throwable exception = null ): static
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |
| `exception` | **\Throwable** |  |

**Return Value:**





---

### UnableToCheckExistence::operation

```php
UnableToCheckExistence::operation(  ): string
```

**Return Value:**





---

## UnableToCheckFileExistence

* Full name: \League\Flysystem\UnableToCheckFileExistence
* Parent class: \League\Flysystem\UnableToCheckExistence

### UnableToCheckFileExistence::operation

```php
UnableToCheckFileExistence::operation(  ): string
```

**Return Value:**





---

## UnableToCopyFile

* Full name: \League\Flysystem\UnableToCopyFile
* Parent class:
* This class implements: \League\Flysystem\FilesystemOperationFailed

### UnableToCopyFile::source

```php
UnableToCopyFile::source(  ): string
```

**Return Value:**





---

### UnableToCopyFile::destination

```php
UnableToCopyFile::destination(  ): string
```

**Return Value:**





---

### UnableToCopyFile::fromLocationTo

```php
UnableToCopyFile::fromLocationTo( string sourcePath, string destinationPath, \Throwable previous = null ): \League\Flysystem\UnableToCopyFile
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `sourcePath` | **string** |  |
| `destinationPath` | **string** |  |
| `previous` | **\Throwable** |  |

**Return Value:**





---

### UnableToCopyFile::operation

```php
UnableToCopyFile::operation(  ): string
```

**Return Value:**





---

## UnableToCreateDirectory

* Full name: \League\Flysystem\UnableToCreateDirectory
* Parent class:
* This class implements: \League\Flysystem\FilesystemOperationFailed

### UnableToCreateDirectory::atLocation

```php
UnableToCreateDirectory::atLocation( string dirname, string errorMessage = '' ): \League\Flysystem\UnableToCreateDirectory
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `dirname` | **string** |  |
| `errorMessage` | **string** |  |

**Return Value:**





---

### UnableToCreateDirectory::dueToFailure

```php
UnableToCreateDirectory::dueToFailure( string dirname, \Throwable previous ): \League\Flysystem\UnableToCreateDirectory
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `dirname` | **string** |  |
| `previous` | **\Throwable** |  |

**Return Value:**





---

### UnableToCreateDirectory::operation

```php
UnableToCreateDirectory::operation(  ): string
```

**Return Value:**





---

### UnableToCreateDirectory::location

```php
UnableToCreateDirectory::location(  ): string
```

**Return Value:**





---

## UnableToDeleteDirectory

* Full name: \League\Flysystem\UnableToDeleteDirectory
* Parent class:
* This class implements: \League\Flysystem\FilesystemOperationFailed

### UnableToDeleteDirectory::atLocation

```php
UnableToDeleteDirectory::atLocation( string location, string reason = '', \Throwable previous = null ): \League\Flysystem\UnableToDeleteDirectory
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |

**Return Value:**





---

### UnableToDeleteDirectory::operation

```php
UnableToDeleteDirectory::operation(  ): string
```

**Return Value:**





---

### UnableToDeleteDirectory::reason

```php
UnableToDeleteDirectory::reason(  ): string
```

**Return Value:**





---

### UnableToDeleteDirectory::location

```php
UnableToDeleteDirectory::location(  ): string
```

**Return Value:**





---

## UnableToDeleteFile

* Full name: \League\Flysystem\UnableToDeleteFile
* Parent class:
* This class implements: \League\Flysystem\FilesystemOperationFailed

### UnableToDeleteFile::atLocation

```php
UnableToDeleteFile::atLocation( string location, string reason = '', \Throwable previous = null ): \League\Flysystem\UnableToDeleteFile
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |

**Return Value:**





---

### UnableToDeleteFile::operation

```php
UnableToDeleteFile::operation(  ): string
```

**Return Value:**





---

### UnableToDeleteFile::reason

```php
UnableToDeleteFile::reason(  ): string
```

**Return Value:**





---

### UnableToDeleteFile::location

```php
UnableToDeleteFile::location(  ): string
```

**Return Value:**





---

## UnableToMountFilesystem

* Full name: \League\Flysystem\UnableToMountFilesystem
* Parent class:
* This class implements: \League\Flysystem\FilesystemException

### UnableToMountFilesystem::becauseTheKeyIsNotValid

```php
UnableToMountFilesystem::becauseTheKeyIsNotValid( mixed key ): \League\Flysystem\UnableToMountFilesystem
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |

**Return Value:**





---

### UnableToMountFilesystem::becauseTheFilesystemWasNotValid

```php
UnableToMountFilesystem::becauseTheFilesystemWasNotValid( mixed filesystem ): \League\Flysystem\UnableToMountFilesystem
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filesystem` | **mixed** |  |

**Return Value:**





---

## UnableToMoveFile

* Full name: \League\Flysystem\UnableToMoveFile
* Parent class:
* This class implements: \League\Flysystem\FilesystemOperationFailed

### UnableToMoveFile::source

```php
UnableToMoveFile::source(  ): string
```

**Return Value:**





---

### UnableToMoveFile::destination

```php
UnableToMoveFile::destination(  ): string
```

**Return Value:**





---

### UnableToMoveFile::fromLocationTo

```php
UnableToMoveFile::fromLocationTo( string sourcePath, string destinationPath, \Throwable previous = null ): \League\Flysystem\UnableToMoveFile
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `sourcePath` | **string** |  |
| `destinationPath` | **string** |  |
| `previous` | **\Throwable** |  |

**Return Value:**





---

### UnableToMoveFile::operation

```php
UnableToMoveFile::operation(  ): string
```

**Return Value:**





---

## UnableToReadFile

* Full name: \League\Flysystem\UnableToReadFile
* Parent class:
* This class implements: \League\Flysystem\FilesystemOperationFailed

### UnableToReadFile::fromLocation

```php
UnableToReadFile::fromLocation( string location, string reason = '', \Throwable previous = null ): \League\Flysystem\UnableToReadFile
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |

**Return Value:**





---

### UnableToReadFile::operation

```php
UnableToReadFile::operation(  ): string
```

**Return Value:**





---

### UnableToReadFile::reason

```php
UnableToReadFile::reason(  ): string
```

**Return Value:**





---

### UnableToReadFile::location

```php
UnableToReadFile::location(  ): string
```

**Return Value:**





---

## UnableToResolveFilesystemMount

* Full name: \League\Flysystem\UnableToResolveFilesystemMount
* Parent class:
* This class implements: \League\Flysystem\FilesystemException

### UnableToResolveFilesystemMount::becauseTheSeparatorIsMissing

```php
UnableToResolveFilesystemMount::becauseTheSeparatorIsMissing( string path ): \League\Flysystem\UnableToResolveFilesystemMount
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

### UnableToResolveFilesystemMount::becauseTheMountWasNotRegistered

```php
UnableToResolveFilesystemMount::becauseTheMountWasNotRegistered( string mountIdentifier ): \League\Flysystem\UnableToResolveFilesystemMount
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `mountIdentifier` | **string** |  |

**Return Value:**





---

## UnableToRetrieveMetadata

* Full name: \League\Flysystem\UnableToRetrieveMetadata
* Parent class:
* This class implements: \League\Flysystem\FilesystemOperationFailed

### UnableToRetrieveMetadata::lastModified

```php
UnableToRetrieveMetadata::lastModified( string location, string reason = '', \Throwable previous = null ): self
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |

**Return Value:**





---

### UnableToRetrieveMetadata::visibility

```php
UnableToRetrieveMetadata::visibility( string location, string reason = '', \Throwable previous = null ): self
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |

**Return Value:**





---

### UnableToRetrieveMetadata::fileSize

```php
UnableToRetrieveMetadata::fileSize( string location, string reason = '', \Throwable previous = null ): self
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |

**Return Value:**





---

### UnableToRetrieveMetadata::mimeType

```php
UnableToRetrieveMetadata::mimeType( string location, string reason = '', \Throwable previous = null ): self
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |

**Return Value:**





---

### UnableToRetrieveMetadata::create

```php
UnableToRetrieveMetadata::create( string location, string type, string reason = '', \Throwable previous = null ): self
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `type` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |

**Return Value:**





---

### UnableToRetrieveMetadata::reason

```php
UnableToRetrieveMetadata::reason(  ): string
```

**Return Value:**





---

### UnableToRetrieveMetadata::location

```php
UnableToRetrieveMetadata::location(  ): string
```

**Return Value:**





---

### UnableToRetrieveMetadata::metadataType

```php
UnableToRetrieveMetadata::metadataType(  ): string
```

**Return Value:**





---

### UnableToRetrieveMetadata::operation

```php
UnableToRetrieveMetadata::operation(  ): string
```

**Return Value:**





---

## UnableToSetVisibility

* Full name: \League\Flysystem\UnableToSetVisibility
* Parent class:
* This class implements: \League\Flysystem\FilesystemOperationFailed

### UnableToSetVisibility::reason

```php
UnableToSetVisibility::reason(  ): string
```

**Return Value:**





---

### UnableToSetVisibility::atLocation

```php
UnableToSetVisibility::atLocation( string filename, string extraMessage = '', \Throwable previous = null ): self
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `filename` | **string** |  |
| `extraMessage` | **string** |  |
| `previous` | **\Throwable** |  |

**Return Value:**





---

### UnableToSetVisibility::operation

```php
UnableToSetVisibility::operation(  ): string
```

**Return Value:**





---

### UnableToSetVisibility::location

```php
UnableToSetVisibility::location(  ): string
```

**Return Value:**





---

## UnableToWriteFile

* Full name: \League\Flysystem\UnableToWriteFile
* Parent class:
* This class implements: \League\Flysystem\FilesystemOperationFailed

### UnableToWriteFile::atLocation

```php
UnableToWriteFile::atLocation( string location, string reason = '', \Throwable previous = null ): \League\Flysystem\UnableToWriteFile
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |
| `reason` | **string** |  |
| `previous` | **\Throwable** |  |

**Return Value:**





---

### UnableToWriteFile::operation

```php
UnableToWriteFile::operation(  ): string
```

**Return Value:**





---

### UnableToWriteFile::reason

```php
UnableToWriteFile::reason(  ): string
```

**Return Value:**





---

### UnableToWriteFile::location

```php
UnableToWriteFile::location(  ): string
```

**Return Value:**





---

## UnreadableFileEncountered

* Full name: \League\Flysystem\UnreadableFileEncountered
* Parent class:
* This class implements: \League\Flysystem\FilesystemException

### UnreadableFileEncountered::location

```php
UnreadableFileEncountered::location(  ): string
```

**Return Value:**





---

### UnreadableFileEncountered::atLocation

```php
UnreadableFileEncountered::atLocation( string location ): \League\Flysystem\UnreadableFileEncountered
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `location` | **string** |  |

**Return Value:**





---

## Visibility

* Full name: \League\Flysystem\Visibility

## WhitespacePathNormalizer

* Full name: \League\Flysystem\WhitespacePathNormalizer
* This class implements: \League\Flysystem\PathNormalizer

### WhitespacePathNormalizer::normalizePath

```php
WhitespacePathNormalizer::normalizePath( string path ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `path` | **string** |  |

**Return Value:**





---

## whitespacesRemover

* Full name: \yxorP\minify\whitespacesRemover
* This class implements: \yxorP\minify\minfyInterface

### whitespacesRemover::process

```php
whitespacesRemover::process( string buffer ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `buffer` | **string** |  |

**Return Value:**





---

## youtubePluginAction

* Full name: \youtubePluginAction
* Parent class: \yxorP\http\wrapper

### youtubePluginAction::onBeforeRequest

```php
youtubePluginAction::onBeforeRequest(  ): void
```

**Return Value:**





---

### youtubePluginAction::onCompleted

```php
youtubePluginAction::onCompleted(  ): void
```

**Return Value:**





---
