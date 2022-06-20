<p align="center">
<img align="center" src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/logo.png' />
</p>

<h1  align="center">🦄 .yxorP [v2.1] SAAS(y), Multi-tenancy Proxy Guzzler</h1>
<h3  align="center"><i>Backend (GUI) included, PHP CURL+Composer are Optional</i></h3>

<br />
<br />

<img align="center" src='https://user-images.githubusercontent.com/6468571/174686673-e3ee3ce5-2c13-4ae6-886d-f22aed12a5a0.png' />

yxorP is a plug-and-play, flat-file application that does not need Composer, PHP CURL, or databases; these are all optional additions that are fully supported. yxorP is intended to act as a proxy that can edit or update the content of multiple websites using a PHAR (PHP archive) binary version of Guzzle, and managed via a user-friendly Cockpit backend (GUI).

The incoming request hostname is used to fetch site-specific requirements from the backend, the target website is then retrieved and modified accordingly. Additionally, the website content can be optionally spun using the article spinning engine that is already embedded into the application. After the website has been modified the result is then stored for a predefined time inside a custom-built, flat-file cache system architectured to be 500x faster than memory-based cache systems such as Memcache and Redis. This is accomplished by bypassing the serialisation and deserialization processes, which resulted a significantly faster cache.

The Bugsnag error reporting and warning system now supports yxorP in its most complete version after an upgrade. This was done to assure Bugsnag's compatibility with the modification. Changes to the default logging system may be done in as little as two minutes due to the program's compatibility with the great majority of the industry's primary error tracking systems.

<video controls="true" width="100%" height="auto" autoplay="" name="media"><source src="https://4dboard.github.io/proxy-yxorp/movie.mp4?8" type="video/mp4"></video>

<br />
<br />

<img src='https://user-images.githubusercontent.com/6468571/174686718-8501af5f-3fd3-4df9-8854-3319f7837e51.png'/>


> ⚠️**Requires**: Minimum requirement is PHP version 8.0 +

<b>NB:</b><i> Before launching the website, you must ensure that the "cockpit" submodule has been pulled and the details in the '.env.example' are correct and the file has been renamed '.env'.</i>

Cockpit is the graphical user interface (GUI) for the administration interface, which may be immediately accessed by entering "/cockpit" and supplying the admin username and password set in the '.env' file.

The credentials defined in the '.env' file are used to setup the sqlite database for the 'cockpit' application. Once the application is accessed/run for the first time, the only way to 'update/change' the credentials is directly in the sqlite database or via the 'cockpit' application itself (The '.env' admin username and password are only used on the first run). The application can also always be reset via a clean installation.

<p align="center"><img src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/diagrams.png' /></p>

<br />
<br />

<img src='https://user-images.githubusercontent.com/6468571/174686903-294074b2-2129-4084-a42d-33d6387a8851.png' />

<h3 >🔋 Batteries Included: Plug & Play [CURL + Composer Optional], Proxy as a Service, Multi-tenant, Multi-Threaded, with Cache & Article
Spinner.</h3>

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

<p align="center"><img src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/Idna.png' /></p>

<img src='https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png' />

<img src='https://user-images.githubusercontent.com/6468571/157205365-af23c9a1-98a7-40fd-8b74-0b9b0918a259.png' />

<img src='https://user-images.githubusercontent.com/6468571/157188599-5fdfd399-b340-434e-b80b-ca356f8ad8ab.png' />

### Cockpit Back-End

Cockpit is awesome if you need a flexible content structure but don't want to be limited in how to use the content. Cockpit is a perfect match if you want to support multiple devices or need a content management UI for static site builders. Build unique applications and let Cockpit feed them with content.

<img src='https://user-images.githubusercontent.com/6468571/174488292-66e75484-d57b-472f-8921-661d09387727.png' />

Introduction
Cockpit is a headless CMS with an API-first approach that puts content first. It is designed to simplify the process of publication by separating content management from content consumption on the client side. Cockpit is focusing just on the back-end work to manage content. Rather than worry about delivery of content through pages, its goal is to provide structured content across different channels via a simple API.

<img src='https://user-images.githubusercontent.com/6468571/174488463-767e2f7a-8409-445b-b7e8-ed45d0965a89.png' />

####  Key features:
Manage flexible content models. There are no pre-defined content models. Define the content model yourself.
Uncluttered UI. Cockpit offers you a modern and simple user interface.
One system, consume it the way you want. Receive your content via a simple API.

#### The Advantages Of Going Headless

