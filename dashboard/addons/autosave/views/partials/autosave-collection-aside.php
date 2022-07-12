@render('autosave:views/partials/infoblock.php')
@render('autosave:views/partials/restore.php', ['type' => 'collection'])

<script>
  var $this = this;
  this.isReady = false;
  this.isUpdating = false;
  this.autosaved = null;
  this.autosavetime = null;

  this.on('mount', function() {
    if (this.entry._id) {
      $this.get();
    }
    this._entry = JSON.parse(JSON.stringify(this.entry));
    $this.isReady = true;
    App.$(this.root).on('submit', function(e) {
      $this.autosaved = false;
      $this.autosavetime = null;
    });
  });

  this.on('bindingupdated', function(data) {
    if (this.isReady && this.entry['_id'] && !this.isUpdating) {
      window.setTimeout(this.autosave, 2000);
      $this.isUpdating = true;
      $this.update();
    }
  });

  this.get = function() {
    App.callmodule('autosave:get', this.entry._id, 'access').then(function(data) {
      if (data.result && data.result.data && data.result.data._modified !== $this.entry._modified) {
        $this.autosaved = data.result;
      } else {
        $this.autosaved = null;
      }
      $this.isUpdating = false;
      $this.update();
    }).catch(function(e){
      App.ui.notify('Error during autosave retrieve operation', 'danger');
    });
  };

  this.autosave = function() {
    var autosaveData = {
       id: $this.entry._id,
       data: $this.entry,
       type: 'collection',
       name: $this.collection._id
    }
    App.callmodule('autosave:save', autosaveData, 'access').then(function(data) {
      $this.autosavetime = data.result.updated || null;
      $this._entry = JSON.parse(JSON.stringify($this.entry));
      $this.isUpdating = false;
      $this.update();
    }).catch(function(e){
      App.ui.notify('Error during autosave save operation', 'danger');
    });
  }

</script>
