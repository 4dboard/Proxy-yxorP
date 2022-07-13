![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/logo.png)

![image](https://user-images.githubusercontent.com/6468571/174686673-e3ee3ce5-2c13-4ae6-886d-f22aed12a5a0.png)

![image](https://user-images.githubusercontent.com/6468571/177683559-6000c882-dfb4-4f7c-8b1d-a0f0e775d1d0.png)

## yxorP Headless SAAS(y), Multi-tenancy Proxy + Backend (GUI) included, PHP CURL+Composer are Optional

📢 [ [ ARCHITECTURE](https://github.com/4dboard/proxy-yxorp/wiki) ]
⚡ [ [ DEVELOPERS](https://github.com/4dboard/proxy-yxorp/blob/main/docs/index.md) ]
🌈 [ [DOCUMENTATION](https://4dboard.github.io/proxy-yxorp/docs/) ]
🔥 [ [MAKING VIDEO](https://4dboard.github.io/proxy-yxorp/docs/movie.mp4) ]
🌟 [ [WEBSITE](https://4dboard.github.io/) ] 🚀️

[![image](https://a.fsdn.com/con/app/sf-download-button)](https://sourceforge.net/projects/proxy-yxorp/files/latest/download)

[![image](https://www.donPabloNow.com/notice.wepd)](https://www.donPabloNow.com/#notice)

![img.png](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/177668426-3548dbf3-03ff-4ea0-a1be-08436a3751bd.png)

> ⛔️[ GITHUB  : ](https://github.com/donspablo) Without more people getting behind this, it won't go very far. Please click the "star" button to show your support for this endeavour if you think it interesting. Assuming there is at least some enthusiasm for the idea, development will proceed.

> 🏆️ [ LIVE DEMO  : ](https://gitpod.io/#https://github.com/4dboard/proxy-yxorp) We have just launched the first working live demo / sneak preview via Gitpod`

> 🎥️ [ MAKING OF VIDEO  : ](https://4dboard.github.io/proxy-yxorp/docs/movie.mp4) We put up a short video called "Making of the yxorP Proxy" so that anyone who wants to see how the project came together can do so.

> ❤️[ PATREON  : ](https://patreon.com/donpablonow) Donations always welcome via Github (Subscriptions & Credit Cards), Patreon (Subscriptions & Credit Cards), Paypal (Once-off, Credit Cards & E-wallet) & Ethereum (Once-off, Crypto Currency)

> ✔️[ PAYPAL  : ](https://www.paypal.me/donpanlonow) Any contributions you can make toward this endeavour would be much appreciated.

![img.png](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/177683962-8426f6e0-9626-4484-a1a0-1c03c952e8e4.png) ![image](https://user-images.githubusercontent.com/6468571/177686029-28027b8e-fadd-4aed-973b-d79bbe8edfdc.png)

yxorP is a plug-and-play, flat-file application that *does not need Composer, PHP CURL, or databases*. yxorP is meant to
work as a proxy that may modify or change the content of several websites and is managed through a simple Cockpit
backend (GUI).

It is well-known that yxorP is one of the web proxy systems that offers the most customization compared to other web
proxy systems now available on the market. This is because of its event-driven architecture and emphasis on its
plugin-based design, as opposed to its built-in features, which are the most important and distinguishing components
that permit customization and extension of its capabilities. In addition to its Back-end administration CMS and
graphical user interface, yxorP has a variety of additional distinguishing features.

To get site-specific requirements from the backend, the hostname of the incoming request is used. These specifications
are then used to get and alter the requested webpage. In addition, website material may optionally be spun using the
application's already-integrated *article spinning engine*. Five hundred times slower than flat-file cache solutions are
memory-based cache systems like Memcache and Redis. This is accomplished by reducing serialization and deserialization
procedures, which results in a cache that is much faster.

The Snag error reporting and warning system now supports yxorP in its most complete version after an upgrade. This
operation was carried out to confirm Snag's compatibility with the change. Modifications to the *default logging* system
may be implemented in as little as two minutes due to the program's compatibility with the overwhelming majority of *
industry-standard error tracking systems*.

![image](https://user-images.githubusercontent.com/6468571/174922574-d5a246b5-c30e-4a63-bc22-4957184feef9.png)

yxorP was designed to work with either a stateless server (Apache) or a *stateful server* (Swoole), both of which are *
high-performance* networking frameworks with a *event-driven, asynchronous, and non-blocking I/O* model - Compatible
with TCP, UDP, Unix socket, HTTP, and Websocket and permits the creation of rapid and scalable concurrent services (*
Parallel*).

![img.png](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/177686281-5c726469-125c-4075-a14d-8dfc086d1b54.png)

PHP, unlike other programming languages, does not have its own state. Individual single inquiry is unique. The protocol
mirrors the beginnings of the HyperText Transfer Protocol in this sense (HTTP). In addition, state may be implemented
via sessions, databases, shared memory, files, or any other technology capable of storing state in some way. There may
be more options, such as shared memory.

``` 

server {

        listen 80 default_server;
        listen [::]:80 default_server;
       
        listen 443 ssl default_server;
        listen [::]:443 ssl default_server;
        
        error_log /var/www/yxorP/logs;
        
        root /var/www/yxorP;

        index index.php;

        server_name _;

        location ~ / {
                if (!-e $request_filename){
                        rewrite ^.* /index.php break;
                }
                include snippets/fastcgi-php.conf; fastcgi_pass unix:/run/php/php8.1-fpm.sock;
        }

}


``` 

![img.png](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/177684223-790bd4aa-7e8a-4dbd-a5e0-87ce8f0c5a8e.png) ![image](https://user-images.githubusercontent.com/6468571/177686596-c72fadb4-1f88-4eb9-95d6-e83e1cbfc5f7.png)

Both the quick and stable Swoole and RoadRunner servers are capable of running PHP applications with persistent data.
Once installed, the Swoole PHP extension offers users access to a range of useful and intriguing features. This includes
web sockets, coroutines, fibers, and caching. RoadRunner is a robust application server, load balancer, and process
manager developed using GoLang. Depending on the coder, Octane may use any of these methods. Due to the PHP Swoole
extension, Octane has access to many more features than RoadRunner.

``` 

php ./server.php

```

![img.png](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/177686387-dc457561-f3ad-404b-97c4-1b73b7f37e4d.png)

Docker Compose is a tool for constructing and deploying multi-container-based applications. Compose enables us to design
our services inside a YAML file and deploy, grow, and delete our infrastructure with a single command.

``` 

docker-composer up -d 

```

![img.png](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/177684476-58524026-dacc-426a-ac26-5597836683b9.png) ![image](https://user-images.githubusercontent.com/6468571/177686426-5ba11476-7007-45e2-82ae-82a4879176e0.png)

Docker enables its users to manage containers in a manner analogous to managing very lightweight and modular virtual
machines. This streamlines a variety of procedures, including the design and building of containers as well as the
transport of pictures.

```

docker run

-p 80:80 --rm -u www-data -v \`pwd\`:/var/www -e ENV=dev donpablonow/yxorp 

```

![img.png](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)
![image](https://user-images.githubusercontent.com/6468571/177686483-68ab777a-d0cc-497c-b9ff-d981ad8e7037.png)

> ⚠️Requires: Minimum requirement is PHP version 8.0 +

Create a duplicate of the  "example.env" file and save it as ".env"

```

cp ./example.env ./.env 

```

Modify the settings included inside the ".env" file as necessary. The program is configured to respond to queries from
any domain by acting as a proxy and forwarding them to the "example.com" website. Replace "www.example.com" in the.env
file with a new URL, and all future queries will reflect the change. After serving the website on localhost or any other
domain, go to http://localhost/dashboard and enter the login yxorP and the password you established. In addition, you
may use the credentials provided in the '.env' file. This will allow you to configure the application to direct traffic
from a given domain to a specific website. After gaining access to the dashboard, choose "sites" and clone the example
website so that its settings may be modified.

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/diagrams.png)

![img.png](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

![image](https://user-images.githubusercontent.com/6468571/177684819-fbdd79b3-93ad-4012-aa41-7661fd9638ec.png)
![image](https://user-images.githubusercontent.com/6468571/177685870-385a203b-9654-4c7b-b3e7-00c725d3fa51.png)

### 🔋 Batteries Included: Plug & Play \[CURL + Composer Optional\], Proxy as a Service, Multi-tenant, Multi-Threaded, with Cache & Article Spinner.

In addition to a system for content-spinning and an auto-caching engine, the website's interface is visually pleasant.
Arangodb, Devnull, Dynamodb (AWS), Cassandra, Devrandom, Files, CouchBasev3, Memstatic, Firestore, Couchdb, Leveldb,
Mongodb, Memcache(d),Predis, Sqlite, Redis, Wincache, Sssb, and Zend Disk Cache are among the available cache drivers.
Integrating the two most efficient web proxy applications enhances performance. This self-service proxy engine supports
several tenants with little performance loss by combining an attractive flat-file web interface with a bespoke
multi-threaded caching layer and a very effective thesaurus article spinner with a minimum vocabulary of 10,000 words.
In addition to an integrated cache management system and a web-based cache management system, the proxy is modular or
plugin-based. Internet-based graphical user interface (GUI) monitoring and analytics (GUI). By using a custom-built
content spinning engine, the system is able to "enhance" (or "spin") information with little performance loss (10,000+
thesaurus/dictionary items) and without sacrificing quality.

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/Idna.png)
![image](https://user-images.githubusercontent.com/6468571/177671798-1d8a9fc9-64d4-43d8-82e1-3d2a056ada90.png) ![image](https://user-images.githubusercontent.com/6468571/157188599-5fdfd399-b340-434e-b80b-ca356f8ad8ab.png)

### Cockpit Back-End Cockpit is awesome if you need a flexible content structure but don't want to be limited in how to

Implementation is the most efficient approach to use the offered information. Cockpit is a good option to investigate if
you need to manage a large number of devices or require a content management interface for static site builders. Both of
these scenarios need cautious cockpit operation. If any of these apply to your situation, you should give them special
consideration. Each of these occurrences happens sometimes. Construct whole new apps, then provide Cockpit access to
them so it can feed them content.

![image](https://user-images.githubusercontent.com/6468571/174488292-66e75484-d57b-472f-8921-661d09387727.png)

Introduction Cockpit is a headless CMS with an API-first approach that puts content first. It is designed to simplify
the process of publication by separating content management from content consumption on the client side. Cockpit is
focusing just on the back-end work to manage content. Rather than worry about delivery of content through pages, its
goal is to provide structured content across different channels via a simpleAPI.

![image](https://user-images.githubusercontent.com/6468571/174488463-767e2f7a-8409-445b-b7e8-ed45d0965a89.png)

#### Key features:

Manage flexible content models. There are no pre-defined content models. Define the content model yourself. Uncluttered
UI. Cockpit offers you a modern and simple user interface. One system, consume it the way you want. Receive your content
via a simple API.

#### The Advantages Of Going Headless

- No presentation limitations
- build the best design ever.
- Content for multiple channels – create content once, consume anywhere.
- Highly scalable content
- For all your devices and microsites.
- Minimum training required
- Get started, immediately.
- Easy integrations
- Connect with everything.

![image](https://user-images.githubusercontent.com/6468571/174488424-88456e97-539c-4ec2-918b-fc59be5be8da.png) ![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png) ![image](https://user-images.githubusercontent.com/6468571/177671919-1584593a-cfcc-476a-93ce-c1a65e81de92.png) ![image](https://user-images.githubusercontent.com/6468571/157188653-bde1f08c-27ee-4eb8-90f7-69d1e60aa949.png)

Applications Create static flat file variants of your original webpages by using yxorP to mirror your websites and offer
the mirrored/cloned copies as static flat file variations of the original webpages.

#### 🔥 Cache

When you use caching to load your websites, you may reduce loading time and server strain, resulting in websites that
load faster.

#### 📛 Firewall

Create a virtual firewall to protect your websites behind your proxy server, giving security against website assaults
such as DDOS attacks and other types of attacks.

#### 🔳 iFrame

It is possible to circumvent CORS for the iframing services that you need – ***not recommended, but feasible***.

#### 🔱 Load-balancing

This may be accomplished by deploying cloned copies of your website on various servers that are connected to a
load-balancing system.

#### ⌛ Allways-online

High/Continuous availability is achieved by running a proxy version of your existing website and switching to this
version of the website during upgrades or down-time.

##### + many more..

There are several additional uses that may be explored, and these are only a few of the more common ones.

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/logosnag.png)

Snag provides a solution for error monitoring and application stability management that is easy to use and implement.
The ability to make data-driven decisions about whether to develop software or address problems is contingent on the
ability to maintain stability.

![image](https://raw.githubusercontent.com/4dboard/proxy-yxorp/main/asset/Snag.gif)

Diagnostic data from our mobile assistance, which has been regarded as the best-in the industry, enables teams to
reproduce and fix issues as soon as they begin to have an impact on system stability. Reports on error situations are
arranged by root cause and may also be classified by business impact. In addition, they are supplied with extensive
diagnostic information.

![image](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png) ![image](https://user-images.githubusercontent.com/6468571/177672109-b49bb56d-abfe-411f-87b6-b506e47820b8.png) ![image](https://user-images.githubusercontent.com/6468571/157188697-4c3a2b95-b40b-441c-bf6a-45c97e4e4b57.png)

Gitpod gives Theia developers an integrated development environment (IDE) built on top of VS Code for editing and
organizing code. It provides a comprehensive OS environment so that applications developed for the platform may leverage
the OS environment to run.

[![image](https://vercel.com/button)](https://vercel.com/new/clone?repository-url=https://github.com/4dboard/yxorP) [![image](https://www.herokucdn.com/deploy/button.svg)](https://www.heroku.com/deploy/?template=https://gitpod.io/#https://github.com/4dboard/yxorP) [![image](https://render.com/images/deploy-to-render-button.svg)](https://render.com/deploy?repo=https://github.com/4dboard/yxorP) [![image](https://gitpod.io/button/open-in-gitpod.svg)](https://gitpod.io/#https://github.com/4dboard/yxorP)

Visit their website to discover more about Gitpod and how its features evolve over time. Nevertheless, a Gitpod is
really an Ubuntu 20.04 Focal Fossa container running in Docker. The installation procedure is hampered by the absence of
the user gitpod from the list of sudoers. The Dockerfile associated with a Docker instance may be modified by
installation components that need root access. Whether operations performed inside the Dockerfile, at the command line,
or within the code are preferable depends on the circumstance. For many jobs, Dockerfiles do not need to be very
elaborate.

Gitpod has a user account called gitpod and a home directory located at /home/gitpod, but the only data kept in the
shared and sharable workspace is the first Docker container. Only modifications performed in a Gitpod's workspace are
maintained during a clone or rollback. Under the path /workspace/your-workspace-name, all files and folders are deemed
to be part of the workspace.

![image](https://user-images.githubusercontent.com/6468571/152177615-421c1286-33cd-4c38-9f7b-3c486901ba81.png)

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/177672382-fc29dfac-1dab-4192-b042-ced6a6c051e9.png)

Two of the most powerful PHP reverse proxies now accessible on the internet have been merged to create a single web
proxy that outperforms the two when their combined performance is considered. Please keep in mind that this is a
brand-new project that may undergo changes in the future. With the php-proxy library, a component of the PHP programming
language that is available for free download, you may quickly and easily configure a web proxy application for your web
server. If you are able to contribute to or support this project, it would be much appreciated as it would enable me to
devote more development time to it, therefore expediting its progress.

![image](https://user-images.githubusercontent.com/6468571/153799459-4c352a2d-2bc0-413d-9048-7f94bdd7a1a5.png) ![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157206067-a7263dc6-09e4-4350-8ad2-3bd51fc349b0.png) ![image](https://user-images.githubusercontent.com/6468571/157188795-5034fd0f-d40e-4a58-9e8e-286e713fb397.png)

![image](https://user-images.githubusercontent.com/6468571/177675918-d0dcee6e-dc9e-4ed5-b859-85d5debb0bbb.png)

Server Bear in mind that this proxy script may not function properly on websites or pages that are very script-heavy or
include an excessive number of "dynamic components," as indicated above. Web proxies' inability to encrypt data is a
well-documented flaw in the technology. When visiting such websites, you should utilize a legitimate proxy server to
redirect your browser's HTTP requests via the following domains:

![image](https://user-images.githubusercontent.com/6468571/153799352-ee3e60ed-6564-4633-9cc1-7acc2cfb2b50.png)

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157188876-61dc86c4-508f-4169-a1f2-a9582c035c2a.png)

![image](https://user-images.githubusercontent.com/6468571/177675825-3e76629b-33f3-45fb-8358-b5a7a0eea0db.png)

Liberating Dev Tool For All Your Projects LAMP recipe, which may be purchased from the link

above, are required in order to complete the Lando - A Liberating Dev Tool For All Your Projects project. You may use
the Lando - A Liberating Dev Tool For All Your Projects project for all of your projects since it enables you to
either "plug and play" on PHP-compatible PCs or create in a LAMP environment. If you need any further information
regarding this project, please visit the section under "Frequently Asked Questions." Worldwide, professional developers
use local development and DevOps technologies on a daily basis, with the United States having the highest concentration
of such technologies. In spite of the fact that there are insufficient instruments to assist in the development process,
it is possible to transcend the conceptual limitations imposed by this situation. Concentrating your attention on the
most important activities will allow you to save time, money, and frustration in the long run. Focusing your efforts on
the most important tasks may help to alleviate some of the stress.

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/152177774-25482b2a-f8cd-4f19-a221-97dc29212a2d.png)

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

cd ./inc # Start it up lando start # List information about this app. lando info 

```

or

``` 

# Initialize a lamp recipe using the latest codeigniter version lando 

init \\ --source remote \\ --remote-url https://github.com/bcit-ci/CodeIgniter/archive/3.1.10.tar.gz \\ --remote-options="--strip-components 1" \\ --recipe lamp \\ --webroot . \\ --name my-first-lamp-app

```

For more information please see: https://docs.lando.dev/config/lamp.html

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157189458-e55e96dd-1faf-4fdf-8c63-f98fc5eab426.png)

![image](https://user-images.githubusercontent.com/6468571/177675740-33ed816f-4206-4ea3-b1e3-abdc45e04db3.png)

When it comes to software updates, it is more often than not that they will be made to the application's dependant
packages rather than the program itself; for example, most of the adjustments will be made to the php-proxy package
rather than to the application itself.

#### .env

This file will be loaded into the Config /\*\* \* {@inlinetag} \* this is @not a standardtag - must begin a line. \*
this is a valid {@inlinetag} also \* @standardtag \*/ class at the global level.

#### /plugins/

Users are encouraged to create their own unique plugins in this subdirectory, which will then be loaded automatically
from the main directory. The proxy, which comes with a number of built-in plugins, is not without its limitations, and
users are urged to create their own custom plugins in order to broaden the range of options available. Think of a simple
example like the file /plugins/TestPlugin.php in the plugins directory as an illustration.

![image](https://user-images.githubusercontent.com/6468571/152181962-33e4e658-5fbc-4b2d-9366-7147e9fabe65.png) ![image](https://user-images.githubusercontent.com/6468571/152181058-6446dd76-3012-4e9f-b05a-7d86ca5d0872.png) ![image](https://user-images.githubusercontent.com/6468571/157206427-04af776e-d516-4fc3-b0ca-2c2cbc0f44cc.png)

![image](https://user-images.githubusercontent.com/6468571/177675573-c9df68a1-75e6-445a-9432-c0627b0e98a5.png)

Navigate to the root of the project with your browser, register an account and then login.

yxorP is database, PHP CURL, and Composer compatible. As proxy, yxorP has permission to edit. Cockpit manages a PHAR (
PHP archive) binary version of proxy that is used by a number of websites. The yxorP customizable web proxy.
Market-ready proxy systems Not built-in functionality, but event-driven architecture and plugin-based design are
crucial. Expandable, configurable. YxorP's graphical back-end CMS interface is unique. The hostname of the request
fetches site-specific information from the backend. modified. Web page content may be rewritten by custom-built engines.
Any page modifications are preserved. 500 instances quicker than flat-file memory-based cache Memcache and Redis are
caches. Lack of serialization accelerates cache processing. Snag will support yxorP after a software update. This
problem has been made compatible with mods. Changing *default logging* in Due to the interoperability of the application
with error tracking

![image](https://user-images.githubusercontent.com/6468571/152181949-99b9aaa6-586e-4f64-826d-ec7616535d1c.png) ![image](https://user-images.githubusercontent.com/6468571/157189005-b1eb3398-be00-47a3-825d-c13a90258fc2.png)

![image](https://user-images.githubusercontent.com/6468571/177675529-46d43bff-1721-4371-9634-0a6c9c12f230.png)

Before pull requests may be implemented in the production environment, they must be evaluated and authorized by the
development team. Please open a new issue with the appropriate subject title to discuss the modifications you want to
make to the document.

Please make every effort to keep tests current in order to minimize the chance of wrong interpretation of results. We
appreciate all of your assistance and support.

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png)  
![image](https://user-images.githubusercontent.com/6468571/157206554-6f07c153-cca7-4679-a5c7-441f88580bd4.png) ![image](https://user-images.githubusercontent.com/6468571/157189069-baae9f9f-3576-4eea-9427-58a236210541.png)

![image](https://user-images.githubusercontent.com/6468571/177675430-db10d3c6-ca87-47e6-8327-8f9723a2d2ab.png)

- [x] Front-end
- [x] Combine Proxy Engines
- [x] Allow Multi-tent rendering
- [x] Build Caching

## Layer

- [x] Develop Multi-threading support (PHP Vanilla/Independent) + More (To be listed soon)
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

![image](https://user-images.githubusercontent.com/6468571/152181888-0b505d28-41c9-4d17-bf4d-9cb3b3411e67.png) ![image](https://user-images.githubusercontent.com/6468571/157206640-0ecdb227-cc7f-46a3-8b26-b0c76ac030a5.png) ![image](https://user-images.githubusercontent.com/6468571/157189108-1914f60d-d58e-400a-9ced-a5d09a5d81ad.png)

![image](https://user-images.githubusercontent.com/6468571/177675374-f3d170e8-fd9a-4e76-a9bf-5805bc2ce504.png)

[MIT Software License for .yxorP The PHP Web-Proxy by don Pablo](https://choosealicense.com/licenses/mit/) The
Massachusetts Institute of Technology (MIT) License, sometimes referred to as the "MIT License," is a permissive free
software license developed in the late 1980s and still in use at the Massachusetts Institute of Technology today.
Repurposing is confined to a limited number of scenarios due to the permissive nature of the program, which assures
compliance with licensing agreements. This license is straightforward and concise; it is a permissive license that just
requires copyright protection and prominent display of licensing information in the form of terms. They may be released
in a number of forms and without the source code because they are licensed works, adaptations, or large-scale works.

![img.png](https://user-images.githubusercontent.com/6468571/157201823-d408f32b-44e7-4cd5-bd5f-6e14ac741b93.png)

***

# yxorP Documentation

## Namespaces

### \

#### Classes

| Class | Description |
|-------|-------------|
| [`Attribute`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Attribute.md) | |
| [`CLI`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/CLI.md) | This file is part of the Cockpit project.|
| [`ComposerAutoloaderInit0fc67c8c6d14d2081ce037f8348a35e1`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ComposerAutoloaderInit0fc67c8c6d14d2081ce037f8348a35e1.md) | |
| [`ContainerArray`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ContainerArray.md) | This file is part of the Cockpit project.|
| [`DataCollection`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/DataCollection.md) | This file is part of the Cockpit project.|
| [`DotEnv`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/DotEnv.md) | This file is part of the Cockpit project.|
| [`FileStorage`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/FileStorage.md) | |
| [`JsonException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/JsonException.md) | |
| [`Lexy`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lexy.md) | Lexy class. Simple on the fly template parser class|
| [`LiteDB`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LiteDB.md) | This file is part of the Cockpit project.|
| [`LiteDBQuery`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LiteDBQuery.md) | |
| [`Mailer`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Mailer.md) | |
| [`Mailer_Message`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Mailer_Message.md) | |
| [`Pagination`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Pagination.md) | This file is part of the Cockpit project.|
| [`Parsedown`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Parsedown.md) | |
| [`ParsedownExtra`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ParsedownExtra.md) | |
| [`ParsedownExtraTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ParsedownExtraTest.md) | |
| [`PhpToken`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PhpToken.md) | |
| [`PriorityQueue`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PriorityQueue.md) | This file is part of the Cockpit project.|
| [`RedisLite`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/RedisLite.md) | RedisLite class.|
| [`SVGSanitizer`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/SVGSanitizer.md) | Class SVGSanitizer|
| [`Spyc`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Spyc.md) | The Simple PHP YAML Class.|
| [`UnhandledMatchError`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/UnhandledMatchError.md) | |
| [`ValueError`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ValueError.md) | |
| [`blockListPluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/blockListPluginAction.md) | |
| [`cookiePluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/cookiePluginAction.md) | |
| [`dailyMotionPluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/dailyMotionPluginAction.md) | |
| [`headerRewritePluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/headerRewritePluginAction.md) | |
| [`logPluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/logPluginAction.md) | |
| [`proxifyPluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/proxifyPluginAction.md) | |
| [`streamPluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/streamPluginAction.md) | |
| [`twitterPluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/twitterPluginAction.md) | |
| [`youtubePluginAction`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/youtubePluginAction.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Stringable`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Stringable.md) | |

### \Cockpit

#### Classes

| Class | Description |
|-------|-------------|
| [`AuthController`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/AuthController.md) | Class Controller|

### \Cockpit\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Accounts`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Accounts.md) | Class Controller|
| [`Auth`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Auth.md) | Class Controller|
| [`Base`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Base.md) | Class Controller|
| [`Media`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Media.md) | Class Controller|
| [`RestAdmin`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/RestAdmin.md) | Class Controller|
| [`RestApi`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/RestApi.md) | Class Controller|
| [`Settings`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Settings.md) | Class Controller|
| [`Utils`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Utils.md) | Class Controller|
| [`Webhooks`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Controller/Webhooks.md) | Class Controller|

### \Cockpit\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Helper/Admin.md) | Admin Helper class.|
| [`Async`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Helper/Async.md) | Async Helper class.|
| [`Csrf`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Helper/Csrf.md) | |
| [`Jobs`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Helper/Jobs.md) | |
| [`Revisions`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Helper/Revisions.md) | |
| [`Updater`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Cockpit/Helper/Updater.md) | Admin Helper class.|

### \ColinODell\Json5

#### Classes

| Class | Description |
|-------|-------------|
| [`Json5Decoder`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColinODell/Json5/Json5Decoder.md) | |
| [`SyntaxError`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColinODell/Json5/SyntaxError.md) | |

### \Collections\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Collections/Controller/Admin.md) | Class Controller|
| [`Import`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Collections/Controller/Import.md) | Class Controller|
| [`RestApi`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Collections/Controller/RestApi.md) | Class Controller|
| [`Trash`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Collections/Controller/Trash.md) | Class Controller|
| [`Utils`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Collections/Controller/Utils.md) | Class Controller|

### \ColorThief

#### Classes

| Class | Description |
|-------|-------------|
| [`CMap`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/CMap.md) | |
| [`ColorThief`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/ColorThief.md) | |
| [`PQueue`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/PQueue.md) | |
| [`VBox`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/VBox.md) | |

### \ColorThief\Image

#### Classes

| Class | Description |
|-------|-------------|
| [`ImageLoader`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/Image/ImageLoader.md) | |

### \ColorThief\Image\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`GDImageAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/Image/Adapter/GDImageAdapter.md) | Base adapter implementation to handle image manipulation.|
| [`GmagickImageAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/Image/Adapter/GmagickImageAdapter.md) | Base adapter implementation to handle image manipulation.|
| [`ImageAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/Image/Adapter/ImageAdapter.md) | Base adapter implementation to handle image manipulation.|
| [`ImagickImageAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/Image/Adapter/ImagickImageAdapter.md) | Base adapter implementation to handle image manipulation.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`IImageAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ColorThief/Image/Adapter/IImageAdapter.md) | Basic interface for all image adapters.|

### \Composer

#### Classes

| Class | Description |
|-------|-------------|
| [`InstalledVersions`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Composer/InstalledVersions.md) | This class is copied in every Composer installed project and available to all|

### \Composer\Autoload

#### Classes

| Class | Description |
|-------|-------------|
| [`ClassLoader`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Composer/Autoload/ClassLoader.md) | ClassLoader implements a PSR-0, PSR-4 and classmap class loader.|
| [`ComposerStaticInit0fc67c8c6d14d2081ce037f8348a35e1`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Composer/Autoload/ComposerStaticInit0fc67c8c6d14d2081ce037f8348a35e1.md) | |

### \Firebase\JWT

#### Classes

| Class | Description |
|-------|-------------|
| [`BeforeValidException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Firebase/JWT/BeforeValidException.md) | |
| [`ExpiredException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Firebase/JWT/ExpiredException.md) | |
| [`JWK`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Firebase/JWT/JWK.md) | JSON Web Key implementation, based on this spec:<br />https://tools.ietf.org/html/draft-ietf-jose-json-web-key-41|
| [`JWT`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Firebase/JWT/JWT.md) | JSON Web Token implementation, based on this spec:<br />https://tools.ietf.org/html/rfc7519|
| [`Key`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Firebase/JWT/Key.md) | |
| [`SignatureInvalidException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Firebase/JWT/SignatureInvalidException.md) | |

### \Forms\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Forms/Controller/Admin.md) | Class Controller|
| [`RestApi`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Forms/Controller/RestApi.md) | Class Controller|

### \Jean85

#### Classes

| Class | Description |
|-------|-------------|
| [`PrettyVersions`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Jean85/PrettyVersions.md) | |
| [`Version`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Jean85/Version.md) | |

### \Jean85\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`ProvidedPackageException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Jean85/Exception/ProvidedPackageException.md) | |
| [`ReplacedPackageException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Jean85/Exception/ReplacedPackageException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`VersionMissingExceptionInterface`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Jean85/Exception/VersionMissingExceptionInterface.md) | |

### \League\ColorExtractor

#### Classes

| Class | Description |
|-------|-------------|
| [`Color`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/ColorExtractor/Color.md) | |
| [`ColorExtractor`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/ColorExtractor/ColorExtractor.md) | |
| [`Palette`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/ColorExtractor/Palette.md) | |

### \League\Flysystem

#### Classes

| Class | Description |
|-------|-------------|
| [`Config`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Config.md) | |
| [`ConnectionErrorException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/ConnectionErrorException.md) | |
| [`ConnectionRuntimeException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/ConnectionRuntimeException.md) | |
| [`CorruptedPathDetected`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/CorruptedPathDetected.md) | |
| [`Directory`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Directory.md) | |
| [`Exception`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Exception.md) | |
| [`File`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/File.md) | |
| [`FileExistsException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/FileExistsException.md) | |
| [`FileNotFoundException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/FileNotFoundException.md) | |
| [`Filesystem`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Filesystem.md) | |
| [`FilesystemNotFoundException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/FilesystemNotFoundException.md) | Thrown when the MountManager cannot find a filesystem.|
| [`Handler`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Handler.md) | |
| [`InvalidRootException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/InvalidRootException.md) | |
| [`MountManager`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/MountManager.md) | Class MountManager.|
| [`NotSupportedException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/NotSupportedException.md) | |
| [`RootViolationException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/RootViolationException.md) | |
| [`SafeStorage`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/SafeStorage.md) | |
| [`UnreadableFileException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/UnreadableFileException.md) | |
| [`Util`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Util.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`AdapterInterface`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/AdapterInterface.md) | |
| [`FilesystemException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/FilesystemException.md) | |
| [`FilesystemInterface`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/FilesystemInterface.md) | |
| [`PluginInterface`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/PluginInterface.md) | |
| [`ReadInterface`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/ReadInterface.md) | |

### \League\Flysystem\Adapter

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/AbstractAdapter.md) | |
| [`AbstractFtpAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/AbstractFtpAdapter.md) | |
| [`Ftp`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Ftp.md) | |
| [`Ftpd`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Ftpd.md) | |
| [`Local`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Local.md) | |
| [`NullAdapter`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/NullAdapter.md) | |
| [`SynologyFtp`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/SynologyFtp.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CanOverwriteFiles`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/CanOverwriteFiles.md) | Adapters that implement this interface let the Filesystem know that files can be overwritten using the write<br />functions and don&#039;t need the update function to be called. This can help improve performance when asserts are disabled.|

### \League\Flysystem\Adapter\Polyfill

#### Traits

| Trait | Description |
|-------|-------------|
| [`NotSupportingVisibilityTrait`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Polyfill/NotSupportingVisibilityTrait.md) | |
| [`StreamedCopyTrait`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Polyfill/StreamedCopyTrait.md) | |
| [`StreamedReadingTrait`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Polyfill/StreamedReadingTrait.md) | A helper for adapters that only handle strings to provide read streams.|
| [`StreamedTrait`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Polyfill/StreamedTrait.md) | |
| [`StreamedWritingTrait`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Adapter/Polyfill/StreamedWritingTrait.md) | |

### \League\Flysystem\Plugin

#### Classes

| Class | Description |
|-------|-------------|
| [`AbstractPlugin`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/AbstractPlugin.md) | |
| [`EmptyDir`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/EmptyDir.md) | |
| [`ForcedCopy`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/ForcedCopy.md) | |
| [`ForcedRename`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/ForcedRename.md) | |
| [`GetWithMetadata`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/GetWithMetadata.md) | |
| [`ListFiles`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/ListFiles.md) | |
| [`ListPaths`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/ListPaths.md) | |
| [`ListWith`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/ListWith.md) | |
| [`PluginNotFoundException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/PluginNotFoundException.md) | |

#### Traits

| Trait | Description |
|-------|-------------|
| [`PluggableTrait`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Plugin/PluggableTrait.md) | |

### \League\Flysystem\Util

#### Classes

| Class | Description |
|-------|-------------|
| [`StreamHasher`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/Flysystem/Util/StreamHasher.md) | |

### \League\MimeTypeDetection

#### Classes

| Class | Description |
|-------|-------------|
| [`EmptyExtensionToMimeTypeMap`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/MimeTypeDetection/EmptyExtensionToMimeTypeMap.md) | |
| [`ExtensionMimeTypeDetector`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/MimeTypeDetection/ExtensionMimeTypeDetector.md) | |
| [`FinfoMimeTypeDetector`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/MimeTypeDetection/FinfoMimeTypeDetector.md) | |
| [`GeneratedExtensionToMimeTypeMap`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/MimeTypeDetection/GeneratedExtensionToMimeTypeMap.md) | |
| [`OverridingExtensionToMimeTypeMap`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/MimeTypeDetection/OverridingExtensionToMimeTypeMap.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ExtensionToMimeTypeMap`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/MimeTypeDetection/ExtensionToMimeTypeMap.md) | |
| [`MimeTypeDetector`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/League/MimeTypeDetection/MimeTypeDetector.md) | |

### \Lime

#### Classes

| Class | Description |
|-------|-------------|
| [`App`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/App.md) | |
| [`AppAware`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/AppAware.md) | |
| [`Helper`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/Helper.md) | |
| [`Module`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/Module.md) | |
| [`Request`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/Request.md) | |
| [`Response`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/Response.md) | |

### \LimeExtra

#### Classes

| Class | Description |
|-------|-------------|
| [`App`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/App.md) | Class App|
| [`Controller`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Controller.md) | Class Controller|

### \LimeExtra\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`Assets`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Assets.md) | Assets class.|
| [`Cookie`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Cookie.md) | |
| [`FileObject`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/FileObject.md) | Use custom FileObject to prevent &quot;too many files open&quot; error|
| [`Filesystem`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Filesystem.md) | |
| [`I18n`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/I18n.md) | I18n class. Manage translations|
| [`Image`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Image.md) | |
| [`Img`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Img.md) | |
| [`Markdown`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Markdown.md) | Class Markdown|
| [`SimpleAcl`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/SimpleAcl.md) | Class SimpleAcl|
| [`Utils`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/Utils.md) | Class Utils|
| [`YAML`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/LimeExtra/Helper/YAML.md) | Class YAML|

### \Lime\Helper

#### Classes

| Class | Description |
|-------|-------------|
| [`Cache`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/Helper/Cache.md) | |
| [`Session`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Lime/Helper/Session.md) | |

### \MongoDB

#### Classes

| Class | Description |
|-------|-------------|
| [`BulkWriteResult`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/BulkWriteResult.md) | Result class for a bulk write operation.|
| [`ChangeStream`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/ChangeStream.md) | Iterator for a change stream.|
| [`Client`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Client.md) | |
| [`Collection`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Collection.md) | |
| [`Database`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Database.md) | |
| [`DeleteResult`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/DeleteResult.md) | Result class for a delete operation.|
| [`InsertManyResult`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/InsertManyResult.md) | Result class for a multi-document insert operation.|
| [`InsertOneResult`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/InsertOneResult.md) | Result class for a single-document insert operation.|
| [`MapReduceResult`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/MapReduceResult.md) | Result class for mapReduce command results.|
| [`UpdateResult`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/UpdateResult.md) | Result class for an update operation.|

### \MongoDB\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`BadMethodCallException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/BadMethodCallException.md) | |
| [`InvalidArgumentException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/InvalidArgumentException.md) | |
| [`ResumeTokenException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/ResumeTokenException.md) | |
| [`RuntimeException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/RuntimeException.md) | |
| [`UnexpectedValueException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/UnexpectedValueException.md) | |
| [`UnsupportedException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/UnsupportedException.md) | |

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`Exception`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Exception/Exception.md) | |

### \MongoDB\GridFS

#### Classes

| Class | Description |
|-------|-------------|
| [`Bucket`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/GridFS/Bucket.md) | Bucket provides a public API for interacting with the GridFS files and chunks<br />collections.|

### \MongoDB\GridFS\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`CorruptFileException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/GridFS/Exception/CorruptFileException.md) | |
| [`FileNotFoundException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/GridFS/Exception/FileNotFoundException.md) | |
| [`StreamException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/GridFS/Exception/StreamException.md) | |

### \MongoDB\Model

#### Classes

| Class | Description |
|-------|-------------|
| [`BSONArray`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/BSONArray.md) | Model class for a BSON array.|
| [`BSONDocument`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/BSONDocument.md) | Model class for a BSON document.|
| [`BSONIterator`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/BSONIterator.md) | Iterator for BSON documents.|
| [`CollectionInfo`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/CollectionInfo.md) | Collection information model class.|
| [`DatabaseInfo`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/DatabaseInfo.md) | Database information model class.|
| [`IndexInfo`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/IndexInfo.md) | Index information model class.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`CollectionInfoIterator`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/CollectionInfoIterator.md) | CollectionInfoIterator interface.|
| [`DatabaseInfoIterator`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/DatabaseInfoIterator.md) | DatabaseInfoIterator interface.|
| [`IndexInfoIterator`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Model/IndexInfoIterator.md) | IndexInfoIterator interface.|

### \MongoDB\Operation

#### Classes

| Class | Description |
|-------|-------------|
| [`Aggregate`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/Aggregate.md) | Operation for the aggregate command.|
| [`BulkWrite`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/BulkWrite.md) | Operation for executing multiple write operations.|
| [`Count`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/Count.md) | Operation for the count command.|
| [`CountDocuments`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/CountDocuments.md) | Operation for obtaining an exact count of documents in a collection|
| [`CreateCollection`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/CreateCollection.md) | Operation for the create command.|
| [`CreateIndexes`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/CreateIndexes.md) | Operation for the createIndexes command.|
| [`DatabaseCommand`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/DatabaseCommand.md) | Operation for executing a database command.|
| [`DeleteMany`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/DeleteMany.md) | Operation for deleting multiple document with the delete command.|
| [`DeleteOne`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/DeleteOne.md) | Operation for deleting a single document with the delete command.|
| [`Distinct`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/Distinct.md) | Operation for the distinct command.|
| [`DropCollection`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/DropCollection.md) | Operation for the drop command.|
| [`DropDatabase`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/DropDatabase.md) | Operation for the dropDatabase command.|
| [`DropIndexes`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/DropIndexes.md) | Operation for the dropIndexes command.|
| [`EstimatedDocumentCount`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/EstimatedDocumentCount.md) | Operation for obtaining an estimated count of documents in a collection|
| [`Explain`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/Explain.md) | Operation for the explain command.|
| [`Find`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/Find.md) | Operation for the find command.|
| [`FindOne`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/FindOne.md) | Operation for finding a single document with the find command.|
| [`FindOneAndDelete`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/FindOneAndDelete.md) | Operation for deleting a document with the findAndModify command.|
| [`FindOneAndReplace`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/FindOneAndReplace.md) | Operation for replacing a document with the findAndModify command.|
| [`FindOneAndUpdate`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/FindOneAndUpdate.md) | Operation for updating a document with the findAndModify command.|
| [`InsertMany`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/InsertMany.md) | Operation for inserting multiple documents with the insert command.|
| [`InsertOne`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/InsertOne.md) | Operation for inserting a single document with the insert command.|
| [`ListCollectionNames`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ListCollectionNames.md) | Operation for the listCollectionNames helper.|
| [`ListCollections`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ListCollections.md) | Operation for the listCollections command.|
| [`ListDatabaseNames`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ListDatabaseNames.md) | Operation for the ListDatabases command, returning only database names.|
| [`ListDatabases`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ListDatabases.md) | Operation for the ListDatabases command.|
| [`ListIndexes`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ListIndexes.md) | Operation for the listIndexes command.|
| [`MapReduce`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/MapReduce.md) | Operation for the mapReduce command.|
| [`ModifyCollection`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ModifyCollection.md) | Operation for the collMod command.|
| [`RenameCollection`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/RenameCollection.md) | Operation for the renameCollection command.|
| [`ReplaceOne`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/ReplaceOne.md) | Operation for replacing a single document with the update command.|
| [`UpdateMany`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/UpdateMany.md) | Operation for updating multiple documents with the update command.|
| [`UpdateOne`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/UpdateOne.md) | Operation for updating a single document with the update command.|
| [`Watch`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Operation/Watch.md) | Operation for creating a change stream with the aggregate command.|

### \MongoDB\Tests

#### Classes

| Class | Description |
|-------|-------------|
| [`ClientFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/ClientFunctionalTest.md) | Functional tests for the Client class.|
| [`ClientTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/ClientTest.md) | Unit tests for the Client class.|
| [`CommandObserver`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/CommandObserver.md) | Observes command documents using the driver&#039;s monitoring API.|
| [`DocumentationExamplesTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/DocumentationExamplesTest.md) | Documentation examples to be parsed for inclusion in the MongoDB manual.|
| [`FunctionalTestCase`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/FunctionalTestCase.md) | |
| [`FunctionsTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/FunctionsTest.md) | Unit tests for utility functions.|
| [`PedantryTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/PedantryTest.md) | Pedantic tests that have nothing to do with functional correctness.|
| [`TestCase`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/TestCase.md) | |

### \MongoDB\Tests\Collection

#### Classes

| Class | Description |
|-------|-------------|
| [`CollectionFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Collection/CollectionFunctionalTest.md) | Functional tests for the Collection class.|
| [`CrudSpecFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Collection/CrudSpecFunctionalTest.md) | CRUD spec functional tests.|
| [`FunctionalTestCase`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Collection/FunctionalTestCase.md) | Base class for Collection functional tests.|

### \MongoDB\Tests\Command

#### Classes

| Class | Description |
|-------|-------------|
| [`ListCollectionsTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Command/ListCollectionsTest.md) | |
| [`ListDatabasesTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Command/ListDatabasesTest.md) | |

### \MongoDB\Tests\Database

#### Classes

| Class | Description |
|-------|-------------|
| [`CollectionManagementFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Database/CollectionManagementFunctionalTest.md) | Functional tests for collection management methods.|
| [`DatabaseFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Database/DatabaseFunctionalTest.md) | Functional tests for the Database class.|
| [`FunctionalTestCase`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Database/FunctionalTestCase.md) | Base class for Database functional tests.|

### \MongoDB\Tests\GridFS

#### Classes

| Class | Description |
|-------|-------------|
| [`BucketFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/GridFS/BucketFunctionalTest.md) | Functional tests for the Bucket class.|
| [`FunctionalTestCase`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/GridFS/FunctionalTestCase.md) | Base class for GridFS functional tests.|
| [`ReadableStreamFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/GridFS/ReadableStreamFunctionalTest.md) | Functional tests for the internal ReadableStream class.|
| [`StreamWrapperFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/GridFS/StreamWrapperFunctionalTest.md) | Functional tests for the internal StreamWrapper class.|
| [`UnusableStream`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/GridFS/UnusableStream.md) | |
| [`WritableStreamFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/GridFS/WritableStreamFunctionalTest.md) | Functional tests for the internal WritableStream class.|

### \MongoDB\Tests\Model

#### Classes

| Class | Description |
|-------|-------------|
| [`BSONArrayTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Model/BSONArrayTest.md) | |
| [`BSONDocumentTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Model/BSONDocumentTest.md) | |
| [`BSONIteratorTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Model/BSONIteratorTest.md) | |
| [`CachingIteratorTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Model/CachingIteratorTest.md) | |
| [`ChangeStreamIteratorTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Model/ChangeStreamIteratorTest.md) | |
| [`CollectionInfoTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Model/CollectionInfoTest.md) | |
| [`DatabaseInfoTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Model/DatabaseInfoTest.md) | |
| [`IndexInfoFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Model/IndexInfoFunctionalTest.md) | |
| [`IndexInfoTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Model/IndexInfoTest.md) | |
| [`IndexInputTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Model/IndexInputTest.md) | |
| [`UncloneableObject`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Model/UncloneableObject.md) | This class is used by the BSONArray and BSONDocument clone tests.|

### \MongoDB\Tests\Operation

#### Classes

| Class | Description |
|-------|-------------|
| [`AggregateFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/AggregateFunctionalTest.md) | Base class for Operation functional tests.|
| [`AggregateTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/AggregateTest.md) | Base class for Operation unit tests.|
| [`BulkWriteFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/BulkWriteFunctionalTest.md) | Base class for Operation functional tests.|
| [`BulkWriteTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/BulkWriteTest.md) | Base class for Operation unit tests.|
| [`CountDocumentsFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/CountDocumentsFunctionalTest.md) | Base class for Operation functional tests.|
| [`CountDocumentsTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/CountDocumentsTest.md) | Base class for Operation unit tests.|
| [`CountFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/CountFunctionalTest.md) | Base class for Operation functional tests.|
| [`CountTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/CountTest.md) | Base class for Operation unit tests.|
| [`CreateCollectionFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/CreateCollectionFunctionalTest.md) | Base class for Operation functional tests.|
| [`CreateCollectionTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/CreateCollectionTest.md) | Base class for Operation unit tests.|
| [`CreateIndexesFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/CreateIndexesFunctionalTest.md) | Base class for Operation functional tests.|
| [`CreateIndexesTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/CreateIndexesTest.md) | Base class for Operation unit tests.|
| [`DatabaseCommandFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/DatabaseCommandFunctionalTest.md) | Base class for Operation functional tests.|
| [`DatabaseCommandTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/DatabaseCommandTest.md) | Base class for Operation unit tests.|
| [`DeleteFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/DeleteFunctionalTest.md) | Base class for Operation functional tests.|
| [`DeleteTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/DeleteTest.md) | Base class for Operation unit tests.|
| [`DistinctFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/DistinctFunctionalTest.md) | Base class for Operation functional tests.|
| [`DistinctTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/DistinctTest.md) | Base class for Operation unit tests.|
| [`DropCollectionFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/DropCollectionFunctionalTest.md) | Base class for Operation functional tests.|
| [`DropCollectionTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/DropCollectionTest.md) | Base class for Operation unit tests.|
| [`DropDatabaseFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/DropDatabaseFunctionalTest.md) | Base class for Operation functional tests.|
| [`DropDatabaseTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/DropDatabaseTest.md) | Base class for Operation unit tests.|
| [`DropIndexesFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/DropIndexesFunctionalTest.md) | Base class for Operation functional tests.|
| [`DropIndexesTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/DropIndexesTest.md) | Base class for Operation unit tests.|
| [`EstimatedDocumentCountTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/EstimatedDocumentCountTest.md) | Base class for Operation unit tests.|
| [`ExplainFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/ExplainFunctionalTest.md) | Base class for Operation functional tests.|
| [`ExplainTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/ExplainTest.md) | Base class for Operation unit tests.|
| [`FindAndModifyFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/FindAndModifyFunctionalTest.md) | Base class for Operation functional tests.|
| [`FindAndModifyTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/FindAndModifyTest.md) | Base class for Operation unit tests.|
| [`FindFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/FindFunctionalTest.md) | Base class for Operation functional tests.|
| [`FindOneAndDeleteTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/FindOneAndDeleteTest.md) | Base class for Operation unit tests.|
| [`FindOneAndReplaceTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/FindOneAndReplaceTest.md) | Base class for Operation unit tests.|
| [`FindOneAndUpdateTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/FindOneAndUpdateTest.md) | Base class for Operation unit tests.|
| [`FindOneFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/FindOneFunctionalTest.md) | Base class for Operation functional tests.|
| [`FindTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/FindTest.md) | Base class for Operation unit tests.|
| [`FunctionalTestCase`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/FunctionalTestCase.md) | Base class for Operation functional tests.|
| [`InsertManyFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/InsertManyFunctionalTest.md) | Base class for Operation functional tests.|
| [`InsertManyTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/InsertManyTest.md) | Base class for Operation unit tests.|
| [`InsertOneFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/InsertOneFunctionalTest.md) | Base class for Operation functional tests.|
| [`InsertOneTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/InsertOneTest.md) | Base class for Operation unit tests.|
| [`ListCollectionNamesFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/ListCollectionNamesFunctionalTest.md) | Base class for Operation functional tests.|
| [`ListCollectionsFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/ListCollectionsFunctionalTest.md) | Base class for Operation functional tests.|
| [`ListDatabaseNamesFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/ListDatabaseNamesFunctionalTest.md) | Base class for Operation functional tests.|
| [`ListDatabasesFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/ListDatabasesFunctionalTest.md) | Base class for Operation functional tests.|
| [`ListIndexesFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/ListIndexesFunctionalTest.md) | Base class for Operation functional tests.|
| [`ListIndexesTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/ListIndexesTest.md) | Base class for Operation unit tests.|
| [`MapReduceFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/MapReduceFunctionalTest.md) | Base class for Operation functional tests.|
| [`MapReduceTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/MapReduceTest.md) | Base class for Operation unit tests.|
| [`ModifyCollectionFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/ModifyCollectionFunctionalTest.md) | Base class for Operation functional tests.|
| [`ModifyCollectionTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/ModifyCollectionTest.md) | Base class for Operation unit tests.|
| [`RenameCollectionFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/RenameCollectionFunctionalTest.md) | Base class for Operation functional tests.|
| [`RenameCollectionTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/RenameCollectionTest.md) | Base class for Operation unit tests.|
| [`ReplaceOneTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/ReplaceOneTest.md) | Base class for Operation unit tests.|
| [`TestCase`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/TestCase.md) | Base class for Operation unit tests.|
| [`UpdateFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/UpdateFunctionalTest.md) | Base class for Operation functional tests.|
| [`UpdateManyTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/UpdateManyTest.md) | Base class for Operation unit tests.|
| [`UpdateOneTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/UpdateOneTest.md) | Base class for Operation unit tests.|
| [`UpdateTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/UpdateTest.md) | Base class for Operation unit tests.|
| [`WatchFunctionalTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/WatchFunctionalTest.md) | Base class for Operation functional tests.|
| [`WatchTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/Operation/WatchTest.md) | Although these are unit tests, we extend FunctionalTestCase because Watch is<br />constructed with a Manager instance.|

### \MongoDB\Tests\SpecTests

#### Classes

| Class | Description |
|-------|-------------|
| [`AtlasDataLakeSpecTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/AtlasDataLakeSpecTest.md) | Atlas Data Lake spec tests.|
| [`ChangeStreamsSpecTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/ChangeStreamsSpecTest.md) | Change Streams spec tests.|
| [`ClientSideEncryptionSpecTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/ClientSideEncryptionSpecTest.md) | Client-side encryption spec tests.|
| [`CommandExpectations`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/CommandExpectations.md) | Spec test CommandStartedEvent expectations.|
| [`CommandMonitoringSpecTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/CommandMonitoringSpecTest.md) | Command monitoring spec tests.|
| [`Context`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/Context.md) | Execution context for spec tests.|
| [`DocumentsMatchConstraint`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/DocumentsMatchConstraint.md) | Constraint that checks if one document matches another.|
| [`DocumentsMatchConstraintTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/DocumentsMatchConstraintTest.md) | |
| [`ErrorExpectation`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/ErrorExpectation.md) | Spec test operation error expectation.|
| [`FunctionalTestCase`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/FunctionalTestCase.md) | Base class for spec test runners.|
| [`Operation`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/Operation.md) | Spec test operation.|
| [`PrimaryStepDownSpecTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/PrimaryStepDownSpecTest.md) | Base class for spec test runners.|
| [`ReadWriteConcernSpecTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/ReadWriteConcernSpecTest.md) | Base class for spec test runners.|
| [`ResultExpectation`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/ResultExpectation.md) | Spec test operation result expectation.|
| [`RetryableReadsSpecTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/RetryableReadsSpecTest.md) | Retryable reads spec tests.|
| [`RetryableWritesSpecTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/RetryableWritesSpecTest.md) | Retryable writes spec tests.|
| [`TransactionsSpecTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/SpecTests/TransactionsSpecTest.md) | Transactions spec tests.|

### \MongoDB\Tests\UnifiedSpecTests

#### Classes

| Class | Description |
|-------|-------------|
| [`CollectionData`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/CollectionData.md) | |
| [`Context`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/Context.md) | Execution context for spec tests.|
| [`EntityMap`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/EntityMap.md) | |
| [`EventCollector`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/EventCollector.md) | EventCollector handles &quot;storeEventsAsEntities&quot; for client entities.|
| [`EventObserver`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/EventObserver.md) | EventObserver handles &quot;observeEvents&quot; for client entities and assertions for<br />&quot;expectEvents&quot; and special operations (e.g. assertSameLsidOnLastTwoCommands).|
| [`ExpectedError`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/ExpectedError.md) | |
| [`ExpectedResult`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/ExpectedResult.md) | |
| [`FailPointObserver`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/FailPointObserver.md) | |
| [`Loop`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/Loop.md) | |
| [`Operation`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/Operation.md) | |
| [`RunOnRequirement`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/RunOnRequirement.md) | |
| [`UnifiedSpecTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/UnifiedSpecTest.md) | Unified test format spec tests.|
| [`UnifiedTestCase`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/UnifiedTestCase.md) | Unified test case model class.|
| [`UnifiedTestRunner`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/UnifiedTestRunner.md) | Unified test runner.|
| [`Util`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/Util.md) | |

### \MongoDB\Tests\UnifiedSpecTests\Constraint

#### Classes

| Class | Description |
|-------|-------------|
| [`IsBsonType`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/Constraint/IsBsonType.md) | |
| [`IsBsonTypeTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/Constraint/IsBsonTypeTest.md) | |
| [`Matches`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/Constraint/Matches.md) | Constraint that checks if one value matches another.|
| [`MatchesTest`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/Constraint/MatchesTest.md) | |
| [`SerializableArray`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/Constraint/SerializableArray.md) | |
| [`SerializableObject`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoDB/Tests/UnifiedSpecTests/Constraint/SerializableObject.md) | |

### \MongoHybrid

#### Classes

| Class | Description |
|-------|-------------|
| [`Client`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoHybrid/Client.md) | |
| [`Mongo`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoHybrid/Mongo.md) | |
| [`MongoLite`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoHybrid/MongoLite.md) | |
| [`ResultSet`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoHybrid/ResultSet.md) | |

### \MongoLite

#### Classes

| Class | Description |
|-------|-------------|
| [`Client`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoLite/Client.md) | Client object.|
| [`Collection`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoLite/Collection.md) | Collection object.|
| [`Cursor`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoLite/Cursor.md) | Cursor object.|
| [`Database`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoLite/Database.md) | Database object.|
| [`UtilArrayQuery`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/MongoLite/UtilArrayQuery.md) | |

### \PHPMailer\PHPMailer

#### Classes

| Class | Description |
|-------|-------------|
| [`Exception`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PHPMailer/PHPMailer/Exception.md) | PHPMailer exception handler.|
| [`OAuth`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PHPMailer/PHPMailer/OAuth.md) | OAuth - OAuth2 authentication wrapper class.|
| [`PHPMailer`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PHPMailer/PHPMailer/PHPMailer.md) | PHPMailer - PHP email creation and transport class.|
| [`POP3`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PHPMailer/PHPMailer/POP3.md) | PHPMailer POP-Before-SMTP Authentication Class.|
| [`SMTP`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PHPMailer/PHPMailer/SMTP.md) | PHPMailer RFC821 SMTP email transport class.|

#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`OAuthTokenProvider`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/PHPMailer/PHPMailer/OAuthTokenProvider.md) | OAuthTokenProvider - OAuth2 token provider interface.|

### \SimpleStorage

#### Classes

| Class | Description |
|-------|-------------|
| [`Client`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/SimpleStorage/Client.md) | |

### \Singletons\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`Admin`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Singletons/Controller/Admin.md) | Class Controller|
| [`RestApi`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/Singletons/Controller/RestApi.md) | Class Controller|

### \ZipStream

#### Classes

| Class | Description |
|-------|-------------|
| [`Exception`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ZipStream/Exception.md) | This class is only for inheriting|
| [`ZipStream`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ZipStream/ZipStream.md) | ZipStream|

### \ZipStream\Exception

#### Classes

| Class | Description |
|-------|-------------|
| [`FileNotFoundException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ZipStream/Exception/FileNotFoundException.md) | This Exception gets invoked if a file wasn&#039;t found|
| [`FileNotReadableException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ZipStream/Exception/FileNotReadableException.md) | This Exception gets invoked if a file wasn&#039;t found|
| [`InvalidOptionException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ZipStream/Exception/InvalidOptionException.md) | This Exception gets invoked if an invalid parameter gets passed on as option|
| [`StreamNotReadableException`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/ZipStream/Exception/StreamNotReadableException.md) | This Exception gets invoked if fread() fails on a stream.|

### \claviska

#### Classes

| Class | Description |
|-------|-------------|
| [`SimpleImage`](https://github.com/4dboard/proxy-yxorp/tree/main/docs/classes/claviska/SimpleImage.md) | A PHP class that makes working with images as simple as possible.|

