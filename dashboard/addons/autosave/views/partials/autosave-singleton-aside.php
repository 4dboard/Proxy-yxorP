@render('autosave:views/partials/infoblock.php')
@render('autosave:views/partials/restore.php', ['type' => 'singleton'])

<script>
  var $this = this;
  this.isReady = false;
  this.isUpdating = false;
  this.autosaved = false;
  this.autosavetime = null;

  this.on('mount', function() {
    $this.get();
    $this._data = JSON.parse(JSON.stringify(this.data));
    $this.isReady = true;
    App.$(this.root).on('submit', function(e) {
      $this.autosaved = false;
      $this.autosavetime = null;
    });
  });

  this.on('bindingupdated', function(data) {
    if (this.isReady && !this.isUpdating) {
      window.setTimeout(this.autosave, 2000);
      $this.isUpdating = true;
      $this.update();
    }
  });

  this.get = function() {
   App.callmodule('autosave:get', this.singleton._id, 'access').then(function(data) {
      $this.autosaved = data.result || null;
      $this.isUpdating = false;
      $this.update();
    }).catch(function(e){
      App.ui.notify('Error during autosave retrieve operation', 'danger');
    });
  };

  this.autosave = function() {
    var autosaveData = {
       id: $this.singleton._id,
       data: $this.data,
       type: 'singleton',
       name: $this.singleton.name
    }
    App.callmodule('autosave:save', autosaveData, 'access').then(function(data) {
      $this.autosavetime = data.result.updated || null;
      $this._data = JSON.parse(JSON.stringify($this.data));
      $this.isUpdating = false;
      $this.update();
    }).catch(function(e){
      App.ui.notify('Error during autosave save operation', 'danger');
    });
  }

</script>