- No presentation limitations – build the best design ever.
- Content for multiple channels – create content once, consume anywhere.
- Highly scalable content – for all your devices and microsites.
- Minimum training required – get started, immediately.
- Easy integrations – connect with everything.

<img src='https://user-images.githubusercontent.com/6468571/174488424-88456e97-539c-4ec2-918b-fc59be5be8da.png' />

<img src='https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png' />

<img src='https://user-images.githubusercontent.com/6468571/157205537-31de601d-4b8b-4c6b-af36-4c1e7e3f184f.png' />

<img src='https://user-images.githubusercontent.com/6468571/157188653-bde1f08c-27ee-4eb8-90f7-69d1e60aa949.png' />

<p align="center"><img src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (3).gif' /></p>

## Use case / Applications

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

<img src='https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png' />
<img src="https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/logosnag.png"/>

Bugsnag provides a solution for error monitoring and application stability management that is easy to use and implement.
The ability to make data-driven decisions about whether to develop software or address problems is contingent on the
ability to maintain stability.

<img src="https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/Bugsnag.gif"/>

Diagnostic data from our mobile assistance, which has been regarded as the best-in-class in the industry, enables teams
to reproduce and fix issues as soon as they begin to have an impact on system stability. Reports on error situations are
arranged by root cause and may also be classified by business impact. In addition, they are supplied with extensive
diagnostic information.

<img src='https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png' />

<img src='https://user-images.githubusercontent.com/6468571/157205793-efeaaa6c-eae6-4070-8838-50637876156b.png' />

<img src='https://user-images.githubusercontent.com/6468571/157188697-4c3a2b95-b40b-441c-bf6a-45c97e4e4b57.png' />

<p align="center"><img src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (4).gif' /></p>

## Instant Setup

Instant Development Enviroment stup with your prefered service provider:

<a href="https://vercel.com/new/clone?repository-url=https://github.com/4dboard/yxorP"><img src="https://vercel.com/button" /></a> <a href="https://www.heroku.com/deploy/?template=https://gitpod.io/#https://github.com/4dboard/yxorP"><img src="https://www.herokucdn.com/deploy/button.svg" /></a> <a href="https://render.com/deploy?repo=https://github.com/4dboard/yxorP"><img src="https://render.com/images/deploy-to-render-button.svg" /></a> <a href="https://gitpod.io/#https://github.com/4dboard/yxorP"><img src="https://gitpod.io/button/open-in-gitpod.svg" /></a> <img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' /> <img src='https://user-images.githubusercontent.com/6468571/157205943-7e735dd6-4d7f-401b-97b7-a25ecc2b9c3b.png' />

<img src='https://user-images.githubusercontent.com/6468571/157188746-0eb4f847-b0de-464a-9719-acf5bb39e8c4.png' />

# Background Information

Two of the most powerful PHP reverse proxies now accessible on the internet have been merged to create a single web
proxy that outperforms the two when their combined performance is considered. Please keep in mind that this is a
brand-new project that may undergo changes in the future. With the php-proxy library, a component of the PHP programming
language that is available for free download, you may quickly and easily configure a web proxy application for your web
server. If you are able to contribute to or support this project, it would be much appreciated as it would enable me to
devote more development time to it, therefore expediting its progress.

<img src='https://user-images.githubusercontent.com/6468571/153799459-4c352a2d-2bc0-413d-9048-7f94bdd7a1a5.png' />

<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />

<img src='https://user-images.githubusercontent.com/6468571/157206067-a7263dc6-09e4-4350-8ad2-3bd51fc349b0.png' />

<img src='https://user-images.githubusercontent.com/6468571/157188795-5034fd0f-d40e-4a58-9e8e-286e713fb397.png' />

## Web-Proxy vs Proxy Server

Bear in mind that this proxy script may not function properly on websites or pages that are very script-heavy or include
an excessive number of "dynamic components," as indicated above. Web proxies' inability to encrypt data is a
well-documented flaw in the technology. When visiting such websites, you should utilize a legitimate proxy server to
redirect your browser's HTTP requests via the following domains:

<img src='https://user-images.githubusercontent.com/6468571/153799352-ee3e60ed-6564-4633-9cc1-7acc2cfb2b50.png' />
<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />

<img src='https://user-images.githubusercontent.com/6468571/157206147-738b606d-6a02-411e-ac17-b5a364601b62.png' />

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

<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />
<img src='https://user-images.githubusercontent.com/6468571/157188876-61dc86c4-508f-4169-a1f2-a9582c035c2a.png' />

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

