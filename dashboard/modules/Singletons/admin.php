<?php $app->on('admin.init', function () {
    if (!$this->module('yxorp')->getGroupRights('singletons') && !$this->module('singletons')->getSingletonsInGroup()) {
        $this->bind('/singletons/*', function () {
            return $this('admin')->denyRequest();
        });
        return;
    }
    $this->bindClass('Singletons\\Controller\\Admin', 'singletons');
    $active = strpos($this['route'], '/singletons') === 0;
    $this->helper('admin')->addMenuItem('modules', ['label' => 'Singletons', 'icon' => 'singletons:icon.svg', 'route' => '/singletons', 'active' => $active]);
    if ($active) {
        $this->helper('admin')->favicon = 'singletons:icon.svg';
    }
    $this->on('yxorp.search', function ($search, $list) {
        foreach ($this->module('singletons')->getSingletonsInGroup() as $singleton => $meta) {
            if (stripos($singleton, $search) !== false || stripos($meta['label'], $search) !== false) {
                $list[] = ['icon' => 'th', 'title' => $meta['label'] ? $meta['label'] : $meta['name'], 'url' => $this->routeUrl('/singletons/singleton/' . $meta['name'])];
            }
        }
    });
    $this->on('admin.dashboard.widgets', function ($widgets) {
        $singletons = $this->module('singletons')->getSingletonsInGroup();
        $widgets[] = ['name' => 'singleton', 'content' => $this->view('singletons:views/widgets/dashboard.php', compact('singletons')), 'area' => 'aside-right'];
    }, 100);
    $this->on('yxorp.webhook.events', function ($triggers) {
        foreach (['singleton.getData.after', 'singleton.getData.after.{$name}', 'singleton.remove', 'singleton.remove.{$name}', 'singleton.save.after', 'singleton.save.after.{$name}', 'singleton.save.before', 'singleton.save.before.{$name}', 'singleton.saveData.after', 'singleton.saveData.after.{$name}', 'singleton.saveData.before', 'singleton.saveData.before.{$name}',] as &$evt) {
            $triggers[] = $evt;
        }
    });
    $this->on('yxorp.assets.updatefile', function ($asset) {
        $id = $asset['_id'];
        $filter = ($this->storage->type == 'mongolite') ? function ($doc) use ($id) {
            return strpos(json_encode($doc), $id) !== false;
        } : ['$where' => "function() { return JSON.stringify(this).indexOf('{$id}') > -1; }"];
        $update = function (&$items) use ($asset, $id, &$update) {
            if (!is_array($items)) return $items;
            foreach ($items as $k => &$v) {
                if (!is_array($v)) continue;
                if (is_array($items[$k])) $items[$k] = $update($items[$k]);
                if (isset($v['_id']) && $v['_id'] == $id) $items[$k] = $asset;
            }
            return $items;
        };
        $singletons = $this->storage->find('singletons', ['filter' => $filter])->toArray();
        if (!count($singletons)) return;
        $singletons = $update($singletons);
        foreach ($singletons as $singleton) {
            $this->storage->save('singletons', $singleton);
        }
    });
});