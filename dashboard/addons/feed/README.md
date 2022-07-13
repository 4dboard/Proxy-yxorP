# Feed Addon for Yxorp

**draft/experimental** - I started enthusiastic, but I never found the time to finish this addon.

RSS Feeds for collections.

Public collections are available without an API key, if public feeds are allowed through config.

Copy this folder to `addons/Feed`.

## API

### endpoints

* `/api/feed` --> default feed
* `/api/feed/get/collectionname` --> collection feed
* `/api/feed/listFeeds` --> feed of all collections (json)
* `/api/feed/listFeeds/rss` --> feed of all collections (rss)

### get feed for collection

call `https://url/to/yxorp/feed/get/collectionname?token=xxtokenxx`

public: `https://url/to/yxorp/feed/get/collectionname`

output: RSS Feed

### list all feeds

call `https://url/to/yxorp/feed/listFeeds?token=xxtokenxx`

public: `https://url/to/yxorp/feed/listFeeds`

output: json with all available feeds

```json
{
    "dates": {
        "name": "dates",
        "label": "Termine",
        "_id": "dates5b29154a804d0",
        "description": "",
        "url": "https://example.com/yxorp/api/feed/get/dates"
    },
    "pages": {
        "name": "pages",
        "label": "Seiten",
        "_id": "pages5b191eb15c192",
        "description": "pages collection - nothing more",
        "url": "https://example.com/yxorp/api/feed/get/pages"
    }
}
```

call `https://url/to/yxorp/feed/listFeeds/rss?token=xxtokenxx`

public: `https://url/to/yxorp/feed/listFeeds/rss`

output: RSS Feed

## config

in `config/config.yaml`

```yaml
# Feed
feed:
    public    : true   # allow public feeds for public collections
    default   : pages  # yxorp/api/feed returns feed for default collection
    site_route: /test  # experimental custom urls for non-api-requests
```

## custom output

put a file in `config/feed/collectionname.php` with your custom code

## To do

* [ ] caching
* [ ] more generic views with `$xml = new DOMDocument('1.0', 'UTF-8');` ...
* [ ] maybe different rss/atom versions
* [ ] maybe GUI --> for now, config.yaml works fine
* [x] mime error if calling with Lime instead of API
    * Warning: Creating default object from empty value in E:\github\yxorp\addons\Feed\bootstrap.php on line 23
    * Workaround: `error_reporting(0);`
* [ ] ...