<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />
<img src='https://user-images.githubusercontent.com/6468571/152177774-25482b2a-f8cd-4f19-a221-97dc29212a2d.png' />

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

<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />

<img src='https://user-images.githubusercontent.com/6468571/157189458-e55e96dd-1faf-4fdf-8c63-f98fc5eab426.png' />

<p align="center"><img src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (10).gif' /></p>

## Keep it up-to-date

When it comes to software updates, it is more often than not that they will be made to the application's dependant
packages rather than the program itself; for example, most of the adjustments will be made to the php-proxy package
rather than to the application itself.

#### .env

This file will be loaded into the Config class at the global level.

#### /plugins/

Users are encouraged to create their own unique plugins in this subdirectory, which will then be loaded automatically
from the main directory. The proxy, which comes with a number of built-in plugins, is not without its limitations, and
users are urged to create their own custom plugins in order to broaden the range of options available. Think of a simple
example like the file /plugins/TestPlugin.php in the plugins directory as an illustration.

<img src='https://user-images.githubusercontent.com/6468571/152181962-33e4e658-5fbc-4b2d-9366-7147e9fabe65.png' />
<img src='https://user-images.githubusercontent.com/6468571/157206367-1c11d91a-87e6-4724-8501-14d9860d78de.png' />

<img src='https://user-images.githubusercontent.com/6468571/157188915-5ad7cad1-af0a-4e0a-8807-c9fe4708e06b.png' />

# Gitpod

Gitpod, a free and open-source Kubernetes program that is freely accessible on the internet, allows developers to
quickly and efficiently set up code-ready development environments on their workstations. With the use of cloud-based
technology, every piece of work accomplished leads in the production of new, automated development environments in the
cloud, which are then accessible to other developers. It is only via the use of cloud computing that this is made
feasible. The option to start immediate, remote, and cloud-based development environments regardless of whether your
development environment is defined in code is available if you have a browser or desktop integrated development
environment open on your computer.

<img src='https://user-images.githubusercontent.com/6468571/152177615-421c1286-33cd-4c38-9f7b-3c486901ba81.png' />
<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />
<img src='https://user-images.githubusercontent.com/6468571/152181058-6446dd76-3012-4e9f-b05a-7d86ca5d0872.png' />
<img src='https://user-images.githubusercontent.com/6468571/157206427-04af776e-d516-4fc3-b0ca-2c2cbc0f44cc.png' />

## Usage & How to Guide

Navigate to the root of the project with your browser, register an account and then login.

<img src='https://user-images.githubusercontent.com/6468571/152181949-99b9aaa6-586e-4f64-826d-ec7616535d1c.png' />

<img src='https://user-images.githubusercontent.com/6468571/157189005-b1eb3398-be00-47a3-825d-c13a90258fc2.png' />

## Contributing to the Project

Before pull requests may be implemented in the production environment, they must be evaluated and authorized by the
development team. Please open a new issue with the appropriate subject title to discuss the modifications you want to
make to the document. Please make every effort to keep tests current in order to minimize the chance of wrong
interpretation of results. We appreciate all of your assistance and support.

<p align="center"><img src='https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (14).gif' /></p>

<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />

<br />

<img src='https://user-images.githubusercontent.com/6468571/157206554-6f07c153-cca7-4679-a5c7-441f88580bd4.png' />

<img src='https://user-images.githubusercontent.com/6468571/157189069-baae9f9f-3576-4eea-9427-58a236210541.png' />

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

<img src='https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png' />
<img src='https://user-images.githubusercontent.com/6468571/157206640-0ecdb227-cc7f-46a3-8b26-b0c76ac030a5.png' />

<img src='https://user-images.githubusercontent.com/6468571/157189108-1914f60d-d58e-400a-9ced-a5d09a5d81ad.png' />

## Licensing

[MIT Software License for .yxorP The PHP Web-Proxy by don Pablo](https://choosealicense.com/licenses/mit/)

The Massachusetts Institute of Technology (MIT) License, sometimes referred to as the "MIT License," is a permissive
free software license developed in the late 1980s and still in use at the Massachusetts Institute of Technology today.
Repurposing is confined to a limited number of scenarios due to the permissive nature of the program, which assures
compliance with licensing agreements. This license is straightforward and concise; it is a permissive license that just
requires copyright protection and prominent display of licensing information in the form of terms. They may be released
in a number of forms and without the source code because they are licensed works, adaptations, or large-scale works.

![](asset/live.png?v=3)
