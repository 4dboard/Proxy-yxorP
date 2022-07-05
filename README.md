> ⛔️ **PENDING** : _Without more people getting behind this, it won't go very far. Please click the "star" button to show your support for this endeavour if you think it interesting. Assuming there is at least some enthusiasm for the idea, development will proceed._
> _`NB: Any contributions you can make toward this endeavour would be much appreciated.`_

> ❤️**SUPPORT** : Donations always welcome via [GITHUB](https://github.com/donspablo) (Subscriptions & Credit Cards),  [PATREON](https://patreon.com/donpablonow) (Subscriptions & Credit Cards), [PAYPAL](https://www.paypal.me/donpanlonow) (Once-off, Credit Cards & E-wallet) & [ETHEREUM](https://pay.buildship.dev/to/0X3D288C7A673501294C9289C6FC42480A2EA61417?value=0.1) (Once-off, Crypto Currency)

[![image](https://www.donPabloNow.com/notice.wepd)](https://www.donPabloNow.com/#notice)

![image](https://user-images.githubusercontent.com/6468571/174686673-e3ee3ce5-2c13-4ae6-886d-f22aed12a5a0.png)

> 🏆️ **DEMO LIVE**: _We have just launched the first working live demo / sneak preview via **Gitpod**_ **[\[ LIVE DEMO \]](https://gitpod.io/#https://github.com/4dboard/proxy-yxorp)**

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/logo.png)

[![image](https://a.fsdn.com/con/app/sf-download-button)](https://sourceforge.net/projects/proxy-yxorp/files/latest/download)

✨ [ [ ARCHITECTURE](https://github.com/4dboard/proxy-yxorp/wiki) ]
🔥 [ [ DEVELOPERS](https://github.com/4dboard/proxy-yxorp/blob/main/docs/index.md) ]
🎈 [ [DOCUMENTATION](https://4dboard.github.io/proxy-yxorp/docs/) ]
🎇 [ [MAKING VIDEO](https://4dboard.github.io/proxy-yxorp/docs/movie.mp4) ]
☀️[ [WEBSITE](https://4dboard.github.io/) ] 🎆

# 🦄 .yxorP Stateful SAAS(y), Multi-tenancy Proxy Guzzler + Backend (GUI) included, PHP CURL+Composer are Optional

> 🎥️ **MAKING OF**: _We put up a short video called "Making of the yxorP Proxy" so that anyone who wants to see how the project came together can do so_ **[\[ MAKING OF VIDEO \]](https://4dboard.github.io/proxy-yxorp/docs/movie.mp4)**

---

yxorP is a plug-and-play, flat-file application that *does not need Composer, PHP CURL, or databases*; these are all
optional additions that are fully supported. yxorP is intended to act as a proxy that can edit or update the content
of *multiple websites* using a PHAR (PHP archive) binary version of *Guzzle*, and managed via a user-friendly *
Cockpit backend (GUI)*.

It is well-known that yxorP is one of the web proxy systems that offers the most customization compared to other web
proxy systems now available on the market. This is owing to its event-driven architecture and emphasis on its
plugin-based design, as opposed to its built-in features, which are the most crucial and differentiating components that
allow customization and development of its capabilities. In addition to its Back-end administration CMS and graphical
user interface, yxorP has a number of other distinguishing features.

The incoming request hostname is used to fetch site-specific requirements from the backend, the target website is then
retrieved and modified accordingly. Additionally, the website content can be optionally spun using the *article spinning
engine* that is already embedded into the application. After the website has been modified the result is then stored for
a predefined time inside a custom-built, *flat-file cache* system architectured to be *500x faster than memory-based
cache* systems such as Memcache and Redis. This is accomplished by bypassing the serialisation and deserialization
processes, which resulted a significantly faster cache.

![image](https://user-images.githubusercontent.com/6468571/174922574-d5a246b5-c30e-4a63-bc22-4957184feef9.png)

yxorP was designed to operate with either a stateless server (Apache) or a *stateful server* (Swoole) which are *
high-performance* networking frameworks with an *event-driven, asynchronous, and non-blocking I/O* model - Compatible
with TCP, UDP, Unix socket, HTTP, and Websocket and allows the creation of concurrent services ( *Parrelelle*) that are
both rapid and scalable.

## Stateless Server:

``` 
DocumentRoot "/.yxorP/index.php" 
ServerName www.demo.com
ServerAlias server 
``` 

## Statefull Server:

``` php ./server.php ```

The Bugsnag error reporting and warning system now supports yxorP in its most complete version after an upgrade. This
was done to assure Bugsnag's compatibility with the modification. Changes to the *default logging* system may be done in
as little as two minutes due to the program's compatibility with the great majority of the *industry's primary error
tracking systems*.

## Docker Composer:

``` cd inc docker-composer up -d ```

## Docker: ``` cd inc docker run

-p 80:80 --rm -u www-data -v \`pwd\`:/var/www -e ENV=dev donpablonow/yxorp ```

![image](https://user-images.githubusercontent.com/6468571/174686718-8501af5f-3fd3-4df9-8854-3319f7837e51.png)

> ⚠️Requires: Minimum requirement is PHP version 8.0 +

*NB:* _Before launching the website, you must ensure that the "cockpit" submodule has been pulled and the details in
the '.env.example' are correct and the file has been renamed '.env'._ Cockpit is the graphical user interface (GUI) for
the administration interface, which may be immediately accessed by entering "/cockpit" and supplying the admin username
and password set in the '.env' file. The credentials defined in the '.env' file are used to setup the sqlite database
for the 'cockpit' application. Once the application is accessed/run for the first time, the only way to 'update/change'
the credentials is directly in the sqlite database or via the 'cockpit' application itself (The '.env' admin username
and password are only used on the first run). The application can also always be reset via a clean installation.

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/diagrams.png)

![image](https://user-images.githubusercontent.com/6468571/174686903-294074b2-2129-4084-a42d-33d6387a8851.png)

### 🔋 Batteries Included: Plug & Play \[CURL + Composer Optional\], Proxy as a Service, Multi-tenant, Multi-Threaded, with Cache & Article Spinner.

Convenient features such as built-in content spinning and an auto caching engine are hidden behind a slick online
interface. Among the cache drivers provided are Arangodb, Devnull, Dynamodb (AWS), Cassandra, Devrandom, Files,
CouchBasev3, Memstatic, Firestore, Couchdb, Leveldb, Mongodb, Memcache(d),Predis, Sqlite, Redis, Wincache, Ssdb, and
Zend Disk Cache. The combined might of two of the most successful web proxy initiatives is harnessed for maximum effect.
This self-service proxy engine has zero performance loss and supports numerous tenants by combining a flat-file
beautiful web interface with a custom multi-threaded caching layer and an extremely powerful 10,000+ word thesaurus
article spinner. Vanilla Dashboard is a no-cost, no-commitment self-service proxy engine that supports numerous tenants.
Specifically, the project is looking for funding to help tie off some loose ends, particularly with the backed GUI; the
front-end is complete and functional, but code cleanup and unit testing are required. yxorP (proxy.) is a one-of-a-kind,
plug-and-play (no installation required), multi-threaded, website mirroring and content augmentation, fast cache, and
multi-web proxy server that performs website mirroring and content augmentation, website mirroring and content
augmentation, fast cache, and multi-web proxy server (reverse proxy). In addition to having a built-in "cache"
management system as well as a web-based "cache" management system, the proxy is "modular" or "plugin-based." Web-based
reporting and analytics using a graphical user interface (GUI) (GUI). By leveraging a custom-built content spinning
engine, the system allows material to be "augmented" (or "spun") with little performance degradation (10,000+
thesaurus/dictionary entries) while maintaining high quality.

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/Idna.png)

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png) ![image](https://user-images.githubusercontent.com/6468571/157205365-af23c9a1-98a7-40fd-8b74-0b9b0918a259.png) ![image](https://user-images.githubusercontent.com/6468571/157188599-5fdfd399-b340-434e-b80b-ca356f8ad8ab.png)

### Cockpit Back-End Cockpit is awesome if you need a flexible content structure but don't want to be limited in how to

use the content. Cockpit is a perfect match if you want to support multiple devices or need a content management UI for
static site builders. Build unique applications and let Cockpit feed them with content.

![image](https://user-images.githubusercontent.com/6468571/174488292-66e75484-d57b-472f-8921-661d09387727.png)

Introduction Cockpit is a headless CMS with an API-first approach that puts content first. It is designed to simplify
the process of publication by separating content management from content consumption on the client side. Cockpit is
focusing just on the back-end work to manage content. Rather than worry about delivery of content through pages, its
goal is to provide structured content across different channels via a
simpleAPI.![image](https://user-images.githubusercontent.com/6468571/174488463-767e2f7a-8409-445b-b7e8-ed45d0965a89.png)

#### Key features:

Manage flexible content models. There are no pre-defined content models. Define the content model yourself. Uncluttered
UI. Cockpit offers you a modern and simple user interface. One system, consume it the way you want. Receive your content
via a simple API. #### The Advantages Of Going Headless - No presentation limitations – build the best design ever. -
Content for multiple channels – create content once, consume anywhere. - Highly scalable content – for all your devices
and microsites. - Minimum training required – get started, immediately. - Easy integrations – connect with
everything.![image](https://user-images.githubusercontent.com/6468571/174488424-88456e97-539c-4ec2-918b-fc59be5be8da.png) ![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png) ![image](https://user-images.githubusercontent.com/6468571/157205537-31de601d-4b8b-4c6b-af36-4c1e7e3f184f.png) ![image](https://user-images.githubusercontent.com/6468571/157188653-bde1f08c-27ee-4eb8-90f7-69d1e60aa949.png)

![image]('https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (3).gif')

## Use case

Applications Create static flat file variants of your original webpages by using yxorP to mirror your websites and offer
the mirrored/cloned copies as static flat file variations of the original webpages.

#### 🔥 Cache

When you use caching to load your websites, you may reduce loading time and server strain, resulting in websites that
load faster.

#### 📛 Firewall

Create a virtual firewall to protect your websites behind your proxy server, giving security against website assaults
such as DDOS attacks and other types of attacks.

#### 🔳 iFrame

It is possible to circumvent CORS for the iframing services that you need – \*\*not recommended, but feasible\*\*.

#### 🔱 Load-balancing

This may be accomplished by deploying cloned copies of your website on various servers that are connected to a
load-balancing system.

#### ⌛ Allways-online

High/Continuous availability is achieved by running a proxy version of your existing website and switching to this
version of the website during upgrades or down-time.

##### + many more..

There are several additional uses that may be explored, and these are only a few of the more common ones.

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png) ![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/logosnag.png)

Bugsnag provides a solution for error monitoring and application stability management that is easy to use and implement.
The ability to make data-driven decisions about whether to develop software or address problems is contingent on the
ability to maintain stability.

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/Bugsnag.gif)

Diagnostic data from our mobile assistance, which has been regarded as the best-in the industry, enables teams to
reproduce and fix issues as soon as they begin to have an impact on system stability. Reports on error situations are
arranged by root cause and may also be classified by business impact. In addition, they are supplied with extensive
diagnostic information.

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png) ![image](https://user-images.githubusercontent.com/6468571/157205793-efeaaa6c-eae6-4070-8838-50637876156b.png) ![image](https://user-images.githubusercontent.com/6468571/157188697-4c3a2b95-b40b-441c-bf6a-45c97e4e4b57.png)

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (4).gif)

\## Instant Setup Instant Development Enviroment stup with your prefered service
provider: [![image](https://vercel.com/button)](https://vercel.com/new/clone?repository-url=https://github.com/4dboard/yxorP) [![image](https://www.herokucdn.com/deploy/button.svg)](https://www.heroku.com/deploy/?template=https://gitpod.io/#https://github.com/4dboard/yxorP) [![image](https://render.com/images/deploy-to-render-button.svg)](https://render.com/deploy?repo=https://github.com/4dboard/yxorP) [![image](https://gitpod.io/button/open-in-gitpod.svg)](https://gitpod.io/#https://github.com/4dboard/yxorP) ![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157205943-7e735dd6-4d7f-401b-97b7-a25ecc2b9c3b.png) ![image](https://user-images.githubusercontent.com/6468571/157188746-0eb4f847-b0de-464a-9719-acf5bb39e8c4.png)

# Background Information Two of the most powerful PHP reverse proxies now accessible on the internet have been merged to

create a single web proxy that outperforms the two when their combined performance is considered. Please keep in mind
that this is a brand-new project that may undergo changes in the future. With the php-proxy library, a component of the
PHP programming language that is available for free download, you may quickly and easily configure a web proxy
application for your web server. If you are able to contribute to or support this project, it would be much appreciated
as it would enable me to devote more development time to it, therefore expediting its
progress. ![image](https://user-images.githubusercontent.com/6468571/153799459-4c352a2d-2bc0-413d-9048-7f94bdd7a1a5.png) ![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157206067-a7263dc6-09e4-4350-8ad2-3bd51fc349b0.png) ![image](https://user-images.githubusercontent.com/6468571/157188795-5034fd0f-d40e-4a58-9e8e-286e713fb397.png)

## Web-Proxy vs Proxy Server Bear in mind that this proxy script may not function properly on websites or pages that are

very script-heavy or include an excessive number of "dynamic components," as indicated above. Web proxies' inability to
encrypt data is a well-documented flaw in the technology. When visiting such websites, you should utilize a legitimate
proxy server to redirect your browser's HTTP requests via the following
domains: ![image](https://user-images.githubusercontent.com/6468571/153799352-ee3e60ed-6564-4633-9cc1-7acc2cfb2b50.png) ![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157206147-738b606d-6a02-411e-ac17-b5a364601b62.png)

## Installation It is critical to keep in mind that this is a \*\*project\*\* and not a library. It is not recommended

to install this package via \* require\*. This type of project should be immediately uploaded to your web server's
public directory. Download a pre-installed version of this application as a ZIP archive from the downloads area. \[\*\*
Releases\*\*\](https://github.com/4dboard/yxorP/releases/). # The Dashboard 🍦 The Dashboard component provides an
application-specific JavaScript dashboard that connects with a PHP-written on-disk database adapted to the application's
needs. Vanilla Dashboard, a free and open source program, may be downloaded from the internet. Numerous "Easter Eggs"
are scattered around the Dashboard. The "Who Is Online," "Live Chat," and "Who Is Online" services, as well as a variety
of other features, are all wrapped up in an easy-to-use CSS-based user interface that is available for download for
free. ![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157188876-61dc86c4-508f-4169-a1f2-a9582c035c2a.png)

## Development Environment A Liberating Dev Tool For All Your Projects LAMP recipe, which may be purchased from the link

above, are required in order to complete the Lando - A Liberating Dev Tool For All Your Projects project. You may use
the Lando - A Liberating Dev Tool For All Your Projects project for all of your projects since it enables you to
either "plug and play" on PHP-compatible PCs or create in a LAMP environment. If you need any further information
regarding this project, please visit the section under "Frequently Asked Questions." Worldwide, professional developers
use local development and DevOps technologies on a daily basis, with the United States having the highest concentration
of such technologies. In spite of the fact that there are insufficient instruments to assist in the development process,
it is possible to transcend the conceptual limitations imposed by this situation. Concentrating your attention on the
most important activities will allow you to save time, money, and frustration in the long run. Focusing your efforts on
the most important tasks may help to alleviate some of the
stress. ![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/152177774-25482b2a-f8cd-4f19-a221-97dc29212a2d.png)
Clone this repo ``` git clone https://github.com/4dboard/proxy-yxorp ``` Clone the "sample.env" to ".env" and update
with the correct details. ``` cp ./sample.env ./.env ``` Host the files on a PHP
server ``` cd ./inc # Start it up lando start # List information about this app. lando info ```
or ``` # Initialize a lamp recipe using the latest codeigniter version lando init \\ --source remote \\ --remote-url https://github.com/bcit-ci/CodeIgniter/archive/3.1.10.tar.gz \\ --remote-options="--strip-components 1" \\ --recipe lamp \\ --webroot . \\ --name my-first-lamp-app ```
For more information please
see: https://docs.lando.dev/config/lamp.html ![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157189458-e55e96dd-1faf-4fdf-8c63-f98fc5eab426.png)

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (10).gif)

\## Keep it up-to-date When it comes to software updates, it is more often than not that they will be made to the
application's dependant packages rather than the program itself; for example, most of the adjustments will be made to
the php-proxy package rather than to the application itself. #### .env This file will be loaded into the Config /\*\* \*
{@inlinetag} \* this is @not a standardtag - must begin a line. \* this is a valid {@inlinetag} also \* @standardtag \*/
class at the global level. #### /plugins/ Users are encouraged to create their own unique plugins in this subdirectory,
which will then be loaded automatically from the main directory. The proxy, which comes with a number of built-in
plugins, is not without its limitations, and users are urged to create their own custom plugins in order to broaden the
range of options available. Think of a simple example like the file /plugins/TestPlugin.php in the plugins directory as
an
illustration. ![image](https://user-images.githubusercontent.com/6468571/152181962-33e4e658-5fbc-4b2d-9366-7147e9fabe65.png) ![image](https://user-images.githubusercontent.com/6468571/157206367-1c11d91a-87e6-4724-8501-14d9860d78de.png) ![image](https://user-images.githubusercontent.com/6468571/157188915-5ad7cad1-af0a-4e0a-8807-c9fe4708e06b.png)

# Gitpod Gitpod, a free and open-source Kubernetes program that is freely accessible on the internet, allows developers

to quickly and efficiently set up code-ready development environments on their workstations. With the use of cloud-based
technology, every piece of work accomplished leads in the production of new, automated development environments in the
cloud, which are then accessible to other developers. It is only via the use of cloud computing that this is made
feasible. The option to start immediate, remote, and cloud-based development environments regardless of whether your
development environment is defined in code is available if you have a browser or desktop integrated development
environment open on your
computer. ![image](https://user-images.githubusercontent.com/6468571/152177615-421c1286-33cd-4c38-9f7b-3c486901ba81.png) ![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/152181058-6446dd76-3012-4e9f-b05a-7d86ca5d0872.png) ![image](https://user-images.githubusercontent.com/6468571/157206427-04af776e-d516-4fc3-b0ca-2c2cbc0f44cc.png)

## Usage & How to Guide Navigate to the root of the project with your browser, register an account and then

login. ![image](https://user-images.githubusercontent.com/6468571/152181949-99b9aaa6-586e-4f64-826d-ec7616535d1c.png) ![image](https://user-images.githubusercontent.com/6468571/157189005-b1eb3398-be00-47a3-825d-c13a90258fc2.png)

## Contributing to the Project Before pull requests may be implemented in the production environment, they must be

evaluated and authorized by the development team. Please open a new issue with the appropriate subject title to discuss
the modifications you want to make to the document. Please make every effort to keep tests current in order to minimize
the chance of wrong interpretation of results. We appreciate all of your assistance and support.

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/image (14).gif)

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png)  
![image](https://user-images.githubusercontent.com/6468571/157206554-6f07c153-cca7-4679-a5c7-441f88580bd4.png) ![image](https://user-images.githubusercontent.com/6468571/157189069-baae9f9f-3576-4eea-9427-58a236210541.png)

## Road Map - \[x\] Front-end - \[x\] Combine Proxy Engines - \[x\] Allow Multi-tent rendering - \[x\] Build Caching

Layer - \[x\] Develop Multi-threading support (PHP Vanilla/Independent) + More (To be listed soon) - \[x\] Foundation -
\[x\] API Service - \[x\] TxT DB - \[x\] Login - \[x\] Registration - \[x\] Dashboard - \[x\] Who is Online - \[x\]
Documentation - \[ \] Tables - \[x\] Users - \[x\] Notes - \[x\] Tasks - \[ \] Chat - \[ \] Notes - \[x\] Data Scheme -
\[x\] API Endpoints - \[x\] Functions - \[ \] UI - \[ \] Tasks - \[x\] Data Scheme - \[x\] API Endpoints - \[x\]
Functions - \[ \] UI - \[ \] Chat - \[ \] Data Scheme - \[x\] API Endpoints - \[x\] Functions - \[ \] UI - \[ \] Testing

- \[x\] Versions - \[x\] Owners - \[ \] Crate
  details ![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157206640-0ecdb227-cc7f-46a3-8b26-b0c76ac030a5.png) ![image](https://user-images.githubusercontent.com/6468571/157189108-1914f60d-d58e-400a-9ced-a5d09a5d81ad.png)

## Licensing \[MIT Software License for .yxorP The PHP Web-Proxy by don

Pablo\](https://choosealicense.com/licenses/mit/) The Massachusetts Institute of Technology (MIT) License, sometimes
referred to as the "MIT License," is a permissive free software license developed in the late 1980s and still in use at
the Massachusetts Institute of Technology today. Repurposing is confined to a limited number of scenarios due to the
permissive nature of the program, which assures compliance with licensing agreements. This license is straightforward
and concise; it is a permissive license that just requires copyright protection and prominent display of licensing
information in the form of terms. They may be released in a number of forms and without the source code because they are
licensed works, adaptations, or large-scale works. !\[\](asset/live.png?v=3)
**

# yxorP Documentation

## Namespaces

### \

#### Classes

| Class | Description |
|-------|-------------|
| [`Attribute`](https://4dboard.github.io/proxy-yxorp/docs/classes/Attribute.md) | |
| [`CLI`](https://4dboard.github.io/proxy-yxorp/docs/classes/CLI.md) | This file is part of the Cockpit project.|
| [`ComposerAutoloaderInit0fc67c8c6d14d2081ce037f8348a35e1`](https://4dboard.github.io/proxy-yxorp/docs/classes/ComposerAutoloaderInit0fc67c8c6d14d2081ce037f8348a35e1.md) | |
| [`ContainerArray`](https://4dboard.github.io/proxy-yxorp/docs/classes/ContainerArray.md) | This file is part of the Cockpit project.|
| [`DataCollection`](https://4dboard.github.io/proxy-yxorp/docs/classes/DataCollection.md) | This file is part of the Cockpit project.|
| [`DotEnv`](https://4dboard.github.io/proxy-yxorp/docs/classes/DotEnv.md) | This file is part of the Cockpit project.|
| [`FileStorage`](https://4dboard.github.io/proxy-yxorp/docs/classes/FileStorage.md) | |
| [`JsonException`](https://4dboard.github.io/proxy-yxorp/docs/classes/JsonException.md) | |
| [`Lexy`](https://4dboard.github.io/proxy-yxorp/docs/classes/Lexy.md) | Lexy class. Simple on the fly template parser class|
| [`LiteDB`](https://4dboard.github.io/proxy-yxorp/docs/classes/LiteDB.md) | This file is part of the Cockpit project.|
| [`LiteDBQuery`](https://4dboard.github.io/proxy-yxorp/docs/classes/LiteDBQuery.md) | |
| [`Mailer`](https://4dboard.github.io/proxy-yxorp/docs/classes/Mailer.md) | |
| [`Mailer_Message`](https://4dboard.github.io/proxy-yxorp/docs/classes/Mailer_Message.md) | |
| [`Pagination`](https://4dboard.github.io/proxy-yxorp/docs/classes/Pagination.md) | This file is part of the Cockpit project.|
| [`Parsedown`](https://4dboard.github.io/proxy-yxorp/docs/classes/Parsedown.md) | |
| [`ParsedownExtra`](https://4dboard.github.io/proxy-yxorp/docs/classes/ParsedownExtra.md) | |
| [`ParsedownExtraTest`](https://4dboard.github.io/proxy-yxorp/docs/classes/ParsedownExtraTest.md) | |
| [`PriorityQueue`](https://4dboard.github.io/proxy-yxorp/docs/classes/PriorityQueue.md) | This file is part of the Cockpit project.|
| [`RedisLite`](https://4dboard.github.io/proxy-yxorp/docs/classes/RedisLite.md) | RedisLite class.|
| [`SVGSanitizer`](https://4dboard.github.io/proxy-yxorp/docs/classes/SVGSanitizer.md) | Class SVGSanitizer|
| [`Spyc`](https://4dboard.github.io/proxy-yxorp/docs/classes/Spyc.md) | The Simple PHP YAML Class.|
| [`UnhandledMatchError`](https://4dboard.github.io/proxy-yxorp/docs/classes/UnhandledMatchError.md) | |
| [`ValueError`](https://4dboard.github.io/proxy-yxorp/docs/classes/ValueError.md) | |
| [`blockListPluginAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/blockListPluginAction.md) | |
| [`bugsnagHandlerAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/bugsnagHandlerAction.md) | |
| [`cacheStoreAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/cacheStoreAction.md) | |
| [`checkFilesAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/checkFilesAction.md) | |
| [`cookiePluginAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/cookiePluginAction.md) | |
| [`dailyMotionPluginAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/dailyMotionPluginAction.md) | |
| [`debubEnablingAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/debubEnablingAction.md) | |
| [`debugHandlerAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/debugHandlerAction.md) | |
| [`globalCollectionAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/globalCollectionAction.md) | |
| [`guzzleClientAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/guzzleClientAction.md) | |
| [`headerRewritePluginAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/headerRewritePluginAction.md) | |
| [`logPluginAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/logPluginAction.md) | |
| [`mimeTypesAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/mimeTypesAction.md) | |
| [`overridePluginAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/overridePluginAction.md) | |
| [`proxifyPluginAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/proxifyPluginAction.md) | |
| [`readyCheckAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/readyCheckAction.md) | |
| [`requestBodyAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/requestBodyAction.md) | |
| [`requestResponseAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/requestResponseAction.md) | |
| [`resourceHandlerAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/resourceHandlerAction.md) | |
| [`setHeadersAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/setHeadersAction.md) | |
| [`siteCollectionAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/siteCollectionAction.md) | |
| [`streamPluginAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/streamPluginAction.md) | |
| [`twitterPluginAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/twitterPluginAction.md) | |
| [`youtubePluginAction`](https://4dboard.github.io/proxy-yxorp/docs/classes/youtubePluginAction.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Stringable`](https://4dboard.github.io/proxy-yxorp/docs/classes/Stringable.md) | |

### \Cockpit

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthController`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/AuthController.md) | Class Controller|

### \Cockpit\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Accounts`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Controller/Accounts.md) | Class Controller|
| [`Auth`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Controller/Auth.md) | Class Controller|
| [`Base`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Controller/Base.md) | Class Controller|
| [`Media`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Controller/Media.md) | Class Controller|
| [`RestAdmin`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Controller/RestAdmin.md) | Class Controller|
| [`RestApi`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Controller/RestApi.md) | Class Controller|
| [`Settings`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Controller/Settings.md) | Class Controller|
| [`Utils`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Controller/Utils.md) | Class Controller|
| [`Webhooks`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Controller/Webhooks.md) | Class Controller|

### \Cockpit\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Helper/Admin.md) | Admin Helper class.|
| [`Async`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Helper/Async.md) | Async Helper class.|
| [`Csrf`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Helper/Csrf.md) | |
| [`Jobs`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Helper/Jobs.md) | |
| [`Revisions`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Helper/Revisions.md) | |
| [`Updater`](https://4dboard.github.io/proxy-yxorp/docs/classes/Cockpit/Helper/Updater.md) | Admin Helper class.|

### \ColinODell\Json5

#### Classes

| Class | Description |
|-------|-------------|
| [`Json5Decoder`](https://4dboard.github.io/proxy-yxorp/docs/classes/ColinODell/Json5/Json5Decoder.md) | |
| [`SyntaxError`](https://4dboard.github.io/proxy-yxorp/docs/classes/ColinODell/Json5/SyntaxError.md) | |

### \Collections\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](https://4dboard.github.io/proxy-yxorp/docs/classes/Collections/Controller/Admin.md) | Class Controller|
| [`Import`](https://4dboard.github.io/proxy-yxorp/docs/classes/Collections/Controller/Import.md) | Class Controller|
| [`RestApi`](https://4dboard.github.io/proxy-yxorp/docs/classes/Collections/Controller/RestApi.md) | Class Controller|
| [`Trash`](https://4dboard.github.io/proxy-yxorp/docs/classes/Collections/Controller/Trash.md) | Class Controller|
| [`Utils`](https://4dboard.github.io/proxy-yxorp/docs/classes/Collections/Controller/Utils.md) | Class Controller|

### \ColorThief

#### Classes

| Class | Description |
|-------|-------------|
| [`CMap`](https://4dboard.github.io/proxy-yxorp/docs/classes/ColorThief/CMap.md) | |
| [`ColorThief`](https://4dboard.github.io/proxy-yxorp/docs/classes/ColorThief/ColorThief.md) | |
| [`PQueue`](https://4dboard.github.io/proxy-yxorp/docs/classes/ColorThief/PQueue.md) | |
| [`VBox`](https://4dboard.github.io/proxy-yxorp/docs/classes/ColorThief/VBox.md) | |

### \ColorThief\Image

#### Classes

| Class | Description |
|-------|-------------|
| [`ImageLoader`](https://4dboard.github.io/proxy-yxorp/docs/classes/ColorThief/Image/ImageLoader.md) | |

### \ColorThief\Image\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`GDImageAdapter`](https://4dboard.github.io/proxy-yxorp/docs/classes/ColorThief/Image/Adapter/GDImageAdapter.md) | Base adapter implementation to handle image manipulation.|
| [`GmagickImageAdapter`](https://4dboard.github.io/proxy-yxorp/docs/classes/ColorThief/Image/Adapter/GmagickImageAdapter.md) | Base adapter implementation to handle image manipulation.|
| [`ImageAdapter`](https://4dboard.github.io/proxy-yxorp/docs/classes/ColorThief/Image/Adapter/ImageAdapter.md) | Base adapter implementation to handle image manipulation.|
| [`ImagickImageAdapter`](https://4dboard.github.io/proxy-yxorp/docs/classes/ColorThief/Image/Adapter/ImagickImageAdapter.md) | Base adapter implementation to handle image manipulation.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`IImageAdapter`](https://4dboard.github.io/proxy-yxorp/docs/classes/ColorThief/Image/Adapter/IImageAdapter.md) | Basic interface for all image adapters.|

### \Composer

#### Classes

| Class | Description |
|-------|-------------|
| [`InstalledVersions`](https://4dboard.github.io/proxy-yxorp/docs/classes/Composer/InstalledVersions.md) | |

### \Composer\Autoload

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassLoader`](https://4dboard.github.io/proxy-yxorp/docs/classes/Composer/Autoload/ClassLoader.md) | ClassLoader implements a PSR-0, PSR-4 and classmap class loader.|
| [`ComposerStaticInit0fc67c8c6d14d2081ce037f8348a35e1`](https://4dboard.github.io/proxy-yxorp/docs/classes/Composer/Autoload/ComposerStaticInit0fc67c8c6d14d2081ce037f8348a35e1.md) | |

### \Firebase\JWT

#### Classes

| Class | Description |
|-------|-------------|
| [`BeforeValidException`](https://4dboard.github.io/proxy-yxorp/docs/classes/Firebase/JWT/BeforeValidException.md) | |
| [`ExpiredException`](https://4dboard.github.io/proxy-yxorp/docs/classes/Firebase/JWT/ExpiredException.md) | |
| [`JWK`](https://4dboard.github.io/proxy-yxorp/docs/classes/Firebase/JWT/JWK.md) | JSON Web Key implementation, based on this spec:<br />https://tools.ietf.org/html/draft-ietf-jose-json-web-key-41|
| [`JWT`](https://4dboard.github.io/proxy-yxorp/docs/classes/Firebase/JWT/JWT.md) | JSON Web Token implementation, based on this spec:<br />https://tools.ietf.org/html/rfc7519|
| [`SignatureInvalidException`](https://4dboard.github.io/proxy-yxorp/docs/classes/Firebase/JWT/SignatureInvalidException.md) | |

### \Forms\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](https://4dboard.github.io/proxy-yxorp/docs/classes/Forms/Controller/Admin.md) | Class Controller|
| [`RestApi`](https://4dboard.github.io/proxy-yxorp/docs/classes/Forms/Controller/RestApi.md) | Class Controller|

### \Jean85

#### Classes

| Class | Description |
|-------|-------------|
| [`PrettyVersions`](https://4dboard.github.io/proxy-yxorp/docs/classes/Jean85/PrettyVersions.md) | |
| [`Version`](https://4dboard.github.io/proxy-yxorp/docs/classes/Jean85/Version.md) | |

### \League\ColorExtractor

#### Classes

| Class | Description |
|-------|-------------|
| [`Color`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/ColorExtractor/Color.md) | |
| [`ColorExtractor`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/ColorExtractor/ColorExtractor.md) | |
| [`Palette`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/ColorExtractor/Palette.md) | |

### \League\Flysystem

#### Classes

| Class | Description |
|-------|-------------|
| [`Config`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Config.md) | |
| [`ConnectionErrorException`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/ConnectionErrorException.md) | |
| [`ConnectionRuntimeException`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/ConnectionRuntimeException.md) | |
| [`CorruptedPathDetected`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/CorruptedPathDetected.md) | |
| [`Directory`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Directory.md) | |
| [`Exception`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Exception.md) | |
| [`File`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/File.md) | |
| [`FileExistsException`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/FileExistsException.md) | |
| [`FileNotFoundException`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/FileNotFoundException.md) | |
| [`Filesystem`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Filesystem.md) | |
| [`FilesystemNotFoundException`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/FilesystemNotFoundException.md) | Thrown when the MountManager cannot find a filesystem.|
| [`Handler`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Handler.md) | |
| [`InvalidRootException`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/InvalidRootException.md) | |
| [`MountManager`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/MountManager.md) | Class MountManager.|
| [`NotSupportedException`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/NotSupportedException.md) | |
| [`RootViolationException`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/RootViolationException.md) | |
| [`SafeStorage`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/SafeStorage.md) | |
| [`UnreadableFileException`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/UnreadableFileException.md) | |
| [`Util`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Util.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdapterInterface`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/AdapterInterface.md) | |
| [`FilesystemException`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/FilesystemException.md) | |
| [`FilesystemInterface`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/FilesystemInterface.md) | |
| [`PluginInterface`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/PluginInterface.md) | |
| [`ReadInterface`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/ReadInterface.md) | |

### \League\Flysystem\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractAdapter`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Adapter/AbstractAdapter.md) | |
| [`AbstractFtpAdapter`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Adapter/AbstractFtpAdapter.md) | |
| [`Ftp`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Adapter/Ftp.md) | |
| [`Ftpd`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Adapter/Ftpd.md) | |
| [`Local`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Adapter/Local.md) | |
| [`NullAdapter`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Adapter/NullAdapter.md) | |
| [`SynologyFtp`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Adapter/SynologyFtp.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CanOverwriteFiles`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Adapter/CanOverwriteFiles.md) | Adapters that implement this interface let the Filesystem know that files can be overwritten using the write<br />functions and don&#039;t need the update function to be called. This can help improve performance when asserts are disabled.|

### \League\Flysystem\Adapter\Polyfill

#### Traits

| Trait | Description |
|-------|-------------|
| [`NotSupportingVisibilityTrait`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Adapter/Polyfill/NotSupportingVisibilityTrait.md) | |
| [`StreamedCopyTrait`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Adapter/Polyfill/StreamedCopyTrait.md) | |
| [`StreamedReadingTrait`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Adapter/Polyfill/StreamedReadingTrait.md) | A helper for adapters that only handle strings to provide read streams.|
| [`StreamedTrait`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Adapter/Polyfill/StreamedTrait.md) | |
| [`StreamedWritingTrait`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Adapter/Polyfill/StreamedWritingTrait.md) | |

### \League\Flysystem\Plugin

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractPlugin`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Plugin/AbstractPlugin.md) | |
| [`EmptyDir`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Plugin/EmptyDir.md) | |
| [`ForcedCopy`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Plugin/ForcedCopy.md) | |
| [`ForcedRename`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Plugin/ForcedRename.md) | |
| [`GetWithMetadata`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Plugin/GetWithMetadata.md) | |
| [`ListFiles`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Plugin/ListFiles.md) | |
| [`ListPaths`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Plugin/ListPaths.md) | |
| [`ListWith`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Plugin/ListWith.md) | |
| [`PluginNotFoundException`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Plugin/PluginNotFoundException.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`PluggableTrait`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Plugin/PluggableTrait.md) | |

### \League\Flysystem\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`StreamHasher`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/Flysystem/Util/StreamHasher.md) | |

### \League\MimeTypeDetection

#### Classes

| Class | Description |
|-------|-------------|
| [`EmptyExtensionToMimeTypeMap`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/MimeTypeDetection/EmptyExtensionToMimeTypeMap.md) | |
| [`ExtensionMimeTypeDetector`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/MimeTypeDetection/ExtensionMimeTypeDetector.md) | |
| [`FinfoMimeTypeDetector`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/MimeTypeDetection/FinfoMimeTypeDetector.md) | |
| [`GeneratedExtensionToMimeTypeMap`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/MimeTypeDetection/GeneratedExtensionToMimeTypeMap.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtensionToMimeTypeMap`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/MimeTypeDetection/ExtensionToMimeTypeMap.md) | |
| [`MimeTypeDetector`](https://4dboard.github.io/proxy-yxorp/docs/classes/League/MimeTypeDetection/MimeTypeDetector.md) | |

### \Lime

#### Classes

| Class | Description |
|-------|-------------|
| [`App`](https://4dboard.github.io/proxy-yxorp/docs/classes/Lime/App.md) | |
| [`AppAware`](https://4dboard.github.io/proxy-yxorp/docs/classes/Lime/AppAware.md) | |
| [`Helper`](https://4dboard.github.io/proxy-yxorp/docs/classes/Lime/Helper.md) | |
| [`Module`](https://4dboard.github.io/proxy-yxorp/docs/classes/Lime/Module.md) | |
| [`Request`](https://4dboard.github.io/proxy-yxorp/docs/classes/Lime/Request.md) | |
| [`Response`](https://4dboard.github.io/proxy-yxorp/docs/classes/Lime/Response.md) | |

### \LimeExtra

#### Classes

| Class | Description |
|-------|-------------|
| [`App`](https://4dboard.github.io/proxy-yxorp/docs/classes/LimeExtra/App.md) | Class App|
| [`Controller`](https://4dboard.github.io/proxy-yxorp/docs/classes/LimeExtra/Controller.md) | Class Controller|

### \LimeExtra\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`Assets`](https://4dboard.github.io/proxy-yxorp/docs/classes/LimeExtra/Helper/Assets.md) | Assets class.|
| [`Cookie`](https://4dboard.github.io/proxy-yxorp/docs/classes/LimeExtra/Helper/Cookie.md) | |
| [`FileObject`](https://4dboard.github.io/proxy-yxorp/docs/classes/LimeExtra/Helper/FileObject.md) | Use custom FileObject to prevent &quot;too many files open&quot; error|
| [`Filesystem`](https://4dboard.github.io/proxy-yxorp/docs/classes/LimeExtra/Helper/Filesystem.md) | |
| [`I18n`](https://4dboard.github.io/proxy-yxorp/docs/classes/LimeExtra/Helper/I18n.md) | I18n class. Manage translations|
| [`Image`](https://4dboard.github.io/proxy-yxorp/docs/classes/LimeExtra/Helper/Image.md) | |
| [`Img`](https://4dboard.github.io/proxy-yxorp/docs/classes/LimeExtra/Helper/Img.md) | |
| [`Markdown`](https://4dboard.github.io/proxy-yxorp/docs/classes/LimeExtra/Helper/Markdown.md) | Class Markdown|
| [`SimpleAcl`](https://4dboard.github.io/proxy-yxorp/docs/classes/LimeExtra/Helper/SimpleAcl.md) | Class SimpleAcl|
| [`Utils`](https://4dboard.github.io/proxy-yxorp/docs/classes/LimeExtra/Helper/Utils.md) | Class Utils|
| [`YAML`](https://4dboard.github.io/proxy-yxorp/docs/classes/LimeExtra/Helper/YAML.md) | Class YAML|

### \Lime\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`Cache`](https://4dboard.github.io/proxy-yxorp/docs/classes/Lime/Helper/Cache.md) | |
| [`Session`](https://4dboard.github.io/proxy-yxorp/docs/classes/Lime/Helper/Session.md) | |

### \MongoDB

#### Classes

| Class | Description |
|-------|-------------|
| [`BulkWriteResult`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/BulkWriteResult.md) | Result class for a bulk write operation.|
| [`ChangeStream`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/ChangeStream.md) | Iterator for a change stream.|
| [`Client`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Client.md) | |
| [`Collection`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Collection.md) | |
| [`Database`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Database.md) | |
| [`DeleteResult`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/DeleteResult.md) | Result class for a delete operation.|
| [`InsertManyResult`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/InsertManyResult.md) | Result class for a multi-document insert operation.|
| [`InsertOneResult`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/InsertOneResult.md) | Result class for a single-document insert operation.|
| [`MapReduceResult`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/MapReduceResult.md) | Result class for mapReduce command results.|
| [`UpdateResult`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/UpdateResult.md) | Result class for an update operation.|

### \MongoDB\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Exception/BadMethodCallException.md) | |
| [`InvalidArgumentException`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Exception/InvalidArgumentException.md) | |
| [`ResumeTokenException`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Exception/ResumeTokenException.md) | |
| [`RuntimeException`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Exception/RuntimeException.md) | |
| [`UnexpectedValueException`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Exception/UnexpectedValueException.md) | |
| [`UnsupportedException`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Exception/UnsupportedException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Exception`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Exception/Exception.md) | |

### \MongoDB\GridFS

#### Classes

| Class | Description |
|-------|-------------|
| [`Bucket`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/GridFS/Bucket.md) | Bucket provides a public API for interacting with the GridFS files and chunks<br />collections.|

### \MongoDB\GridFS\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`CorruptFileException`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/GridFS/Exception/CorruptFileException.md) | |
| [`FileNotFoundException`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/GridFS/Exception/FileNotFoundException.md) | |
| [`StreamException`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/GridFS/Exception/StreamException.md) | |

### \MongoDB\Model

#### Classes

| Class | Description |
|-------|-------------|
| [`BSONArray`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Model/BSONArray.md) | Model class for a BSON array.|
| [`BSONDocument`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Model/BSONDocument.md) | Model class for a BSON document.|
| [`BSONIterator`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Model/BSONIterator.md) | Iterator for BSON documents.|
| [`CollectionInfo`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Model/CollectionInfo.md) | Collection information model class.|
| [`DatabaseInfo`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Model/DatabaseInfo.md) | Database information model class.|
| [`IndexInfo`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Model/IndexInfo.md) | Index information model class.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CollectionInfoIterator`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Model/CollectionInfoIterator.md) | CollectionInfoIterator interface.|
| [`DatabaseInfoIterator`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Model/DatabaseInfoIterator.md) | DatabaseInfoIterator interface.|
| [`IndexInfoIterator`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Model/IndexInfoIterator.md) | IndexInfoIterator interface.|

### \MongoDB\Operation

#### Classes

| Class | Description |
|-------|-------------|
| [`Aggregate`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/Aggregate.md) | Operation for the aggregate command.|
| [`BulkWrite`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/BulkWrite.md) | Operation for executing multiple write operations.|
| [`Count`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/Count.md) | Operation for the count command.|
| [`CountDocuments`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/CountDocuments.md) | Operation for obtaining an exact count of documents in a collection|
| [`CreateCollection`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/CreateCollection.md) | Operation for the create command.|
| [`CreateIndexes`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/CreateIndexes.md) | Operation for the createIndexes command.|
| [`DatabaseCommand`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/DatabaseCommand.md) | Operation for executing a database command.|
| [`DeleteMany`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/DeleteMany.md) | Operation for deleting multiple document with the delete command.|
| [`DeleteOne`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/DeleteOne.md) | Operation for deleting a single document with the delete command.|
| [`Distinct`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/Distinct.md) | Operation for the distinct command.|
| [`DropCollection`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/DropCollection.md) | Operation for the drop command.|
| [`DropDatabase`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/DropDatabase.md) | Operation for the dropDatabase command.|
| [`DropIndexes`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/DropIndexes.md) | Operation for the dropIndexes command.|
| [`EstimatedDocumentCount`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/EstimatedDocumentCount.md) | Operation for obtaining an estimated count of documents in a collection|
| [`Explain`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/Explain.md) | Operation for the explain command.|
| [`Find`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/Find.md) | Operation for the find command.|
| [`FindOne`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/FindOne.md) | Operation for finding a single document with the find command.|
| [`FindOneAndDelete`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/FindOneAndDelete.md) | Operation for deleting a document with the findAndModify command.|
| [`FindOneAndReplace`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/FindOneAndReplace.md) | Operation for replacing a document with the findAndModify command.|
| [`FindOneAndUpdate`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/FindOneAndUpdate.md) | Operation for updating a document with the findAndModify command.|
| [`InsertMany`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/InsertMany.md) | Operation for inserting multiple documents with the insert command.|
| [`InsertOne`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/InsertOne.md) | Operation for inserting a single document with the insert command.|
| [`ListCollectionNames`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/ListCollectionNames.md) | Operation for the listCollectionNames helper.|
| [`ListCollections`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/ListCollections.md) | Operation for the listCollections command.|
| [`ListDatabaseNames`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/ListDatabaseNames.md) | Operation for the ListDatabases command, returning only database names.|
| [`ListDatabases`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/ListDatabases.md) | Operation for the ListDatabases command.|
| [`ListIndexes`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/ListIndexes.md) | Operation for the listIndexes command.|
| [`MapReduce`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/MapReduce.md) | Operation for the mapReduce command.|
| [`ModifyCollection`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/ModifyCollection.md) | Operation for the collMod command.|
| [`ReplaceOne`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/ReplaceOne.md) | Operation for replacing a single document with the update command.|
| [`UpdateMany`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/UpdateMany.md) | Operation for updating multiple documents with the update command.|
| [`UpdateOne`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/UpdateOne.md) | Operation for updating a single document with the update command.|
| [`Watch`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoDB/Operation/Watch.md) | Operation for creating a change stream with the aggregate command.|

### \MongoHybrid

#### Classes

| Class | Description |
|-------|-------------|
| [`Client`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoHybrid/Client.md) | |
| [`Mongo`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoHybrid/Mongo.md) | |
| [`MongoLite`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoHybrid/MongoLite.md) | |
| [`ResultSet`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoHybrid/ResultSet.md) | |

### \MongoLite

#### Classes

| Class | Description |
|-------|-------------|
| [`Client`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoLite/Client.md) | Client object.|
| [`Collection`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoLite/Collection.md) | Collection object.|
| [`Cursor`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoLite/Cursor.md) | Cursor object.|
| [`Database`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoLite/Database.md) | Database object.|
| [`UtilArrayQuery`](https://4dboard.github.io/proxy-yxorp/docs/classes/MongoLite/UtilArrayQuery.md) | |

### \PHPMailer\PHPMailer

#### Classes

| Class | Description |
|-------|-------------|
| [`Exception`](https://4dboard.github.io/proxy-yxorp/docs/classes/PHPMailer/PHPMailer/Exception.md) | PHPMailer exception handler.|
| [`OAuth`](https://4dboard.github.io/proxy-yxorp/docs/classes/PHPMailer/PHPMailer/OAuth.md) | OAuth - OAuth2 authentication wrapper class.|
| [`PHPMailer`](https://4dboard.github.io/proxy-yxorp/docs/classes/PHPMailer/PHPMailer/PHPMailer.md) | PHPMailer - PHP email creation and transport class.|
| [`POP3`](https://4dboard.github.io/proxy-yxorp/docs/classes/PHPMailer/PHPMailer/POP3.md) | PHPMailer POP-Before-SMTP Authentication Class.|
| [`SMTP`](https://4dboard.github.io/proxy-yxorp/docs/classes/PHPMailer/PHPMailer/SMTP.md) | PHPMailer RFC821 SMTP email transport class.|

### \PackageVersions

#### Classes

| Class | Description |
|-------|-------------|
| [`Installer`](https://4dboard.github.io/proxy-yxorp/docs/classes/PackageVersions/Installer.md) | |
| [`Versions`](https://4dboard.github.io/proxy-yxorp/docs/classes/PackageVersions/Versions.md) | This class is generated by composer/package-versions-deprecated, specifically by|

### \SimpleStorage

#### Classes

| Class | Description |
|-------|-------------|
| [`Client`](https://4dboard.github.io/proxy-yxorp/docs/classes/SimpleStorage/Client.md) | |

### \Singletons\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](https://4dboard.github.io/proxy-yxorp/docs/classes/Singletons/Controller/Admin.md) | Class Controller|
| [`RestApi`](https://4dboard.github.io/proxy-yxorp/docs/classes/Singletons/Controller/RestApi.md) | Class Controller|

### \ZipStream

#### Classes

| Class | Description |
|-------|-------------|
| [`Exception`](https://4dboard.github.io/proxy-yxorp/docs/classes/ZipStream/Exception.md) | This class is only for inheriting|
| [`ZipStream`](https://4dboard.github.io/proxy-yxorp/docs/classes/ZipStream/ZipStream.md) | ZipStream|

### \ZipStream\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FileNotFoundException`](https://4dboard.github.io/proxy-yxorp/docs/classes/ZipStream/Exception/FileNotFoundException.md) | This Exception gets invoked if a file wasn&#039;t found|
| [`FileNotReadableException`](https://4dboard.github.io/proxy-yxorp/docs/classes/ZipStream/Exception/FileNotReadableException.md) | This Exception gets invoked if a file wasn&#039;t found|
| [`InvalidOptionException`](https://4dboard.github.io/proxy-yxorp/docs/classes/ZipStream/Exception/InvalidOptionException.md) | This Exception gets invoked if an invalid parameter gets passed on as option|
| [`StreamNotReadableException`](https://4dboard.github.io/proxy-yxorp/docs/classes/ZipStream/Exception/StreamNotReadableException.md) | This Exception gets invoked if fread() fails on a stream.|

### \claviska

#### Classes

| Class | Description |
|-------|-------------|
| [`SimpleImage`](https://4dboard.github.io/proxy-yxorp/docs/classes/claviska/SimpleImage.md) | A PHP class that makes working with images as simple as possible.|

### \yxorP\http

#### Classes

| Class | Description |
|-------|-------------|
| [`cache`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/http/cache.md) | |
| [`paramStore`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/http/paramStore.md) | |
| [`request`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/http/request.md) | |
| [`response`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/http/response.md) | |
| [`wrapper`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/http/wrapper.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`actionState`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/http/actionState.md) | |

### \yxorP\minify

#### Classes

| Class | Description |
|-------|-------------|
| [`areplacer`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/minify/areplacer.md) | |
| [`attributesSimplifier`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/minify/attributesSimplifier.md) | |
| [`htmlCommentsRemover`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/minify/htmlCommentsRemover.md) | |
| [`inlineCssMinifier`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/minify/inlineCssMinifier.md) | |
| [`inlineJavascriptMinifier`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/minify/inlineJavascriptMinifier.md) | |
| [`minify`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/minify/minify.md) | |
| [`quotesRemover`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/minify/quotesRemover.md) | |
| [`whitespacesRemover`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/minify/whitespacesRemover.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`minfyInterface`](https://4dboard.github.io/proxy-yxorp/docs/classes/yxorP/minify/minfyInterface.md) | |

**
> yxorP Documentation
