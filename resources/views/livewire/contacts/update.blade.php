<h4 class="mt-5">Add new Contact</h4>
<input type="hidden" wire:model="selected_id">
<div class="form-group">
  <label for="">Name</label>
  <input wire:model="name" type="text" class="form-control">
</div>
<div class="form-group">
  <label for="">Phone</label>
  <input wire:model="phone" type="text" class="form-control">
</div>
<div class="form-group">
  <label for="">Address</label>
  <input wire:model="address" type="text" class="form-control">
</div>
<div class="form-group">
  <div class="btn btn-primary mb-5" wire:click="update()">
    <span class="fa fa-pencil-square-o"></span>
    UPDATE
  </div>
</div>