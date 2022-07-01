<p align="center">📢<sub><sup> <i><b> YOUR SUPPORT IS GREATLY APPRECIATED/</b> <a href="https://www.patreon.com/donPabloNow">PATREON.COM/DONPABLONOW</a>/<b>BTC</b>  3HVNOVVMLHVEWQLSCCQX9DUA26P5PRCTNQ/<b>ETH</b> 0X3D288C7A673501294C9289C6FC42480A2EA61417 </i>🙏 </sub></sup></p><blockquote><p> ⛔️ <sub><b>ARCHIVE PENDING</b>: This endeavour is likely to fail owing to a lack of support. If you find this project interesting, please support it by smashing the "star" button. If the project receives at some interest work on the project will continue.</sub></p></blockquote></br><a href="https://www.donPabloNow.com/#notice"><img alt="image" src="https://www.donPabloNow.com/notice.wepd"/></a></br></br>

<p align="center">
<img alt="image" align="center" src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/logo.png' />
</p>
<p align="center">
<a align="center" href="https://sourceforge.net/projects/proxy-yxorp/files/latest/download"><img alt="image" align="center" alt="Download Proxy yxorP" src="https://a.fsdn.com/con/app/sf-download-button" width=276 height=48 srcset="https://a.fsdn.com/con/app/sf-download-button?button_size=2x 2x"></a>
</p>

<h1  align="center">🦄 .yxorP Stateful SAAS(y), Multi-tenancy Proxy Guzzler</h1><blockquote><p> ⭐️<sub><b>DEMO LIVE</b>: We have just launched the first working live demo / sneak preview of the yxorP Proxy, which is now available via gitpod <a href="https://gitpod.io/#https://github.com/4dboard/proxy-yxorp">[Live Demo]</a></blockquote>
<h3  align="center"><i>Backend (GUI) included, PHP CURL+Composer are Optional</i></h3>

<br />
<br />

<img alt="image" align="center" src='https://user-images.githubusercontent.com/6468571/174686673-e3ee3ce5-2c13-4ae6-886d-f22aed12a5a0.png' />
<br/><br/>
yxorP is a plug-and-play, flat-file application that <b>does not need Composer, PHP CURL, or databases</b>; these are
all optional additions that are fully supported. yxorP is intended to act as a proxy that can edit or update the content
of <b>multiple websites</b> using a PHAR (PHP archive) binary version of <b>Guzzle</b>, and managed via a
user-friendly <b>Cockpit backend (GUI)</b>.
<br/>
yxorP is event driven and 
<br/>
The incoming request hostname is used to fetch site-specific requirements from the backend, the target website is then
retrieved and modified accordingly. Additionally, the website content can be optionally spun using the <b>article
spinning engine</b> that is already embedded into the application. After the website has been modified the result is
then stored for a predefined time inside a custom-built, <b>flat-file cache</b> system architectured to be <b>500x
faster than memory-based cache</b> systems such as Memcache and Redis. This is accomplished by bypassing the
serialisation and deserialization processes, which resulted a significantly faster cache.

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

## Structure

### \ Namespaces \ Classes

| Class | Description |
|-------|-------------|
| [`BarBucCommand`](./docs/classes/BarBucCommand.md) | Base class for all commands.|
| [`BlockListPlugin`](./docs/classes/BlockListPlugin.md) | |
| [`ComposerAutoloaderInitc066c7ec9ff8668257accf86723d8f09`](./docs/classes/ComposerAutoloaderInitc066c7ec9ff8668257accf86723d8f09.md) | |
| [`CookiePlugin`](./docs/classes/CookiePlugin.md) | |
| [`D`](./docs/classes/D.md) | |
| [`DailyMotionPlugin`](./docs/classes/DailyMotionPlugin.md) | |
| [`Foo1Command`](./docs/classes/Foo1Command.md) | Base class for all commands.|
| [`Foo2Command`](./docs/classes/Foo2Command.md) | Base class for all commands.|
| [`Foo3Command`](./docs/classes/Foo3Command.md) | Base class for all commands.|
| [`Foo4Command`](./docs/classes/Foo4Command.md) | Base class for all commands.|
| [`Foo5Command`](./docs/classes/Foo5Command.md) | Base class for all commands.|
| [`Foo6Command`](./docs/classes/Foo6Command.md) | Base class for all commands.|
| [`FooCommand`](./docs/classes/FooCommand.md) | Base class for all commands.|
| [`FooOptCommand`](./docs/classes/FooOptCommand.md) | Base class for all commands.|
| [`FooSubnamespaced1Command`](./docs/classes/FooSubnamespaced1Command.md) | Base class for all commands.|
| [`FooSubnamespaced2Command`](./docs/classes/FooSubnamespaced2Command.md) | Base class for all commands.|
| [`FoobarCommand`](./docs/classes/FoobarCommand.md) | Base class for all commands.|
| [`HeaderRewritePlugin`](./docs/classes/HeaderRewritePlugin.md) | |
| [`LogPlugin`](./docs/classes/LogPlugin.md) | |
| [`Objet`](./docs/classes/Objet.md) | |
| [`OverridePlugin`](./docs/classes/OverridePlugin.md) | |
| [`Parsedown`](./docs/classes/Parsedown.md) | |
| [`Pimple`](./docs/classes/Pimple.md) | Pimple main class.|
| [`ProxifyPlugin`](./docs/classes/ProxifyPlugin.md) | |
| [`StreamPlugin`](./docs/classes/StreamPlugin.md) | |
| [`Symfony_Component_Debug_Tests_Fixtures_PEARClass`](./docs/classes/Symfony_Component_Debug_Tests_Fixtures_PEARClass.md) | |
| [`TestCommand`](./docs/classes/TestCommand.md) | Base class for all commands.|
| [`TestTiti`](./docs/classes/TestTiti.md) | Base class for all commands.|
| [`TestToto`](./docs/classes/TestToto.md) | Base class for all commands.|
| [`Twig_Autoloader`](./docs/classes/Twig_Autoloader.md) | Autoloads Twig classes.|
| [`Twig_BaseNodeVisitor`](./docs/classes/Twig_BaseNodeVisitor.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`Twig_CacheInterface`](./docs/classes/Twig_CacheInterface.md) | Interface implemented by cache classes.|
| [`Twig_Cache_Filesystem`](./docs/classes/Twig_Cache_Filesystem.md) | Implements a cache on the filesystem.|
| [`Twig_Cache_Null`](./docs/classes/Twig_Cache_Null.md) | Implements a no-cache strategy.|
| [`Twig_Compiler`](./docs/classes/Twig_Compiler.md) | Compiles a node to PHP code.|
| [`Twig_ContainerRuntimeLoader`](./docs/classes/Twig_ContainerRuntimeLoader.md) | Lazily loads Twig runtime implementations from a PSR-11 container.|
| [`Twig_Environment`](./docs/classes/Twig_Environment.md) | Stores the Twig configuration and renders templates.|
| [`Twig_Error`](./docs/classes/Twig_Error.md) | Twig base exception.|
| [`Twig_Error_Loader`](./docs/classes/Twig_Error_Loader.md) | Exception thrown when an error occurs during template loading.|
| [`Twig_Error_Runtime`](./docs/classes/Twig_Error_Runtime.md) | Exception thrown when an error occurs at runtime.|
| [`Twig_Error_Syntax`](./docs/classes/Twig_Error_Syntax.md) | \Exception thrown when a syntax error occurs during lexing or parsing of a template.|
| [`Twig_ExistsLoaderInterface`](./docs/classes/Twig_ExistsLoaderInterface.md) | Adds an exists() method for loaders.|
| [`Twig_ExpressionParser`](./docs/classes/Twig_ExpressionParser.md) | |
| [`Twig_Extension`](./docs/classes/Twig_Extension.md) | |
| [`Twig_ExtensionInterface`](./docs/classes/Twig_ExtensionInterface.md) | Interface implemented by extension classes.|
| [`Twig_Extension_Core`](./docs/classes/Twig_Extension_Core.md) | |
| [`Twig_Extension_Debug`](./docs/classes/Twig_Extension_Debug.md) | |
| [`Twig_Extension_Escaper`](./docs/classes/Twig_Extension_Escaper.md) | |
| [`Twig_Extension_GlobalsInterface`](./docs/classes/Twig_Extension_GlobalsInterface.md) | Enables usage of the deprecated Twig\Extension\AbstractExtension::getGlobals() method.|
| [`Twig_Extension_InitRuntimeInterface`](./docs/classes/Twig_Extension_InitRuntimeInterface.md) | Enables usage of the deprecated Twig\Extension\AbstractExtension::initRuntime() method.|
| [`Twig_Extension_Optimizer`](./docs/classes/Twig_Extension_Optimizer.md) | |
| [`Twig_Extension_Profiler`](./docs/classes/Twig_Extension_Profiler.md) | |
| [`Twig_Extension_Sandbox`](./docs/classes/Twig_Extension_Sandbox.md) | |
| [`Twig_Extension_Staging`](./docs/classes/Twig_Extension_Staging.md) | |
| [`Twig_Extension_StringLoader`](./docs/classes/Twig_Extension_StringLoader.md) | |
| [`Twig_FactoryRuntimeLoader`](./docs/classes/Twig_FactoryRuntimeLoader.md) | Lazy loads the runtime implementations for a Twig element.|
| [`Twig_FileExtensionEscapingStrategy`](./docs/classes/Twig_FileExtensionEscapingStrategy.md) | Default autoescaping strategy based on file names.|
| [`Twig_Filter`](./docs/classes/Twig_Filter.md) | Represents a template filter.|
| [`Twig_Filter_Function`](./docs/classes/Twig_Filter_Function.md) | Represents a function template filter.|
| [`Twig_Filter_Method`](./docs/classes/Twig_Filter_Method.md) | Represents a method template filter.|
| [`Twig_Filter_Node`](./docs/classes/Twig_Filter_Node.md) | Represents a template filter as a node.|
| [`Twig_Function`](./docs/classes/Twig_Function.md) | Represents a template function.|
| [`Twig_Function_Function`](./docs/classes/Twig_Function_Function.md) | Represents a function template function.|
| [`Twig_Function_Method`](./docs/classes/Twig_Function_Method.md) | Represents a method template function.|
| [`Twig_Function_Node`](./docs/classes/Twig_Function_Node.md) | Represents a template function as a node.|
| [`Twig_Lexer`](./docs/classes/Twig_Lexer.md) | Lexes a template string.|
| [`Twig_LoaderInterface`](./docs/classes/Twig_LoaderInterface.md) | Interface all loaders must implement.|
| [`Twig_Loader_Array`](./docs/classes/Twig_Loader_Array.md) | Loads a template from an array.|
| [`Twig_Loader_Chain`](./docs/classes/Twig_Loader_Chain.md) | Loads templates from other loaders.|
| [`Twig_Loader_Filesystem`](./docs/classes/Twig_Loader_Filesystem.md) | Loads template from the filesystem.|
| [`Twig_Markup`](./docs/classes/Twig_Markup.md) | Marks a content as safe.|
| [`Twig_Node`](./docs/classes/Twig_Node.md) | Represents a node in the AST.|
| [`Twig_NodeCaptureInterface`](./docs/classes/Twig_NodeCaptureInterface.md) | Represents a node that captures any nested displayable nodes.|
| [`Twig_NodeOutputInterface`](./docs/classes/Twig_NodeOutputInterface.md) | Represents a displayable node in the AST.|
| [`Twig_NodeTraverser`](./docs/classes/Twig_NodeTraverser.md) | A node traverser.|
| [`Twig_NodeVisitorInterface`](./docs/classes/Twig_NodeVisitorInterface.md) | Interface for node visitor classes.|
| [`Twig_NodeVisitor_Escaper`](./docs/classes/Twig_NodeVisitor_Escaper.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`Twig_NodeVisitor_Optimizer`](./docs/classes/Twig_NodeVisitor_Optimizer.md) | Tries to optimize the AST.|
| [`Twig_NodeVisitor_SafeAnalysis`](./docs/classes/Twig_NodeVisitor_SafeAnalysis.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`Twig_NodeVisitor_Sandbox`](./docs/classes/Twig_NodeVisitor_Sandbox.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`Twig_Node_AutoEscape`](./docs/classes/Twig_Node_AutoEscape.md) | Represents an autoescape node.|
| [`Twig_Node_Block`](./docs/classes/Twig_Node_Block.md) | Represents a block node.|
| [`Twig_Node_BlockReference`](./docs/classes/Twig_Node_BlockReference.md) | Represents a block call node.|
| [`Twig_Node_Body`](./docs/classes/Twig_Node_Body.md) | Represents a body node.|
| [`Twig_Node_CheckSecurity`](./docs/classes/Twig_Node_CheckSecurity.md) | Represents a node in the AST.|
| [`Twig_Node_Deprecated`](./docs/classes/Twig_Node_Deprecated.md) | Represents a deprecated node.|
| [`Twig_Node_Do`](./docs/classes/Twig_Node_Do.md) | Represents a do node.|
| [`Twig_Node_Embed`](./docs/classes/Twig_Node_Embed.md) | Represents an embed node.|
| [`Twig_Node_Expression`](./docs/classes/Twig_Node_Expression.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Array`](./docs/classes/Twig_Node_Expression_Array.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_AssignName`](./docs/classes/Twig_Node_Expression_AssignName.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary`](./docs/classes/Twig_Node_Expression_Binary.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Add`](./docs/classes/Twig_Node_Expression_Binary_Add.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_And`](./docs/classes/Twig_Node_Expression_Binary_And.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_BitwiseAnd`](./docs/classes/Twig_Node_Expression_Binary_BitwiseAnd.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_BitwiseOr`](./docs/classes/Twig_Node_Expression_Binary_BitwiseOr.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_BitwiseXor`](./docs/classes/Twig_Node_Expression_Binary_BitwiseXor.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Concat`](./docs/classes/Twig_Node_Expression_Binary_Concat.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Div`](./docs/classes/Twig_Node_Expression_Binary_Div.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_EndsWith`](./docs/classes/Twig_Node_Expression_Binary_EndsWith.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Equal`](./docs/classes/Twig_Node_Expression_Binary_Equal.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_FloorDiv`](./docs/classes/Twig_Node_Expression_Binary_FloorDiv.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Greater`](./docs/classes/Twig_Node_Expression_Binary_Greater.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_GreaterEqual`](./docs/classes/Twig_Node_Expression_Binary_GreaterEqual.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_In`](./docs/classes/Twig_Node_Expression_Binary_In.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Less`](./docs/classes/Twig_Node_Expression_Binary_Less.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_LessEqual`](./docs/classes/Twig_Node_Expression_Binary_LessEqual.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Matches`](./docs/classes/Twig_Node_Expression_Binary_Matches.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Mod`](./docs/classes/Twig_Node_Expression_Binary_Mod.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Mul`](./docs/classes/Twig_Node_Expression_Binary_Mul.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_NotEqual`](./docs/classes/Twig_Node_Expression_Binary_NotEqual.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_NotIn`](./docs/classes/Twig_Node_Expression_Binary_NotIn.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Or`](./docs/classes/Twig_Node_Expression_Binary_Or.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Power`](./docs/classes/Twig_Node_Expression_Binary_Power.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Range`](./docs/classes/Twig_Node_Expression_Binary_Range.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_StartsWith`](./docs/classes/Twig_Node_Expression_Binary_StartsWith.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Binary_Sub`](./docs/classes/Twig_Node_Expression_Binary_Sub.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_BlockReference`](./docs/classes/Twig_Node_Expression_BlockReference.md) | Represents a block call node.|
| [`Twig_Node_Expression_Call`](./docs/classes/Twig_Node_Expression_Call.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Conditional`](./docs/classes/Twig_Node_Expression_Conditional.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Constant`](./docs/classes/Twig_Node_Expression_Constant.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_ExtensionReference`](./docs/classes/Twig_Node_Expression_ExtensionReference.md) | Represents an extension call node.|
| [`Twig_Node_Expression_Filter`](./docs/classes/Twig_Node_Expression_Filter.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Filter_Default`](./docs/classes/Twig_Node_Expression_Filter_Default.md) | Returns the value or the default value when it is undefined or empty.|
| [`Twig_Node_Expression_Function`](./docs/classes/Twig_Node_Expression_Function.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_GetAttr`](./docs/classes/Twig_Node_Expression_GetAttr.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_MethodCall`](./docs/classes/Twig_Node_Expression_MethodCall.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Name`](./docs/classes/Twig_Node_Expression_Name.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_NullCoalesce`](./docs/classes/Twig_Node_Expression_NullCoalesce.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Parent`](./docs/classes/Twig_Node_Expression_Parent.md) | Represents a parent node.|
| [`Twig_Node_Expression_TempName`](./docs/classes/Twig_Node_Expression_TempName.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Test`](./docs/classes/Twig_Node_Expression_Test.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Test_Constant`](./docs/classes/Twig_Node_Expression_Test_Constant.md) | Checks if a variable is the exact same value as a constant.|
| [`Twig_Node_Expression_Test_Defined`](./docs/classes/Twig_Node_Expression_Test_Defined.md) | Checks if a variable is defined in the current context.|
| [`Twig_Node_Expression_Test_Divisibleby`](./docs/classes/Twig_Node_Expression_Test_Divisibleby.md) | Checks if a variable is divisible by a number.|
| [`Twig_Node_Expression_Test_Even`](./docs/classes/Twig_Node_Expression_Test_Even.md) | Checks if a number is even.|
| [`Twig_Node_Expression_Test_Null`](./docs/classes/Twig_Node_Expression_Test_Null.md) | Checks that a variable is null.|
| [`Twig_Node_Expression_Test_Odd`](./docs/classes/Twig_Node_Expression_Test_Odd.md) | Checks if a number is odd.|
| [`Twig_Node_Expression_Test_Sameas`](./docs/classes/Twig_Node_Expression_Test_Sameas.md) | Checks if a variable is the same as another one (=== in PHP).|
| [`Twig_Node_Expression_Unary`](./docs/classes/Twig_Node_Expression_Unary.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Unary_Neg`](./docs/classes/Twig_Node_Expression_Unary_Neg.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Unary_Not`](./docs/classes/Twig_Node_Expression_Unary_Not.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Expression_Unary_Pos`](./docs/classes/Twig_Node_Expression_Unary_Pos.md) | Abstract class for all nodes that represents an expression.|
| [`Twig_Node_Flush`](./docs/classes/Twig_Node_Flush.md) | Represents a flush node.|
| [`Twig_Node_For`](./docs/classes/Twig_Node_For.md) | Represents a for node.|
| [`Twig_Node_ForLoop`](./docs/classes/Twig_Node_ForLoop.md) | Internal node used by the for node.|
| [`Twig_Node_If`](./docs/classes/Twig_Node_If.md) | Represents an if node.|
| [`Twig_Node_Import`](./docs/classes/Twig_Node_Import.md) | Represents an import node.|
| [`Twig_Node_Include`](./docs/classes/Twig_Node_Include.md) | Represents an include node.|
| [`Twig_Node_Macro`](./docs/classes/Twig_Node_Macro.md) | Represents a macro node.|
| [`Twig_Node_Module`](./docs/classes/Twig_Node_Module.md) | Represents a module node.|
| [`Twig_Node_Print`](./docs/classes/Twig_Node_Print.md) | Represents a node that outputs an expression.|
| [`Twig_Node_Sandbox`](./docs/classes/Twig_Node_Sandbox.md) | Represents a sandbox node.|
| [`Twig_Node_SandboxedPrint`](./docs/classes/Twig_Node_SandboxedPrint.md) | Adds a check for the __toString() method when the variable is an object and the sandbox is activated.|
| [`Twig_Node_Set`](./docs/classes/Twig_Node_Set.md) | Represents a set node.|
| [`Twig_Node_SetTemp`](./docs/classes/Twig_Node_SetTemp.md) | |
| [`Twig_Node_Spaceless`](./docs/classes/Twig_Node_Spaceless.md) | Represents a spaceless node.|
| [`Twig_Node_Text`](./docs/classes/Twig_Node_Text.md) | Represents a text node.|
| [`Twig_Node_With`](./docs/classes/Twig_Node_With.md) | Represents a nested &quot;with&quot; scope.|
| [`Twig_Parser`](./docs/classes/Twig_Parser.md) | Default parser implementation.|
| [`Twig_Profiler_Dumper_Base`](./docs/classes/Twig_Profiler_Dumper_Base.md) | |
| [`Twig_Profiler_Dumper_Blackfire`](./docs/classes/Twig_Profiler_Dumper_Blackfire.md) | |
| [`Twig_Profiler_Dumper_Html`](./docs/classes/Twig_Profiler_Dumper_Html.md) | |
| [`Twig_Profiler_Dumper_Text`](./docs/classes/Twig_Profiler_Dumper_Text.md) | |
| [`Twig_Profiler_NodeVisitor_Profiler`](./docs/classes/Twig_Profiler_NodeVisitor_Profiler.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`Twig_Profiler_Node_EnterProfile`](./docs/classes/Twig_Profiler_Node_EnterProfile.md) | Represents a profile enter node.|
| [`Twig_Profiler_Node_LeaveProfile`](./docs/classes/Twig_Profiler_Node_LeaveProfile.md) | Represents a profile leave node.|
| [`Twig_Profiler_Profile`](./docs/classes/Twig_Profiler_Profile.md) | |
| [`Twig_RuntimeLoaderInterface`](./docs/classes/Twig_RuntimeLoaderInterface.md) | Creates runtime implementations for Twig elements (filters/functions/tests).|
| [`Twig_Sandbox_SecurityError`](./docs/classes/Twig_Sandbox_SecurityError.md) | Exception thrown when a security error occurs at runtime.|
| [`Twig_Sandbox_SecurityNotAllowedFilterError`](./docs/classes/Twig_Sandbox_SecurityNotAllowedFilterError.md) | Exception thrown when a not allowed filter is used in a template.|
| [`Twig_Sandbox_SecurityNotAllowedFunctionError`](./docs/classes/Twig_Sandbox_SecurityNotAllowedFunctionError.md) | Exception thrown when a not allowed function is used in a template.|
| [`Twig_Sandbox_SecurityNotAllowedMethodError`](./docs/classes/Twig_Sandbox_SecurityNotAllowedMethodError.md) | Exception thrown when a not allowed class method is used in a template.|
| [`Twig_Sandbox_SecurityNotAllowedPropertyError`](./docs/classes/Twig_Sandbox_SecurityNotAllowedPropertyError.md) | Exception thrown when a not allowed class property is used in a template.|
| [`Twig_Sandbox_SecurityNotAllowedTagError`](./docs/classes/Twig_Sandbox_SecurityNotAllowedTagError.md) | Exception thrown when a not allowed tag is used in a template.|
| [`Twig_Sandbox_SecurityPolicy`](./docs/classes/Twig_Sandbox_SecurityPolicy.md) | Represents a security policy which need to be enforced when sandbox mode is enabled.|
| [`Twig_Sandbox_SecurityPolicyInterface`](./docs/classes/Twig_Sandbox_SecurityPolicyInterface.md) | Interface that all security policy classes must implements.|
| [`Twig_SimpleFilter`](./docs/classes/Twig_SimpleFilter.md) | Represents a template filter.|
| [`Twig_SimpleFunction`](./docs/classes/Twig_SimpleFunction.md) | Represents a template function.|
| [`Twig_SimpleTest`](./docs/classes/Twig_SimpleTest.md) | Represents a template test.|
| [`Twig_Source`](./docs/classes/Twig_Source.md) | Holds information about a non-compiled Twig template.|
| [`Twig_SourceContextLoaderInterface`](./docs/classes/Twig_SourceContextLoaderInterface.md) | Adds a getSourceContext() method for loaders.|
| [`Twig_Template`](./docs/classes/Twig_Template.md) | |
| [`Twig_TemplateWrapper`](./docs/classes/Twig_TemplateWrapper.md) | Exposes a template to userland.|
| [`Twig_Test`](./docs/classes/Twig_Test.md) | Represents a template test.|
| [`Twig_Test_Function`](./docs/classes/Twig_Test_Function.md) | Represents a function template test.|
| [`Twig_Test_IntegrationTestCase`](./docs/classes/Twig_Test_IntegrationTestCase.md) | Integration test helper.|
| [`Twig_Test_Method`](./docs/classes/Twig_Test_Method.md) | Represents a method template test.|
| [`Twig_Test_Node`](./docs/classes/Twig_Test_Node.md) | Represents a template test as a Node.|
| [`Twig_Test_NodeTestCase`](./docs/classes/Twig_Test_NodeTestCase.md) | |
| [`Twig_Token`](./docs/classes/Twig_Token.md) | Represents a Token.|
| [`Twig_TokenParser`](./docs/classes/Twig_TokenParser.md) | Base class for all token parsers.|
| [`Twig_TokenParserBroker`](./docs/classes/Twig_TokenParserBroker.md) | Default implementation of a token parser broker.|
| [`Twig_TokenParserInterface`](./docs/classes/Twig_TokenParserInterface.md) | Interface implemented by token parsers.|
| [`Twig_TokenParser_AutoEscape`](./docs/classes/Twig_TokenParser_AutoEscape.md) | Marks a section of a template to be escaped or not.|
| [`Twig_TokenParser_Block`](./docs/classes/Twig_TokenParser_Block.md) | Marks a section of a template as being reusable.|
| [`Twig_TokenParser_Deprecated`](./docs/classes/Twig_TokenParser_Deprecated.md) | Deprecates a section of a template.|
| [`Twig_TokenParser_Do`](./docs/classes/Twig_TokenParser_Do.md) | Evaluates an expression, discarding the returned value.|
| [`Twig_TokenParser_Embed`](./docs/classes/Twig_TokenParser_Embed.md) | Embeds a template.|
| [`Twig_TokenParser_Extends`](./docs/classes/Twig_TokenParser_Extends.md) | Extends a template by another one.|
| [`Twig_TokenParser_Filter`](./docs/classes/Twig_TokenParser_Filter.md) | Filters a section of a template by applying filters.|
| [`Twig_TokenParser_Flush`](./docs/classes/Twig_TokenParser_Flush.md) | Flushes the output to the client.|
| [`Twig_TokenParser_For`](./docs/classes/Twig_TokenParser_For.md) | Loops over each item of a sequence.|
| [`Twig_TokenParser_From`](./docs/classes/Twig_TokenParser_From.md) | Imports macros.|
| [`Twig_TokenParser_If`](./docs/classes/Twig_TokenParser_If.md) | Tests a condition.|
| [`Twig_TokenParser_Import`](./docs/classes/Twig_TokenParser_Import.md) | Imports macros.|
| [`Twig_TokenParser_Include`](./docs/classes/Twig_TokenParser_Include.md) | Includes a template.|
| [`Twig_TokenParser_Macro`](./docs/classes/Twig_TokenParser_Macro.md) | Defines a macro.|
| [`Twig_TokenParser_Sandbox`](./docs/classes/Twig_TokenParser_Sandbox.md) | Marks a section of a template as untrusted code that must be evaluated in the sandbox mode.|
| [`Twig_TokenParser_Set`](./docs/classes/Twig_TokenParser_Set.md) | Defines a variable.|
| [`Twig_TokenParser_Spaceless`](./docs/classes/Twig_TokenParser_Spaceless.md) | Remove whitespaces between HTML tags.|
| [`Twig_TokenParser_Use`](./docs/classes/Twig_TokenParser_Use.md) | Imports blocks defined in another template into the current template.|
| [`Twig_TokenParser_With`](./docs/classes/Twig_TokenParser_With.md) | Creates a nested scope.|
| [`Twig_TokenStream`](./docs/classes/Twig_TokenStream.md) | Represents a token stream.|
| [`Twig_Util_DeprecationCollector`](./docs/classes/Twig_Util_DeprecationCollector.md) | |
| [`Twig_Util_TemplateDirIterator`](./docs/classes/Twig_Util_TemplateDirIterator.md) | |
| [`TwitterPlugin`](./docs/classes/TwitterPlugin.md) | |
| [`UseTest`](./docs/classes/UseTest.md) | |
| [`YoutubePlugin`](./docs/classes/YoutubePlugin.md) | |
| [`ab`](./docs/classes/ab.md) | |
| [`customSingleton`](./docs/classes/customSingleton.md) | |
| [`customSingletonConfiguration`](./docs/classes/customSingletonConfiguration.md) | |
| [`erMyClass1`](./docs/classes/erMyClass1.md) | |
| [`erMyClass2`](./docs/classes/erMyClass2.md) | |
| [`erYourClass1`](./docs/classes/erYourClass1.md) | |
| [`erYourClass2`](./docs/classes/erYourClass2.md) | |
| [`extTranslationTest`](./docs/classes/extTranslationTest.md) | |
| [`ezcBase`](./docs/classes/ezcBase.md) | Base class implements the methods needed to use the eZ components.|
| [`ezcBaseAutoloadException`](./docs/classes/ezcBaseAutoloadException.md) | ezcBaseAutoloadException is thrown whenever a class can not be found with<br />the autoload mechanism.|
| [`ezcBaseAutoloadOptions`](./docs/classes/ezcBaseAutoloadOptions.md) | Class containing the basic options for ezcBase&#039; autoload.|
| [`ezcBaseDoubleClassRepositoryPrefixException`](./docs/classes/ezcBaseDoubleClassRepositoryPrefixException.md) | ezcBaseDoubleClassRepositoryPrefixException is thrown whenever you try to<br />register a class repository with a prefix that has already been added<br />before.|
| [`ezcBaseException`](./docs/classes/ezcBaseException.md) | ezcBaseException is a container from which all other exceptions in the<br />components library descent.|
| [`ezcBaseExtensionNotFoundException`](./docs/classes/ezcBaseExtensionNotFoundException.md) | ezcBaseExtensionNotFoundException is thrown when a requested PHP extension was not found.|
| [`ezcBaseFeatures`](./docs/classes/ezcBaseFeatures.md) | Provides methods needed to check for features.|
| [`ezcBaseFeaturesUnixTest`](./docs/classes/ezcBaseFeaturesUnixTest.md) | |
| [`ezcBaseFeaturesWindowsTest`](./docs/classes/ezcBaseFeaturesWindowsTest.md) | |
| [`ezcBaseFileCalculateRelativePathTest`](./docs/classes/ezcBaseFileCalculateRelativePathTest.md) | |
| [`ezcBaseFileCopyRecursiveTest`](./docs/classes/ezcBaseFileCopyRecursiveTest.md) | |
| [`ezcBaseFileException`](./docs/classes/ezcBaseFileException.md) | ezcBaseFileException is the exception from which all file related exceptions<br />inherit.|
| [`ezcBaseFileFindContext`](./docs/classes/ezcBaseFileFindContext.md) | Struct which defines the information collected by the file walker for locating files.|
| [`ezcBaseFileFindRecursiveTest`](./docs/classes/ezcBaseFileFindRecursiveTest.md) | |
| [`ezcBaseFileIoException`](./docs/classes/ezcBaseFileIoException.md) | ezcBaseFileIoException is thrown when a problem occurs while writing<br />and reading to/from an open file.|
| [`ezcBaseFileIsAbsoluteTest`](./docs/classes/ezcBaseFileIsAbsoluteTest.md) | |
| [`ezcBaseFileNotFoundException`](./docs/classes/ezcBaseFileNotFoundException.md) | ezcBaseFileNotFoundException is thrown when a file or directory was tried to<br />be opened, but did not exist.|
| [`ezcBaseFilePermissionException`](./docs/classes/ezcBaseFilePermissionException.md) | ezcBaseFilePermissionException is thrown whenever a permission problem with<br />a file, directory or stream occurred.|
| [`ezcBaseFileRemoveRecursiveTest`](./docs/classes/ezcBaseFileRemoveRecursiveTest.md) | |
| [`ezcBaseFunctionalityNotSupportedException`](./docs/classes/ezcBaseFunctionalityNotSupportedException.md) | The ezcBaseFunctionalityNotSupportedException is thrown when a requested<br />PHP function was not found.|
| [`ezcBaseInit`](./docs/classes/ezcBaseInit.md) | Provides a method to implement delayed initialization of objects.|
| [`ezcBaseInitCallbackConfiguredException`](./docs/classes/ezcBaseInitCallbackConfiguredException.md) | ezcBaseInitCallbackConfiguredException is thrown when you try to assign a<br />callback clasname to an identifier, while there is already a callback class<br />configured for this identifier.|
| [`ezcBaseInitInvalidCallbackClassException`](./docs/classes/ezcBaseInitInvalidCallbackClassException.md) | Exception that is thrown if an invalid class is passed as callback class for<br />delayed object configuration.|
| [`ezcBaseInitTest`](./docs/classes/ezcBaseInitTest.md) | |
| [`ezcBaseInvalidParentClassException`](./docs/classes/ezcBaseInvalidParentClassException.md) | Exception that is thrown if an invalid class is passed as custom class.|
| [`ezcBaseMetaData`](./docs/classes/ezcBaseMetaData.md) | Base class implements ways of fetching information about the installed<br />eZ Components. It knows whether to use the PEAR registry or the bundled XML<br />file, depending on how eZ Components is installed.|
| [`ezcBaseMetaDataPearReader`](./docs/classes/ezcBaseMetaDataPearReader.md) | Base class implements ways of fetching information about the installed<br />eZ Components when installed as tarball.|
| [`ezcBaseMetaDataPearTest`](./docs/classes/ezcBaseMetaDataPearTest.md) | |
| [`ezcBaseMetaDataTarballReader`](./docs/classes/ezcBaseMetaDataTarballReader.md) | Base class implements ways of fetching information about the installed<br />eZ Components when installed as tarball.|
| [`ezcBaseOptions`](./docs/classes/ezcBaseOptions.md) | Base options class for all eZ components.|
| [`ezcBaseOptionsTest`](./docs/classes/ezcBaseOptionsTest.md) | |
| [`ezcBasePropertyNotFoundException`](./docs/classes/ezcBasePropertyNotFoundException.md) | ezcBasePropertyNotFoundException is thrown whenever a non existent property<br />is accessed in the Components library.|
| [`ezcBasePropertyPermissionException`](./docs/classes/ezcBasePropertyPermissionException.md) | ezcBasePropertyPermissionException is thrown whenever a read-only property<br />is tried to be changed, or when a write-only property was accessed for reading.|
| [`ezcBaseRepositoryDirectory`](./docs/classes/ezcBaseRepositoryDirectory.md) | Struct which defines a repository directory.|
| [`ezcBaseSettingNotFoundException`](./docs/classes/ezcBaseSettingNotFoundException.md) | ezcBaseSettingNotFoundException is thrown whenever there is a name passed as<br />part as the options array to setOptions() for an option that doesn&#039;t exist.|
| [`ezcBaseSettingValueException`](./docs/classes/ezcBaseSettingValueException.md) | ezcBaseSettingValueExeception is thrown whenever a value to a class&#039;<br />configuration option is either of the wrong type, or has a wrong value.|
| [`ezcBaseStruct`](./docs/classes/ezcBaseStruct.md) | Base class for all struct classes.|
| [`ezcBaseStructTest`](./docs/classes/ezcBaseStructTest.md) | |
| [`ezcBaseTest`](./docs/classes/ezcBaseTest.md) | |
| [`ezcBaseTestOptions`](./docs/classes/ezcBaseTestOptions.md) | Base options class for all eZ components.|
| [`ezcBaseValueException`](./docs/classes/ezcBaseValueException.md) | ezcBaseValueException is thrown whenever the type or value of the given<br />variable is not as expected.|
| [`ezcBaseWhateverException`](./docs/classes/ezcBaseWhateverException.md) | ezcBaseWhateverException is thrown whenever something is so seriously wrong.|
| [`ezcConverterDocbookEzXmlOptionsTests`](./docs/classes/ezcConverterDocbookEzXmlOptionsTests.md) | Test suite for class.|
| [`ezcConverterEzXmlDocbookOptionsTests`](./docs/classes/ezcConverterEzXmlDocbookOptionsTests.md) | Test suite for class.|
| [`ezcConverterOdtOptionsTests`](./docs/classes/ezcConverterOdtOptionsTests.md) | Test suite for class.|
| [`ezcConverterOptionsTests`](./docs/classes/ezcConverterOptionsTests.md) | Test suite for class.|
| [`ezcConverterRstOptionsTests`](./docs/classes/ezcConverterRstOptionsTests.md) | Test suite for class.|
| [`ezcConverterWikiOptionsTests`](./docs/classes/ezcConverterWikiOptionsTests.md) | Test suite for class.|
| [`ezcConverterXsltOptionsTests`](./docs/classes/ezcConverterXsltOptionsTests.md) | Test suite for class.|
| [`ezcDocument`](./docs/classes/ezcDocument.md) | A base class for document type handlers.|
| [`ezcDocumentAlnumListItemGenerator`](./docs/classes/ezcDocumentAlnumListItemGenerator.md) | List item generator|
| [`ezcDocumentAlphaListItemGenerator`](./docs/classes/ezcDocumentAlphaListItemGenerator.md) | Numbered list item generator|
| [`ezcDocumentBBCode`](./docs/classes/ezcDocumentBBCode.md) | Document handler for BBCode text documents.|
| [`ezcDocumentBBCodeBlockLevelNode`](./docs/classes/ezcDocumentBBCodeBlockLevelNode.md) | Struct for BBCode document block level abstract syntax tree nodes|
| [`ezcDocumentBBCodeBulletListNode`](./docs/classes/ezcDocumentBBCodeBulletListNode.md) | Struct for BBCode document bullet list abstract syntax tree nodes|
| [`ezcDocumentBBCodeClosingTagNode`](./docs/classes/ezcDocumentBBCodeClosingTagNode.md) | Struct for BBCode document inline abstract syntax tree nodes|
| [`ezcDocumentBBCodeDocbookVisitor`](./docs/classes/ezcDocumentBBCodeDocbookVisitor.md) | Docbook visitor for the BBCode AST.|
| [`ezcDocumentBBCodeDocbookVisitorTests`](./docs/classes/ezcDocumentBBCodeDocbookVisitorTests.md) | Test suite for class.|
| [`ezcDocumentBBCodeDocumentNode`](./docs/classes/ezcDocumentBBCodeDocumentNode.md) | Struct for BBCode document abstract syntax tree root nodes|
| [`ezcDocumentBBCodeEmailPlugin`](./docs/classes/ezcDocumentBBCodeEmailPlugin.md) | Visitor for bbcode email tags|
| [`ezcDocumentBBCodeEmphasisPlugin`](./docs/classes/ezcDocumentBBCodeEmphasisPlugin.md) | Visitor for bbcode emphasis tags|
| [`ezcDocumentBBCodeEndOfFileToken`](./docs/classes/ezcDocumentBBCodeEndOfFileToken.md) | Struct for BBCode document end of file tokens|
| [`ezcDocumentBBCodeEnumeratedListNode`](./docs/classes/ezcDocumentBBCodeEnumeratedListNode.md) | Struct for BBCode document enumerated list abstract syntax tree nodes|
| [`ezcDocumentBBCodeImagePlugin`](./docs/classes/ezcDocumentBBCodeImagePlugin.md) | Visitor for bbcode url tags|
| [`ezcDocumentBBCodeInlineLiteralNode`](./docs/classes/ezcDocumentBBCodeInlineLiteralNode.md) | Struct for BBCode document inline literal abstract syntax tree nodes|
| [`ezcDocumentBBCodeLineBreakToken`](./docs/classes/ezcDocumentBBCodeLineBreakToken.md) | Struct for BBCode document inline line break tokens|
| [`ezcDocumentBBCodeListEndNode`](./docs/classes/ezcDocumentBBCodeListEndNode.md) | Struct for BBCode document list end abstract syntax tree nodes|
| [`ezcDocumentBBCodeListItemNode`](./docs/classes/ezcDocumentBBCodeListItemNode.md) | Struct for BBCode document inline literal abstract syntax tree nodes|
| [`ezcDocumentBBCodeListItemToken`](./docs/classes/ezcDocumentBBCodeListItemToken.md) | Struct for BBCode document nline markup tokens|
| [`ezcDocumentBBCodeListNode`](./docs/classes/ezcDocumentBBCodeListNode.md) | Struct for BBCode document list abstract syntax tree nodes|
| [`ezcDocumentBBCodeLiteralBlockNode`](./docs/classes/ezcDocumentBBCodeLiteralBlockNode.md) | Struct for BBCode document literal block abstract syntax tree nodes|
| [`ezcDocumentBBCodeLiteralBlockToken`](./docs/classes/ezcDocumentBBCodeLiteralBlockToken.md) | Struct for BBCode document literal block tokens|
| [`ezcDocumentBBCodeNewLineToken`](./docs/classes/ezcDocumentBBCodeNewLineToken.md) | Struct for BBCode document new line tokens|
| [`ezcDocumentBBCodeNoMarkupPlugin`](./docs/classes/ezcDocumentBBCodeNoMarkupPlugin.md) | Visitor for bbcode emphasis tags|
| [`ezcDocumentBBCodeNode`](./docs/classes/ezcDocumentBBCodeNode.md) | Struct for BBCode document document abstract syntax tree nodes|
| [`ezcDocumentBBCodeOptions`](./docs/classes/ezcDocumentBBCodeOptions.md) | Class containing the basic options for the ezcDocumentBBCode.|
| [`ezcDocumentBBCodeParagraphNode`](./docs/classes/ezcDocumentBBCodeParagraphNode.md) | Struct for BBCode document paragraph abstract syntax tree nodes|
| [`ezcDocumentBBCodeParser`](./docs/classes/ezcDocumentBBCodeParser.md) | Parser for bbcode documents.|
| [`ezcDocumentBBCodeParserTests`](./docs/classes/ezcDocumentBBCodeParserTests.md) | Test suite for class.|
| [`ezcDocumentBBCodePlugin`](./docs/classes/ezcDocumentBBCodePlugin.md) | Visitor for bbcode plugins|
| [`ezcDocumentBBCodeQuotePlugin`](./docs/classes/ezcDocumentBBCodeQuotePlugin.md) | Visitor for bbcode emphasis tags|
| [`ezcDocumentBBCodeSpecialCharsToken`](./docs/classes/ezcDocumentBBCodeSpecialCharsToken.md) | Struct for BBCode document special character tokens|
| [`ezcDocumentBBCodeTagCloseToken`](./docs/classes/ezcDocumentBBCodeTagCloseToken.md) | Struct for BBCode document nline markup tokens|
| [`ezcDocumentBBCodeTagNode`](./docs/classes/ezcDocumentBBCodeTagNode.md) | Struct for BBCode document inline abstract syntax tree nodes|
| [`ezcDocumentBBCodeTagOpenToken`](./docs/classes/ezcDocumentBBCodeTagOpenToken.md) | Struct for BBCode document nline markup tokens|
| [`ezcDocumentBBCodeTextLineToken`](./docs/classes/ezcDocumentBBCodeTextLineToken.md) | Struct for BBCode document text line tokens|
| [`ezcDocumentBBCodeTextNode`](./docs/classes/ezcDocumentBBCodeTextNode.md) | Struct for BBCode document abstract syntax tree text nodes|
| [`ezcDocumentBBCodeToken`](./docs/classes/ezcDocumentBBCodeToken.md) | Struct for BBCode document document tokens|
| [`ezcDocumentBBCodeTokenizer`](./docs/classes/ezcDocumentBBCodeTokenizer.md) | Tokenizer for bbcode documents|
| [`ezcDocumentBBCodeTokenizerTests`](./docs/classes/ezcDocumentBBCodeTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentBBCodeUrlPlugin`](./docs/classes/ezcDocumentBBCodeUrlPlugin.md) | Visitor for bbcode url tags|
| [`ezcDocumentBBCodeVisitor`](./docs/classes/ezcDocumentBBCodeVisitor.md) | Abstract visitor base for BBCode documents represented by the parser AST.|
| [`ezcDocumentBBCodeWhitespaceToken`](./docs/classes/ezcDocumentBBCodeWhitespaceToken.md) | Struct for BBCode document whitespace tokens|
| [`ezcDocumentBulletListItemGenerator`](./docs/classes/ezcDocumentBulletListItemGenerator.md) | List item generator.|
| [`ezcDocumentConfluenceWiki`](./docs/classes/ezcDocumentConfluenceWiki.md) | Document handler for Confluence wiki text documents.|
| [`ezcDocumentConversionException`](./docs/classes/ezcDocumentConversionException.md) | Exception thrown, when the RST parser could not parse asome token sequence.|
| [`ezcDocumentConverter`](./docs/classes/ezcDocumentConverter.md) | A base class for document type converters.|
| [`ezcDocumentConverterDocbookToEzXmlTests`](./docs/classes/ezcDocumentConverterDocbookToEzXmlTests.md) | Test suite for class.|
| [`ezcDocumentConverterDocbookToHtmlTests`](./docs/classes/ezcDocumentConverterDocbookToHtmlTests.md) | Test suite for class.|
| [`ezcDocumentConverterDocbookToHtmlXsltTests`](./docs/classes/ezcDocumentConverterDocbookToHtmlXsltTests.md) | Test suite for class.|
| [`ezcDocumentConverterDocbookToOdtTests`](./docs/classes/ezcDocumentConverterDocbookToOdtTests.md) | Test suite for class.|
| [`ezcDocumentConverterDocbookToRstTests`](./docs/classes/ezcDocumentConverterDocbookToRstTests.md) | Test suite for class.|
| [`ezcDocumentConverterDocbookToWikiTests`](./docs/classes/ezcDocumentConverterDocbookToWikiTests.md) | Test suite for class.|
| [`ezcDocumentConverterOptions`](./docs/classes/ezcDocumentConverterOptions.md) | Class containing the basic options for the ezcDocumentConverter|
| [`ezcDocumentConverterTests`](./docs/classes/ezcDocumentConverterTests.md) | Test suite for class.|
| [`ezcDocumentCreoleWiki`](./docs/classes/ezcDocumentCreoleWiki.md) | Document handler for Creole wiki text documents.|
| [`ezcDocumentDocbook`](./docs/classes/ezcDocumentDocbook.md) | The document handler for the docbook document markup.|
| [`ezcDocumentDocbookOptions`](./docs/classes/ezcDocumentDocbookOptions.md) | Class containing the basic options for the ezcDocumentDocbook class.|
| [`ezcDocumentDocbookOptionsTests`](./docs/classes/ezcDocumentDocbookOptionsTests.md) | Test suite for class.|
| [`ezcDocumentDocbookTests`](./docs/classes/ezcDocumentDocbookTests.md) | Test suite for class.|
| [`ezcDocumentDocbookToEzXmlAnchorHandler`](./docs/classes/ezcDocumentDocbookToEzXmlAnchorHandler.md) | Visit anchor elements.|
| [`ezcDocumentDocbookToEzXmlCommentHandler`](./docs/classes/ezcDocumentDocbookToEzXmlCommentHandler.md) | Visit docbook comment.|
| [`ezcDocumentDocbookToEzXmlConverter`](./docs/classes/ezcDocumentDocbookToEzXmlConverter.md) | Converter for docbook to XEzXml with a PHP callback based mechanism, for fast<br />and easy PHP based extensible transformations.|
| [`ezcDocumentDocbookToEzXmlConverterOptions`](./docs/classes/ezcDocumentDocbookToEzXmlConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class|
| [`ezcDocumentDocbookToEzXmlEmphasisHandler`](./docs/classes/ezcDocumentDocbookToEzXmlEmphasisHandler.md) | Visit emphasis.|
| [`ezcDocumentDocbookToEzXmlExternalLinkHandler`](./docs/classes/ezcDocumentDocbookToEzXmlExternalLinkHandler.md) | Visit external links.|
| [`ezcDocumentDocbookToEzXmlFootnoteHandler`](./docs/classes/ezcDocumentDocbookToEzXmlFootnoteHandler.md) | Visit footnotes|
| [`ezcDocumentDocbookToEzXmlIgnoreHandler`](./docs/classes/ezcDocumentDocbookToEzXmlIgnoreHandler.md) | Handler for elements, which are safe to ignore|
| [`ezcDocumentDocbookToEzXmlInternalLinkHandler`](./docs/classes/ezcDocumentDocbookToEzXmlInternalLinkHandler.md) | Visit internal links.|
| [`ezcDocumentDocbookToEzXmlItemizedListHandler`](./docs/classes/ezcDocumentDocbookToEzXmlItemizedListHandler.md) | Visit itemized lists|
| [`ezcDocumentDocbookToEzXmlLiteralLayoutHandler`](./docs/classes/ezcDocumentDocbookToEzXmlLiteralLayoutHandler.md) | Visit literallayout elements|
| [`ezcDocumentDocbookToEzXmlMappingHandler`](./docs/classes/ezcDocumentDocbookToEzXmlMappingHandler.md) | Simple mapping handler|
| [`ezcDocumentDocbookToEzXmlOrderedListHandler`](./docs/classes/ezcDocumentDocbookToEzXmlOrderedListHandler.md) | Visit ordered lists.|
| [`ezcDocumentDocbookToEzXmlParagraphHandler`](./docs/classes/ezcDocumentDocbookToEzXmlParagraphHandler.md) | Visit paragraphs|
| [`ezcDocumentDocbookToEzXmlRecurseHandler`](./docs/classes/ezcDocumentDocbookToEzXmlRecurseHandler.md) | Handler for elements, which are self to ignore itself, and just should rbe<br />recursed into.|
| [`ezcDocumentDocbookToEzXmlSectionHandler`](./docs/classes/ezcDocumentDocbookToEzXmlSectionHandler.md) | Visit docbook sections.|
| [`ezcDocumentDocbookToEzXmlTableCellHandler`](./docs/classes/ezcDocumentDocbookToEzXmlTableCellHandler.md) | Visit table cells|
| [`ezcDocumentDocbookToEzXmlTableHandler`](./docs/classes/ezcDocumentDocbookToEzXmlTableHandler.md) | Visit table|
| [`ezcDocumentDocbookToEzXmlTitleHandler`](./docs/classes/ezcDocumentDocbookToEzXmlTitleHandler.md) | Visit docbook section titles|
| [`ezcDocumentDocbookToHtmlAnchorHandler`](./docs/classes/ezcDocumentDocbookToHtmlAnchorHandler.md) | Visit anchor elements|
| [`ezcDocumentDocbookToHtmlBaseHandler`](./docs/classes/ezcDocumentDocbookToHtmlBaseHandler.md) | Basic converter which stores a list of handlers for each node in the docbook<br />element tree. Those handlers will be executed for the elements, when found.|
| [`ezcDocumentDocbookToHtmlBlockquoteHandler`](./docs/classes/ezcDocumentDocbookToHtmlBlockquoteHandler.md) | Visit blockquotes|
| [`ezcDocumentDocbookToHtmlCommentHandler`](./docs/classes/ezcDocumentDocbookToHtmlCommentHandler.md) | Visit docbook comment.|
| [`ezcDocumentDocbookToHtmlConverter`](./docs/classes/ezcDocumentDocbookToHtmlConverter.md) | Converter for docbook to XHtml with a PHP callback based mechanism, for fast<br />and easy PHP based extensible transformations.|
| [`ezcDocumentDocbookToHtmlConverterOptions`](./docs/classes/ezcDocumentDocbookToHtmlConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class|
| [`ezcDocumentDocbookToHtmlDefinitionListEntryHandler`](./docs/classes/ezcDocumentDocbookToHtmlDefinitionListEntryHandler.md) | Visit definition list entries|
| [`ezcDocumentDocbookToHtmlEmphasisHandler`](./docs/classes/ezcDocumentDocbookToHtmlEmphasisHandler.md) | Visit emphasis|
| [`ezcDocumentDocbookToHtmlExternalLinkHandler`](./docs/classes/ezcDocumentDocbookToHtmlExternalLinkHandler.md) | Visit external links|
| [`ezcDocumentDocbookToHtmlFootnoteHandler`](./docs/classes/ezcDocumentDocbookToHtmlFootnoteHandler.md) | Visit footnotes|
| [`ezcDocumentDocbookToHtmlHeadHandler`](./docs/classes/ezcDocumentDocbookToHtmlHeadHandler.md) | Visit docbook sectioninfo elements|
| [`ezcDocumentDocbookToHtmlIgnoreHandler`](./docs/classes/ezcDocumentDocbookToHtmlIgnoreHandler.md) | Handler for elements, which are safe to ignore|
| [`ezcDocumentDocbookToHtmlInternalLinkHandler`](./docs/classes/ezcDocumentDocbookToHtmlInternalLinkHandler.md) | Visit internal links.|
| [`ezcDocumentDocbookToHtmlLiteralLayoutHandler`](./docs/classes/ezcDocumentDocbookToHtmlLiteralLayoutHandler.md) | Visit literallayout elements|
| [`ezcDocumentDocbookToHtmlMappingHandler`](./docs/classes/ezcDocumentDocbookToHtmlMappingHandler.md) | Simple mapping handler|
| [`ezcDocumentDocbookToHtmlMediaObjectHandler`](./docs/classes/ezcDocumentDocbookToHtmlMediaObjectHandler.md) | Visit media objects|
| [`ezcDocumentDocbookToHtmlParagraphHandler`](./docs/classes/ezcDocumentDocbookToHtmlParagraphHandler.md) | Visit paragraphs|
| [`ezcDocumentDocbookToHtmlSectionHandler`](./docs/classes/ezcDocumentDocbookToHtmlSectionHandler.md) | Visit docbook sections|
| [`ezcDocumentDocbookToHtmlSpecialParagraphHandler`](./docs/classes/ezcDocumentDocbookToHtmlSpecialParagraphHandler.md) | Visit special paragraphs|
| [`ezcDocumentDocbookToHtmlTableCellHandler`](./docs/classes/ezcDocumentDocbookToHtmlTableCellHandler.md) | Visit table cells|
| [`ezcDocumentDocbookToHtmlXsltConverter`](./docs/classes/ezcDocumentDocbookToHtmlXsltConverter.md) | Converter for Docbook documents to XHtml using an available XSLT.|
| [`ezcDocumentDocbookToHtmlXsltConverterOptions`](./docs/classes/ezcDocumentDocbookToHtmlXsltConverterOptions.md) | Class containing the basic options for the docbook to HTMl conversion.|
| [`ezcDocumentDocbookToOdtAnchorHandler`](./docs/classes/ezcDocumentDocbookToOdtAnchorHandler.md) | Visit anchors.|
| [`ezcDocumentDocbookToOdtBaseHandler`](./docs/classes/ezcDocumentDocbookToOdtBaseHandler.md) | Base class for ODT visitor handlers.|
| [`ezcDocumentDocbookToOdtCommentHandler`](./docs/classes/ezcDocumentDocbookToOdtCommentHandler.md) | Visit comments.|
| [`ezcDocumentDocbookToOdtConverter`](./docs/classes/ezcDocumentDocbookToOdtConverter.md) | Converter for docbook to ODT with a PHP callback based mechanism, for fast<br />and easy PHP based extensible transformations.|
| [`ezcDocumentDocbookToOdtConverterOptions`](./docs/classes/ezcDocumentDocbookToOdtConverterOptions.md) | Class containing the basic options for the ezcDocumentToOdtConverter.|
| [`ezcDocumentDocbookToOdtFootnoteHandler`](./docs/classes/ezcDocumentDocbookToOdtFootnoteHandler.md) | Visit footnotes.|
| [`ezcDocumentDocbookToOdtIgnoreHandler`](./docs/classes/ezcDocumentDocbookToOdtIgnoreHandler.md) | Handler for elements, which are safe to be ignored.|
| [`ezcDocumentDocbookToOdtInlineHandler`](./docs/classes/ezcDocumentDocbookToOdtInlineHandler.md) | Visit inline elements.|
| [`ezcDocumentDocbookToOdtLinkHandler`](./docs/classes/ezcDocumentDocbookToOdtLinkHandler.md) | Visit links.|
| [`ezcDocumentDocbookToOdtListHandler`](./docs/classes/ezcDocumentDocbookToOdtListHandler.md) | Visit lists.|
| [`ezcDocumentDocbookToOdtLiteralLayoutHandler`](./docs/classes/ezcDocumentDocbookToOdtLiteralLayoutHandler.md) | Visit literallayout sections.|
| [`ezcDocumentDocbookToOdtMappingHandler`](./docs/classes/ezcDocumentDocbookToOdtMappingHandler.md) | Simple mapping handler|
| [`ezcDocumentDocbookToOdtMediaObjectHandler`](./docs/classes/ezcDocumentDocbookToOdtMediaObjectHandler.md) | Visit media objects.|
| [`ezcDocumentDocbookToOdtPageBreakHandler`](./docs/classes/ezcDocumentDocbookToOdtPageBreakHandler.md) | Visit page-breaks.|
| [`ezcDocumentDocbookToOdtParagraphHandler`](./docs/classes/ezcDocumentDocbookToOdtParagraphHandler.md) | Visit paragraphs.|
| [`ezcDocumentDocbookToOdtSectionHandler`](./docs/classes/ezcDocumentDocbookToOdtSectionHandler.md) | Visit docbook sections.|
| [`ezcDocumentDocbookToOdtTableHandler`](./docs/classes/ezcDocumentDocbookToOdtTableHandler.md) | Visit tables.|
| [`ezcDocumentDocbookToOdtUlinkHandler`](./docs/classes/ezcDocumentDocbookToOdtUlinkHandler.md) | Visit ulinks.|
| [`ezcDocumentDocbookToRstBaseHandler`](./docs/classes/ezcDocumentDocbookToRstBaseHandler.md) | Basic converter which stores a list of handlers for each node in the docbook<br />element tree. Those handlers will be executed for the elements, when found.|
| [`ezcDocumentDocbookToRstBeginPageHandler`](./docs/classes/ezcDocumentDocbookToRstBeginPageHandler.md) | Visit begin page elements|
| [`ezcDocumentDocbookToRstBlockquoteHandler`](./docs/classes/ezcDocumentDocbookToRstBlockquoteHandler.md) | Visit blockquotes|
| [`ezcDocumentDocbookToRstCitationHandler`](./docs/classes/ezcDocumentDocbookToRstCitationHandler.md) | Visit citations|
| [`ezcDocumentDocbookToRstCommentHandler`](./docs/classes/ezcDocumentDocbookToRstCommentHandler.md) | Visit docbook comment|
| [`ezcDocumentDocbookToRstConverter`](./docs/classes/ezcDocumentDocbookToRstConverter.md) | Converter for docbook to Rst with a PHP callback based mechanism, for fast<br />and easy PHP based extensible transformations.|
| [`ezcDocumentDocbookToRstConverterOptions`](./docs/classes/ezcDocumentDocbookToRstConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class|
| [`ezcDocumentDocbookToRstEmphasisHandler`](./docs/classes/ezcDocumentDocbookToRstEmphasisHandler.md) | Visit emphasis|
| [`ezcDocumentDocbookToRstExternalLinkHandler`](./docs/classes/ezcDocumentDocbookToRstExternalLinkHandler.md) | Visit external links|
| [`ezcDocumentDocbookToRstFootnoteHandler`](./docs/classes/ezcDocumentDocbookToRstFootnoteHandler.md) | Visit footnotes|
| [`ezcDocumentDocbookToRstHeadHandler`](./docs/classes/ezcDocumentDocbookToRstHeadHandler.md) | Visit docbook sectioninfo elements|
| [`ezcDocumentDocbookToRstIgnoreHandler`](./docs/classes/ezcDocumentDocbookToRstIgnoreHandler.md) | Handler for elements, which are safe to ignore|
| [`ezcDocumentDocbookToRstInlineMediaObjectHandler`](./docs/classes/ezcDocumentDocbookToRstInlineMediaObjectHandler.md) | Visit inline media objects|
| [`ezcDocumentDocbookToRstInternalLinkHandler`](./docs/classes/ezcDocumentDocbookToRstInternalLinkHandler.md) | Visit internal links.|
| [`ezcDocumentDocbookToRstItemizedListHandler`](./docs/classes/ezcDocumentDocbookToRstItemizedListHandler.md) | Visit itemized list/bullet lists|
| [`ezcDocumentDocbookToRstLiteralHandler`](./docs/classes/ezcDocumentDocbookToRstLiteralHandler.md) | Visit inline literals|
| [`ezcDocumentDocbookToRstLiteralLayoutHandler`](./docs/classes/ezcDocumentDocbookToRstLiteralLayoutHandler.md) | Visit literallayout elements|
| [`ezcDocumentDocbookToRstMediaObjectHandler`](./docs/classes/ezcDocumentDocbookToRstMediaObjectHandler.md) | Visit media objects|
| [`ezcDocumentDocbookToRstOrderedListHandler`](./docs/classes/ezcDocumentDocbookToRstOrderedListHandler.md) | Visit itemized list/bullet lists|
| [`ezcDocumentDocbookToRstParagraphHandler`](./docs/classes/ezcDocumentDocbookToRstParagraphHandler.md) | Visit paragraphs|
| [`ezcDocumentDocbookToRstRecurseHandler`](./docs/classes/ezcDocumentDocbookToRstRecurseHandler.md) | Handler for elements, which are safe to ignore, but into which contents<br />should be recursed, so the childs are still converted.|
| [`ezcDocumentDocbookToRstSectionHandler`](./docs/classes/ezcDocumentDocbookToRstSectionHandler.md) | Visit docbook sections|
| [`ezcDocumentDocbookToRstSpecialParagraphHandler`](./docs/classes/ezcDocumentDocbookToRstSpecialParagraphHandler.md) | Visit special paragraphs.|
| [`ezcDocumentDocbookToRstTableHandler`](./docs/classes/ezcDocumentDocbookToRstTableHandler.md) | Visit tables|
| [`ezcDocumentDocbookToRstVariableListHandler`](./docs/classes/ezcDocumentDocbookToRstVariableListHandler.md) | Visit itemized list/bullet lists|
| [`ezcDocumentDocbookToWikiBaseHandler`](./docs/classes/ezcDocumentDocbookToWikiBaseHandler.md) | Basic converter which stores a list of handlers for each node in the docbook<br />element tree. Those handlers will be executed for the elements, when found.|
| [`ezcDocumentDocbookToWikiBeginPageHandler`](./docs/classes/ezcDocumentDocbookToWikiBeginPageHandler.md) | Visit begin page elements|
| [`ezcDocumentDocbookToWikiConverter`](./docs/classes/ezcDocumentDocbookToWikiConverter.md) | Converter for docbook to Wiki with a PHP callback based mechanism, for fast<br />and easy PHP based extensible transformations.|
| [`ezcDocumentDocbookToWikiConverterOptions`](./docs/classes/ezcDocumentDocbookToWikiConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class|
| [`ezcDocumentDocbookToWikiEmphasisHandler`](./docs/classes/ezcDocumentDocbookToWikiEmphasisHandler.md) | Visit emphasis.|
| [`ezcDocumentDocbookToWikiExternalLinkHandler`](./docs/classes/ezcDocumentDocbookToWikiExternalLinkHandler.md) | Visit external links.|
| [`ezcDocumentDocbookToWikiIgnoreHandler`](./docs/classes/ezcDocumentDocbookToWikiIgnoreHandler.md) | Handler for elements, which are safe to ignore.|
| [`ezcDocumentDocbookToWikiInlineMediaObjectHandler`](./docs/classes/ezcDocumentDocbookToWikiInlineMediaObjectHandler.md) | Visit inline media objects|
| [`ezcDocumentDocbookToWikiInternalLinkHandler`](./docs/classes/ezcDocumentDocbookToWikiInternalLinkHandler.md) | Visit internal links.|
| [`ezcDocumentDocbookToWikiItemizedListHandler`](./docs/classes/ezcDocumentDocbookToWikiItemizedListHandler.md) | Visit itemized list/bullet lists.|
| [`ezcDocumentDocbookToWikiLiteralHandler`](./docs/classes/ezcDocumentDocbookToWikiLiteralHandler.md) | Visit inline literals|
| [`ezcDocumentDocbookToWikiLiteralLayoutHandler`](./docs/classes/ezcDocumentDocbookToWikiLiteralLayoutHandler.md) | Visit literallayout elements|
| [`ezcDocumentDocbookToWikiMediaObjectHandler`](./docs/classes/ezcDocumentDocbookToWikiMediaObjectHandler.md) | Visit media objects|
| [`ezcDocumentDocbookToWikiOrderedListHandler`](./docs/classes/ezcDocumentDocbookToWikiOrderedListHandler.md) | Visit ordered list/enumerated lists|
| [`ezcDocumentDocbookToWikiParagraphHandler`](./docs/classes/ezcDocumentDocbookToWikiParagraphHandler.md) | Visit paragraphs|
| [`ezcDocumentDocbookToWikiRecurseHandler`](./docs/classes/ezcDocumentDocbookToWikiRecurseHandler.md) | Handler for elements, which are safe to ignore|
| [`ezcDocumentDocbookToWikiSectionHandler`](./docs/classes/ezcDocumentDocbookToWikiSectionHandler.md) | Visit docbook sections|
| [`ezcDocumentDocbookToWikiTableHandler`](./docs/classes/ezcDocumentDocbookToWikiTableHandler.md) | Visit tables.|
| [`ezcDocumentDocumentTests`](./docs/classes/ezcDocumentDocumentTests.md) | Test suite for class.|
| [`ezcDocumentDokuwikiWiki`](./docs/classes/ezcDocumentDokuwikiWiki.md) | Document handler for Dokuwiki wiki text documents.|
| [`ezcDocumentElementVisitorConverter`](./docs/classes/ezcDocumentElementVisitorConverter.md) | Basic converter which stores a list of handlers for each node in the docbook<br />element tree. Those handlers will be executed for the elements, when found.|
| [`ezcDocumentElementVisitorHandler`](./docs/classes/ezcDocumentElementVisitorHandler.md) | Abstract base handler class for conversions done by converters extending<br />from ezcDocumentDocbookElementVisitorConverter.|
| [`ezcDocumentErroneousXmlException`](./docs/classes/ezcDocumentErroneousXmlException.md) | General exception container for the Document component.|
| [`ezcDocumentException`](./docs/classes/ezcDocumentException.md) | General exception container for the Document component.|
| [`ezcDocumentEzXml`](./docs/classes/ezcDocumentEzXml.md) | The document handler for the eZ Publish 3 XML document markup.|
| [`ezcDocumentEzXmlDummyLinkConverter`](./docs/classes/ezcDocumentEzXmlDummyLinkConverter.md) | Class for conversions of links, given as natural URLs into the eZXml storage<br />format, which may result in urlIds, nodeIds, or similar.|
| [`ezcDocumentEzXmlDummyLinkProvider`](./docs/classes/ezcDocumentEzXmlDummyLinkProvider.md) | Class providing access to links referenced in eZXml documents by url IDs,<br />node IDs or object IDs.|
| [`ezcDocumentEzXmlLinkConverter`](./docs/classes/ezcDocumentEzXmlLinkConverter.md) | Class for conversions of links, given as natural URLs into the eZXml storage<br />format, which may result in urlIds, nodeIds, or similar.|
| [`ezcDocumentEzXmlLinkProvider`](./docs/classes/ezcDocumentEzXmlLinkProvider.md) | Class providing access to links referenced in eZXml documents by url IDs,<br />node IDs or object IDs.|
| [`ezcDocumentEzXmlOptions`](./docs/classes/ezcDocumentEzXmlOptions.md) | Class containing the basic options for the ezcDocumentEzXml class|
| [`ezcDocumentEzXmlOptionsTests`](./docs/classes/ezcDocumentEzXmlOptionsTests.md) | Test suite for class.|
| [`ezcDocumentEzXmlTests`](./docs/classes/ezcDocumentEzXmlTests.md) | Test suite for class.|
| [`ezcDocumentEzXmlToDocbookAnchorHandler`](./docs/classes/ezcDocumentEzXmlToDocbookAnchorHandler.md) | Visit anchor elements.|
| [`ezcDocumentEzXmlToDocbookConverter`](./docs/classes/ezcDocumentEzXmlToDocbookConverter.md) | Converter for docbook to XDocbook with a PHP callback based mechanism, for fast<br />and easy PHP based extensible transformations.|
| [`ezcDocumentEzXmlToDocbookConverterOptions`](./docs/classes/ezcDocumentEzXmlToDocbookConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class.|
| [`ezcDocumentEzXmlToDocbookEmphasisHandler`](./docs/classes/ezcDocumentEzXmlToDocbookEmphasisHandler.md) | Visit emphasis.|
| [`ezcDocumentEzXmlToDocbookHeaderHandler`](./docs/classes/ezcDocumentEzXmlToDocbookHeaderHandler.md) | Visit eZXml header.|
| [`ezcDocumentEzXmlToDocbookLineHandler`](./docs/classes/ezcDocumentEzXmlToDocbookLineHandler.md) | Visit eZXml line elements.|
| [`ezcDocumentEzXmlToDocbookLinkHandler`](./docs/classes/ezcDocumentEzXmlToDocbookLinkHandler.md) | Visit links.|
| [`ezcDocumentEzXmlToDocbookListHandler`](./docs/classes/ezcDocumentEzXmlToDocbookListHandler.md) | Visit eZXml lists.|
| [`ezcDocumentEzXmlToDocbookLiteralHandler`](./docs/classes/ezcDocumentEzXmlToDocbookLiteralHandler.md) | Visit eZXml literals.|
| [`ezcDocumentEzXmlToDocbookMappingHandler`](./docs/classes/ezcDocumentEzXmlToDocbookMappingHandler.md) | Simple mapping handler.|
| [`ezcDocumentEzXmlToDocbookTableCellHandler`](./docs/classes/ezcDocumentEzXmlToDocbookTableCellHandler.md) | Visit eZXml table cell.|
| [`ezcDocumentEzXmlToDocbookTableHandler`](./docs/classes/ezcDocumentEzXmlToDocbookTableHandler.md) | Visit eZXml table.|
| [`ezcDocumentEzXmlToDocbookTableRowHandler`](./docs/classes/ezcDocumentEzXmlToDocbookTableRowHandler.md) | Visit eZXml table row.|
| [`ezcDocumentHtmlConverterOptions`](./docs/classes/ezcDocumentHtmlConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class|
| [`ezcDocumentInvalidDocbookException`](./docs/classes/ezcDocumentInvalidDocbookException.md) | Exception thrown if an expectation to an incoming DocBook document is not<br />met.|
| [`ezcDocumentInvalidFontException`](./docs/classes/ezcDocumentInvalidFontException.md) | Exception thrown, when the RST visitor could not visit an AST node<br />properly.|
| [`ezcDocumentInvalidOdtException`](./docs/classes/ezcDocumentInvalidOdtException.md) | Exception thrown if an expectation to an incoming DocBook document is not<br />met during DocBook to ODT conversion.|
| [`ezcDocumentListBulletGuesser`](./docs/classes/ezcDocumentListBulletGuesser.md) | Simple mapping class to guess bullet charachters from mark names.|
| [`ezcDocumentListBulletGuesserTest`](./docs/classes/ezcDocumentListBulletGuesserTest.md) | |
| [`ezcDocumentListItemGenerator`](./docs/classes/ezcDocumentListItemGenerator.md) | List item generator|
| [`ezcDocumentLocateableDomElement`](./docs/classes/ezcDocumentLocateableDomElement.md) | Custom DOMElement extension|
| [`ezcDocumentMissingVisitorException`](./docs/classes/ezcDocumentMissingVisitorException.md) | Exception thrown, when a visitor could not be found for a node/subtree.|
| [`ezcDocumentNoListItemGenerator`](./docs/classes/ezcDocumentNoListItemGenerator.md) | Numbered list item generator.|
| [`ezcDocumentNumberedListItemGenerator`](./docs/classes/ezcDocumentNumberedListItemGenerator.md) | Numbered list item generator.|
| [`ezcDocumentOdt`](./docs/classes/ezcDocumentOdt.md) | The document handler for Open Document Text (ODT) documents.|
| [`ezcDocumentOdtBaseFilter`](./docs/classes/ezcDocumentOdtBaseFilter.md) | Abstract base class for ODT filters, assigning semantic information to<br />ODT documents.|
| [`ezcDocumentOdtDefaultPcssConverter`](./docs/classes/ezcDocumentOdtDefaultPcssConverter.md) | Default style converter which converts just to &quot;fo:$stylename&quot;.|
| [`ezcDocumentOdtDocbookTests`](./docs/classes/ezcDocumentOdtDocbookTests.md) | Test suite for class.|
| [`ezcDocumentOdtElementBaseFilter`](./docs/classes/ezcDocumentOdtElementBaseFilter.md) | Basic filter class for ODT element filters.|
| [`ezcDocumentOdtElementFilter`](./docs/classes/ezcDocumentOdtElementFilter.md) | Filter, which assigns semantic information just on the base of ODT element<br />semantics to the tree.|
| [`ezcDocumentOdtElementFootnoteFilter`](./docs/classes/ezcDocumentOdtElementFootnoteFilter.md) | Filter for ODT &lt;text:note/&gt; elements.|
| [`ezcDocumentOdtElementFrameFilter`](./docs/classes/ezcDocumentOdtElementFrameFilter.md) | Filter for ODT &lt;draw:frame/&gt; elements.|
| [`ezcDocumentOdtElementHeaderFilter`](./docs/classes/ezcDocumentOdtElementHeaderFilter.md) | Filter for ODT &lt;text:h/&gt; elements.|
| [`ezcDocumentOdtElementHtmlTableFilter`](./docs/classes/ezcDocumentOdtElementHtmlTableFilter.md) | Filter for ODT &lt;table:table/&gt; and its child elements.|
| [`ezcDocumentOdtElementImageFilter`](./docs/classes/ezcDocumentOdtElementImageFilter.md) | Filter for ODT &lt;draw:image&gt; elements.|
| [`ezcDocumentOdtElementLinkFilter`](./docs/classes/ezcDocumentOdtElementLinkFilter.md) | Filter for ODT &lt;text:a/&gt; elements.|
| [`ezcDocumentOdtElementListFilter`](./docs/classes/ezcDocumentOdtElementListFilter.md) | Filter for ODT &lt;text:list/&gt; and &lt;text:list-item/&gt; elements.|
| [`ezcDocumentOdtElementParagraphFilter`](./docs/classes/ezcDocumentOdtElementParagraphFilter.md) | Filter for ODT &lt;text:p&gt; elements.|
| [`ezcDocumentOdtElementTableFilter`](./docs/classes/ezcDocumentOdtElementTableFilter.md) | Filter for ODT &lt;table:table&gt; elements.|
| [`ezcDocumentOdtElementWhitespaceFilter`](./docs/classes/ezcDocumentOdtElementWhitespaceFilter.md) | Filter for ODT &lt;text:s/&gt;, &lt;text:tab/&gt; and &lt;text:line-break/&gt; elements.|
| [`ezcDocumentOdtEmphasisStyleFilterRule`](./docs/classes/ezcDocumentOdtEmphasisStyleFilterRule.md) | Style filter rule to detect &lt;emphasis/&gt; elements.|
| [`ezcDocumentOdtFormattingProperties`](./docs/classes/ezcDocumentOdtFormattingProperties.md) | Class for representing formatting properties of a certain type.|
| [`ezcDocumentOdtFormattingPropertiesExistException`](./docs/classes/ezcDocumentOdtFormattingPropertiesExistException.md) | Exception thrown if formatting properties of the same type are set twice in<br />an {@link ezcDocumentOdtFormattingPropertyCollection}.|
| [`ezcDocumentOdtFormattingPropertiesTest`](./docs/classes/ezcDocumentOdtFormattingPropertiesTest.md) | Test suite for class.|
| [`ezcDocumentOdtFormattingPropertyCollection`](./docs/classes/ezcDocumentOdtFormattingPropertyCollection.md) | Class to carry and manage {@link ezcDocumentOdtFormattingProperties}.|
| [`ezcDocumentOdtFormattingPropertyCollectionTest`](./docs/classes/ezcDocumentOdtFormattingPropertyCollectionTest.md) | Test suite for class.|
| [`ezcDocumentOdtImageFilter`](./docs/classes/ezcDocumentOdtImageFilter.md) | Filter which extracts images from FODT (flat ODT) documents and stores them<br />in the desired directory.|
| [`ezcDocumentOdtImageLocator`](./docs/classes/ezcDocumentOdtImageLocator.md) | Class to locate images in DocBook to ODT conversion.|
| [`ezcDocumentOdtListLevelStyle`](./docs/classes/ezcDocumentOdtListLevelStyle.md) | Base class for list-level styles.|
| [`ezcDocumentOdtListLevelStyleBullet`](./docs/classes/ezcDocumentOdtListLevelStyleBullet.md) | Bullet list-level style.|
| [`ezcDocumentOdtListLevelStyleFilterRule`](./docs/classes/ezcDocumentOdtListLevelStyleFilterRule.md) | Style filter rule to distinguish list types.|
| [`ezcDocumentOdtListLevelStyleNumber`](./docs/classes/ezcDocumentOdtListLevelStyleNumber.md) | Number list-level style.|
| [`ezcDocumentOdtListLevelStyleTest`](./docs/classes/ezcDocumentOdtListLevelStyleTest.md) | Test suite for class.|
| [`ezcDocumentOdtListStyle`](./docs/classes/ezcDocumentOdtListStyle.md) | Class for ODT list styles.|
| [`ezcDocumentOdtListStyleGenerator`](./docs/classes/ezcDocumentOdtListStyleGenerator.md) | Class to generate styles for lists (&lt;text:list/&gt;).|
| [`ezcDocumentOdtMetaGenerator`](./docs/classes/ezcDocumentOdtMetaGenerator.md) | Generates basic meta data for ODT files.|
| [`ezcDocumentOdtMetaGeneratorTest`](./docs/classes/ezcDocumentOdtMetaGeneratorTest.md) | Test suite for class.|
| [`ezcDocumentOdtOptions`](./docs/classes/ezcDocumentOdtOptions.md) | Class containing the basic options for the ezcDocumentOdt class.|
| [`ezcDocumentOdtParagraphStyleGenerator`](./docs/classes/ezcDocumentOdtParagraphStyleGenerator.md) | Class to generate styles for paragraph elements (&lt;text:h/&gt; and &lt;text:p/&gt;).|
| [`ezcDocumentOdtPcssBorderConverter`](./docs/classes/ezcDocumentOdtPcssBorderConverter.md) | Style converter for border style properties.|
| [`ezcDocumentOdtPcssColorConverter`](./docs/classes/ezcDocumentOdtPcssColorConverter.md) | Style converter for color style properties.|
| [`ezcDocumentOdtPcssConverterManager`](./docs/classes/ezcDocumentOdtPcssConverterManager.md) | Manager for ezcDocumentOdtPcssConverter instances.|
| [`ezcDocumentOdtPcssConverterTools`](./docs/classes/ezcDocumentOdtPcssConverterTools.md) | Tool class for ODT PCSS styles.|
| [`ezcDocumentOdtPcssConvertersTest`](./docs/classes/ezcDocumentOdtPcssConvertersTest.md) | Test suite for class.|
| [`ezcDocumentOdtPcssFontConverter`](./docs/classes/ezcDocumentOdtPcssFontConverter.md) | Style converter for font style properties.|
| [`ezcDocumentOdtPcssFontNameConverter`](./docs/classes/ezcDocumentOdtPcssFontNameConverter.md) | Style converter for the special font-name style property.|
| [`ezcDocumentOdtPcssFontSizeConverter`](./docs/classes/ezcDocumentOdtPcssFontSizeConverter.md) | Style converter for font-size style properties.|
| [`ezcDocumentOdtPcssFontStylePreprocessor`](./docs/classes/ezcDocumentOdtPcssFontStylePreprocessor.md) | Font style pre-processor.|
| [`ezcDocumentOdtPcssListStylePreprocessor`](./docs/classes/ezcDocumentOdtPcssListStylePreprocessor.md) | List style pre-processor.|
| [`ezcDocumentOdtPcssMarginConverter`](./docs/classes/ezcDocumentOdtPcssMarginConverter.md) | Style converter for margin style properties.|
| [`ezcDocumentOdtPcssParagraphStylePreprocessor`](./docs/classes/ezcDocumentOdtPcssParagraphStylePreprocessor.md) | Paragraph style pre-processor.|
| [`ezcDocumentOdtPcssStyler`](./docs/classes/ezcDocumentOdtPcssStyler.md) | PCSS based ODT styler.|
| [`ezcDocumentOdtPcssTextDecorationConverter`](./docs/classes/ezcDocumentOdtPcssTextDecorationConverter.md) | Style converter for text-decoration style properties.|
| [`ezcDocumentOdtStyle`](./docs/classes/ezcDocumentOdtStyle.md) | Class for ODT styles.|
| [`ezcDocumentOdtStyleExtractor`](./docs/classes/ezcDocumentOdtStyleExtractor.md) | Extracts style information from an ODT document.|
| [`ezcDocumentOdtStyleExtractorTest`](./docs/classes/ezcDocumentOdtStyleExtractorTest.md) | Test suite for class.|
| [`ezcDocumentOdtStyleFilter`](./docs/classes/ezcDocumentOdtStyleFilter.md) | Filter mechanism based on ODT style information.|
| [`ezcDocumentOdtStyleGenerator`](./docs/classes/ezcDocumentOdtStyleGenerator.md) | Base class for style generators.|
| [`ezcDocumentOdtStyleInferencer`](./docs/classes/ezcDocumentOdtStyleInferencer.md) | An instance of this class inferences a style for an ODT element.|
| [`ezcDocumentOdtStyleInformation`](./docs/classes/ezcDocumentOdtStyleInformation.md) | Struct class to cover style elements from an ODT document.|
| [`ezcDocumentOdtStyleListPropertyGenerator`](./docs/classes/ezcDocumentOdtStyleListPropertyGenerator.md) | List property generator.|
| [`ezcDocumentOdtStyleParagraphPropertyGenerator`](./docs/classes/ezcDocumentOdtStyleParagraphPropertyGenerator.md) | Paragraph property generator.|
| [`ezcDocumentOdtStyleParagraphPropertyGeneratorTest`](./docs/classes/ezcDocumentOdtStyleParagraphPropertyGeneratorTest.md) | Test suite for class.|
| [`ezcDocumentOdtStyleParser`](./docs/classes/ezcDocumentOdtStyleParser.md) | Parses ODT styles.|
| [`ezcDocumentOdtStyleParserTest`](./docs/classes/ezcDocumentOdtStyleParserTest.md) | Test suite for class.|
| [`ezcDocumentOdtStylePropertyGenerator`](./docs/classes/ezcDocumentOdtStylePropertyGenerator.md) | Base class for property generators.|
| [`ezcDocumentOdtStylePropertyGeneratorTest`](./docs/classes/ezcDocumentOdtStylePropertyGeneratorTest.md) | Test suite for class.|
| [`ezcDocumentOdtStyleTableCellPropertyGenerator`](./docs/classes/ezcDocumentOdtStyleTableCellPropertyGenerator.md) | Table cell property generator.|
| [`ezcDocumentOdtStyleTablePropertyGenerator`](./docs/classes/ezcDocumentOdtStyleTablePropertyGenerator.md) | Table property generator.|
| [`ezcDocumentOdtStyleTableRowPropertyGenerator`](./docs/classes/ezcDocumentOdtStyleTableRowPropertyGenerator.md) | Table row property generator.|
| [`ezcDocumentOdtStyleTest`](./docs/classes/ezcDocumentOdtStyleTest.md) | Test suite for class.|
| [`ezcDocumentOdtStyleTextPropertyGenerator`](./docs/classes/ezcDocumentOdtStyleTextPropertyGenerator.md) | Text property generator.|
| [`ezcDocumentOdtStyleTextPropertyGeneratorTest`](./docs/classes/ezcDocumentOdtStyleTextPropertyGeneratorTest.md) | Test suite for class.|
| [`ezcDocumentOdtTableCellStyleGenerator`](./docs/classes/ezcDocumentOdtTableCellStyleGenerator.md) | Class to generate styles for table-cell elements.|
| [`ezcDocumentOdtTableRowStyleGenerator`](./docs/classes/ezcDocumentOdtTableRowStyleGenerator.md) | Class to generate styles for &lt;table:table-row/&gt; elements.|
| [`ezcDocumentOdtTableStyleGenerator`](./docs/classes/ezcDocumentOdtTableStyleGenerator.md) | Class to generate styles for table elements.|
| [`ezcDocumentOdtTestStyler`](./docs/classes/ezcDocumentOdtTestStyler.md) | |
| [`ezcDocumentOdtTextProcessor`](./docs/classes/ezcDocumentOdtTextProcessor.md) | Processes text nodes with significant whitespaces.|
| [`ezcDocumentOdtTextProcessorTest`](./docs/classes/ezcDocumentOdtTextProcessorTest.md) | Test suite for class.|
| [`ezcDocumentOdtTextStyleGenerator`](./docs/classes/ezcDocumentOdtTextStyleGenerator.md) | Class to generate styles for text elements (&lt;text:span/&gt;).|
| [`ezcDocumentOptions`](./docs/classes/ezcDocumentOptions.md) | Class containing the basic options for the ezcDocument|
| [`ezcDocumentOptionsOdtTests`](./docs/classes/ezcDocumentOptionsOdtTests.md) | Test suite for class.|
| [`ezcDocumentOptionsTestCase`](./docs/classes/ezcDocumentOptionsTestCase.md) | Test suite for class.|
| [`ezcDocumentOptionsTests`](./docs/classes/ezcDocumentOptionsTests.md) | Test suite for class.|
| [`ezcDocumentOptionsXmlBaseTests`](./docs/classes/ezcDocumentOptionsXmlBaseTests.md) | Test suite for class.|
| [`ezcDocumentParser`](./docs/classes/ezcDocumentParser.md) | A base class for document parsers|
| [`ezcDocumentParserException`](./docs/classes/ezcDocumentParserException.md) | Exception thrown, when the RST parser could not parse asome token sequence.|
| [`ezcDocumentParserOptions`](./docs/classes/ezcDocumentParserOptions.md) | Class containing the basic options for the ezcDocumentParser.|
| [`ezcDocumentParserTests`](./docs/classes/ezcDocumentParserTests.md) | Test suite for class.|
| [`ezcDocumentPcssDeclarationDirective`](./docs/classes/ezcDocumentPcssDeclarationDirective.md) | Pdf CSS layout directive.|
| [`ezcDocumentPcssDirective`](./docs/classes/ezcDocumentPcssDirective.md) | Pdf CSS layout directive.|
| [`ezcDocumentPcssLayoutDirective`](./docs/classes/ezcDocumentPcssLayoutDirective.md) | Pdf CSS layout directive.|
| [`ezcDocumentPcssLocationIdTests`](./docs/classes/ezcDocumentPcssLocationIdTests.md) | Test suite for class.|
| [`ezcDocumentPcssMatchLocationIdTests`](./docs/classes/ezcDocumentPcssMatchLocationIdTests.md) | Test suite for class.|
| [`ezcDocumentPcssMeasure`](./docs/classes/ezcDocumentPcssMeasure.md) | Pdf measure wrapper, including measure conversions|
| [`ezcDocumentPcssMeasureTests`](./docs/classes/ezcDocumentPcssMeasureTests.md) | Test suite for class.|
| [`ezcDocumentPcssParser`](./docs/classes/ezcDocumentPcssParser.md) | Parser for simplified CSS rules for PDF layout specifications|
| [`ezcDocumentPcssParserTests`](./docs/classes/ezcDocumentPcssParserTests.md) | Test suite for class.|
| [`ezcDocumentPcssStyleBorderBoxValue`](./docs/classes/ezcDocumentPcssStyleBorderBoxValue.md) | Style directive border box value representation.|
| [`ezcDocumentPcssStyleBorderValue`](./docs/classes/ezcDocumentPcssStyleBorderValue.md) | Style directive border value representation.|
| [`ezcDocumentPcssStyleBoxValue`](./docs/classes/ezcDocumentPcssStyleBoxValue.md) | Abstract value tpye for box value representations.|
| [`ezcDocumentPcssStyleColorBoxValue`](./docs/classes/ezcDocumentPcssStyleColorBoxValue.md) | Style directive color box value representation|
| [`ezcDocumentPcssStyleColorValue`](./docs/classes/ezcDocumentPcssStyleColorValue.md) | Style directive color value representation.|
| [`ezcDocumentPcssStyleInferenceTests`](./docs/classes/ezcDocumentPcssStyleInferenceTests.md) | Test suite for class.|
| [`ezcDocumentPcssStyleInferencer`](./docs/classes/ezcDocumentPcssStyleInferencer.md) | Style inferencer|
| [`ezcDocumentPcssStyleIntValue`](./docs/classes/ezcDocumentPcssStyleIntValue.md) | Style directive integer value representation|
| [`ezcDocumentPcssStyleLineBoxValue`](./docs/classes/ezcDocumentPcssStyleLineBoxValue.md) | Style directive line box value representation|
| [`ezcDocumentPcssStyleLineValue`](./docs/classes/ezcDocumentPcssStyleLineValue.md) | Style directive line style value representation|
| [`ezcDocumentPcssStyleListValue`](./docs/classes/ezcDocumentPcssStyleListValue.md) | Style directive list value representation|
| [`ezcDocumentPcssStyleMeasureBoxValue`](./docs/classes/ezcDocumentPcssStyleMeasureBoxValue.md) | Style directive measure box value representation|
| [`ezcDocumentPcssStyleMeasureValue`](./docs/classes/ezcDocumentPcssStyleMeasureValue.md) | Style directive measure value representation|
| [`ezcDocumentPcssStyleSrcValue`](./docs/classes/ezcDocumentPcssStyleSrcValue.md) | Style directive source value representation|
| [`ezcDocumentPcssStyleStringValue`](./docs/classes/ezcDocumentPcssStyleStringValue.md) | Style directive string value representation|
| [`ezcDocumentPcssStyleValue`](./docs/classes/ezcDocumentPcssStyleValue.md) | Style directive value representation.|
| [`ezcDocumentPcssValueParserTests`](./docs/classes/ezcDocumentPcssValueParserTests.md) | Test suite for class.|
| [`ezcDocumentPdf`](./docs/classes/ezcDocumentPdf.md) | Document handler for PDF documents.|
| [`ezcDocumentPdfBlockRenderer`](./docs/classes/ezcDocumentPdfBlockRenderer.md) | General block renderer.|
| [`ezcDocumentPdfBlockquoteRenderer`](./docs/classes/ezcDocumentPdfBlockquoteRenderer.md) | Renders a blockquote.|
| [`ezcDocumentPdfBlockquoteRendererTests`](./docs/classes/ezcDocumentPdfBlockquoteRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfBoundingBox`](./docs/classes/ezcDocumentPdfBoundingBox.md) | Bounding box|
| [`ezcDocumentPdfDefaultHyphenator`](./docs/classes/ezcDocumentPdfDefaultHyphenator.md) | Default hyphenation implementation, which does no word splitting at all.|
| [`ezcDocumentPdfDefaultTableColumnWidthCalculator`](./docs/classes/ezcDocumentPdfDefaultTableColumnWidthCalculator.md) | Table column width calculator|
| [`ezcDocumentPdfDefaultTokenizer`](./docs/classes/ezcDocumentPdfDefaultTokenizer.md) | Tokenizer implementation for common texts, using whitespaces as word<br />seperators.|
| [`ezcDocumentPdfDriver`](./docs/classes/ezcDocumentPdfDriver.md) | Abstract base class for driver implementations.|
| [`ezcDocumentPdfDriverHaruTests`](./docs/classes/ezcDocumentPdfDriverHaruTests.md) | Test suite for class.|
| [`ezcDocumentPdfDriverSvgTests`](./docs/classes/ezcDocumentPdfDriverSvgTests.md) | Test suite for class.|
| [`ezcDocumentPdfDriverTcpdfTests`](./docs/classes/ezcDocumentPdfDriverTcpdfTests.md) | Test suite for class.|
| [`ezcDocumentPdfDriverTests`](./docs/classes/ezcDocumentPdfDriverTests.md) | Test suite for class.|
| [`ezcDocumentPdfFooterOptions`](./docs/classes/ezcDocumentPdfFooterOptions.md) | Class containing the basic options for the ezcDocumentDocbook class|
| [`ezcDocumentPdfFooterOptionsTests`](./docs/classes/ezcDocumentPdfFooterOptionsTests.md) | Test suite for class.|
| [`ezcDocumentPdfFooterPdfPart`](./docs/classes/ezcDocumentPdfFooterPdfPart.md) | Basic foot class, which renders a simple page footer including information<br />from the document.|
| [`ezcDocumentPdfHaruDriver`](./docs/classes/ezcDocumentPdfHaruDriver.md) | Pdf driver based on pecl/haru|
| [`ezcDocumentPdfHeaderPdfPart`](./docs/classes/ezcDocumentPdfHeaderPdfPart.md) | Just an alias for the footer class, but will be positioned on the<br />top of a page by default.|
| [`ezcDocumentPdfHyphenator`](./docs/classes/ezcDocumentPdfHyphenator.md) | Abstract base class for hyphenation implementations.|
| [`ezcDocumentPdfHyphenatorTests`](./docs/classes/ezcDocumentPdfHyphenatorTests.md) | Test suite for class.|
| [`ezcDocumentPdfImage`](./docs/classes/ezcDocumentPdfImage.md) | PDF image handler|
| [`ezcDocumentPdfImageHandler`](./docs/classes/ezcDocumentPdfImageHandler.md) | PDF image handler|
| [`ezcDocumentPdfImageHandlerTests`](./docs/classes/ezcDocumentPdfImageHandlerTests.md) | Test suite for class.|
| [`ezcDocumentPdfListItemGeneratorTests`](./docs/classes/ezcDocumentPdfListItemGeneratorTests.md) | Test suite for class.|
| [`ezcDocumentPdfListItemRenderer`](./docs/classes/ezcDocumentPdfListItemRenderer.md) | Renders a list item.|
| [`ezcDocumentPdfListRenderer`](./docs/classes/ezcDocumentPdfListRenderer.md) | Renders a list.|
| [`ezcDocumentPdfListRendererTests`](./docs/classes/ezcDocumentPdfListRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfLiteralBlockRenderer`](./docs/classes/ezcDocumentPdfLiteralBlockRenderer.md) | Renders a literal block/code section.|
| [`ezcDocumentPdfLiteralTokenizer`](./docs/classes/ezcDocumentPdfLiteralTokenizer.md) | Tokenizer implementation for literal blocks, preserving whitespaces.|
| [`ezcDocumentPdfLiteralTokenizerTests`](./docs/classes/ezcDocumentPdfLiteralTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentPdfLiterallayoutRendererTests`](./docs/classes/ezcDocumentPdfLiterallayoutRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfMainRenderer`](./docs/classes/ezcDocumentPdfMainRenderer.md) | Main PDF renderer class, dispatching to sub renderer, maintaining page<br />contexts and transactions.|
| [`ezcDocumentPdfMainRendererTests`](./docs/classes/ezcDocumentPdfMainRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfMediaObjectRenderer`](./docs/classes/ezcDocumentPdfMediaObjectRenderer.md) | Media object renderer.|
| [`ezcDocumentPdfMediaObjectRendererTests`](./docs/classes/ezcDocumentPdfMediaObjectRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfOptions`](./docs/classes/ezcDocumentPdfOptions.md) | Class containing the basic options for the ezcDocumentDocbook class.|
| [`ezcDocumentPdfOptionsTests`](./docs/classes/ezcDocumentPdfOptionsTests.md) | Test suite for class.|
| [`ezcDocumentPdfPage`](./docs/classes/ezcDocumentPdfPage.md) | PDF page class|
| [`ezcDocumentPdfPageTests`](./docs/classes/ezcDocumentPdfPageTests.md) | Test suite for class.|
| [`ezcDocumentPdfParagraphRendererTests`](./docs/classes/ezcDocumentPdfParagraphRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfPart`](./docs/classes/ezcDocumentPdfPart.md) | Abstract base class for additional PDF parts|
| [`ezcDocumentPdfPhpImageHandler`](./docs/classes/ezcDocumentPdfPhpImageHandler.md) | PHP image handler|
| [`ezcDocumentPdfRenderRtlTests`](./docs/classes/ezcDocumentPdfRenderRtlTests.md) | Test suite for class.|
| [`ezcDocumentPdfRenderer`](./docs/classes/ezcDocumentPdfRenderer.md) | Abstract renderer base class|
| [`ezcDocumentPdfRendererFooterPartTests`](./docs/classes/ezcDocumentPdfRendererFooterPartTests.md) | Test suite for class.|
| [`ezcDocumentPdfRendererTextDecorationsTests`](./docs/classes/ezcDocumentPdfRendererTextDecorationsTests.md) | Test suite for class.|
| [`ezcDocumentPdfSvgDriver`](./docs/classes/ezcDocumentPdfSvgDriver.md) | SVG renderer for PDF driver, useful for manual introspection and test<br />comparisions.|
| [`ezcDocumentPdfTableColumnWidthCalculator`](./docs/classes/ezcDocumentPdfTableColumnWidthCalculator.md) | Table column width calculator|
| [`ezcDocumentPdfTableColumnWidthCalculatorTests`](./docs/classes/ezcDocumentPdfTableColumnWidthCalculatorTests.md) | Test suite for class.|
| [`ezcDocumentPdfTableRenderer`](./docs/classes/ezcDocumentPdfTableRenderer.md) | Renders a table.|
| [`ezcDocumentPdfTableRendererTests`](./docs/classes/ezcDocumentPdfTableRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfTcpdfDriver`](./docs/classes/ezcDocumentPdfTcpdfDriver.md) | Pdf driver based on TCPDF|
| [`ezcDocumentPdfTestCase`](./docs/classes/ezcDocumentPdfTestCase.md) | Base test suite for PDF tests, implementing an assertion on PDF<br />equality.|
| [`ezcDocumentPdfTests`](./docs/classes/ezcDocumentPdfTests.md) | Test suite for class.|
| [`ezcDocumentPdfTextBlockRenderer`](./docs/classes/ezcDocumentPdfTextBlockRenderer.md) | Text block renderer|
| [`ezcDocumentPdfTextBoxRenderer`](./docs/classes/ezcDocumentPdfTextBoxRenderer.md) | Renders a single text box|
| [`ezcDocumentPdfTextBoxRendererBaseTests`](./docs/classes/ezcDocumentPdfTextBoxRendererBaseTests.md) | Test suite for class.|
| [`ezcDocumentPdfTextBoxRendererTests`](./docs/classes/ezcDocumentPdfTextBoxRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfTitleRenderer`](./docs/classes/ezcDocumentPdfTitleRenderer.md) | Title renderer|
| [`ezcDocumentPdfTokenizer`](./docs/classes/ezcDocumentPdfTokenizer.md) | Abstract base class for tokenizer implementations.|
| [`ezcDocumentPdfTokenizerTests`](./docs/classes/ezcDocumentPdfTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentPdfTransactionalDriverWrapper`](./docs/classes/ezcDocumentPdfTransactionalDriverWrapper.md) | PDF driver proxy, which records write calls to proxied driver, wraps them<br />into transactions to optionally revert or commit them later.|
| [`ezcDocumentPdfTransactionalDriverWrapperState`](./docs/classes/ezcDocumentPdfTransactionalDriverWrapperState.md) | Driver wrapper state.|
| [`ezcDocumentPdfTransactionalDriverWrapperTests`](./docs/classes/ezcDocumentPdfTransactionalDriverWrapperTests.md) | Test suite for class.|
| [`ezcDocumentPdfVariableListRendererTests`](./docs/classes/ezcDocumentPdfVariableListRendererTests.md) | Test suite for class.|
| [`ezcDocumentPdfWrappingTextBoxRenderer`](./docs/classes/ezcDocumentPdfWrappingTextBoxRenderer.md) | Renders an optionally wrapped text box|
| [`ezcDocumentPropertyContainerDomElement`](./docs/classes/ezcDocumentPropertyContainerDomElement.md) | Wrapper class around DOMElement to store additional information<br />associated with DOMElement nodes.|
| [`ezcDocumentRomanListItemGenerator`](./docs/classes/ezcDocumentRomanListItemGenerator.md) | Roman number list item generator.|
| [`ezcDocumentRst`](./docs/classes/ezcDocumentRst.md) | Document handler for RST text documents.|
| [`ezcDocumentRstAnonymousLinkNode`](./docs/classes/ezcDocumentRstAnonymousLinkNode.md) | The anonymous link AST node|
| [`ezcDocumentRstAnonymousReferenceNode`](./docs/classes/ezcDocumentRstAnonymousReferenceNode.md) | The AST node for anonymous hyperlink references|
| [`ezcDocumentRstAttentionDirective`](./docs/classes/ezcDocumentRstAttentionDirective.md) | Visitor for RST important directives|
| [`ezcDocumentRstBlockNode`](./docs/classes/ezcDocumentRstBlockNode.md) | The paragraph AST node|
| [`ezcDocumentRstBlockquoteAnnotationNode`](./docs/classes/ezcDocumentRstBlockquoteAnnotationNode.md) | The blockquote annotation AST node|
| [`ezcDocumentRstBlockquoteNode`](./docs/classes/ezcDocumentRstBlockquoteNode.md) | The blockquote AST node|
| [`ezcDocumentRstBulletListListNode`](./docs/classes/ezcDocumentRstBulletListListNode.md) | An aggregating AST node for bullet list items nodes|
| [`ezcDocumentRstBulletListNode`](./docs/classes/ezcDocumentRstBulletListNode.md) | The bullet list item AST node|
| [`ezcDocumentRstCommentNode`](./docs/classes/ezcDocumentRstCommentNode.md) | The comment AST node|
| [`ezcDocumentRstContentsDirective`](./docs/classes/ezcDocumentRstContentsDirective.md) | Visitor for RST contents directives|
| [`ezcDocumentRstDangerDirective`](./docs/classes/ezcDocumentRstDangerDirective.md) | Visitor for RST danger directives|
| [`ezcDocumentRstDefinitionListListNode`](./docs/classes/ezcDocumentRstDefinitionListListNode.md) | An aggregating AST node for definition list items nodes|
| [`ezcDocumentRstDefinitionListNode`](./docs/classes/ezcDocumentRstDefinitionListNode.md) | The definition list item AST node|
| [`ezcDocumentRstDirective`](./docs/classes/ezcDocumentRstDirective.md) | Visitor for RST directives|
| [`ezcDocumentRstDirectiveNode`](./docs/classes/ezcDocumentRstDirectiveNode.md) | The AST node for RST document directives|
| [`ezcDocumentRstDocbookVisitor`](./docs/classes/ezcDocumentRstDocbookVisitor.md) | Docbook visitor for the RST AST.|
| [`ezcDocumentRstDocbookVisitorTests`](./docs/classes/ezcDocumentRstDocbookVisitorTests.md) | Test suite for class.|
| [`ezcDocumentRstDocumentNode`](./docs/classes/ezcDocumentRstDocumentNode.md) | The document AST node|
| [`ezcDocumentRstEmphasisTextRole`](./docs/classes/ezcDocumentRstEmphasisTextRole.md) | Visitor for RST emphasis text roles.|
| [`ezcDocumentRstEnumeratedListListNode`](./docs/classes/ezcDocumentRstEnumeratedListListNode.md) | An aggregating AST node for enumeration list items nodes|
| [`ezcDocumentRstEnumeratedListNode`](./docs/classes/ezcDocumentRstEnumeratedListNode.md) | The enumeration lsit item AST node|
| [`ezcDocumentRstExternalReferenceNode`](./docs/classes/ezcDocumentRstExternalReferenceNode.md) | The external reference AST node|
| [`ezcDocumentRstFieldListNode`](./docs/classes/ezcDocumentRstFieldListNode.md) | The field list item AST node|
| [`ezcDocumentRstFigureDirective`](./docs/classes/ezcDocumentRstFigureDirective.md) | Visitor for RST image directives|
| [`ezcDocumentRstFootnoteNode`](./docs/classes/ezcDocumentRstFootnoteNode.md) | The footnote AST node|
| [`ezcDocumentRstImageDirective`](./docs/classes/ezcDocumentRstImageDirective.md) | Visitor for RST image directives|
| [`ezcDocumentRstIncludeDirective`](./docs/classes/ezcDocumentRstIncludeDirective.md) | Visitor for RST include directives|
| [`ezcDocumentRstLineBlockLineNode`](./docs/classes/ezcDocumentRstLineBlockLineNode.md) | The line block line nodes AST node|
| [`ezcDocumentRstLineBlockNode`](./docs/classes/ezcDocumentRstLineBlockNode.md) | The line block AST node|
| [`ezcDocumentRstLinkNode`](./docs/classes/ezcDocumentRstLinkNode.md) | The base link AST node|
| [`ezcDocumentRstLiteralBlockNode`](./docs/classes/ezcDocumentRstLiteralBlockNode.md) | The literal block AST node.|
| [`ezcDocumentRstLiteralNode`](./docs/classes/ezcDocumentRstLiteralNode.md) | The inline literal AST node|
| [`ezcDocumentRstLiteralTextRole`](./docs/classes/ezcDocumentRstLiteralTextRole.md) | Visitor for RST literal text roles.|
| [`ezcDocumentRstMarkupEmphasisNode`](./docs/classes/ezcDocumentRstMarkupEmphasisNode.md) | The inline emphasis markup AST node|
| [`ezcDocumentRstMarkupInlineLiteralNode`](./docs/classes/ezcDocumentRstMarkupInlineLiteralNode.md) | The inline literal markup node AST node|
| [`ezcDocumentRstMarkupInterpretedTextNode`](./docs/classes/ezcDocumentRstMarkupInterpretedTextNode.md) | The inline interpreted text markup AST node|
| [`ezcDocumentRstMarkupNode`](./docs/classes/ezcDocumentRstMarkupNode.md) | The abstract inline markup base AST node|
| [`ezcDocumentRstMarkupStrongEmphasisNode`](./docs/classes/ezcDocumentRstMarkupStrongEmphasisNode.md) | The inline markup AST node for strong emphasis markup|
| [`ezcDocumentRstMarkupSubstitutionNode`](./docs/classes/ezcDocumentRstMarkupSubstitutionNode.md) | The inline AST node for substitution references|
| [`ezcDocumentRstMissingDirectiveHandlerException`](./docs/classes/ezcDocumentRstMissingDirectiveHandlerException.md) | Exception thrown, when a RST contains a directive, for which no handler has<br />been registerd.|
| [`ezcDocumentRstMissingTextRoleHandlerException`](./docs/classes/ezcDocumentRstMissingTextRoleHandlerException.md) | Exception thrown, when a RST contains a text role, for which no handler has<br />been registered.|
| [`ezcDocumentRstNamedReferenceNode`](./docs/classes/ezcDocumentRstNamedReferenceNode.md) | The inline markup AST node for named references (hyperlinks)|
| [`ezcDocumentRstNode`](./docs/classes/ezcDocumentRstNode.md) | Struct for RST document document abstract syntax tree nodes|
| [`ezcDocumentRstNoteDirective`](./docs/classes/ezcDocumentRstNoteDirective.md) | Visitor for RST note directives|
| [`ezcDocumentRstNoticeDirective`](./docs/classes/ezcDocumentRstNoticeDirective.md) | Visitor for RST tip directives|
| [`ezcDocumentRstOptions`](./docs/classes/ezcDocumentRstOptions.md) | Class containing the basic options for the ezcDocumentRst.|
| [`ezcDocumentRstOptionsTests`](./docs/classes/ezcDocumentRstOptionsTests.md) | Test suite for class.|
| [`ezcDocumentRstParagraphNode`](./docs/classes/ezcDocumentRstParagraphNode.md) | The paragraph AST node|
| [`ezcDocumentRstParser`](./docs/classes/ezcDocumentRstParser.md) | Parser for RST documents|
| [`ezcDocumentRstParserTests`](./docs/classes/ezcDocumentRstParserTests.md) | Test suite for class.|
| [`ezcDocumentRstReferenceNode`](./docs/classes/ezcDocumentRstReferenceNode.md) | The internal footnote reference AST node|
| [`ezcDocumentRstSectionNode`](./docs/classes/ezcDocumentRstSectionNode.md) | The document section AST node|
| [`ezcDocumentRstStack`](./docs/classes/ezcDocumentRstStack.md) | RST document stack|
| [`ezcDocumentRstStackTests`](./docs/classes/ezcDocumentRstStackTests.md) | Test suite for class.|
| [`ezcDocumentRstStrongTextRole`](./docs/classes/ezcDocumentRstStrongTextRole.md) | Visitor for RST strong text roles.|
| [`ezcDocumentRstSubscriptTextRole`](./docs/classes/ezcDocumentRstSubscriptTextRole.md) | Visitor for RST subscript text roles.|
| [`ezcDocumentRstSubstitutionNode`](./docs/classes/ezcDocumentRstSubstitutionNode.md) | The substitution target AST node|
| [`ezcDocumentRstSuperscriptTextRole`](./docs/classes/ezcDocumentRstSuperscriptTextRole.md) | Visitor for RST superscript text roles.|
| [`ezcDocumentRstTableBodyNode`](./docs/classes/ezcDocumentRstTableBodyNode.md) | The table body AST node|
| [`ezcDocumentRstTableCellNode`](./docs/classes/ezcDocumentRstTableCellNode.md) | The table cell AST node|
| [`ezcDocumentRstTableHeadNode`](./docs/classes/ezcDocumentRstTableHeadNode.md) | The table head AST node|
| [`ezcDocumentRstTableNode`](./docs/classes/ezcDocumentRstTableNode.md) | The table AST node|
| [`ezcDocumentRstTableRowNode`](./docs/classes/ezcDocumentRstTableRowNode.md) | The table row AST node|
| [`ezcDocumentRstTargetNode`](./docs/classes/ezcDocumentRstTargetNode.md) | The internal target AST node|
| [`ezcDocumentRstTextLineNode`](./docs/classes/ezcDocumentRstTextLineNode.md) | The AST node for plain text|
| [`ezcDocumentRstTextRole`](./docs/classes/ezcDocumentRstTextRole.md) | Visitor for RST text roles|
| [`ezcDocumentRstTitleNode`](./docs/classes/ezcDocumentRstTitleNode.md) | The document title AST node|
| [`ezcDocumentRstTitleReferenceTextRole`](./docs/classes/ezcDocumentRstTitleReferenceTextRole.md) | Visitor for RST title reference text roles.|
| [`ezcDocumentRstToken`](./docs/classes/ezcDocumentRstToken.md) | Struct for RST document document tokens|
| [`ezcDocumentRstTokenizer`](./docs/classes/ezcDocumentRstTokenizer.md) | Tokenizer for RST documents|
| [`ezcDocumentRstTokenizerException`](./docs/classes/ezcDocumentRstTokenizerException.md) | Exception thrown, when the RST tokenizer could not tokenize a character<br />sequence.|
| [`ezcDocumentRstTokenizerTests`](./docs/classes/ezcDocumentRstTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentRstTransitionNode`](./docs/classes/ezcDocumentRstTransitionNode.md) | The AST node for document transitions|
| [`ezcDocumentRstValidationTests`](./docs/classes/ezcDocumentRstValidationTests.md) | Test suite for class.|
| [`ezcDocumentRstVisitor`](./docs/classes/ezcDocumentRstVisitor.md) | Abstract visitor base for RST documents represented by the parser AST.|
| [`ezcDocumentRstWarningDirective`](./docs/classes/ezcDocumentRstWarningDirective.md) | Visitor for RST warning directives|
| [`ezcDocumentRstXhtmlBodyVisitor`](./docs/classes/ezcDocumentRstXhtmlBodyVisitor.md) | HTML visitor for the RST AST, which only produces contents to be embedded<br />somewhere into the body of an existing HTML document.|
| [`ezcDocumentRstXhtmlBodyVisitorTests`](./docs/classes/ezcDocumentRstXhtmlBodyVisitorTests.md) | Test suite for class.|
| [`ezcDocumentRstXhtmlVisitor`](./docs/classes/ezcDocumentRstXhtmlVisitor.md) | HTML visitor for the RST AST.|
| [`ezcDocumentRstXhtmlVisitorTests`](./docs/classes/ezcDocumentRstXhtmlVisitorTests.md) | Test suite for class.|
| [`ezcDocumentTestDummyDirective`](./docs/classes/ezcDocumentTestDummyDirective.md) | Visitor for RST directives|
| [`ezcDocumentTestDummyPlugin`](./docs/classes/ezcDocumentTestDummyPlugin.md) | Visitor for wiki directives|
| [`ezcDocumentTestDummyRole`](./docs/classes/ezcDocumentTestDummyRole.md) | Visitor for RST text roles|
| [`ezcDocumentTestDummyXhtmlDirective`](./docs/classes/ezcDocumentTestDummyXhtmlDirective.md) | Visitor for RST directives|
| [`ezcDocumentTestParagraphDirective`](./docs/classes/ezcDocumentTestParagraphDirective.md) | Visitor for RST directives|
| [`ezcDocumentValidationError`](./docs/classes/ezcDocumentValidationError.md) | Unifies different errors into a single structure for all kinds of validation<br />errors. The validation error message can be fetched using the __toString()<br />method, while the original error is still be available, fi required.|
| [`ezcDocumentVisitException`](./docs/classes/ezcDocumentVisitException.md) | Exception thrown, when the RST visitor could not visit an AST node<br />properly.|
| [`ezcDocumentWiki`](./docs/classes/ezcDocumentWiki.md) | Document handler for wiki text documents.|
| [`ezcDocumentWikiBlockLevelNode`](./docs/classes/ezcDocumentWikiBlockLevelNode.md) | Struct for Wiki document block level abstract syntax tree nodes|
| [`ezcDocumentWikiBlockMarkupToken`](./docs/classes/ezcDocumentWikiBlockMarkupToken.md) | Struct for Wiki document nline markup tokens|
| [`ezcDocumentWikiBlockquoteNode`](./docs/classes/ezcDocumentWikiBlockquoteNode.md) | Struct for Wiki document abstract syntax tree blockquote nodes|
| [`ezcDocumentWikiBoldNode`](./docs/classes/ezcDocumentWikiBoldNode.md) | Struct for Wiki document inline bold syntax tree nodes|
| [`ezcDocumentWikiBoldToken`](./docs/classes/ezcDocumentWikiBoldToken.md) | Struct for Wiki document bold inline markup tokens|
| [`ezcDocumentWikiBulletListItemNode`](./docs/classes/ezcDocumentWikiBulletListItemNode.md) | Struct for Wiki document abstract syntax tree bullet list item nodes|
| [`ezcDocumentWikiBulletListItemToken`](./docs/classes/ezcDocumentWikiBulletListItemToken.md) | Struct for Wiki document bullet list item tokens|
| [`ezcDocumentWikiBulletListNode`](./docs/classes/ezcDocumentWikiBulletListNode.md) | Struct for Wiki document bullet list abstract syntax tree nodes|
| [`ezcDocumentWikiCodePlugin`](./docs/classes/ezcDocumentWikiCodePlugin.md) | Visitor for wiki directives|
| [`ezcDocumentWikiConfluenceLinkStartToken`](./docs/classes/ezcDocumentWikiConfluenceLinkStartToken.md) | Struct for Wiki document link start marker tokens.|
| [`ezcDocumentWikiConfluenceTokenizer`](./docs/classes/ezcDocumentWikiConfluenceTokenizer.md) | Tokenizer for Confluence wiki documents.|
| [`ezcDocumentWikiConfluenceTokenizerTests`](./docs/classes/ezcDocumentWikiConfluenceTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentWikiCreoleTokenizer`](./docs/classes/ezcDocumentWikiCreoleTokenizer.md) | Tokenizer for Creole wiki documents.|
| [`ezcDocumentWikiCreoleTokenizerTests`](./docs/classes/ezcDocumentWikiCreoleTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentWikiDefinitionListItemToken`](./docs/classes/ezcDocumentWikiDefinitionListItemToken.md) | Struct for Wiki document definition list item tokens|
| [`ezcDocumentWikiDeletedNode`](./docs/classes/ezcDocumentWikiDeletedNode.md) | Struct for Wiki document inline deleted syntax tree nodes|
| [`ezcDocumentWikiDeletedToken`](./docs/classes/ezcDocumentWikiDeletedToken.md) | Struct for Wiki document deleted inline markup tokens|
| [`ezcDocumentWikiDocbookVisitor`](./docs/classes/ezcDocumentWikiDocbookVisitor.md) | Docbook visitor for the Wiki AST.|
| [`ezcDocumentWikiDocbookVisitorTests`](./docs/classes/ezcDocumentWikiDocbookVisitorTests.md) | Test suite for class.|
| [`ezcDocumentWikiDocumentNode`](./docs/classes/ezcDocumentWikiDocumentNode.md) | Struct for Wiki document abstract syntax tree root nodes|
| [`ezcDocumentWikiDokuwikiTokenizer`](./docs/classes/ezcDocumentWikiDokuwikiTokenizer.md) | Tokenizer for Dokuwiki wiki documents.|
| [`ezcDocumentWikiDokuwikiTokenizerTests`](./docs/classes/ezcDocumentWikiDokuwikiTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentWikiEndOfFileToken`](./docs/classes/ezcDocumentWikiEndOfFileToken.md) | Struct for Wiki document end of file tokens|
| [`ezcDocumentWikiEnumeratedListItemNode`](./docs/classes/ezcDocumentWikiEnumeratedListItemNode.md) | Struct for Wiki document abstract syntax tree enumerated list item nodes|
| [`ezcDocumentWikiEnumeratedListItemToken`](./docs/classes/ezcDocumentWikiEnumeratedListItemToken.md) | Struct for Wiki document enumerated list item tokens|
| [`ezcDocumentWikiEnumeratedListNode`](./docs/classes/ezcDocumentWikiEnumeratedListNode.md) | Struct for Wiki document enumerated list abstract syntax tree nodes|
| [`ezcDocumentWikiEscapeCharacterToken`](./docs/classes/ezcDocumentWikiEscapeCharacterToken.md) | Struct for Wiki document escape character tokens|
| [`ezcDocumentWikiExternalLinkNode`](./docs/classes/ezcDocumentWikiExternalLinkNode.md) | Struct for Wiki document inline external link syntax tree nodes|
| [`ezcDocumentWikiExternalLinkToken`](./docs/classes/ezcDocumentWikiExternalLinkToken.md) | Struct for Wiki document external link tokens|
| [`ezcDocumentWikiFootnoteEndNode`](./docs/classes/ezcDocumentWikiFootnoteEndNode.md) | Struct for Wiki document inline footnote end syntax tree nodes|
| [`ezcDocumentWikiFootnoteEndToken`](./docs/classes/ezcDocumentWikiFootnoteEndToken.md) | Struct for Wiki document footnote tag close marker tokens|
| [`ezcDocumentWikiFootnoteNode`](./docs/classes/ezcDocumentWikiFootnoteNode.md) | Struct for Wiki document inline footnote syntax tree nodes|
| [`ezcDocumentWikiFootnoteStartToken`](./docs/classes/ezcDocumentWikiFootnoteStartToken.md) | Struct for Wiki document footnote tag open marker tokens|
| [`ezcDocumentWikiImageEndNode`](./docs/classes/ezcDocumentWikiImageEndNode.md) | Struct for Wiki document inline image end syntax tree nodes|
| [`ezcDocumentWikiImageEndToken`](./docs/classes/ezcDocumentWikiImageEndToken.md) | Struct for Wiki document image tag close marker tokens|
| [`ezcDocumentWikiImageNode`](./docs/classes/ezcDocumentWikiImageNode.md) | Struct for Wiki document inline image syntax tree nodes|
| [`ezcDocumentWikiImageStartToken`](./docs/classes/ezcDocumentWikiImageStartToken.md) | Struct for Wiki document image tag open marker tokens|
| [`ezcDocumentWikiInlineLiteralNode`](./docs/classes/ezcDocumentWikiInlineLiteralNode.md) | Struct for Wiki document inline literal syntax tree nodes|
| [`ezcDocumentWikiInlineLiteralToken`](./docs/classes/ezcDocumentWikiInlineLiteralToken.md) | Struct for Wiki document literal inline markup tokens|
| [`ezcDocumentWikiInlineMarkupToken`](./docs/classes/ezcDocumentWikiInlineMarkupToken.md) | Struct for Wiki document nline markup tokens|
| [`ezcDocumentWikiInlineNode`](./docs/classes/ezcDocumentWikiInlineNode.md) | Struct for Wiki document inline abstract syntax tree nodes|
| [`ezcDocumentWikiInlineQuoteNode`](./docs/classes/ezcDocumentWikiInlineQuoteNode.md) | Struct for Wiki document inline quote syntax tree nodes|
| [`ezcDocumentWikiInlineQuoteToken`](./docs/classes/ezcDocumentWikiInlineQuoteToken.md) | Struct for Wiki document inline quote markup tokens|
| [`ezcDocumentWikiInterWikiLinkNode`](./docs/classes/ezcDocumentWikiInterWikiLinkNode.md) | Struct for Wiki document inline inter wiki link syntax tree nodes|
| [`ezcDocumentWikiInterWikiLinkToken`](./docs/classes/ezcDocumentWikiInterWikiLinkToken.md) | Struct for Wiki document inter wiki link tokens|
| [`ezcDocumentWikiInternalLinkNode`](./docs/classes/ezcDocumentWikiInternalLinkNode.md) | Struct for Wiki document inline internal link syntax tree nodes|
| [`ezcDocumentWikiInternalLinkToken`](./docs/classes/ezcDocumentWikiInternalLinkToken.md) | Struct for Wiki document internal link tokens|
| [`ezcDocumentWikiInvisibleBreakNode`](./docs/classes/ezcDocumentWikiInvisibleBreakNode.md) | Struct for Wiki document abstract syntax tree title nodes|
| [`ezcDocumentWikiItalicNode`](./docs/classes/ezcDocumentWikiItalicNode.md) | Struct for Wiki document inline italic syntax tree nodes|
| [`ezcDocumentWikiItalicToken`](./docs/classes/ezcDocumentWikiItalicToken.md) | Struct for Wiki document italic inline markup tokens|
| [`ezcDocumentWikiLineBreakNode`](./docs/classes/ezcDocumentWikiLineBreakNode.md) | Struct for Wiki document inline intentional line break syntax tree nodes|
| [`ezcDocumentWikiLineBreakToken`](./docs/classes/ezcDocumentWikiLineBreakToken.md) | Struct for Wiki document inline line break tokens|
| [`ezcDocumentWikiLineLevelNode`](./docs/classes/ezcDocumentWikiLineLevelNode.md) | Struct for Wiki document block level abstract syntax tree nodes|
| [`ezcDocumentWikiLineMarkupToken`](./docs/classes/ezcDocumentWikiLineMarkupToken.md) | Struct for Wiki document nline markup tokens|
| [`ezcDocumentWikiLinkEndNode`](./docs/classes/ezcDocumentWikiLinkEndNode.md) | Struct for Wiki document inline link end syntax tree nodes|
| [`ezcDocumentWikiLinkEndToken`](./docs/classes/ezcDocumentWikiLinkEndToken.md) | Struct for Wiki document link end marker tokens|
| [`ezcDocumentWikiLinkNode`](./docs/classes/ezcDocumentWikiLinkNode.md) | Struct for Wiki document inline link syntax tree nodes|
| [`ezcDocumentWikiLinkStartToken`](./docs/classes/ezcDocumentWikiLinkStartToken.md) | Struct for Wiki document link start marker tokens|
| [`ezcDocumentWikiListNode`](./docs/classes/ezcDocumentWikiListNode.md) | Struct for Wiki document list abstract syntax tree nodes|
| [`ezcDocumentWikiLiteralBlockNode`](./docs/classes/ezcDocumentWikiLiteralBlockNode.md) | Struct for Wiki document literal block abstract syntax tree nodes|
| [`ezcDocumentWikiLiteralBlockToken`](./docs/classes/ezcDocumentWikiLiteralBlockToken.md) | Struct for Wiki document literal block tokens|
| [`ezcDocumentWikiLiteralLineToken`](./docs/classes/ezcDocumentWikiLiteralLineToken.md) | Struct for Wiki document literal line tokens|
| [`ezcDocumentWikiMatchingInlineNode`](./docs/classes/ezcDocumentWikiMatchingInlineNode.md) | Struct for Wiki document inline abstract syntax tree nodes|
| [`ezcDocumentWikiMediawikiEmphasisToken`](./docs/classes/ezcDocumentWikiMediawikiEmphasisToken.md) | Struct for Wiki document emphasis markup, especially for mediawiki, because<br />here it can only be decided during the actual parsing, if this is a strong<br />or normal emphasis.|
| [`ezcDocumentWikiMediawikiTokenizer`](./docs/classes/ezcDocumentWikiMediawikiTokenizer.md) | Tokenizer for Mediawiki wiki documents.|
| [`ezcDocumentWikiMediawikiTokenizerTests`](./docs/classes/ezcDocumentWikiMediawikiTokenizerTests.md) | Test suite for class.|
| [`ezcDocumentWikiMissingPluginHandlerException`](./docs/classes/ezcDocumentWikiMissingPluginHandlerException.md) | Exception thrown, when a wiki contains a plugin, for which no handler has<br />been registerd.|
| [`ezcDocumentWikiMonospaceNode`](./docs/classes/ezcDocumentWikiMonospaceNode.md) | Struct for Wiki document inline monospace syntax tree nodes|
| [`ezcDocumentWikiMonospaceToken`](./docs/classes/ezcDocumentWikiMonospaceToken.md) | Struct for Wiki document monospace inline markup tokens|
| [`ezcDocumentWikiNewLineToken`](./docs/classes/ezcDocumentWikiNewLineToken.md) | Struct for Wiki document new line tokens|
| [`ezcDocumentWikiNode`](./docs/classes/ezcDocumentWikiNode.md) | Struct for Wiki document document abstract syntax tree nodes|
| [`ezcDocumentWikiOptions`](./docs/classes/ezcDocumentWikiOptions.md) | Class containing the basic options for the ezcDocumentWiki.|
| [`ezcDocumentWikiOptionsTests`](./docs/classes/ezcDocumentWikiOptionsTests.md) | Test suite for class.|
| [`ezcDocumentWikiPageBreakNode`](./docs/classes/ezcDocumentWikiPageBreakNode.md) | Struct for Wiki document abstract syntax tree page break nodes|
| [`ezcDocumentWikiPageBreakToken`](./docs/classes/ezcDocumentWikiPageBreakToken.md) | Struct for Wiki document page break tokens|
| [`ezcDocumentWikiParagraphIndentationToken`](./docs/classes/ezcDocumentWikiParagraphIndentationToken.md) | Struct for Wiki document paragraph indentation tokens|
| [`ezcDocumentWikiParagraphNode`](./docs/classes/ezcDocumentWikiParagraphNode.md) | Struct for Wiki document paragraph abstract syntax tree nodes|
| [`ezcDocumentWikiParser`](./docs/classes/ezcDocumentWikiParser.md) | Parser for wiki documents.|
| [`ezcDocumentWikiParserTests`](./docs/classes/ezcDocumentWikiParserTests.md) | Test suite for class.|
| [`ezcDocumentWikiPlugin`](./docs/classes/ezcDocumentWikiPlugin.md) | Visitor for wiki directives|
| [`ezcDocumentWikiPluginNode`](./docs/classes/ezcDocumentWikiPluginNode.md) | Struct for Wiki document plugin abstract syntax tree nodes|
| [`ezcDocumentWikiPluginToken`](./docs/classes/ezcDocumentWikiPluginToken.md) | Struct for Wiki plugin token.|
| [`ezcDocumentWikiQuoteToken`](./docs/classes/ezcDocumentWikiQuoteToken.md) | Struct for Wiki document quote markup tokens|
| [`ezcDocumentWikiSectionNode`](./docs/classes/ezcDocumentWikiSectionNode.md) | Struct for Wiki section abstract syntax tree root nodes|
| [`ezcDocumentWikiSeparatorNode`](./docs/classes/ezcDocumentWikiSeparatorNode.md) | Struct for Wiki document inline seperator syntax tree nodes|
| [`ezcDocumentWikiSeparatorToken`](./docs/classes/ezcDocumentWikiSeparatorToken.md) | Struct for Wiki document general separator tokens|
| [`ezcDocumentWikiSpecialCharsToken`](./docs/classes/ezcDocumentWikiSpecialCharsToken.md) | Struct for Wiki document special character tokens|
| [`ezcDocumentWikiStrikeToken`](./docs/classes/ezcDocumentWikiStrikeToken.md) | Struct for Wiki document strike-through inline markup tokens|
| [`ezcDocumentWikiSubscriptNode`](./docs/classes/ezcDocumentWikiSubscriptNode.md) | Struct for Wiki document inline subscript syntax tree nodes|
| [`ezcDocumentWikiSubscriptToken`](./docs/classes/ezcDocumentWikiSubscriptToken.md) | Struct for Wiki document subscript inline markup tokens|
| [`ezcDocumentWikiSuperscriptNode`](./docs/classes/ezcDocumentWikiSuperscriptNode.md) | Struct for Wiki document inline superscript syntax tree nodes|
| [`ezcDocumentWikiSuperscriptToken`](./docs/classes/ezcDocumentWikiSuperscriptToken.md) | Struct for Wiki document superscript inline markup tokens|
| [`ezcDocumentWikiTableCellNode`](./docs/classes/ezcDocumentWikiTableCellNode.md) | Struct for Wiki document abstract syntax tree table cell item nodes|
| [`ezcDocumentWikiTableHeaderSeparatorNode`](./docs/classes/ezcDocumentWikiTableHeaderSeparatorNode.md) | Struct for Wiki document inline seperator syntax tree nodes.|
| [`ezcDocumentWikiTableHeaderToken`](./docs/classes/ezcDocumentWikiTableHeaderToken.md) | Struct for Wiki document table header tokens|
| [`ezcDocumentWikiTableNode`](./docs/classes/ezcDocumentWikiTableNode.md) | Struct for Wiki document abstract syntax tree table item nodes|
| [`ezcDocumentWikiTableRowNode`](./docs/classes/ezcDocumentWikiTableRowNode.md) | Struct for Wiki document abstract syntax tree table row item nodes|
| [`ezcDocumentWikiTableRowToken`](./docs/classes/ezcDocumentWikiTableRowToken.md) | Struct for Wiki document table row start tokens|
| [`ezcDocumentWikiTests`](./docs/classes/ezcDocumentWikiTests.md) | Test suite for class.|
| [`ezcDocumentWikiTextLineToken`](./docs/classes/ezcDocumentWikiTextLineToken.md) | Struct for Wiki document text line tokens|
| [`ezcDocumentWikiTextNode`](./docs/classes/ezcDocumentWikiTextNode.md) | Struct for Wiki document abstract syntax tree text nodes|
| [`ezcDocumentWikiTitleNode`](./docs/classes/ezcDocumentWikiTitleNode.md) | Struct for Wiki document abstract syntax tree title nodes|
| [`ezcDocumentWikiTitleToken`](./docs/classes/ezcDocumentWikiTitleToken.md) | Struct for Wiki document title tokens|
| [`ezcDocumentWikiToken`](./docs/classes/ezcDocumentWikiToken.md) | Struct for Wiki document document tokens|
| [`ezcDocumentWikiTokenizer`](./docs/classes/ezcDocumentWikiTokenizer.md) | Tokenizer for wiki documents|
| [`ezcDocumentWikiTokenizerException`](./docs/classes/ezcDocumentWikiTokenizerException.md) | Exception thrown, when the Wiki tokenizer could not tokenize a character<br />sequence.|
| [`ezcDocumentWikiUnderlineNode`](./docs/classes/ezcDocumentWikiUnderlineNode.md) | Struct for Wiki document inline underline syntax tree nodes|
| [`ezcDocumentWikiUnderlineToken`](./docs/classes/ezcDocumentWikiUnderlineToken.md) | Struct for Wiki document underline inline markup tokens|
| [`ezcDocumentWikiVisitor`](./docs/classes/ezcDocumentWikiVisitor.md) | Abstract visitor base for Wiki documents represented by the parser AST.|
| [`ezcDocumentWikiWhitespaceToken`](./docs/classes/ezcDocumentWikiWhitespaceToken.md) | Struct for Wiki document whitespace tokens|
| [`ezcDocumentXhtml`](./docs/classes/ezcDocumentXhtml.md) | The document handler for XHTML document markup.|
| [`ezcDocumentXhtmlBaseFilter`](./docs/classes/ezcDocumentXhtmlBaseFilter.md) | Abstract base class for XHtml filters, assigning semantic information to<br />XHtml documents.|
| [`ezcDocumentXhtmlBlockquoteElementFilter`](./docs/classes/ezcDocumentXhtmlBlockquoteElementFilter.md) | Filter for XHtml blockquotes and blockquote attributions|
| [`ezcDocumentXhtmlContentLocatorFilter`](./docs/classes/ezcDocumentXhtmlContentLocatorFilter.md) | Filter, which tries to lacate the relevant content nodes in a HTML document,<br />and ignores all layout stuff around that.|
| [`ezcDocumentXhtmlDefinitionListElementFilter`](./docs/classes/ezcDocumentXhtmlDefinitionListElementFilter.md) | Filter for XHtml definition lists|
| [`ezcDocumentXhtmlDocbookTests`](./docs/classes/ezcDocumentXhtmlDocbookTests.md) | Test suite for class.|
| [`ezcDocumentXhtmlElementBaseFilter`](./docs/classes/ezcDocumentXhtmlElementBaseFilter.md) | Filter for XHTML elements.|
| [`ezcDocumentXhtmlElementFilter`](./docs/classes/ezcDocumentXhtmlElementFilter.md) | Filter, which assigns semantic information just on the base of XHtml element<br />semantics to the tree.|
| [`ezcDocumentXhtmlElementMappingFilter`](./docs/classes/ezcDocumentXhtmlElementMappingFilter.md) | Filter for XHtml elements, which just do require some plain mapping to<br />semantic docbook elements.|
| [`ezcDocumentXhtmlEnumeratedElementFilter`](./docs/classes/ezcDocumentXhtmlEnumeratedElementFilter.md) | Filter for XHtml enumerated lists.|
| [`ezcDocumentXhtmlFootnoteElementFilter`](./docs/classes/ezcDocumentXhtmlFootnoteElementFilter.md) | Filter for XHtml footnotes, as generated by ezcDocument.|
| [`ezcDocumentXhtmlHeaderElementFilter`](./docs/classes/ezcDocumentXhtmlHeaderElementFilter.md) | Filter for XHtml header elements, including grouping all following siblings<br />on the same header level in a section.|
| [`ezcDocumentXhtmlImageElementFilter`](./docs/classes/ezcDocumentXhtmlImageElementFilter.md) | Filter for XHtml images.|
| [`ezcDocumentXhtmlLineBlockElementFilter`](./docs/classes/ezcDocumentXhtmlLineBlockElementFilter.md) | Filter for XHtml line blocks|
| [`ezcDocumentXhtmlLinkElementFilter`](./docs/classes/ezcDocumentXhtmlLinkElementFilter.md) | Filter for XHtml links.|
| [`ezcDocumentXhtmlLiteralElementFilter`](./docs/classes/ezcDocumentXhtmlLiteralElementFilter.md) | Filter for XHtml literals.|
| [`ezcDocumentXhtmlMetadataFilter`](./docs/classes/ezcDocumentXhtmlMetadataFilter.md) | Filter, which assigns semantic information just on the base of XHtml element<br />semantics to the tree.|
| [`ezcDocumentXhtmlOptions`](./docs/classes/ezcDocumentXhtmlOptions.md) | Class containing the basic options for the ezcDocumentXhtml class.|
| [`ezcDocumentXhtmlOptionsTests`](./docs/classes/ezcDocumentXhtmlOptionsTests.md) | Test suite for class.|
| [`ezcDocumentXhtmlParagraphElementFilter`](./docs/classes/ezcDocumentXhtmlParagraphElementFilter.md) | Filter for XHtml table cells.|
| [`ezcDocumentXhtmlSpecialParagraphElementFilter`](./docs/classes/ezcDocumentXhtmlSpecialParagraphElementFilter.md) | Filter for XHtml table cells.|
| [`ezcDocumentXhtmlStrongElementFilter`](./docs/classes/ezcDocumentXhtmlStrongElementFilter.md) | Filter for XHtml strong emphasis.|
| [`ezcDocumentXhtmlTableCellElementFilter`](./docs/classes/ezcDocumentXhtmlTableCellElementFilter.md) | Filter for XHtml table cells.|
| [`ezcDocumentXhtmlTableElementFilter`](./docs/classes/ezcDocumentXhtmlTableElementFilter.md) | Filter for XHtml table elements.|
| [`ezcDocumentXhtmlTablesFilter`](./docs/classes/ezcDocumentXhtmlTablesFilter.md) | Filter, which tries to filter out tables, which do not have typical table<br />contents. Eg. are used for layout instead of content markup.|
| [`ezcDocumentXhtmlTextToParagraphFilter`](./docs/classes/ezcDocumentXhtmlTextToParagraphFilter.md) | Filter for abandoned text|
| [`ezcDocumentXhtmlValidationTests`](./docs/classes/ezcDocumentXhtmlValidationTests.md) | Test suite for class.|
| [`ezcDocumentXhtmlXpathFilter`](./docs/classes/ezcDocumentXhtmlXpathFilter.md) | Filter, which lets you locate the relevant content nodes by a XPath query.|
| [`ezcDocumentXmlBase`](./docs/classes/ezcDocumentXmlBase.md) | A base class for XML based document type handlers.|
| [`ezcDocumentXmlBaseTests`](./docs/classes/ezcDocumentXmlBaseTests.md) | Test suite for class.|
| [`ezcDocumentXmlOptions`](./docs/classes/ezcDocumentXmlOptions.md) | Class containing the basic options for the ezcDocumentXmlBase|
| [`ezcDocumentXsltConverter`](./docs/classes/ezcDocumentXsltConverter.md) | Base class for conversions between XML documents using XSLT.|
| [`ezcDocumentXsltConverterOptions`](./docs/classes/ezcDocumentXsltConverterOptions.md) | Class containing the basic options for the ezcDocumentEzp3Xml class|
| [`ezcTestDocumentPdfHyphenator`](./docs/classes/ezcTestDocumentPdfHyphenator.md) | Default hyphenation implementation, which does no word splitting at all.|
| [`ezcTestDocumentPdfMockDriver`](./docs/classes/ezcTestDocumentPdfMockDriver.md) | Test implemenation of PDF driver mocking actual driver behaviour|
| [`myAddressDirective`](./docs/classes/myAddressDirective.md) | Visitor for RST directives|
| [`myAddressElementHandler`](./docs/classes/myAddressElementHandler.md) | Basic converter which stores a list of handlers for each node in the docbook<br />element tree. Those handlers will be executed for the elements, when found.|
| [`myAddressElementHandler`](./docs/classes/myAddressElementHandler.md) | Basic converter which stores a list of handlers for each node in the docbook<br />element tree. Those handlers will be executed for the elements, when found.|
| [`myLinkProvider`](./docs/classes/myLinkProvider.md) | Class providing access to links referenced in eZXml documents by url IDs,<br />node IDs or object IDs.|
| [`myProgressFinder`](./docs/classes/myProgressFinder.md) | |
| [`testBaseInitCallback`](./docs/classes/testBaseInitCallback.md) | Test class for ezcBaseInitTest.|
| [`testBaseInitClass`](./docs/classes/testBaseInitClass.md) | Test class for ezcBaseInitTest.|
| [`trBasetestClass`](./docs/classes/trBasetestClass.md) | |
| [`trBasetestClass2`](./docs/classes/trBasetestClass2.md) | |
| [`trBasetestLongClass`](./docs/classes/trBasetestLongClass.md) | |
| [`yxorP`](./docs/classes/yxorP.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Twig_CompilerInterface`](./docs/classes/Twig_CompilerInterface.md) | Interface implemented by compiler classes.|
| [`Twig_FilterCallableInterface`](./docs/classes/Twig_FilterCallableInterface.md) | Represents a callable template filter.|
| [`Twig_FilterInterface`](./docs/classes/Twig_FilterInterface.md) | Represents a template filter.|
| [`Twig_FunctionCallableInterface`](./docs/classes/Twig_FunctionCallableInterface.md) | Represents a callable template function.|
| [`Twig_FunctionInterface`](./docs/classes/Twig_FunctionInterface.md) | Represents a template function.|
| [`Twig_LexerInterface`](./docs/classes/Twig_LexerInterface.md) | Interface implemented by lexer classes.|
| [`Twig_NodeInterface`](./docs/classes/Twig_NodeInterface.md) | Represents a node in the AST.|
| [`Twig_ParserInterface`](./docs/classes/Twig_ParserInterface.md) | Interface implemented by parser classes.|
| [`Twig_TemplateInterface`](./docs/classes/Twig_TemplateInterface.md) | Interface implemented by all compiled templates.|
| [`Twig_TestCallableInterface`](./docs/classes/Twig_TestCallableInterface.md) | Represents a callable template test.|
| [`Twig_TestInterface`](./docs/classes/Twig_TestInterface.md) | Represents a template test.|
| [`Twig_TokenParserBrokerInterface`](./docs/classes/Twig_TokenParserBrokerInterface.md) | Interface implemented by token parser brokers.|
| [`ezcBaseConfigurationInitializer`](./docs/classes/ezcBaseConfigurationInitializer.md) | This class provides the interface that classes need to implement to act as<br />an callback initializer class to work with the delayed initialization<br />mechanism.|
| [`ezcBaseExportable`](./docs/classes/ezcBaseExportable.md) | Interface for class of which instances can be exported using var_export().|
| [`ezcBasePersistable`](./docs/classes/ezcBasePersistable.md) | This class provides the interface that classes need to implement to be able<br />to be used by the PersistentObject and Search components.|
| [`ezcDocumentErrorReporting`](./docs/classes/ezcDocumentErrorReporting.md) | Interface for error reporting.|
| [`ezcDocumentLocateable`](./docs/classes/ezcDocumentLocateable.md) | Interface for elements, which have a location ID, and thus can be used by<br />the style inferencer.|
| [`ezcDocumentOdtPcssConverter`](./docs/classes/ezcDocumentOdtPcssConverter.md) | Interface for style converters.|
| [`ezcDocumentOdtPcssPreprocessor`](./docs/classes/ezcDocumentOdtPcssPreprocessor.md) | PCSS style preprocessor interface.|
| [`ezcDocumentOdtStyleFilterRule`](./docs/classes/ezcDocumentOdtStyleFilterRule.md) | Interface for style filter rules.|
| [`ezcDocumentOdtStyler`](./docs/classes/ezcDocumentOdtStyler.md) | Interface for ODT stylers.|
| [`ezcDocumentRstXhtmlDirective`](./docs/classes/ezcDocumentRstXhtmlDirective.md) | Interface for directives also supporting HTML output|
| [`ezcDocumentRstXhtmlTextRole`](./docs/classes/ezcDocumentRstXhtmlTextRole.md) | Interface for text roles also supporting HTML output|
| [`ezcDocumentValidation`](./docs/classes/ezcDocumentValidation.md) | Interface specifying, that the document may be directly exported to HTML.|
| [`ezcDocumentXhtmlConversion`](./docs/classes/ezcDocumentXhtmlConversion.md) | An interface indicating the ability to transform a document directly into<br />XHTML.|

### \Cilex

#### Classes

| Class | Description |
|-------|-------------|
| [`Application`](./docs/classes/Cilex/Application.md) | The Cilex framework class.|
| [`Compiler`](./docs/classes/Cilex/Compiler.md) | The Compiler class compiles the Cilex framework.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ServiceProviderInterface`](./docs/classes/Cilex/ServiceProviderInterface.md) | Interface that must implement all Cilex service providers.|

### \Cilex\Command

#### Classes

| Class | Description |
|-------|-------------|
| [`Command`](./docs/classes/Cilex/Command/Command.md) | Base class for Cilex commands.|
| [`DemoInfoCommand`](./docs/classes/Cilex/Command/DemoInfoCommand.md) | Example command for testing purposes.|
| [`GreetCommand`](./docs/classes/Cilex/Command/GreetCommand.md) | Example command for testing purposes.|

### \Cilex\Provider

#### Classes

| Class | Description |
|-------|-------------|
| [`ConfigServiceProvider`](./docs/classes/Cilex/Provider/ConfigServiceProvider.md) | |
| [`DoctrineServiceProvider`](./docs/classes/Cilex/Provider/DoctrineServiceProvider.md) | Doctrine DBAL Provider.|
| [`JmsSerializerServiceProvider`](./docs/classes/Cilex/Provider/JmsSerializerServiceProvider.md) | Cilex Service Provider to provide serialization services.|
| [`MonologServiceProvider`](./docs/classes/Cilex/Provider/MonologServiceProvider.md) | Monolog Provider.|
| [`ValidatorServiceProvider`](./docs/classes/Cilex/Provider/ValidatorServiceProvider.md) | Symfony Validator component Provider.|

### \Cilex\Provider\Console

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseConsoleServiceProvider`](./docs/classes/Cilex/Provider/Console/BaseConsoleServiceProvider.md) | Pimple Console Service Provider|
| [`ConsoleServiceProvider`](./docs/classes/Cilex/Provider/Console/ConsoleServiceProvider.md) | Cilex Console Service Provider|
| [`ContainerAwareApplication`](./docs/classes/Cilex/Provider/Console/ContainerAwareApplication.md) | Cilex Pimple Console Application|

### \Cilex\Provider\Console\Adapter\Silex

#### Classes

| Class | Description |
|-------|-------------|
| [`ConsoleServiceProvider`](./docs/classes/Cilex/Provider/Console/Adapter/Silex/ConsoleServiceProvider.md) | Silex Console Service Provider adapter|

### \Cilex\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ApplicationTest`](./docs/classes/Cilex/Tests/ApplicationTest.md) | Application test cases.|
| [`ServiceProviderMock`](./docs/classes/Cilex/Tests/ServiceProviderMock.md) | Mock class used to test the register method.|

### \Cilex\Tests\Command

#### Classes

| Class | Description |
|-------|-------------|
| [`CommandMock`](./docs/classes/Cilex/Tests/Command/CommandMock.md) | Base class for Cilex commands.|
| [`CommandTest`](./docs/classes/Cilex/Tests/Command/CommandTest.md) | Command\Command test cases.|

### \Cilex\Tests\Provider

#### Classes

| Class | Description |
|-------|-------------|
| [`ConfigServiceProviderTest`](./docs/classes/Cilex/Tests/Provider/ConfigServiceProviderTest.md) | Test file for ConfigServiceProvider|
| [`ValidatorServiceProviderTest`](./docs/classes/Cilex/Tests/Provider/ValidatorServiceProviderTest.md) | ValidatorServiceProvider.|

### \Composer

#### Classes

| Class | Description |
|-------|-------------|
| [`InstalledVersions`](./docs/classes/Composer/InstalledVersions.md) | This class is copied in every Composer installed project and available to all|

### \Composer\Autoload

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassLoader`](./docs/classes/Composer/Autoload/ClassLoader.md) | ClassLoader implements a PSR-0, PSR-4 and classmap class loader.|
| [`ComposerStaticInitc066c7ec9ff8668257accf86723d8f09`](./docs/classes/Composer/Autoload/ComposerStaticInitc066c7ec9ff8668257accf86723d8f09.md) | |

### \Cvuorinen\PhpdocMarkdownPublic\Extension

#### Classes

| Class | Description |
|-------|-------------|
| [`TwigClassPublicMethods`](./docs/classes/Cvuorinen/PhpdocMarkdownPublic/Extension/TwigClassPublicMethods.md) | Twig extension to get only the public methods from a \phpDocumentor\Descriptor\ClassDescriptor instance.|
| [`TwigMarkdownAnchorLink`](./docs/classes/Cvuorinen/PhpdocMarkdownPublic/Extension/TwigMarkdownAnchorLink.md) | Twig extension to create Markdown anchor links (within a single page).|

### \Doctrine\Common\Annotations

#### Classes

| Class | Description |
|-------|-------------|
| [`Annotation`](./docs/classes/Doctrine/Common/Annotations/Annotation.md) | Annotations class.|
| [`AnnotationException`](./docs/classes/Doctrine/Common/Annotations/AnnotationException.md) | Description of AnnotationException|
| [`AnnotationReader`](./docs/classes/Doctrine/Common/Annotations/AnnotationReader.md) | A reader for docblock annotations.|
| [`AnnotationRegistry`](./docs/classes/Doctrine/Common/Annotations/AnnotationRegistry.md) | |
| [`CachedReader`](./docs/classes/Doctrine/Common/Annotations/CachedReader.md) | A cache aware annotation reader.|
| [`DocLexer`](./docs/classes/Doctrine/Common/Annotations/DocLexer.md) | Simple lexer for docblock annotations.|
| [`DocParser`](./docs/classes/Doctrine/Common/Annotations/DocParser.md) | A parser for docblock annotations.|
| [`FileCacheReader`](./docs/classes/Doctrine/Common/Annotations/FileCacheReader.md) | File cache reader for annotations.|
| [`ImplicitlyIgnoredAnnotationNames`](./docs/classes/Doctrine/Common/Annotations/ImplicitlyIgnoredAnnotationNames.md) | A list of annotations that are implicitly ignored during the parsing process.|
| [`IndexedReader`](./docs/classes/Doctrine/Common/Annotations/IndexedReader.md) | Allows the reader to be used in-place of Doctrine&#039;s reader.|
| [`PhpParser`](./docs/classes/Doctrine/Common/Annotations/PhpParser.md) | Parses a file for namespaces/use/class declarations.|
| [`PsrCachedReader`](./docs/classes/Doctrine/Common/Annotations/PsrCachedReader.md) | A cache aware annotation reader.|
| [`SimpleAnnotationReader`](./docs/classes/Doctrine/Common/Annotations/SimpleAnnotationReader.md) | Simple Annotation Reader.|
| [`TokenParser`](./docs/classes/Doctrine/Common/Annotations/TokenParser.md) | Parses a file for namespaces/use/class declarations.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`NamedArgumentConstructorAnnotation`](./docs/classes/Doctrine/Common/Annotations/NamedArgumentConstructorAnnotation.md) | Marker interface for PHP7/PHP8 compatible support<br />for named arguments (and constructor property promotion).|
| [`Reader`](./docs/classes/Doctrine/Common/Annotations/Reader.md) | Interface for annotation readers.|

### \Doctrine\Common\Annotations\Annotation

#### Classes

| Class | Description |
|-------|-------------|
| [`Attribute`](./docs/classes/Doctrine/Common/Annotations/Annotation/Attribute.md) | Annotation that can be used to signal to the parser<br />to check the attribute type during the parsing process.|
| [`Attributes`](./docs/classes/Doctrine/Common/Annotations/Annotation/Attributes.md) | Annotation that can be used to signal to the parser<br />to check the types of all declared attributes during the parsing process.|
| [`Enum`](./docs/classes/Doctrine/Common/Annotations/Annotation/Enum.md) | Annotation that can be used to signal to the parser<br />to check the available values during the parsing process.|
| [`IgnoreAnnotation`](./docs/classes/Doctrine/Common/Annotations/Annotation/IgnoreAnnotation.md) | Annotation that can be used to signal to the parser to ignore specific<br />annotations during the parsing process.|
| [`NamedArgumentConstructor`](./docs/classes/Doctrine/Common/Annotations/Annotation/NamedArgumentConstructor.md) | Annotation that indicates that the annotated class should be constructed with a named argument call.|
| [`Required`](./docs/classes/Doctrine/Common/Annotations/Annotation/Required.md) | Annotation that can be used to signal to the parser<br />to check if that attribute is required during the parsing process.|
| [`Target`](./docs/classes/Doctrine/Common/Annotations/Annotation/Target.md) | Annotation that can be used to signal to the parser<br />to check the annotation target during the parsing process.|

### \Doctrine\Common\Lexer

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractLexer`](./docs/classes/Doctrine/Common/Lexer/AbstractLexer.md) | Base class for writing simple lexers, i.e. for creating small DSLs.|

### \Doctrine\Instantiator

#### Classes

| Class | Description |
|-------|-------------|
| [`Instantiator`](./docs/classes/Doctrine/Instantiator/Instantiator.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`InstantiatorInterface`](./docs/classes/Doctrine/Instantiator/InstantiatorInterface.md) | Instantiator provides utility methods to build objects without invoking their constructors|

### \Doctrine\Instantiator\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`InvalidArgumentException`](./docs/classes/Doctrine/Instantiator/Exception/InvalidArgumentException.md) | Exception for invalid arguments provided to the instantiator|
| [`UnexpectedValueException`](./docs/classes/Doctrine/Instantiator/Exception/UnexpectedValueException.md) | Exception for given parameters causing invalid/unexpected state on instantiation|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Doctrine/Instantiator/Exception/ExceptionInterface.md) | Base exception marker interface for the instantiator component|

### \Humbug

#### Classes

| Class | Description |
|-------|-------------|
| [`FileGetContents`](./docs/classes/Humbug/FileGetContents.md) | This is largely extracted from the Composer Installer where originally implemented.|

### \Humbug\SelfUpdate

#### Classes

| Class | Description |
|-------|-------------|
| [`Updater`](./docs/classes/Humbug/SelfUpdate/Updater.md) | |
| [`VersionParser`](./docs/classes/Humbug/SelfUpdate/VersionParser.md) | |

### \Humbug\SelfUpdate\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FilesystemException`](./docs/classes/Humbug/SelfUpdate/Exception/FilesystemException.md) | |
| [`HttpRequestException`](./docs/classes/Humbug/SelfUpdate/Exception/HttpRequestException.md) | |
| [`InvalidArgumentException`](./docs/classes/Humbug/SelfUpdate/Exception/InvalidArgumentException.md) | |
| [`JsonParsingException`](./docs/classes/Humbug/SelfUpdate/Exception/JsonParsingException.md) | |
| [`NoSignatureException`](./docs/classes/Humbug/SelfUpdate/Exception/NoSignatureException.md) | |
| [`RuntimeException`](./docs/classes/Humbug/SelfUpdate/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Humbug/SelfUpdate/Exception/ExceptionInterface.md) | |

### \Humbug\SelfUpdate\Strategy

#### Classes

| Class | Description |
|-------|-------------|
| [`GithubStrategy`](./docs/classes/Humbug/SelfUpdate/Strategy/GithubStrategy.md) | |
| [`ShaStrategy`](./docs/classes/Humbug/SelfUpdate/Strategy/ShaStrategy.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`StrategyInterface`](./docs/classes/Humbug/SelfUpdate/Strategy/StrategyInterface.md) | |

### \Humbug\Test

#### Classes

| Class | Description |
|-------|-------------|
| [`FunctionTest`](./docs/classes/Humbug/Test/FunctionTest.md) | |

### \Humbug\Test\SelfUpdate

#### Classes

| Class | Description |
|-------|-------------|
| [`FooStrategy`](./docs/classes/Humbug/Test/SelfUpdate/FooStrategy.md) | |
| [`GithubTestStrategy`](./docs/classes/Humbug/Test/SelfUpdate/GithubTestStrategy.md) | |
| [`UpdaterGithubStrategyTest`](./docs/classes/Humbug/Test/SelfUpdate/UpdaterGithubStrategyTest.md) | |
| [`UpdaterTest`](./docs/classes/Humbug/Test/SelfUpdate/UpdaterTest.md) | |
| [`VersionParserTest`](./docs/classes/Humbug/Test/SelfUpdate/VersionParserTest.md) | |

### \Interop\Container

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ContainerInterface`](./docs/classes/Interop/Container/ContainerInterface.md) | Describes the interface of a container that exposes methods to read its entries.|

### \Interop\Container\Exception

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ContainerException`](./docs/classes/Interop/Container/Exception/ContainerException.md) | Base interface representing a generic exception in a container.|
| [`NotFoundException`](./docs/classes/Interop/Container/Exception/NotFoundException.md) | No entry was found in the container.|

### \JMS\Parser

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractLexer`](./docs/classes/JMS/Parser/AbstractLexer.md) | Abstract Lexer.|
| [`AbstractLexerTest`](./docs/classes/JMS/Parser/AbstractLexerTest.md) | |
| [`AbstractParser`](./docs/classes/JMS/Parser/AbstractParser.md) | Base Parser which provides some useful parsing methods intended for sub-classing.|
| [`SimpleLexer`](./docs/classes/JMS/Parser/SimpleLexer.md) | The simple lexer is a fully usable lexer that does not require sub-classing.|
| [`SyntaxErrorException`](./docs/classes/JMS/Parser/SyntaxErrorException.md) | |

### \JMS\Parser\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractParserTest`](./docs/classes/JMS/Parser/Tests/AbstractParserTest.md) | |

### \JMS\Serializer

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractVisitor`](./docs/classes/JMS/Serializer/AbstractVisitor.md) | |
| [`Context`](./docs/classes/JMS/Serializer/Context.md) | |
| [`DeserializationContext`](./docs/classes/JMS/Serializer/DeserializationContext.md) | |
| [`GenericDeserializationVisitor`](./docs/classes/JMS/Serializer/GenericDeserializationVisitor.md) | Generic Deserialization Visitor.|
| [`GenericSerializationVisitor`](./docs/classes/JMS/Serializer/GenericSerializationVisitor.md) | |
| [`GraphNavigator`](./docs/classes/JMS/Serializer/GraphNavigator.md) | Handles traversal along the object graph.|
| [`JsonDeserializationVisitor`](./docs/classes/JMS/Serializer/JsonDeserializationVisitor.md) | Generic Deserialization Visitor.|
| [`JsonSerializationVisitor`](./docs/classes/JMS/Serializer/JsonSerializationVisitor.md) | |
| [`SerializationContext`](./docs/classes/JMS/Serializer/SerializationContext.md) | |
| [`Serializer`](./docs/classes/JMS/Serializer/Serializer.md) | Serializer Implementation.|
| [`SerializerBuilder`](./docs/classes/JMS/Serializer/SerializerBuilder.md) | Builder for serializer instances.|
| [`TypeParser`](./docs/classes/JMS/Serializer/TypeParser.md) | Parses a serializer type.|
| [`XmlDeserializationVisitor`](./docs/classes/JMS/Serializer/XmlDeserializationVisitor.md) | |
| [`XmlSerializationVisitor`](./docs/classes/JMS/Serializer/XmlSerializationVisitor.md) | XmlSerializationVisitor.|
| [`YamlSerializationVisitor`](./docs/classes/JMS/Serializer/YamlSerializationVisitor.md) | Serialization Visitor for the YAML format.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ArrayTransformerInterface`](./docs/classes/JMS/Serializer/ArrayTransformerInterface.md) | Interface for array transformation.|
| [`SerializerInterface`](./docs/classes/JMS/Serializer/SerializerInterface.md) | Serializer Interface.|
| [`VisitorInterface`](./docs/classes/JMS/Serializer/VisitorInterface.md) | Interface for visitors.|

### \JMS\Serializer\Accessor

#### Classes

| Class | Description |
|-------|-------------|
| [`DefaultAccessorStrategy`](./docs/classes/JMS/Serializer/Accessor/DefaultAccessorStrategy.md) | |
| [`ExpressionAccessorStrategy`](./docs/classes/JMS/Serializer/Accessor/ExpressionAccessorStrategy.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AccessorStrategyInterface`](./docs/classes/JMS/Serializer/Accessor/AccessorStrategyInterface.md) | |

### \JMS\Serializer\Annotation

#### Classes

| Class | Description |
|-------|-------------|
| [`AccessType`](./docs/classes/JMS/Serializer/Annotation/AccessType.md) | |
| [`Accessor`](./docs/classes/JMS/Serializer/Annotation/Accessor.md) | |
| [`AccessorOrder`](./docs/classes/JMS/Serializer/Annotation/AccessorOrder.md) | Controls the order of properties in a class.|
| [`Discriminator`](./docs/classes/JMS/Serializer/Annotation/Discriminator.md) | |
| [`Exclude`](./docs/classes/JMS/Serializer/Annotation/Exclude.md) | |
| [`ExclusionPolicy`](./docs/classes/JMS/Serializer/Annotation/ExclusionPolicy.md) | |
| [`Expose`](./docs/classes/JMS/Serializer/Annotation/Expose.md) | |
| [`Groups`](./docs/classes/JMS/Serializer/Annotation/Groups.md) | |
| [`HandlerCallback`](./docs/classes/JMS/Serializer/Annotation/HandlerCallback.md) | |
| [`Inline`](./docs/classes/JMS/Serializer/Annotation/Inline.md) | |
| [`MaxDepth`](./docs/classes/JMS/Serializer/Annotation/MaxDepth.md) | |
| [`PostDeserialize`](./docs/classes/JMS/Serializer/Annotation/PostDeserialize.md) | This annotation can be defined on methods which are called after the<br />deserialization of the object is complete.|
| [`PostSerialize`](./docs/classes/JMS/Serializer/Annotation/PostSerialize.md) | |
| [`PreSerialize`](./docs/classes/JMS/Serializer/Annotation/PreSerialize.md) | This annotation can be declared on methods which should be called<br />before the Serialization process.|
| [`SerializedName`](./docs/classes/JMS/Serializer/Annotation/SerializedName.md) | |
| [`Since`](./docs/classes/JMS/Serializer/Annotation/Since.md) | |
| [`SkipWhenEmpty`](./docs/classes/JMS/Serializer/Annotation/SkipWhenEmpty.md) | |
| [`Type`](./docs/classes/JMS/Serializer/Annotation/Type.md) | |
| [`Until`](./docs/classes/JMS/Serializer/Annotation/Until.md) | |
| [`Version`](./docs/classes/JMS/Serializer/Annotation/Version.md) | |
| [`VirtualProperty`](./docs/classes/JMS/Serializer/Annotation/VirtualProperty.md) | |
| [`XmlAttribute`](./docs/classes/JMS/Serializer/Annotation/XmlAttribute.md) | |
| [`XmlAttributeMap`](./docs/classes/JMS/Serializer/Annotation/XmlAttributeMap.md) | |
| [`XmlCollection`](./docs/classes/JMS/Serializer/Annotation/XmlCollection.md) | |
| [`XmlDiscriminator`](./docs/classes/JMS/Serializer/Annotation/XmlDiscriminator.md) | |
| [`XmlElement`](./docs/classes/JMS/Serializer/Annotation/XmlElement.md) | |
| [`XmlKeyValuePairs`](./docs/classes/JMS/Serializer/Annotation/XmlKeyValuePairs.md) | |
| [`XmlList`](./docs/classes/JMS/Serializer/Annotation/XmlList.md) | |
| [`XmlMap`](./docs/classes/JMS/Serializer/Annotation/XmlMap.md) | |
| [`XmlNamespace`](./docs/classes/JMS/Serializer/Annotation/XmlNamespace.md) | |
| [`XmlRoot`](./docs/classes/JMS/Serializer/Annotation/XmlRoot.md) | |
| [`XmlValue`](./docs/classes/JMS/Serializer/Annotation/XmlValue.md) | |

### \JMS\Serializer\Builder

#### Classes

| Class | Description |
|-------|-------------|
| [`CallbackDriverFactory`](./docs/classes/JMS/Serializer/Builder/CallbackDriverFactory.md) | |
| [`DefaultDriverFactory`](./docs/classes/JMS/Serializer/Builder/DefaultDriverFactory.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`DriverFactoryInterface`](./docs/classes/JMS/Serializer/Builder/DriverFactoryInterface.md) | |

### \JMS\Serializer\Construction

#### Classes

| Class | Description |
|-------|-------------|
| [`DoctrineObjectConstructor`](./docs/classes/JMS/Serializer/Construction/DoctrineObjectConstructor.md) | Doctrine object constructor for new (or existing) objects during deserialization.|
| [`UnserializeObjectConstructor`](./docs/classes/JMS/Serializer/Construction/UnserializeObjectConstructor.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ObjectConstructorInterface`](./docs/classes/JMS/Serializer/Construction/ObjectConstructorInterface.md) | Implementations of this interface construct new objects during deserialization.|

### \JMS\Serializer\ContextFactory

#### Classes

| Class | Description |
|-------|-------------|
| [`CallableContextFactory`](./docs/classes/JMS/Serializer/ContextFactory/CallableContextFactory.md) | Context Factory using a callable.|
| [`CallableDeserializationContextFactory`](./docs/classes/JMS/Serializer/ContextFactory/CallableDeserializationContextFactory.md) | Deserialization Context Factory using a callable.|
| [`CallableSerializationContextFactory`](./docs/classes/JMS/Serializer/ContextFactory/CallableSerializationContextFactory.md) | Serialization Context Factory using a callable.|
| [`DefaultDeserializationContextFactory`](./docs/classes/JMS/Serializer/ContextFactory/DefaultDeserializationContextFactory.md) | Default Deserialization Context Factory.|
| [`DefaultSerializationContextFactory`](./docs/classes/JMS/Serializer/ContextFactory/DefaultSerializationContextFactory.md) | Default Serialization Context Factory.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`DeserializationContextFactoryInterface`](./docs/classes/JMS/Serializer/ContextFactory/DeserializationContextFactoryInterface.md) | Deserialization Context Factory Interface.|
| [`SerializationContextFactoryInterface`](./docs/classes/JMS/Serializer/ContextFactory/SerializationContextFactoryInterface.md) | Serialization Context Factory Interface.|

### \JMS\Serializer\EventDispatcher

#### Classes

| Class | Description |
|-------|-------------|
| [`Event`](./docs/classes/JMS/Serializer/EventDispatcher/Event.md) | |
| [`EventDispatcher`](./docs/classes/JMS/Serializer/EventDispatcher/EventDispatcher.md) | Light-weight event dispatcher.|
| [`Events`](./docs/classes/JMS/Serializer/EventDispatcher/Events.md) | |
| [`LazyEventDispatcher`](./docs/classes/JMS/Serializer/EventDispatcher/LazyEventDispatcher.md) | Light-weight event dispatcher.|
| [`ObjectEvent`](./docs/classes/JMS/Serializer/EventDispatcher/ObjectEvent.md) | |
| [`PreDeserializeEvent`](./docs/classes/JMS/Serializer/EventDispatcher/PreDeserializeEvent.md) | |
| [`PreSerializeEvent`](./docs/classes/JMS/Serializer/EventDispatcher/PreSerializeEvent.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`EventDispatcherInterface`](./docs/classes/JMS/Serializer/EventDispatcher/EventDispatcherInterface.md) | |
| [`EventSubscriberInterface`](./docs/classes/JMS/Serializer/EventDispatcher/EventSubscriberInterface.md) | |

### \JMS\Serializer\EventDispatcher\Subscriber

#### Classes

| Class | Description |
|-------|-------------|
| [`DoctrineProxySubscriber`](./docs/classes/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.md) | |
| [`SymfonyValidatorSubscriber`](./docs/classes/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.md) | |
| [`SymfonyValidatorValidatorSubscriber`](./docs/classes/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriber.md) | |

### \JMS\Serializer\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`ExpressionLanguageRequiredException`](./docs/classes/JMS/Serializer/Exception/ExpressionLanguageRequiredException.md) | LogicException for the Serializer.|
| [`InvalidArgumentException`](./docs/classes/JMS/Serializer/Exception/InvalidArgumentException.md) | InvalidArgumentException for the Serializer.|
| [`LogicException`](./docs/classes/JMS/Serializer/Exception/LogicException.md) | LogicException for the Serializer.|
| [`ObjectConstructionException`](./docs/classes/JMS/Serializer/Exception/ObjectConstructionException.md) | InvalidArgumentException for the Serializer.|
| [`RuntimeException`](./docs/classes/JMS/Serializer/Exception/RuntimeException.md) | RuntimeException for the Serializer.|
| [`UnsupportedFormatException`](./docs/classes/JMS/Serializer/Exception/UnsupportedFormatException.md) | InvalidArgumentException for the Serializer.|
| [`ValidationFailedException`](./docs/classes/JMS/Serializer/Exception/ValidationFailedException.md) | RuntimeException for the Serializer.|
| [`XmlErrorException`](./docs/classes/JMS/Serializer/Exception/XmlErrorException.md) | RuntimeException for the Serializer.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Exception`](./docs/classes/JMS/Serializer/Exception/Exception.md) | Base exception for the Serializer.|

### \JMS\Serializer\Exclusion

#### Classes

| Class | Description |
|-------|-------------|
| [`DepthExclusionStrategy`](./docs/classes/JMS/Serializer/Exclusion/DepthExclusionStrategy.md) | |
| [`DisjunctExclusionStrategy`](./docs/classes/JMS/Serializer/Exclusion/DisjunctExclusionStrategy.md) | Disjunct Exclusion Strategy.|
| [`GroupsExclusionStrategy`](./docs/classes/JMS/Serializer/Exclusion/GroupsExclusionStrategy.md) | |
| [`VersionExclusionStrategy`](./docs/classes/JMS/Serializer/Exclusion/VersionExclusionStrategy.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExclusionStrategyInterface`](./docs/classes/JMS/Serializer/Exclusion/ExclusionStrategyInterface.md) | Interface for exclusion strategies.|

### \JMS\Serializer\Expression

#### Classes

| Class | Description |
|-------|-------------|
| [`ExpressionEvaluator`](./docs/classes/JMS/Serializer/Expression/ExpressionEvaluator.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExpressionEvaluatorInterface`](./docs/classes/JMS/Serializer/Expression/ExpressionEvaluatorInterface.md) | |

### \JMS\Serializer\Handler

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayCollectionHandler`](./docs/classes/JMS/Serializer/Handler/ArrayCollectionHandler.md) | |
| [`ConstraintViolationHandler`](./docs/classes/JMS/Serializer/Handler/ConstraintViolationHandler.md) | |
| [`DateHandler`](./docs/classes/JMS/Serializer/Handler/DateHandler.md) | |
| [`FormErrorHandler`](./docs/classes/JMS/Serializer/Handler/FormErrorHandler.md) | |
| [`HandlerRegistry`](./docs/classes/JMS/Serializer/Handler/HandlerRegistry.md) | |
| [`LazyHandlerRegistry`](./docs/classes/JMS/Serializer/Handler/LazyHandlerRegistry.md) | |
| [`PhpCollectionHandler`](./docs/classes/JMS/Serializer/Handler/PhpCollectionHandler.md) | |
| [`PropelCollectionHandler`](./docs/classes/JMS/Serializer/Handler/PropelCollectionHandler.md) | |
| [`StdClassHandler`](./docs/classes/JMS/Serializer/Handler/StdClassHandler.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`HandlerRegistryInterface`](./docs/classes/JMS/Serializer/Handler/HandlerRegistryInterface.md) | Handler Registry Interface.|
| [`SubscribingHandlerInterface`](./docs/classes/JMS/Serializer/Handler/SubscribingHandlerInterface.md) | |

### \JMS\Serializer\Metadata

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassMetadata`](./docs/classes/JMS/Serializer/Metadata/ClassMetadata.md) | Class Metadata used to customize the serialization process.|
| [`ExpressionPropertyMetadata`](./docs/classes/JMS/Serializer/Metadata/ExpressionPropertyMetadata.md) | Base class for property metadata.|
| [`PropertyMetadata`](./docs/classes/JMS/Serializer/Metadata/PropertyMetadata.md) | Base class for property metadata.|
| [`StaticPropertyMetadata`](./docs/classes/JMS/Serializer/Metadata/StaticPropertyMetadata.md) | Base class for property metadata.|
| [`VirtualPropertyMetadata`](./docs/classes/JMS/Serializer/Metadata/VirtualPropertyMetadata.md) | Base class for property metadata.|

### \JMS\Serializer\Metadata\Driver

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractDoctrineTypeDriver`](./docs/classes/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.md) | This class decorates any other driver. If the inner driver does not provide a<br />a property type, the decorator will guess based on Doctrine 2 metadata.|
| [`AnnotationDriver`](./docs/classes/JMS/Serializer/Metadata/Driver/AnnotationDriver.md) | |
| [`DoctrinePHPCRTypeDriver`](./docs/classes/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.md) | This class decorates any other driver. If the inner driver does not provide a<br />a property type, the decorator will guess based on Doctrine 2 metadata.|
| [`DoctrineTypeDriver`](./docs/classes/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.md) | This class decorates any other driver. If the inner driver does not provide a<br />a property type, the decorator will guess based on Doctrine 2 metadata.|
| [`PhpDriver`](./docs/classes/JMS/Serializer/Metadata/Driver/PhpDriver.md) | Base file driver implementation.|
| [`XmlDriver`](./docs/classes/JMS/Serializer/Metadata/Driver/XmlDriver.md) | Base file driver implementation.|
| [`YamlDriver`](./docs/classes/JMS/Serializer/Metadata/Driver/YamlDriver.md) | Base file driver implementation.|

### \JMS\Serializer\Naming

#### Classes

| Class | Description |
|-------|-------------|
| [`CacheNamingStrategy`](./docs/classes/JMS/Serializer/Naming/CacheNamingStrategy.md) | |
| [`CamelCaseNamingStrategy`](./docs/classes/JMS/Serializer/Naming/CamelCaseNamingStrategy.md) | Generic naming strategy which translates a camel-cased property name.|
| [`IdenticalPropertyNamingStrategy`](./docs/classes/JMS/Serializer/Naming/IdenticalPropertyNamingStrategy.md) | |
| [`SerializedNameAnnotationStrategy`](./docs/classes/JMS/Serializer/Naming/SerializedNameAnnotationStrategy.md) | Naming strategy which uses an annotation to translate the property name.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`PropertyNamingStrategyInterface`](./docs/classes/JMS/Serializer/Naming/PropertyNamingStrategyInterface.md) | Interface for property naming strategies.|

### \JMS\Serializer\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`SerializerBuilderTest`](./docs/classes/JMS/Serializer/Tests/SerializerBuilderTest.md) | |

### \JMS\Serializer\Tests\Exclusion

#### Classes

| Class | Description |
|-------|-------------|
| [`DisjunctExclusionStrategyTest`](./docs/classes/JMS/Serializer/Tests/Exclusion/DisjunctExclusionStrategyTest.md) | |
| [`GroupsExclusionStrategyTest`](./docs/classes/JMS/Serializer/Tests/Exclusion/GroupsExclusionStrategyTest.md) | |

### \JMS\Serializer\Tests\Fixtures

#### Classes

| Class | Description |
|-------|-------------|
| [`AccessorOrderChild`](./docs/classes/JMS/Serializer/Tests/Fixtures/AccessorOrderChild.md) | |
| [`AccessorOrderMethod`](./docs/classes/JMS/Serializer/Tests/Fixtures/AccessorOrderMethod.md) | |
| [`AccessorOrderParent`](./docs/classes/JMS/Serializer/Tests/Fixtures/AccessorOrderParent.md) | |
| [`AccessorSetter`](./docs/classes/JMS/Serializer/Tests/Fixtures/AccessorSetter.md) | |
| [`AccessorSetterElement`](./docs/classes/JMS/Serializer/Tests/Fixtures/AccessorSetterElement.md) | |
| [`AllExcludedObject`](./docs/classes/JMS/Serializer/Tests/Fixtures/AllExcludedObject.md) | |
| [`Article`](./docs/classes/JMS/Serializer/Tests/Fixtures/Article.md) | |
| [`Author`](./docs/classes/JMS/Serializer/Tests/Fixtures/Author.md) | |
| [`AuthorExpressionAccess`](./docs/classes/JMS/Serializer/Tests/Fixtures/AuthorExpressionAccess.md) | |
| [`AuthorList`](./docs/classes/JMS/Serializer/Tests/Fixtures/AuthorList.md) | An array-acting object that holds many author instances.|
| [`AuthorReadOnly`](./docs/classes/JMS/Serializer/Tests/Fixtures/AuthorReadOnly.md) | |
| [`AuthorReadOnlyPerClass`](./docs/classes/JMS/Serializer/Tests/Fixtures/AuthorReadOnlyPerClass.md) | |
| [`BlogPost`](./docs/classes/JMS/Serializer/Tests/Fixtures/BlogPost.md) | |
| [`CircularReferenceChild`](./docs/classes/JMS/Serializer/Tests/Fixtures/CircularReferenceChild.md) | |
| [`CircularReferenceParent`](./docs/classes/JMS/Serializer/Tests/Fixtures/CircularReferenceParent.md) | No annotation|
| [`Comment`](./docs/classes/JMS/Serializer/Tests/Fixtures/Comment.md) | |
| [`CurrencyAwareOrder`](./docs/classes/JMS/Serializer/Tests/Fixtures/CurrencyAwareOrder.md) | |
| [`CurrencyAwarePrice`](./docs/classes/JMS/Serializer/Tests/Fixtures/CurrencyAwarePrice.md) | |
| [`CustomDeserializationObject`](./docs/classes/JMS/Serializer/Tests/Fixtures/CustomDeserializationObject.md) | |
| [`DateTimeArraysObject`](./docs/classes/JMS/Serializer/Tests/Fixtures/DateTimeArraysObject.md) | |
| [`Garage`](./docs/classes/JMS/Serializer/Tests/Fixtures/Garage.md) | |
| [`GetSetObject`](./docs/classes/JMS/Serializer/Tests/Fixtures/GetSetObject.md) | |
| [`GroupsObject`](./docs/classes/JMS/Serializer/Tests/Fixtures/GroupsObject.md) | blablub|
| [`GroupsUser`](./docs/classes/JMS/Serializer/Tests/Fixtures/GroupsUser.md) | |
| [`IndexedCommentsBlogPost`](./docs/classes/JMS/Serializer/Tests/Fixtures/IndexedCommentsBlogPost.md) | |
| [`IndexedCommentsList`](./docs/classes/JMS/Serializer/Tests/Fixtures/IndexedCommentsList.md) | |
| [`InitializedBlogPostConstructor`](./docs/classes/JMS/Serializer/Tests/Fixtures/InitializedBlogPostConstructor.md) | |
| [`InitializedObjectConstructor`](./docs/classes/JMS/Serializer/Tests/Fixtures/InitializedObjectConstructor.md) | Object constructor that allows deserialization into already constructed<br />objects passed through the deserialization context|
| [`InlineChild`](./docs/classes/JMS/Serializer/Tests/Fixtures/InlineChild.md) | |
| [`InlineChildEmpty`](./docs/classes/JMS/Serializer/Tests/Fixtures/InlineChildEmpty.md) | |
| [`InlineChildWithGroups`](./docs/classes/JMS/Serializer/Tests/Fixtures/InlineChildWithGroups.md) | |
| [`InlineParent`](./docs/classes/JMS/Serializer/Tests/Fixtures/InlineParent.md) | |
| [`Input`](./docs/classes/JMS/Serializer/Tests/Fixtures/Input.md) | |
| [`InvalidGroupsObject`](./docs/classes/JMS/Serializer/Tests/Fixtures/InvalidGroupsObject.md) | |
| [`InvalidUsageOfXmlValue`](./docs/classes/JMS/Serializer/Tests/Fixtures/InvalidUsageOfXmlValue.md) | Dummy|
| [`Log`](./docs/classes/JMS/Serializer/Tests/Fixtures/Log.md) | |
| [`NamedDateTimeArraysObject`](./docs/classes/JMS/Serializer/Tests/Fixtures/NamedDateTimeArraysObject.md) | |
| [`NamedDateTimeImmutableArraysObject`](./docs/classes/JMS/Serializer/Tests/Fixtures/NamedDateTimeImmutableArraysObject.md) | |
| [`Node`](./docs/classes/JMS/Serializer/Tests/Fixtures/Node.md) | |
| [`ObjectWithAbsentXmlListNode`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithAbsentXmlListNode.md) | |
| [`ObjectWithEmptyArrayAndHash`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithEmptyArrayAndHash.md) | |
| [`ObjectWithEmptyHash`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithEmptyHash.md) | |
| [`ObjectWithEmptyNullableAndEmptyArrays`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithEmptyNullableAndEmptyArrays.md) | |
| [`ObjectWithExpressionVirtualPropertiesAndExcludeAll`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithExpressionVirtualPropertiesAndExcludeAll.md) | |
| [`ObjectWithHandlerCallbacks`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithHandlerCallbacks.md) | |
| [`ObjectWithIntListAndIntMap`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithIntListAndIntMap.md) | |
| [`ObjectWithLifecycleCallbacks`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithLifecycleCallbacks.md) | |
| [`ObjectWithNamespacesAndList`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithNamespacesAndList.md) | |
| [`ObjectWithNullProperty`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithNullProperty.md) | |
| [`ObjectWithObjectProperty`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithObjectProperty.md) | |
| [`ObjectWithToString`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithToString.md) | |
| [`ObjectWithVersionedVirtualProperties`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithVersionedVirtualProperties.md) | dummy comment|
| [`ObjectWithVirtualProperties`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithVirtualProperties.md) | |
| [`ObjectWithVirtualPropertiesAndExcludeAll`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithVirtualPropertiesAndExcludeAll.md) | |
| [`ObjectWithVirtualXmlProperties`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithVirtualXmlProperties.md) | |
| [`ObjectWithXmlKeyValuePairs`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithXmlKeyValuePairs.md) | |
| [`ObjectWithXmlNamespaces`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithXmlNamespaces.md) | |
| [`ObjectWithXmlNamespacesAndObjectProperty`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithXmlNamespacesAndObjectProperty.md) | |
| [`ObjectWithXmlNamespacesAndObjectPropertyAuthor`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyAuthor.md) | |
| [`ObjectWithXmlNamespacesAndObjectPropertyVirtual`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyVirtual.md) | |
| [`ObjectWithXmlRootNamespace`](./docs/classes/JMS/Serializer/Tests/Fixtures/ObjectWithXmlRootNamespace.md) | |
| [`Order`](./docs/classes/JMS/Serializer/Tests/Fixtures/Order.md) | |
| [`ParentDoNotSkipWithEmptyChild`](./docs/classes/JMS/Serializer/Tests/Fixtures/ParentDoNotSkipWithEmptyChild.md) | |
| [`ParentSkipWithEmptyChild`](./docs/classes/JMS/Serializer/Tests/Fixtures/ParentSkipWithEmptyChild.md) | |
| [`Person`](./docs/classes/JMS/Serializer/Tests/Fixtures/Person.md) | |
| [`PersonCollection`](./docs/classes/JMS/Serializer/Tests/Fixtures/PersonCollection.md) | |
| [`PersonLocation`](./docs/classes/JMS/Serializer/Tests/Fixtures/PersonLocation.md) | |
| [`PersonSecret`](./docs/classes/JMS/Serializer/Tests/Fixtures/PersonSecret.md) | |
| [`PersonSecretMore`](./docs/classes/JMS/Serializer/Tests/Fixtures/PersonSecretMore.md) | |
| [`PersonSecretMoreVirtual`](./docs/classes/JMS/Serializer/Tests/Fixtures/PersonSecretMoreVirtual.md) | |
| [`PersonSecretVirtual`](./docs/classes/JMS/Serializer/Tests/Fixtures/PersonSecretVirtual.md) | |
| [`Price`](./docs/classes/JMS/Serializer/Tests/Fixtures/Price.md) | |
| [`Publisher`](./docs/classes/JMS/Serializer/Tests/Fixtures/Publisher.md) | |
| [`SimpleClassObject`](./docs/classes/JMS/Serializer/Tests/Fixtures/SimpleClassObject.md) | |
| [`SimpleObject`](./docs/classes/JMS/Serializer/Tests/Fixtures/SimpleObject.md) | |
| [`SimpleObjectProxy`](./docs/classes/JMS/Serializer/Tests/Fixtures/SimpleObjectProxy.md) | |
| [`SimpleSubClassObject`](./docs/classes/JMS/Serializer/Tests/Fixtures/SimpleSubClassObject.md) | |
| [`Tag`](./docs/classes/JMS/Serializer/Tests/Fixtures/Tag.md) | |
| [`Timestamp`](./docs/classes/JMS/Serializer/Tests/Fixtures/Timestamp.md) | |
| [`Tree`](./docs/classes/JMS/Serializer/Tests/Fixtures/Tree.md) | |
| [`VehicleInterfaceGarage`](./docs/classes/JMS/Serializer/Tests/Fixtures/VehicleInterfaceGarage.md) | |
| [`VersionedObject`](./docs/classes/JMS/Serializer/Tests/Fixtures/VersionedObject.md) | |

### \JMS\Serializer\Tests\Fixtures\Discriminator

#### Classes

| Class | Description |
|-------|-------------|
| [`Car`](./docs/classes/JMS/Serializer/Tests/Fixtures/Discriminator/Car.md) | |
| [`Moped`](./docs/classes/JMS/Serializer/Tests/Fixtures/Discriminator/Moped.md) | |
| [`ObjectWithXmlAttributeDiscriminatorChild`](./docs/classes/JMS/Serializer/Tests/Fixtures/Discriminator/ObjectWithXmlAttributeDiscriminatorChild.md) | |
| [`ObjectWithXmlAttributeDiscriminatorParent`](./docs/classes/JMS/Serializer/Tests/Fixtures/Discriminator/ObjectWithXmlAttributeDiscriminatorParent.md) | |
| [`ObjectWithXmlNamespaceDiscriminatorChild`](./docs/classes/JMS/Serializer/Tests/Fixtures/Discriminator/ObjectWithXmlNamespaceDiscriminatorChild.md) | |
| [`ObjectWithXmlNamespaceDiscriminatorParent`](./docs/classes/JMS/Serializer/Tests/Fixtures/Discriminator/ObjectWithXmlNamespaceDiscriminatorParent.md) | |
| [`ObjectWithXmlNotCDataDiscriminatorChild`](./docs/classes/JMS/Serializer/Tests/Fixtures/Discriminator/ObjectWithXmlNotCDataDiscriminatorChild.md) | |
| [`ObjectWithXmlNotCDataDiscriminatorParent`](./docs/classes/JMS/Serializer/Tests/Fixtures/Discriminator/ObjectWithXmlNotCDataDiscriminatorParent.md) | |
| [`Vehicle`](./docs/classes/JMS/Serializer/Tests/Fixtures/Discriminator/Vehicle.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`VehicleInterface`](./docs/classes/JMS/Serializer/Tests/Fixtures/Discriminator/VehicleInterface.md) | |

### \JMS\Serializer\Tests\Fixtures\DiscriminatorGroup

#### Classes

| Class | Description |
|-------|-------------|
| [`Car`](./docs/classes/JMS/Serializer/Tests/Fixtures/DiscriminatorGroup/Car.md) | |
| [`Vehicle`](./docs/classes/JMS/Serializer/Tests/Fixtures/DiscriminatorGroup/Vehicle.md) | |

### \JMS\Serializer\Tests\Fixtures\Doctrine

#### Classes

| Class | Description |
|-------|-------------|
| [`Author`](./docs/classes/JMS/Serializer/Tests/Fixtures/Doctrine/Author.md) | |
| [`BlogPost`](./docs/classes/JMS/Serializer/Tests/Fixtures/Doctrine/BlogPost.md) | |
| [`Comment`](./docs/classes/JMS/Serializer/Tests/Fixtures/Doctrine/Comment.md) | |

### \JMS\Serializer\Tests\Fixtures\DoctrinePHPCR

#### Classes

| Class | Description |
|-------|-------------|
| [`Author`](./docs/classes/JMS/Serializer/Tests/Fixtures/DoctrinePHPCR/Author.md) | |
| [`BlogPost`](./docs/classes/JMS/Serializer/Tests/Fixtures/DoctrinePHPCR/BlogPost.md) | |
| [`Comment`](./docs/classes/JMS/Serializer/Tests/Fixtures/DoctrinePHPCR/Comment.md) | |

### \JMS\Serializer\Tests\Fixtures\Doctrine\SingleTableInheritance

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractModel`](./docs/classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/AbstractModel.md) | Abstract base class without Entity annotation|
| [`Clazz`](./docs/classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/Clazz.md) | Abstract base class without Entity annotation|
| [`Organization`](./docs/classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/Organization.md) | |
| [`Person`](./docs/classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/Person.md) | Abstract base class without Entity annotation|
| [`School`](./docs/classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/School.md) | |
| [`Student`](./docs/classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/Student.md) | Abstract base class without Entity annotation|
| [`Teacher`](./docs/classes/JMS/Serializer/Tests/Fixtures/Doctrine/SingleTableInheritance/Teacher.md) | Abstract base class without Entity annotation|

### \JMS\Serializer\Tests\Fixtures\ExclusionStrategy

#### Classes

| Class | Description |
|-------|-------------|
| [`AlwaysExcludeExclusionStrategy`](./docs/classes/JMS/Serializer/Tests/Fixtures/ExclusionStrategy/AlwaysExcludeExclusionStrategy.md) | |

### \JMS\Serializer\Tests\Fixtures\MaxDepth

#### Classes

| Class | Description |
|-------|-------------|
| [`Gh236Bar`](./docs/classes/JMS/Serializer/Tests/Fixtures/MaxDepth/Gh236Bar.md) | |
| [`Gh236Foo`](./docs/classes/JMS/Serializer/Tests/Fixtures/MaxDepth/Gh236Foo.md) | |

### \JMS\Serializer\Tests\Handler

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayCollectionHandlerTest`](./docs/classes/JMS/Serializer/Tests/Handler/ArrayCollectionHandlerTest.md) | |
| [`FormErrorHandlerTest`](./docs/classes/JMS/Serializer/Tests/Handler/FormErrorHandlerTest.md) | |
| [`PropelCollectionHandlerTest`](./docs/classes/JMS/Serializer/Tests/Handler/PropelCollectionHandlerTest.md) | |
| [`TestSubject`](./docs/classes/JMS/Serializer/Tests/Handler/TestSubject.md) | |

### \JMS\Serializer\Tests\Metadata

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassMetadataTest`](./docs/classes/JMS/Serializer/Tests/Metadata/ClassMetadataTest.md) | |
| [`PropertyMetadataOrder`](./docs/classes/JMS/Serializer/Tests/Metadata/PropertyMetadataOrder.md) | |
| [`PropertyMetadataPublicMethod`](./docs/classes/JMS/Serializer/Tests/Metadata/PropertyMetadataPublicMethod.md) | |

### \JMS\Serializer\Tests\Metadata\Driver

#### Classes

| Class | Description |
|-------|-------------|
| [`AnnotationDriverTest`](./docs/classes/JMS/Serializer/Tests/Metadata/Driver/AnnotationDriverTest.md) | |
| [`BaseDriverTest`](./docs/classes/JMS/Serializer/Tests/Metadata/Driver/BaseDriverTest.md) | |
| [`DoctrineDriverTest`](./docs/classes/JMS/Serializer/Tests/Metadata/Driver/DoctrineDriverTest.md) | |
| [`DoctrinePHPCRDriverTest`](./docs/classes/JMS/Serializer/Tests/Metadata/Driver/DoctrinePHPCRDriverTest.md) | |
| [`PhpDriverTest`](./docs/classes/JMS/Serializer/Tests/Metadata/Driver/PhpDriverTest.md) | |
| [`XmlDriverTest`](./docs/classes/JMS/Serializer/Tests/Metadata/Driver/XmlDriverTest.md) | |
| [`YamlDriverTest`](./docs/classes/JMS/Serializer/Tests/Metadata/Driver/YamlDriverTest.md) | |

### \JMS\Serializer\Tests\Serializer

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayTest`](./docs/classes/JMS/Serializer/Tests/Serializer/ArrayTest.md) | |
| [`BaseSerializationTest`](./docs/classes/JMS/Serializer/Tests/Serializer/BaseSerializationTest.md) | |
| [`ContextTest`](./docs/classes/JMS/Serializer/Tests/Serializer/ContextTest.md) | |
| [`DateIntervalFormatTest`](./docs/classes/JMS/Serializer/Tests/Serializer/DateIntervalFormatTest.md) | |
| [`GraphNavigatorTest`](./docs/classes/JMS/Serializer/Tests/Serializer/GraphNavigatorTest.md) | |
| [`JsonSerializationTest`](./docs/classes/JMS/Serializer/Tests/Serializer/JsonSerializationTest.md) | |
| [`LinkAddingSubscriber`](./docs/classes/JMS/Serializer/Tests/Serializer/LinkAddingSubscriber.md) | |
| [`ReplaceNameSubscriber`](./docs/classes/JMS/Serializer/Tests/Serializer/ReplaceNameSubscriber.md) | |
| [`SerializableClass`](./docs/classes/JMS/Serializer/Tests/Serializer/SerializableClass.md) | |
| [`SerializationContextFactoryTest`](./docs/classes/JMS/Serializer/Tests/Serializer/SerializationContextFactoryTest.md) | |
| [`TestSubscribingHandler`](./docs/classes/JMS/Serializer/Tests/Serializer/TestSubscribingHandler.md) | |
| [`TypeParserTest`](./docs/classes/JMS/Serializer/Tests/Serializer/TypeParserTest.md) | |
| [`XmlSerializationTest`](./docs/classes/JMS/Serializer/Tests/Serializer/XmlSerializationTest.md) | |
| [`YamlSerializationTest`](./docs/classes/JMS/Serializer/Tests/Serializer/YamlSerializationTest.md) | |

### \JMS\Serializer\Tests\Serializer\Doctrine

#### Classes

| Class | Description |
|-------|-------------|
| [`IntegrationTest`](./docs/classes/JMS/Serializer/Tests/Serializer/Doctrine/IntegrationTest.md) | |
| [`ObjectConstructorTest`](./docs/classes/JMS/Serializer/Tests/Serializer/Doctrine/ObjectConstructorTest.md) | |
| [`SimpleBaseManagerRegistry`](./docs/classes/JMS/Serializer/Tests/Serializer/Doctrine/SimpleBaseManagerRegistry.md) | |
| [`SimpleManagerRegistry`](./docs/classes/JMS/Serializer/Tests/Serializer/Doctrine/SimpleManagerRegistry.md) | |

### \JMS\Serializer\Tests\Serializer\EventDispatcher

#### Classes

| Class | Description |
|-------|-------------|
| [`EventDispatcherTest`](./docs/classes/JMS/Serializer/Tests/Serializer/EventDispatcher/EventDispatcherTest.md) | |
| [`MockListener`](./docs/classes/JMS/Serializer/Tests/Serializer/EventDispatcher/MockListener.md) | |
| [`MockSubscriber`](./docs/classes/JMS/Serializer/Tests/Serializer/EventDispatcher/MockSubscriber.md) | |

### \JMS\Serializer\Tests\Serializer\EventDispatcher\Subscriber

#### Classes

| Class | Description |
|-------|-------------|
| [`DoctrineProxySubscriberTest`](./docs/classes/JMS/Serializer/Tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.md) | |
| [`SymfonyValidatorSubscriberTest`](./docs/classes/JMS/Serializer/Tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.md) | |
| [`SymfonyValidatorValidatorSubscriberTest`](./docs/classes/JMS/Serializer/Tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.md) | |

### \JMS\Serializer\Tests\Serializer\Naming

#### Classes

| Class | Description |
|-------|-------------|
| [`IdenticalPropertyNamingStrategyTest`](./docs/classes/JMS/Serializer/Tests/Serializer/Naming/IdenticalPropertyNamingStrategyTest.md) | |

### \JMS\Serializer\Tests\Twig

#### Classes

| Class | Description |
|-------|-------------|
| [`SerializerExtensionTest`](./docs/classes/JMS/Serializer/Tests/Twig/SerializerExtensionTest.md) | |

### \JMS\Serializer\Twig

#### Classes

| Class | Description |
|-------|-------------|
| [`SerializerExtension`](./docs/classes/JMS/Serializer/Twig/SerializerExtension.md) | Serializer helper twig extension|
| [`SerializerRuntimeExtension`](./docs/classes/JMS/Serializer/Twig/SerializerRuntimeExtension.md) | |
| [`SerializerRuntimeHelper`](./docs/classes/JMS/Serializer/Twig/SerializerRuntimeHelper.md) | |

### \JMS\Serializer\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`Writer`](./docs/classes/JMS/Serializer/Util/Writer.md) | A writer implementation.|

### \Metadata

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassHierarchyMetadata`](./docs/classes/Metadata/ClassHierarchyMetadata.md) | Represents the metadata for the entire class hierarchy.|
| [`ClassMetadata`](./docs/classes/Metadata/ClassMetadata.md) | Base class for class metadata.|
| [`MergeableClassMetadata`](./docs/classes/Metadata/MergeableClassMetadata.md) | Base class for class metadata.|
| [`MetadataFactory`](./docs/classes/Metadata/MetadataFactory.md) | |
| [`MethodMetadata`](./docs/classes/Metadata/MethodMetadata.md) | Base class for method metadata.|
| [`NullMetadata`](./docs/classes/Metadata/NullMetadata.md) | Represents the metadata for a class that has not metadata.|
| [`PropertyMetadata`](./docs/classes/Metadata/PropertyMetadata.md) | Base class for property metadata.|
| [`Version`](./docs/classes/Metadata/Version.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdvancedMetadataFactoryInterface`](./docs/classes/Metadata/AdvancedMetadataFactoryInterface.md) | Interface for advanced Metadata Factory implementations.|
| [`MergeableInterface`](./docs/classes/Metadata/MergeableInterface.md) | |
| [`MetadataFactoryInterface`](./docs/classes/Metadata/MetadataFactoryInterface.md) | Interface for Metadata Factory implementations.|

### \Metadata\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`DoctrineCacheAdapter`](./docs/classes/Metadata/Cache/DoctrineCacheAdapter.md) | |
| [`FileCache`](./docs/classes/Metadata/Cache/FileCache.md) | |
| [`PsrCacheAdapter`](./docs/classes/Metadata/Cache/PsrCacheAdapter.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CacheInterface`](./docs/classes/Metadata/Cache/CacheInterface.md) | |

### \Metadata\Driver

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractFileDriver`](./docs/classes/Metadata/Driver/AbstractFileDriver.md) | Base file driver implementation.|
| [`DriverChain`](./docs/classes/Metadata/Driver/DriverChain.md) | |
| [`FileLocator`](./docs/classes/Metadata/Driver/FileLocator.md) | |
| [`LazyLoadingDriver`](./docs/classes/Metadata/Driver/LazyLoadingDriver.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdvancedDriverInterface`](./docs/classes/Metadata/Driver/AdvancedDriverInterface.md) | Forces advanced logic to drivers.|
| [`AdvancedFileLocatorInterface`](./docs/classes/Metadata/Driver/AdvancedFileLocatorInterface.md) | Forces advanced logic on a file locator.|
| [`DriverInterface`](./docs/classes/Metadata/Driver/DriverInterface.md) | |
| [`FileLocatorInterface`](./docs/classes/Metadata/Driver/FileLocatorInterface.md) | |

### \Metadata\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassMetadataTest`](./docs/classes/Metadata/Tests/ClassMetadataTest.md) | |
| [`MergeableClassMetadataTest`](./docs/classes/Metadata/Tests/MergeableClassMetadataTest.md) | |
| [`MetadataFactoryTest`](./docs/classes/Metadata/Tests/MetadataFactoryTest.md) | |
| [`MethodMetadataTest`](./docs/classes/Metadata/Tests/MethodMetadataTest.md) | |
| [`PropertyMetadataTest`](./docs/classes/Metadata/Tests/PropertyMetadataTest.md) | |

### \Metadata\Tests\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`DoctrineCacheAdapterTest`](./docs/classes/Metadata/Tests/Cache/DoctrineCacheAdapterTest.md) | |
| [`FileCacheTest`](./docs/classes/Metadata/Tests/Cache/FileCacheTest.md) | |
| [`PsrCacheAdapterTest`](./docs/classes/Metadata/Tests/Cache/PsrCacheAdapterTest.md) | |

### \Metadata\Tests\Driver

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractFileDriverTest`](./docs/classes/Metadata/Tests/Driver/AbstractFileDriverTest.md) | |
| [`DriverChainTest`](./docs/classes/Metadata/Tests/Driver/DriverChainTest.md) | |
| [`FileLocatorTest`](./docs/classes/Metadata/Tests/Driver/FileLocatorTest.md) | |

### \Metadata\Tests\Driver\Fixture\A

#### Classes

| Class | Description |
|-------|-------------|
| [`A`](./docs/classes/Metadata/Tests/Driver/Fixture/A/A.md) | |

### \Metadata\Tests\Driver\Fixture\B

#### Classes

| Class | Description |
|-------|-------------|
| [`B`](./docs/classes/Metadata/Tests/Driver/Fixture/B/B.md) | |

### \Metadata\Tests\Driver\Fixture\C\SubDir

#### Classes

| Class | Description |
|-------|-------------|
| [`C`](./docs/classes/Metadata/Tests/Driver/Fixture/C/SubDir/C.md) | |

### \Metadata\Tests\Driver\Fixture\T

#### Traits

| Trait | Description |
|-------|-------------|
| [`T`](./docs/classes/Metadata/Tests/Driver/Fixture/T/T.md) | |

### \Metadata\Tests\Fixtures

#### Classes

| Class | Description |
|-------|-------------|
| [`TestObject`](./docs/classes/Metadata/Tests/Fixtures/TestObject.md) | |
| [`TestParent`](./docs/classes/Metadata/Tests/Fixtures/TestParent.md) | |

### \Metadata\Tests\Fixtures\ComplexHierarchy

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseClass`](./docs/classes/Metadata/Tests/Fixtures/ComplexHierarchy/BaseClass.md) | |
| [`SubClassA`](./docs/classes/Metadata/Tests/Fixtures/ComplexHierarchy/SubClassA.md) | |
| [`SubClassB`](./docs/classes/Metadata/Tests/Fixtures/ComplexHierarchy/SubClassB.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`InterfaceA`](./docs/classes/Metadata/Tests/Fixtures/ComplexHierarchy/InterfaceA.md) | |
| [`InterfaceB`](./docs/classes/Metadata/Tests/Fixtures/ComplexHierarchy/InterfaceB.md) | |

### \Monolog

#### Classes

| Class | Description |
|-------|-------------|
| [`ErrorHandler`](./docs/classes/Monolog/ErrorHandler.md) | Monolog error handler|
| [`Logger`](./docs/classes/Monolog/Logger.md) | Monolog log channel|
| [`Registry`](./docs/classes/Monolog/Registry.md) | Monolog log registry|
| [`SignalHandler`](./docs/classes/Monolog/SignalHandler.md) | Monolog POSIX signal handler|
| [`Utils`](./docs/classes/Monolog/Utils.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ResettableInterface`](./docs/classes/Monolog/ResettableInterface.md) | Handler or Processor implementing this interface will be reset when Logger::reset() is called.|

### \Monolog\Formatter

#### Classes

| Class | Description |
|-------|-------------|
| [`ChromePHPFormatter`](./docs/classes/Monolog/Formatter/ChromePHPFormatter.md) | Formats a log message according to the ChromePHP array format|
| [`ElasticaFormatter`](./docs/classes/Monolog/Formatter/ElasticaFormatter.md) | Format a log message into an Elastica Document|
| [`FlowdockFormatter`](./docs/classes/Monolog/Formatter/FlowdockFormatter.md) | formats the record to be used in the FlowdockHandler|
| [`FluentdFormatter`](./docs/classes/Monolog/Formatter/FluentdFormatter.md) | Class FluentdFormatter|
| [`GelfMessageFormatter`](./docs/classes/Monolog/Formatter/GelfMessageFormatter.md) | Serializes a log message to GELF|
| [`HtmlFormatter`](./docs/classes/Monolog/Formatter/HtmlFormatter.md) | Formats incoming records into an HTML table|
| [`JsonFormatter`](./docs/classes/Monolog/Formatter/JsonFormatter.md) | Encodes whatever record data is passed to it as json|
| [`LineFormatter`](./docs/classes/Monolog/Formatter/LineFormatter.md) | Formats incoming records into a one-line string|
| [`LogglyFormatter`](./docs/classes/Monolog/Formatter/LogglyFormatter.md) | Encodes message information into JSON in a format compatible with Loggly.|
| [`LogstashFormatter`](./docs/classes/Monolog/Formatter/LogstashFormatter.md) | Serializes a log message to Logstash Event Format|
| [`MongoDBFormatter`](./docs/classes/Monolog/Formatter/MongoDBFormatter.md) | Formats a record for use with the MongoDBHandler.|
| [`NormalizerFormatter`](./docs/classes/Monolog/Formatter/NormalizerFormatter.md) | Normalizes incoming records to remove objects/resources so it&#039;s easier to dump to various targets|
| [`ScalarFormatter`](./docs/classes/Monolog/Formatter/ScalarFormatter.md) | Formats data into an associative array of scalar values.|
| [`WildfireFormatter`](./docs/classes/Monolog/Formatter/WildfireFormatter.md) | Serializes a log message according to Wildfire&#039;s header requirements|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FormatterInterface`](./docs/classes/Monolog/Formatter/FormatterInterface.md) | Interface for formatters|

### \Monolog\Handler

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractHandler`](./docs/classes/Monolog/Handler/AbstractHandler.md) | Base Handler class providing the Handler structure|
| [`AbstractProcessingHandler`](./docs/classes/Monolog/Handler/AbstractProcessingHandler.md) | Base Handler class providing the Handler structure|
| [`AbstractSyslogHandler`](./docs/classes/Monolog/Handler/AbstractSyslogHandler.md) | Common syslog functionality|
| [`AmqpHandler`](./docs/classes/Monolog/Handler/AmqpHandler.md) | Base Handler class providing the Handler structure|
| [`BrowserConsoleHandler`](./docs/classes/Monolog/Handler/BrowserConsoleHandler.md) | Handler sending logs to browser&#039;s javascript console with no browser extension required|
| [`BufferHandler`](./docs/classes/Monolog/Handler/BufferHandler.md) | Buffers all records until closing the handler and then pass them as batch.|
| [`ChromePHPHandler`](./docs/classes/Monolog/Handler/ChromePHPHandler.md) | Handler sending logs to the ChromePHP extension (http://www.chromephp.com/)|
| [`CouchDBHandler`](./docs/classes/Monolog/Handler/CouchDBHandler.md) | CouchDB handler|
| [`CubeHandler`](./docs/classes/Monolog/Handler/CubeHandler.md) | Logs to Cube.|
| [`DeduplicationHandler`](./docs/classes/Monolog/Handler/DeduplicationHandler.md) | Simple handler wrapper that deduplicates log records across multiple requests|
| [`DoctrineCouchDBHandler`](./docs/classes/Monolog/Handler/DoctrineCouchDBHandler.md) | CouchDB handler for Doctrine CouchDB ODM|
| [`DynamoDbHandler`](./docs/classes/Monolog/Handler/DynamoDbHandler.md) | Amazon DynamoDB handler (http://aws.amazon.com/dynamodb/)|
| [`ElasticSearchHandler`](./docs/classes/Monolog/Handler/ElasticSearchHandler.md) | Elastic Search handler|
| [`ErrorLogHandler`](./docs/classes/Monolog/Handler/ErrorLogHandler.md) | Stores to PHP error_log() handler.|
| [`FilterHandler`](./docs/classes/Monolog/Handler/FilterHandler.md) | Simple handler wrapper that filters records based on a list of levels|
| [`FingersCrossedHandler`](./docs/classes/Monolog/Handler/FingersCrossedHandler.md) | Buffers all records until a certain level is reached|
| [`FirePHPHandler`](./docs/classes/Monolog/Handler/FirePHPHandler.md) | Simple FirePHP Handler (http://www.firephp.org/), which uses the Wildfire protocol.|
| [`FleepHookHandler`](./docs/classes/Monolog/Handler/FleepHookHandler.md) | Sends logs to Fleep.io using Webhook integrations|
| [`FlowdockHandler`](./docs/classes/Monolog/Handler/FlowdockHandler.md) | Sends notifications through the Flowdock push API|
| [`GelfHandler`](./docs/classes/Monolog/Handler/GelfHandler.md) | Handler to send messages to a Graylog2 (http://www.graylog2.org) server|
| [`GroupHandler`](./docs/classes/Monolog/Handler/GroupHandler.md) | Forwards records to multiple handlers|
| [`HandlerWrapper`](./docs/classes/Monolog/Handler/HandlerWrapper.md) | This simple wrapper class can be used to extend handlers functionality.|
| [`HipChatHandler`](./docs/classes/Monolog/Handler/HipChatHandler.md) | Sends notifications through the hipchat api to a hipchat room|
| [`IFTTTHandler`](./docs/classes/Monolog/Handler/IFTTTHandler.md) | IFTTTHandler uses cURL to trigger IFTTT Maker actions|
| [`InsightOpsHandler`](./docs/classes/Monolog/Handler/InsightOpsHandler.md) | Inspired on LogEntriesHandler.|
| [`LogEntriesHandler`](./docs/classes/Monolog/Handler/LogEntriesHandler.md) | Stores to any socket - uses fsockopen() or pfsockopen().|
| [`LogglyHandler`](./docs/classes/Monolog/Handler/LogglyHandler.md) | Sends errors to Loggly.|
| [`MailHandler`](./docs/classes/Monolog/Handler/MailHandler.md) | Base class for all mail handlers|
| [`MandrillHandler`](./docs/classes/Monolog/Handler/MandrillHandler.md) | MandrillHandler uses cURL to send the emails to the Mandrill API|
| [`MissingExtensionException`](./docs/classes/Monolog/Handler/MissingExtensionException.md) | Exception can be thrown if an extension for an handler is missing|
| [`MongoDBHandler`](./docs/classes/Monolog/Handler/MongoDBHandler.md) | Logs to a MongoDB database.|
| [`NativeMailerHandler`](./docs/classes/Monolog/Handler/NativeMailerHandler.md) | NativeMailerHandler uses the mail() function to send the emails|
| [`NewRelicHandler`](./docs/classes/Monolog/Handler/NewRelicHandler.md) | Class to record a log on a NewRelic application.|
| [`NullHandler`](./docs/classes/Monolog/Handler/NullHandler.md) | Blackhole|
| [`PHPConsoleHandler`](./docs/classes/Monolog/Handler/PHPConsoleHandler.md) | Monolog handler for Google Chrome extension &quot;PHP Console&quot;|
| [`PsrHandler`](./docs/classes/Monolog/Handler/PsrHandler.md) | Proxies log messages to an existing PSR-3 compliant logger.|
| [`PushoverHandler`](./docs/classes/Monolog/Handler/PushoverHandler.md) | Sends notifications through the pushover api to mobile phones|
| [`RavenHandler`](./docs/classes/Monolog/Handler/RavenHandler.md) | Handler to send messages to a Sentry (https://github.com/getsentry/sentry) server<br />using sentry-php (https://github.com/getsentry/sentry-php)|
| [`RedisHandler`](./docs/classes/Monolog/Handler/RedisHandler.md) | Logs to a Redis key using rpush|
| [`RollbarHandler`](./docs/classes/Monolog/Handler/RollbarHandler.md) | Sends errors to Rollbar|
| [`RotatingFileHandler`](./docs/classes/Monolog/Handler/RotatingFileHandler.md) | Stores logs to files that are rotated every day and a limited number of files are kept.|
| [`SamplingHandler`](./docs/classes/Monolog/Handler/SamplingHandler.md) | Sampling handler|
| [`SlackHandler`](./docs/classes/Monolog/Handler/SlackHandler.md) | Sends notifications through Slack API|
| [`SlackWebhookHandler`](./docs/classes/Monolog/Handler/SlackWebhookHandler.md) | Sends notifications through Slack Webhooks|
| [`SlackbotHandler`](./docs/classes/Monolog/Handler/SlackbotHandler.md) | Sends notifications through Slack&#039;s Slackbot|
| [`SocketHandler`](./docs/classes/Monolog/Handler/SocketHandler.md) | Stores to any socket - uses fsockopen() or pfsockopen().|
| [`StreamHandler`](./docs/classes/Monolog/Handler/StreamHandler.md) | Stores to any stream resource|
| [`SwiftMailerHandler`](./docs/classes/Monolog/Handler/SwiftMailerHandler.md) | SwiftMailerHandler uses Swift_Mailer to send the emails|
| [`SyslogHandler`](./docs/classes/Monolog/Handler/SyslogHandler.md) | Logs to syslog service.|
| [`SyslogUdpHandler`](./docs/classes/Monolog/Handler/SyslogUdpHandler.md) | A Handler for logging to a remote syslogd server.|
| [`TestHandler`](./docs/classes/Monolog/Handler/TestHandler.md) | Used for testing purposes.|
| [`WhatFailureGroupHandler`](./docs/classes/Monolog/Handler/WhatFailureGroupHandler.md) | Forwards records to multiple handlers suppressing failures of each handler<br />and continuing through to give every handler a chance to succeed.|
| [`ZendMonitorHandler`](./docs/classes/Monolog/Handler/ZendMonitorHandler.md) | Handler sending logs to Zend Monitor|

#### Traits

| Trait | Description |
|-------|-------------|
| [`FormattableHandlerTrait`](./docs/classes/Monolog/Handler/FormattableHandlerTrait.md) | Helper trait for implementing FormattableInterface|
| [`ProcessableHandlerTrait`](./docs/classes/Monolog/Handler/ProcessableHandlerTrait.md) | Helper trait for implementing ProcessableInterface|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FormattableHandlerInterface`](./docs/classes/Monolog/Handler/FormattableHandlerInterface.md) | Interface to describe loggers that have a formatter|
| [`HandlerInterface`](./docs/classes/Monolog/Handler/HandlerInterface.md) | Interface that all Monolog Handlers must implement|
| [`ProcessableHandlerInterface`](./docs/classes/Monolog/Handler/ProcessableHandlerInterface.md) | Interface to describe loggers that have processors|

### \Monolog\Handler\Curl

#### Classes

| Class | Description |
|-------|-------------|
| [`Util`](./docs/classes/Monolog/Handler/Curl/Util.md) | |

### \Monolog\Handler\FingersCrossed

#### Classes

| Class | Description |
|-------|-------------|
| [`ChannelLevelActivationStrategy`](./docs/classes/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.md) | Channel and Error level based monolog activation strategy. Allows to trigger activation<br />based on level per channel. e.g. trigger activation on level &#039;ERROR&#039; by default, except<br />for records of the &#039;sql&#039; channel; those should trigger activation on level &#039;WARN&#039;.|
| [`ErrorLevelActivationStrategy`](./docs/classes/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.md) | Error level based activation strategy.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ActivationStrategyInterface`](./docs/classes/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.md) | Interface for activation strategies for the FingersCrossedHandler.|

### \Monolog\Handler\Slack

#### Classes

| Class | Description |
|-------|-------------|
| [`SlackRecord`](./docs/classes/Monolog/Handler/Slack/SlackRecord.md) | Slack record utility helping to log to Slack webhooks or API.|

### \Monolog\Handler\SyslogUdp

#### Classes

| Class | Description |
|-------|-------------|
| [`UdpSocket`](./docs/classes/Monolog/Handler/SyslogUdp/UdpSocket.md) | |

### \Monolog\Processor

#### Classes

| Class | Description |
|-------|-------------|
| [`GitProcessor`](./docs/classes/Monolog/Processor/GitProcessor.md) | Injects Git branch and Git commit SHA in all records|
| [`IntrospectionProcessor`](./docs/classes/Monolog/Processor/IntrospectionProcessor.md) | Injects line/file:class/function where the log message came from|
| [`MemoryPeakUsageProcessor`](./docs/classes/Monolog/Processor/MemoryPeakUsageProcessor.md) | Injects memory_get_peak_usage in all records|
| [`MemoryProcessor`](./docs/classes/Monolog/Processor/MemoryProcessor.md) | Some methods that are common for all memory processors|
| [`MemoryUsageProcessor`](./docs/classes/Monolog/Processor/MemoryUsageProcessor.md) | Injects memory_get_usage in all records|
| [`MercurialProcessor`](./docs/classes/Monolog/Processor/MercurialProcessor.md) | Injects Hg branch and Hg revision number in all records|
| [`ProcessIdProcessor`](./docs/classes/Monolog/Processor/ProcessIdProcessor.md) | Adds value of getmypid into records|
| [`PsrLogMessageProcessor`](./docs/classes/Monolog/Processor/PsrLogMessageProcessor.md) | Processes a record&#039;s message according to PSR-3 rules|
| [`TagProcessor`](./docs/classes/Monolog/Processor/TagProcessor.md) | Adds a tags array into record|
| [`UidProcessor`](./docs/classes/Monolog/Processor/UidProcessor.md) | Adds a unique identifier into records|
| [`WebProcessor`](./docs/classes/Monolog/Processor/WebProcessor.md) | Injects url/method and remote IP of the current web request in all records|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ProcessorInterface`](./docs/classes/Monolog/Processor/ProcessorInterface.md) | An optional interface to allow labelling Monolog processors.|

### \PHPDocMD

#### Classes

| Class | Description |
|-------|-------------|
| [`Generator`](./docs/classes/PHPDocMD/Generator.md) | This class takes the output from &#039;parser&#039;, and generate the markdown<br />templates.|
| [`Parser`](./docs/classes/PHPDocMD/Parser.md) | This class parses structure.xml and generates the api documentation.|

### \PhpCollection

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractCollection`](./docs/classes/PhpCollection/AbstractCollection.md) | |
| [`AbstractMap`](./docs/classes/PhpCollection/AbstractMap.md) | A simple map implementation which basically wraps an array with an object oriented interface.|
| [`AbstractSequence`](./docs/classes/PhpCollection/AbstractSequence.md) | A sequence with numerically indexed elements.|
| [`Map`](./docs/classes/PhpCollection/Map.md) | A simple map implementation which basically wraps an array with an object oriented interface.|
| [`ObjectBasicsHandlerRegistry`](./docs/classes/PhpCollection/ObjectBasicsHandlerRegistry.md) | Registry for handlers that provide ObjectBasics functionality for classes.|
| [`Sequence`](./docs/classes/PhpCollection/Sequence.md) | Unsorted sequence implementation.|
| [`Set`](./docs/classes/PhpCollection/Set.md) | Implementation of a Set.|
| [`SortedSequence`](./docs/classes/PhpCollection/SortedSequence.md) | A sequence with a fixed sort-order.|

#### Traits

| Trait | Description |
|-------|-------------|
| [`EntityLikeObject`](./docs/classes/PhpCollection/EntityLikeObject.md) | Implementation for ObjectBasics for entity-like objects.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CollectionInterface`](./docs/classes/PhpCollection/CollectionInterface.md) | Basic interface which adds some behaviors, and a few methods common to all collections.|
| [`MapInterface`](./docs/classes/PhpCollection/MapInterface.md) | Basic map interface.|
| [`ObjectBasics`](./docs/classes/PhpCollection/ObjectBasics.md) | Interface that must be implemented by objects that are used as keys, or in sets.|
| [`ObjectBasicsHandler`](./docs/classes/PhpCollection/ObjectBasicsHandler.md) | Interface for external handlers that provide ObjectBasics functionality.|
| [`SequenceInterface`](./docs/classes/PhpCollection/SequenceInterface.md) | Interface for mutable sequences.|
| [`SetInterface`](./docs/classes/PhpCollection/SetInterface.md) | Interface for sets.|
| [`SortableInterface`](./docs/classes/PhpCollection/SortableInterface.md) | Interface for sortable collections.|

### \PhpCollection\ObjectBasicsHandler

#### Classes

| Class | Description |
|-------|-------------|
| [`DateTimeHandler`](./docs/classes/PhpCollection/ObjectBasicsHandler/DateTimeHandler.md) | |
| [`IdentityHandler`](./docs/classes/PhpCollection/ObjectBasicsHandler/IdentityHandler.md) | |

### \PhpCollection\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`MapTest`](./docs/classes/PhpCollection/Tests/MapTest.md) | |
| [`ObjectThatImplementsBasics`](./docs/classes/PhpCollection/Tests/ObjectThatImplementsBasics.md) | |
| [`SequenceTest`](./docs/classes/PhpCollection/Tests/SequenceTest.md) | |
| [`SetTest`](./docs/classes/PhpCollection/Tests/SetTest.md) | |
| [`SortedSequenceTest`](./docs/classes/PhpCollection/Tests/SortedSequenceTest.md) | |

### \PhpDocumentorMarkdown\Example

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractProduct`](./docs/classes/PhpDocumentorMarkdown/Example/AbstractProduct.md) | Base class for all products.|
| [`Pizza`](./docs/classes/PhpDocumentorMarkdown/Example/Pizza.md) | A pizza.|

#### Traits

| Trait | Description |
|-------|-------------|
| [`ReviewableTrait`](./docs/classes/PhpDocumentorMarkdown/Example/ReviewableTrait.md) | A trait for reviewable objects.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ProductInterface`](./docs/classes/PhpDocumentorMarkdown/Example/ProductInterface.md) | Interface for a product.|

### \PhpDocumentorMarkdown\Example\Pizza

#### Classes

| Class | Description |
|-------|-------------|
| [`Base`](./docs/classes/PhpDocumentorMarkdown/Example/Pizza/Base.md) | Represents a pizza base.|
| [`Sauce`](./docs/classes/PhpDocumentorMarkdown/Example/Pizza/Sauce.md) | Pizza sauce class.|

### \PhpDocumentorMarkdown\Extension

#### Classes

| Class | Description |
|-------|-------------|
| [`JsonExtension`](./docs/classes/PhpDocumentorMarkdown/Extension/JsonExtension.md) | |
| [`MacroDataExtension`](./docs/classes/PhpDocumentorMarkdown/Extension/MacroDataExtension.md) | |
| [`ObjectExtension`](./docs/classes/PhpDocumentorMarkdown/Extension/ObjectExtension.md) | |

### \PhpDocumentorMarkdown\Test\Twig

#### Classes

| Class | Description |
|-------|-------------|
| [`Extension`](./docs/classes/PhpDocumentorMarkdown/Test/Twig/Extension.md) | |
| [`TestCase`](./docs/classes/PhpDocumentorMarkdown/Test/Twig/TestCase.md) | |

### \PhpDocumentorMarkdown\Test\Twig\Macro

#### Classes

| Class | Description |
|-------|-------------|
| [`MacroData`](./docs/classes/PhpDocumentorMarkdown/Test/Twig/Macro/MacroData.md) | |
| [`MacroTest`](./docs/classes/PhpDocumentorMarkdown/Test/Twig/Macro/MacroTest.md) | |
| [`MacroTestCase`](./docs/classes/PhpDocumentorMarkdown/Test/Twig/Macro/MacroTestCase.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`MacroFunctionsTrait`](./docs/classes/PhpDocumentorMarkdown/Test/Twig/Macro/MacroFunctionsTrait.md) | A PHP wrapper for Twig macros. Used for testing.|

### \PhpOption

#### Classes

| Class | Description |
|-------|-------------|
| [`LazyOption`](./docs/classes/PhpOption/LazyOption.md) | |
| [`None`](./docs/classes/PhpOption/None.md) | |
| [`Some`](./docs/classes/PhpOption/Some.md) | |

### \PhpParser

#### Classes

| Class | Description |
|-------|-------------|
| [`Autoloader`](./docs/classes/PhpParser/Autoloader.md) | |
| [`AutoloaderTest`](./docs/classes/PhpParser/AutoloaderTest.md) | |
| [`BuilderAbstract`](./docs/classes/PhpParser/BuilderAbstract.md) | |
| [`BuilderFactory`](./docs/classes/PhpParser/BuilderFactory.md) | The following methods use reserved keywords, so their implementation is defined with an underscore and made available<br />with the reserved name through __call() magic.|
| [`BuilderFactoryTest`](./docs/classes/PhpParser/BuilderFactoryTest.md) | |
| [`CodeTestAbstract`](./docs/classes/PhpParser/CodeTestAbstract.md) | |
| [`Comment`](./docs/classes/PhpParser/Comment.md) | |
| [`CommentTest`](./docs/classes/PhpParser/CommentTest.md) | |
| [`DummyNode`](./docs/classes/PhpParser/DummyNode.md) | |
| [`Error`](./docs/classes/PhpParser/Error.md) | |
| [`ErrorTest`](./docs/classes/PhpParser/ErrorTest.md) | |
| [`InvalidTokenLexer`](./docs/classes/PhpParser/InvalidTokenLexer.md) | |
| [`Lexer`](./docs/classes/PhpParser/Lexer.md) | |
| [`LexerTest`](./docs/classes/PhpParser/LexerTest.md) | |
| [`NodeAbstract`](./docs/classes/PhpParser/NodeAbstract.md) | |
| [`NodeAbstractTest`](./docs/classes/PhpParser/NodeAbstractTest.md) | |
| [`NodeDumper`](./docs/classes/PhpParser/NodeDumper.md) | |
| [`NodeDumperTest`](./docs/classes/PhpParser/NodeDumperTest.md) | |
| [`NodeTraverser`](./docs/classes/PhpParser/NodeTraverser.md) | |
| [`NodeTraverserTest`](./docs/classes/PhpParser/NodeTraverserTest.md) | |
| [`NodeVisitorAbstract`](./docs/classes/PhpParser/NodeVisitorAbstract.md) | |
| [`Parser`](./docs/classes/PhpParser/Parser.md) | |
| [`ParserAbstract`](./docs/classes/PhpParser/ParserAbstract.md) | |
| [`ParserTest`](./docs/classes/PhpParser/ParserTest.md) | |
| [`PrettyPrinterAbstract`](./docs/classes/PhpParser/PrettyPrinterAbstract.md) | |
| [`PrettyPrinterTest`](./docs/classes/PhpParser/PrettyPrinterTest.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Builder`](./docs/classes/PhpParser/Builder.md) | |
| [`Node`](./docs/classes/PhpParser/Node.md) | |
| [`NodeTraverserInterface`](./docs/classes/PhpParser/NodeTraverserInterface.md) | |
| [`NodeVisitor`](./docs/classes/PhpParser/NodeVisitor.md) | |
| [`Serializer`](./docs/classes/PhpParser/Serializer.md) | |
| [`Unserializer`](./docs/classes/PhpParser/Unserializer.md) | |

### \PhpParser\Builder

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassTest`](./docs/classes/PhpParser/Builder/ClassTest.md) | |
| [`Class_`](./docs/classes/PhpParser/Builder/Class_.md) | |
| [`Declaration`](./docs/classes/PhpParser/Builder/Declaration.md) | |
| [`FunctionLike`](./docs/classes/PhpParser/Builder/FunctionLike.md) | |
| [`FunctionTest`](./docs/classes/PhpParser/Builder/FunctionTest.md) | |
| [`Function_`](./docs/classes/PhpParser/Builder/Function_.md) | |
| [`InterfaceTest`](./docs/classes/PhpParser/Builder/InterfaceTest.md) | |
| [`Interface_`](./docs/classes/PhpParser/Builder/Interface_.md) | |
| [`Method`](./docs/classes/PhpParser/Builder/Method.md) | |
| [`MethodTest`](./docs/classes/PhpParser/Builder/MethodTest.md) | |
| [`NamespaceTest`](./docs/classes/PhpParser/Builder/NamespaceTest.md) | |
| [`Namespace_`](./docs/classes/PhpParser/Builder/Namespace_.md) | |
| [`Param`](./docs/classes/PhpParser/Builder/Param.md) | |
| [`ParamTest`](./docs/classes/PhpParser/Builder/ParamTest.md) | |
| [`Property`](./docs/classes/PhpParser/Builder/Property.md) | |
| [`PropertyTest`](./docs/classes/PhpParser/Builder/PropertyTest.md) | |
| [`TraitTest`](./docs/classes/PhpParser/Builder/TraitTest.md) | |
| [`Trait_`](./docs/classes/PhpParser/Builder/Trait_.md) | |
| [`Use_`](./docs/classes/PhpParser/Builder/Use_.md) | |

### \PhpParser\Comment

#### Classes

| Class | Description |
|-------|-------------|
| [`Doc`](./docs/classes/PhpParser/Comment/Doc.md) | |

### \PhpParser\Lexer

#### Classes

| Class | Description |
|-------|-------------|
| [`Emulative`](./docs/classes/PhpParser/Lexer/Emulative.md) | ATTENTION: This code is WRITE-ONLY. Do not try to read it.|
| [`EmulativeTest`](./docs/classes/PhpParser/Lexer/EmulativeTest.md) | |

### \PhpParser\Node

#### Classes

| Class | Description |
|-------|-------------|
| [`Arg`](./docs/classes/PhpParser/Node/Arg.md) | |
| [`Const_`](./docs/classes/PhpParser/Node/Const_.md) | |
| [`Expr`](./docs/classes/PhpParser/Node/Expr.md) | |
| [`Name`](./docs/classes/PhpParser/Node/Name.md) | |
| [`NameTest`](./docs/classes/PhpParser/Node/NameTest.md) | |
| [`Param`](./docs/classes/PhpParser/Node/Param.md) | |
| [`Scalar`](./docs/classes/PhpParser/Node/Scalar.md) | |
| [`Stmt`](./docs/classes/PhpParser/Node/Stmt.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FunctionLike`](./docs/classes/PhpParser/Node/FunctionLike.md) | |

### \PhpParser\NodeVisitor

#### Classes

| Class | Description |
|-------|-------------|
| [`NameResolver`](./docs/classes/PhpParser/NodeVisitor/NameResolver.md) | |
| [`NameResolverTest`](./docs/classes/PhpParser/NodeVisitor/NameResolverTest.md) | |

### \PhpParser\Node\Expr

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayDimFetch`](./docs/classes/PhpParser/Node/Expr/ArrayDimFetch.md) | |
| [`ArrayItem`](./docs/classes/PhpParser/Node/Expr/ArrayItem.md) | |
| [`Array_`](./docs/classes/PhpParser/Node/Expr/Array_.md) | |
| [`Assign`](./docs/classes/PhpParser/Node/Expr/Assign.md) | |
| [`AssignOp`](./docs/classes/PhpParser/Node/Expr/AssignOp.md) | |
| [`AssignRef`](./docs/classes/PhpParser/Node/Expr/AssignRef.md) | |
| [`BinaryOp`](./docs/classes/PhpParser/Node/Expr/BinaryOp.md) | |
| [`BitwiseNot`](./docs/classes/PhpParser/Node/Expr/BitwiseNot.md) | |
| [`BooleanNot`](./docs/classes/PhpParser/Node/Expr/BooleanNot.md) | |
| [`Cast`](./docs/classes/PhpParser/Node/Expr/Cast.md) | |
| [`ClassConstFetch`](./docs/classes/PhpParser/Node/Expr/ClassConstFetch.md) | |
| [`Clone_`](./docs/classes/PhpParser/Node/Expr/Clone_.md) | |
| [`Closure`](./docs/classes/PhpParser/Node/Expr/Closure.md) | |
| [`ClosureUse`](./docs/classes/PhpParser/Node/Expr/ClosureUse.md) | |
| [`ConstFetch`](./docs/classes/PhpParser/Node/Expr/ConstFetch.md) | |
| [`Empty_`](./docs/classes/PhpParser/Node/Expr/Empty_.md) | |
| [`ErrorSuppress`](./docs/classes/PhpParser/Node/Expr/ErrorSuppress.md) | |
| [`Eval_`](./docs/classes/PhpParser/Node/Expr/Eval_.md) | |
| [`Exit_`](./docs/classes/PhpParser/Node/Expr/Exit_.md) | |
| [`FuncCall`](./docs/classes/PhpParser/Node/Expr/FuncCall.md) | |
| [`Include_`](./docs/classes/PhpParser/Node/Expr/Include_.md) | |
| [`Instanceof_`](./docs/classes/PhpParser/Node/Expr/Instanceof_.md) | |
| [`Isset_`](./docs/classes/PhpParser/Node/Expr/Isset_.md) | |
| [`List_`](./docs/classes/PhpParser/Node/Expr/List_.md) | |
| [`MethodCall`](./docs/classes/PhpParser/Node/Expr/MethodCall.md) | |
| [`New_`](./docs/classes/PhpParser/Node/Expr/New_.md) | |
| [`PostDec`](./docs/classes/PhpParser/Node/Expr/PostDec.md) | |
| [`PostInc`](./docs/classes/PhpParser/Node/Expr/PostInc.md) | |
| [`PreDec`](./docs/classes/PhpParser/Node/Expr/PreDec.md) | |
| [`PreInc`](./docs/classes/PhpParser/Node/Expr/PreInc.md) | |
| [`Print_`](./docs/classes/PhpParser/Node/Expr/Print_.md) | |
| [`PropertyFetch`](./docs/classes/PhpParser/Node/Expr/PropertyFetch.md) | |
| [`ShellExec`](./docs/classes/PhpParser/Node/Expr/ShellExec.md) | |
| [`StaticCall`](./docs/classes/PhpParser/Node/Expr/StaticCall.md) | |
| [`StaticPropertyFetch`](./docs/classes/PhpParser/Node/Expr/StaticPropertyFetch.md) | |
| [`Ternary`](./docs/classes/PhpParser/Node/Expr/Ternary.md) | |
| [`UnaryMinus`](./docs/classes/PhpParser/Node/Expr/UnaryMinus.md) | |
| [`UnaryPlus`](./docs/classes/PhpParser/Node/Expr/UnaryPlus.md) | |
| [`Variable`](./docs/classes/PhpParser/Node/Expr/Variable.md) | |
| [`YieldFrom`](./docs/classes/PhpParser/Node/Expr/YieldFrom.md) | |
| [`Yield_`](./docs/classes/PhpParser/Node/Expr/Yield_.md) | |

### \PhpParser\Node\Expr\AssignOp

#### Classes

| Class | Description |
|-------|-------------|
| [`BitwiseAnd`](./docs/classes/PhpParser/Node/Expr/AssignOp/BitwiseAnd.md) | |
| [`BitwiseOr`](./docs/classes/PhpParser/Node/Expr/AssignOp/BitwiseOr.md) | |
| [`BitwiseXor`](./docs/classes/PhpParser/Node/Expr/AssignOp/BitwiseXor.md) | |
| [`Concat`](./docs/classes/PhpParser/Node/Expr/AssignOp/Concat.md) | |
| [`Div`](./docs/classes/PhpParser/Node/Expr/AssignOp/Div.md) | |
| [`Minus`](./docs/classes/PhpParser/Node/Expr/AssignOp/Minus.md) | |
| [`Mod`](./docs/classes/PhpParser/Node/Expr/AssignOp/Mod.md) | |
| [`Mul`](./docs/classes/PhpParser/Node/Expr/AssignOp/Mul.md) | |
| [`Plus`](./docs/classes/PhpParser/Node/Expr/AssignOp/Plus.md) | |
| [`Pow`](./docs/classes/PhpParser/Node/Expr/AssignOp/Pow.md) | |
| [`ShiftLeft`](./docs/classes/PhpParser/Node/Expr/AssignOp/ShiftLeft.md) | |
| [`ShiftRight`](./docs/classes/PhpParser/Node/Expr/AssignOp/ShiftRight.md) | |

### \PhpParser\Node\Expr\BinaryOp

#### Classes

| Class | Description |
|-------|-------------|
| [`BitwiseAnd`](./docs/classes/PhpParser/Node/Expr/BinaryOp/BitwiseAnd.md) | |
| [`BitwiseOr`](./docs/classes/PhpParser/Node/Expr/BinaryOp/BitwiseOr.md) | |
| [`BitwiseXor`](./docs/classes/PhpParser/Node/Expr/BinaryOp/BitwiseXor.md) | |
| [`BooleanAnd`](./docs/classes/PhpParser/Node/Expr/BinaryOp/BooleanAnd.md) | |
| [`BooleanOr`](./docs/classes/PhpParser/Node/Expr/BinaryOp/BooleanOr.md) | |
| [`Coalesce`](./docs/classes/PhpParser/Node/Expr/BinaryOp/Coalesce.md) | |
| [`Concat`](./docs/classes/PhpParser/Node/Expr/BinaryOp/Concat.md) | |
| [`Div`](./docs/classes/PhpParser/Node/Expr/BinaryOp/Div.md) | |
| [`Equal`](./docs/classes/PhpParser/Node/Expr/BinaryOp/Equal.md) | |
| [`Greater`](./docs/classes/PhpParser/Node/Expr/BinaryOp/Greater.md) | |
| [`GreaterOrEqual`](./docs/classes/PhpParser/Node/Expr/BinaryOp/GreaterOrEqual.md) | |
| [`Identical`](./docs/classes/PhpParser/Node/Expr/BinaryOp/Identical.md) | |
| [`LogicalAnd`](./docs/classes/PhpParser/Node/Expr/BinaryOp/LogicalAnd.md) | |
| [`LogicalOr`](./docs/classes/PhpParser/Node/Expr/BinaryOp/LogicalOr.md) | |
| [`LogicalXor`](./docs/classes/PhpParser/Node/Expr/BinaryOp/LogicalXor.md) | |
| [`Minus`](./docs/classes/PhpParser/Node/Expr/BinaryOp/Minus.md) | |
| [`Mod`](./docs/classes/PhpParser/Node/Expr/BinaryOp/Mod.md) | |
| [`Mul`](./docs/classes/PhpParser/Node/Expr/BinaryOp/Mul.md) | |
| [`NotEqual`](./docs/classes/PhpParser/Node/Expr/BinaryOp/NotEqual.md) | |
| [`NotIdentical`](./docs/classes/PhpParser/Node/Expr/BinaryOp/NotIdentical.md) | |
| [`Plus`](./docs/classes/PhpParser/Node/Expr/BinaryOp/Plus.md) | |
| [`Pow`](./docs/classes/PhpParser/Node/Expr/BinaryOp/Pow.md) | |
| [`ShiftLeft`](./docs/classes/PhpParser/Node/Expr/BinaryOp/ShiftLeft.md) | |
| [`ShiftRight`](./docs/classes/PhpParser/Node/Expr/BinaryOp/ShiftRight.md) | |
| [`Smaller`](./docs/classes/PhpParser/Node/Expr/BinaryOp/Smaller.md) | |
| [`SmallerOrEqual`](./docs/classes/PhpParser/Node/Expr/BinaryOp/SmallerOrEqual.md) | |
| [`Spaceship`](./docs/classes/PhpParser/Node/Expr/BinaryOp/Spaceship.md) | |

### \PhpParser\Node\Expr\Cast

#### Classes

| Class | Description |
|-------|-------------|
| [`Array_`](./docs/classes/PhpParser/Node/Expr/Cast/Array_.md) | |
| [`Bool_`](./docs/classes/PhpParser/Node/Expr/Cast/Bool_.md) | |
| [`Double`](./docs/classes/PhpParser/Node/Expr/Cast/Double.md) | |
| [`Int_`](./docs/classes/PhpParser/Node/Expr/Cast/Int_.md) | |
| [`Object_`](./docs/classes/PhpParser/Node/Expr/Cast/Object_.md) | |
| [`String_`](./docs/classes/PhpParser/Node/Expr/Cast/String_.md) | |
| [`Unset_`](./docs/classes/PhpParser/Node/Expr/Cast/Unset_.md) | |

### \PhpParser\Node\Name

#### Classes

| Class | Description |
|-------|-------------|
| [`FullyQualified`](./docs/classes/PhpParser/Node/Name/FullyQualified.md) | |
| [`Relative`](./docs/classes/PhpParser/Node/Name/Relative.md) | |

### \PhpParser\Node\Scalar

#### Classes

| Class | Description |
|-------|-------------|
| [`DNumber`](./docs/classes/PhpParser/Node/Scalar/DNumber.md) | |
| [`Encapsed`](./docs/classes/PhpParser/Node/Scalar/Encapsed.md) | |
| [`LNumber`](./docs/classes/PhpParser/Node/Scalar/LNumber.md) | |
| [`MagicConst`](./docs/classes/PhpParser/Node/Scalar/MagicConst.md) | |
| [`MagicConstTest`](./docs/classes/PhpParser/Node/Scalar/MagicConstTest.md) | |
| [`StringTest`](./docs/classes/PhpParser/Node/Scalar/StringTest.md) | |
| [`String_`](./docs/classes/PhpParser/Node/Scalar/String_.md) | |

### \PhpParser\Node\Scalar\MagicConst

#### Classes

| Class | Description |
|-------|-------------|
| [`Class_`](./docs/classes/PhpParser/Node/Scalar/MagicConst/Class_.md) | |
| [`Dir`](./docs/classes/PhpParser/Node/Scalar/MagicConst/Dir.md) | |
| [`File`](./docs/classes/PhpParser/Node/Scalar/MagicConst/File.md) | |
| [`Function_`](./docs/classes/PhpParser/Node/Scalar/MagicConst/Function_.md) | |
| [`Line`](./docs/classes/PhpParser/Node/Scalar/MagicConst/Line.md) | |
| [`Method`](./docs/classes/PhpParser/Node/Scalar/MagicConst/Method.md) | |
| [`Namespace_`](./docs/classes/PhpParser/Node/Scalar/MagicConst/Namespace_.md) | |
| [`Trait_`](./docs/classes/PhpParser/Node/Scalar/MagicConst/Trait_.md) | |

### \PhpParser\Node\Stmt

#### Classes

| Class | Description |
|-------|-------------|
| [`Break_`](./docs/classes/PhpParser/Node/Stmt/Break_.md) | |
| [`Case_`](./docs/classes/PhpParser/Node/Stmt/Case_.md) | |
| [`Catch_`](./docs/classes/PhpParser/Node/Stmt/Catch_.md) | |
| [`ClassConst`](./docs/classes/PhpParser/Node/Stmt/ClassConst.md) | |
| [`ClassLike`](./docs/classes/PhpParser/Node/Stmt/ClassLike.md) | |
| [`ClassMethod`](./docs/classes/PhpParser/Node/Stmt/ClassMethod.md) | |
| [`ClassMethodTest`](./docs/classes/PhpParser/Node/Stmt/ClassMethodTest.md) | |
| [`ClassTest`](./docs/classes/PhpParser/Node/Stmt/ClassTest.md) | |
| [`Class_`](./docs/classes/PhpParser/Node/Stmt/Class_.md) | |
| [`Const_`](./docs/classes/PhpParser/Node/Stmt/Const_.md) | |
| [`Continue_`](./docs/classes/PhpParser/Node/Stmt/Continue_.md) | |
| [`DeclareDeclare`](./docs/classes/PhpParser/Node/Stmt/DeclareDeclare.md) | |
| [`Declare_`](./docs/classes/PhpParser/Node/Stmt/Declare_.md) | |
| [`Do_`](./docs/classes/PhpParser/Node/Stmt/Do_.md) | |
| [`Echo_`](./docs/classes/PhpParser/Node/Stmt/Echo_.md) | |
| [`ElseIf_`](./docs/classes/PhpParser/Node/Stmt/ElseIf_.md) | |
| [`Else_`](./docs/classes/PhpParser/Node/Stmt/Else_.md) | |
| [`For_`](./docs/classes/PhpParser/Node/Stmt/For_.md) | |
| [`Foreach_`](./docs/classes/PhpParser/Node/Stmt/Foreach_.md) | |
| [`Function_`](./docs/classes/PhpParser/Node/Stmt/Function_.md) | |
| [`Global_`](./docs/classes/PhpParser/Node/Stmt/Global_.md) | |
| [`Goto_`](./docs/classes/PhpParser/Node/Stmt/Goto_.md) | |
| [`HaltCompiler`](./docs/classes/PhpParser/Node/Stmt/HaltCompiler.md) | |
| [`If_`](./docs/classes/PhpParser/Node/Stmt/If_.md) | |
| [`InlineHTML`](./docs/classes/PhpParser/Node/Stmt/InlineHTML.md) | |
| [`InterfaceTest`](./docs/classes/PhpParser/Node/Stmt/InterfaceTest.md) | |
| [`Interface_`](./docs/classes/PhpParser/Node/Stmt/Interface_.md) | |
| [`Label`](./docs/classes/PhpParser/Node/Stmt/Label.md) | |
| [`Namespace_`](./docs/classes/PhpParser/Node/Stmt/Namespace_.md) | |
| [`Property`](./docs/classes/PhpParser/Node/Stmt/Property.md) | |
| [`PropertyProperty`](./docs/classes/PhpParser/Node/Stmt/PropertyProperty.md) | |
| [`PropertyTest`](./docs/classes/PhpParser/Node/Stmt/PropertyTest.md) | |
| [`Return_`](./docs/classes/PhpParser/Node/Stmt/Return_.md) | |
| [`StaticVar`](./docs/classes/PhpParser/Node/Stmt/StaticVar.md) | |
| [`Static_`](./docs/classes/PhpParser/Node/Stmt/Static_.md) | |
| [`Switch_`](./docs/classes/PhpParser/Node/Stmt/Switch_.md) | |
| [`Throw_`](./docs/classes/PhpParser/Node/Stmt/Throw_.md) | |
| [`TraitUse`](./docs/classes/PhpParser/Node/Stmt/TraitUse.md) | |
| [`TraitUseAdaptation`](./docs/classes/PhpParser/Node/Stmt/TraitUseAdaptation.md) | |
| [`Trait_`](./docs/classes/PhpParser/Node/Stmt/Trait_.md) | |
| [`TryCatch`](./docs/classes/PhpParser/Node/Stmt/TryCatch.md) | |
| [`Unset_`](./docs/classes/PhpParser/Node/Stmt/Unset_.md) | |
| [`UseUse`](./docs/classes/PhpParser/Node/Stmt/UseUse.md) | |
| [`Use_`](./docs/classes/PhpParser/Node/Stmt/Use_.md) | |
| [`While_`](./docs/classes/PhpParser/Node/Stmt/While_.md) | |

### \PhpParser\Node\Stmt\TraitUseAdaptation

#### Classes

| Class | Description |
|-------|-------------|
| [`Alias`](./docs/classes/PhpParser/Node/Stmt/TraitUseAdaptation/Alias.md) | |
| [`Precedence`](./docs/classes/PhpParser/Node/Stmt/TraitUseAdaptation/Precedence.md) | |

### \PhpParser\PrettyPrinter

#### Classes

| Class | Description |
|-------|-------------|
| [`Standard`](./docs/classes/PhpParser/PrettyPrinter/Standard.md) | |

### \PhpParser\Serializer

#### Classes

| Class | Description |
|-------|-------------|
| [`XML`](./docs/classes/PhpParser/Serializer/XML.md) | |
| [`XMLTest`](./docs/classes/PhpParser/Serializer/XMLTest.md) | |

### \PhpParser\Unserializer

#### Classes

| Class | Description |
|-------|-------------|
| [`XML`](./docs/classes/PhpParser/Unserializer/XML.md) | |
| [`XMLTest`](./docs/classes/PhpParser/Unserializer/XMLTest.md) | |

### \Pimple\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`Invokable`](./docs/classes/Pimple/Tests/Invokable.md) | |
| [`NonInvokable`](./docs/classes/Pimple/Tests/NonInvokable.md) | |
| [`PimpleTest`](./docs/classes/Pimple/Tests/PimpleTest.md) | Pimple Test|
| [`Service`](./docs/classes/Pimple/Tests/Service.md) | Pimple Test Service|

### \Psr\Cache

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CacheException`](./docs/classes/Psr/Cache/CacheException.md) | Exception interface for all exceptions thrown by an Implementing Library.|
| [`CacheItemInterface`](./docs/classes/Psr/Cache/CacheItemInterface.md) | CacheItemInterface defines an interface for interacting with objects inside a cache.|
| [`CacheItemPoolInterface`](./docs/classes/Psr/Cache/CacheItemPoolInterface.md) | CacheItemPoolInterface generates CacheItemInterface objects.|
| [`InvalidArgumentException`](./docs/classes/Psr/Cache/InvalidArgumentException.md) | Exception interface for invalid cache arguments.|

### \Psr\Container

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ContainerExceptionInterface`](./docs/classes/Psr/Container/ContainerExceptionInterface.md) | Base interface representing a generic exception in a container.|
| [`ContainerInterface`](./docs/classes/Psr/Container/ContainerInterface.md) | Describes the interface of a container that exposes methods to read its entries.|
| [`NotFoundExceptionInterface`](./docs/classes/Psr/Container/NotFoundExceptionInterface.md) | No entry was found in the container.|

### \Psr\Log

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractLogger`](./docs/classes/Psr/Log/AbstractLogger.md) | This is a simple Logger implementation that other Loggers can inherit from.|
| [`InvalidArgumentException`](./docs/classes/Psr/Log/InvalidArgumentException.md) | |
| [`LogLevel`](./docs/classes/Psr/Log/LogLevel.md) | Describes log levels.|
| [`NullLogger`](./docs/classes/Psr/Log/NullLogger.md) | This Logger can be used to avoid conditional log calls.|

#### Traits

| Trait | Description |
|-------|-------------|
| [`LoggerAwareTrait`](./docs/classes/Psr/Log/LoggerAwareTrait.md) | Basic Implementation of LoggerAwareInterface.|
| [`LoggerTrait`](./docs/classes/Psr/Log/LoggerTrait.md) | This is a simple Logger trait that classes unable to extend AbstractLogger<br />(because they extend another class, etc) can include.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`LoggerAwareInterface`](./docs/classes/Psr/Log/LoggerAwareInterface.md) | Describes a logger-aware instance.|
| [`LoggerInterface`](./docs/classes/Psr/Log/LoggerInterface.md) | Describes a logger instance.|

### \Psr\Log\Test

#### Classes

| Class | Description |
|-------|-------------|
| [`LoggerInterfaceTest`](./docs/classes/Psr/Log/Test/LoggerInterfaceTest.md) | Provides a base test class for ensuring compliance with the LoggerInterface.|
| [`TestLogger`](./docs/classes/Psr/Log/Test/TestLogger.md) | Used for testing purposes.|

### \Symfony\Component\Config

#### Classes

| Class | Description |
|-------|-------------|
| [`ConfigCache`](./docs/classes/Symfony/Component/Config/ConfigCache.md) | ConfigCache caches arbitrary content in files on disk.|
| [`ConfigCacheFactory`](./docs/classes/Symfony/Component/Config/ConfigCacheFactory.md) | Basic implementation of ConfigCacheFactoryInterface that<br />creates an instance of the default ConfigCache.|
| [`FileLocator`](./docs/classes/Symfony/Component/Config/FileLocator.md) | FileLocator uses an array of pre-defined paths to find files.|
| [`ResourceCheckerConfigCache`](./docs/classes/Symfony/Component/Config/ResourceCheckerConfigCache.md) | ResourceCheckerConfigCache uses instances of ResourceCheckerInterface<br />to check whether cached data is still fresh.|
| [`ResourceCheckerConfigCacheFactory`](./docs/classes/Symfony/Component/Config/ResourceCheckerConfigCacheFactory.md) | A ConfigCacheFactory implementation that validates the<br />cache with an arbitrary set of ResourceCheckers.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ConfigCacheFactoryInterface`](./docs/classes/Symfony/Component/Config/ConfigCacheFactoryInterface.md) | Interface for a ConfigCache factory. This factory creates<br />an instance of ConfigCacheInterface and initializes the<br />cache if necessary.|
| [`ConfigCacheInterface`](./docs/classes/Symfony/Component/Config/ConfigCacheInterface.md) | Interface for ConfigCache.|
| [`FileLocatorInterface`](./docs/classes/Symfony/Component/Config/FileLocatorInterface.md) | |
| [`ResourceCheckerInterface`](./docs/classes/Symfony/Component/Config/ResourceCheckerInterface.md) | Interface for ResourceCheckers.|

### \Symfony\Component\Config\Definition

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayNode`](./docs/classes/Symfony/Component/Config/Definition/ArrayNode.md) | Represents an Array node in the config tree.|
| [`BaseNode`](./docs/classes/Symfony/Component/Config/Definition/BaseNode.md) | The base node class.|
| [`BooleanNode`](./docs/classes/Symfony/Component/Config/Definition/BooleanNode.md) | This node represents a Boolean value in the config tree.|
| [`EnumNode`](./docs/classes/Symfony/Component/Config/Definition/EnumNode.md) | Node which only allows a finite set of values.|
| [`FloatNode`](./docs/classes/Symfony/Component/Config/Definition/FloatNode.md) | This node represents a float value in the config tree.|
| [`IntegerNode`](./docs/classes/Symfony/Component/Config/Definition/IntegerNode.md) | This node represents an integer value in the config tree.|
| [`NumericNode`](./docs/classes/Symfony/Component/Config/Definition/NumericNode.md) | This node represents a numeric value in the config tree.|
| [`Processor`](./docs/classes/Symfony/Component/Config/Definition/Processor.md) | This class is the entry point for config normalization/merging/finalization.|
| [`PrototypedArrayNode`](./docs/classes/Symfony/Component/Config/Definition/PrototypedArrayNode.md) | Represents a prototyped Array node in the config tree.|
| [`ReferenceDumper`](./docs/classes/Symfony/Component/Config/Definition/ReferenceDumper.md) | Dumps a Yaml reference configuration for the given configuration/node instance.|
| [`ScalarNode`](./docs/classes/Symfony/Component/Config/Definition/ScalarNode.md) | This node represents a scalar value in the config tree.|
| [`VariableNode`](./docs/classes/Symfony/Component/Config/Definition/VariableNode.md) | This node represents a value of variable type in the config tree.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ConfigurationInterface`](./docs/classes/Symfony/Component/Config/Definition/ConfigurationInterface.md) | Configuration interface.|
| [`NodeInterface`](./docs/classes/Symfony/Component/Config/Definition/NodeInterface.md) | Common Interface among all nodes.|
| [`PrototypeNodeInterface`](./docs/classes/Symfony/Component/Config/Definition/PrototypeNodeInterface.md) | This interface must be implemented by nodes which can be used as prototypes.|

### \Symfony\Component\Config\Definition\Builder

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayNodeDefinition`](./docs/classes/Symfony/Component/Config/Definition/Builder/ArrayNodeDefinition.md) | This class provides a fluent interface for defining an array node.|
| [`BooleanNodeDefinition`](./docs/classes/Symfony/Component/Config/Definition/Builder/BooleanNodeDefinition.md) | This class provides a fluent interface for defining a node.|
| [`EnumNodeDefinition`](./docs/classes/Symfony/Component/Config/Definition/Builder/EnumNodeDefinition.md) | Enum Node Definition.|
| [`ExprBuilder`](./docs/classes/Symfony/Component/Config/Definition/Builder/ExprBuilder.md) | This class builds an if expression.|
| [`FloatNodeDefinition`](./docs/classes/Symfony/Component/Config/Definition/Builder/FloatNodeDefinition.md) | This class provides a fluent interface for defining a float node.|
| [`IntegerNodeDefinition`](./docs/classes/Symfony/Component/Config/Definition/Builder/IntegerNodeDefinition.md) | This class provides a fluent interface for defining an integer node.|
| [`MergeBuilder`](./docs/classes/Symfony/Component/Config/Definition/Builder/MergeBuilder.md) | This class builds merge conditions.|
| [`NodeBuilder`](./docs/classes/Symfony/Component/Config/Definition/Builder/NodeBuilder.md) | This class provides a fluent interface for building a node.|
| [`NodeDefinition`](./docs/classes/Symfony/Component/Config/Definition/Builder/NodeDefinition.md) | This class provides a fluent interface for defining a node.|
| [`NormalizationBuilder`](./docs/classes/Symfony/Component/Config/Definition/Builder/NormalizationBuilder.md) | This class builds normalization conditions.|
| [`NumericNodeDefinition`](./docs/classes/Symfony/Component/Config/Definition/Builder/NumericNodeDefinition.md) | Abstract class that contains common code of integer and float node definitions.|
| [`ScalarNodeDefinition`](./docs/classes/Symfony/Component/Config/Definition/Builder/ScalarNodeDefinition.md) | This class provides a fluent interface for defining a node.|
| [`TreeBuilder`](./docs/classes/Symfony/Component/Config/Definition/Builder/TreeBuilder.md) | This is the entry class for building a config tree.|
| [`ValidationBuilder`](./docs/classes/Symfony/Component/Config/Definition/Builder/ValidationBuilder.md) | This class builds validation conditions.|
| [`VariableNodeDefinition`](./docs/classes/Symfony/Component/Config/Definition/Builder/VariableNodeDefinition.md) | This class provides a fluent interface for defining a node.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`NodeParentInterface`](./docs/classes/Symfony/Component/Config/Definition/Builder/NodeParentInterface.md) | An interface that must be implemented by all node parents.|
| [`ParentNodeDefinitionInterface`](./docs/classes/Symfony/Component/Config/Definition/Builder/ParentNodeDefinitionInterface.md) | An interface that must be implemented by nodes which can have children.|

### \Symfony\Component\Config\Definition\Dumper

#### Classes

| Class | Description |
|-------|-------------|
| [`XmlReferenceDumper`](./docs/classes/Symfony/Component/Config/Definition/Dumper/XmlReferenceDumper.md) | Dumps a XML reference configuration for the given configuration/node instance.|
| [`YamlReferenceDumper`](./docs/classes/Symfony/Component/Config/Definition/Dumper/YamlReferenceDumper.md) | Dumps a Yaml reference configuration for the given configuration/node instance.|

### \Symfony\Component\Config\Definition\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`DuplicateKeyException`](./docs/classes/Symfony/Component/Config/Definition/Exception/DuplicateKeyException.md) | This exception is thrown whenever the key of an array is not unique. This can<br />only be the case if the configuration is coming from an XML file.|
| [`Exception`](./docs/classes/Symfony/Component/Config/Definition/Exception/Exception.md) | Base exception for all configuration exceptions.|
| [`ForbiddenOverwriteException`](./docs/classes/Symfony/Component/Config/Definition/Exception/ForbiddenOverwriteException.md) | This exception is thrown when a configuration path is overwritten from a<br />subsequent configuration file, but the entry node specifically forbids this.|
| [`InvalidConfigurationException`](./docs/classes/Symfony/Component/Config/Definition/Exception/InvalidConfigurationException.md) | A very general exception which can be thrown whenever non of the more specific<br />exceptions is suitable.|
| [`InvalidDefinitionException`](./docs/classes/Symfony/Component/Config/Definition/Exception/InvalidDefinitionException.md) | Thrown when an error is detected in a node Definition.|
| [`InvalidTypeException`](./docs/classes/Symfony/Component/Config/Definition/Exception/InvalidTypeException.md) | This exception is thrown if an invalid type is encountered.|
| [`UnsetKeyException`](./docs/classes/Symfony/Component/Config/Definition/Exception/UnsetKeyException.md) | This exception is usually not encountered by the end-user, but only used<br />internally to signal the parent scope to unset a key.|

### \Symfony\Component\Config\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FileLoaderImportCircularReferenceException`](./docs/classes/Symfony/Component/Config/Exception/FileLoaderImportCircularReferenceException.md) | Exception class for when a circular reference is detected when importing resources.|
| [`FileLoaderLoadException`](./docs/classes/Symfony/Component/Config/Exception/FileLoaderLoadException.md) | Exception class for when a resource cannot be loaded or imported.|

### \Symfony\Component\Config\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`DelegatingLoader`](./docs/classes/Symfony/Component/Config/Loader/DelegatingLoader.md) | DelegatingLoader delegates loading to other loaders using a loader resolver.|
| [`FileLoader`](./docs/classes/Symfony/Component/Config/Loader/FileLoader.md) | FileLoader is the abstract class used by all built-in loaders that are file based.|
| [`Loader`](./docs/classes/Symfony/Component/Config/Loader/Loader.md) | Loader is the abstract class used by all built-in loaders.|
| [`LoaderResolver`](./docs/classes/Symfony/Component/Config/Loader/LoaderResolver.md) | LoaderResolver selects a loader for a given resource.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`LoaderInterface`](./docs/classes/Symfony/Component/Config/Loader/LoaderInterface.md) | LoaderInterface is the interface implemented by all loader classes.|
| [`LoaderResolverInterface`](./docs/classes/Symfony/Component/Config/Loader/LoaderResolverInterface.md) | LoaderResolverInterface selects a loader for a given resource.|

### \Symfony\Component\Config\Resource

#### Classes

| Class | Description |
|-------|-------------|
| [`BCResourceInterfaceChecker`](./docs/classes/Symfony/Component/Config/Resource/BCResourceInterfaceChecker.md) | Resource checker for the ResourceInterface. Exists for BC.|
| [`DirectoryResource`](./docs/classes/Symfony/Component/Config/Resource/DirectoryResource.md) | DirectoryResource represents a resources stored in a subdirectory tree.|
| [`FileExistenceResource`](./docs/classes/Symfony/Component/Config/Resource/FileExistenceResource.md) | FileExistenceResource represents a resource stored on the filesystem.|
| [`FileResource`](./docs/classes/Symfony/Component/Config/Resource/FileResource.md) | FileResource represents a resource stored on the filesystem.|
| [`SelfCheckingResourceChecker`](./docs/classes/Symfony/Component/Config/Resource/SelfCheckingResourceChecker.md) | Resource checker for instances of SelfCheckingResourceInterface.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ResourceInterface`](./docs/classes/Symfony/Component/Config/Resource/ResourceInterface.md) | ResourceInterface is the interface that must be implemented by all Resource classes.|
| [`SelfCheckingResourceInterface`](./docs/classes/Symfony/Component/Config/Resource/SelfCheckingResourceInterface.md) | Interface for Resources that can check for freshness autonomously,<br />without special support from external services.|

### \Symfony\Component\Config\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ConfigCacheFactoryTest`](./docs/classes/Symfony/Component/Config/Tests/ConfigCacheFactoryTest.md) | |
| [`ConfigCacheTest`](./docs/classes/Symfony/Component/Config/Tests/ConfigCacheTest.md) | |
| [`FileLocatorTest`](./docs/classes/Symfony/Component/Config/Tests/FileLocatorTest.md) | |
| [`ResourceCheckerConfigCacheTest`](./docs/classes/Symfony/Component/Config/Tests/ResourceCheckerConfigCacheTest.md) | |

### \Symfony\Component\Config\Tests\Definition

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayNodeTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/ArrayNodeTest.md) | |
| [`BooleanNodeTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/BooleanNodeTest.md) | |
| [`EnumNodeTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/EnumNodeTest.md) | |
| [`FinalizationTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/FinalizationTest.md) | |
| [`FloatNodeTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/FloatNodeTest.md) | |
| [`IntegerNodeTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/IntegerNodeTest.md) | |
| [`MergeTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/MergeTest.md) | |
| [`NormalizationTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/NormalizationTest.md) | |
| [`PrototypedArrayNodeTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/PrototypedArrayNodeTest.md) | |
| [`ScalarNodeTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/ScalarNodeTest.md) | |

### \Symfony\Component\Config\Tests\Definition\Builder

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayNodeDefinitionTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/Builder/ArrayNodeDefinitionTest.md) | |
| [`EnumNodeDefinitionTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/Builder/EnumNodeDefinitionTest.md) | |
| [`ExprBuilderTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/Builder/ExprBuilderTest.md) | |
| [`NodeBuilderTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/Builder/NodeBuilderTest.md) | |
| [`NumericNodeDefinitionTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/Builder/NumericNodeDefinitionTest.md) | |
| [`SomeNodeDefinition`](./docs/classes/Symfony/Component/Config/Tests/Definition/Builder/SomeNodeDefinition.md) | This class provides a fluent interface for defining a node.|
| [`TreeBuilderTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/Builder/TreeBuilderTest.md) | |

### \Symfony\Component\Config\Tests\Definition\Dumper

#### Classes

| Class | Description |
|-------|-------------|
| [`XmlReferenceDumperTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/Dumper/XmlReferenceDumperTest.md) | |
| [`YamlReferenceDumperTest`](./docs/classes/Symfony/Component/Config/Tests/Definition/Dumper/YamlReferenceDumperTest.md) | |

### \Symfony\Component\Config\Tests\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FileLoaderLoadExceptionTest`](./docs/classes/Symfony/Component/Config/Tests/Exception/FileLoaderLoadExceptionTest.md) | |

### \Symfony\Component\Config\Tests\Fixtures

#### Classes

| Class | Description |
|-------|-------------|
| [`BarNode`](./docs/classes/Symfony/Component/Config/Tests/Fixtures/BarNode.md) | Represents an Array node in the config tree.|

### \Symfony\Component\Config\Tests\Fixtures\Builder

#### Classes

| Class | Description |
|-------|-------------|
| [`BarNodeDefinition`](./docs/classes/Symfony/Component/Config/Tests/Fixtures/Builder/BarNodeDefinition.md) | This class provides a fluent interface for defining a node.|
| [`NodeBuilder`](./docs/classes/Symfony/Component/Config/Tests/Fixtures/Builder/NodeBuilder.md) | This class provides a fluent interface for building a node.|
| [`VariableNodeDefinition`](./docs/classes/Symfony/Component/Config/Tests/Fixtures/Builder/VariableNodeDefinition.md) | This class provides a fluent interface for defining a node.|

### \Symfony\Component\Config\Tests\Fixtures\Configuration

#### Classes

| Class | Description |
|-------|-------------|
| [`ExampleConfiguration`](./docs/classes/Symfony/Component/Config/Tests/Fixtures/Configuration/ExampleConfiguration.md) | |

### \Symfony\Component\Config\Tests\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`DelegatingLoaderTest`](./docs/classes/Symfony/Component/Config/Tests/Loader/DelegatingLoaderTest.md) | |
| [`FileLoaderTest`](./docs/classes/Symfony/Component/Config/Tests/Loader/FileLoaderTest.md) | |
| [`LoaderResolverTest`](./docs/classes/Symfony/Component/Config/Tests/Loader/LoaderResolverTest.md) | |
| [`LoaderTest`](./docs/classes/Symfony/Component/Config/Tests/Loader/LoaderTest.md) | |
| [`ProjectLoader1`](./docs/classes/Symfony/Component/Config/Tests/Loader/ProjectLoader1.md) | Loader is the abstract class used by all built-in loaders.|
| [`TestFileLoader`](./docs/classes/Symfony/Component/Config/Tests/Loader/TestFileLoader.md) | FileLoader is the abstract class used by all built-in loaders that are file based.|

### \Symfony\Component\Config\Tests\Resource

#### Classes

| Class | Description |
|-------|-------------|
| [`DirectoryResourceTest`](./docs/classes/Symfony/Component/Config/Tests/Resource/DirectoryResourceTest.md) | |
| [`FileExistenceResourceTest`](./docs/classes/Symfony/Component/Config/Tests/Resource/FileExistenceResourceTest.md) | |
| [`FileResourceTest`](./docs/classes/Symfony/Component/Config/Tests/Resource/FileResourceTest.md) | |
| [`ResourceStub`](./docs/classes/Symfony/Component/Config/Tests/Resource/ResourceStub.md) | |

### \Symfony\Component\Config\Tests\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`XmlUtilsTest`](./docs/classes/Symfony/Component/Config/Tests/Util/XmlUtilsTest.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Validator`](./docs/classes/Symfony/Component/Config/Tests/Util/Validator.md) | |

### \Symfony\Component\Config\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`XmlUtils`](./docs/classes/Symfony/Component/Config/Util/XmlUtils.md) | XMLUtils is a bunch of utility methods to XML operations.|

### \Symfony\Component\Console

#### Classes

| Class | Description |
|-------|-------------|
| [`Application`](./docs/classes/Symfony/Component/Console/Application.md) | An Application is the container for a collection of commands.|
| [`ConsoleEvents`](./docs/classes/Symfony/Component/Console/ConsoleEvents.md) | Contains all events dispatched by an Application.|
| [`Shell`](./docs/classes/Symfony/Component/Console/Shell.md) | A Shell wraps an Application to add shell capabilities to it.|

### \Symfony\Component\Console\Command

#### Classes

| Class | Description |
|-------|-------------|
| [`Command`](./docs/classes/Symfony/Component/Console/Command/Command.md) | Base class for all commands.|
| [`HelpCommand`](./docs/classes/Symfony/Component/Console/Command/HelpCommand.md) | HelpCommand displays the help for a given command.|
| [`ListCommand`](./docs/classes/Symfony/Component/Console/Command/ListCommand.md) | ListCommand displays the list of all available commands for the application.|

### \Symfony\Component\Console\Descriptor

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`DescriptorInterface`](./docs/classes/Symfony/Component/Console/Descriptor/DescriptorInterface.md) | Descriptor interface.|

### \Symfony\Component\Console\Event

#### Classes

| Class | Description |
|-------|-------------|
| [`ConsoleCommandEvent`](./docs/classes/Symfony/Component/Console/Event/ConsoleCommandEvent.md) | Allows to do things before the command is executed, like skipping the command or changing the input.|
| [`ConsoleEvent`](./docs/classes/Symfony/Component/Console/Event/ConsoleEvent.md) | Allows to inspect input and output of a command.|
| [`ConsoleExceptionEvent`](./docs/classes/Symfony/Component/Console/Event/ConsoleExceptionEvent.md) | Allows to handle exception thrown in a command.|
| [`ConsoleTerminateEvent`](./docs/classes/Symfony/Component/Console/Event/ConsoleTerminateEvent.md) | Allows to manipulate the exit code of a command after its execution.|

### \Symfony\Component\Console\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`CommandNotFoundException`](./docs/classes/Symfony/Component/Console/Exception/CommandNotFoundException.md) | Represents an incorrect command name typed in the console.|
| [`InvalidArgumentException`](./docs/classes/Symfony/Component/Console/Exception/InvalidArgumentException.md) | |
| [`InvalidOptionException`](./docs/classes/Symfony/Component/Console/Exception/InvalidOptionException.md) | Represents an incorrect option name typed in the console.|
| [`LogicException`](./docs/classes/Symfony/Component/Console/Exception/LogicException.md) | |
| [`RuntimeException`](./docs/classes/Symfony/Component/Console/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Symfony/Component/Console/Exception/ExceptionInterface.md) | ExceptionInterface.|

### \Symfony\Component\Console\Formatter

#### Classes

| Class | Description |
|-------|-------------|
| [`OutputFormatter`](./docs/classes/Symfony/Component/Console/Formatter/OutputFormatter.md) | Formatter class for console output.|
| [`OutputFormatterStyle`](./docs/classes/Symfony/Component/Console/Formatter/OutputFormatterStyle.md) | Formatter style class for defining styles.|
| [`OutputFormatterStyleStack`](./docs/classes/Symfony/Component/Console/Formatter/OutputFormatterStyleStack.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`OutputFormatterInterface`](./docs/classes/Symfony/Component/Console/Formatter/OutputFormatterInterface.md) | Formatter interface for console output.|
| [`OutputFormatterStyleInterface`](./docs/classes/Symfony/Component/Console/Formatter/OutputFormatterStyleInterface.md) | Formatter style interface for defining styles.|

### \Symfony\Component\Console\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`DebugFormatterHelper`](./docs/classes/Symfony/Component/Console/Helper/DebugFormatterHelper.md) | Helps outputting debug information when running an external program from a command.|
| [`DescriptorHelper`](./docs/classes/Symfony/Component/Console/Helper/DescriptorHelper.md) | This class adds helper method to describe objects in various formats.|
| [`DialogHelper`](./docs/classes/Symfony/Component/Console/Helper/DialogHelper.md) | The Dialog class provides helpers to interact with the user.|
| [`FormatterHelper`](./docs/classes/Symfony/Component/Console/Helper/FormatterHelper.md) | The Formatter class provides helpers to format messages.|
| [`Helper`](./docs/classes/Symfony/Component/Console/Helper/Helper.md) | Helper is the base class for all helper classes.|
| [`HelperSet`](./docs/classes/Symfony/Component/Console/Helper/HelperSet.md) | HelperSet represents a set of helpers to be used with a command.|
| [`InputAwareHelper`](./docs/classes/Symfony/Component/Console/Helper/InputAwareHelper.md) | An implementation of InputAwareInterface for Helpers.|
| [`ProcessHelper`](./docs/classes/Symfony/Component/Console/Helper/ProcessHelper.md) | The ProcessHelper class provides helpers to run external processes.|
| [`ProgressBar`](./docs/classes/Symfony/Component/Console/Helper/ProgressBar.md) | The ProgressBar provides helpers to display progress output.|
| [`ProgressHelper`](./docs/classes/Symfony/Component/Console/Helper/ProgressHelper.md) | The Progress class provides helpers to display progress output.|
| [`ProgressIndicator`](./docs/classes/Symfony/Component/Console/Helper/ProgressIndicator.md) | |
| [`QuestionHelper`](./docs/classes/Symfony/Component/Console/Helper/QuestionHelper.md) | The QuestionHelper class provides helpers to interact with the user.|
| [`SymfonyQuestionHelper`](./docs/classes/Symfony/Component/Console/Helper/SymfonyQuestionHelper.md) | Symfony Style Guide compliant question helper.|
| [`Table`](./docs/classes/Symfony/Component/Console/Helper/Table.md) | Provides helpers to display a table.|
| [`TableCell`](./docs/classes/Symfony/Component/Console/Helper/TableCell.md) | |
| [`TableHelper`](./docs/classes/Symfony/Component/Console/Helper/TableHelper.md) | Provides helpers to display table output.|
| [`TableSeparator`](./docs/classes/Symfony/Component/Console/Helper/TableSeparator.md) | Marks a row as being a separator.|
| [`TableStyle`](./docs/classes/Symfony/Component/Console/Helper/TableStyle.md) | Defines the styles for a Table.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`HelperInterface`](./docs/classes/Symfony/Component/Console/Helper/HelperInterface.md) | HelperInterface is the interface all helpers must implement.|

### \Symfony\Component\Console\Input

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgvInput`](./docs/classes/Symfony/Component/Console/Input/ArgvInput.md) | ArgvInput represents an input coming from the CLI arguments.|
| [`ArrayInput`](./docs/classes/Symfony/Component/Console/Input/ArrayInput.md) | ArrayInput represents an input provided as an array.|
| [`Input`](./docs/classes/Symfony/Component/Console/Input/Input.md) | Input is the base class for all concrete Input classes.|
| [`InputArgument`](./docs/classes/Symfony/Component/Console/Input/InputArgument.md) | Represents a command line argument.|
| [`InputDefinition`](./docs/classes/Symfony/Component/Console/Input/InputDefinition.md) | A InputDefinition represents a set of valid command line arguments and options.|
| [`InputOption`](./docs/classes/Symfony/Component/Console/Input/InputOption.md) | Represents a command line option.|
| [`StringInput`](./docs/classes/Symfony/Component/Console/Input/StringInput.md) | StringInput represents an input provided as a string.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`InputAwareInterface`](./docs/classes/Symfony/Component/Console/Input/InputAwareInterface.md) | InputAwareInterface should be implemented by classes that depends on the<br />Console Input.|
| [`InputInterface`](./docs/classes/Symfony/Component/Console/Input/InputInterface.md) | InputInterface is the interface implemented by all input classes.|

### \Symfony\Component\Console\Logger

#### Classes

| Class | Description |
|-------|-------------|
| [`ConsoleLogger`](./docs/classes/Symfony/Component/Console/Logger/ConsoleLogger.md) | PSR-3 compliant console logger.|

### \Symfony\Component\Console\Output

#### Classes

| Class | Description |
|-------|-------------|
| [`BufferedOutput`](./docs/classes/Symfony/Component/Console/Output/BufferedOutput.md) | Base class for output classes.|
| [`ConsoleOutput`](./docs/classes/Symfony/Component/Console/Output/ConsoleOutput.md) | ConsoleOutput is the default class for all CLI output. It uses STDOUT.|
| [`NullOutput`](./docs/classes/Symfony/Component/Console/Output/NullOutput.md) | NullOutput suppresses all output.|
| [`Output`](./docs/classes/Symfony/Component/Console/Output/Output.md) | Base class for output classes.|
| [`StreamOutput`](./docs/classes/Symfony/Component/Console/Output/StreamOutput.md) | StreamOutput writes the output to a given stream.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ConsoleOutputInterface`](./docs/classes/Symfony/Component/Console/Output/ConsoleOutputInterface.md) | ConsoleOutputInterface is the interface implemented by ConsoleOutput class.|
| [`OutputInterface`](./docs/classes/Symfony/Component/Console/Output/OutputInterface.md) | OutputInterface is the interface implemented by all Output classes.|

### \Symfony\Component\Console\Question

#### Classes

| Class | Description |
|-------|-------------|
| [`ChoiceQuestion`](./docs/classes/Symfony/Component/Console/Question/ChoiceQuestion.md) | Represents a choice question.|
| [`ConfirmationQuestion`](./docs/classes/Symfony/Component/Console/Question/ConfirmationQuestion.md) | Represents a yes/no question.|
| [`Question`](./docs/classes/Symfony/Component/Console/Question/Question.md) | Represents a Question.|

### \Symfony\Component\Console\Style

#### Classes

| Class | Description |
|-------|-------------|
| [`OutputStyle`](./docs/classes/Symfony/Component/Console/Style/OutputStyle.md) | Decorates output to add console style guide helpers.|
| [`SymfonyStyle`](./docs/classes/Symfony/Component/Console/Style/SymfonyStyle.md) | Output decorator helpers for the Symfony Style Guide.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`StyleInterface`](./docs/classes/Symfony/Component/Console/Style/StyleInterface.md) | Output style helpers.|

### \Symfony\Component\Console\Tester

#### Classes

| Class | Description |
|-------|-------------|
| [`ApplicationTester`](./docs/classes/Symfony/Component/Console/Tester/ApplicationTester.md) | Eases the testing of console applications.|
| [`CommandTester`](./docs/classes/Symfony/Component/Console/Tester/CommandTester.md) | Eases the testing of console commands.|

### \Symfony\Component\Console\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ApplicationTest`](./docs/classes/Symfony/Component/Console/Tests/ApplicationTest.md) | |
| [`CustomApplication`](./docs/classes/Symfony/Component/Console/Tests/CustomApplication.md) | An Application is the container for a collection of commands.|
| [`CustomDefaultCommandApplication`](./docs/classes/Symfony/Component/Console/Tests/CustomDefaultCommandApplication.md) | An Application is the container for a collection of commands.|

### \Symfony\Component\Console\Tests\Command

#### Classes

| Class | Description |
|-------|-------------|
| [`CommandTest`](./docs/classes/Symfony/Component/Console/Tests/Command/CommandTest.md) | |
| [`HelpCommandTest`](./docs/classes/Symfony/Component/Console/Tests/Command/HelpCommandTest.md) | |
| [`ListCommandTest`](./docs/classes/Symfony/Component/Console/Tests/Command/ListCommandTest.md) | |

### \Symfony\Component\Console\Tests\Descriptor

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractDescriptorTest`](./docs/classes/Symfony/Component/Console/Tests/Descriptor/AbstractDescriptorTest.md) | |
| [`JsonDescriptorTest`](./docs/classes/Symfony/Component/Console/Tests/Descriptor/JsonDescriptorTest.md) | |
| [`MarkdownDescriptorTest`](./docs/classes/Symfony/Component/Console/Tests/Descriptor/MarkdownDescriptorTest.md) | |
| [`ObjectsProvider`](./docs/classes/Symfony/Component/Console/Tests/Descriptor/ObjectsProvider.md) | |
| [`TextDescriptorTest`](./docs/classes/Symfony/Component/Console/Tests/Descriptor/TextDescriptorTest.md) | |
| [`XmlDescriptorTest`](./docs/classes/Symfony/Component/Console/Tests/Descriptor/XmlDescriptorTest.md) | |

### \Symfony\Component\Console\Tests\Fixtures

#### Classes

| Class | Description |
|-------|-------------|
| [`DescriptorApplication1`](./docs/classes/Symfony/Component/Console/Tests/Fixtures/DescriptorApplication1.md) | An Application is the container for a collection of commands.|
| [`DescriptorApplication2`](./docs/classes/Symfony/Component/Console/Tests/Fixtures/DescriptorApplication2.md) | An Application is the container for a collection of commands.|
| [`DescriptorApplicationMbString`](./docs/classes/Symfony/Component/Console/Tests/Fixtures/DescriptorApplicationMbString.md) | An Application is the container for a collection of commands.|
| [`DescriptorCommand1`](./docs/classes/Symfony/Component/Console/Tests/Fixtures/DescriptorCommand1.md) | Base class for all commands.|
| [`DescriptorCommand2`](./docs/classes/Symfony/Component/Console/Tests/Fixtures/DescriptorCommand2.md) | Base class for all commands.|
| [`DescriptorCommandMbString`](./docs/classes/Symfony/Component/Console/Tests/Fixtures/DescriptorCommandMbString.md) | Base class for all commands.|
| [`DummyOutput`](./docs/classes/Symfony/Component/Console/Tests/Fixtures/DummyOutput.md) | Dummy output.|

### \Symfony\Component\Console\Tests\Formatter

#### Classes

| Class | Description |
|-------|-------------|
| [`OutputFormatterStyleStackTest`](./docs/classes/Symfony/Component/Console/Tests/Formatter/OutputFormatterStyleStackTest.md) | |
| [`OutputFormatterStyleTest`](./docs/classes/Symfony/Component/Console/Tests/Formatter/OutputFormatterStyleTest.md) | |
| [`OutputFormatterTest`](./docs/classes/Symfony/Component/Console/Tests/Formatter/OutputFormatterTest.md) | |
| [`TableCell`](./docs/classes/Symfony/Component/Console/Tests/Formatter/TableCell.md) | |

### \Symfony\Component\Console\Tests\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`AutocompleteValues`](./docs/classes/Symfony/Component/Console/Tests/Helper/AutocompleteValues.md) | |
| [`FormatterHelperTest`](./docs/classes/Symfony/Component/Console/Tests/Helper/FormatterHelperTest.md) | |
| [`HelperSetTest`](./docs/classes/Symfony/Component/Console/Tests/Helper/HelperSetTest.md) | |
| [`HelperTest`](./docs/classes/Symfony/Component/Console/Tests/Helper/HelperTest.md) | |
| [`LegacyDialogHelperTest`](./docs/classes/Symfony/Component/Console/Tests/Helper/LegacyDialogHelperTest.md) | |
| [`LegacyProgressHelperTest`](./docs/classes/Symfony/Component/Console/Tests/Helper/LegacyProgressHelperTest.md) | |
| [`LegacyTableHelperTest`](./docs/classes/Symfony/Component/Console/Tests/Helper/LegacyTableHelperTest.md) | |
| [`ProcessHelperTest`](./docs/classes/Symfony/Component/Console/Tests/Helper/ProcessHelperTest.md) | |
| [`ProgressBarTest`](./docs/classes/Symfony/Component/Console/Tests/Helper/ProgressBarTest.md) | |
| [`ProgressIndicatorTest`](./docs/classes/Symfony/Component/Console/Tests/Helper/ProgressIndicatorTest.md) | |
| [`QuestionHelperTest`](./docs/classes/Symfony/Component/Console/Tests/Helper/QuestionHelperTest.md) | |
| [`SymfonyQuestionHelperTest`](./docs/classes/Symfony/Component/Console/Tests/Helper/SymfonyQuestionHelperTest.md) | |
| [`TableStyleTest`](./docs/classes/Symfony/Component/Console/Tests/Helper/TableStyleTest.md) | |
| [`TableTest`](./docs/classes/Symfony/Component/Console/Tests/Helper/TableTest.md) | |

### \Symfony\Component\Console\Tests\Input

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgvInputTest`](./docs/classes/Symfony/Component/Console/Tests/Input/ArgvInputTest.md) | |
| [`ArrayInputTest`](./docs/classes/Symfony/Component/Console/Tests/Input/ArrayInputTest.md) | |
| [`InputArgumentTest`](./docs/classes/Symfony/Component/Console/Tests/Input/InputArgumentTest.md) | |
| [`InputDefinitionTest`](./docs/classes/Symfony/Component/Console/Tests/Input/InputDefinitionTest.md) | |
| [`InputOptionTest`](./docs/classes/Symfony/Component/Console/Tests/Input/InputOptionTest.md) | |
| [`InputTest`](./docs/classes/Symfony/Component/Console/Tests/Input/InputTest.md) | |
| [`StringInputTest`](./docs/classes/Symfony/Component/Console/Tests/Input/StringInputTest.md) | |

### \Symfony\Component\Console\Tests\Logger

#### Classes

| Class | Description |
|-------|-------------|
| [`ConsoleLoggerTest`](./docs/classes/Symfony/Component/Console/Tests/Logger/ConsoleLoggerTest.md) | Console logger test.|
| [`DummyTest`](./docs/classes/Symfony/Component/Console/Tests/Logger/DummyTest.md) | |

### \Symfony\Component\Console\Tests\Output

#### Classes

| Class | Description |
|-------|-------------|
| [`ConsoleOutputTest`](./docs/classes/Symfony/Component/Console/Tests/Output/ConsoleOutputTest.md) | |
| [`NullOutputTest`](./docs/classes/Symfony/Component/Console/Tests/Output/NullOutputTest.md) | |
| [`OutputTest`](./docs/classes/Symfony/Component/Console/Tests/Output/OutputTest.md) | |
| [`StreamOutputTest`](./docs/classes/Symfony/Component/Console/Tests/Output/StreamOutputTest.md) | |
| [`TestOutput`](./docs/classes/Symfony/Component/Console/Tests/Output/TestOutput.md) | Base class for output classes.|

### \Symfony\Component\Console\Tests\Style

#### Classes

| Class | Description |
|-------|-------------|
| [`SymfonyStyleTest`](./docs/classes/Symfony/Component/Console/Tests/Style/SymfonyStyleTest.md) | |
| [`SymfonyStyleWithForcedLineLength`](./docs/classes/Symfony/Component/Console/Tests/Style/SymfonyStyleWithForcedLineLength.md) | Use this class in tests to force the line length<br />and ensure a consistent output for expectations.|

### \Symfony\Component\Console\Tests\Tester

#### Classes

| Class | Description |
|-------|-------------|
| [`ApplicationTesterTest`](./docs/classes/Symfony/Component/Console/Tests/Tester/ApplicationTesterTest.md) | |
| [`CommandTesterTest`](./docs/classes/Symfony/Component/Console/Tests/Tester/CommandTesterTest.md) | |

### \Symfony\Component\Debug

#### Classes

| Class | Description |
|-------|-------------|
| [`BufferingLogger`](./docs/classes/Symfony/Component/Debug/BufferingLogger.md) | A buffering logger that stacks logs for later.|
| [`Debug`](./docs/classes/Symfony/Component/Debug/Debug.md) | Registers all the debug tools.|
| [`DebugClassLoader`](./docs/classes/Symfony/Component/Debug/DebugClassLoader.md) | Autoloader checking if the class is really defined in the file found.|
| [`ErrorHandler`](./docs/classes/Symfony/Component/Debug/ErrorHandler.md) | A generic ErrorHandler for the PHP engine.|
| [`ExceptionHandler`](./docs/classes/Symfony/Component/Debug/ExceptionHandler.md) | ExceptionHandler converts an exception to a Response object.|

### \Symfony\Component\Debug\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassNotFoundException`](./docs/classes/Symfony/Component/Debug/Exception/ClassNotFoundException.md) | Class (or Trait or Interface) Not Found Exception.|
| [`ContextErrorException`](./docs/classes/Symfony/Component/Debug/Exception/ContextErrorException.md) | Error Exception with Variable Context.|
| [`FatalErrorException`](./docs/classes/Symfony/Component/Debug/Exception/FatalErrorException.md) | Fatal Error Exception.|
| [`FatalThrowableError`](./docs/classes/Symfony/Component/Debug/Exception/FatalThrowableError.md) | Fatal Throwable Error.|
| [`FlattenException`](./docs/classes/Symfony/Component/Debug/Exception/FlattenException.md) | FlattenException wraps a PHP Exception to be able to serialize it.|
| [`OutOfMemoryException`](./docs/classes/Symfony/Component/Debug/Exception/OutOfMemoryException.md) | Out of memory exception.|
| [`UndefinedFunctionException`](./docs/classes/Symfony/Component/Debug/Exception/UndefinedFunctionException.md) | Undefined Function Exception.|
| [`UndefinedMethodException`](./docs/classes/Symfony/Component/Debug/Exception/UndefinedMethodException.md) | Undefined Method Exception.|

### \Symfony\Component\Debug\FatalErrorHandler

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassNotFoundFatalErrorHandler`](./docs/classes/Symfony/Component/Debug/FatalErrorHandler/ClassNotFoundFatalErrorHandler.md) | ErrorHandler for classes that do not exist.|
| [`UndefinedFunctionFatalErrorHandler`](./docs/classes/Symfony/Component/Debug/FatalErrorHandler/UndefinedFunctionFatalErrorHandler.md) | ErrorHandler for undefined functions.|
| [`UndefinedMethodFatalErrorHandler`](./docs/classes/Symfony/Component/Debug/FatalErrorHandler/UndefinedMethodFatalErrorHandler.md) | ErrorHandler for undefined methods.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FatalErrorHandlerInterface`](./docs/classes/Symfony/Component/Debug/FatalErrorHandler/FatalErrorHandlerInterface.md) | Attempts to convert fatal errors to exceptions.|

### \Symfony\Component\Debug\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassLoader`](./docs/classes/Symfony/Component/Debug/Tests/ClassLoader.md) | |
| [`DebugClassLoaderTest`](./docs/classes/Symfony/Component/Debug/Tests/DebugClassLoaderTest.md) | |
| [`ErrorHandlerTest`](./docs/classes/Symfony/Component/Debug/Tests/ErrorHandlerTest.md) | ErrorHandlerTest.|
| [`ExceptionHandlerTest`](./docs/classes/Symfony/Component/Debug/Tests/ExceptionHandlerTest.md) | |
| [`MockExceptionHandler`](./docs/classes/Symfony/Component/Debug/Tests/MockExceptionHandler.md) | ExceptionHandler converts an exception to a Response object.|

### \Symfony\Component\Debug\Tests\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FlattenExceptionTest`](./docs/classes/Symfony/Component/Debug/Tests/Exception/FlattenExceptionTest.md) | |

### \Symfony\Component\Debug\Tests\FatalErrorHandler

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassNotFoundFatalErrorHandlerTest`](./docs/classes/Symfony/Component/Debug/Tests/FatalErrorHandler/ClassNotFoundFatalErrorHandlerTest.md) | |
| [`UndefinedFunctionFatalErrorHandlerTest`](./docs/classes/Symfony/Component/Debug/Tests/FatalErrorHandler/UndefinedFunctionFatalErrorHandlerTest.md) | |
| [`UndefinedMethodFatalErrorHandlerTest`](./docs/classes/Symfony/Component/Debug/Tests/FatalErrorHandler/UndefinedMethodFatalErrorHandlerTest.md) | |

### \Symfony\Component\Debug\Tests\Fixtures

#### Classes

| Class | Description |
|-------|-------------|
| [`CaseMismatch`](./docs/classes/Symfony/Component/Debug/Tests/Fixtures/CaseMismatch.md) | |
| [`DeprecatedClass`](./docs/classes/Symfony/Component/Debug/Tests/Fixtures/DeprecatedClass.md) | |
| [`NotPSR0`](./docs/classes/Symfony/Component/Debug/Tests/Fixtures/NotPSR0.md) | |
| [`NotPSR0bis`](./docs/classes/Symfony/Component/Debug/Tests/Fixtures/NotPSR0bis.md) | |
| [`PSR4CaseMismatch`](./docs/classes/Symfony/Component/Debug/Tests/Fixtures/PSR4CaseMismatch.md) | |
| [`ToStringThrower`](./docs/classes/Symfony/Component/Debug/Tests/Fixtures/ToStringThrower.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`DeprecatedInterface`](./docs/classes/Symfony/Component/Debug/Tests/Fixtures/DeprecatedInterface.md) | |
| [`NonDeprecatedInterface`](./docs/classes/Symfony/Component/Debug/Tests/Fixtures/NonDeprecatedInterface.md) | |

### \Symfony\Component\Debug\Tests\Fixtures2

#### Classes

| Class | Description |
|-------|-------------|
| [`RequiredTwice`](./docs/classes/Symfony/Component/Debug/Tests/Fixtures2/RequiredTwice.md) | |

### \Symfony\Component\EventDispatcher

#### Classes

| Class | Description |
|-------|-------------|
| [`ContainerAwareEventDispatcher`](./docs/classes/Symfony/Component/EventDispatcher/ContainerAwareEventDispatcher.md) | Lazily loads listeners and subscribers from the dependency injection<br />container.|
| [`Event`](./docs/classes/Symfony/Component/EventDispatcher/Event.md) | Event is the base class for classes containing event data.|
| [`EventDispatcher`](./docs/classes/Symfony/Component/EventDispatcher/EventDispatcher.md) | The EventDispatcherInterface is the central point of Symfony&#039;s event listener system.|
| [`GenericEvent`](./docs/classes/Symfony/Component/EventDispatcher/GenericEvent.md) | Event encapsulation class.|
| [`ImmutableEventDispatcher`](./docs/classes/Symfony/Component/EventDispatcher/ImmutableEventDispatcher.md) | A read-only proxy for an event dispatcher.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`EventDispatcherInterface`](./docs/classes/Symfony/Component/EventDispatcher/EventDispatcherInterface.md) | The EventDispatcherInterface is the central point of Symfony&#039;s event listener system.|
| [`EventSubscriberInterface`](./docs/classes/Symfony/Component/EventDispatcher/EventSubscriberInterface.md) | An EventSubscriber knows himself what events he is interested in.|

### \Symfony\Component\EventDispatcher\Debug

#### Classes

| Class | Description |
|-------|-------------|
| [`TraceableEventDispatcher`](./docs/classes/Symfony/Component/EventDispatcher/Debug/TraceableEventDispatcher.md) | Collects some data about event listeners.|
| [`WrappedListener`](./docs/classes/Symfony/Component/EventDispatcher/Debug/WrappedListener.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`TraceableEventDispatcherInterface`](./docs/classes/Symfony/Component/EventDispatcher/Debug/TraceableEventDispatcherInterface.md) | The EventDispatcherInterface is the central point of Symfony&#039;s event listener system.|

### \Symfony\Component\EventDispatcher\DependencyInjection

#### Classes

| Class | Description |
|-------|-------------|
| [`RegisterListenersPass`](./docs/classes/Symfony/Component/EventDispatcher/DependencyInjection/RegisterListenersPass.md) | Compiler pass to register tagged services for an event dispatcher.|

### \Symfony\Component\EventDispatcher\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractEventDispatcherTest`](./docs/classes/Symfony/Component/EventDispatcher/Tests/AbstractEventDispatcherTest.md) | |
| [`CallableClass`](./docs/classes/Symfony/Component/EventDispatcher/Tests/CallableClass.md) | |
| [`ContainerAwareEventDispatcherTest`](./docs/classes/Symfony/Component/EventDispatcher/Tests/ContainerAwareEventDispatcherTest.md) | |
| [`EventDispatcherTest`](./docs/classes/Symfony/Component/EventDispatcher/Tests/EventDispatcherTest.md) | |
| [`EventTest`](./docs/classes/Symfony/Component/EventDispatcher/Tests/EventTest.md) | Test class for Event.|
| [`GenericEventTest`](./docs/classes/Symfony/Component/EventDispatcher/Tests/GenericEventTest.md) | Test class for Event.|
| [`ImmutableEventDispatcherTest`](./docs/classes/Symfony/Component/EventDispatcher/Tests/ImmutableEventDispatcherTest.md) | |
| [`Service`](./docs/classes/Symfony/Component/EventDispatcher/Tests/Service.md) | |
| [`SubscriberService`](./docs/classes/Symfony/Component/EventDispatcher/Tests/SubscriberService.md) | |
| [`TestEventListener`](./docs/classes/Symfony/Component/EventDispatcher/Tests/TestEventListener.md) | |
| [`TestEventSubscriber`](./docs/classes/Symfony/Component/EventDispatcher/Tests/TestEventSubscriber.md) | |
| [`TestEventSubscriberWithMultipleListeners`](./docs/classes/Symfony/Component/EventDispatcher/Tests/TestEventSubscriberWithMultipleListeners.md) | |
| [`TestEventSubscriberWithPriorities`](./docs/classes/Symfony/Component/EventDispatcher/Tests/TestEventSubscriberWithPriorities.md) | |
| [`TestWithDispatcher`](./docs/classes/Symfony/Component/EventDispatcher/Tests/TestWithDispatcher.md) | |

### \Symfony\Component\EventDispatcher\Tests\Debug

#### Classes

| Class | Description |
|-------|-------------|
| [`EventSubscriber`](./docs/classes/Symfony/Component/EventDispatcher/Tests/Debug/EventSubscriber.md) | |
| [`TraceableEventDispatcherTest`](./docs/classes/Symfony/Component/EventDispatcher/Tests/Debug/TraceableEventDispatcherTest.md) | |

### \Symfony\Component\EventDispatcher\Tests\DependencyInjection

#### Classes

| Class | Description |
|-------|-------------|
| [`RegisterListenersPassTest`](./docs/classes/Symfony/Component/EventDispatcher/Tests/DependencyInjection/RegisterListenersPassTest.md) | |
| [`SubscriberService`](./docs/classes/Symfony/Component/EventDispatcher/Tests/DependencyInjection/SubscriberService.md) | |

### \Symfony\Component\Filesystem

#### Classes

| Class | Description |
|-------|-------------|
| [`Filesystem`](./docs/classes/Symfony/Component/Filesystem/Filesystem.md) | Provides basic utility to manipulate the file system.|
| [`LockHandler`](./docs/classes/Symfony/Component/Filesystem/LockHandler.md) | LockHandler class provides a simple abstraction to lock anything by means of<br />a file lock.|

### \Symfony\Component\Filesystem\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FileNotFoundException`](./docs/classes/Symfony/Component/Filesystem/Exception/FileNotFoundException.md) | Exception class thrown when a file couldn&#039;t be found.|
| [`IOException`](./docs/classes/Symfony/Component/Filesystem/Exception/IOException.md) | Exception class thrown when a filesystem operation failure happens.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Symfony/Component/Filesystem/Exception/ExceptionInterface.md) | Exception interface for all exceptions thrown by the component.|
| [`IOExceptionInterface`](./docs/classes/Symfony/Component/Filesystem/Exception/IOExceptionInterface.md) | IOException interface for file and input/output stream related exceptions thrown by the component.|

### \Symfony\Component\Filesystem\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ExceptionTest`](./docs/classes/Symfony/Component/Filesystem/Tests/ExceptionTest.md) | Test class for Filesystem.|
| [`FilesystemTest`](./docs/classes/Symfony/Component/Filesystem/Tests/FilesystemTest.md) | Test class for Filesystem.|
| [`FilesystemTestCase`](./docs/classes/Symfony/Component/Filesystem/Tests/FilesystemTestCase.md) | |
| [`LockHandlerTest`](./docs/classes/Symfony/Component/Filesystem/Tests/LockHandlerTest.md) | |

### \Symfony\Component\Filesystem\Tests\Fixtures\MockStream

#### Classes

| Class | Description |
|-------|-------------|
| [`MockStream`](./docs/classes/Symfony/Component/Filesystem/Tests/Fixtures/MockStream/MockStream.md) | Mock stream class to be used with stream_wrapper_register.|

### \Symfony\Component\Finder

#### Classes

| Class | Description |
|-------|-------------|
| [`Finder`](./docs/classes/Symfony/Component/Finder/Finder.md) | Finder allows to build rules to find files and directories.|
| [`Glob`](./docs/classes/Symfony/Component/Finder/Glob.md) | Glob matches globbing patterns against text.|
| [`SplFileInfo`](./docs/classes/Symfony/Component/Finder/SplFileInfo.md) | Extends \SplFileInfo to support relative paths.|

### \Symfony\Component\Finder\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractAdapter`](./docs/classes/Symfony/Component/Finder/Adapter/AbstractAdapter.md) | Interface for finder engine implementations.|
| [`AbstractFindAdapter`](./docs/classes/Symfony/Component/Finder/Adapter/AbstractFindAdapter.md) | Shell engine implementation using GNU find command.|
| [`BsdFindAdapter`](./docs/classes/Symfony/Component/Finder/Adapter/BsdFindAdapter.md) | Shell engine implementation using BSD find command.|
| [`GnuFindAdapter`](./docs/classes/Symfony/Component/Finder/Adapter/GnuFindAdapter.md) | Shell engine implementation using GNU find command.|
| [`PhpAdapter`](./docs/classes/Symfony/Component/Finder/Adapter/PhpAdapter.md) | PHP finder engine implementation.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdapterInterface`](./docs/classes/Symfony/Component/Finder/Adapter/AdapterInterface.md) | |

### \Symfony\Component\Finder\Comparator

#### Classes

| Class | Description |
|-------|-------------|
| [`Comparator`](./docs/classes/Symfony/Component/Finder/Comparator/Comparator.md) | Comparator.|
| [`DateComparator`](./docs/classes/Symfony/Component/Finder/Comparator/DateComparator.md) | DateCompare compiles date comparisons.|
| [`NumberComparator`](./docs/classes/Symfony/Component/Finder/Comparator/NumberComparator.md) | NumberComparator compiles a simple comparison to an anonymous<br />subroutine, which you can call with a value to be tested again.|

### \Symfony\Component\Finder\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`AccessDeniedException`](./docs/classes/Symfony/Component/Finder/Exception/AccessDeniedException.md) | |
| [`AdapterFailureException`](./docs/classes/Symfony/Component/Finder/Exception/AdapterFailureException.md) | Base exception for all adapter failures.|
| [`OperationNotPermitedException`](./docs/classes/Symfony/Component/Finder/Exception/OperationNotPermitedException.md) | Base exception for all adapter failures.|
| [`ShellCommandFailureException`](./docs/classes/Symfony/Component/Finder/Exception/ShellCommandFailureException.md) | Base exception for all adapter failures.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Symfony/Component/Finder/Exception/ExceptionInterface.md) | |

### \Symfony\Component\Finder\Expression

#### Classes

| Class | Description |
|-------|-------------|
| [`Expression`](./docs/classes/Symfony/Component/Finder/Expression/Expression.md) | |
| [`Glob`](./docs/classes/Symfony/Component/Finder/Expression/Glob.md) | |
| [`Regex`](./docs/classes/Symfony/Component/Finder/Expression/Regex.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ValueInterface`](./docs/classes/Symfony/Component/Finder/Expression/ValueInterface.md) | |

### \Symfony\Component\Finder\Iterator

#### Classes

| Class | Description |
|-------|-------------|
| [`CustomFilterIterator`](./docs/classes/Symfony/Component/Finder/Iterator/CustomFilterIterator.md) | CustomFilterIterator filters files by applying anonymous functions.|
| [`DateRangeFilterIterator`](./docs/classes/Symfony/Component/Finder/Iterator/DateRangeFilterIterator.md) | DateRangeFilterIterator filters out files that are not in the given date range (last modified dates).|
| [`DepthRangeFilterIterator`](./docs/classes/Symfony/Component/Finder/Iterator/DepthRangeFilterIterator.md) | DepthRangeFilterIterator limits the directory depth.|
| [`ExcludeDirectoryFilterIterator`](./docs/classes/Symfony/Component/Finder/Iterator/ExcludeDirectoryFilterIterator.md) | ExcludeDirectoryFilterIterator filters out directories.|
| [`FilePathsIterator`](./docs/classes/Symfony/Component/Finder/Iterator/FilePathsIterator.md) | Iterate over shell command result.|
| [`FileTypeFilterIterator`](./docs/classes/Symfony/Component/Finder/Iterator/FileTypeFilterIterator.md) | FileTypeFilterIterator only keeps files, directories, or both.|
| [`FilecontentFilterIterator`](./docs/classes/Symfony/Component/Finder/Iterator/FilecontentFilterIterator.md) | FilecontentFilterIterator filters files by their contents using patterns (regexps or strings).|
| [`FilenameFilterIterator`](./docs/classes/Symfony/Component/Finder/Iterator/FilenameFilterIterator.md) | FilenameFilterIterator filters files by patterns (a regexp, a glob, or a string).|
| [`FilterIterator`](./docs/classes/Symfony/Component/Finder/Iterator/FilterIterator.md) | This iterator just overrides the rewind method in order to correct a PHP bug,<br />which existed before version 5.5.23/5.6.7.|
| [`MultiplePcreFilterIterator`](./docs/classes/Symfony/Component/Finder/Iterator/MultiplePcreFilterIterator.md) | MultiplePcreFilterIterator filters files using patterns (regexps, globs or strings).|
| [`PathFilterIterator`](./docs/classes/Symfony/Component/Finder/Iterator/PathFilterIterator.md) | PathFilterIterator filters files by path patterns (e.g. some/special/dir).|
| [`RecursiveDirectoryIterator`](./docs/classes/Symfony/Component/Finder/Iterator/RecursiveDirectoryIterator.md) | Extends the \RecursiveDirectoryIterator to support relative paths.|
| [`SizeRangeFilterIterator`](./docs/classes/Symfony/Component/Finder/Iterator/SizeRangeFilterIterator.md) | SizeRangeFilterIterator filters out files that are not in the given size range.|
| [`SortableIterator`](./docs/classes/Symfony/Component/Finder/Iterator/SortableIterator.md) | SortableIterator applies a sort on a given Iterator.|

### \Symfony\Component\Finder\Shell

#### Classes

| Class | Description |
|-------|-------------|
| [`Command`](./docs/classes/Symfony/Component/Finder/Shell/Command.md) | |
| [`Shell`](./docs/classes/Symfony/Component/Finder/Shell/Shell.md) | |

### \Symfony\Component\Finder\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`BsdFinderTest`](./docs/classes/Symfony/Component/Finder/Tests/BsdFinderTest.md) | |
| [`FinderTest`](./docs/classes/Symfony/Component/Finder/Tests/FinderTest.md) | |
| [`GlobTest`](./docs/classes/Symfony/Component/Finder/Tests/GlobTest.md) | |
| [`GnuFinderTest`](./docs/classes/Symfony/Component/Finder/Tests/GnuFinderTest.md) | |
| [`PhpFinderTest`](./docs/classes/Symfony/Component/Finder/Tests/PhpFinderTest.md) | |

### \Symfony\Component\Finder\Tests\Comparator

#### Classes

| Class | Description |
|-------|-------------|
| [`ComparatorTest`](./docs/classes/Symfony/Component/Finder/Tests/Comparator/ComparatorTest.md) | |
| [`DateComparatorTest`](./docs/classes/Symfony/Component/Finder/Tests/Comparator/DateComparatorTest.md) | |
| [`NumberComparatorTest`](./docs/classes/Symfony/Component/Finder/Tests/Comparator/NumberComparatorTest.md) | |

### \Symfony\Component\Finder\Tests\Expression

#### Classes

| Class | Description |
|-------|-------------|
| [`ExpressionTest`](./docs/classes/Symfony/Component/Finder/Tests/Expression/ExpressionTest.md) | |
| [`GlobTest`](./docs/classes/Symfony/Component/Finder/Tests/Expression/GlobTest.md) | |
| [`RegexTest`](./docs/classes/Symfony/Component/Finder/Tests/Expression/RegexTest.md) | |

### \Symfony\Component\Finder\Tests\FakeAdapter

#### Classes

| Class | Description |
|-------|-------------|
| [`DummyAdapter`](./docs/classes/Symfony/Component/Finder/Tests/FakeAdapter/DummyAdapter.md) | Interface for finder engine implementations.|
| [`FailingAdapter`](./docs/classes/Symfony/Component/Finder/Tests/FakeAdapter/FailingAdapter.md) | Interface for finder engine implementations.|
| [`NamedAdapter`](./docs/classes/Symfony/Component/Finder/Tests/FakeAdapter/NamedAdapter.md) | Interface for finder engine implementations.|
| [`UnsupportedAdapter`](./docs/classes/Symfony/Component/Finder/Tests/FakeAdapter/UnsupportedAdapter.md) | Interface for finder engine implementations.|

### \Symfony\Component\Finder\Tests\Iterator

#### Classes

| Class | Description |
|-------|-------------|
| [`CustomFilterIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/CustomFilterIteratorTest.md) | |
| [`DateRangeFilterIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/DateRangeFilterIteratorTest.md) | |
| [`DepthRangeFilterIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/DepthRangeFilterIteratorTest.md) | |
| [`ExcludeDirectoryFilterIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/ExcludeDirectoryFilterIteratorTest.md) | |
| [`FilePathsIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/FilePathsIteratorTest.md) | |
| [`FileTypeFilterIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/FileTypeFilterIteratorTest.md) | |
| [`FilecontentFilterIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/FilecontentFilterIteratorTest.md) | |
| [`FilenameFilterIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/FilenameFilterIteratorTest.md) | |
| [`FilterIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/FilterIteratorTest.md) | |
| [`InnerNameIterator`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/InnerNameIterator.md) | |
| [`InnerSizeIterator`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/InnerSizeIterator.md) | |
| [`InnerTypeIterator`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/InnerTypeIterator.md) | |
| [`Iterator`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/Iterator.md) | |
| [`IteratorTestCase`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/IteratorTestCase.md) | |
| [`MockFileListIterator`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/MockFileListIterator.md) | |
| [`MockSplFileInfo`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/MockSplFileInfo.md) | |
| [`MultiplePcreFilterIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/MultiplePcreFilterIteratorTest.md) | |
| [`PathFilterIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/PathFilterIteratorTest.md) | |
| [`RealIteratorTestCase`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/RealIteratorTestCase.md) | |
| [`RecursiveDirectoryIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/RecursiveDirectoryIteratorTest.md) | |
| [`SizeRangeFilterIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/SizeRangeFilterIteratorTest.md) | |
| [`SortableIteratorTest`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/SortableIteratorTest.md) | |
| [`TestMultiplePcreFilterIterator`](./docs/classes/Symfony/Component/Finder/Tests/Iterator/TestMultiplePcreFilterIterator.md) | MultiplePcreFilterIterator filters files using patterns (regexps, globs or strings).|

### \Symfony\Component\Finder\Tests\Shell

#### Classes

| Class | Description |
|-------|-------------|
| [`CommandTest`](./docs/classes/Symfony/Component/Finder/Tests/Shell/CommandTest.md) | |

### \Symfony\Component\Process

#### Classes

| Class | Description |
|-------|-------------|
| [`ExecutableFinder`](./docs/classes/Symfony/Component/Process/ExecutableFinder.md) | Generic executable finder.|
| [`PhpExecutableFinder`](./docs/classes/Symfony/Component/Process/PhpExecutableFinder.md) | An executable finder specifically designed for the PHP executable.|
| [`PhpProcess`](./docs/classes/Symfony/Component/Process/PhpProcess.md) | PhpProcess runs a PHP script in an independent process.|
| [`Process`](./docs/classes/Symfony/Component/Process/Process.md) | Process is a thin wrapper around proc_* functions to easily<br />start independent PHP processes.|
| [`ProcessBuilder`](./docs/classes/Symfony/Component/Process/ProcessBuilder.md) | |
| [`ProcessUtils`](./docs/classes/Symfony/Component/Process/ProcessUtils.md) | ProcessUtils is a bunch of utility methods.|

### \Symfony\Component\Process\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`InvalidArgumentException`](./docs/classes/Symfony/Component/Process/Exception/InvalidArgumentException.md) | InvalidArgumentException for the Process Component.|
| [`LogicException`](./docs/classes/Symfony/Component/Process/Exception/LogicException.md) | LogicException for the Process Component.|
| [`ProcessFailedException`](./docs/classes/Symfony/Component/Process/Exception/ProcessFailedException.md) | Exception for failed processes.|
| [`ProcessTimedOutException`](./docs/classes/Symfony/Component/Process/Exception/ProcessTimedOutException.md) | Exception that is thrown when a process times out.|
| [`RuntimeException`](./docs/classes/Symfony/Component/Process/Exception/RuntimeException.md) | RuntimeException for the Process Component.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Symfony/Component/Process/Exception/ExceptionInterface.md) | Marker Interface for the Process Component.|

### \Symfony\Component\Process\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ExecutableFinderTest`](./docs/classes/Symfony/Component/Process/Tests/ExecutableFinderTest.md) | |
| [`NonStringifiable`](./docs/classes/Symfony/Component/Process/Tests/NonStringifiable.md) | |
| [`PhpExecutableFinderTest`](./docs/classes/Symfony/Component/Process/Tests/PhpExecutableFinderTest.md) | |
| [`PhpProcessTest`](./docs/classes/Symfony/Component/Process/Tests/PhpProcessTest.md) | |
| [`ProcessBuilderTest`](./docs/classes/Symfony/Component/Process/Tests/ProcessBuilderTest.md) | |
| [`ProcessFailedExceptionTest`](./docs/classes/Symfony/Component/Process/Tests/ProcessFailedExceptionTest.md) | |
| [`ProcessTest`](./docs/classes/Symfony/Component/Process/Tests/ProcessTest.md) | |
| [`ProcessUtilsTest`](./docs/classes/Symfony/Component/Process/Tests/ProcessUtilsTest.md) | |
| [`Stringifiable`](./docs/classes/Symfony/Component/Process/Tests/Stringifiable.md) | |

### \Symfony\Component\Stopwatch

#### Classes

| Class | Description |
|-------|-------------|
| [`Section`](./docs/classes/Symfony/Component/Stopwatch/Section.md) | Stopwatch section.|
| [`Stopwatch`](./docs/classes/Symfony/Component/Stopwatch/Stopwatch.md) | Stopwatch provides a way to profile code.|
| [`StopwatchEvent`](./docs/classes/Symfony/Component/Stopwatch/StopwatchEvent.md) | Represents an Event managed by Stopwatch.|
| [`StopwatchPeriod`](./docs/classes/Symfony/Component/Stopwatch/StopwatchPeriod.md) | Represents an Period for an Event.|

### \Symfony\Component\Stopwatch\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`StopwatchEventTest`](./docs/classes/Symfony/Component/Stopwatch/Tests/StopwatchEventTest.md) | StopwatchEventTest.|
| [`StopwatchTest`](./docs/classes/Symfony/Component/Stopwatch/Tests/StopwatchTest.md) | StopwatchTest.|

### \Symfony\Component\Translation

#### Classes

| Class | Description |
|-------|-------------|
| [`DataCollectorTranslator`](./docs/classes/Symfony/Component/Translation/DataCollectorTranslator.md) | |
| [`IdentityTranslator`](./docs/classes/Symfony/Component/Translation/IdentityTranslator.md) | IdentityTranslator does not translate anything.|
| [`Interval`](./docs/classes/Symfony/Component/Translation/Interval.md) | Tests if a given number belongs to a given math interval.|
| [`LoggingTranslator`](./docs/classes/Symfony/Component/Translation/LoggingTranslator.md) | |
| [`MessageCatalogue`](./docs/classes/Symfony/Component/Translation/MessageCatalogue.md) | MessageCatalogue.|
| [`MessageSelector`](./docs/classes/Symfony/Component/Translation/MessageSelector.md) | MessageSelector.|
| [`PluralizationRules`](./docs/classes/Symfony/Component/Translation/PluralizationRules.md) | Returns the plural rules for a given locale.|
| [`Translator`](./docs/classes/Symfony/Component/Translation/Translator.md) | Translator.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`MessageCatalogueInterface`](./docs/classes/Symfony/Component/Translation/MessageCatalogueInterface.md) | MessageCatalogueInterface.|
| [`MetadataAwareInterface`](./docs/classes/Symfony/Component/Translation/MetadataAwareInterface.md) | MetadataAwareInterface.|
| [`TranslatorBagInterface`](./docs/classes/Symfony/Component/Translation/TranslatorBagInterface.md) | TranslatorBagInterface.|
| [`TranslatorInterface`](./docs/classes/Symfony/Component/Translation/TranslatorInterface.md) | TranslatorInterface.|

### \Symfony\Component\Translation\Catalogue

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractOperation`](./docs/classes/Symfony/Component/Translation/Catalogue/AbstractOperation.md) | Base catalogues binary operation class.|
| [`MergeOperation`](./docs/classes/Symfony/Component/Translation/Catalogue/MergeOperation.md) | Merge operation between two catalogues as follows:<br />all = source ∪ target = {x: x ∈ source ∨ x ∈ target}<br />new = all ∖ source = {x: x ∈ target ∧ x ∉ source}<br />obsolete = source ∖ all = {x: x ∈ source ∧ x ∉ source ∧ x ∉ target} = ∅<br />Basically, the result contains messages from both catalogues.|
| [`TargetOperation`](./docs/classes/Symfony/Component/Translation/Catalogue/TargetOperation.md) | Target operation between two catalogues:<br />intersection = source ∩ target = {x: x ∈ source ∧ x ∈ target}<br />all = intersection ∪ (target ∖ intersection) = target<br />new = all ∖ source = {x: x ∈ target ∧ x ∉ source}<br />obsolete = source ∖ all = source ∖ target = {x: x ∈ source ∧ x ∉ target}<br />Basically, the result contains messages from the target catalogue.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`OperationInterface`](./docs/classes/Symfony/Component/Translation/Catalogue/OperationInterface.md) | Represents an operation on catalogue(s).|

### \Symfony\Component\Translation\DataCollector

#### Classes

| Class | Description |
|-------|-------------|
| [`TranslationDataCollector`](./docs/classes/Symfony/Component/Translation/DataCollector/TranslationDataCollector.md) | |

### \Symfony\Component\Translation\Dumper

#### Classes

| Class | Description |
|-------|-------------|
| [`CsvFileDumper`](./docs/classes/Symfony/Component/Translation/Dumper/CsvFileDumper.md) | CsvFileDumper generates a csv formatted string representation of a message catalogue.|
| [`FileDumper`](./docs/classes/Symfony/Component/Translation/Dumper/FileDumper.md) | FileDumper is an implementation of DumperInterface that dump a message catalogue to file(s).|
| [`IcuResFileDumper`](./docs/classes/Symfony/Component/Translation/Dumper/IcuResFileDumper.md) | IcuResDumper generates an ICU ResourceBundle formatted string representation of a message catalogue.|
| [`IniFileDumper`](./docs/classes/Symfony/Component/Translation/Dumper/IniFileDumper.md) | IniFileDumper generates an ini formatted string representation of a message catalogue.|
| [`JsonFileDumper`](./docs/classes/Symfony/Component/Translation/Dumper/JsonFileDumper.md) | JsonFileDumper generates an json formatted string representation of a message catalogue.|
| [`MoFileDumper`](./docs/classes/Symfony/Component/Translation/Dumper/MoFileDumper.md) | MoFileDumper generates a gettext formatted string representation of a message catalogue.|
| [`PhpFileDumper`](./docs/classes/Symfony/Component/Translation/Dumper/PhpFileDumper.md) | PhpFileDumper generates PHP files from a message catalogue.|
| [`PoFileDumper`](./docs/classes/Symfony/Component/Translation/Dumper/PoFileDumper.md) | PoFileDumper generates a gettext formatted string representation of a message catalogue.|
| [`QtFileDumper`](./docs/classes/Symfony/Component/Translation/Dumper/QtFileDumper.md) | QtFileDumper generates ts files from a message catalogue.|
| [`XliffFileDumper`](./docs/classes/Symfony/Component/Translation/Dumper/XliffFileDumper.md) | XliffFileDumper generates xliff files from a message catalogue.|
| [`YamlFileDumper`](./docs/classes/Symfony/Component/Translation/Dumper/YamlFileDumper.md) | YamlFileDumper generates yaml files from a message catalogue.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`DumperInterface`](./docs/classes/Symfony/Component/Translation/Dumper/DumperInterface.md) | DumperInterface is the interface implemented by all translation dumpers.|

### \Symfony\Component\Translation\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`InvalidResourceException`](./docs/classes/Symfony/Component/Translation/Exception/InvalidResourceException.md) | Thrown when a resource cannot be loaded.|
| [`NotFoundResourceException`](./docs/classes/Symfony/Component/Translation/Exception/NotFoundResourceException.md) | Thrown when a resource does not exist.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Symfony/Component/Translation/Exception/ExceptionInterface.md) | Exception interface for all exceptions thrown by the component.|

### \Symfony\Component\Translation\Extractor

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractFileExtractor`](./docs/classes/Symfony/Component/Translation/Extractor/AbstractFileExtractor.md) | Base class used by classes that extract translation messages from files.|
| [`ChainExtractor`](./docs/classes/Symfony/Component/Translation/Extractor/ChainExtractor.md) | ChainExtractor extracts translation messages from template files.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtractorInterface`](./docs/classes/Symfony/Component/Translation/Extractor/ExtractorInterface.md) | Extracts translation messages from a directory or files to the catalogue.|

### \Symfony\Component\Translation\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayLoader`](./docs/classes/Symfony/Component/Translation/Loader/ArrayLoader.md) | ArrayLoader loads translations from a PHP array.|
| [`CsvFileLoader`](./docs/classes/Symfony/Component/Translation/Loader/CsvFileLoader.md) | CsvFileLoader loads translations from CSV files.|
| [`FileLoader`](./docs/classes/Symfony/Component/Translation/Loader/FileLoader.md) | ArrayLoader loads translations from a PHP array.|
| [`IcuDatFileLoader`](./docs/classes/Symfony/Component/Translation/Loader/IcuDatFileLoader.md) | IcuResFileLoader loads translations from a resource bundle.|
| [`IcuResFileLoader`](./docs/classes/Symfony/Component/Translation/Loader/IcuResFileLoader.md) | IcuResFileLoader loads translations from a resource bundle.|
| [`IniFileLoader`](./docs/classes/Symfony/Component/Translation/Loader/IniFileLoader.md) | IniFileLoader loads translations from an ini file.|
| [`JsonFileLoader`](./docs/classes/Symfony/Component/Translation/Loader/JsonFileLoader.md) | JsonFileLoader loads translations from an json file.|
| [`MoFileLoader`](./docs/classes/Symfony/Component/Translation/Loader/MoFileLoader.md) | ArrayLoader loads translations from a PHP array.|
| [`PhpFileLoader`](./docs/classes/Symfony/Component/Translation/Loader/PhpFileLoader.md) | PhpFileLoader loads translations from PHP files returning an array of translations.|
| [`PoFileLoader`](./docs/classes/Symfony/Component/Translation/Loader/PoFileLoader.md) | ArrayLoader loads translations from a PHP array.|
| [`QtFileLoader`](./docs/classes/Symfony/Component/Translation/Loader/QtFileLoader.md) | QtFileLoader loads translations from QT Translations XML files.|
| [`XliffFileLoader`](./docs/classes/Symfony/Component/Translation/Loader/XliffFileLoader.md) | XliffFileLoader loads translations from XLIFF files.|
| [`YamlFileLoader`](./docs/classes/Symfony/Component/Translation/Loader/YamlFileLoader.md) | YamlFileLoader loads translations from Yaml files.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`LoaderInterface`](./docs/classes/Symfony/Component/Translation/Loader/LoaderInterface.md) | LoaderInterface is the interface implemented by all translation loaders.|

### \Symfony\Component\Translation\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`DataCollectorTranslatorTest`](./docs/classes/Symfony/Component/Translation/Tests/DataCollectorTranslatorTest.md) | |
| [`IdentityTranslatorTest`](./docs/classes/Symfony/Component/Translation/Tests/IdentityTranslatorTest.md) | |
| [`IntervalTest`](./docs/classes/Symfony/Component/Translation/Tests/IntervalTest.md) | |
| [`LoggingTranslatorTest`](./docs/classes/Symfony/Component/Translation/Tests/LoggingTranslatorTest.md) | |
| [`MessageCatalogueTest`](./docs/classes/Symfony/Component/Translation/Tests/MessageCatalogueTest.md) | |
| [`MessageSelectorTest`](./docs/classes/Symfony/Component/Translation/Tests/MessageSelectorTest.md) | |
| [`PluralizationRulesTest`](./docs/classes/Symfony/Component/Translation/Tests/PluralizationRulesTest.md) | Test should cover all languages mentioned on http://translate.sourceforge.net/wiki/l10n/pluralforms<br />and Plural forms mentioned on http://www.gnu.org/software/gettext/manual/gettext.html#Plural-forms.|
| [`StaleResource`](./docs/classes/Symfony/Component/Translation/Tests/StaleResource.md) | |
| [`StringClass`](./docs/classes/Symfony/Component/Translation/Tests/StringClass.md) | |
| [`TranslatorCacheTest`](./docs/classes/Symfony/Component/Translation/Tests/TranslatorCacheTest.md) | |
| [`TranslatorTest`](./docs/classes/Symfony/Component/Translation/Tests/TranslatorTest.md) | |

### \Symfony\Component\Translation\Tests\Catalogue

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractOperationTest`](./docs/classes/Symfony/Component/Translation/Tests/Catalogue/AbstractOperationTest.md) | |
| [`MergeOperationTest`](./docs/classes/Symfony/Component/Translation/Tests/Catalogue/MergeOperationTest.md) | |
| [`TargetOperationTest`](./docs/classes/Symfony/Component/Translation/Tests/Catalogue/TargetOperationTest.md) | |

### \Symfony\Component\Translation\Tests\DataCollector

#### Classes

| Class | Description |
|-------|-------------|
| [`TranslationDataCollectorTest`](./docs/classes/Symfony/Component/Translation/Tests/DataCollector/TranslationDataCollectorTest.md) | |

### \Symfony\Component\Translation\Tests\Dumper

#### Classes

| Class | Description |
|-------|-------------|
| [`ConcreteFileDumper`](./docs/classes/Symfony/Component/Translation/Tests/Dumper/ConcreteFileDumper.md) | FileDumper is an implementation of DumperInterface that dump a message catalogue to file(s).|
| [`CsvFileDumperTest`](./docs/classes/Symfony/Component/Translation/Tests/Dumper/CsvFileDumperTest.md) | |
| [`FileDumperTest`](./docs/classes/Symfony/Component/Translation/Tests/Dumper/FileDumperTest.md) | |
| [`IcuResFileDumperTest`](./docs/classes/Symfony/Component/Translation/Tests/Dumper/IcuResFileDumperTest.md) | |
| [`IniFileDumperTest`](./docs/classes/Symfony/Component/Translation/Tests/Dumper/IniFileDumperTest.md) | |
| [`JsonFileDumperTest`](./docs/classes/Symfony/Component/Translation/Tests/Dumper/JsonFileDumperTest.md) | |
| [`MoFileDumperTest`](./docs/classes/Symfony/Component/Translation/Tests/Dumper/MoFileDumperTest.md) | |
| [`PhpFileDumperTest`](./docs/classes/Symfony/Component/Translation/Tests/Dumper/PhpFileDumperTest.md) | |
| [`PoFileDumperTest`](./docs/classes/Symfony/Component/Translation/Tests/Dumper/PoFileDumperTest.md) | |
| [`QtFileDumperTest`](./docs/classes/Symfony/Component/Translation/Tests/Dumper/QtFileDumperTest.md) | |
| [`XliffFileDumperTest`](./docs/classes/Symfony/Component/Translation/Tests/Dumper/XliffFileDumperTest.md) | |
| [`YamlFileDumperTest`](./docs/classes/Symfony/Component/Translation/Tests/Dumper/YamlFileDumperTest.md) | |

### \Symfony\Component\Translation\Tests\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`CsvFileLoaderTest`](./docs/classes/Symfony/Component/Translation/Tests/Loader/CsvFileLoaderTest.md) | |
| [`IcuDatFileLoaderTest`](./docs/classes/Symfony/Component/Translation/Tests/Loader/IcuDatFileLoaderTest.md) | |
| [`IcuResFileLoaderTest`](./docs/classes/Symfony/Component/Translation/Tests/Loader/IcuResFileLoaderTest.md) | |
| [`IniFileLoaderTest`](./docs/classes/Symfony/Component/Translation/Tests/Loader/IniFileLoaderTest.md) | |
| [`JsonFileLoaderTest`](./docs/classes/Symfony/Component/Translation/Tests/Loader/JsonFileLoaderTest.md) | |
| [`LocalizedTestCase`](./docs/classes/Symfony/Component/Translation/Tests/Loader/LocalizedTestCase.md) | |
| [`MoFileLoaderTest`](./docs/classes/Symfony/Component/Translation/Tests/Loader/MoFileLoaderTest.md) | |
| [`PhpFileLoaderTest`](./docs/classes/Symfony/Component/Translation/Tests/Loader/PhpFileLoaderTest.md) | |
| [`PoFileLoaderTest`](./docs/classes/Symfony/Component/Translation/Tests/Loader/PoFileLoaderTest.md) | |
| [`QtFileLoaderTest`](./docs/classes/Symfony/Component/Translation/Tests/Loader/QtFileLoaderTest.md) | |
| [`XliffFileLoaderTest`](./docs/classes/Symfony/Component/Translation/Tests/Loader/XliffFileLoaderTest.md) | |
| [`YamlFileLoaderTest`](./docs/classes/Symfony/Component/Translation/Tests/Loader/YamlFileLoaderTest.md) | |

### \Symfony\Component\Translation\Tests\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayConverterTest`](./docs/classes/Symfony/Component/Translation/Tests/Util/ArrayConverterTest.md) | |

### \Symfony\Component\Translation\Tests\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`BackupDumper`](./docs/classes/Symfony/Component/Translation/Tests/Writer/BackupDumper.md) | |
| [`NonBackupDumper`](./docs/classes/Symfony/Component/Translation/Tests/Writer/NonBackupDumper.md) | |
| [`TranslationWriterTest`](./docs/classes/Symfony/Component/Translation/Tests/Writer/TranslationWriterTest.md) | |

### \Symfony\Component\Translation\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayConverter`](./docs/classes/Symfony/Component/Translation/Util/ArrayConverter.md) | ArrayConverter generates tree like structure from a message catalogue.|

### \Symfony\Component\Translation\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`TranslationWriter`](./docs/classes/Symfony/Component/Translation/Writer/TranslationWriter.md) | TranslationWriter writes translation messages.|

### \Symfony\Component\Validator

#### Classes

| Class | Description |
|-------|-------------|
| [`Constraint`](./docs/classes/Symfony/Component/Validator/Constraint.md) | Contains the properties of a constraint definition.|
| [`ConstraintValidator`](./docs/classes/Symfony/Component/Validator/ConstraintValidator.md) | Base class for constraint validators.|
| [`ConstraintValidatorFactory`](./docs/classes/Symfony/Component/Validator/ConstraintValidatorFactory.md) | Default implementation of the ConstraintValidatorFactoryInterface.|
| [`ConstraintViolation`](./docs/classes/Symfony/Component/Validator/ConstraintViolation.md) | Default implementation of {@ConstraintViolationInterface}.|
| [`ConstraintViolationList`](./docs/classes/Symfony/Component/Validator/ConstraintViolationList.md) | Default implementation of {@ConstraintViolationListInterface}.|
| [`DefaultTranslator`](./docs/classes/Symfony/Component/Validator/DefaultTranslator.md) | Simple translator implementation that simply replaces the parameters in<br />the message IDs.|
| [`ExecutionContext`](./docs/classes/Symfony/Component/Validator/ExecutionContext.md) | Default implementation of {@link ExecutionContextInterface}.|
| [`Validation`](./docs/classes/Symfony/Component/Validator/Validation.md) | Entry point for the Validator component.|
| [`ValidationVisitor`](./docs/classes/Symfony/Component/Validator/ValidationVisitor.md) | Default implementation of {@link ValidationVisitorInterface} and<br />{@link GlobalExecutionContextInterface}.|
| [`Validator`](./docs/classes/Symfony/Component/Validator/Validator.md) | Default implementation of {@link ValidatorInterface}.|
| [`ValidatorBuilder`](./docs/classes/Symfony/Component/Validator/ValidatorBuilder.md) | The default implementation of {@link ValidatorBuilderInterface}.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ClassBasedInterface`](./docs/classes/Symfony/Component/Validator/ClassBasedInterface.md) | An object backed by a PHP class.|
| [`ConstraintValidatorFactoryInterface`](./docs/classes/Symfony/Component/Validator/ConstraintValidatorFactoryInterface.md) | Specifies an object able to return the correct ConstraintValidatorInterface<br />instance given a Constraint object.|
| [`ConstraintValidatorInterface`](./docs/classes/Symfony/Component/Validator/ConstraintValidatorInterface.md) | |
| [`ConstraintViolationInterface`](./docs/classes/Symfony/Component/Validator/ConstraintViolationInterface.md) | A violation of a constraint that happened during validation.|
| [`ConstraintViolationListInterface`](./docs/classes/Symfony/Component/Validator/ConstraintViolationListInterface.md) | A list of constraint violations.|
| [`ExecutionContextInterface`](./docs/classes/Symfony/Component/Validator/ExecutionContextInterface.md) | Stores the validator&#039;s state during validation.|
| [`GlobalExecutionContextInterface`](./docs/classes/Symfony/Component/Validator/GlobalExecutionContextInterface.md) | Stores the node-independent state of a validation run.|
| [`GroupSequenceProviderInterface`](./docs/classes/Symfony/Component/Validator/GroupSequenceProviderInterface.md) | Defines the interface for a group sequence provider.|
| [`MetadataFactoryInterface`](./docs/classes/Symfony/Component/Validator/MetadataFactoryInterface.md) | Returns {@link MetadataInterface} instances for values.|
| [`MetadataInterface`](./docs/classes/Symfony/Component/Validator/MetadataInterface.md) | A container for validation metadata.|
| [`ObjectInitializerInterface`](./docs/classes/Symfony/Component/Validator/ObjectInitializerInterface.md) | Prepares an object for validation.|
| [`PropertyMetadataContainerInterface`](./docs/classes/Symfony/Component/Validator/PropertyMetadataContainerInterface.md) | A container for {@link PropertyMetadataInterface} instances.|
| [`PropertyMetadataInterface`](./docs/classes/Symfony/Component/Validator/PropertyMetadataInterface.md) | A container for validation metadata of a property.|
| [`ValidationVisitorInterface`](./docs/classes/Symfony/Component/Validator/ValidationVisitorInterface.md) | Validates values against constraints defined in {@link MetadataInterface}<br />instances.|
| [`ValidatorBuilderInterface`](./docs/classes/Symfony/Component/Validator/ValidatorBuilderInterface.md) | A configurable builder for ValidatorInterface objects.|
| [`ValidatorInterface`](./docs/classes/Symfony/Component/Validator/ValidatorInterface.md) | Validates values and graphs of objects and arrays.|

### \Symfony\Component\Validator\Constraints

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractComparison`](./docs/classes/Symfony/Component/Validator/Constraints/AbstractComparison.md) | Used for the comparison of values.|
| [`AbstractComparisonValidator`](./docs/classes/Symfony/Component/Validator/Constraints/AbstractComparisonValidator.md) | Provides a base class for the validation of property comparisons.|
| [`All`](./docs/classes/Symfony/Component/Validator/Constraints/All.md) | A constraint that is composed of other constraints.|
| [`AllValidator`](./docs/classes/Symfony/Component/Validator/Constraints/AllValidator.md) | Base class for constraint validators.|
| [`Bic`](./docs/classes/Symfony/Component/Validator/Constraints/Bic.md) | Contains the properties of a constraint definition.|
| [`BicValidator`](./docs/classes/Symfony/Component/Validator/Constraints/BicValidator.md) | Base class for constraint validators.|
| [`Blank`](./docs/classes/Symfony/Component/Validator/Constraints/Blank.md) | Contains the properties of a constraint definition.|
| [`BlankValidator`](./docs/classes/Symfony/Component/Validator/Constraints/BlankValidator.md) | Base class for constraint validators.|
| [`Callback`](./docs/classes/Symfony/Component/Validator/Constraints/Callback.md) | Contains the properties of a constraint definition.|
| [`CallbackValidator`](./docs/classes/Symfony/Component/Validator/Constraints/CallbackValidator.md) | Validator for Callback constraint.|
| [`CardScheme`](./docs/classes/Symfony/Component/Validator/Constraints/CardScheme.md) | Metadata for the CardSchemeValidator.|
| [`CardSchemeValidator`](./docs/classes/Symfony/Component/Validator/Constraints/CardSchemeValidator.md) | Validates that a card number belongs to a specified scheme.|
| [`Choice`](./docs/classes/Symfony/Component/Validator/Constraints/Choice.md) | Contains the properties of a constraint definition.|
| [`ChoiceValidator`](./docs/classes/Symfony/Component/Validator/Constraints/ChoiceValidator.md) | ChoiceValidator validates that the value is one of the expected values.|
| [`Collection`](./docs/classes/Symfony/Component/Validator/Constraints/Collection.md) | A constraint that is composed of other constraints.|
| [`CollectionValidator`](./docs/classes/Symfony/Component/Validator/Constraints/CollectionValidator.md) | Base class for constraint validators.|
| [`Composite`](./docs/classes/Symfony/Component/Validator/Constraints/Composite.md) | A constraint that is composed of other constraints.|
| [`Count`](./docs/classes/Symfony/Component/Validator/Constraints/Count.md) | Contains the properties of a constraint definition.|
| [`CountValidator`](./docs/classes/Symfony/Component/Validator/Constraints/CountValidator.md) | Base class for constraint validators.|
| [`Country`](./docs/classes/Symfony/Component/Validator/Constraints/Country.md) | Contains the properties of a constraint definition.|
| [`CountryValidator`](./docs/classes/Symfony/Component/Validator/Constraints/CountryValidator.md) | Validates whether a value is a valid country code.|
| [`Currency`](./docs/classes/Symfony/Component/Validator/Constraints/Currency.md) | Contains the properties of a constraint definition.|
| [`CurrencyValidator`](./docs/classes/Symfony/Component/Validator/Constraints/CurrencyValidator.md) | Validates whether a value is a valid currency.|
| [`Date`](./docs/classes/Symfony/Component/Validator/Constraints/Date.md) | Contains the properties of a constraint definition.|
| [`DateTime`](./docs/classes/Symfony/Component/Validator/Constraints/DateTime.md) | Contains the properties of a constraint definition.|
| [`DateTimeValidator`](./docs/classes/Symfony/Component/Validator/Constraints/DateTimeValidator.md) | Base class for constraint validators.|
| [`DateValidator`](./docs/classes/Symfony/Component/Validator/Constraints/DateValidator.md) | Base class for constraint validators.|
| [`Email`](./docs/classes/Symfony/Component/Validator/Constraints/Email.md) | Contains the properties of a constraint definition.|
| [`EmailValidator`](./docs/classes/Symfony/Component/Validator/Constraints/EmailValidator.md) | Base class for constraint validators.|
| [`EqualTo`](./docs/classes/Symfony/Component/Validator/Constraints/EqualTo.md) | Used for the comparison of values.|
| [`EqualToValidator`](./docs/classes/Symfony/Component/Validator/Constraints/EqualToValidator.md) | Validates values are equal (==).|
| [`Existence`](./docs/classes/Symfony/Component/Validator/Constraints/Existence.md) | A constraint that is composed of other constraints.|
| [`Expression`](./docs/classes/Symfony/Component/Validator/Constraints/Expression.md) | Contains the properties of a constraint definition.|
| [`ExpressionValidator`](./docs/classes/Symfony/Component/Validator/Constraints/ExpressionValidator.md) | Base class for constraint validators.|
| [`False`](./docs/classes/Symfony/Component/Validator/Constraints/False.md) | Contains the properties of a constraint definition.|
| [`FalseValidator`](./docs/classes/Symfony/Component/Validator/Constraints/FalseValidator.md) | Base class for constraint validators.|
| [`File`](./docs/classes/Symfony/Component/Validator/Constraints/File.md) | Contains the properties of a constraint definition.|
| [`FileValidator`](./docs/classes/Symfony/Component/Validator/Constraints/FileValidator.md) | Base class for constraint validators.|
| [`GreaterThan`](./docs/classes/Symfony/Component/Validator/Constraints/GreaterThan.md) | Used for the comparison of values.|
| [`GreaterThanOrEqual`](./docs/classes/Symfony/Component/Validator/Constraints/GreaterThanOrEqual.md) | Used for the comparison of values.|
| [`GreaterThanOrEqualValidator`](./docs/classes/Symfony/Component/Validator/Constraints/GreaterThanOrEqualValidator.md) | Validates values are greater than or equal to the previous (&gt;=).|
| [`GreaterThanValidator`](./docs/classes/Symfony/Component/Validator/Constraints/GreaterThanValidator.md) | Validates values are greater than the previous (&gt;).|
| [`GroupSequence`](./docs/classes/Symfony/Component/Validator/Constraints/GroupSequence.md) | A sequence of validation groups.|
| [`GroupSequenceProvider`](./docs/classes/Symfony/Component/Validator/Constraints/GroupSequenceProvider.md) | Annotation to define a group sequence provider.|
| [`IbanValidator`](./docs/classes/Symfony/Component/Validator/Constraints/IbanValidator.md) | Base class for constraint validators.|
| [`IdenticalTo`](./docs/classes/Symfony/Component/Validator/Constraints/IdenticalTo.md) | Used for the comparison of values.|
| [`IdenticalToValidator`](./docs/classes/Symfony/Component/Validator/Constraints/IdenticalToValidator.md) | Validates values are identical (===).|
| [`Image`](./docs/classes/Symfony/Component/Validator/Constraints/Image.md) | Contains the properties of a constraint definition.|
| [`ImageValidator`](./docs/classes/Symfony/Component/Validator/Constraints/ImageValidator.md) | Validates whether a value is a valid image file and is valid<br />against minWidth, maxWidth, minHeight and maxHeight constraints.|
| [`Ip`](./docs/classes/Symfony/Component/Validator/Constraints/Ip.md) | Validates that a value is a valid IP address.|
| [`IpValidator`](./docs/classes/Symfony/Component/Validator/Constraints/IpValidator.md) | Validates whether a value is a valid IP address.|
| [`IsFalse`](./docs/classes/Symfony/Component/Validator/Constraints/IsFalse.md) | Contains the properties of a constraint definition.|
| [`IsFalseValidator`](./docs/classes/Symfony/Component/Validator/Constraints/IsFalseValidator.md) | Base class for constraint validators.|
| [`IsNull`](./docs/classes/Symfony/Component/Validator/Constraints/IsNull.md) | Contains the properties of a constraint definition.|
| [`IsNullValidator`](./docs/classes/Symfony/Component/Validator/Constraints/IsNullValidator.md) | Base class for constraint validators.|
| [`IsTrue`](./docs/classes/Symfony/Component/Validator/Constraints/IsTrue.md) | Contains the properties of a constraint definition.|
| [`IsTrueValidator`](./docs/classes/Symfony/Component/Validator/Constraints/IsTrueValidator.md) | Base class for constraint validators.|
| [`Isbn`](./docs/classes/Symfony/Component/Validator/Constraints/Isbn.md) | Contains the properties of a constraint definition.|
| [`IsbnValidator`](./docs/classes/Symfony/Component/Validator/Constraints/IsbnValidator.md) | Validates whether the value is a valid ISBN-10 or ISBN-13.|
| [`Issn`](./docs/classes/Symfony/Component/Validator/Constraints/Issn.md) | Contains the properties of a constraint definition.|
| [`IssnValidator`](./docs/classes/Symfony/Component/Validator/Constraints/IssnValidator.md) | Validates whether the value is a valid ISSN.|
| [`Language`](./docs/classes/Symfony/Component/Validator/Constraints/Language.md) | Contains the properties of a constraint definition.|
| [`LanguageValidator`](./docs/classes/Symfony/Component/Validator/Constraints/LanguageValidator.md) | Validates whether a value is a valid language code.|
| [`Length`](./docs/classes/Symfony/Component/Validator/Constraints/Length.md) | Contains the properties of a constraint definition.|
| [`LengthValidator`](./docs/classes/Symfony/Component/Validator/Constraints/LengthValidator.md) | Base class for constraint validators.|
| [`LessThan`](./docs/classes/Symfony/Component/Validator/Constraints/LessThan.md) | Used for the comparison of values.|
| [`LessThanOrEqual`](./docs/classes/Symfony/Component/Validator/Constraints/LessThanOrEqual.md) | Used for the comparison of values.|
| [`LessThanOrEqualValidator`](./docs/classes/Symfony/Component/Validator/Constraints/LessThanOrEqualValidator.md) | Validates values are less than or equal to the previous (&lt;=).|
| [`LessThanValidator`](./docs/classes/Symfony/Component/Validator/Constraints/LessThanValidator.md) | Validates values are less than the previous (&lt;).|
| [`Locale`](./docs/classes/Symfony/Component/Validator/Constraints/Locale.md) | Contains the properties of a constraint definition.|
| [`LocaleValidator`](./docs/classes/Symfony/Component/Validator/Constraints/LocaleValidator.md) | Validates whether a value is a valid locale code.|
| [`Luhn`](./docs/classes/Symfony/Component/Validator/Constraints/Luhn.md) | Metadata for the LuhnValidator.|
| [`LuhnValidator`](./docs/classes/Symfony/Component/Validator/Constraints/LuhnValidator.md) | Validates a PAN using the LUHN Algorithm.|
| [`NotBlank`](./docs/classes/Symfony/Component/Validator/Constraints/NotBlank.md) | Contains the properties of a constraint definition.|
| [`NotBlankValidator`](./docs/classes/Symfony/Component/Validator/Constraints/NotBlankValidator.md) | Base class for constraint validators.|
| [`NotEqualTo`](./docs/classes/Symfony/Component/Validator/Constraints/NotEqualTo.md) | Used for the comparison of values.|
| [`NotEqualToValidator`](./docs/classes/Symfony/Component/Validator/Constraints/NotEqualToValidator.md) | Validates values are all unequal (!=).|
| [`NotIdenticalTo`](./docs/classes/Symfony/Component/Validator/Constraints/NotIdenticalTo.md) | Used for the comparison of values.|
| [`NotIdenticalToValidator`](./docs/classes/Symfony/Component/Validator/Constraints/NotIdenticalToValidator.md) | Validates values aren&#039;t identical (!==).|
| [`NotNull`](./docs/classes/Symfony/Component/Validator/Constraints/NotNull.md) | Contains the properties of a constraint definition.|
| [`NotNullValidator`](./docs/classes/Symfony/Component/Validator/Constraints/NotNullValidator.md) | Base class for constraint validators.|
| [`Null`](./docs/classes/Symfony/Component/Validator/Constraints/Null.md) | Contains the properties of a constraint definition.|
| [`NullValidator`](./docs/classes/Symfony/Component/Validator/Constraints/NullValidator.md) | Base class for constraint validators.|
| [`Optional`](./docs/classes/Symfony/Component/Validator/Constraints/Optional.md) | A constraint that is composed of other constraints.|
| [`Range`](./docs/classes/Symfony/Component/Validator/Constraints/Range.md) | Contains the properties of a constraint definition.|
| [`RangeValidator`](./docs/classes/Symfony/Component/Validator/Constraints/RangeValidator.md) | Base class for constraint validators.|
| [`Regex`](./docs/classes/Symfony/Component/Validator/Constraints/Regex.md) | Contains the properties of a constraint definition.|
| [`RegexValidator`](./docs/classes/Symfony/Component/Validator/Constraints/RegexValidator.md) | Validates whether a value match or not given regexp pattern.|
| [`Required`](./docs/classes/Symfony/Component/Validator/Constraints/Required.md) | A constraint that is composed of other constraints.|
| [`Time`](./docs/classes/Symfony/Component/Validator/Constraints/Time.md) | Contains the properties of a constraint definition.|
| [`TimeValidator`](./docs/classes/Symfony/Component/Validator/Constraints/TimeValidator.md) | Base class for constraint validators.|
| [`Traverse`](./docs/classes/Symfony/Component/Validator/Constraints/Traverse.md) | Contains the properties of a constraint definition.|
| [`True`](./docs/classes/Symfony/Component/Validator/Constraints/True.md) | Contains the properties of a constraint definition.|
| [`TrueValidator`](./docs/classes/Symfony/Component/Validator/Constraints/TrueValidator.md) | Base class for constraint validators.|
| [`Type`](./docs/classes/Symfony/Component/Validator/Constraints/Type.md) | Contains the properties of a constraint definition.|
| [`TypeValidator`](./docs/classes/Symfony/Component/Validator/Constraints/TypeValidator.md) | Base class for constraint validators.|
| [`Url`](./docs/classes/Symfony/Component/Validator/Constraints/Url.md) | Contains the properties of a constraint definition.|
| [`UrlValidator`](./docs/classes/Symfony/Component/Validator/Constraints/UrlValidator.md) | Base class for constraint validators.|
| [`Uuid`](./docs/classes/Symfony/Component/Validator/Constraints/Uuid.md) | Contains the properties of a constraint definition.|
| [`UuidValidator`](./docs/classes/Symfony/Component/Validator/Constraints/UuidValidator.md) | Validates whether the value is a valid UUID (also known as GUID).|
| [`Valid`](./docs/classes/Symfony/Component/Validator/Constraints/Valid.md) | Contains the properties of a constraint definition.|

### \Symfony\Component\Validator\Constraints\Collection

#### Classes

| Class | Description |
|-------|-------------|
| [`Optional`](./docs/classes/Symfony/Component/Validator/Constraints/Collection/Optional.md) | A constraint that is composed of other constraints.|
| [`Required`](./docs/classes/Symfony/Component/Validator/Constraints/Collection/Required.md) | A constraint that is composed of other constraints.|

### \Symfony\Component\Validator\Context

#### Classes

| Class | Description |
|-------|-------------|
| [`LegacyExecutionContext`](./docs/classes/Symfony/Component/Validator/Context/LegacyExecutionContext.md) | An execution context that is compatible with the legacy API (&lt; 2.5).|
| [`LegacyExecutionContextFactory`](./docs/classes/Symfony/Component/Validator/Context/LegacyExecutionContextFactory.md) | Creates new {@link LegacyExecutionContext} instances.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExecutionContextFactoryInterface`](./docs/classes/Symfony/Component/Validator/Context/ExecutionContextFactoryInterface.md) | Creates instances of {@link ExecutionContextInterface}.|
| [`ExecutionContextInterface`](./docs/classes/Symfony/Component/Validator/Context/ExecutionContextInterface.md) | The context of a validation run.|

### \Symfony\Component\Validator\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](./docs/classes/Symfony/Component/Validator/Exception/BadMethodCallException.md) | Base BadMethodCallException for the Validator component.|
| [`ConstraintDefinitionException`](./docs/classes/Symfony/Component/Validator/Exception/ConstraintDefinitionException.md) | Base RuntimeException for the Validator component.|
| [`GroupDefinitionException`](./docs/classes/Symfony/Component/Validator/Exception/GroupDefinitionException.md) | Base RuntimeException for the Validator component.|
| [`InvalidArgumentException`](./docs/classes/Symfony/Component/Validator/Exception/InvalidArgumentException.md) | Base InvalidArgumentException for the Validator component.|
| [`InvalidOptionsException`](./docs/classes/Symfony/Component/Validator/Exception/InvalidOptionsException.md) | Base RuntimeException for the Validator component.|
| [`MappingException`](./docs/classes/Symfony/Component/Validator/Exception/MappingException.md) | Base RuntimeException for the Validator component.|
| [`MissingOptionsException`](./docs/classes/Symfony/Component/Validator/Exception/MissingOptionsException.md) | Base RuntimeException for the Validator component.|
| [`NoSuchMetadataException`](./docs/classes/Symfony/Component/Validator/Exception/NoSuchMetadataException.md) | Base RuntimeException for the Validator component.|
| [`OutOfBoundsException`](./docs/classes/Symfony/Component/Validator/Exception/OutOfBoundsException.md) | Base OutOfBoundsException for the Validator component.|
| [`RuntimeException`](./docs/classes/Symfony/Component/Validator/Exception/RuntimeException.md) | Base RuntimeException for the Validator component.|
| [`UnexpectedTypeException`](./docs/classes/Symfony/Component/Validator/Exception/UnexpectedTypeException.md) | Base RuntimeException for the Validator component.|
| [`UnsupportedMetadataException`](./docs/classes/Symfony/Component/Validator/Exception/UnsupportedMetadataException.md) | Base InvalidArgumentException for the Validator component.|
| [`ValidatorException`](./docs/classes/Symfony/Component/Validator/Exception/ValidatorException.md) | Base RuntimeException for the Validator component.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Symfony/Component/Validator/Exception/ExceptionInterface.md) | Base ExceptionInterface for the Validator component.|

### \Symfony\Component\Validator\Mapping

#### Classes

| Class | Description |
|-------|-------------|
| [`BlackholeMetadataFactory`](./docs/classes/Symfony/Component/Validator/Mapping/BlackholeMetadataFactory.md) | Alias of {@link Factory\BlackHoleMetadataFactory}.|
| [`CascadingStrategy`](./docs/classes/Symfony/Component/Validator/Mapping/CascadingStrategy.md) | Specifies whether an object should be cascaded.|
| [`ClassMetadata`](./docs/classes/Symfony/Component/Validator/Mapping/ClassMetadata.md) | Default implementation of {@link ClassMetadataInterface}.|
| [`ClassMetadataFactory`](./docs/classes/Symfony/Component/Validator/Mapping/ClassMetadataFactory.md) | Alias of {@link LazyLoadingMetadataFactory}.|
| [`ElementMetadata`](./docs/classes/Symfony/Component/Validator/Mapping/ElementMetadata.md) | Contains the metadata of a structural element.|
| [`GenericMetadata`](./docs/classes/Symfony/Component/Validator/Mapping/GenericMetadata.md) | A generic container of {@link Constraint} objects.|
| [`GetterMetadata`](./docs/classes/Symfony/Component/Validator/Mapping/GetterMetadata.md) | Stores all metadata needed for validating a class property via its getter<br />method.|
| [`MemberMetadata`](./docs/classes/Symfony/Component/Validator/Mapping/MemberMetadata.md) | Stores all metadata needed for validating a class property.|
| [`PropertyMetadata`](./docs/classes/Symfony/Component/Validator/Mapping/PropertyMetadata.md) | Stores all metadata needed for validating a class property.|
| [`TraversalStrategy`](./docs/classes/Symfony/Component/Validator/Mapping/TraversalStrategy.md) | Specifies whether and how a traversable object should be traversed.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ClassMetadataInterface`](./docs/classes/Symfony/Component/Validator/Mapping/ClassMetadataInterface.md) | Stores all metadata needed for validating objects of specific class.|
| [`MetadataInterface`](./docs/classes/Symfony/Component/Validator/Mapping/MetadataInterface.md) | A container for validation metadata.|
| [`PropertyMetadataInterface`](./docs/classes/Symfony/Component/Validator/Mapping/PropertyMetadataInterface.md) | Stores all metadata needed for validating the value of a class property.|

### \Symfony\Component\Validator\Mapping\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`ApcCache`](./docs/classes/Symfony/Component/Validator/Mapping/Cache/ApcCache.md) | |
| [`DoctrineCache`](./docs/classes/Symfony/Component/Validator/Mapping/Cache/DoctrineCache.md) | Adapts a Doctrine cache to a CacheInterface.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CacheInterface`](./docs/classes/Symfony/Component/Validator/Mapping/Cache/CacheInterface.md) | Persists ClassMetadata instances in a cache.|

### \Symfony\Component\Validator\Mapping\Factory

#### Classes

| Class | Description |
|-------|-------------|
| [`BlackHoleMetadataFactory`](./docs/classes/Symfony/Component/Validator/Mapping/Factory/BlackHoleMetadataFactory.md) | Metadata factory that does not store metadata.|
| [`LazyLoadingMetadataFactory`](./docs/classes/Symfony/Component/Validator/Mapping/Factory/LazyLoadingMetadataFactory.md) | Creates new {@link ClassMetadataInterface} instances.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`MetadataFactoryInterface`](./docs/classes/Symfony/Component/Validator/Mapping/Factory/MetadataFactoryInterface.md) | Returns {@link \Symfony\Component\Validator\Mapping\MetadataInterface} instances for values.|

### \Symfony\Component\Validator\Mapping\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractLoader`](./docs/classes/Symfony/Component/Validator/Mapping/Loader/AbstractLoader.md) | Base loader for validation metadata.|
| [`AnnotationLoader`](./docs/classes/Symfony/Component/Validator/Mapping/Loader/AnnotationLoader.md) | Loads validation metadata using a Doctrine annotation {@link Reader}.|
| [`FileLoader`](./docs/classes/Symfony/Component/Validator/Mapping/Loader/FileLoader.md) | Base loader for loading validation metadata from a file.|
| [`FilesLoader`](./docs/classes/Symfony/Component/Validator/Mapping/Loader/FilesLoader.md) | Base loader for loading validation metadata from a list of files.|
| [`LoaderChain`](./docs/classes/Symfony/Component/Validator/Mapping/Loader/LoaderChain.md) | Loads validation metadata from multiple {@link LoaderInterface} instances.|
| [`StaticMethodLoader`](./docs/classes/Symfony/Component/Validator/Mapping/Loader/StaticMethodLoader.md) | Loads validation metadata by calling a static method on the loaded class.|
| [`XmlFileLoader`](./docs/classes/Symfony/Component/Validator/Mapping/Loader/XmlFileLoader.md) | Loads validation metadata from an XML file.|
| [`XmlFilesLoader`](./docs/classes/Symfony/Component/Validator/Mapping/Loader/XmlFilesLoader.md) | Loads validation metadata from a list of XML files.|
| [`YamlFileLoader`](./docs/classes/Symfony/Component/Validator/Mapping/Loader/YamlFileLoader.md) | Loads validation metadata from a YAML file.|
| [`YamlFilesLoader`](./docs/classes/Symfony/Component/Validator/Mapping/Loader/YamlFilesLoader.md) | Loads validation metadata from a list of YAML files.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`LoaderInterface`](./docs/classes/Symfony/Component/Validator/Mapping/Loader/LoaderInterface.md) | Loads validation metadata into {@link ClassMetadata} instances.|

### \Symfony\Component\Validator\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ConstraintTest`](./docs/classes/Symfony/Component/Validator/Tests/ConstraintTest.md) | |
| [`ConstraintViolationListTest`](./docs/classes/Symfony/Component/Validator/Tests/ConstraintViolationListTest.md) | |
| [`ConstraintViolationTest`](./docs/classes/Symfony/Component/Validator/Tests/ConstraintViolationTest.md) | |
| [`ExecutionContextTest_TestClass`](./docs/classes/Symfony/Component/Validator/Tests/ExecutionContextTest_TestClass.md) | |
| [`LegacyExecutionContextTest`](./docs/classes/Symfony/Component/Validator/Tests/LegacyExecutionContextTest.md) | |
| [`LegacyValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/LegacyValidatorTest.md) | Verifies that a validator satisfies the API of Symfony &lt; 2.5.|
| [`ValidatorBuilderTest`](./docs/classes/Symfony/Component/Validator/Tests/ValidatorBuilderTest.md) | |

### \Symfony\Component\Validator\Tests\Constraints

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractComparisonValidatorTestCase`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/AbstractComparisonValidatorTestCase.md) | |
| [`AbstractConstraintValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/AbstractConstraintValidatorTest.md) | |
| [`AllTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/AllTest.md) | |
| [`AllValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/AllValidatorTest.md) | |
| [`BicValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/BicValidatorTest.md) | |
| [`BlankValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/BlankValidatorTest.md) | |
| [`CallbackValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CallbackValidatorTest.md) | |
| [`CallbackValidatorTest_Class`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CallbackValidatorTest_Class.md) | |
| [`CallbackValidatorTest_Object`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CallbackValidatorTest_Object.md) | |
| [`CardSchemeValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CardSchemeValidatorTest.md) | |
| [`ChoiceValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/ChoiceValidatorTest.md) | |
| [`CollectionTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CollectionTest.md) | |
| [`CollectionValidatorArrayObjectTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CollectionValidatorArrayObjectTest.md) | |
| [`CollectionValidatorArrayTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CollectionValidatorArrayTest.md) | |
| [`CollectionValidatorCustomArrayObjectTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CollectionValidatorCustomArrayObjectTest.md) | |
| [`CollectionValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CollectionValidatorTest.md) | |
| [`ComparisonTest_Class`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/ComparisonTest_Class.md) | |
| [`CompositeTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CompositeTest.md) | |
| [`ConcreteComposite`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/ConcreteComposite.md) | A constraint that is composed of other constraints.|
| [`CountValidatorArrayTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CountValidatorArrayTest.md) | |
| [`CountValidatorCountableTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CountValidatorCountableTest.md) | |
| [`CountValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CountValidatorTest.md) | |
| [`CountryValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CountryValidatorTest.md) | |
| [`CurrencyValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/CurrencyValidatorTest.md) | |
| [`DateTimeValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/DateTimeValidatorTest.md) | |
| [`DateValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/DateValidatorTest.md) | |
| [`EmailProvider`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/EmailProvider.md) | |
| [`EmailValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/EmailValidatorTest.md) | |
| [`EqualToValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/EqualToValidatorTest.md) | |
| [`ExpressionValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/ExpressionValidatorTest.md) | |
| [`FileTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/FileTest.md) | |
| [`FileValidatorObjectTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/FileValidatorObjectTest.md) | |
| [`FileValidatorPathTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/FileValidatorPathTest.md) | |
| [`FileValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/FileValidatorTest.md) | |
| [`GreaterThanOrEqualValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/GreaterThanOrEqualValidatorTest.md) | |
| [`GreaterThanValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/GreaterThanValidatorTest.md) | |
| [`GroupSequenceTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/GroupSequenceTest.md) | |
| [`IbanValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/IbanValidatorTest.md) | |
| [`IdenticalToValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/IdenticalToValidatorTest.md) | |
| [`ImageValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/ImageValidatorTest.md) | |
| [`IpValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/IpValidatorTest.md) | |
| [`IsFalseValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/IsFalseValidatorTest.md) | |
| [`IsNullValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/IsNullValidatorTest.md) | |
| [`IsTrueValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/IsTrueValidatorTest.md) | |
| [`IsbnValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/IsbnValidatorTest.md) | |
| [`IssnValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/IssnValidatorTest.md) | |
| [`LanguageValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/LanguageValidatorTest.md) | |
| [`LengthValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/LengthValidatorTest.md) | |
| [`LessThanOrEqualValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/LessThanOrEqualValidatorTest.md) | |
| [`LessThanValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/LessThanValidatorTest.md) | |
| [`LocaleValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/LocaleValidatorTest.md) | |
| [`LuhnValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/LuhnValidatorTest.md) | |
| [`NotBlankValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/NotBlankValidatorTest.md) | |
| [`NotEqualToValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/NotEqualToValidatorTest.md) | |
| [`NotIdenticalToValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/NotIdenticalToValidatorTest.md) | |
| [`NotNullValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/NotNullValidatorTest.md) | |
| [`RangeValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/RangeValidatorTest.md) | |
| [`RegexTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/RegexTest.md) | |
| [`RegexValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/RegexValidatorTest.md) | |
| [`TimeValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/TimeValidatorTest.md) | |
| [`TypeValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/TypeValidatorTest.md) | |
| [`UrlValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/UrlValidatorTest.md) | |
| [`UuidValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/UuidValidatorTest.md) | |
| [`ValidTest`](./docs/classes/Symfony/Component/Validator/Tests/Constraints/ValidTest.md) | |

### \Symfony\Component\Validator\Tests\Fixtures

#### Classes

| Class | Description |
|-------|-------------|
| [`CallbackClass`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/CallbackClass.md) | |
| [`ClassConstraint`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/ClassConstraint.md) | Contains the properties of a constraint definition.|
| [`ConstraintA`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/ConstraintA.md) | Contains the properties of a constraint definition.|
| [`ConstraintAValidator`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/ConstraintAValidator.md) | Base class for constraint validators.|
| [`ConstraintB`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/ConstraintB.md) | Contains the properties of a constraint definition.|
| [`ConstraintC`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/ConstraintC.md) | Contains the properties of a constraint definition.|
| [`ConstraintWithValue`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/ConstraintWithValue.md) | Contains the properties of a constraint definition.|
| [`ConstraintWithValueAsDefault`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/ConstraintWithValueAsDefault.md) | Contains the properties of a constraint definition.|
| [`Countable`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/Countable.md) | |
| [`CustomArrayObject`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/CustomArrayObject.md) | This class is a hand written simplified version of PHP native `ArrayObject`<br />class, to show that it behaves differently than the PHP native implementation.|
| [`Entity`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/Entity.md) | |
| [`EntityParent`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/EntityParent.md) | |
| [`EntityStaticCar`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/EntityStaticCar.md) | |
| [`EntityStaticCarTurbo`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/EntityStaticCarTurbo.md) | |
| [`EntityStaticVehicle`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/EntityStaticVehicle.md) | |
| [`FailingConstraint`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/FailingConstraint.md) | Contains the properties of a constraint definition.|
| [`FailingConstraintValidator`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/FailingConstraintValidator.md) | Base class for constraint validators.|
| [`FakeClassMetadata`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/FakeClassMetadata.md) | Default implementation of {@link ClassMetadataInterface}.|
| [`FakeMetadataFactory`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/FakeMetadataFactory.md) | |
| [`FilesLoader`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/FilesLoader.md) | Base loader for loading validation metadata from a list of files.|
| [`GroupSequenceProviderChildEntity`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/GroupSequenceProviderChildEntity.md) | |
| [`GroupSequenceProviderEntity`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/GroupSequenceProviderEntity.md) | |
| [`InvalidConstraint`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/InvalidConstraint.md) | Contains the properties of a constraint definition.|
| [`InvalidConstraintValidator`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/InvalidConstraintValidator.md) | |
| [`PropertyConstraint`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/PropertyConstraint.md) | Contains the properties of a constraint definition.|
| [`Reference`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/Reference.md) | |
| [`StubGlobalExecutionContext`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/StubGlobalExecutionContext.md) | |
| [`ToString`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/ToString.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`EntityInterfaceA`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/EntityInterfaceA.md) | |
| [`EntityInterfaceB`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/EntityInterfaceB.md) | |
| [`EntityParentInterface`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/EntityParentInterface.md) | |
| [`LegacyClassMetadata`](./docs/classes/Symfony/Component/Validator/Tests/Fixtures/LegacyClassMetadata.md) | A container for validation metadata.|

### \Symfony\Component\Validator\Tests\Mapping

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassMetadataTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/ClassMetadataTest.md) | |
| [`GetterMetadataTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/GetterMetadataTest.md) | |
| [`LegacyElementMetadataTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/LegacyElementMetadataTest.md) | |
| [`MemberMetadataTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/MemberMetadataTest.md) | |
| [`PropertyMetadataTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/PropertyMetadataTest.md) | |
| [`TestElementMetadata`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/TestElementMetadata.md) | Contains the metadata of a structural element.|
| [`TestMemberMetadata`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/TestMemberMetadata.md) | Stores all metadata needed for validating a class property.|

### \Symfony\Component\Validator\Tests\Mapping\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`DoctrineCacheTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Cache/DoctrineCacheTest.md) | |
| [`LegacyApcCacheTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Cache/LegacyApcCacheTest.md) | |

### \Symfony\Component\Validator\Tests\Mapping\Factory

#### Classes

| Class | Description |
|-------|-------------|
| [`BlackHoleMetadataFactoryTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Factory/BlackHoleMetadataFactoryTest.md) | |
| [`LazyLoadingMetadataFactoryTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Factory/LazyLoadingMetadataFactoryTest.md) | |
| [`TestLoader`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Factory/TestLoader.md) | |

### \Symfony\Component\Validator\Tests\Mapping\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractStaticLoader`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Loader/AbstractStaticLoader.md) | |
| [`AbstractStaticMethodLoader`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Loader/AbstractStaticMethodLoader.md) | |
| [`AnnotationLoaderTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Loader/AnnotationLoaderTest.md) | |
| [`BaseStaticLoaderDocument`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Loader/BaseStaticLoaderDocument.md) | |
| [`FilesLoaderTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Loader/FilesLoaderTest.md) | |
| [`LoaderChainTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Loader/LoaderChainTest.md) | |
| [`StaticLoaderDocument`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Loader/StaticLoaderDocument.md) | |
| [`StaticLoaderEntity`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Loader/StaticLoaderEntity.md) | |
| [`StaticMethodLoaderTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Loader/StaticMethodLoaderTest.md) | |
| [`XmlFileLoaderTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Loader/XmlFileLoaderTest.md) | |
| [`YamlFileLoaderTest`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Loader/YamlFileLoaderTest.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`StaticLoaderInterface`](./docs/classes/Symfony/Component/Validator/Tests/Mapping/Loader/StaticLoaderInterface.md) | |

### \Symfony\Component\Validator\Tests\Resources

#### Classes

| Class | Description |
|-------|-------------|
| [`TranslationFilesTest`](./docs/classes/Symfony/Component/Validator/Tests/Resources/TranslationFilesTest.md) | |

### \Symfony\Component\Validator\Tests\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`PropertyPathTest`](./docs/classes/Symfony/Component/Validator/Tests/Util/PropertyPathTest.md) | |

### \Symfony\Component\Validator\Tests\Validator

#### Classes

| Class | Description |
|-------|-------------|
| [`Abstract2Dot5ApiTest`](./docs/classes/Symfony/Component/Validator/Tests/Validator/Abstract2Dot5ApiTest.md) | Verifies that a validator satisfies the API of Symfony 2.5+.|
| [`AbstractLegacyApiTest`](./docs/classes/Symfony/Component/Validator/Tests/Validator/AbstractLegacyApiTest.md) | Verifies that a validator satisfies the API of Symfony &lt; 2.5.|
| [`AbstractValidatorTest`](./docs/classes/Symfony/Component/Validator/Tests/Validator/AbstractValidatorTest.md) | |
| [`LegacyValidator2Dot5ApiTest`](./docs/classes/Symfony/Component/Validator/Tests/Validator/LegacyValidator2Dot5ApiTest.md) | Verifies that a validator satisfies the API of Symfony 2.5+.|
| [`LegacyValidatorLegacyApiTest`](./docs/classes/Symfony/Component/Validator/Tests/Validator/LegacyValidatorLegacyApiTest.md) | Verifies that a validator satisfies the API of Symfony &lt; 2.5.|
| [`RecursiveValidator2Dot5ApiTest`](./docs/classes/Symfony/Component/Validator/Tests/Validator/RecursiveValidator2Dot5ApiTest.md) | Verifies that a validator satisfies the API of Symfony 2.5+.|

### \Symfony\Component\Validator\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`PropertyPath`](./docs/classes/Symfony/Component/Validator/Util/PropertyPath.md) | Contains utility methods for dealing with property paths.|

### \Symfony\Component\Validator\Validator

#### Classes

| Class | Description |
|-------|-------------|
| [`LegacyValidator`](./docs/classes/Symfony/Component/Validator/Validator/LegacyValidator.md) | A validator that supports both the API of Symfony &lt; 2.5 and Symfony 2.5+.|
| [`RecursiveContextualValidator`](./docs/classes/Symfony/Component/Validator/Validator/RecursiveContextualValidator.md) | Recursive implementation of {@link ContextualValidatorInterface}.|
| [`RecursiveValidator`](./docs/classes/Symfony/Component/Validator/Validator/RecursiveValidator.md) | Recursive implementation of {@link ValidatorInterface}.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ContextualValidatorInterface`](./docs/classes/Symfony/Component/Validator/Validator/ContextualValidatorInterface.md) | A validator in a specific execution context.|
| [`ValidatorInterface`](./docs/classes/Symfony/Component/Validator/Validator/ValidatorInterface.md) | Validates PHP values against constraints.|

### \Symfony\Component\Validator\Violation

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ConstraintViolationBuilderInterface`](./docs/classes/Symfony/Component/Validator/Violation/ConstraintViolationBuilderInterface.md) | Builds {@link \Symfony\Component\Validator\ConstraintViolationInterface}<br />objects.|

### \Twig

#### Classes

| Class | Description |
|-------|-------------|
| [`Compiler`](./docs/classes/Twig/Compiler.md) | Compiles a node to PHP code.|
| [`Environment`](./docs/classes/Twig/Environment.md) | Stores the Twig configuration and renders templates.|
| [`FileExtensionEscapingStrategy`](./docs/classes/Twig/FileExtensionEscapingStrategy.md) | Default autoescaping strategy based on file names.|
| [`Lexer`](./docs/classes/Twig/Lexer.md) | Lexes a template string.|
| [`Markup`](./docs/classes/Twig/Markup.md) | Marks a content as safe.|
| [`NodeTraverser`](./docs/classes/Twig/NodeTraverser.md) | A node traverser.|
| [`Parser`](./docs/classes/Twig/Parser.md) | Default parser implementation.|
| [`Source`](./docs/classes/Twig/Source.md) | Holds information about a non-compiled Twig template.|
| [`TemplateWrapper`](./docs/classes/Twig/TemplateWrapper.md) | Exposes a template to userland.|
| [`Token`](./docs/classes/Twig/Token.md) | Represents a Token.|
| [`TokenStream`](./docs/classes/Twig/TokenStream.md) | Represents a token stream.|
| [`TwigFilter`](./docs/classes/Twig/TwigFilter.md) | Represents a template filter.|
| [`TwigFunction`](./docs/classes/Twig/TwigFunction.md) | Represents a template function.|
| [`TwigTest`](./docs/classes/Twig/TwigTest.md) | Represents a template test.|

### \Twig\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`FilesystemCache`](./docs/classes/Twig/Cache/FilesystemCache.md) | Implements a cache on the filesystem.|
| [`NullCache`](./docs/classes/Twig/Cache/NullCache.md) | Implements a no-cache strategy.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CacheInterface`](./docs/classes/Twig/Cache/CacheInterface.md) | Interface implemented by cache classes.|

### \Twig\Error

#### Classes

| Class | Description |
|-------|-------------|
| [`Error`](./docs/classes/Twig/Error/Error.md) | Twig base exception.|
| [`LoaderError`](./docs/classes/Twig/Error/LoaderError.md) | Exception thrown when an error occurs during template loading.|
| [`RuntimeError`](./docs/classes/Twig/Error/RuntimeError.md) | Exception thrown when an error occurs at runtime.|
| [`SyntaxError`](./docs/classes/Twig/Error/SyntaxError.md) | \Exception thrown when a syntax error occurs during lexing or parsing of a template.|

### \Twig\Extension

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractExtension`](./docs/classes/Twig/Extension/AbstractExtension.md) | |
| [`OptimizerExtension`](./docs/classes/Twig/Extension/OptimizerExtension.md) | |
| [`ProfilerExtension`](./docs/classes/Twig/Extension/ProfilerExtension.md) | |
| [`SandboxExtension`](./docs/classes/Twig/Extension/SandboxExtension.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtensionInterface`](./docs/classes/Twig/Extension/ExtensionInterface.md) | Interface implemented by extension classes.|
| [`GlobalsInterface`](./docs/classes/Twig/Extension/GlobalsInterface.md) | Enables usage of the deprecated Twig\Extension\AbstractExtension::getGlobals() method.|
| [`InitRuntimeInterface`](./docs/classes/Twig/Extension/InitRuntimeInterface.md) | Enables usage of the deprecated Twig\Extension\AbstractExtension::initRuntime() method.|
| [`RuntimeExtensionInterface`](./docs/classes/Twig/Extension/RuntimeExtensionInterface.md) | |

### \Twig\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayLoader`](./docs/classes/Twig/Loader/ArrayLoader.md) | Loads a template from an array.|
| [`ChainLoader`](./docs/classes/Twig/Loader/ChainLoader.md) | Loads templates from other loaders.|
| [`FilesystemLoader`](./docs/classes/Twig/Loader/FilesystemLoader.md) | Loads template from the filesystem.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExistsLoaderInterface`](./docs/classes/Twig/Loader/ExistsLoaderInterface.md) | Adds an exists() method for loaders.|
| [`LoaderInterface`](./docs/classes/Twig/Loader/LoaderInterface.md) | Interface all loaders must implement.|
| [`SourceContextLoaderInterface`](./docs/classes/Twig/Loader/SourceContextLoaderInterface.md) | Adds a getSourceContext() method for loaders.|

### \Twig\Node

#### Classes

| Class | Description |
|-------|-------------|
| [`AutoEscapeNode`](./docs/classes/Twig/Node/AutoEscapeNode.md) | Represents an autoescape node.|
| [`BlockNode`](./docs/classes/Twig/Node/BlockNode.md) | Represents a block node.|
| [`BlockReferenceNode`](./docs/classes/Twig/Node/BlockReferenceNode.md) | Represents a block call node.|
| [`BodyNode`](./docs/classes/Twig/Node/BodyNode.md) | Represents a body node.|
| [`CheckSecurityCallNode`](./docs/classes/Twig/Node/CheckSecurityCallNode.md) | Represents a node in the AST.|
| [`CheckSecurityNode`](./docs/classes/Twig/Node/CheckSecurityNode.md) | Represents a node in the AST.|
| [`CheckToStringNode`](./docs/classes/Twig/Node/CheckToStringNode.md) | Checks if casting an expression to __toString() is allowed by the sandbox.|
| [`DeprecatedNode`](./docs/classes/Twig/Node/DeprecatedNode.md) | Represents a deprecated node.|
| [`DoNode`](./docs/classes/Twig/Node/DoNode.md) | Represents a do node.|
| [`EmbedNode`](./docs/classes/Twig/Node/EmbedNode.md) | Represents an embed node.|
| [`FlushNode`](./docs/classes/Twig/Node/FlushNode.md) | Represents a flush node.|
| [`ForLoopNode`](./docs/classes/Twig/Node/ForLoopNode.md) | Internal node used by the for node.|
| [`ForNode`](./docs/classes/Twig/Node/ForNode.md) | Represents a for node.|
| [`IfNode`](./docs/classes/Twig/Node/IfNode.md) | Represents an if node.|
| [`ImportNode`](./docs/classes/Twig/Node/ImportNode.md) | Represents an import node.|
| [`IncludeNode`](./docs/classes/Twig/Node/IncludeNode.md) | Represents an include node.|
| [`MacroNode`](./docs/classes/Twig/Node/MacroNode.md) | Represents a macro node.|
| [`ModuleNode`](./docs/classes/Twig/Node/ModuleNode.md) | Represents a module node.|
| [`Node`](./docs/classes/Twig/Node/Node.md) | Represents a node in the AST.|
| [`PrintNode`](./docs/classes/Twig/Node/PrintNode.md) | Represents a node that outputs an expression.|
| [`SandboxNode`](./docs/classes/Twig/Node/SandboxNode.md) | Represents a sandbox node.|
| [`SandboxedPrintNode`](./docs/classes/Twig/Node/SandboxedPrintNode.md) | Adds a check for the __toString() method when the variable is an object and the sandbox is activated.|
| [`SetNode`](./docs/classes/Twig/Node/SetNode.md) | Represents a set node.|
| [`SpacelessNode`](./docs/classes/Twig/Node/SpacelessNode.md) | Represents a spaceless node.|
| [`TextNode`](./docs/classes/Twig/Node/TextNode.md) | Represents a text node.|
| [`WithNode`](./docs/classes/Twig/Node/WithNode.md) | Represents a nested &quot;with&quot; scope.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`NodeCaptureInterface`](./docs/classes/Twig/Node/NodeCaptureInterface.md) | Represents a node that captures any nested displayable nodes.|
| [`NodeOutputInterface`](./docs/classes/Twig/Node/NodeOutputInterface.md) | Represents a displayable node in the AST.|

### \Twig\NodeVisitor

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractNodeVisitor`](./docs/classes/Twig/NodeVisitor/AbstractNodeVisitor.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`EscaperNodeVisitor`](./docs/classes/Twig/NodeVisitor/EscaperNodeVisitor.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`OptimizerNodeVisitor`](./docs/classes/Twig/NodeVisitor/OptimizerNodeVisitor.md) | Tries to optimize the AST.|
| [`SafeAnalysisNodeVisitor`](./docs/classes/Twig/NodeVisitor/SafeAnalysisNodeVisitor.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|
| [`SandboxNodeVisitor`](./docs/classes/Twig/NodeVisitor/SandboxNodeVisitor.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`NodeVisitorInterface`](./docs/classes/Twig/NodeVisitor/NodeVisitorInterface.md) | Interface for node visitor classes.|

### \Twig\Node\Expression

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractExpression`](./docs/classes/Twig/Node/Expression/AbstractExpression.md) | Abstract class for all nodes that represents an expression.|
| [`ArrayExpression`](./docs/classes/Twig/Node/Expression/ArrayExpression.md) | Abstract class for all nodes that represents an expression.|
| [`ArrowFunctionExpression`](./docs/classes/Twig/Node/Expression/ArrowFunctionExpression.md) | Represents an arrow function.|
| [`AssignNameExpression`](./docs/classes/Twig/Node/Expression/AssignNameExpression.md) | Abstract class for all nodes that represents an expression.|
| [`BlockReferenceExpression`](./docs/classes/Twig/Node/Expression/BlockReferenceExpression.md) | Represents a block call node.|
| [`CallExpression`](./docs/classes/Twig/Node/Expression/CallExpression.md) | Abstract class for all nodes that represents an expression.|
| [`ConditionalExpression`](./docs/classes/Twig/Node/Expression/ConditionalExpression.md) | Abstract class for all nodes that represents an expression.|
| [`ConstantExpression`](./docs/classes/Twig/Node/Expression/ConstantExpression.md) | Abstract class for all nodes that represents an expression.|
| [`FilterExpression`](./docs/classes/Twig/Node/Expression/FilterExpression.md) | Abstract class for all nodes that represents an expression.|
| [`FunctionExpression`](./docs/classes/Twig/Node/Expression/FunctionExpression.md) | Abstract class for all nodes that represents an expression.|
| [`GetAttrExpression`](./docs/classes/Twig/Node/Expression/GetAttrExpression.md) | Abstract class for all nodes that represents an expression.|
| [`MethodCallExpression`](./docs/classes/Twig/Node/Expression/MethodCallExpression.md) | Abstract class for all nodes that represents an expression.|
| [`NameExpression`](./docs/classes/Twig/Node/Expression/NameExpression.md) | Abstract class for all nodes that represents an expression.|
| [`NullCoalesceExpression`](./docs/classes/Twig/Node/Expression/NullCoalesceExpression.md) | Abstract class for all nodes that represents an expression.|
| [`ParentExpression`](./docs/classes/Twig/Node/Expression/ParentExpression.md) | Represents a parent node.|
| [`TempNameExpression`](./docs/classes/Twig/Node/Expression/TempNameExpression.md) | Abstract class for all nodes that represents an expression.|
| [`TestExpression`](./docs/classes/Twig/Node/Expression/TestExpression.md) | Abstract class for all nodes that represents an expression.|

### \Twig\Node\Expression\Binary

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractBinary`](./docs/classes/Twig/Node/Expression/Binary/AbstractBinary.md) | Abstract class for all nodes that represents an expression.|
| [`AddBinary`](./docs/classes/Twig/Node/Expression/Binary/AddBinary.md) | Abstract class for all nodes that represents an expression.|
| [`AndBinary`](./docs/classes/Twig/Node/Expression/Binary/AndBinary.md) | Abstract class for all nodes that represents an expression.|
| [`BitwiseAndBinary`](./docs/classes/Twig/Node/Expression/Binary/BitwiseAndBinary.md) | Abstract class for all nodes that represents an expression.|
| [`BitwiseOrBinary`](./docs/classes/Twig/Node/Expression/Binary/BitwiseOrBinary.md) | Abstract class for all nodes that represents an expression.|
| [`BitwiseXorBinary`](./docs/classes/Twig/Node/Expression/Binary/BitwiseXorBinary.md) | Abstract class for all nodes that represents an expression.|
| [`ConcatBinary`](./docs/classes/Twig/Node/Expression/Binary/ConcatBinary.md) | Abstract class for all nodes that represents an expression.|
| [`DivBinary`](./docs/classes/Twig/Node/Expression/Binary/DivBinary.md) | Abstract class for all nodes that represents an expression.|
| [`EndsWithBinary`](./docs/classes/Twig/Node/Expression/Binary/EndsWithBinary.md) | Abstract class for all nodes that represents an expression.|
| [`EqualBinary`](./docs/classes/Twig/Node/Expression/Binary/EqualBinary.md) | Abstract class for all nodes that represents an expression.|
| [`FloorDivBinary`](./docs/classes/Twig/Node/Expression/Binary/FloorDivBinary.md) | Abstract class for all nodes that represents an expression.|
| [`GreaterBinary`](./docs/classes/Twig/Node/Expression/Binary/GreaterBinary.md) | Abstract class for all nodes that represents an expression.|
| [`GreaterEqualBinary`](./docs/classes/Twig/Node/Expression/Binary/GreaterEqualBinary.md) | Abstract class for all nodes that represents an expression.|
| [`InBinary`](./docs/classes/Twig/Node/Expression/Binary/InBinary.md) | Abstract class for all nodes that represents an expression.|
| [`LessBinary`](./docs/classes/Twig/Node/Expression/Binary/LessBinary.md) | Abstract class for all nodes that represents an expression.|
| [`LessEqualBinary`](./docs/classes/Twig/Node/Expression/Binary/LessEqualBinary.md) | Abstract class for all nodes that represents an expression.|
| [`MatchesBinary`](./docs/classes/Twig/Node/Expression/Binary/MatchesBinary.md) | Abstract class for all nodes that represents an expression.|
| [`ModBinary`](./docs/classes/Twig/Node/Expression/Binary/ModBinary.md) | Abstract class for all nodes that represents an expression.|
| [`MulBinary`](./docs/classes/Twig/Node/Expression/Binary/MulBinary.md) | Abstract class for all nodes that represents an expression.|
| [`NotEqualBinary`](./docs/classes/Twig/Node/Expression/Binary/NotEqualBinary.md) | Abstract class for all nodes that represents an expression.|
| [`NotInBinary`](./docs/classes/Twig/Node/Expression/Binary/NotInBinary.md) | Abstract class for all nodes that represents an expression.|
| [`OrBinary`](./docs/classes/Twig/Node/Expression/Binary/OrBinary.md) | Abstract class for all nodes that represents an expression.|
| [`PowerBinary`](./docs/classes/Twig/Node/Expression/Binary/PowerBinary.md) | Abstract class for all nodes that represents an expression.|
| [`RangeBinary`](./docs/classes/Twig/Node/Expression/Binary/RangeBinary.md) | Abstract class for all nodes that represents an expression.|
| [`StartsWithBinary`](./docs/classes/Twig/Node/Expression/Binary/StartsWithBinary.md) | Abstract class for all nodes that represents an expression.|
| [`SubBinary`](./docs/classes/Twig/Node/Expression/Binary/SubBinary.md) | Abstract class for all nodes that represents an expression.|

### \Twig\Node\Expression\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`DefaultFilter`](./docs/classes/Twig/Node/Expression/Filter/DefaultFilter.md) | Returns the value or the default value when it is undefined or empty.|

### \Twig\Node\Expression\Test

#### Classes

| Class | Description |
|-------|-------------|
| [`ConstantTest`](./docs/classes/Twig/Node/Expression/Test/ConstantTest.md) | Checks if a variable is the exact same value as a constant.|
| [`DefinedTest`](./docs/classes/Twig/Node/Expression/Test/DefinedTest.md) | Checks if a variable is defined in the current context.|
| [`DivisiblebyTest`](./docs/classes/Twig/Node/Expression/Test/DivisiblebyTest.md) | Checks if a variable is divisible by a number.|
| [`EvenTest`](./docs/classes/Twig/Node/Expression/Test/EvenTest.md) | Checks if a number is even.|
| [`NullTest`](./docs/classes/Twig/Node/Expression/Test/NullTest.md) | Checks that a variable is null.|
| [`OddTest`](./docs/classes/Twig/Node/Expression/Test/OddTest.md) | Checks if a number is odd.|
| [`SameasTest`](./docs/classes/Twig/Node/Expression/Test/SameasTest.md) | Checks if a variable is the same as another one (=== in PHP).|

### \Twig\Node\Expression\Unary

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractUnary`](./docs/classes/Twig/Node/Expression/Unary/AbstractUnary.md) | Abstract class for all nodes that represents an expression.|
| [`NegUnary`](./docs/classes/Twig/Node/Expression/Unary/NegUnary.md) | Abstract class for all nodes that represents an expression.|
| [`NotUnary`](./docs/classes/Twig/Node/Expression/Unary/NotUnary.md) | Abstract class for all nodes that represents an expression.|
| [`PosUnary`](./docs/classes/Twig/Node/Expression/Unary/PosUnary.md) | Abstract class for all nodes that represents an expression.|

### \Twig\Profiler

#### Classes

| Class | Description |
|-------|-------------|
| [`Profile`](./docs/classes/Twig/Profiler/Profile.md) | |

### \Twig\Profiler\Dumper

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseDumper`](./docs/classes/Twig/Profiler/Dumper/BaseDumper.md) | |
| [`BlackfireDumper`](./docs/classes/Twig/Profiler/Dumper/BlackfireDumper.md) | |
| [`HtmlDumper`](./docs/classes/Twig/Profiler/Dumper/HtmlDumper.md) | |
| [`TextDumper`](./docs/classes/Twig/Profiler/Dumper/TextDumper.md) | |

### \Twig\Profiler\Node

#### Classes

| Class | Description |
|-------|-------------|
| [`EnterProfileNode`](./docs/classes/Twig/Profiler/Node/EnterProfileNode.md) | Represents a profile enter node.|
| [`LeaveProfileNode`](./docs/classes/Twig/Profiler/Node/LeaveProfileNode.md) | Represents a profile leave node.|

### \Twig\Profiler\NodeVisitor

#### Classes

| Class | Description |
|-------|-------------|
| [`ProfilerNodeVisitor`](./docs/classes/Twig/Profiler/NodeVisitor/ProfilerNodeVisitor.md) | Used to make node visitors compatible with Twig 1.x and 2.x.|

### \Twig\RuntimeLoader

#### Classes

| Class | Description |
|-------|-------------|
| [`ContainerRuntimeLoader`](./docs/classes/Twig/RuntimeLoader/ContainerRuntimeLoader.md) | Lazily loads Twig runtime implementations from a PSR-11 container.|
| [`FactoryRuntimeLoader`](./docs/classes/Twig/RuntimeLoader/FactoryRuntimeLoader.md) | Lazy loads the runtime implementations for a Twig element.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`RuntimeLoaderInterface`](./docs/classes/Twig/RuntimeLoader/RuntimeLoaderInterface.md) | Creates runtime implementations for Twig elements (filters/functions/tests).|

### \Twig\Sandbox

#### Classes

| Class | Description |
|-------|-------------|
| [`SecurityError`](./docs/classes/Twig/Sandbox/SecurityError.md) | Exception thrown when a security error occurs at runtime.|
| [`SecurityNotAllowedFilterError`](./docs/classes/Twig/Sandbox/SecurityNotAllowedFilterError.md) | Exception thrown when a not allowed filter is used in a template.|
| [`SecurityNotAllowedFunctionError`](./docs/classes/Twig/Sandbox/SecurityNotAllowedFunctionError.md) | Exception thrown when a not allowed function is used in a template.|
| [`SecurityNotAllowedMethodError`](./docs/classes/Twig/Sandbox/SecurityNotAllowedMethodError.md) | Exception thrown when a not allowed class method is used in a template.|
| [`SecurityNotAllowedPropertyError`](./docs/classes/Twig/Sandbox/SecurityNotAllowedPropertyError.md) | Exception thrown when a not allowed class property is used in a template.|
| [`SecurityNotAllowedTagError`](./docs/classes/Twig/Sandbox/SecurityNotAllowedTagError.md) | Exception thrown when a not allowed tag is used in a template.|
| [`SecurityPolicy`](./docs/classes/Twig/Sandbox/SecurityPolicy.md) | Represents a security policy which need to be enforced when sandbox mode is enabled.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`SecurityPolicyInterface`](./docs/classes/Twig/Sandbox/SecurityPolicyInterface.md) | Interface that all security policy classes must implements.|

### \Twig\Test

#### Classes

| Class | Description |
|-------|-------------|
| [`IntegrationTestCase`](./docs/classes/Twig/Test/IntegrationTestCase.md) | Integration test helper.|
| [`NodeTestCase`](./docs/classes/Twig/Test/NodeTestCase.md) | |

### \Twig\TokenParser

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractTokenParser`](./docs/classes/Twig/TokenParser/AbstractTokenParser.md) | Base class for all token parsers.|
| [`ApplyTokenParser`](./docs/classes/Twig/TokenParser/ApplyTokenParser.md) | Applies filters on a section of a template.|
| [`AutoEscapeTokenParser`](./docs/classes/Twig/TokenParser/AutoEscapeTokenParser.md) | Marks a section of a template to be escaped or not.|
| [`BlockTokenParser`](./docs/classes/Twig/TokenParser/BlockTokenParser.md) | Marks a section of a template as being reusable.|
| [`DeprecatedTokenParser`](./docs/classes/Twig/TokenParser/DeprecatedTokenParser.md) | Deprecates a section of a template.|
| [`DoTokenParser`](./docs/classes/Twig/TokenParser/DoTokenParser.md) | Evaluates an expression, discarding the returned value.|
| [`EmbedTokenParser`](./docs/classes/Twig/TokenParser/EmbedTokenParser.md) | Embeds a template.|
| [`ExtendsTokenParser`](./docs/classes/Twig/TokenParser/ExtendsTokenParser.md) | Extends a template by another one.|
| [`FilterTokenParser`](./docs/classes/Twig/TokenParser/FilterTokenParser.md) | Filters a section of a template by applying filters.|
| [`FlushTokenParser`](./docs/classes/Twig/TokenParser/FlushTokenParser.md) | Flushes the output to the client.|
| [`ForTokenParser`](./docs/classes/Twig/TokenParser/ForTokenParser.md) | Loops over each item of a sequence.|
| [`FromTokenParser`](./docs/classes/Twig/TokenParser/FromTokenParser.md) | Imports macros.|
| [`IfTokenParser`](./docs/classes/Twig/TokenParser/IfTokenParser.md) | Tests a condition.|
| [`ImportTokenParser`](./docs/classes/Twig/TokenParser/ImportTokenParser.md) | Imports macros.|
| [`IncludeTokenParser`](./docs/classes/Twig/TokenParser/IncludeTokenParser.md) | Includes a template.|
| [`MacroTokenParser`](./docs/classes/Twig/TokenParser/MacroTokenParser.md) | Defines a macro.|
| [`SandboxTokenParser`](./docs/classes/Twig/TokenParser/SandboxTokenParser.md) | Marks a section of a template as untrusted code that must be evaluated in the sandbox mode.|
| [`SetTokenParser`](./docs/classes/Twig/TokenParser/SetTokenParser.md) | Defines a variable.|
| [`SpacelessTokenParser`](./docs/classes/Twig/TokenParser/SpacelessTokenParser.md) | Remove whitespaces between HTML tags.|
| [`UseTokenParser`](./docs/classes/Twig/TokenParser/UseTokenParser.md) | Imports blocks defined in another template into the current template.|
| [`WithTokenParser`](./docs/classes/Twig/TokenParser/WithTokenParser.md) | Creates a nested scope.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`TokenParserInterface`](./docs/classes/Twig/TokenParser/TokenParserInterface.md) | Interface implemented by token parsers.|

### \Twig\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`DeprecationCollector`](./docs/classes/Twig/Util/DeprecationCollector.md) | |
| [`TemplateDirIterator`](./docs/classes/Twig/Util/TemplateDirIterator.md) | |

### \Webmozart\Assert

#### Classes

| Class | Description |
|-------|-------------|
| [`Assert`](./docs/classes/Webmozart/Assert/Assert.md) | Efficient assertions to validate the input/output of your methods.|
| [`InvalidArgumentException`](./docs/classes/Webmozart/Assert/InvalidArgumentException.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`Mixin`](./docs/classes/Webmozart/Assert/Mixin.md) | This trait provides nurllOr*, all* and allNullOr* variants of assertion base methods.|

### \ZendBench\Stdlib

#### Classes

| Class | Description |
|-------|-------------|
| [`ExtractPriorityQueue`](./docs/classes/ZendBench/Stdlib/ExtractPriorityQueue.md) | |
| [`InsertPriorityQueue`](./docs/classes/ZendBench/Stdlib/InsertPriorityQueue.md) | |
| [`RemovePriorityQueue`](./docs/classes/ZendBench/Stdlib/RemovePriorityQueue.md) | |

### \Zend\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`PatternFactory`](./docs/classes/Zend/Cache/PatternFactory.md) | |
| [`PatternPluginManager`](./docs/classes/Zend/Cache/PatternPluginManager.md) | Plugin manager implementation for cache pattern adapters|
| [`StorageFactory`](./docs/classes/Zend/Cache/StorageFactory.md) | |

### \Zend\Cache\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](./docs/classes/Zend/Cache/Exception/BadMethodCallException.md) | |
| [`ExtensionNotLoadedException`](./docs/classes/Zend/Cache/Exception/ExtensionNotLoadedException.md) | |
| [`InvalidArgumentException`](./docs/classes/Zend/Cache/Exception/InvalidArgumentException.md) | |
| [`LogicException`](./docs/classes/Zend/Cache/Exception/LogicException.md) | |
| [`MissingDependencyException`](./docs/classes/Zend/Cache/Exception/MissingDependencyException.md) | |
| [`MissingKeyException`](./docs/classes/Zend/Cache/Exception/MissingKeyException.md) | |
| [`OutOfSpaceException`](./docs/classes/Zend/Cache/Exception/OutOfSpaceException.md) | |
| [`RuntimeException`](./docs/classes/Zend/Cache/Exception/RuntimeException.md) | |
| [`UnexpectedValueException`](./docs/classes/Zend/Cache/Exception/UnexpectedValueException.md) | |
| [`UnsupportedMethodCallException`](./docs/classes/Zend/Cache/Exception/UnsupportedMethodCallException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/Cache/Exception/ExceptionInterface.md) | |

### \Zend\Cache\Pattern

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractPattern`](./docs/classes/Zend/Cache/Pattern/AbstractPattern.md) | |
| [`CallbackCache`](./docs/classes/Zend/Cache/Pattern/CallbackCache.md) | |
| [`CaptureCache`](./docs/classes/Zend/Cache/Pattern/CaptureCache.md) | |
| [`ClassCache`](./docs/classes/Zend/Cache/Pattern/ClassCache.md) | |
| [`ObjectCache`](./docs/classes/Zend/Cache/Pattern/ObjectCache.md) | |
| [`OutputCache`](./docs/classes/Zend/Cache/Pattern/OutputCache.md) | |
| [`PatternOptions`](./docs/classes/Zend/Cache/Pattern/PatternOptions.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`PatternInterface`](./docs/classes/Zend/Cache/Pattern/PatternInterface.md) | |

### \Zend\Cache\Service

#### Classes

| Class | Description |
|-------|-------------|
| [`StorageCacheAbstractServiceFactory`](./docs/classes/Zend/Cache/Service/StorageCacheAbstractServiceFactory.md) | Storage cache factory for multiple caches.|
| [`StorageCacheFactory`](./docs/classes/Zend/Cache/Service/StorageCacheFactory.md) | Storage cache factory.|

### \Zend\Cache\Storage

#### Classes

| Class | Description |
|-------|-------------|
| [`AdapterPluginManager`](./docs/classes/Zend/Cache/Storage/AdapterPluginManager.md) | Plugin manager implementation for cache storage adapters|
| [`Capabilities`](./docs/classes/Zend/Cache/Storage/Capabilities.md) | |
| [`Event`](./docs/classes/Zend/Cache/Storage/Event.md) | Representation of an event|
| [`ExceptionEvent`](./docs/classes/Zend/Cache/Storage/ExceptionEvent.md) | Representation of an event|
| [`PluginManager`](./docs/classes/Zend/Cache/Storage/PluginManager.md) | Plugin manager implementation for cache plugins|
| [`PostEvent`](./docs/classes/Zend/Cache/Storage/PostEvent.md) | Representation of an event|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AvailableSpaceCapableInterface`](./docs/classes/Zend/Cache/Storage/AvailableSpaceCapableInterface.md) | |
| [`ClearByNamespaceInterface`](./docs/classes/Zend/Cache/Storage/ClearByNamespaceInterface.md) | |
| [`ClearByPrefixInterface`](./docs/classes/Zend/Cache/Storage/ClearByPrefixInterface.md) | |
| [`ClearExpiredInterface`](./docs/classes/Zend/Cache/Storage/ClearExpiredInterface.md) | |
| [`FlushableInterface`](./docs/classes/Zend/Cache/Storage/FlushableInterface.md) | |
| [`IterableInterface`](./docs/classes/Zend/Cache/Storage/IterableInterface.md) | |
| [`IteratorInterface`](./docs/classes/Zend/Cache/Storage/IteratorInterface.md) | |
| [`OptimizableInterface`](./docs/classes/Zend/Cache/Storage/OptimizableInterface.md) | |
| [`StorageInterface`](./docs/classes/Zend/Cache/Storage/StorageInterface.md) | |
| [`TaggableInterface`](./docs/classes/Zend/Cache/Storage/TaggableInterface.md) | |
| [`TotalSpaceCapableInterface`](./docs/classes/Zend/Cache/Storage/TotalSpaceCapableInterface.md) | |

### \Zend\Cache\Storage\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractAdapter`](./docs/classes/Zend/Cache/Storage/Adapter/AbstractAdapter.md) | |
| [`AbstractZendServer`](./docs/classes/Zend/Cache/Storage/Adapter/AbstractZendServer.md) | |
| [`AdapterOptions`](./docs/classes/Zend/Cache/Storage/Adapter/AdapterOptions.md) | Unless otherwise marked, all options in this class affect all adapters.|
| [`Apc`](./docs/classes/Zend/Cache/Storage/Adapter/Apc.md) | |
| [`ApcIterator`](./docs/classes/Zend/Cache/Storage/Adapter/ApcIterator.md) | |
| [`ApcOptions`](./docs/classes/Zend/Cache/Storage/Adapter/ApcOptions.md) | These are options specific to the APC adapter|
| [`BlackHole`](./docs/classes/Zend/Cache/Storage/Adapter/BlackHole.md) | |
| [`Dba`](./docs/classes/Zend/Cache/Storage/Adapter/Dba.md) | |
| [`DbaIterator`](./docs/classes/Zend/Cache/Storage/Adapter/DbaIterator.md) | |
| [`DbaOptions`](./docs/classes/Zend/Cache/Storage/Adapter/DbaOptions.md) | These are options specific to the APC adapter|
| [`Filesystem`](./docs/classes/Zend/Cache/Storage/Adapter/Filesystem.md) | |
| [`FilesystemIterator`](./docs/classes/Zend/Cache/Storage/Adapter/FilesystemIterator.md) | |
| [`FilesystemOptions`](./docs/classes/Zend/Cache/Storage/Adapter/FilesystemOptions.md) | These are options specific to the Filesystem adapter|
| [`KeyListIterator`](./docs/classes/Zend/Cache/Storage/Adapter/KeyListIterator.md) | |
| [`Memcache`](./docs/classes/Zend/Cache/Storage/Adapter/Memcache.md) | |
| [`MemcacheOptions`](./docs/classes/Zend/Cache/Storage/Adapter/MemcacheOptions.md) | These are options specific to the Memcache adapter|
| [`MemcacheResourceManager`](./docs/classes/Zend/Cache/Storage/Adapter/MemcacheResourceManager.md) | This is a resource manager for memcache|
| [`Memcached`](./docs/classes/Zend/Cache/Storage/Adapter/Memcached.md) | |
| [`MemcachedOptions`](./docs/classes/Zend/Cache/Storage/Adapter/MemcachedOptions.md) | These are options specific to the Memcached adapter|
| [`MemcachedResourceManager`](./docs/classes/Zend/Cache/Storage/Adapter/MemcachedResourceManager.md) | This is a resource manager for memcached|
| [`Memory`](./docs/classes/Zend/Cache/Storage/Adapter/Memory.md) | |
| [`MemoryOptions`](./docs/classes/Zend/Cache/Storage/Adapter/MemoryOptions.md) | These are options specific to the APC adapter|
| [`MongoDb`](./docs/classes/Zend/Cache/Storage/Adapter/MongoDb.md) | |
| [`MongoDbOptions`](./docs/classes/Zend/Cache/Storage/Adapter/MongoDbOptions.md) | Unless otherwise marked, all options in this class affect all adapters.|
| [`MongoDbResourceManager`](./docs/classes/Zend/Cache/Storage/Adapter/MongoDbResourceManager.md) | |
| [`Redis`](./docs/classes/Zend/Cache/Storage/Adapter/Redis.md) | |
| [`RedisOptions`](./docs/classes/Zend/Cache/Storage/Adapter/RedisOptions.md) | Unless otherwise marked, all options in this class affect all adapters.|
| [`RedisResourceManager`](./docs/classes/Zend/Cache/Storage/Adapter/RedisResourceManager.md) | This is a resource manager for redis|
| [`Session`](./docs/classes/Zend/Cache/Storage/Adapter/Session.md) | |
| [`SessionOptions`](./docs/classes/Zend/Cache/Storage/Adapter/SessionOptions.md) | These are options specific to the APC adapter|
| [`WinCache`](./docs/classes/Zend/Cache/Storage/Adapter/WinCache.md) | |
| [`WinCacheOptions`](./docs/classes/Zend/Cache/Storage/Adapter/WinCacheOptions.md) | These are options specific to the APC adapter|
| [`XCache`](./docs/classes/Zend/Cache/Storage/Adapter/XCache.md) | |
| [`XCacheOptions`](./docs/classes/Zend/Cache/Storage/Adapter/XCacheOptions.md) | These are options specific to the XCache adapter|
| [`ZendServerDisk`](./docs/classes/Zend/Cache/Storage/Adapter/ZendServerDisk.md) | |
| [`ZendServerShm`](./docs/classes/Zend/Cache/Storage/Adapter/ZendServerShm.md) | |

### \Zend\Cache\Storage\Plugin

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractPlugin`](./docs/classes/Zend/Cache/Storage/Plugin/AbstractPlugin.md) | Abstract aggregate listener|
| [`ClearExpiredByFactor`](./docs/classes/Zend/Cache/Storage/Plugin/ClearExpiredByFactor.md) | Abstract aggregate listener|
| [`ExceptionHandler`](./docs/classes/Zend/Cache/Storage/Plugin/ExceptionHandler.md) | Abstract aggregate listener|
| [`IgnoreUserAbort`](./docs/classes/Zend/Cache/Storage/Plugin/IgnoreUserAbort.md) | Abstract aggregate listener|
| [`OptimizeByFactor`](./docs/classes/Zend/Cache/Storage/Plugin/OptimizeByFactor.md) | Abstract aggregate listener|
| [`PluginOptions`](./docs/classes/Zend/Cache/Storage/Plugin/PluginOptions.md) | |
| [`Serializer`](./docs/classes/Zend/Cache/Storage/Plugin/Serializer.md) | Abstract aggregate listener|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`PluginInterface`](./docs/classes/Zend/Cache/Storage/Plugin/PluginInterface.md) | Interface for self-registering event listeners.|

### \Zend\Config

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractConfigFactory`](./docs/classes/Zend/Config/AbstractConfigFactory.md) | Class AbstractConfigFactory|
| [`Config`](./docs/classes/Zend/Config/Config.md) | Provides a property based interface to an array.|
| [`Factory`](./docs/classes/Zend/Config/Factory.md) | |
| [`ReaderPluginManager`](./docs/classes/Zend/Config/ReaderPluginManager.md) | ServiceManager implementation for managing plugins|
| [`WriterPluginManager`](./docs/classes/Zend/Config/WriterPluginManager.md) | ServiceManager implementation for managing plugins|

### \Zend\Config\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`InvalidArgumentException`](./docs/classes/Zend/Config/Exception/InvalidArgumentException.md) | |
| [`RuntimeException`](./docs/classes/Zend/Config/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/Config/Exception/ExceptionInterface.md) | |

### \Zend\Config\Processor

#### Classes

| Class | Description |
|-------|-------------|
| [`Constant`](./docs/classes/Zend/Config/Processor/Constant.md) | |
| [`Filter`](./docs/classes/Zend/Config/Processor/Filter.md) | |
| [`Queue`](./docs/classes/Zend/Config/Processor/Queue.md) | Re-usable, serializable priority queue implementation|
| [`Token`](./docs/classes/Zend/Config/Processor/Token.md) | |
| [`Translator`](./docs/classes/Zend/Config/Processor/Translator.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ProcessorInterface`](./docs/classes/Zend/Config/Processor/ProcessorInterface.md) | |

### \Zend\Config\Reader

#### Classes

| Class | Description |
|-------|-------------|
| [`Ini`](./docs/classes/Zend/Config/Reader/Ini.md) | INI config reader.|
| [`JavaProperties`](./docs/classes/Zend/Config/Reader/JavaProperties.md) | Java-style properties config reader.|
| [`Json`](./docs/classes/Zend/Config/Reader/Json.md) | JSON config reader.|
| [`Xml`](./docs/classes/Zend/Config/Reader/Xml.md) | XML config reader.|
| [`Yaml`](./docs/classes/Zend/Config/Reader/Yaml.md) | YAML config reader.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ReaderInterface`](./docs/classes/Zend/Config/Reader/ReaderInterface.md) | |

### \Zend\Config\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractWriter`](./docs/classes/Zend/Config/Writer/AbstractWriter.md) | |
| [`Ini`](./docs/classes/Zend/Config/Writer/Ini.md) | |
| [`Json`](./docs/classes/Zend/Config/Writer/Json.md) | |
| [`PhpArray`](./docs/classes/Zend/Config/Writer/PhpArray.md) | |
| [`Xml`](./docs/classes/Zend/Config/Writer/Xml.md) | |
| [`Yaml`](./docs/classes/Zend/Config/Writer/Yaml.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`WriterInterface`](./docs/classes/Zend/Config/Writer/WriterInterface.md) | |

### \Zend\EventManager

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractListenerAggregate`](./docs/classes/Zend/EventManager/AbstractListenerAggregate.md) | Abstract aggregate listener|
| [`Event`](./docs/classes/Zend/EventManager/Event.md) | Representation of an event|
| [`EventManager`](./docs/classes/Zend/EventManager/EventManager.md) | Event manager: notification system|
| [`FilterChain`](./docs/classes/Zend/EventManager/FilterChain.md) | FilterChain: intercepting filter manager|
| [`GlobalEventManager`](./docs/classes/Zend/EventManager/GlobalEventManager.md) | Event manager: notification system|
| [`ResponseCollection`](./docs/classes/Zend/EventManager/ResponseCollection.md) | Collection of signal handler return values|
| [`SharedEventManager`](./docs/classes/Zend/EventManager/SharedEventManager.md) | Shared/contextual EventManager|
| [`StaticEventManager`](./docs/classes/Zend/EventManager/StaticEventManager.md) | Static version of EventManager|

#### Traits

| Trait | Description |
|-------|-------------|
| [`EventManagerAwareTrait`](./docs/classes/Zend/EventManager/EventManagerAwareTrait.md) | A trait for objects that provide events.|
| [`ListenerAggregateTrait`](./docs/classes/Zend/EventManager/ListenerAggregateTrait.md) | Provides logic to easily create aggregate listeners, without worrying about<br />manually detaching events|
| [`ProvidesEvents`](./docs/classes/Zend/EventManager/ProvidesEvents.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`EventInterface`](./docs/classes/Zend/EventManager/EventInterface.md) | Representation of an event|
| [`EventManagerAwareInterface`](./docs/classes/Zend/EventManager/EventManagerAwareInterface.md) | Interface to automate setter injection for an EventManager instance|
| [`EventManagerInterface`](./docs/classes/Zend/EventManager/EventManagerInterface.md) | Interface for messengers|
| [`EventsCapableInterface`](./docs/classes/Zend/EventManager/EventsCapableInterface.md) | Interface providing events that can be attached, detached and triggered.|
| [`ListenerAggregateInterface`](./docs/classes/Zend/EventManager/ListenerAggregateInterface.md) | Interface for self-registering event listeners.|
| [`SharedEventAggregateAwareInterface`](./docs/classes/Zend/EventManager/SharedEventAggregateAwareInterface.md) | Interface for allowing attachment of shared aggregate listeners.|
| [`SharedEventManagerAwareInterface`](./docs/classes/Zend/EventManager/SharedEventManagerAwareInterface.md) | Interface to automate setter injection for a SharedEventManagerInterface instance|
| [`SharedEventManagerInterface`](./docs/classes/Zend/EventManager/SharedEventManagerInterface.md) | Interface for shared event listener collections|
| [`SharedEventsCapableInterface`](./docs/classes/Zend/EventManager/SharedEventsCapableInterface.md) | Interface indicating that an object composes or can compose a<br />SharedEventManagerInterface instance.|
| [`SharedListenerAggregateInterface`](./docs/classes/Zend/EventManager/SharedListenerAggregateInterface.md) | Interface for self-registering event listeners.|

### \Zend\EventManager\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`DomainException`](./docs/classes/Zend/EventManager/Exception/DomainException.md) | |
| [`InvalidArgumentException`](./docs/classes/Zend/EventManager/Exception/InvalidArgumentException.md) | Invalid argument exception|
| [`InvalidCallbackException`](./docs/classes/Zend/EventManager/Exception/InvalidCallbackException.md) | Invalid callback exception|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/EventManager/Exception/ExceptionInterface.md) | Base exception interface|

### \Zend\EventManager\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`FilterIterator`](./docs/classes/Zend/EventManager/Filter/FilterIterator.md) | Specialized priority queue implementation for use with an intercepting<br />filter chain.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FilterInterface`](./docs/classes/Zend/EventManager/Filter/FilterInterface.md) | Interface for intercepting filter chains|

### \Zend\EventManager\Test

#### Traits

| Trait | Description |
|-------|-------------|
| [`EventListenerIntrospectionTrait`](./docs/classes/Zend/EventManager/Test/EventListenerIntrospectionTrait.md) | Trait providing utility methods and assertions for use in PHPUnit test cases.|

### \Zend\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractDateDropdown`](./docs/classes/Zend/Filter/AbstractDateDropdown.md) | |
| [`AbstractFilter`](./docs/classes/Zend/Filter/AbstractFilter.md) | |
| [`AbstractUnicode`](./docs/classes/Zend/Filter/AbstractUnicode.md) | |
| [`BaseName`](./docs/classes/Zend/Filter/BaseName.md) | |
| [`Blacklist`](./docs/classes/Zend/Filter/Blacklist.md) | |
| [`Boolean`](./docs/classes/Zend/Filter/Boolean.md) | |
| [`Callback`](./docs/classes/Zend/Filter/Callback.md) | |
| [`Compress`](./docs/classes/Zend/Filter/Compress.md) | Compresses a given string|
| [`DataUnitFormatter`](./docs/classes/Zend/Filter/DataUnitFormatter.md) | |
| [`DateSelect`](./docs/classes/Zend/Filter/DateSelect.md) | |
| [`DateTimeFormatter`](./docs/classes/Zend/Filter/DateTimeFormatter.md) | |
| [`DateTimeSelect`](./docs/classes/Zend/Filter/DateTimeSelect.md) | |
| [`Decompress`](./docs/classes/Zend/Filter/Decompress.md) | Decompresses a given string|
| [`Decrypt`](./docs/classes/Zend/Filter/Decrypt.md) | Decrypts a given string|
| [`Digits`](./docs/classes/Zend/Filter/Digits.md) | |
| [`Dir`](./docs/classes/Zend/Filter/Dir.md) | |
| [`Encrypt`](./docs/classes/Zend/Filter/Encrypt.md) | Encrypts a given string|
| [`FilterChain`](./docs/classes/Zend/Filter/FilterChain.md) | |
| [`FilterPluginManager`](./docs/classes/Zend/Filter/FilterPluginManager.md) | Plugin manager implementation for the filter chain.|
| [`HtmlEntities`](./docs/classes/Zend/Filter/HtmlEntities.md) | |
| [`Inflector`](./docs/classes/Zend/Filter/Inflector.md) | Filter chain for string inflection|
| [`Int`](./docs/classes/Zend/Filter/Int.md) | Stub class for backwards compatibility.|
| [`MonthSelect`](./docs/classes/Zend/Filter/MonthSelect.md) | |
| [`Null`](./docs/classes/Zend/Filter/Null.md) | Stub class for backwards compatibility.|
| [`PregReplace`](./docs/classes/Zend/Filter/PregReplace.md) | |
| [`RealPath`](./docs/classes/Zend/Filter/RealPath.md) | |
| [`StaticFilter`](./docs/classes/Zend/Filter/StaticFilter.md) | |
| [`StringToLower`](./docs/classes/Zend/Filter/StringToLower.md) | |
| [`StringToUpper`](./docs/classes/Zend/Filter/StringToUpper.md) | |
| [`StringTrim`](./docs/classes/Zend/Filter/StringTrim.md) | |
| [`StripNewlines`](./docs/classes/Zend/Filter/StripNewlines.md) | |
| [`StripTags`](./docs/classes/Zend/Filter/StripTags.md) | |
| [`ToInt`](./docs/classes/Zend/Filter/ToInt.md) | |
| [`ToNull`](./docs/classes/Zend/Filter/ToNull.md) | |
| [`UpperCaseWords`](./docs/classes/Zend/Filter/UpperCaseWords.md) | |
| [`UriNormalize`](./docs/classes/Zend/Filter/UriNormalize.md) | |
| [`Whitelist`](./docs/classes/Zend/Filter/Whitelist.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FilterInterface`](./docs/classes/Zend/Filter/FilterInterface.md) | |

### \Zend\Filter\Compress

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractCompressionAlgorithm`](./docs/classes/Zend/Filter/Compress/AbstractCompressionAlgorithm.md) | Abstract compression adapter|
| [`Bz2`](./docs/classes/Zend/Filter/Compress/Bz2.md) | Compression adapter for Bz2|
| [`Gz`](./docs/classes/Zend/Filter/Compress/Gz.md) | Compression adapter for Gzip (ZLib)|
| [`Lzf`](./docs/classes/Zend/Filter/Compress/Lzf.md) | Compression adapter for Lzf|
| [`Rar`](./docs/classes/Zend/Filter/Compress/Rar.md) | Compression adapter for Rar|
| [`Snappy`](./docs/classes/Zend/Filter/Compress/Snappy.md) | Compression adapter for php snappy (http://code.google.com/p/php-snappy/)|
| [`Tar`](./docs/classes/Zend/Filter/Compress/Tar.md) | Compression adapter for Tar|
| [`Zip`](./docs/classes/Zend/Filter/Compress/Zip.md) | Compression adapter for zip|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CompressionAlgorithmInterface`](./docs/classes/Zend/Filter/Compress/CompressionAlgorithmInterface.md) | Compression interface|

### \Zend\Filter\Encrypt

#### Classes

| Class | Description |
|-------|-------------|
| [`BlockCipher`](./docs/classes/Zend/Filter/Encrypt/BlockCipher.md) | Encryption adapter for Zend\Crypt\BlockCipher|
| [`Openssl`](./docs/classes/Zend/Filter/Encrypt/Openssl.md) | Encryption adapter for openssl|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`EncryptionAlgorithmInterface`](./docs/classes/Zend/Filter/Encrypt/EncryptionAlgorithmInterface.md) | Encryption interface|

### \Zend\Filter\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](./docs/classes/Zend/Filter/Exception/BadMethodCallException.md) | |
| [`DomainException`](./docs/classes/Zend/Filter/Exception/DomainException.md) | |
| [`ExtensionNotLoadedException`](./docs/classes/Zend/Filter/Exception/ExtensionNotLoadedException.md) | |
| [`InvalidArgumentException`](./docs/classes/Zend/Filter/Exception/InvalidArgumentException.md) | |
| [`RuntimeException`](./docs/classes/Zend/Filter/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/Filter/Exception/ExceptionInterface.md) | |

### \Zend\Filter\File

#### Classes

| Class | Description |
|-------|-------------|
| [`Decrypt`](./docs/classes/Zend/Filter/File/Decrypt.md) | Decrypts a given file and stores the decrypted file content|
| [`Encrypt`](./docs/classes/Zend/Filter/File/Encrypt.md) | Encrypts a given file and stores the encrypted file content|
| [`LowerCase`](./docs/classes/Zend/Filter/File/LowerCase.md) | |
| [`Rename`](./docs/classes/Zend/Filter/File/Rename.md) | |
| [`RenameUpload`](./docs/classes/Zend/Filter/File/RenameUpload.md) | |
| [`UpperCase`](./docs/classes/Zend/Filter/File/UpperCase.md) | |

### \Zend\Filter\Word

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractSeparator`](./docs/classes/Zend/Filter/Word/AbstractSeparator.md) | |
| [`CamelCaseToDash`](./docs/classes/Zend/Filter/Word/CamelCaseToDash.md) | |
| [`CamelCaseToSeparator`](./docs/classes/Zend/Filter/Word/CamelCaseToSeparator.md) | |
| [`CamelCaseToUnderscore`](./docs/classes/Zend/Filter/Word/CamelCaseToUnderscore.md) | |
| [`DashToCamelCase`](./docs/classes/Zend/Filter/Word/DashToCamelCase.md) | |
| [`DashToSeparator`](./docs/classes/Zend/Filter/Word/DashToSeparator.md) | |
| [`DashToUnderscore`](./docs/classes/Zend/Filter/Word/DashToUnderscore.md) | |
| [`SeparatorToCamelCase`](./docs/classes/Zend/Filter/Word/SeparatorToCamelCase.md) | |
| [`SeparatorToDash`](./docs/classes/Zend/Filter/Word/SeparatorToDash.md) | |
| [`SeparatorToSeparator`](./docs/classes/Zend/Filter/Word/SeparatorToSeparator.md) | |
| [`UnderscoreToCamelCase`](./docs/classes/Zend/Filter/Word/UnderscoreToCamelCase.md) | |
| [`UnderscoreToDash`](./docs/classes/Zend/Filter/Word/UnderscoreToDash.md) | |
| [`UnderscoreToSeparator`](./docs/classes/Zend/Filter/Word/UnderscoreToSeparator.md) | |
| [`UnderscoreToStudlyCase`](./docs/classes/Zend/Filter/Word/UnderscoreToStudlyCase.md) | |

### \Zend\Filter\Word\Service

#### Classes

| Class | Description |
|-------|-------------|
| [`SeparatorToSeparatorFactory`](./docs/classes/Zend/Filter/Word/Service/SeparatorToSeparatorFactory.md) | |

### \Zend\Hydrator

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractHydrator`](./docs/classes/Zend/Hydrator/AbstractHydrator.md) | |
| [`ArraySerializable`](./docs/classes/Zend/Hydrator/ArraySerializable.md) | |
| [`ClassMethods`](./docs/classes/Zend/Hydrator/ClassMethods.md) | |
| [`DelegatingHydrator`](./docs/classes/Zend/Hydrator/DelegatingHydrator.md) | |
| [`DelegatingHydratorFactory`](./docs/classes/Zend/Hydrator/DelegatingHydratorFactory.md) | |
| [`HydratorPluginManager`](./docs/classes/Zend/Hydrator/HydratorPluginManager.md) | Plugin manager implementation for hydrators.|
| [`ObjectProperty`](./docs/classes/Zend/Hydrator/ObjectProperty.md) | |
| [`Reflection`](./docs/classes/Zend/Hydrator/Reflection.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`HydratorAwareTrait`](./docs/classes/Zend/Hydrator/HydratorAwareTrait.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtractionInterface`](./docs/classes/Zend/Hydrator/ExtractionInterface.md) | |
| [`FilterEnabledInterface`](./docs/classes/Zend/Hydrator/FilterEnabledInterface.md) | |
| [`HydrationInterface`](./docs/classes/Zend/Hydrator/HydrationInterface.md) | |
| [`HydratorAwareInterface`](./docs/classes/Zend/Hydrator/HydratorAwareInterface.md) | |
| [`HydratorInterface`](./docs/classes/Zend/Hydrator/HydratorInterface.md) | |
| [`HydratorOptionsInterface`](./docs/classes/Zend/Hydrator/HydratorOptionsInterface.md) | |
| [`NamingStrategyEnabledInterface`](./docs/classes/Zend/Hydrator/NamingStrategyEnabledInterface.md) | |
| [`StrategyEnabledInterface`](./docs/classes/Zend/Hydrator/StrategyEnabledInterface.md) | |

### \Zend\Hydrator\Aggregate

#### Classes

| Class | Description |
|-------|-------------|
| [`AggregateHydrator`](./docs/classes/Zend/Hydrator/Aggregate/AggregateHydrator.md) | Aggregate hydrator that composes multiple hydrators via events|
| [`ExtractEvent`](./docs/classes/Zend/Hydrator/Aggregate/ExtractEvent.md) | Event triggered when the {@see AggregateHydrator} extracts<br />data from an object|
| [`HydrateEvent`](./docs/classes/Zend/Hydrator/Aggregate/HydrateEvent.md) | Event triggered when the {@see AggregateHydrator} hydrates<br />data into an object|
| [`HydratorListener`](./docs/classes/Zend/Hydrator/Aggregate/HydratorListener.md) | Aggregate listener wrapping around a hydrator.|

### \Zend\Hydrator\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](./docs/classes/Zend/Hydrator/Exception/BadMethodCallException.md) | Bad method call exception|
| [`DomainException`](./docs/classes/Zend/Hydrator/Exception/DomainException.md) | Domain exception|
| [`ExtensionNotLoadedException`](./docs/classes/Zend/Hydrator/Exception/ExtensionNotLoadedException.md) | Extension not loaded exception|
| [`InvalidArgumentException`](./docs/classes/Zend/Hydrator/Exception/InvalidArgumentException.md) | Invalid Argument Exception|
| [`InvalidCallbackException`](./docs/classes/Zend/Hydrator/Exception/InvalidCallbackException.md) | Invalid callback exception|
| [`LogicException`](./docs/classes/Zend/Hydrator/Exception/LogicException.md) | Logic exception|
| [`RuntimeException`](./docs/classes/Zend/Hydrator/Exception/RuntimeException.md) | Runtime exception|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/Hydrator/Exception/ExceptionInterface.md) | Exception marker interface|

### \Zend\Hydrator\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`FilterComposite`](./docs/classes/Zend/Hydrator/Filter/FilterComposite.md) | |
| [`GetFilter`](./docs/classes/Zend/Hydrator/Filter/GetFilter.md) | |
| [`HasFilter`](./docs/classes/Zend/Hydrator/Filter/HasFilter.md) | |
| [`IsFilter`](./docs/classes/Zend/Hydrator/Filter/IsFilter.md) | |
| [`MethodMatchFilter`](./docs/classes/Zend/Hydrator/Filter/MethodMatchFilter.md) | |
| [`NumberOfParameterFilter`](./docs/classes/Zend/Hydrator/Filter/NumberOfParameterFilter.md) | |
| [`OptionalParametersFilter`](./docs/classes/Zend/Hydrator/Filter/OptionalParametersFilter.md) | Filter that includes methods which have no parameters or only optional parameters|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FilterInterface`](./docs/classes/Zend/Hydrator/Filter/FilterInterface.md) | |
| [`FilterProviderInterface`](./docs/classes/Zend/Hydrator/Filter/FilterProviderInterface.md) | |

### \Zend\Hydrator\Iterator

#### Classes

| Class | Description |
|-------|-------------|
| [`HydratingArrayIterator`](./docs/classes/Zend/Hydrator/Iterator/HydratingArrayIterator.md) | |
| [`HydratingIteratorIterator`](./docs/classes/Zend/Hydrator/Iterator/HydratingIteratorIterator.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`HydratingIteratorInterface`](./docs/classes/Zend/Hydrator/Iterator/HydratingIteratorInterface.md) | |

### \Zend\Hydrator\NamingStrategy

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayMapNamingStrategy`](./docs/classes/Zend/Hydrator/NamingStrategy/ArrayMapNamingStrategy.md) | |
| [`CompositeNamingStrategy`](./docs/classes/Zend/Hydrator/NamingStrategy/CompositeNamingStrategy.md) | |
| [`IdentityNamingStrategy`](./docs/classes/Zend/Hydrator/NamingStrategy/IdentityNamingStrategy.md) | |
| [`MapNamingStrategy`](./docs/classes/Zend/Hydrator/NamingStrategy/MapNamingStrategy.md) | |
| [`UnderscoreNamingStrategy`](./docs/classes/Zend/Hydrator/NamingStrategy/UnderscoreNamingStrategy.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`NamingStrategyInterface`](./docs/classes/Zend/Hydrator/NamingStrategy/NamingStrategyInterface.md) | Allow property extraction/hydration for hydrator|

### \Zend\Hydrator\Strategy

#### Classes

| Class | Description |
|-------|-------------|
| [`BooleanStrategy`](./docs/classes/Zend/Hydrator/Strategy/BooleanStrategy.md) | This Strategy extracts and hydrates int and string values to Boolean values|
| [`ClosureStrategy`](./docs/classes/Zend/Hydrator/Strategy/ClosureStrategy.md) | |
| [`DateTimeFormatterStrategy`](./docs/classes/Zend/Hydrator/Strategy/DateTimeFormatterStrategy.md) | |
| [`DefaultStrategy`](./docs/classes/Zend/Hydrator/Strategy/DefaultStrategy.md) | |
| [`ExplodeStrategy`](./docs/classes/Zend/Hydrator/Strategy/ExplodeStrategy.md) | |
| [`SerializableStrategy`](./docs/classes/Zend/Hydrator/Strategy/SerializableStrategy.md) | |
| [`StrategyChain`](./docs/classes/Zend/Hydrator/Strategy/StrategyChain.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`StrategyInterface`](./docs/classes/Zend/Hydrator/Strategy/StrategyInterface.md) | |

### \Zend\Hydrator\Strategy\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`InvalidArgumentException`](./docs/classes/Zend/Hydrator/Strategy/Exception/InvalidArgumentException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/Hydrator/Strategy/Exception/ExceptionInterface.md) | |

### \Zend\I18n\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`ExtensionNotLoadedException`](./docs/classes/Zend/I18n/Exception/ExtensionNotLoadedException.md) | |
| [`InvalidArgumentException`](./docs/classes/Zend/I18n/Exception/InvalidArgumentException.md) | |
| [`OutOfBoundsException`](./docs/classes/Zend/I18n/Exception/OutOfBoundsException.md) | |
| [`ParseException`](./docs/classes/Zend/I18n/Exception/ParseException.md) | |
| [`RangeException`](./docs/classes/Zend/I18n/Exception/RangeException.md) | |
| [`RuntimeException`](./docs/classes/Zend/I18n/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/I18n/Exception/ExceptionInterface.md) | |

### \Zend\I18n\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractLocale`](./docs/classes/Zend/I18n/Filter/AbstractLocale.md) | |
| [`Alnum`](./docs/classes/Zend/I18n/Filter/Alnum.md) | |
| [`Alpha`](./docs/classes/Zend/I18n/Filter/Alpha.md) | |
| [`NumberFormat`](./docs/classes/Zend/I18n/Filter/NumberFormat.md) | |
| [`NumberParse`](./docs/classes/Zend/I18n/Filter/NumberParse.md) | |

### \Zend\I18n\Translator

#### Classes

| Class | Description |
|-------|-------------|
| [`LoaderPluginManager`](./docs/classes/Zend/I18n/Translator/LoaderPluginManager.md) | Plugin manager implementation for translation loaders.|
| [`TextDomain`](./docs/classes/Zend/I18n/Translator/TextDomain.md) | Text domain.|
| [`Translator`](./docs/classes/Zend/I18n/Translator/Translator.md) | Translator.|
| [`TranslatorServiceFactory`](./docs/classes/Zend/I18n/Translator/TranslatorServiceFactory.md) | Translator.|

#### Traits

| Trait | Description |
|-------|-------------|
| [`TranslatorAwareTrait`](./docs/classes/Zend/I18n/Translator/TranslatorAwareTrait.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`TranslatorAwareInterface`](./docs/classes/Zend/I18n/Translator/TranslatorAwareInterface.md) | |
| [`TranslatorInterface`](./docs/classes/Zend/I18n/Translator/TranslatorInterface.md) | Translator interface.|

### \Zend\I18n\Translator\Loader

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractFileLoader`](./docs/classes/Zend/I18n/Translator/Loader/AbstractFileLoader.md) | Abstract file loader implementation; provides facilities around resolving<br />files via the include_path.|
| [`Gettext`](./docs/classes/Zend/I18n/Translator/Loader/Gettext.md) | Gettext loader.|
| [`Ini`](./docs/classes/Zend/I18n/Translator/Loader/Ini.md) | PHP INI format loader.|
| [`PhpArray`](./docs/classes/Zend/I18n/Translator/Loader/PhpArray.md) | PHP array loader.|
| [`PhpMemoryArray`](./docs/classes/Zend/I18n/Translator/Loader/PhpMemoryArray.md) | PHP Memory array loader.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FileLoaderInterface`](./docs/classes/Zend/I18n/Translator/Loader/FileLoaderInterface.md) | File loader interface.|
| [`RemoteLoaderInterface`](./docs/classes/Zend/I18n/Translator/Loader/RemoteLoaderInterface.md) | Remote loader interface.|

### \Zend\I18n\Translator\Plural

#### Classes

| Class | Description |
|-------|-------------|
| [`Parser`](./docs/classes/Zend/I18n/Translator/Plural/Parser.md) | Plural rule parser.|
| [`Rule`](./docs/classes/Zend/I18n/Translator/Plural/Rule.md) | Plural rule evaluator.|
| [`Symbol`](./docs/classes/Zend/I18n/Translator/Plural/Symbol.md) | Parser symbol.|

### \Zend\I18n\Validator

#### Classes

| Class | Description |
|-------|-------------|
| [`Alnum`](./docs/classes/Zend/I18n/Validator/Alnum.md) | |
| [`Alpha`](./docs/classes/Zend/I18n/Validator/Alpha.md) | |
| [`DateTime`](./docs/classes/Zend/I18n/Validator/DateTime.md) | |
| [`Float`](./docs/classes/Zend/I18n/Validator/Float.md) | Stub class for backwards compatibility.|
| [`Int`](./docs/classes/Zend/I18n/Validator/Int.md) | Stub class for backwards compatibility.|
| [`IsFloat`](./docs/classes/Zend/I18n/Validator/IsFloat.md) | |
| [`IsInt`](./docs/classes/Zend/I18n/Validator/IsInt.md) | |
| [`PhoneNumber`](./docs/classes/Zend/I18n/Validator/PhoneNumber.md) | |
| [`PostCode`](./docs/classes/Zend/I18n/Validator/PostCode.md) | |

### \Zend\I18n\View

#### Classes

| Class | Description |
|-------|-------------|
| [`HelperConfig`](./docs/classes/Zend/I18n/View/HelperConfig.md) | Service manager configuration for i18n view helpers.|

### \Zend\I18n\View\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractTranslatorHelper`](./docs/classes/Zend/I18n/View/Helper/AbstractTranslatorHelper.md) | |
| [`CurrencyFormat`](./docs/classes/Zend/I18n/View/Helper/CurrencyFormat.md) | View helper for formatting currency.|
| [`DateFormat`](./docs/classes/Zend/I18n/View/Helper/DateFormat.md) | View helper for formatting dates.|
| [`NumberFormat`](./docs/classes/Zend/I18n/View/Helper/NumberFormat.md) | View helper for formatting dates.|
| [`Plural`](./docs/classes/Zend/I18n/View/Helper/Plural.md) | Helper for rendering text based on a count number (like the I18n plural translation helper, but when translation<br />is not needed).|
| [`Translate`](./docs/classes/Zend/I18n/View/Helper/Translate.md) | View helper for translating messages.|
| [`TranslatePlural`](./docs/classes/Zend/I18n/View/Helper/TranslatePlural.md) | View helper for translating plural messages.|

### \Zend\Json

#### Classes

| Class | Description |
|-------|-------------|
| [`Decoder`](./docs/classes/Zend/Json/Decoder.md) | Decode JSON encoded string to PHP variable constructs|
| [`Encoder`](./docs/classes/Zend/Json/Encoder.md) | Encode PHP constructs to JSON|
| [`Expr`](./docs/classes/Zend/Json/Expr.md) | Class for Zend\Json\Json encode method.|
| [`Json`](./docs/classes/Zend/Json/Json.md) | Class for encoding to and decoding from JSON.|

### \Zend\Json\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](./docs/classes/Zend/Json/Exception/BadMethodCallException.md) | |
| [`InvalidArgumentException`](./docs/classes/Zend/Json/Exception/InvalidArgumentException.md) | |
| [`RecursionException`](./docs/classes/Zend/Json/Exception/RecursionException.md) | |
| [`RuntimeException`](./docs/classes/Zend/Json/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/Json/Exception/ExceptionInterface.md) | |

### \Zend\Json\Server

#### Classes

| Class | Description |
|-------|-------------|
| [`Cache`](./docs/classes/Zend/Json/Server/Cache.md) | Zend\Json\Server\Cache: cache Zend\Json\Server\Server server definition and SMD|
| [`Client`](./docs/classes/Zend/Json/Server/Client.md) | |
| [`Error`](./docs/classes/Zend/Json/Server/Error.md) | |
| [`Request`](./docs/classes/Zend/Json/Server/Request.md) | |
| [`Response`](./docs/classes/Zend/Json/Server/Response.md) | |
| [`Server`](./docs/classes/Zend/Json/Server/Server.md) | |
| [`Smd`](./docs/classes/Zend/Json/Server/Smd.md) | |

### \Zend\Json\Server\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`ErrorException`](./docs/classes/Zend/Json/Server/Exception/ErrorException.md) | Thrown by Zend\Json\Server\Client when a JSON-RPC fault response is returned.|
| [`HttpException`](./docs/classes/Zend/Json/Server/Exception/HttpException.md) | Thrown by Zend\Json\Server\Client when an HTTP error occurs during an<br />JSON-RPC method call.|
| [`InvalidArgumentException`](./docs/classes/Zend/Json/Server/Exception/InvalidArgumentException.md) | |
| [`RuntimeException`](./docs/classes/Zend/Json/Server/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/Json/Server/Exception/ExceptionInterface.md) | |

### \Zend\Json\Server\Request

#### Classes

| Class | Description |
|-------|-------------|
| [`Http`](./docs/classes/Zend/Json/Server/Request/Http.md) | |

### \Zend\Json\Server\Response

#### Classes

| Class | Description |
|-------|-------------|
| [`Http`](./docs/classes/Zend/Json/Server/Response/Http.md) | |

### \Zend\Json\Server\Smd

#### Classes

| Class | Description |
|-------|-------------|
| [`Service`](./docs/classes/Zend/Json/Server/Smd/Service.md) | Create Service Mapping Description for a method|

### \Zend\Math

#### Classes

| Class | Description |
|-------|-------------|
| [`Rand`](./docs/classes/Zend/Math/Rand.md) | Pseudorandom number generator (PRNG)|

### \Zend\Math\BigInteger

#### Classes

| Class | Description |
|-------|-------------|
| [`AdapterPluginManager`](./docs/classes/Zend/Math/BigInteger/AdapterPluginManager.md) | Plugin manager implementation for BigInteger adapters.|
| [`BigInteger`](./docs/classes/Zend/Math/BigInteger/BigInteger.md) | |

### \Zend\Math\BigInteger\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`Bcmath`](./docs/classes/Zend/Math/BigInteger/Adapter/Bcmath.md) | Bcmath extension adapter|
| [`Gmp`](./docs/classes/Zend/Math/BigInteger/Adapter/Gmp.md) | GMP extension adapter|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdapterInterface`](./docs/classes/Zend/Math/BigInteger/Adapter/AdapterInterface.md) | |

### \Zend\Math\BigInteger\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`DivisionByZeroException`](./docs/classes/Zend/Math/BigInteger/Exception/DivisionByZeroException.md) | Division by zero exception|
| [`InvalidArgumentException`](./docs/classes/Zend/Math/BigInteger/Exception/InvalidArgumentException.md) | Invalid argument exception|
| [`RuntimeException`](./docs/classes/Zend/Math/BigInteger/Exception/RuntimeException.md) | Runtime exception|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/Math/BigInteger/Exception/ExceptionInterface.md) | Invalid argument exception|

### \Zend\Math\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`DomainException`](./docs/classes/Zend/Math/Exception/DomainException.md) | Invalid argument exception|
| [`InvalidArgumentException`](./docs/classes/Zend/Math/Exception/InvalidArgumentException.md) | Invalid argument exception|
| [`RuntimeException`](./docs/classes/Zend/Math/Exception/RuntimeException.md) | Runtime argument exception|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/Math/Exception/ExceptionInterface.md) | |

### \Zend\Math\Source

#### Classes

| Class | Description |
|-------|-------------|
| [`HashTiming`](./docs/classes/Zend/Math/Source/HashTiming.md) | Author:<br />George Argyros &lt;argyros.george@gmail.com&gt;|

### \Zend\Serializer

#### Classes

| Class | Description |
|-------|-------------|
| [`AdapterPluginManager`](./docs/classes/Zend/Serializer/AdapterPluginManager.md) | Plugin manager implementation for serializer adapters.|
| [`Serializer`](./docs/classes/Zend/Serializer/Serializer.md) | |

### \Zend\Serializer\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractAdapter`](./docs/classes/Zend/Serializer/Adapter/AbstractAdapter.md) | |
| [`AdapterOptions`](./docs/classes/Zend/Serializer/Adapter/AdapterOptions.md) | |
| [`IgBinary`](./docs/classes/Zend/Serializer/Adapter/IgBinary.md) | |
| [`Json`](./docs/classes/Zend/Serializer/Adapter/Json.md) | |
| [`JsonOptions`](./docs/classes/Zend/Serializer/Adapter/JsonOptions.md) | |
| [`MsgPack`](./docs/classes/Zend/Serializer/Adapter/MsgPack.md) | |
| [`PhpCode`](./docs/classes/Zend/Serializer/Adapter/PhpCode.md) | |
| [`PhpSerialize`](./docs/classes/Zend/Serializer/Adapter/PhpSerialize.md) | |
| [`PythonPickle`](./docs/classes/Zend/Serializer/Adapter/PythonPickle.md) | |
| [`PythonPickleOptions`](./docs/classes/Zend/Serializer/Adapter/PythonPickleOptions.md) | |
| [`Wddx`](./docs/classes/Zend/Serializer/Adapter/Wddx.md) | |
| [`WddxOptions`](./docs/classes/Zend/Serializer/Adapter/WddxOptions.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdapterInterface`](./docs/classes/Zend/Serializer/Adapter/AdapterInterface.md) | |

### \Zend\Serializer\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`ExtensionNotLoadedException`](./docs/classes/Zend/Serializer/Exception/ExtensionNotLoadedException.md) | |
| [`InvalidArgumentException`](./docs/classes/Zend/Serializer/Exception/InvalidArgumentException.md) | |
| [`RuntimeException`](./docs/classes/Zend/Serializer/Exception/RuntimeException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/Serializer/Exception/ExceptionInterface.md) | |

### \Zend\ServiceManager

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractPluginManager`](./docs/classes/Zend/ServiceManager/AbstractPluginManager.md) | ServiceManager implementation for managing plugins|
| [`Config`](./docs/classes/Zend/ServiceManager/Config.md) | |
| [`ServiceManager`](./docs/classes/Zend/ServiceManager/ServiceManager.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`MutableCreationOptionsTrait`](./docs/classes/Zend/ServiceManager/MutableCreationOptionsTrait.md) | Trait for MutableCreationOptions Factories|
| [`ServiceLocatorAwareTrait`](./docs/classes/Zend/ServiceManager/ServiceLocatorAwareTrait.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AbstractFactoryInterface`](./docs/classes/Zend/ServiceManager/AbstractFactoryInterface.md) | |
| [`ConfigInterface`](./docs/classes/Zend/ServiceManager/ConfigInterface.md) | |
| [`DelegatorFactoryInterface`](./docs/classes/Zend/ServiceManager/DelegatorFactoryInterface.md) | Interface for factories that can create delegates for services|
| [`FactoryInterface`](./docs/classes/Zend/ServiceManager/FactoryInterface.md) | |
| [`InitializerInterface`](./docs/classes/Zend/ServiceManager/InitializerInterface.md) | |
| [`MutableCreationOptionsInterface`](./docs/classes/Zend/ServiceManager/MutableCreationOptionsInterface.md) | |
| [`ServiceLocatorAwareInterface`](./docs/classes/Zend/ServiceManager/ServiceLocatorAwareInterface.md) | |
| [`ServiceLocatorInterface`](./docs/classes/Zend/ServiceManager/ServiceLocatorInterface.md) | Service locator interface|
| [`ServiceManagerAwareInterface`](./docs/classes/Zend/ServiceManager/ServiceManagerAwareInterface.md) | |

### \Zend\ServiceManager\Di

#### Classes

| Class | Description |
|-------|-------------|
| [`DiAbstractServiceFactory`](./docs/classes/Zend/ServiceManager/Di/DiAbstractServiceFactory.md) | |
| [`DiInstanceManagerProxy`](./docs/classes/Zend/ServiceManager/Di/DiInstanceManagerProxy.md) | |
| [`DiServiceFactory`](./docs/classes/Zend/ServiceManager/Di/DiServiceFactory.md) | |
| [`DiServiceInitializer`](./docs/classes/Zend/ServiceManager/Di/DiServiceInitializer.md) | |

### \Zend\ServiceManager\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`CircularDependencyFoundException`](./docs/classes/Zend/ServiceManager/Exception/CircularDependencyFoundException.md) | |
| [`CircularReferenceException`](./docs/classes/Zend/ServiceManager/Exception/CircularReferenceException.md) | |
| [`InvalidArgumentException`](./docs/classes/Zend/ServiceManager/Exception/InvalidArgumentException.md) | |
| [`InvalidServiceNameException`](./docs/classes/Zend/ServiceManager/Exception/InvalidServiceNameException.md) | |
| [`RuntimeException`](./docs/classes/Zend/ServiceManager/Exception/RuntimeException.md) | |
| [`ServiceLocatorUsageException`](./docs/classes/Zend/ServiceManager/Exception/ServiceLocatorUsageException.md) | |
| [`ServiceNotCreatedException`](./docs/classes/Zend/ServiceManager/Exception/ServiceNotCreatedException.md) | |
| [`ServiceNotFoundException`](./docs/classes/Zend/ServiceManager/Exception/ServiceNotFoundException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/ServiceManager/Exception/ExceptionInterface.md) | |

### \Zend\ServiceManager\Proxy

#### Classes

| Class | Description |
|-------|-------------|
| [`LazyServiceFactory`](./docs/classes/Zend/ServiceManager/Proxy/LazyServiceFactory.md) | Delegator factory responsible of instantiating lazy loading value holder proxies of<br />given services at runtime|
| [`LazyServiceFactoryFactory`](./docs/classes/Zend/ServiceManager/Proxy/LazyServiceFactoryFactory.md) | Service factory responsible of instantiating {@see \Zend\ServiceManager\Proxy\LazyServiceFactory}<br />and configuring it starting from application configuration|

### \Zend\Stdlib

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractOptions`](./docs/classes/Zend/Stdlib/AbstractOptions.md) | |
| [`ArrayObject`](./docs/classes/Zend/Stdlib/ArrayObject.md) | Custom framework ArrayObject implementation|
| [`ArrayStack`](./docs/classes/Zend/Stdlib/ArrayStack.md) | ArrayObject that acts as a stack with regards to iteration|
| [`ArrayUtils`](./docs/classes/Zend/Stdlib/ArrayUtils.md) | Utility class for testing and manipulation of PHP arrays.|
| [`CallbackHandler`](./docs/classes/Zend/Stdlib/CallbackHandler.md) | CallbackHandler|
| [`DateTime`](./docs/classes/Zend/Stdlib/DateTime.md) | DateTime|
| [`ErrorHandler`](./docs/classes/Zend/Stdlib/ErrorHandler.md) | ErrorHandler that can be used to catch internal PHP errors<br />and convert to an ErrorException instance.|
| [`FastPriorityQueue`](./docs/classes/Zend/Stdlib/FastPriorityQueue.md) | This is an efficient implementation of an integer priority queue in PHP|
| [`Glob`](./docs/classes/Zend/Stdlib/Glob.md) | Wrapper for glob with fallback if GLOB_BRACE is not available.|
| [`Message`](./docs/classes/Zend/Stdlib/Message.md) | |
| [`Parameters`](./docs/classes/Zend/Stdlib/Parameters.md) | |
| [`PriorityList`](./docs/classes/Zend/Stdlib/PriorityList.md) | |
| [`PriorityQueue`](./docs/classes/Zend/Stdlib/PriorityQueue.md) | Re-usable, serializable priority queue implementation|
| [`Request`](./docs/classes/Zend/Stdlib/Request.md) | |
| [`Response`](./docs/classes/Zend/Stdlib/Response.md) | |
| [`SplPriorityQueue`](./docs/classes/Zend/Stdlib/SplPriorityQueue.md) | Serializable version of SplPriorityQueue|
| [`SplQueue`](./docs/classes/Zend/Stdlib/SplQueue.md) | Serializable version of SplQueue|
| [`SplStack`](./docs/classes/Zend/Stdlib/SplStack.md) | Serializable version of SplStack|
| [`StringUtils`](./docs/classes/Zend/Stdlib/StringUtils.md) | Utility class for handling strings of different character encodings<br />using available PHP extensions.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ArraySerializableInterface`](./docs/classes/Zend/Stdlib/ArraySerializableInterface.md) | |
| [`DispatchableInterface`](./docs/classes/Zend/Stdlib/DispatchableInterface.md) | |
| [`InitializableInterface`](./docs/classes/Zend/Stdlib/InitializableInterface.md) | Interface to allow objects to have initialization logic|
| [`JsonSerializable`](./docs/classes/Zend/Stdlib/JsonSerializable.md) | |
| [`MessageInterface`](./docs/classes/Zend/Stdlib/MessageInterface.md) | |
| [`ParameterObjectInterface`](./docs/classes/Zend/Stdlib/ParameterObjectInterface.md) | |
| [`ParametersInterface`](./docs/classes/Zend/Stdlib/ParametersInterface.md) | |
| [`RequestInterface`](./docs/classes/Zend/Stdlib/RequestInterface.md) | |
| [`ResponseInterface`](./docs/classes/Zend/Stdlib/ResponseInterface.md) | |

### \Zend\Stdlib\ArrayUtils

#### Classes

| Class | Description |
|-------|-------------|
| [`MergeRemoveKey`](./docs/classes/Zend/Stdlib/ArrayUtils/MergeRemoveKey.md) | |
| [`MergeReplaceKey`](./docs/classes/Zend/Stdlib/ArrayUtils/MergeReplaceKey.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`MergeReplaceKeyInterface`](./docs/classes/Zend/Stdlib/ArrayUtils/MergeReplaceKeyInterface.md) | Marker interface: can be used to replace keys completely in {@see ArrayUtils::merge()} operations|

### \Zend\Stdlib\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](./docs/classes/Zend/Stdlib/Exception/BadMethodCallException.md) | Bad method call exception|
| [`DomainException`](./docs/classes/Zend/Stdlib/Exception/DomainException.md) | Domain exception|
| [`ExtensionNotLoadedException`](./docs/classes/Zend/Stdlib/Exception/ExtensionNotLoadedException.md) | Extension not loaded exception|
| [`InvalidArgumentException`](./docs/classes/Zend/Stdlib/Exception/InvalidArgumentException.md) | Invalid Argument Exception|
| [`InvalidCallbackException`](./docs/classes/Zend/Stdlib/Exception/InvalidCallbackException.md) | Invalid callback exception|
| [`LogicException`](./docs/classes/Zend/Stdlib/Exception/LogicException.md) | Logic exception|
| [`RuntimeException`](./docs/classes/Zend/Stdlib/Exception/RuntimeException.md) | Runtime exception|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/Stdlib/Exception/ExceptionInterface.md) | Exception marker interface|

### \Zend\Stdlib\Extractor

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtractionInterface`](./docs/classes/Zend/Stdlib/Extractor/ExtractionInterface.md) | |

### \Zend\Stdlib\Guard

#### Classes

| Class | Description |
|-------|-------------|
| [`GuardUtils`](./docs/classes/Zend/Stdlib/Guard/GuardUtils.md) | Static guard helper class|

#### Traits

| Trait | Description |
|-------|-------------|
| [`AllGuardsTrait`](./docs/classes/Zend/Stdlib/Guard/AllGuardsTrait.md) | An aggregate for all guard traits|
| [`ArrayOrTraversableGuardTrait`](./docs/classes/Zend/Stdlib/Guard/ArrayOrTraversableGuardTrait.md) | Provide a guard method for array or Traversable data|
| [`EmptyGuardTrait`](./docs/classes/Zend/Stdlib/Guard/EmptyGuardTrait.md) | Provide a guard method against empty data|
| [`NullGuardTrait`](./docs/classes/Zend/Stdlib/Guard/NullGuardTrait.md) | Provide a guard method against null data|

### \Zend\Stdlib\Hydrator

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractHydrator`](./docs/classes/Zend/Stdlib/Hydrator/AbstractHydrator.md) | |
| [`ArraySerializable`](./docs/classes/Zend/Stdlib/Hydrator/ArraySerializable.md) | |
| [`ClassMethods`](./docs/classes/Zend/Stdlib/Hydrator/ClassMethods.md) | |
| [`DelegatingHydrator`](./docs/classes/Zend/Stdlib/Hydrator/DelegatingHydrator.md) | |
| [`DelegatingHydratorFactory`](./docs/classes/Zend/Stdlib/Hydrator/DelegatingHydratorFactory.md) | |
| [`HydratorPluginManager`](./docs/classes/Zend/Stdlib/Hydrator/HydratorPluginManager.md) | Plugin manager implementation for hydrators.|
| [`ObjectProperty`](./docs/classes/Zend/Stdlib/Hydrator/ObjectProperty.md) | |
| [`Reflection`](./docs/classes/Zend/Stdlib/Hydrator/Reflection.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`HydratorAwareTrait`](./docs/classes/Zend/Stdlib/Hydrator/HydratorAwareTrait.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FilterEnabledInterface`](./docs/classes/Zend/Stdlib/Hydrator/FilterEnabledInterface.md) | |
| [`HydrationInterface`](./docs/classes/Zend/Stdlib/Hydrator/HydrationInterface.md) | |
| [`HydratorAwareInterface`](./docs/classes/Zend/Stdlib/Hydrator/HydratorAwareInterface.md) | |
| [`HydratorInterface`](./docs/classes/Zend/Stdlib/Hydrator/HydratorInterface.md) | |
| [`HydratorOptionsInterface`](./docs/classes/Zend/Stdlib/Hydrator/HydratorOptionsInterface.md) | |
| [`NamingStrategyEnabledInterface`](./docs/classes/Zend/Stdlib/Hydrator/NamingStrategyEnabledInterface.md) | |
| [`StrategyEnabledInterface`](./docs/classes/Zend/Stdlib/Hydrator/StrategyEnabledInterface.md) | |

### \Zend\Stdlib\Hydrator\Aggregate

#### Classes

| Class | Description |
|-------|-------------|
| [`AggregateHydrator`](./docs/classes/Zend/Stdlib/Hydrator/Aggregate/AggregateHydrator.md) | Aggregate hydrator that composes multiple hydrators via events|
| [`ExtractEvent`](./docs/classes/Zend/Stdlib/Hydrator/Aggregate/ExtractEvent.md) | Event triggered when the {@see \Zend\Stdlib\Hydrator\Aggregate\AggregateHydrator} extracts<br />data from an object|
| [`HydrateEvent`](./docs/classes/Zend/Stdlib/Hydrator/Aggregate/HydrateEvent.md) | Event triggered when the {@see \Zend\Stdlib\Hydrator\Aggregate\AggregateHydrator} hydrates<br />data into an object|
| [`HydratorListener`](./docs/classes/Zend/Stdlib/Hydrator/Aggregate/HydratorListener.md) | Aggregate listener wrapping around a hydrator. Listens<br />to {@see \Zend\Stdlib\Hydrator\Aggregate::EVENT_HYDRATE} and<br />{@see \Zend\Stdlib\Hydrator\Aggregate::EVENT_EXTRACT}|

### \Zend\Stdlib\Hydrator\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`FilterComposite`](./docs/classes/Zend/Stdlib/Hydrator/Filter/FilterComposite.md) | |
| [`GetFilter`](./docs/classes/Zend/Stdlib/Hydrator/Filter/GetFilter.md) | |
| [`HasFilter`](./docs/classes/Zend/Stdlib/Hydrator/Filter/HasFilter.md) | |
| [`IsFilter`](./docs/classes/Zend/Stdlib/Hydrator/Filter/IsFilter.md) | |
| [`MethodMatchFilter`](./docs/classes/Zend/Stdlib/Hydrator/Filter/MethodMatchFilter.md) | |
| [`NumberOfParameterFilter`](./docs/classes/Zend/Stdlib/Hydrator/Filter/NumberOfParameterFilter.md) | |
| [`OptionalParametersFilter`](./docs/classes/Zend/Stdlib/Hydrator/Filter/OptionalParametersFilter.md) | Filter that includes methods which have no parameters or only optional parameters|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`FilterInterface`](./docs/classes/Zend/Stdlib/Hydrator/Filter/FilterInterface.md) | |
| [`FilterProviderInterface`](./docs/classes/Zend/Stdlib/Hydrator/Filter/FilterProviderInterface.md) | |

### \Zend\Stdlib\Hydrator\Iterator

#### Classes

| Class | Description |
|-------|-------------|
| [`HydratingArrayIterator`](./docs/classes/Zend/Stdlib/Hydrator/Iterator/HydratingArrayIterator.md) | |
| [`HydratingIteratorIterator`](./docs/classes/Zend/Stdlib/Hydrator/Iterator/HydratingIteratorIterator.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`HydratingIteratorInterface`](./docs/classes/Zend/Stdlib/Hydrator/Iterator/HydratingIteratorInterface.md) | |

### \Zend\Stdlib\Hydrator\NamingStrategy

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayMapNamingStrategy`](./docs/classes/Zend/Stdlib/Hydrator/NamingStrategy/ArrayMapNamingStrategy.md) | |
| [`CompositeNamingStrategy`](./docs/classes/Zend/Stdlib/Hydrator/NamingStrategy/CompositeNamingStrategy.md) | |
| [`IdentityNamingStrategy`](./docs/classes/Zend/Stdlib/Hydrator/NamingStrategy/IdentityNamingStrategy.md) | |
| [`MapNamingStrategy`](./docs/classes/Zend/Stdlib/Hydrator/NamingStrategy/MapNamingStrategy.md) | |
| [`UnderscoreNamingStrategy`](./docs/classes/Zend/Stdlib/Hydrator/NamingStrategy/UnderscoreNamingStrategy.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`NamingStrategyInterface`](./docs/classes/Zend/Stdlib/Hydrator/NamingStrategy/NamingStrategyInterface.md) | Allow property extraction/hydration for hydrator|

### \Zend\Stdlib\Hydrator\Strategy

#### Classes

| Class | Description |
|-------|-------------|
| [`BooleanStrategy`](./docs/classes/Zend/Stdlib/Hydrator/Strategy/BooleanStrategy.md) | This Strategy extracts and hydrates int and string values to Boolean values|
| [`ClosureStrategy`](./docs/classes/Zend/Stdlib/Hydrator/Strategy/ClosureStrategy.md) | |
| [`DateTimeFormatterStrategy`](./docs/classes/Zend/Stdlib/Hydrator/Strategy/DateTimeFormatterStrategy.md) | |
| [`DefaultStrategy`](./docs/classes/Zend/Stdlib/Hydrator/Strategy/DefaultStrategy.md) | |
| [`ExplodeStrategy`](./docs/classes/Zend/Stdlib/Hydrator/Strategy/ExplodeStrategy.md) | |
| [`SerializableStrategy`](./docs/classes/Zend/Stdlib/Hydrator/Strategy/SerializableStrategy.md) | |
| [`StrategyChain`](./docs/classes/Zend/Stdlib/Hydrator/Strategy/StrategyChain.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`StrategyInterface`](./docs/classes/Zend/Stdlib/Hydrator/Strategy/StrategyInterface.md) | |

### \Zend\Stdlib\Hydrator\Strategy\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`InvalidArgumentException`](./docs/classes/Zend/Stdlib/Hydrator/Strategy/Exception/InvalidArgumentException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExceptionInterface`](./docs/classes/Zend/Stdlib/Hydrator/Strategy/Exception/ExceptionInterface.md) | |

### \Zend\Stdlib\StringWrapper

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractStringWrapper`](./docs/classes/Zend/Stdlib/StringWrapper/AbstractStringWrapper.md) | |
| [`Iconv`](./docs/classes/Zend/Stdlib/StringWrapper/Iconv.md) | |
| [`Intl`](./docs/classes/Zend/Stdlib/StringWrapper/Intl.md) | |
| [`MbString`](./docs/classes/Zend/Stdlib/StringWrapper/MbString.md) | |
| [`Native`](./docs/classes/Zend/Stdlib/StringWrapper/Native.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`StringWrapperInterface`](./docs/classes/Zend/Stdlib/StringWrapper/StringWrapperInterface.md) | |

### \phpDocumentor

#### Classes

| Class | Description |
|-------|-------------|
| [`Application`](./docs/classes/phpDocumentor/Application.md) | Application class for phpDocumentor.|
| [`Bootstrap`](./docs/classes/phpDocumentor/Bootstrap.md) | This class provides a bootstrap for all application who wish to interface with phpDocumentor.|
| [`Configuration`](./docs/classes/phpDocumentor/Configuration.md) | The definition for the configuration of phpDocumentor.|

### \phpDocumentor\Command

#### Classes

| Class | Description |
|-------|-------------|
| [`Command`](./docs/classes/phpDocumentor/Command/Command.md) | Base command for phpDocumentor commands.|

### \phpDocumentor\Command\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`ConfigurationHelper`](./docs/classes/phpDocumentor/Command/Helper/ConfigurationHelper.md) | Helper is the base class for all helper classes.|
| [`LoggerHelper`](./docs/classes/phpDocumentor/Command/Helper/LoggerHelper.md) | Helper is the base class for all helper classes.|

### \phpDocumentor\Command\Phar

#### Classes

| Class | Description |
|-------|-------------|
| [`UpdateCommand`](./docs/classes/phpDocumentor/Command/Phar/UpdateCommand.md) | Updates phpDocumentor.phar to the latest version.|

### \phpDocumentor\Command\Project

#### Classes

| Class | Description |
|-------|-------------|
| [`RunCommand`](./docs/classes/phpDocumentor/Command/Project/RunCommand.md) | Parse and transform the given directory (-d&amp;#124;-f) to the given location (-t).|

### \phpDocumentor\Compiler

#### Classes

| Class | Description |
|-------|-------------|
| [`Compiler`](./docs/classes/phpDocumentor/Compiler/Compiler.md) | Contains a series of compiler steps in a specific order; ready to be executed during transformation.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CompilerPassInterface`](./docs/classes/phpDocumentor/Compiler/CompilerPassInterface.md) | Represents a single pass/business rule to be executed by the Compiler.|

### \phpDocumentor\Compiler\Linker

#### Classes

| Class | Description |
|-------|-------------|
| [`Linker`](./docs/classes/phpDocumentor/Compiler/Linker/Linker.md) | The linker contains all rules to replace FQSENs in the ProjectDescriptor with aliases to objects.|

### \phpDocumentor\Compiler\Pass

#### Classes

| Class | Description |
|-------|-------------|
| [`Debug`](./docs/classes/phpDocumentor/Compiler/Pass/Debug.md) | This class is responsible for sending statistical information to the log.|
| [`ElementsIndexBuilder`](./docs/classes/phpDocumentor/Compiler/Pass/ElementsIndexBuilder.md) | This class constructs the index &#039;elements&#039; and populates it with all Structural Elements.|
| [`ExampleTagsEnricher`](./docs/classes/phpDocumentor/Compiler/Pass/ExampleTagsEnricher.md) | This index builder collects all examples from tags and inserts them into the example index.|
| [`MarkerFromTagsExtractor`](./docs/classes/phpDocumentor/Compiler/Pass/MarkerFromTagsExtractor.md) | This index builder collects all markers from tags and inserts them into the marker index.|
| [`NamespaceTreeBuilder`](./docs/classes/phpDocumentor/Compiler/Pass/NamespaceTreeBuilder.md) | Rebuilds the namespace tree from the elements found in files.|
| [`PackageTreeBuilder`](./docs/classes/phpDocumentor/Compiler/Pass/PackageTreeBuilder.md) | Rebuilds the package tree from the elements found in files.|
| [`ResolveInlineLinkAndSeeTags`](./docs/classes/phpDocumentor/Compiler/Pass/ResolveInlineLinkAndSeeTags.md) | This step in the compilation process iterates through all elements and scans their descriptions for an inline `@see`<br />or `@link` tag and resolves them to a markdown link.|

### \phpDocumentor\Configuration

#### Classes

| Class | Description |
|-------|-------------|
| [`Loader`](./docs/classes/phpDocumentor/Configuration/Loader.md) | Loads the template and user-defined configuration file from disk and creates a Configuration object from it.|
| [`Logging`](./docs/classes/phpDocumentor/Configuration/Logging.md) | Configuration definition for the logger.|
| [`Merger`](./docs/classes/phpDocumentor/Configuration/Merger.md) | Deep-merges any variable.|
| [`ServiceProvider`](./docs/classes/phpDocumentor/Configuration/ServiceProvider.md) | Provides a series of services in order to handle the configuration for phpDocumentor.|

### \phpDocumentor\Configuration\Merger\Annotation

#### Classes

| Class | Description |
|-------|-------------|
| [`Replace`](./docs/classes/phpDocumentor/Configuration/Merger/Annotation/Replace.md) | Declares that, when merging objects, the property with this annotation should be replaced and not merged with the<br />property of the same name in the secondary object.|

### \phpDocumentor\Console\Input

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgvInput`](./docs/classes/phpDocumentor/Console/Input/ArgvInput.md) | Argv input for the Console component of Symfony adapted to phpDocumentor.|

### \phpDocumentor\Console\Output

#### Classes

| Class | Description |
|-------|-------------|
| [`Output`](./docs/classes/phpDocumentor/Console/Output/Output.md) | A custom output class for our Console object that supports writing to the log.|

### \phpDocumentor\Descriptor

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgumentDescriptor`](./docs/classes/phpDocumentor/Descriptor/ArgumentDescriptor.md) | Descriptor representing a single Argument of a method or function.|
| [`ClassDescriptor`](./docs/classes/phpDocumentor/Descriptor/ClassDescriptor.md) | Descriptor representing a Class.|
| [`Collection`](./docs/classes/phpDocumentor/Descriptor/Collection.md) | Represents an easily accessible collection of elements.|
| [`ConstantDescriptor`](./docs/classes/phpDocumentor/Descriptor/ConstantDescriptor.md) | Descriptor representing a constant|
| [`DescriptorAbstract`](./docs/classes/phpDocumentor/Descriptor/DescriptorAbstract.md) | Base class for descriptors containing the most used options.|
| [`FileDescriptor`](./docs/classes/phpDocumentor/Descriptor/FileDescriptor.md) | Represents a file in the project.|
| [`FunctionDescriptor`](./docs/classes/phpDocumentor/Descriptor/FunctionDescriptor.md) | Descriptor representing a function.|
| [`InterfaceDescriptor`](./docs/classes/phpDocumentor/Descriptor/InterfaceDescriptor.md) | Descriptor representing an Interface.|
| [`MethodDescriptor`](./docs/classes/phpDocumentor/Descriptor/MethodDescriptor.md) | Descriptor representing a Method in a Class, Interface or Trait.|
| [`NamespaceDescriptor`](./docs/classes/phpDocumentor/Descriptor/NamespaceDescriptor.md) | Represents a namespace and its children for a project.|
| [`PackageDescriptor`](./docs/classes/phpDocumentor/Descriptor/PackageDescriptor.md) | Represents the package for a class, trait, interface or file.|
| [`ProjectAnalyzer`](./docs/classes/phpDocumentor/Descriptor/ProjectAnalyzer.md) | Analyzes a Project Descriptor and collects key information.|
| [`ProjectDescriptor`](./docs/classes/phpDocumentor/Descriptor/ProjectDescriptor.md) | Represents the entire project with its files, namespaces and indexes.|
| [`ProjectDescriptorBuilder`](./docs/classes/phpDocumentor/Descriptor/ProjectDescriptorBuilder.md) | Builds a Project Descriptor and underlying tree.|
| [`PropertyDescriptor`](./docs/classes/phpDocumentor/Descriptor/PropertyDescriptor.md) | Descriptor representing a property.|
| [`ServiceProvider`](./docs/classes/phpDocumentor/Descriptor/ServiceProvider.md) | This provider is responsible for registering the Descriptor component with the given Application.|
| [`TagDescriptor`](./docs/classes/phpDocumentor/Descriptor/TagDescriptor.md) | Base class for any tag descriptor and used when a tag has no specific descriptor.|
| [`TraitDescriptor`](./docs/classes/phpDocumentor/Descriptor/TraitDescriptor.md) | Descriptor representing a Trait.|

### \phpDocumentor\Descriptor\Builder

#### Classes

| Class | Description |
|-------|-------------|
| [`AssemblerAbstract`](./docs/classes/phpDocumentor/Descriptor/Builder/AssemblerAbstract.md) | Base class for all assemblers.|
| [`AssemblerFactory`](./docs/classes/phpDocumentor/Descriptor/Builder/AssemblerFactory.md) | Attempts to retrieve an Assembler for the provided criteria.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AssemblerInterface`](./docs/classes/phpDocumentor/Descriptor/Builder/AssemblerInterface.md) | Interface for Assembler classes that transform data to specific Descriptor types.|

### \phpDocumentor\Descriptor\Builder\Reflector

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgumentAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/ArgumentAssembler.md) | Assembles an ArgumentDescriptor using an ArgumentReflector and ParamDescriptors.|
| [`AssemblerAbstract`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/AssemblerAbstract.md) | Base class for all assemblers.|
| [`ClassAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/ClassAssembler.md) | Assembles an ClassDescriptor using an ClassReflector.|
| [`ConstantAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/ConstantAssembler.md) | Assembles a ConstantDescriptor from a ConstantReflector.|
| [`FileAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/FileAssembler.md) | Assembles an FileDescriptor using an FileReflector and ParamDescriptors.|
| [`FunctionAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/FunctionAssembler.md) | Assembles a FunctionDescriptor from a FunctionReflector.|
| [`InterfaceAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/InterfaceAssembler.md) | Assembles an InterfaceDescriptor using an InterfaceReflector.|
| [`MethodAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/MethodAssembler.md) | Assembles a MethodDescriptor from a MethodReflector.|
| [`PropertyAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/PropertyAssembler.md) | Assembles a PropertyDescriptor from a PropertyReflector.|
| [`TraitAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/TraitAssembler.md) | Assembles an TraitDescriptor using an TraitReflector.|

### \phpDocumentor\Descriptor\Builder\Reflector\Tags

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthorAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/AuthorAssembler.md) | Constructs a new descriptor from the Reflector for an `@author` tag.|
| [`DeprecatedAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/DeprecatedAssembler.md) | Constructs a new descriptor from the Reflector for an `@deprecated` tag.|
| [`ExampleAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/ExampleAssembler.md) | This class collects data from the example tag definition of the Reflection library, tries to find the correlating<br />example file on disk and creates a complete Descriptor from that.|
| [`GenericTagAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/GenericTagAssembler.md) | Base class for all assemblers.|
| [`LinkAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/LinkAssembler.md) | Constructs a new descriptor from the Reflector for an `@link` tag.|
| [`MethodAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/MethodAssembler.md) | Constructs a new descriptor from the Reflector for an `@method` tag.|
| [`ParamAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/ParamAssembler.md) | Constructs a new descriptor from the Reflector for an `@param` tag.|
| [`PropertyAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/PropertyAssembler.md) | Constructs a new descriptor from the Reflector for an `@property` tag.|
| [`ReturnAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/ReturnAssembler.md) | Constructs a new descriptor from the Reflector for an `@return` tag.|
| [`SeeAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/SeeAssembler.md) | Constructs a new Descriptor from a Reflector object for the `@see` tag.|
| [`SinceAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/SinceAssembler.md) | Constructs a new descriptor from the Reflector for an `@since` tag.|
| [`ThrowsAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/ThrowsAssembler.md) | Constructs a new descriptor from the Reflector for an `@throws` tag.|
| [`TypeCollectionAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/TypeCollectionAssembler.md) | Creates a Collection of type-related value objects for the given Type Collection from the Reflector.|
| [`UsesAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/UsesAssembler.md) | Base class for all assemblers.|
| [`VarAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/VarAssembler.md) | Constructs a new descriptor from the Reflector for an `@var` tag.|
| [`VersionAssembler`](./docs/classes/phpDocumentor/Descriptor/Builder/Reflector/Tags/VersionAssembler.md) | Constructs a new descriptor from the Reflector for an `@version` tag.|

### \phpDocumentor\Descriptor\Cache

#### Classes

| Class | Description |
|-------|-------------|
| [`ProjectDescriptorMapper`](./docs/classes/phpDocumentor/Descriptor/Cache/ProjectDescriptorMapper.md) | Maps a projectDescriptor to and from a cache instance.|

### \phpDocumentor\Descriptor\Example

#### Classes

| Class | Description |
|-------|-------------|
| [`Finder`](./docs/classes/phpDocumentor/Descriptor/Example/Finder.md) | Class used to find an example file&#039;s location based on a given ExampleDescriptor.|

### \phpDocumentor\Descriptor\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`MissingDependencyException`](./docs/classes/phpDocumentor/Descriptor/Exception/MissingDependencyException.md) | This exception is thrown when a required dependency is not included.|

### \phpDocumentor\Descriptor\Filter

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassFactory`](./docs/classes/phpDocumentor/Descriptor/Filter/ClassFactory.md) | Retrieves a series of filters to manipulate a specific Descriptor with during building.|
| [`Filter`](./docs/classes/phpDocumentor/Descriptor/Filter/Filter.md) | Filter used to manipulate a descriptor after being build.|
| [`StripIgnore`](./docs/classes/phpDocumentor/Descriptor/Filter/StripIgnore.md) | Strips any Descriptor if the ignore tag is present with that element.|
| [`StripInternal`](./docs/classes/phpDocumentor/Descriptor/Filter/StripInternal.md) | Filters a Descriptor when the @internal inline tag, or normal tag, is used.|
| [`StripOnVisibility`](./docs/classes/phpDocumentor/Descriptor/Filter/StripOnVisibility.md) | Strips any Descriptor if their visibility is allowed according to the ProjectDescriptorBuilder.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Filterable`](./docs/classes/phpDocumentor/Descriptor/Filter/Filterable.md) | Interface to determine which elements can be filtered and to provide a way to set errors on the descriptor.|

### \phpDocumentor\Descriptor\Interfaces

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ArgumentInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/ArgumentInterface.md) | Describes the public interface for a descriptor of an Argument.|
| [`ChildInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/ChildInterface.md) | Describes the public interface for any descriptor that is the child is another.|
| [`ClassInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/ClassInterface.md) | Common interface representing the description of a class.|
| [`ConstantInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/ConstantInterface.md) | Descriptor representing a constant on a class, trait, property or file.|
| [`ContainerInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/ContainerInterface.md) | Interface representing the common interface for all elements that can contain sub-elements.|
| [`ElementInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/ElementInterface.md) | Represents the public interface to which all descriptors should be held.|
| [`FileInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/FileInterface.md) | Describes the public interface for a description of a File.|
| [`FunctionInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/FunctionInterface.md) | Descriptor representing a global function in a file.|
| [`InterfaceInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/InterfaceInterface.md) | Represents the public interface for an interface descriptor.|
| [`MethodInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/MethodInterface.md) | Describes the public interface of the description for a method.|
| [`NamespaceInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/NamespaceInterface.md) | Describes the public interface for the description of a namespace.|
| [`PackageInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/PackageInterface.md) | Describes the public interface for a package descriptor.|
| [`ProjectInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/ProjectInterface.md) | Describes the public interface for the description of a project.|
| [`PropertyInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/PropertyInterface.md) | Descriptor representing a property on a class or trait.|
| [`TraitInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/TraitInterface.md) | Public interface definition for object representing traits.|
| [`TypeInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/TypeInterface.md) | |
| [`VisibilityInterface`](./docs/classes/phpDocumentor/Descriptor/Interfaces/VisibilityInterface.md) | |

### \phpDocumentor\Descriptor\ProjectDescriptor

#### Classes

| Class | Description |
|-------|-------------|
| [`Settings`](./docs/classes/phpDocumentor/Descriptor/ProjectDescriptor/Settings.md) | Contains the Settings for the current Project.|

### \phpDocumentor\Descriptor\Tag

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthorDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/AuthorDescriptor.md) | Descriptor representing the author tag with a descriptor.|
| [`DeprecatedDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/DeprecatedDescriptor.md) | Descriptor representing the deprecated tag with a descriptor.|
| [`ExampleDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/ExampleDescriptor.md) | Descriptor representing the example tag with a descriptor.|
| [`LinkDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/LinkDescriptor.md) | Descriptor representing the link tag with a descriptor.|
| [`MethodDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/MethodDescriptor.md) | Base class for any tag descriptor and used when a tag has no specific descriptor.|
| [`ParamDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/ParamDescriptor.md) | Descriptor representing the param tag with a function or method.|
| [`PropertyDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/PropertyDescriptor.md) | Descriptor representing the property tag on a class or trait.|
| [`ReturnDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/ReturnDescriptor.md) | Descriptor representing the return tag on a function or method.|
| [`SeeDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/SeeDescriptor.md) | Base class for any tag descriptor and used when a tag has no specific descriptor.|
| [`SinceDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/SinceDescriptor.md) | Descriptor representing the since tag with another descriptor.|
| [`ThrowsDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/ThrowsDescriptor.md) | Descriptor representing the throws tag on a class or trait.|
| [`UsesDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/UsesDescriptor.md) | Descriptor representing the uses tag on any element.|
| [`VarDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/VarDescriptor.md) | Descriptor representing the var tag on a property.|
| [`VersionDescriptor`](./docs/classes/phpDocumentor/Descriptor/Tag/VersionDescriptor.md) | Descriptor representing the version tag on a class, interface, trait or file.|

### \phpDocumentor\Descriptor\Tag\BaseTypes

#### Classes

| Class | Description |
|-------|-------------|
| [`TypedAbstract`](./docs/classes/phpDocumentor/Descriptor/Tag/BaseTypes/TypedAbstract.md) | Base descriptor for tags that have a type associated with them.|
| [`TypedVariableAbstract`](./docs/classes/phpDocumentor/Descriptor/Tag/BaseTypes/TypedVariableAbstract.md) | Abstract class for Descriptors with a type and variable name.|

### \phpDocumentor\Descriptor\Type

#### Classes

| Class | Description |
|-------|-------------|
| [`BooleanDescriptor`](./docs/classes/phpDocumentor/Descriptor/Type/BooleanDescriptor.md) | A type representing a boolean.|
| [`CollectionDescriptor`](./docs/classes/phpDocumentor/Descriptor/Type/CollectionDescriptor.md) | Descriptor representing a collection or compound type of collection object.|
| [`FloatDescriptor`](./docs/classes/phpDocumentor/Descriptor/Type/FloatDescriptor.md) | |
| [`IntegerDescriptor`](./docs/classes/phpDocumentor/Descriptor/Type/IntegerDescriptor.md) | |
| [`StringDescriptor`](./docs/classes/phpDocumentor/Descriptor/Type/StringDescriptor.md) | |
| [`UnknownTypeDescriptor`](./docs/classes/phpDocumentor/Descriptor/Type/UnknownTypeDescriptor.md) | This class represents any Type that could not be identified.|

### \phpDocumentor\Descriptor\Validator

#### Classes

| Class | Description |
|-------|-------------|
| [`Error`](./docs/classes/phpDocumentor/Descriptor/Validator/Error.md) | Struct to record a validation error.|

### \phpDocumentor\Event

#### Classes

| Class | Description |
|-------|-------------|
| [`DebugEvent`](./docs/classes/phpDocumentor/Event/DebugEvent.md) | Event representing some debugging information for phpDocumentor.|
| [`Dispatcher`](./docs/classes/phpDocumentor/Event/Dispatcher.md) | Event Dispatching class.|
| [`EventAbstract`](./docs/classes/phpDocumentor/Event/EventAbstract.md) | Abstract class representing the base elements of a phpDocumentor event.|
| [`LogEvent`](./docs/classes/phpDocumentor/Event/LogEvent.md) | Logging event for phpDocumentor where information is output to the log or<br />stdout.|

### \phpDocumentor\Fileset

#### Classes

| Class | Description |
|-------|-------------|
| [`Collection`](./docs/classes/phpDocumentor/Fileset/Collection.md) | Files container handling directory scanning, project root detection and ignores.|
| [`CollectionTest`](./docs/classes/phpDocumentor/Fileset/CollectionTest.md) | Test case for Collection class.|
| [`File`](./docs/classes/phpDocumentor/Fileset/File.md) | |
| [`FileTest`](./docs/classes/phpDocumentor/Fileset/FileTest.md) | Test case for File class.|

### \phpDocumentor\Fileset\Collection

#### Classes

| Class | Description |
|-------|-------------|
| [`IgnorePatterns`](./docs/classes/phpDocumentor/Fileset/Collection/IgnorePatterns.md) | |
| [`IgnorePatternsTest`](./docs/classes/phpDocumentor/Fileset/Collection/IgnorePatternsTest.md) | Test case for IgnorePatterns class.|

### \phpDocumentor\GraphViz

#### Classes

| Class | Description |
|-------|-------------|
| [`Attribute`](./docs/classes/phpDocumentor/GraphViz/Attribute.md) | Class representing a single GraphViz attribute.|
| [`Edge`](./docs/classes/phpDocumentor/GraphViz/Edge.md) | Class representing an edge (arrow, line).|
| [`Exception`](./docs/classes/phpDocumentor/GraphViz/Exception.md) | Class representing an exception in this GraphViz component.|
| [`Graph`](./docs/classes/phpDocumentor/GraphViz/Graph.md) | Class representing a graph; this may be a main graph but also a subgraph.|
| [`GraphTest`](./docs/classes/phpDocumentor/GraphViz/GraphTest.md) | Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2012-12-09 at 19:06:57.|
| [`Node`](./docs/classes/phpDocumentor/GraphViz/Node.md) | Class representing a node/element in a graph.|

### \phpDocumentor\GraphViz\Test

#### Classes

| Class | Description |
|-------|-------------|
| [`AttributeTest`](./docs/classes/phpDocumentor/GraphViz/Test/AttributeTest.md) | Test for the the class representing a GraphViz attribute.|
| [`EdgeTest`](./docs/classes/phpDocumentor/GraphViz/Test/EdgeTest.md) | Test for the the class representing a GraphViz edge (vertex).|
| [`NodeTest`](./docs/classes/phpDocumentor/GraphViz/Test/NodeTest.md) | Test for the the class representing a GraphViz node.|

### \phpDocumentor\Parser

#### Classes

| Class | Description |
|-------|-------------|
| [`Configuration`](./docs/classes/phpDocumentor/Parser/Configuration.md) | Configuration definition for the parser.|
| [`Exception`](./docs/classes/phpDocumentor/Parser/Exception.md) | Provides the basic exception for the parser package.|
| [`File`](./docs/classes/phpDocumentor/Parser/File.md) | Parses a single file into a FileDescriptor and adds it to the given ProjectBuilder.|
| [`Parser`](./docs/classes/phpDocumentor/Parser/Parser.md) | Class responsible for parsing the given file or files to the intermediate<br />structure file.|
| [`ServiceProvider`](./docs/classes/phpDocumentor/Parser/ServiceProvider.md) | This provider is responsible for registering the parser component with the given Application.|

### \phpDocumentor\Parser\Command\Project

#### Classes

| Class | Description |
|-------|-------------|
| [`ParseCommand`](./docs/classes/phpDocumentor/Parser/Command/Project/ParseCommand.md) | Parses the given source code and creates a structure file.|

### \phpDocumentor\Parser\Configuration

#### Classes

| Class | Description |
|-------|-------------|
| [`Files`](./docs/classes/phpDocumentor/Parser/Configuration/Files.md) | Represents the settings in the phpdoc.xml related to finding the files that are to be parsed.|

### \phpDocumentor\Parser\Event

#### Classes

| Class | Description |
|-------|-------------|
| [`PreFileEvent`](./docs/classes/phpDocumentor/Parser/Event/PreFileEvent.md) | Event thrown before the parsing of an individual file.|

### \phpDocumentor\Parser\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FilesNotFoundException`](./docs/classes/phpDocumentor/Parser/Exception/FilesNotFoundException.md) | Exception that is thrown when the parser expects files but is unable to find them.|
| [`MissingDependencyException`](./docs/classes/phpDocumentor/Parser/Exception/MissingDependencyException.md) | This exception is thrown when a required dependency is not included.|

### \phpDocumentor\Parser\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`ParserPopulator`](./docs/classes/phpDocumentor/Parser/Util/ParserPopulator.md) | |

### \phpDocumentor\Partials

#### Classes

| Class | Description |
|-------|-------------|
| [`Collection`](./docs/classes/phpDocumentor/Partials/Collection.md) | Represents an easily accessible collection of partials.|
| [`Partial`](./docs/classes/phpDocumentor/Partials/Partial.md) | |
| [`ServiceProvider`](./docs/classes/phpDocumentor/Partials/ServiceProvider.md) | This provider is responsible for registering the partials component with the given Application.|

### \phpDocumentor\Partials\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`MissingNameForPartialException`](./docs/classes/phpDocumentor/Partials/Exception/MissingNameForPartialException.md) | This exception is thrown when a required name is not set.|

### \phpDocumentor\Plugin

#### Classes

| Class | Description |
|-------|-------------|
| [`Parameter`](./docs/classes/phpDocumentor/Plugin/Parameter.md) | Model representing a plugin parameter|
| [`Plugin`](./docs/classes/phpDocumentor/Plugin/Plugin.md) | |
| [`ServiceProvider`](./docs/classes/phpDocumentor/Plugin/ServiceProvider.md) | |

### \phpDocumentor\Plugin\Core

#### Classes

| Class | Description |
|-------|-------------|
| [`Exception`](./docs/classes/phpDocumentor/Plugin/Core/Exception.md) | Exception object for the Core Plugin.|
| [`ServiceProvider`](./docs/classes/phpDocumentor/Plugin/Core/ServiceProvider.md) | Register all services and subservices necessary to get phpDocumentor up and running.|

### \phpDocumentor\Plugin\Core\Descriptor\Validator

#### Classes

| Class | Description |
|-------|-------------|
| [`ValidationValueObject`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/ValidationValueObject.md) | |
| [`ValidatorAbstract`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/ValidatorAbstract.md) | Base class for DocBlock Validations.|

### \phpDocumentor\Plugin\Core\Descriptor\Validator\Constraints\Classes

#### Classes

| Class | Description |
|-------|-------------|
| [`HasPackageWithSubpackage`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Classes/HasPackageWithSubpackage.md) | Validates whether a file, class, interface or trait always has a package if there is a subpackage present.|
| [`HasPackageWithSubpackageValidator`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Classes/HasPackageWithSubpackageValidator.md) | Validates whether a file, class, interface or trait always has a package if there is a subpackage present.|
| [`HasSinglePackage`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Classes/HasSinglePackage.md) | Validates whether a file, class, interface or trait has not more than ! package tags.|
| [`HasSinglePackageValidator`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Classes/HasSinglePackageValidator.md) | Validates whether a file, class, interface or trait has not more than 1 package tags.|
| [`HasSingleSubpackage`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Classes/HasSingleSubpackage.md) | Validates whether a file, class, interface or trait has not more than 1 subpackage tags.|
| [`HasSingleSubpackageValidator`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Classes/HasSingleSubpackageValidator.md) | Validates whether a file, class, interface or trait has not more than 1 subpackage tags.|

### \phpDocumentor\Plugin\Core\Descriptor\Validator\Constraints\Functions

#### Classes

| Class | Description |
|-------|-------------|
| [`AreAllArgumentsValid`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/AreAllArgumentsValid.md) | Validates whether a function has a default return type in the docblock present.|
| [`AreAllArgumentsValidValidator`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/AreAllArgumentsValidValidator.md) | Base class for constraint validators.|
| [`DoesArgumentNameMatchParam`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/DoesArgumentNameMatchParam.md) | Validates whether a function has a default return type in the docblock present.|
| [`DoesArgumentNameMatchParamValidator`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/DoesArgumentNameMatchParamValidator.md) | Base class for constraint validators.|
| [`DoesArgumentTypehintMatchParam`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/DoesArgumentTypehintMatchParam.md) | Checks the typehint of the argument versus the @param tag.|
| [`DoesArgumentTypehintMatchParamValidator`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/DoesArgumentTypehintMatchParamValidator.md) | Base class for constraint validators.|
| [`DoesParamsExists`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/DoesParamsExists.md) | Validates whether a function has a default return type in the docblock present.|
| [`DoesParamsExistsValidator`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/DoesParamsExistsValidator.md) | Base class for constraint validators.|
| [`IsArgumentInDocBlock`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/IsArgumentInDocBlock.md) | Validates whether a function has a missing argument in the docblock.|
| [`IsArgumentInDocBlockValidator`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/IsArgumentInDocBlockValidator.md) | Validates if a Method or Function&#039;s arguments all have an accompanying param tag in the DocBlock.|
| [`IsParamTypeNotAnIdeDefault`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/IsParamTypeNotAnIdeDefault.md) | Validates whether a function has a default param type in the docblock present.|
| [`IsParamTypeNotAnIdeDefaultValidator`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/IsParamTypeNotAnIdeDefaultValidator.md) | Validates whether the type for a param tag with a Method or Function is not a known default.|
| [`IsReturnTypeNotAnIdeDefault`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/IsReturnTypeNotAnIdeDefault.md) | Validates whether a function has a default return type in the docblock present.|
| [`IsReturnTypeNotAnIdeDefaultValidator`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Functions/IsReturnTypeNotAnIdeDefaultValidator.md) | Base class for constraint validators.|

### \phpDocumentor\Plugin\Core\Descriptor\Validator\Constraints\Property

#### Classes

| Class | Description |
|-------|-------------|
| [`HasSummary`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Property/HasSummary.md) | Detects whether a property has a summary, or an `@var` tag with a description.|
| [`HasSummaryValidator`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Constraints/Property/HasSummaryValidator.md) | Validates whether a property has a summary, or an `@var` tag with a description.|

### \phpDocumentor\Plugin\Core\Descriptor\Validator\Functions

#### Classes

| Class | Description |
|-------|-------------|
| [`AreAllArgumentsValid`](./docs/classes/phpDocumentor/Plugin/Core/Descriptor/Validator/Functions/AreAllArgumentsValid.md) | |

### \phpDocumentor\Plugin\Core\Transformer\Behaviour\Tag

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthorTag`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/AuthorTag.md) | Behaviour that links to email addresses in the @author tag.|
| [`CoversTag`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/CoversTag.md) | Behaviour that adds support for the @covers tag|
| [`IgnoreTag`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/IgnoreTag.md) | Behaviour that adds support for @ignore tag.|
| [`InternalTag`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/InternalTag.md) | Behaviour that adds support for @internal inline tag.|
| [`LicenseTag`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/LicenseTag.md) | Behaviour that enables links to URLs in the @license tag.|
| [`MethodTag`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/MethodTag.md) | Behaviour that adds support for the @method tag|
| [`ParamTag`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/ParamTag.md) | Behaviour that adds support for the @param tags.|
| [`PropertyTag`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/PropertyTag.md) | Behaviour that adds support for the property tag|
| [`ReturnTag`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/ReturnTag.md) | Behaviour that adds support for the return tag|
| [`UsesTag`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/UsesTag.md) | Behaviour that adds support for the uses tag|
| [`VarTag`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Behaviour/Tag/VarTag.md) | Behaviour that adds support for the @method tag|

### \phpDocumentor\Plugin\Core\Transformer\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`Checkstyle`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Checkstyle.md) | Checkstyle transformation writer; generates checkstyle report|
| [`FileIo`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/FileIo.md) | Writer containing file system operations.|
| [`Pathfinder`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Pathfinder.md) | |
| [`Sourcecode`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Sourcecode.md) | Sourcecode transformation writer; generates syntax highlighted source files in a destination&#039;s subfolder.|
| [`Statistics`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Statistics.md) | Statistics transformation writer; generates statistic report as XML.|
| [`Xml`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml.md) | Converts the structural information of phpDocumentor into an XML file.|
| [`Xsl`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xsl.md) | XSL transformation writer; generates static HTML out of the structure and XSL templates.|

### \phpDocumentor\Plugin\Core\Transformer\Writer\Xml

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgumentConverter`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/ArgumentConverter.md) | Converter used to create an XML Element representing a method or function argument.|
| [`ConstantConverter`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/ConstantConverter.md) | Converter used to create an XML Element representing the constant and its DocBlock.|
| [`DocBlockConverter`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/DocBlockConverter.md) | Converter used to create an XML Element representing a DocBlock and its tags.|
| [`InterfaceConverter`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/InterfaceConverter.md) | Converter used to create an XML Element representing the interface and its constants, Methods and DocBlock.|
| [`MethodConverter`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/MethodConverter.md) | Converter used to create an XML Element representing the method, its arguments and its DocBlock.|
| [`PropertyConverter`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/PropertyConverter.md) | Converter used to create an XML Element representing the property and its DocBlock.|
| [`TagConverter`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/TagConverter.md) | Creates an XML Element &#039;tag&#039; and appends it to the provided parent element.|
| [`TraitConverter`](./docs/classes/phpDocumentor/Plugin/Core/Transformer/Writer/Xml/TraitConverter.md) | Converter used to create an XML Element representing the Trait and its Methods, Properties and DocBlock.|

### \phpDocumentor\Plugin\Core\Xslt

#### Classes

| Class | Description |
|-------|-------------|
| [`Extension`](./docs/classes/phpDocumentor/Plugin/Core/Xslt/Extension.md) | XSLT filters that can be used inside a template.|

### \phpDocumentor\Plugin\Graphs

#### Classes

| Class | Description |
|-------|-------------|
| [`ServiceProvider`](./docs/classes/phpDocumentor/Plugin/Graphs/ServiceProvider.md) | |

### \phpDocumentor\Plugin\Graphs\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`Graph`](./docs/classes/phpDocumentor/Plugin/Graphs/Writer/Graph.md) | Writer responsible for generating various graphs.|

### \phpDocumentor\Plugin\LegacyNamespaceConverter

#### Classes

| Class | Description |
|-------|-------------|
| [`LegacyNamespaceFilter`](./docs/classes/phpDocumentor/Plugin/LegacyNamespaceConverter/LegacyNamespaceFilter.md) | Converts elements with underscores into a namespaced version.|
| [`ServiceProvider`](./docs/classes/phpDocumentor/Plugin/LegacyNamespaceConverter/ServiceProvider.md) | Converts all underscored class names into namespaces.|

### \phpDocumentor\Plugin\LegacyNamespaceConverter\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`LegacyNamespaceFilterTest`](./docs/classes/phpDocumentor/Plugin/LegacyNamespaceConverter/Tests/LegacyNamespaceFilterTest.md) | Tests the phpDocumentor\Plugin\LegacyNamespaceConverter\LegacyNamespaceFilter class.|

### \phpDocumentor\Plugin\Scrybe

#### Classes

| Class | Description |
|-------|-------------|
| [`ServiceProvider`](./docs/classes/phpDocumentor/Plugin/Scrybe/ServiceProvider.md) | Creates and binds the components for the generation of manuals.|

### \phpDocumentor\Plugin\Scrybe\Command\Manual

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseConvertCommand`](./docs/classes/phpDocumentor/Plugin/Scrybe/Command/Manual/BaseConvertCommand.md) | Abstract Command class containing the scaffolding for the subsequent converting commands.|
| [`ToHtmlCommand`](./docs/classes/phpDocumentor/Plugin/Scrybe/Command/Manual/ToHtmlCommand.md) | Command used to tell the application to convert from a format to HTML.|
| [`ToLatexCommand`](./docs/classes/phpDocumentor/Plugin/Scrybe/Command/Manual/ToLatexCommand.md) | Command used to tell the application to convert from a format to Latex.|
| [`ToPdfCommand`](./docs/classes/phpDocumentor/Plugin/Scrybe/Command/Manual/ToPdfCommand.md) | Command used to tell the application to convert from a format to PDF.|

### \phpDocumentor\Plugin\Scrybe\Converter

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseConverter`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/BaseConverter.md) | |
| [`Factory`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Factory.md) | This factory attempts to create a converter given an input and output format and return that.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ConverterInterface`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/ConverterInterface.md) | This interface provides a basic contract between the Converters and all classes that want to use them.|
| [`ToHtmlInterface`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/ToHtmlInterface.md) | |
| [`ToLatexInterface`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/ToLatexInterface.md) | Interface that dictates the custom options that all converters that convert to Latex should have.|
| [`ToPdfInterface`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/ToPdfInterface.md) | Interface that dictates the custom options that all converters that convert to Latex should have.|

### \phpDocumentor\Plugin\Scrybe\Converter\Definition

#### Classes

| Class | Description |
|-------|-------------|
| [`Definition`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Definition/Definition.md) | Defines the basic properties for a single conversion process.|
| [`Factory`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Definition/Factory.md) | Factory class that is able to return a contract between an input and output format (Definition).|

### \phpDocumentor\Plugin\Scrybe\Converter\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`ConverterNotFoundException`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Exception/ConverterNotFoundException.md) | Exception indicating that a requested Converter could not be found.|

### \phpDocumentor\Plugin\Scrybe\Converter\Format

#### Classes

| Class | Description |
|-------|-------------|
| [`Collection`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Format/Collection.md) | A Collection containing all different text-bases file formats that are supported by Scrybe, their mmime-types and<br />available extensions.|
| [`Format`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Format/Format.md) | Defines a conversion format in Scrybe.|

### \phpDocumentor\Plugin\Scrybe\Converter\Format\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FormatNotFoundException`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Format/Exception/FormatNotFoundException.md) | |

### \phpDocumentor\Plugin\Scrybe\Converter\Metadata

#### Classes

| Class | Description |
|-------|-------------|
| [`Assets`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/Assets.md) | This collection manages which assets were found during the discovery phase.|
| [`Glossary`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/Glossary.md) | The glossary is a collection containing a collection of terms and uses that were discovered during the discovery<br />phase.|
| [`TableOfContents`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/TableOfContents.md) | This collection manages which headings were discovered during the discovery phase and stores them as entries.|

### \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseEntry`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/TableOfContents/BaseEntry.md) | The Table of Contents entry provides essential information on the current entry, it&#039;s place in the structure and<br />where it points to.|
| [`File`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/TableOfContents/File.md) | The Table of Contents File describes a file and the headings it contains.|
| [`Heading`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/TableOfContents/Heading.md) | The Table of Contents File describes a headings and the Files and subentries it may contain.|
| [`Module`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/Metadata/TableOfContents/Module.md) | The Table of Contents module represents an independent section of the documentation.|

### \phpDocumentor\Plugin\Scrybe\Converter\RestructuredText

#### Classes

| Class | Description |
|-------|-------------|
| [`Document`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Document.md) | This is a customized RestructuredText document to register Scrybe-specific directives, roles and options.|
| [`ToHtml`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/ToHtml.md) | Class used to convert one or more RestructuredText documents to their HTML representation.|

### \phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Directives

#### Classes

| Class | Description |
|-------|-------------|
| [`CodeBlock`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Directives/CodeBlock.md) | Directive used to process `.. toctree::` and insert entries from the table of contents.|
| [`Figure`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Directives/Figure.md) | Directive used to process `.. figure::` and collect images as assets to be copied.|
| [`Image`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Directives/Image.md) | Directive used to process `.. image::` and collect images as assets to be copied.|
| [`Toctree`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Directives/Toctree.md) | Directive used to process `.. toctree::` and insert entries from the table of contents.|

### \phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Roles

#### Classes

| Class | Description |
|-------|-------------|
| [`Doc`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Roles/Doc.md) | The :doc: role creates a link to an external document.|

### \phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Visitors

#### Classes

| Class | Description |
|-------|-------------|
| [`Creator`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Visitors/Creator.md) | A specialized RestructuredText Parser/Visitor to provide assistance methods for the creation phase.|
| [`Discover`](./docs/classes/phpDocumentor/Plugin/Scrybe/Converter/RestructuredText/Visitors/Discover.md) | A specialized RestructuredText Parser/Visitor to aid in the discovery phase.|

### \phpDocumentor\Plugin\Scrybe\Template

#### Classes

| Class | Description |
|-------|-------------|
| [`Factory`](./docs/classes/phpDocumentor/Plugin/Scrybe/Template/Factory.md) | A factory used to retrieve a template engine given a simplified name.|
| [`Twig`](./docs/classes/phpDocumentor/Plugin/Scrybe/Template/Twig.md) | Template class to use Twig to generate templates.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`TemplateInterface`](./docs/classes/phpDocumentor/Plugin/Scrybe/Template/TemplateInterface.md) | |

### \phpDocumentor\Plugin\Twig

#### Classes

| Class | Description |
|-------|-------------|
| [`Extension`](./docs/classes/phpDocumentor/Plugin/Twig/Extension.md) | Basic extension adding phpDocumentor specific functionality for Twig<br />templates.|
| [`ServiceProvider`](./docs/classes/phpDocumentor/Plugin/Twig/ServiceProvider.md) | Provides a series of services that are necessary for Twig to work with phpDocumentor.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtensionInterface`](./docs/classes/phpDocumentor/Plugin/Twig/ExtensionInterface.md) | An interface shared by all Twig interfaces intended for phpDocumentor.|

### \phpDocumentor\Plugin\Twig\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`Twig`](./docs/classes/phpDocumentor/Plugin/Twig/Writer/Twig.md) | A specialized writer which uses the Twig templating engine to convert<br />templates to HTML output.|

### \phpDocumentor\Reflection

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseReflector`](./docs/classes/phpDocumentor/Reflection/BaseReflector.md) | Basic reflection providing support for events and basic properties as a<br />DocBlock and names.|
| [`BaseReflectorMock`](./docs/classes/phpDocumentor/Reflection/BaseReflectorMock.md) | Class for testing base reflector.|
| [`BaseReflectorTest`](./docs/classes/phpDocumentor/Reflection/BaseReflectorTest.md) | Class for testing base reflector.|
| [`ClassReflector`](./docs/classes/phpDocumentor/Reflection/ClassReflector.md) | Provides static reflection for a class.|
| [`ClassReflectorMock`](./docs/classes/phpDocumentor/Reflection/ClassReflectorMock.md) | Class for testing ClassReflector.|
| [`ClassReflectorTest`](./docs/classes/phpDocumentor/Reflection/ClassReflectorTest.md) | Class for testing ClassReflector.|
| [`ConstantReflector`](./docs/classes/phpDocumentor/Reflection/ConstantReflector.md) | Provides Static Reflection for file-level constants.|
| [`DocBlock`](./docs/classes/phpDocumentor/Reflection/DocBlock.md) | Parses the DocBlock for any structure.|
| [`DocBlockTest`](./docs/classes/phpDocumentor/Reflection/DocBlockTest.md) | Test class for phpDocumentor\Reflection\DocBlock|
| [`Exception`](./docs/classes/phpDocumentor/Reflection/Exception.md) | An exception specifically originating from the Reflection component.|
| [`FileReflector`](./docs/classes/phpDocumentor/Reflection/FileReflector.md) | Reflection class for a full file.|
| [`FunctionReflector`](./docs/classes/phpDocumentor/Reflection/FunctionReflector.md) | Provides Static Reflection for functions.|
| [`IncludeReflector`](./docs/classes/phpDocumentor/Reflection/IncludeReflector.md) | Basic reflection providing support for events and basic properties as a<br />DocBlock and names.|
| [`InterfaceReflector`](./docs/classes/phpDocumentor/Reflection/InterfaceReflector.md) | Basic reflection providing support for events and basic properties as a<br />DocBlock and names.|
| [`Lexer`](./docs/classes/phpDocumentor/Reflection/Lexer.md) | Custom lexer for phpDocumentor.|
| [`NodeExprMock`](./docs/classes/phpDocumentor/Reflection/NodeExprMock.md) | Class for testing PhpParser_Node_Expr.|
| [`NodeStmtMock`](./docs/classes/phpDocumentor/Reflection/NodeStmtMock.md) | Class for testing PhpParser_Node_Stmt.|
| [`NodeStmtMock2`](./docs/classes/phpDocumentor/Reflection/NodeStmtMock2.md) | Class for testing PhpParser_Node_Stmt.|
| [`PrettyPrinter`](./docs/classes/phpDocumentor/Reflection/PrettyPrinter.md) | Custom PrettyPrinter for phpDocumentor.|
| [`PrettyPrinterTest`](./docs/classes/phpDocumentor/Reflection/PrettyPrinterTest.md) | Class for testing the PrettyPrinter.|
| [`ReflectionAbstract`](./docs/classes/phpDocumentor/Reflection/ReflectionAbstract.md) | Provides basic event logging and dispatching for every reflection class.|
| [`TraitReflector`](./docs/classes/phpDocumentor/Reflection/TraitReflector.md) | Provides static reflection for a class.|
| [`Traverser`](./docs/classes/phpDocumentor/Reflection/Traverser.md) | The source code traverser that scans the given source code and transforms<br />it into tokens.|

### \phpDocumentor\Reflection\ClassReflector

#### Classes

| Class | Description |
|-------|-------------|
| [`ConstantReflector`](./docs/classes/phpDocumentor/Reflection/ClassReflector/ConstantReflector.md) | Provides Static Reflection for file-level constants.|
| [`MethodReflector`](./docs/classes/phpDocumentor/Reflection/ClassReflector/MethodReflector.md) | Provides Static Reflection for functions.|
| [`PropertyReflector`](./docs/classes/phpDocumentor/Reflection/ClassReflector/PropertyReflector.md) | Basic reflection providing support for events and basic properties as a<br />DocBlock and names.|

### \phpDocumentor\Reflection\DocBlock

#### Classes

| Class | Description |
|-------|-------------|
| [`Context`](./docs/classes/phpDocumentor/Reflection/DocBlock/Context.md) | The context in which a DocBlock occurs.|
| [`Description`](./docs/classes/phpDocumentor/Reflection/DocBlock/Description.md) | Parses a Description of a DocBlock or tag.|
| [`DescriptionTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/DescriptionTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Description|
| [`Location`](./docs/classes/phpDocumentor/Reflection/DocBlock/Location.md) | The location a DocBlock occurs within a file.|
| [`Serializer`](./docs/classes/phpDocumentor/Reflection/DocBlock/Serializer.md) | Serializes a DocBlock instance.|
| [`Tag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag.md) | Parses a tag definition for a DocBlock.|
| [`TagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/TagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\VarTag|

### \phpDocumentor\Reflection\DocBlock\Tag

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthorTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/AuthorTag.md) | Reflection class for an @author tag in a Docblock.|
| [`CoversTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/CoversTag.md) | Reflection class for a @covers tag in a Docblock.|
| [`CoversTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/CoversTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\CoversTag|
| [`DeprecatedTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/DeprecatedTag.md) | Reflection class for a @deprecated tag in a Docblock.|
| [`DeprecatedTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/DeprecatedTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\DeprecatedTag|
| [`ExampleTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/ExampleTag.md) | Reflection class for a @example tag in a Docblock.|
| [`ExampleTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/ExampleTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\ExampleTag|
| [`LinkTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/LinkTag.md) | Reflection class for a @link tag in a Docblock.|
| [`LinkTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/LinkTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\LinkTag|
| [`MethodTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/MethodTag.md) | Reflection class for a @method in a Docblock.|
| [`MethodTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/MethodTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\MethodTag|
| [`ParamTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/ParamTag.md) | Reflection class for a @param tag in a Docblock.|
| [`ParamTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/ParamTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\ParamTag|
| [`PropertyReadTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/PropertyReadTag.md) | Reflection class for a @property-read tag in a Docblock.|
| [`PropertyTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/PropertyTag.md) | Reflection class for a @property tag in a Docblock.|
| [`PropertyWriteTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/PropertyWriteTag.md) | Reflection class for a @property-write tag in a Docblock.|
| [`ReturnTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/ReturnTag.md) | Reflection class for a @return tag in a Docblock.|
| [`ReturnTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/ReturnTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\ReturnTag|
| [`SeeTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/SeeTag.md) | Reflection class for a @see tag in a Docblock.|
| [`SeeTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/SeeTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\SeeTag|
| [`SinceTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/SinceTag.md) | Reflection class for a @since tag in a Docblock.|
| [`SinceTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/SinceTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\SinceTag|
| [`SourceTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/SourceTag.md) | Reflection class for a @source tag in a Docblock.|
| [`SourceTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/SourceTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\SourceTag|
| [`ThrowsTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/ThrowsTag.md) | Reflection class for a @throws tag in a Docblock.|
| [`ThrowsTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/ThrowsTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\ThrowsTag|
| [`UsesTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/UsesTag.md) | Reflection class for a @uses tag in a Docblock.|
| [`UsesTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/UsesTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\UsesTag|
| [`VarTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/VarTag.md) | Reflection class for a @var tag in a Docblock.|
| [`VarTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/VarTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\VarTag|
| [`VersionTag`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/VersionTag.md) | Reflection class for a @version tag in a Docblock.|
| [`VersionTagTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Tag/VersionTagTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Tag\VersionTag|

### \phpDocumentor\Reflection\DocBlock\Type

#### Classes

| Class | Description |
|-------|-------------|
| [`Collection`](./docs/classes/phpDocumentor/Reflection/DocBlock/Type/Collection.md) | Collection|
| [`CollectionTest`](./docs/classes/phpDocumentor/Reflection/DocBlock/Type/CollectionTest.md) | Test class for \phpDocumentor\Reflection\DocBlock\Type\Collection|

### \phpDocumentor\Reflection\Event

#### Classes

| Class | Description |
|-------|-------------|
| [`ExportDocBlockTagEvent`](./docs/classes/phpDocumentor/Reflection/Event/ExportDocBlockTagEvent.md) | Abstract class representing the base elements of a phpDocumentor event.|
| [`PostDocBlockExtractionEvent`](./docs/classes/phpDocumentor/Reflection/Event/PostDocBlockExtractionEvent.md) | Abstract class representing the base elements of a phpDocumentor event.|

### \phpDocumentor\Reflection\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`UnparsableFile`](./docs/classes/phpDocumentor/Reflection/Exception/UnparsableFile.md) | Exception representing any situation where the file is not parsable.|
| [`UnreadableFile`](./docs/classes/phpDocumentor/Reflection/Exception/UnreadableFile.md) | Exception representing any error in the Reflection library due to a file not<br />being readable or accessible.|

### \phpDocumentor\Reflection\FunctionReflector

#### Classes

| Class | Description |
|-------|-------------|
| [`ArgumentReflector`](./docs/classes/phpDocumentor/Reflection/FunctionReflector/ArgumentReflector.md) | Basic reflection providing support for events and basic properties as a<br />DocBlock and names.|

### \phpDocumentor\Transformer

#### Classes

| Class | Description |
|-------|-------------|
| [`Configuration`](./docs/classes/phpDocumentor/Transformer/Configuration.md) | Configuration definition for the transformer.|
| [`Exception`](./docs/classes/phpDocumentor/Transformer/Exception.md) | Provides the basic exception for the parser package.|
| [`ServiceProvider`](./docs/classes/phpDocumentor/Transformer/ServiceProvider.md) | This provider is responsible for registering the transformer component with the given Application.|
| [`Template`](./docs/classes/phpDocumentor/Transformer/Template.md) | Model representing a template.|
| [`Transformation`](./docs/classes/phpDocumentor/Transformer/Transformation.md) | Class representing a single Transformation.|
| [`Transformer`](./docs/classes/phpDocumentor/Transformer/Transformer.md) | Core class responsible for transforming the cache file to a set of artifacts.|

### \phpDocumentor\Transformer\Behaviour

#### Classes

| Class | Description |
|-------|-------------|
| [`BehaviourAbstract`](./docs/classes/phpDocumentor/Transformer/Behaviour/BehaviourAbstract.md) | Collection object for a set of Behaviours.|
| [`Collection`](./docs/classes/phpDocumentor/Transformer/Behaviour/Collection.md) | Collection object for a set of Behaviours.|

### \phpDocumentor\Transformer\Command\Project

#### Classes

| Class | Description |
|-------|-------------|
| [`TransformCommand`](./docs/classes/phpDocumentor/Transformer/Command/Project/TransformCommand.md) | Transforms the structure file into the specified output format|

### \phpDocumentor\Transformer\Command\Template

#### Classes

| Class | Description |
|-------|-------------|
| [`ListCommand`](./docs/classes/phpDocumentor/Transformer/Command/Template/ListCommand.md) | Lists all templates known to phpDocumentor.|

### \phpDocumentor\Transformer\Configuration

#### Classes

| Class | Description |
|-------|-------------|
| [`ExternalClassDocumentation`](./docs/classes/phpDocumentor/Transformer/Configuration/ExternalClassDocumentation.md) | Reference that relates classes with a specific prefix to a URL template.|
| [`Transformations`](./docs/classes/phpDocumentor/Transformer/Configuration/Transformations.md) | Contains the templates and custom transformations that are applied during transformation.|

### \phpDocumentor\Transformer\Configuration\Transformations

#### Classes

| Class | Description |
|-------|-------------|
| [`Template`](./docs/classes/phpDocumentor/Transformer/Configuration/Transformations/Template.md) | Configuration object for a template selection.|

### \phpDocumentor\Transformer\Event

#### Classes

| Class | Description |
|-------|-------------|
| [`PostTransformEvent`](./docs/classes/phpDocumentor/Transformer/Event/PostTransformEvent.md) | Event happen right after all transformations have completed.|
| [`PostTransformationEvent`](./docs/classes/phpDocumentor/Transformer/Event/PostTransformationEvent.md) | Event that happens after each individual transformation.|
| [`PreTransformEvent`](./docs/classes/phpDocumentor/Transformer/Event/PreTransformEvent.md) | Event that happens prior to the execution of all transformations.|
| [`PreTransformationEvent`](./docs/classes/phpDocumentor/Transformer/Event/PreTransformationEvent.md) | Event happening prior to each individual transformation.|
| [`PreXslWriterEvent`](./docs/classes/phpDocumentor/Transformer/Event/PreXslWriterEvent.md) | Event launched during the Xsl Transformation of an individual output file.|
| [`WriterInitializationEvent`](./docs/classes/phpDocumentor/Transformer/Event/WriterInitializationEvent.md) | Abstract class representing the base elements of a phpDocumentor event.|

### \phpDocumentor\Transformer\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`MissingDependencyException`](./docs/classes/phpDocumentor/Transformer/Exception/MissingDependencyException.md) | This exception is thrown when a required dependency is not included.|
| [`UnknownWriter`](./docs/classes/phpDocumentor/Transformer/Exception/UnknownWriter.md) | Exception thrown when a template attempts to use a writer that is unknown to phpDocumentor.|

### \phpDocumentor\Transformer\Router

#### Classes

| Class | Description |
|-------|-------------|
| [`ExternalRouter`](./docs/classes/phpDocumentor/Transformer/Router/ExternalRouter.md) | Connects class, interface and traits to remote documentation sets.|
| [`ForFileProxy`](./docs/classes/phpDocumentor/Transformer/Router/ForFileProxy.md) | Proxies a generated Routing Rule to generate physical filenames.|
| [`Queue`](./docs/classes/phpDocumentor/Transformer/Router/Queue.md) | Provides a queue of routers to determine the order in which they are executed.|
| [`Renderer`](./docs/classes/phpDocumentor/Transformer/Router/Renderer.md) | Renders an HTML anchor pointing to the location of the provided element.|
| [`RouterAbstract`](./docs/classes/phpDocumentor/Transformer/Router/RouterAbstract.md) | Object containing a collection of routes.|
| [`Rule`](./docs/classes/phpDocumentor/Transformer/Router/Rule.md) | |
| [`StandardRouter`](./docs/classes/phpDocumentor/Transformer/Router/StandardRouter.md) | The default router for phpDocumentor.|

### \phpDocumentor\Transformer\Router\Matcher

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`MatcherInterface`](./docs/classes/phpDocumentor/Transformer/Router/Matcher/MatcherInterface.md) | Description of the public interface to match Descriptors with a Routing rule.|

### \phpDocumentor\Transformer\Router\UrlGenerator

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`UrlGeneratorInterface`](./docs/classes/phpDocumentor/Transformer/Router/UrlGenerator/UrlGeneratorInterface.md) | Generates relative URLs with elements for use in the generated HTML documentation.|

### \phpDocumentor\Transformer\Router\UrlGenerator\Standard

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassDescriptor`](./docs/classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/ClassDescriptor.md) | |
| [`ConstantDescriptor`](./docs/classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/ConstantDescriptor.md) | |
| [`FileDescriptor`](./docs/classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/FileDescriptor.md) | |
| [`FunctionDescriptor`](./docs/classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/FunctionDescriptor.md) | Generates a relative URL with functions for use in the generated HTML documentation.|
| [`MethodDescriptor`](./docs/classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/MethodDescriptor.md) | Generates a relative URL with methods for use in the generated HTML documentation.|
| [`NamespaceDescriptor`](./docs/classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/NamespaceDescriptor.md) | |
| [`PackageDescriptor`](./docs/classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/PackageDescriptor.md) | |
| [`PropertyDescriptor`](./docs/classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/PropertyDescriptor.md) | Generates a relative URL with properties for use in the generated HTML documentation.|
| [`QualifiedNameToUrlConverter`](./docs/classes/phpDocumentor/Transformer/Router/UrlGenerator/Standard/QualifiedNameToUrlConverter.md) | Service class used to convert Qualified names into URL paths for the Standard Router.|

### \phpDocumentor\Transformer\Template

#### Classes

| Class | Description |
|-------|-------------|
| [`Collection`](./docs/classes/phpDocumentor/Transformer/Template/Collection.md) | Contains a collection of Templates that may be queried.|
| [`Factory`](./docs/classes/phpDocumentor/Transformer/Template/Factory.md) | |
| [`Parameter`](./docs/classes/phpDocumentor/Transformer/Template/Parameter.md) | Model representing a parameter in a template or transformation.|
| [`PathResolver`](./docs/classes/phpDocumentor/Transformer/Template/PathResolver.md) | |

### \phpDocumentor\Transformer\Writer

#### Classes

| Class | Description |
|-------|-------------|
| [`Collection`](./docs/classes/phpDocumentor/Transformer/Writer/Collection.md) | A collection of Writer objects.|
| [`WriterAbstract`](./docs/classes/phpDocumentor/Transformer/Writer/WriterAbstract.md) | Base class for the actual transformation business logic (writers).|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Initializable`](./docs/classes/phpDocumentor/Transformer/Writer/Initializable.md) | |
| [`Routable`](./docs/classes/phpDocumentor/Transformer/Writer/Routable.md) | Public interface for writers who use the routing system to determine relative URLs for Descriptors.|
| [`Translatable`](./docs/classes/phpDocumentor/Transformer/Writer/Translatable.md) | All writers that have items that should be translated should implement this interface|

### \phpDocumentor\Transformer\Writer\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`RequirementMissing`](./docs/classes/phpDocumentor/Transformer/Writer/Exception/RequirementMissing.md) | This exception should be thrown by a Writer when it is missing one of its requirements.|

### \phpDocumentor\Translator

#### Classes

| Class | Description |
|-------|-------------|
| [`Configuration`](./docs/classes/phpDocumentor/Translator/Configuration.md) | Configuration definition for the translations.|
| [`ServiceProvider`](./docs/classes/phpDocumentor/Translator/ServiceProvider.md) | Registers all components for the translator to work.|
| [`Translator`](./docs/classes/phpDocumentor/Translator/Translator.md) | Translator proxy for phpDocumentor.|

### \yxorP\Build

#### Classes

| Class | Description |
|-------|-------------|
| [`CSS`](./docs/classes/yxorP/Build/CSS.md) | |
| [`Exception`](./docs/classes/yxorP/Build/Exception.md) | |
| [`JS`](./docs/classes/yxorP/Build/JS.md) | |
| [`Minify`](./docs/classes/yxorP/Build/Minify.md) | |

### \yxorP\Build\Exceptions

#### Classes

| Class | Description |
|-------|-------------|
| [`BasicException`](./docs/classes/yxorP/Build/Exceptions/BasicException.md) | |
| [`FileImportException`](./docs/classes/yxorP/Build/Exceptions/FileImportException.md) | |
| [`IOException`](./docs/classes/yxorP/Build/Exceptions/IOException.md) | |

### \yxorP\http

#### Classes

| Class | Description |
|-------|-------------|
| [`EventWrapper`](./docs/classes/yxorP/Http/EventWrapper.md) | |
| [`generalHelper`](./docs/classes/yxorP/Http/generalHelper.md) | |
| [`ParamStore`](./docs/classes/yxorP/Http/ParamStore.md) | |
| [`Request`](./docs/classes/yxorP/Http/Request.md) | |
| [`Response`](./docs/classes/yxorP/Http/Response.md) | |

### \yxorP\minify

#### Classes

| Class | Description |
|-------|-------------|
| [`Areplacer`](./docs/classes/yxorP/Minify/Areplacer.md) | |
| [`AttributesSimplifier`](./docs/classes/yxorP/Minify/AttributesSimplifier.md) | |
| [`HtmlCommentsRemover`](./docs/classes/yxorP/Minify/HtmlCommentsRemover.md) | |
| [`InlineCssMinifier`](./docs/classes/yxorP/Minify/InlineCssMinifier.md) | |
| [`InlineJavascriptMinifier`](./docs/classes/yxorP/Minify/InlineJavascriptMinifier.md) | |
| [`Minify`](./docs/classes/yxorP/Minify/Minify.md) | |
| [`QuotesRemover`](./docs/classes/yxorP/Minify/QuotesRemover.md) | |
| [`WhitespacesRemover`](./docs/classes/yxorP/Minify/WhitespacesRemover.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`MinfyInterface`](./docs/classes/yxorP/Minify/MinfyInterface.md) | |

### \yxorP\http

#### Classes

| Class | Description |
|-------|-------------|
| [`Cache`](./docs/classes/yxorP/cache/Cache.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`State`](./docs/classes/yxorP/cache/State.md) | |
